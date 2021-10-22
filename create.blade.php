@extends('layouts.app')

@section('content')

<h1 class="text-center text-info"> Add File</h1>
<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form action="{{ route("file.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >File title </label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label >File description </label>
                    <input type="text"name="desc" class="form-control">
                </div>
                <div class="form-group">
                    <label >Upload File </label>
                    <input type="file" name="mainFile" class="form-control">
                </div>
                <div class="form-group">
                    
                    <input type="hidden" value="{{Auth ::user()->id}}" name="userId" class="form-control">
                </div>
                <button class="btn btn-info"> Upload File</button>
            </form>
        </div>
    </div>
</div>

@endsection