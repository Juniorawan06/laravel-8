@extends('myTemp')
@section('title', 'View')
@section('mainarea')
<div class="d-flex justify-content-between align-items-center">
    <h1 style="font-family: 'Rosalinda Berlinata'">Staff List</h1>
    <a href="ja_solutions/add" class="btn btn-primary">+ Add Staff</a>
</div>
<table class="table table-sm table-striped table-bordered table-dark table-hover table-responsive">
    <thead class="thead-dark">
        <tr>
            <th>Staff Id</td>
            <th>Staff Name</th>
            <th>Staff Pass</th>
            <th>Added On</th>
            <th>Updated On</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dt)
        <tr>
            <td>{{$dt['id']}}</td>
            <td>{{$dt['staffName']}}</td>
            <td>{{$dt['staffPass']}}</td>
            <td>{{$dt['created_at']}}</td>
            <td>{{$dt['updated_at']}}</td>
            <td>
                <a class="btn btn-success" href="/ja_solutions/edit/{{$dt['id']}}">Edit</a>
                <a class="btn btn-danger" href="/ja_solutions/delete/{{$dt['id']}}">Trash</a>
        </td>
            @endforeach
        </tr>
    </tbody>
</table>
@endsection