@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/pyetsori/create" class="btn btn-dark">Krijoni pyetsorin tuaj.</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">{{ __('Pyetsoret e mi') }}</div>
                    <ul class="list-group">
                        @foreach ($pyetsoret as $pyetsori)
                            <li class="list-group-item">
                                <a href="{{$pyetsori->path()}}">{{$pyetsori->title}}</a>                
                                <div class="mt-2">
                                    <small class="font-weight-bold">Share URL</small>
                                    <p>
                                        <a href="{{$pyetsori->publicPath()}}">
                                        {{$pyetsori->publicPath()}}
                                        </a>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                <div class="card-body">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
