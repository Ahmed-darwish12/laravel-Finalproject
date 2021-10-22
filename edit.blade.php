@extends('layouts.app')

@section('content')

<h1 class="text-center text-info"> Edit File : {{$file->id }}</h1>
<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('file.update',$file->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >File title </label>
                    <input type="text"  value="{{$file->title }}" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label >File description </label>
                    <input type="text" value="{{$file->desc }}"name="desc" class="form-control">
                </div>
                <div class="form-group">
                    <label >Upload File : {{$file->mainFile }} </label>
                    <input type="file" name="mainFile" class="form-control">
                </div>
                <button class="btn btn-info"> Update File</button>
            </form>
        </div>
    </div>
</div>

@endsection