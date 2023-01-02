@extends('layouts.front-layout')
@section('title', 'სტატისტიკა')
@section('content')

    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">სტატისტიკა</h4>
            </div>
            <div class="card-body">
                <form method="GET" action="{{ route('stats.index', 1) }}" class="needs-validation"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    {{ $from_date }}

                    <div class="d-flex justify-content-between">

                        <div class="col-md-4 form-group">
                            <label for="fp-default">დან</label>
                            <input id="from_date" name="from_date" value="{{ $from_date }}" type="date"
                                id="fp-default" class="form-control flatpickr-basic" placeholder="1970-01-01" />

                        </div>

                        <div class="col-md-4 form-group">
                            <label for="fp-default">მდე</label>
                            <input id="to_date" name="to_date" value="{{ $to_date }}" type="date" id="fp-default"
                                class="form-control flatpickr-basic" placeholder="1970-01-01" />

                        </div>

                        <div class="col-md-4 form-group">
                            <button type="submit" class="btn btn-primary">განახლება</button>
                        </div>

                    </div>

                    <p>ნამუშევარი დღეების რაოდენობა - {{ $stats['days_count'] }}</p>
                    <p>გატანილი კუბის რაოდენობა </p>
                    <p>გატანილი რეისების რაოდენობა</p>

                    <hr>
                    @foreach ($excavators as $excavator)
                        <p>{{ $excavator->name_eng }}-ს ტრაქტორების გახარჯული საწვავის რაოდენობა</p>
                    @endforeach
                    <p>ტრაქტორების გახარჯული საწვავის რაოდენობა: {{ $stats['loaded_fuel_excavators'] }}</p>
                    <p>მანქანების გახარჯული საწვავის რაოდენობა: {{ $stats['loaded_fuel_trucks'] }}</p>

                    <hr>
                    <p> საწვავის ხარჯი ჯამში - ლიტრებში: {{ $stats['total_fuel_expense'] }}</p>
                    <p> საწვავის ხარჯი ჯამში - ლარებში: {{ $stats['total_fuel_expense_gel'] }}</p>

                    <hr>
                    @foreach ($part_providers as $provider)
                        <p>{{ $provider->name_geo }} - შეძენილი ნაწილების ხარჯის ჯამი:
                            {{ $provider->calculateExpense($from_date, $to_date) }}</p>
                    @endforeach
                    <hr>
                    @foreach ($personal_cars as $car)
                        <p>{{ $car->name }} - გახარჯული საწვავი ლარებში:
                            {{ $car->calculateFuelExpense($from_date, $to_date) / 2 }}</p>
                        <p>{{ $car->name }} - გახარჯული საწვავი ლიტრებში:
                            {{ $car->calculateFuelExpense($from_date, $to_date) }}</p>
                        <hr>
                    @endforeach
                    <hr>
                    <p>სხვა გაუთვალისწინებელი ხარჯი ლარებში: {{ $stats['total_other_expense'] }}</p>
                    <p>გადასარიცხი თანხა ტრაქტორებზე</p>
                    <hr>
                    @foreach ($excavators as $excavator)
                        <p>{{ $excavator->name_eng }}-ს საშუალო წვა საათში</p>
                        <p>{{ $excavator->name_eng }}-ს დაკლებული საწვავი</p>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@section('js')
    @parent

@endsection

@endsection
