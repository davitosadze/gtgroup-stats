<div class="tab-pane" id="parts" aria-labelledby="parts-tab" role="tabpanel">
    <!-- users edit media object start -->
    <div class="media mb-2">

        <div class="media-body mt-50">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ნაწილები</h4>
                        </div>

                        @foreach ($date->parts as $part)
                            <div data-repeater-item>
                                <div class="row d-flex align-items-end">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="itemname">კომპანია</label>
                                            <input name="parts[provider]" disabled value="{{ $part->provider }}"
                                                type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="კომპანია" />
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="itemname">გადახდილი თანხა</label>
                                            <input name="parts[paid_amount]" disabled value="{{ $part->paid_amount }}"
                                                type="text" class="form-control" id="itemname"
                                                aria-describedby="itemname" placeholder="გადახდილი თანხა" />
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
