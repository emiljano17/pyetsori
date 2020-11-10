@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Krijoni pyetjen e re.') }}</div>

                <div class="card-body">
                <form action="/pyetsori/{{ $pyetsori->id }}/pyetjet" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="pyetja">Titulli</label>
                            <input name="pyetja[pyetja]" type="text" class="form-control"
                            value="{{ old('pyetja.pyetja') }}" id="exampleInputEmail1" aria-describedby="pyetjaHelp" placeholder="Enter question">
                            <small id="pyetjaHelp" class="form-text text-muted">Vendosni nje pyetje te qarte.</small>
                            @error('pyetja.pyetja')
                            <small class="text-danger"> {{$message}} </small> 
                            @enderror
                        </div>  
                        <div class="form-group">
                            <fieldset>
                                <legend>Zgjedhjet</legend>
                                <small id="zgjedhjetHelp" class="form-text text-muted">Zgjedhjet ju japin nje ndihme te mire rreth pyetjeve.</small>
                                <div>
                                    <div class="form-group">
                                        <label for="pergjigja1">Zgjedhja 1</label>
                                        <input name="pergjigjet[][pergjigja]" type="text" value="{{ old('pergjigjet.0.pergjigja') }}" 
                                                class="form-control" id="pergjigja1" 
                                                aria-describedby="zgjidhjetHelp" 
                                                placeholder="Enter choice 1">
                                        @error('pergjigjet.0.pergjigja')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="pergjigja2">Zgjedhja 2</label>
                                        <input name="pergjigjet[][pergjigja]" type="text" value="{{ old('pergjigjet.1.pergjigja') }}"
                                                class="form-control" id="pergjigja2" 
                                                aria-describedby="zgjidhjetHelp" 
                                                placeholder="Enter choice 2">
                                        @error('pergjigjet.1.pergjigja')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="pergjigja3">Zgjedhja 3</label>
                                        <input name="pergjigjet[][pergjigja]" type="text" value="{{ old('pergjigjet.2.pergjigja') }}" 
                                                class="form-control" id="pergjigja3" 
                                                aria-describedby="zgjidhjetHelp" 
                                                placeholder="Enter choice 3">
                                        @error('pergjigjet.2.pergjigja')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="pergjigja4">Zgjedhja 4</label>
                                        <input name="pergjigjet[][pergjigja]" type="text" value="{{ old('pergjigjet.3.pergjigja') }}"
                                                class="form-control" id="pergjigja4" 
                                                aria-describedby="zgjidhjetHelp" 
                                                placeholder="Enter choice 4">
                                        @error('pergjigjet.3.pergjigja')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>  
                        <button type="submit" class="btn btn-primary">Shto pyetjen.</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
