<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Date;
use App\Models\DistanceCube;
use App\Models\Employer;
use App\Models\EmployerInfo;
use App\Models\Excavator;
use App\Models\ExcavatorInfo;
use App\Models\OtherExpense;
use App\Models\PartProvider;
use App\Models\PartsInfo;
use App\Models\PersonalCar;
use App\Models\PersonalCarsInfo;
use App\Models\TruckInfo;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $dates = Date::all();
        return view('admin.information.index', compact('dates'));
    }

    public function create()
    {
        $excavators = Excavator::all();
        $providers = PartProvider::all();
        $personal_cars = PersonalCar::all();
        $employers = Employer::all();
        return view('admin.information.create', compact('excavators', 'providers', 'personal_cars', 'employers'));
    }

    public function show(Date $date)
    {
        $spent_fuel = $date->trucks()->sum('loaded_fuel') + $date->excavators()->sum('loaded_fuel') + $date->personal_expenses()->sum('loaded_fuel');
        $stats["spent_fuel"] = $spent_fuel;
        $stats["fuel_beginning_day"] = $date->fuel_beginning_day;
        $stats["purchased_fuel"] = $date->purchased_fuel;
        $stats["actual_fuel"] = $date->fuel_beginning_day - $spent_fuel;
        $excavators = Excavator::all();

        // return $stats;
        return view('admin.information.show', compact('date', 'excavators'));
    }

    public function store(Request $request)
    {

        $date = $request->date["date"];

        $checkDate = Date::whereDate('date', $date)->count();
        if ($checkDate != 0) {
            return redirect()->back()->with("error", "ასეთი თარიღი უკვე არსებობს");
        }
        Date::create([
            "date" => $date,
            "excavators_worked" => 1,
            "fuel_beginning_day" => $request->date["fuel_beginning_day"],
            "purchased_fuel" => $request->date["purchased_fuel"]
        ]);

        $distance = DistanceCube::create($request->distance_and_cubes);
        $distance->date = $date;
        $distance->save();


        foreach ($request->trucks as $truck) {
            $truckinfo = TruckInfo::create($truck);
            $truckinfo->date = $date;
            $truckinfo->save();
        }

        foreach ($request->excavators as $excavator) {
            $excavatorinfo = ExcavatorInfo::create($excavator);
            $excavatorinfo->date = $date;
            $excavatorinfo->save();
        }

        foreach ($request->employers as $employer_id => $present) {
            $employer = EmployerInfo::create([
                "employer_id" => $employer_id,
                'present' => $present,
                'date' => $date
            ]);
        }

        foreach ($request->parts as $part) {
            $partsinfo = PartsInfo::create($part);
            $partsinfo->date = $date;
            $partsinfo->save();
        }

        foreach ($request->personal_cars as $car) {
            $personalcar = PersonalCarsInfo::create($car);
            $personalcar->date = $date;
            $personalcar->save();
        }

        foreach ($request->other_expenses as $expense) {
            $expenseinfo = OtherExpense::create($expense);
            $expenseinfo->date = $date;
            $expenseinfo->save();
        }
    }

    public function delete(Date $date)
    {

        DistanceCube::whereDate("date", $date->date)->delete();
        OtherExpense::whereDate("date", $date->date)->delete();
        PersonalCarsInfo::whereDate("date", $date->date)->delete();
        PartsInfo::whereDate("date", $date->date)->delete();
        ExcavatorInfo::whereDate("date", $date->date)->delete();
        TruckInfo::whereDate("date", $date->date)->delete();

        $date->delete();
        return redirect()->back();
    }
}
