<section class="repeater-default form-control-repeater">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">თანამშრომლები</h4>
                </div>


                @foreach ($employers as $employer)
                    <div data-repeater-item>
                        <div class="row d-flex align-items-end">

                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    {{-- <label for="itemname">კომპანია</label> --}}
                                    <input disabled name="employer[{{ $employer->id }}]" value="{{ $employer->name }}"
                                        type="text" class="form-control" id="itemname" aria-describedby="itemname"
                                        placeholder="თანამშრომელი" />
                                </div>
                            </div>


                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="itemname">კი</label>
                                    <input name="employers[{{ $employer->id }}]" value="1" type="radio"
                                        class="form-control" id="itemname" aria-describedby="itemname" />
                                </div>
                            </div>


                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="itemname">არა</label>
                                    <input name="employers[{{ $employer->id }}]" value="0" type="radio"
                                        class="form-control" id="itemname" aria-describedby="itemname" />
                                </div>
                            </div>


                        </div>
                        <hr />
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
