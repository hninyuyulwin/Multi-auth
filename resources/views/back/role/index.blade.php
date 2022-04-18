@extends('back.master')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h4>Roles List</h4>
            <a href="/admin/managers" class="btn btn-sm btn-info float-right mr-0 float-right">Back</a>
            <hr>
                <table class="table table-striped table-hover">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    @foreach($roles as $role)
                    <tbody>
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection