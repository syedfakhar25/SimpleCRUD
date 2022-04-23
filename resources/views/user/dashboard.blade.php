@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h2 align="center" style="color: #0d6efd">
                        <b><em>Welcome to User Dashboard</em></b>
                        <hr>
                    </h2>
                </div>
                <div class="col-md-12 mt-2">
                    <h5 align="center">
                        <b>Name: {{$user->name}}</b>
                        <hr>
                    </h5>
                </div>
                <div class="col-md-12 mt-2">
                    <h5 align="center">
                        <b>Email: {{$user->email}}</b>
                        <hr>
                    </h5>
                </div>
                <div class="col-md-12 mt-2">
                    <h5 align="center">
                        <b>Designation: {{$user->designation}}</b>
                        <hr>
                    </h5>
                </div>

            </div>
            <div class="row">

            </div>
        </div>
    </div>
@endsection
