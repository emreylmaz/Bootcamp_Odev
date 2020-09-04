@extends('layouts.admin-master')

@section('content')
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Users</h4>
                    <hr>
                    <thead>
                    <tr>
                        <th><i class="fa fa-user"></i> Name</th>
                        <th><i class="fa fa-user"></i> Username</th>
                        <th class="hidden-phone"><i class="fa fa-envelope"></i> E-Mail</th>
                        <th><i class="fa fa-calendar"></i> Created At</th>
                        <th><i class="fa fa-tag"></i> Position</th>
                        <th><i class=" fa fa-edit"></i> Edit</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->position}}</td>
                            <td>
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil" onclick="location.href='update/{{$user->id}}'"></i></button>
                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" onclick="location.href='/delete/{{$user->id}}'"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
