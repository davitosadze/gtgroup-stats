<div class="tab-pane" id="other-expenses" aria-labelledby="other-expenses-tab" role="tabpanel">
    <!-- users edit media object start -->
    <div class="media mb-2">

        <div class="media-body mt-50">

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">სხვა ხარჯები</h4>
                        </div>
                        @foreach ($date->other_expenses as $expense)
                            <div data-repeater-item>
                                <div class="row d-flex align-items-end">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="itemname">ხარჯის სახელი</label>
                                            <input name="expenses[expense_name]" disabled
                                                value="{{ $expense->expense_name }}" type="text" class="form-control"
                                                id="itemname" aria-describedby="itemname"
                                                placeholder="ხარჯის სახელი" />
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="itemname">გადახდილი თანხა</label>
                                            <input name="expenses[paid_amount]" disabled
                                                value="{{ $expense->paid_amount }}" type="text" class="form-control"
                                                id="itemname" aria-describedby="itemname"
                                                placeholder="გადახდილი თანხა" />
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
