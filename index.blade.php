@extends('layouts.app')

@section('content')

<h1 class="text-center text-info"> Files List</h1>
<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <th> ID </th>
                    <th>Title</th>
                    <th colspan="3"> Action</th>
                </tr>
                @foreach ($files as $data)
                 <tr>
                 <td> {{$data->id}}</td>
                 <td> {{$data->title}}</td>
                 <td> <a href="{{ route('file.show', $data->id) }}"><i class="fas fa-eye" style="font-size: 25px;"></i></a> </td>
                <td><a href="{{ route('file.edit', $data->id)}}"> <i class="far fa-edit" style="font-size: 25px;"></i></a> </td>
                <td><a href="{{ route('file.destroy', $data->id)}}"> <i class="fas fa-trash-alt" style="font-size: 25px;"></i> </a></td>
                 </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection