@extends('back.master')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h4>User List</h4>
            <a href="/admin/managers" class="btn btn-sm btn-success float-right mr-0">Back</a>
            <hr>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Role</th>
                            @foreach(Auth::user()->roles as $role)
                                @if($role->name == 'Manager')                                
                                    <th>Action</th>
                                @endif
                            @endforeach
                        </tr>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach($user->roles as $role)
                                   <span class="badge badge-primary">{{$role->name}}</span>
                                @endforeach
                            </td>
                            <td>
                            @foreach(Auth::user()->roles as $role)
                                @if($role->name == 'Manager')    
                                    <a href="/admin/users/{{$user->id}}/edit" class="btn btn-sm btn-outline-warning">Manage Role</a>
                                @endif
                            @endforeach
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection