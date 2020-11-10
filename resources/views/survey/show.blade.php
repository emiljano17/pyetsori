@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h1>{{$pyetsori->title}}</h1>

        <form action="/surveys/{{$pyetsori->id}}-{{Str::slug($pyetsori->title)}}" method="POST">
            @csrf
            @foreach ($pyetsori->pyetjet as $key => $pyetje)
                <div class="card mt-4">
                <div class="card-header"><strong class="mr-1">{{$key + 1}}</strong>{{ $pyetje->pyetja }}</div>
                    <div class="card-body">
                        @error('responses.'.$key.'.pergjigje_id')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    <ul class="list-group">
                        @foreach ($pyetje->pergjigjet as $pergjigje )
                        <label for="answer{{$pergjigje->id}}">
                            <li class="list-group-item">
                                <input type="radio" name="responses[{{ $key }}][pergjigje_id]" id="pergjigje{{$pergjigje->id}}" 
                                       {{(old('responses.'.$key.'.pergjigje_id') == $pergjigje->id) ? 'checked' : ''}} 
                                       class="mr-2" value="{{$pergjigje->id}}">
                                    {{$pergjigje->pergjigja}}

                                <input type="hidden" name="responses[{{ $key }}][pyetja_id]" value="{{$pyetje->id}}">

                            </li>
                        </label>
                        @endforeach
                    </ul>
                    </div>
                </div>     
            @endforeach

            <div class="card mt-5">
                <div class="card-header">{{ __('Plotesoni te dhenat.') }}</div>

                <div class="card-body">
                        <div class="form-group">
                            <label for="emri">Emri juaj</label>
                            <input name="survey[emri]" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emriHelp" placeholder="Futni emrin tuaj...">
                            <small id="emriHelp" class="form-text text-muted">Pershendetje. Si quheni?</small>
                        </div>
                        @error('emri')
                            <small class="text-danger"> {{$message}} </small> 
                        @enderror

                        <div class="form-group">
                            <label for="email">Emaili juaj</label>
                            <input name="survey[email]" type="email" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Futni emailin tuaj...">
                            <small id="emailHelp" class="form-text text-muted">Cili eshte emaili juaj?</small>
                        </div>
                        @error('email')
                        <small class="text-danger"> {{$message}} </small> 
                        @enderror
                        <button class="btn btn-dark m-1" type="submit">Ploteso surveyn</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
