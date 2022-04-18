@extends('back.master')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <h4>Magage Role List</h4>
            <a href="/admin/managers" class="btn btn-sm btn-warning float-right mr-0">Back</a>
            <hr>
                <form action="{{url('admin/users/'.$users->id.'/update')}}" method="post">
                    @csrf
                    <h5>User name : </h5>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$users->name}}">
                    </div>
                    <h5 class="my-2">Role : </h5>
                    @foreach($roles as $role)
                        <div>
                            <input type="checkbox" name="role_ids[]" value="{{$role->id}}" id="label{{$role->id}}"
                            @foreach($users->roles as $userRole)
                                @if($userRole->name == $role->name)
                                    checked
                                @endif
                            @endforeach
                            >
                            <label for="label{{$role->id}}">{{$role->name}}</label>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary my-2">Add Role</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection