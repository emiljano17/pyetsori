@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Krijoni pyetsorin.') }}</div>

                <div class="card-body">
                    <form action="/pyetsori" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="title">Titulli</label>
                            <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="titleHelp" placeholder="Enter title">
                            <small id="titleHelp" class="form-text text-muted">Jepni nje titull qe terheq vemendje.</small>
                        </div>
                        @error('title')
                            <small class="text-danger"> {{$message}} </small> 
                        @enderror

                        <div class="form-group">
                            <label for="purpose">Qellimi</label>
                            <input name="purpose" type="purpose" class="form-control" id="exampleInputpurpose1" aria-describedby="purposeHelp" placeholder="Enter purpose">
                            <small id="purposeHelp" class="form-text text-muted">Qellimi i pyetjes.</small>
                        </div>
                        @error('purpose')
                        <small class="text-danger"> {{$message}} </small> 
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary">Ruaj pyetsorin.</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
