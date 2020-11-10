@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $pyetsori->title }}</div>
                <div class="card-body d-flex justify-content-around">
                    <a class="btn btn-dark m-1" href="/pyetsori/{{$pyetsori->id}}/pyetjet/create">Shto pyetje per pyetsorin</a>
                    <a class="btn btn-success m-1" href="/surveys/{{$pyetsori->id}}-{{Str::slug($pyetsori->title)}}">Pergjigju pyetsorit</a>
                    <form action="/pyetsori/{{$pyetsori->id}}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button type="submit" class="btn btn-danger m-1">Fshi pyetsorin</button>
                    </form>
                </div>
            </div>
            @foreach ($pyetsori->pyetjet as $pyetja)
                <div class="card mt-4">
                    <div class="card-header">{{ $pyetja->pyetja }}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($pyetja->pergjigjet as $pergjigje )
                                <li class="list-group-item">{{$pergjigje->pergjigja}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form action="/pyetsori/{{$pyetsori->id}}/pyetjet/{{$pyetja->id}}" method="POST">
                            @method('DELETE')
                            @csrf 

                            <button type="submit" class="btn btn-small btn-outline-danger">Fshi pyetjen</button>
                        </form>
                    </div>
                </div>                
            @endforeach
        </div>
    </div>
</div>
@endsection
