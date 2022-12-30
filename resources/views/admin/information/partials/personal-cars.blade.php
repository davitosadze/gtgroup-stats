<section class="repeater-default form-control-repeater">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">პერსონალური მანქანის საწვავის ხარჯები</h4>
                </div>

                <div data-repeater-list="personal_cars">
                    @foreach ($personal_cars as $car)
                        <div data-repeater-item>
                            <div class="row d-flex align-items-end">

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="itemname">მანქანა</label>
                                        <input name="personal_cars[car_name]" value="{{ $car->name }}" type="text"
                                            class="form-control" id="itemname" aria-describedby="itemname"
                                            placeholder="კომპანია" />
                                    </div>
                                </div>


                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="itemname">საწვავის რაოდენობა</label>
                                        <input name="personal_cars[loaded_fuel]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="რაოდენობა" />
                                    </div>
                                </div>



                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete
                                            type="button">
                                            <i data-feather="x" class="mr-25"></i>
                                            <span>წაშლა</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                            <i data-feather="plus" class="mr-25"></i>
                            <span>ახალი ხარჯი</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
