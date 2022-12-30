<div class="tab-pane" id="trucks" aria-labelledby="trucks-tab" role="tabpanel">
    <!-- users edit media object start -->
    <div class="media mb-2">

        <div class="media-body mt-50">

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">მანქანები</h4>
                        </div>

                        @foreach ($date->trucks as $truck)
                            <div data-repeater-item>
                                <div class="row d-flex align-items-end">
                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">ნომერი</label>
                                            <input disabled value="{{ $truck->truck_id }}" name="trucks[truck_id]"
                                                type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="ნომერი" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">სმ დილით</label>
                                            <input name="trucks[cm_morning]" disabled value="{{ $truck->cm_morning }}"
                                                type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="დილით" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">სმ საღამოს</label>
                                            <input name="trucks[cm_evening]" disabled value="{{ $truck->cm_evening }}"
                                                type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="საღამოს" />
                                        </div>
                                    </div>


                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">ლიტრი სმ-ში</label>
                                            <input name="trucks[liter_in_cm]" disabled value="{{ $truck->liter_in_cm }}"
                                                type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="ლიტრი სმ-ში" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">დატვირთული კუბი</label>
                                            <input name="trucks[loaded_cube]" disabled value="{{ $truck->loaded_cube }}"
                                                type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="კუბი" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemname">ჩასხმული საწვავი</label>
                                            <input name="trucks[loaded_fuel]" disabled value="{{ $truck->loaded_fuel }}"
                                                type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="საწვავი" />
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
