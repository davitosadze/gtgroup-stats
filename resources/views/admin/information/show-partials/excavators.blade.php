<div class="tab-pane" id="excavators" aria-labelledby="excavators-tab" role="tabpanel">
    <!-- users edit media object start -->
    <div class="media mb-2">

        <div class="media-body mt-50">

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ექსკავატორები</h4>
                        </div>

                        @foreach ($date->excavators as $excavator)
                            <div data-repeater-item>
                                <div class="row d-flex align-items-end">

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">ექსკავატორი</label>
                                            <input name="excavators[excavator_id]" disabled
                                                value="{{ $excavator->excavator_id }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="ექსკავატორი" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">ნამუშევარი საათი</label>
                                            <input name="trucks[worked_hours]" disabled
                                                value="{{ $excavator->worked_hours }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="ნამუშევარი საათი" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">საათის ფასი</label>
                                            <input name="trucks[hour_price]" disabled
                                                value="{{ $excavator->hour_price }}" type="text" class="form-control"
                                                id="itemname" aria-describedby="itemname" placeholder="საათის ფასი" />
                                        </div>
                                    </div>


                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">სმ ექსკავატორში</label>
                                            <input name="trucks[cm_current]" disabled
                                                value="{{ $excavator->cm_current }}" type="text" class="form-control"
                                                id="itemname" aria-describedby="itemname"
                                                placeholder="სმ ექსკავატორში" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">სმ დილით</label>
                                            <input name="trucks[cm_morning]" disabled
                                                value="{{ $excavator->cm_morning }}" type="text" class="form-control"
                                                id="itemname" aria-describedby="itemname" placeholder="სმ დილით" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">სმ ჩასხმამდე</label>
                                            <input name="trucks[cm_before_load]" disabled
                                                value="{{ $excavator->cm_before_load }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="სმ ჩასხმამდე" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">ჩასხმული საწვავი</label>
                                            <input name="trucks[loaded_fuel]" disabled
                                                value="{{ $excavator->loaded_fuel }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="ჩასხმული საწვავი" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">სმ უნდა იყოს</label>
                                            <input name="trucks[cm_after_load_expected]" disabled
                                                value="{{ $excavator->cm_after_load_expected }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="სმ უნდა იყოს" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">სმ არის</label>
                                            <input name="trucks[cm_after_load_actual]" disabled
                                                value="{{ $excavator->cm_after_load_actual }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="სმ უნდა იყოს" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">სმ საღამოს</label>
                                            <input name="trucks[cm_evening]" disabled
                                                value="{{ $excavator->cm_evening }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="სმ საღამოს" />
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
