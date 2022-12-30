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

                    <p>ნამუშევარი დღეების რაოდენობა</p>
                    <p>გატანილი კუბის რაოდენობა</p>
                    <p>გატანილი რეისების რაოდენობა</p>

                    <hr>
                    @foreach ($excavators as $excavator)
                        <p>{{ $excavator->name_eng }}-ს ტრაქტორების გახარჯული საწვავის რაოდენობა</p>
                    @endforeach
                    <p>ტრაქტორების გახარჯული საწვავის რაოდენობა</p>
                    <p>მანქანების გახარჯული საწვავის რაოდენობა</p>

                    <hr>
                    <p> საწვავის ხარჯი ჯამში - ლიტრებში</p>
                    <p> საწვავის ხარჯი ჯამში - ლარებში</p>

                    <hr>
                    @foreach ($part_providers as $provider)
                        <p>{{ $provider->name_geo }} - შეძენილი ნაწილების ხარჯის ჯამი</p>
                    @endforeach
                    <hr>
                    @foreach ($personal_cars as $car)
                        <p>{{ $car->name }} - გახარჯული საწვავი ლარებში</p>
                        <p>{{ $car->name }} - გახარჯული საწვავი ლიტრებში</p>
                        <hr>
                    @endforeach
                    <hr>
                    <p>სხვა გაუთვალისწინებელი ხარჯი ლარებში</p>
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
