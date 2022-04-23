@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <h4><b><em>Add new User</em></b></h4>
                            <div class="form-group col-md-3">
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="user_type" value="user" aria-describedby="emailHelp" style="display: none">
                                <input type="password" class="form-control" name="password" aria-describedby="emailHelp" placeholder="Enter Password">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control"  name="designation" aria-describedby="emailHelp" placeholder="Enter Designation">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <hr>
                @if (session('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert " role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">User Type</th>
                            <th scope="col">Designation</th>
                            <th scope="col" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1;?>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$count++}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->user_type}}</td>
                                <td>{{$user->designation}}</td>
                                <td colspan="2">
                                  <a href="{{ URL::to('users/' . $user->id . '/edit') }}"><i class="fa fa-pencil" style="color: green"> </i></a>
                                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn  text-danger" style="border-radius: 5px"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
