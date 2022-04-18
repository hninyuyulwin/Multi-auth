@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Three') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-success btn-sm my-2">{{Auth::user()->name}}</button>
                    <ul>
                        <li>Role : 
                            @foreach(Auth::user()->roles as $role)
                                <span class="badge badge-primary">{{$role->name}}</span>
                            @endforeach
                        </li>
                    </ul>                      
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
                        <a href="/admin/normalUser" class="btn btn-outline-danger">Dashboard Three</a>
                    @endif  
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
