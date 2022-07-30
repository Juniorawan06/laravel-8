@extends('myTemp')
@section('title', 'Edit')
@section('mainarea')
<div class="container">
<h1 class="p-3">Edit Staff</h1>
<form method="POST" action="/ja_solutions/edit">
    @csrf()
        <div class="row">
            <input type="hidden" name="id" value="{{$data['id']}}">
            <div class="col-6"><input type="text" class="form-control" name="staffName" placeholder="Username" value="{{$data['staffName']}}"></div>
            <div class="col-6"><input type="passward" class="form-control" name="staffPass" placeholder="*********"  value="{{$data['staffPass']}}"></div>
            <div class="col-12 p-3"><button type="submit" class="btn btn-success" name="add">Update</button></div>
        </div>
    </div>
</form>
@endsection