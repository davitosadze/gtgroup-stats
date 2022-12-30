<div class="tab-pane" id="personal-cars" aria-labelledby="personal-cars-tab" role="tabpanel">
    <!-- users edit media object start -->
    <div class="media mb-2">

        <div class="media-body mt-50">

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">პერსონალური მანქანის საწვავის ხარჯები</h4>
                        </div>

                        @foreach ($date->personal_expenses as $expense)
                            <div data-repeater-item>
                                <div class="row d-flex align-items-end">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="itemname">მანქანა</label>
                                            <input name="personal_cars[car_name]" disabled
                                                value="{{ $expense->car_name }}" type="text" class="form-control"
                                                id="itemname" aria-describedby="itemname" placeholder="კომპანია" />
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="itemname">საწვავის რაოდენობა</label>
                                            <input name="personal_cars[loaded_fuel]" disabled
                                                value="{{ $expense->loaded_fuel }}" type="text" class="form-control"
                                                id="itemname" aria-describedby="itemname" placeholder="რაოდენობა" />
                                        </div>
                                    </div>

                                </div>
                                <hr />
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
