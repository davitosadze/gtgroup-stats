@extends('layouts.front-layout')
@section('title', $date->date)
@section('content')

    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">User</h2>

            </div>
        </div>
    </div>

    <section class="app-user-edit">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="statistics-tab" data-toggle="tab"
                            href="#statistics" aria-controls="general" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">სტატისტიკა</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="general-tab" data-toggle="tab" href="#general"
                            aria-controls="general" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">ზოგადი</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="trucks-tab" data-toggle="tab" href="#trucks"
                            aria-controls="trucks" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">მანქანები</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="excavators-tab" data-toggle="tab"
                            href="#excavators" aria-controls="excavators" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">ექსკავატორები</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="excavators-tab" data-toggle="tab"
                            href="#employers" aria-controls="excavators" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">თანამშრომლები</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="parts-tab" data-toggle="tab" href="#parts"
                            aria-controls="parts" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">ნაწილები</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="personal-cars-tab" data-toggle="tab"
                            href="#personal-cars" aria-controls="personal-cars" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">პერსონალური მანქანები</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="other-expenses-tab" data-toggle="tab"
                            href="#other-expenses" aria-controls="other-expenses" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">სხვა ხარჯები</span>
                        </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <!-- Account Tab starts -->
                    @include('admin.information.show-partials.statistics')
                    @include('admin.information.show-partials.general')
                    @include('admin.information.show-partials.trucks')
                    @include('admin.information.show-partials.excavators')
                    @include('admin.information.show-partials.employers')
                    @include('admin.information.show-partials.other-expenses')
                    @include('admin.information.show-partials.personal-cars')
                    @include('admin.information.show-partials.parts')

                </div>

                <div class="col-md-4">
                    <form action="{{ route('information.delete', $date->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" name="submit" value="Delete" id="">
                    </form>
                </div>
                <!-- users edit account form ends -->
            </div>
            <!-- Account Tab ends -->


            <!-- Social Tab ends -->
        </div>
        </div>
        </div>
    </section>

@endsection
