@extends('layouts.default')
@section('title', 'Dashboard - StudentLMS')
@section('content')
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Overview</li>
            </ol>
        </nav>
        <h1 class="h2">Dashboard</h1>
        <p>Welcome to Our Student Portal</p>
        <div class="row my-4">
            <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Students</h5>
                    <div class="card-body">
                        <h5 class="card-title">200,000</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">Courses</h5>
                    <div class="card-body">
                        <h5 class="card-title">20</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">Lecturers</h5>
                    <div class="card-body">
                        <h5 class="card-title">43</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">Departments</h5>
                    <div class="card-body">
                        <h5 class="card-title">4</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Latest Students</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Student</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Department</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <a href="#" class="btn btn-block btn-light">View all</a>
                    </div>
                </div>
            </div>
        </div>
        @include('components.copyright')
    </main>
@endsection
