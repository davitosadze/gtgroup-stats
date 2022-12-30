<section class="repeater-default form-control-repeater">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ექსკავატორები</h4>
                </div>

                <div data-repeater-list="excavators">
                    @foreach ($excavators as $excavator)
                        <div data-repeater-item>
                            <div class="row d-flex align-items-end">

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">ექსკავატორი</label>
                                        <input name="excavators[excavator_id]" value="{{ $excavator->name_eng }}"
                                            type="text" class="form-control" id="itemname"
                                            aria-describedby="itemname" placeholder="ექსკავატორი" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">ნამუშევარი საათი</label>
                                        <input name="trucks[worked_hours]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="ნამუშევარი საათი" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">საათის ფასი</label>
                                        <input name="trucks[hour_price]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="საათის ფასი" />
                                    </div>
                                </div>


                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">სმ ექსკავატორში</label>
                                        <input name="trucks[cm_current]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="სმ ექსკავატორში" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">სმ დილით</label>
                                        <input name="trucks[cm_morning]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="სმ დილით" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">სმ ჩასხმამდე</label>
                                        <input name="trucks[cm_before_load]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="სმ ჩასხმამდე" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">ჩასხმული საწვავი</label>
                                        <input name="trucks[loaded_fuel]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="ჩასხმული საწვავი" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">სმ უნდა იყოს</label>
                                        <input name="trucks[cm_after_load_expected]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="სმ უნდა იყოს" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">სმ არის</label>
                                        <input name="trucks[cm_after_load_actual]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="სმ უნდა იყოს" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12">
                                    <div class="form-group">
                                        <label for="itemname">სმ საღამოს</label>
                                        <input name="trucks[cm_evening]" type="text" class="form-control"
                                            id="itemname" aria-describedby="itemname" placeholder="სმ საღამოს" />
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
                            <span>ახალი ექსკავატორი</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
