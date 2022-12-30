<div class="tab-pane " id="general" aria-labelledby="general-tab" role="tabpanel">
    <!-- users edit media object start -->
    <div class="media mb-2">

        <div class="media-body mt-50">

            <div class="row">

                <div class="col-md-2 col-12">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">თარიღი</label>
                        <input type="date" value="{{ $date->date }}" disabled name="date[date]"
                            id="basic-addon-name" class="form-control" placeholder="თარიღი" aria-label="Name"
                            aria-describedby="basic-addon-name" required />
                    </div>
                </div>


                <div class="col-md-3 col-12">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">ექსკავატორებმა იმუშავეს?</label>
                        <input type="checkbox" disabled @if ($date->excavators_worked) checked @endif
                            name="date[excavators_worked]" id="basic-addon-name" class="form-control" placeholder="კმ"
                            aria-label="Name" aria-describedby="basic-addon-name" required />
                    </div>
                </div>

                <div class="col-md-3 col-12">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">საწვავის საწყისი ნაშთი</label>
                        <input type="text" disabled value="{{ $date->fuel_beginning_day }}"
                            name="date[fuel_beginning_day]" id="basic-addon-name" class="form-control"
                            placeholder="საწვავის საწყისი ნაშთი" aria-label="Name" aria-describedby="basic-addon-name"
                            required />
                    </div>
                </div>


                <div class="col-md-3 col-12">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">შესყიდული საწვავი - ლიტრი</label>
                        <input type="text" name="date[purchased_fuel]" disabled value="{{ $date->purchased_fuel }}"
                            id="basic-addon-name" class="form-control" placeholder="შესყიდული საწვავი - ლიტრი"
                            aria-label="Name" aria-describedby="basic-addon-name" required />
                    </div>
                </div>

            </div>

            <div class="card-header">
                <h4 class="card-title">მანძილი და კუბის გადმოსარიცხი თანხა</h4>
            </div>
            <hr>
            <div class="row">

                <div class="col-md-2 col-12">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">კმ</label>
                        <input type="text" disabled value="{{ $date->distance->km }}" name="distance_and_cubes[km]"
                            id="basic-addon-name" class="form-control" placeholder="კმ" aria-label="Name"
                            aria-describedby="basic-addon-name" required />
                    </div>
                </div>

                <div class="col-md-2 col-12">

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">კუბის თანხა</label>
                        <input type="text" disabled value="{{ $date->distance->cube_price }}"
                            name="distance_and_cubes[cube_price]" id="basic-addon-name" class="form-control"
                            placeholder="კუბის თანხა" aria-label="Name" aria-describedby="basic-addon-name" required />
                    </div>
                </div>

                <div class="col-md-2 col-12">

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">საწვავის ფასი</label>
                        <input type="text" disabled value="{{ $date->distance->fuel_price }}"
                            name="distance_and_cubes[fuel_price]" id="basic-addon-name" class="form-control"
                            placeholder="საწვავის ფასი" aria-label="Name" aria-describedby="basic-addon-name"
                            required />
                    </div>
                </div>

                <div class="col-md-2 col-12">

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">დატვირთული კუბი</label>
                        <input type="text" disabled value="{{ $date->distance->loaded_cube }}"
                            name="distance_and_cubes[loaded_cube]" id="basic-addon-name" class="form-control"
                            placeholder="დატვირთული კუბი" aria-label="Name" aria-describedby="basic-addon-name"
                            required />
                    </div>
                </div>

                <div class="col-md-2 col-12">

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">რეისის ფასი 1</label>
                        <input type="text" disabled value="{{ $date->distance->road_price_1 }}"
                            name="distance_and_cubes[road_price_1]" id="basic-addon-name" class="form-control"
                            placeholder="რეისის ფასი 1" aria-label="Name" aria-describedby="basic-addon-name"
                            required />
                    </div>
                </div>

                <div class="col-md-2 col-12">
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">რეისის ფასი 2</label>
                        <input type="text" disabled value="{{ $date->distance->road_price_2 }}"
                            name="distance_and_cubes[road_price_2]" id="basic-addon-name" class="form-control"
                            placeholder="რეისის ფასი 2" aria-label="Name" aria-describedby="basic-addon-name"
                            required />
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
