<section class="repeater-default form-control-repeater">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">სხვა ხარჯები</h4>
                </div>

                <div data-repeater-list="other_expenses">
                    <div data-repeater-item>
                        <div class="row d-flex align-items-end">

                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="itemname">ხარჯის სახელი</label>
                                    <input name="expenses[expense_name]" type="text" class="form-control"
                                        id="itemname" aria-describedby="itemname" placeholder="ხარჯის სახელი" />
                                </div>
                            </div>


                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="itemname">გადახდილი თანხა</label>
                                    <input name="expenses[paid_amount]" type="text" class="form-control"
                                        id="itemname" aria-describedby="itemname" placeholder="გადახდილი თანხა" />
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
                            <span>ახალი ხარჯი</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
