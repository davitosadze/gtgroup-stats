@extends('layouts.front-layout')
@section('title', 'თანამშრომლის განახლება')
@section('content')

    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">თანამშრომლის განახლება</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('employers.update', $employer->id) }}" class="needs-validation"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">სახელი და გვარი</label>
                        <input type="text" name="name" id="basic-addon-name" class="form-control"
                            placeholder="სახელი და გვარი" value="{{ $employer->name }}" aria-label="Name"
                            aria-describedby="basic-addon-name" required />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter name.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">პოზიცია</label>
                        <input type="text" name="position" id="basic-addon-name" class="form-control"
                            placeholder="პოზიცია" value="{{ $employer->position }}" aria-label="Name"
                            aria-describedby="basic-addon-name" required />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter name.</div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">განახლება</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@section('js')
    @parent

@endsection

@endsection
