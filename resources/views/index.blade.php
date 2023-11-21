@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản lý nhạc</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('NhacCuaTui.create')}}" class ="btn btn-primary float-end">thêm mới</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>id</th>
                        <th>artist</th>
                        <th>title</th>
                        <th>image</th>
                        <th>audio</th>
                        <th>Thao Tac</th>
                    </tr>
                </thead>
                <thead>
                    <tbody>
                        @foreach ($NhacCuaTui as $NCT)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$NCT->id}}</td>
                                <td>{{$NCT->artist}}</td>
                                <td>{{$NCT->title}}</td>
                                <td>{{$NCT->image}}</td>
                                <td>{{$NCT->audio}}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
    
@endsection