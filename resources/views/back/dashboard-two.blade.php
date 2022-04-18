@extends('back.master')
@section('content')
    <div class="container my-2">
        <div class="row">
            <div class="col-md-12">
                <h3>Dashboard-Two</h3>
                <button class="btn btn-outline-warning btn-sm my-2">Welcome {{Auth::user()->name}}</button>
                <ul>
                    <li>Role : 
                        @foreach(Auth::user()->roles as $role)
                            <span class="badge badge-success">{{$role->name}}</span> 
                        @endforeach
                    </li>
                </ul>
                <form action="{{route('logout')}}" method="post" class="my-3">
                    @csrf
                    <button class="btn btn-default" type="submit">Logout</button>
                </form>    
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