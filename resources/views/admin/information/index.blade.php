@extends('layouts.front-layout')
@section('title', 'Information')
@section('content')

    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">ინფორმაცია</h2>
                <a class="float-right btn btn-success" href="{{ route('information.create') }}">ინფორმაციის შეტანა</a>
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
                                    <th>თარიღი</th>
                                    <th>ჩვენება</th>
                                    <th>წაშლა</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dates as $date)
                                    <tr>
                                        <td>{{ $date->date }}</td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ route('information.show', $date->id) }}">ჩვენება</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger"
                                                href="{{ route('information.delete', $date->id) }}">წაშლა</a>
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
