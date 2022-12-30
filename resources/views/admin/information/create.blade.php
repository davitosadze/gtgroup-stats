@extends('layouts.front-layout')
@section('title', 'Create Team Member')
@section('content')

    <div class="col-md-12 col-12">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Create Team Member</h4>
            </div> --}}
            <div class="card-body">
                <form method="POST" action="{{ route('information.store') }}" class="needs-validation"
                    enctype="multipart/form-data" novalidate>
                    @csrf

                    <hr>


                    <div class="row">

                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">თარიღი</label>
                                <input type="date" name="date[date]" id="basic-addon-name" class="form-control"
                                    placeholder="თარიღი" aria-label="Name" aria-describedby="basic-addon-name" required />
                            </div>
                        </div>


                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">ექსკავატორებმა იმუშავეს?</label>
                                <input type="checkbox" name="date[excavators_worked]" id="basic-addon-name"
                                    class="form-control" placeholder="კმ" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>

                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">საწვავის საწყისი ნაშთი</label>
                                <input type="text" name="date[fuel_beginning_day]" id="basic-addon-name"
                                    class="form-control" placeholder="საწვავის საწყისი ნაშთი" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>


                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">შესყიდული საწვავი - ლიტრი</label>
                                <input type="text" name="date[purchased_fuel]" id="basic-addon-name" class="form-control"
                                    placeholder="შესყიდული საწვავი - ლიტრი" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>

                    </div>

                    <hr>

                    <div class="card-header">
                        <h4 class="card-title">მანძილი და კუბის გადმოსარიცხი თანხა</h4>
                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">კმ</label>
                                <input type="text" name="distance_and_cubes[km]" id="basic-addon-name"
                                    class="form-control" placeholder="კმ" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>

                        <div class="col-md-2 col-12">

                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">კუბის თანხა</label>
                                <input type="text" name="distance_and_cubes[cube_price]" id="basic-addon-name"
                                    class="form-control" placeholder="კუბის თანხა" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>

                        <div class="col-md-2 col-12">

                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">საწვავის ფასი</label>
                                <input type="text" name="distance_and_cubes[fuel_price]" id="basic-addon-name"
                                    class="form-control" placeholder="საწვავის ფასი" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>

                        <div class="col-md-2 col-12">

                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">დატვირთული კუბი</label>
                                <input type="text" name="distance_and_cubes[loaded_cube]" id="basic-addon-name"
                                    class="form-control" placeholder="დატვირთული კუბი" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>

                        <div class="col-md-2 col-12">

                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">რეისის ფასი 1</label>
                                <input type="text" name="distance_and_cubes[road_price_1]" id="basic-addon-name"
                                    class="form-control" placeholder="რეისის ფასი 1" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>

                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <label class="form-label" for="basic-addon-name">რეისის ფასი 2</label>
                                <input type="text" name="distance_and_cubes[road_price_2]" id="basic-addon-name"
                                    class="form-control" placeholder="რეისის ფასი 2" aria-label="Name"
                                    aria-describedby="basic-addon-name" required />
                            </div>
                        </div>
                    </div>

                    <hr>


                    @include('admin.information.partials.trucks')
                    <hr>
                    @include('admin.information.partials.excavators')
                    <hr>
                    @include('admin.information.partials.employers')
                    <hr>
                    @include('admin.information.partials.parts')
                    <hr>
                    @include('admin.information.partials.personal-cars')
                    <hr>
                    @include('admin.information.partials.other-expenses')

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">დამატება</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@section('js')
    @parent
    <script>
        CKEDITOR.replace('member_description');
    </script>
@endsection

@endsection
