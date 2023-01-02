<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Date;
use App\Models\Excavator;
use App\Models\PartProvider;
use App\Models\PersonalCar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index(Request $request)
    {

        $from_date = $request->get('from_date');
        $to_date = $request->get('to_date');

        $excavators = Excavator::all();
        $part_providers = PartProvider::all();
        $personal_cars = PersonalCar::all();

        $stats["days_count"] = Carbon::parse($from_date)->diffInDays($to_date) + 1;

        $date = Date::whereBetween('date', [$from_date, $to_date])->with(['distance', 'trucks', 'excavators', 'other_expenses', 'personal_expenses', 'parts'])->get();
        // return Date::whereBetween('date', [$from_date, $to_date])->get()->distance()->sum('id');
        // $date = Date::whereBetween('date', [$from_date, $to_date])->with(['distance', 'trucks', 'excavators', 'other_expenses', 'personal_expenses', 'parts'])->get();


        $loaded_fuel_excavators = 0;
        $loaded_fuel_trucks = 0;
        $total_other_expense = 0;
        foreach ($date as $item) {
            $loaded_fuel_excavator_each = $item->excavators()->sum('loaded_fuel');
            $loaded_fuel_excavators += $loaded_fuel_excavator_each;

            $loaded_fuel_trucks_each = $item->trucks()->sum('loaded_fuel');
            $loaded_fuel_trucks += $loaded_fuel_trucks_each;

            $total_other_expense += $item->other_expenses()->sum('paid_amount');
        }

        $stats["loaded_fuel_excavators"] = $loaded_fuel_excavators;
        $stats["loaded_fuel_trucks"] = $loaded_fuel_trucks;
        $stats["total_fuel_expense"] = $loaded_fuel_trucks + $loaded_fuel_excavators;
        $stats["total_fuel_expense_gel"] = ($loaded_fuel_trucks + $loaded_fuel_excavators) * 2;
        $stats["total_other_expense"] = $total_other_expense;

        return view('admin.statistics', compact('stats', 'from_date', 'to_date', 'excavators', 'part_providers', 'personal_cars'));
    }
}
