@extends('layouts.front-layout')
@section('title', 'თანამშრომლები')
@section('content')

    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">თანამშრომლები</h2>
                <a class="float-right btn btn-success" href="{{ route('employers.create') }}">დამატება</a>
            </div>
        </div>
    </div>


    <section id="ajax-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-datatable">
                        <table id="usersTable" class="datatables-ajax table">
                            <thead>
                                <tr>
                                    <th>სახელი და გვარი</th>
                                    <th>პოზიცია</th>
                                    <th>ცვლილება</th>
                                    <th>წაშლა</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employers as $employer)
                                    <tr>
                                        <td>{{ $employer->name }}</td>
                                        <td>{{ $employer->position }}</td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ route('employers.edit', $employer->id) }}">ცვლილება</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ route('employers.destroy', $employer->id) }}">წაშლა</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('js')
    @parent

    <script>
        $("#usersTable").DataTable();
    </script>
@endsection

@endsection
