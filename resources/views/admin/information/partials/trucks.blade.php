<section class="repeater-default form-control-repeater">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">მანქანები</h4>
                </div>

                <div data-repeater-list="trucks">
                    <div data-repeater-item>
                        <div class="row d-flex align-items-end">
                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="itemname">ნომერი</label>
                                    <input name="trucks[truck_id]" type="text" class="form-control" id="itemname"
                                        aria-describedby="itemname" placeholder="ნომერი" />
                                </div>
                            </div>

                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="itemname">სმ დილით</label>
                                    <input name="trucks[cm_morning]" type="text" class="form-control" id="itemname"
                                        aria-describedby="itemname" placeholder="დილით" />
                                </div>
                            </div>

                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="itemname">სმ საღამოს</label>
                                    <input name="trucks[cm_evening]" type="text" class="form-control" id="itemname"
                                        aria-describedby="itemname" placeholder="საღამოს" />
                                </div>
                            </div>


                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="itemname">ლიტრი სმ-ში</label>
                                    <input name="trucks[liter_in_cm]" type="text" class="form-control" id="itemname"
                                        aria-describedby="itemname" placeholder="ლიტრი სმ-ში" />
                                </div>
                            </div>

                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="itemname">დატვირთული კუბი</label>
                                    <input name="trucks[loaded_cube]" type="text" class="form-control" id="itemname"
                                        aria-describedby="itemname" placeholder="კუბი" />
                                </div>
                            </div>

                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <label for="itemname">ჩასხმული საწვავი</label>
                                    <input name="trucks[loaded_fuel]" type="text" class="form-control" id="itemname"
                                        aria-describedby="itemname" placeholder="საწვავი" />
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
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                            <i data-feather="plus" class="mr-25"></i>
                            <span>ახალი მანქანა</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
