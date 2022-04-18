@extends('back.master')
@section('content')
    <div class="container my-2">
        <div class="row">
            <div class="col-md-12">
                <h3>Dashboard-One</h3>
                <button class="btn btn-outline-warning btn-sm my-2">Welcome {{Auth::user()->name}}</button>
                <ul>
                    <li>Role :                   
                        @foreach(Auth::user()->roles as $role)
                            <span class="badge badge-warning">{{$role->name}}</span>
                        @endforeach
                    </li> 
                </ul>
                <hr>
                <div class="my-4">
                    <a href="{{url('/admin/users')}}" class="btn btn-primary">User</a>
                    <a href="{{url('/admin/roles')}}" class="btn btn-success">Role</a>

                    <form action="{{route('logout')}}" method="post" class="my-3">
                        @csrf
                        <button onclick="return confirm('Are you sure want to logout?');" type="submit" class="btn btn-default float-right">Logout</button>
                    </form>
                </div>       
                <hr>
                
                @foreach(Auth::user()->roles as $role)
                    @if($role->name == 'Manager')
                        <a href="/admin/managers" class="btn btn-link btn-outline-success">
                            Go to Dashboard One?
                        </a>
                    @elseif($role->name == 'Supervisor')
                        <a href="/admin/supervisors" class="btn btn-link btn-outline-success">
                            Go to Dashboard One?
                        </a>
                    @elseif($role->name == 'Staff')
                        <a href="/admin/staffs" class="btn btn-link btn-outline-info">Go to Dashboard Two?</a>
                    @elseif($role->name == 'User')
                        <a href="/admin/normalUser" class="btn btn-link btn-outline-danger">Go to  Dashboard Three?</a>
                    @endif  
                @endforeach       
            </div>
        </div>
    </div>
@endsection