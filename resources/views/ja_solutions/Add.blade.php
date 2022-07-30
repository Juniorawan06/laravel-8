@extends('myTemp')
@section('title', 'Add')
@section('mainarea')
<div class="container">
<h1 class="p-3" style="font-family: 'a Aksi Mosi' ;">Add Staff</h1>
<form method="POST">
    @csrf()
        <div class="row">
            <div class="col-6"><input type="text" class="form-control" name="staffName" placeholder="Username"></div>
            <div class="col-6"><input type="passward" class="form-control" name="staffPass" placeholder="*********"></div>
            <div class="col-12 p-3"><button type="submit" class="btn btn-primary" name="add">Add Staff</button></div>
        </div>
    </div>
</form>
@endsection