@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <h4><b><em>Edit User</em></b></h4>
                            <div class="form-group col-md-3">
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{$user->email}}">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$user->name}}">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control"  name="designation" aria-describedby="emailHelp" value="{{$user->designation}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
