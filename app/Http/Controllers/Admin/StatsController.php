<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Excavator;
use App\Models\PartProvider;
use App\Models\PersonalCar;
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

        return view('admin.statistics', compact('from_date', 'to_date', 'excavators', 'part_providers', 'personal_cars'));
    }
}
