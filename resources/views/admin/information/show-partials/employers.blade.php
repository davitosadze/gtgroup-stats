<div class="tab-pane" id="employers" aria-labelledby="employers-tab" role="tabpanel">
    <!-- users edit media object start -->
    <div class="media mb-2">

        <div class="media-body mt-50">

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">თანამშრომლები</h4>
                        </div>
                        @foreach ($date->employers as $employer)
                            <div data-repeater-item>
                                <div class="row d-flex align-items-end">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="itemname">თანამშრომელი</label>
                                            <input name="expenses[expense_name]" disabled
                                                value="{{ $employer->employer->name }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="თანამშრომელი" />
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="itemname">იმყოფებოდა ?</label>
                                            <input name="expenses[paid_amount]" disabled
                                                value="{{ $employer->present ? 'კი' : 'არა' }}" type="text"
                                                class="form-control" id="itemname" aria-describedby="itemname"
                                                placeholder="იმყოფებოდა?" />
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
