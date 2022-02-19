@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="font-size: 18px">
                <div class="card-header"><h4 class="p-0 m-0">Edit {{ $todo->title }}</h4></div>

                <h5 class="cart-header px-2  mt-2 text-center">
                    <a href="{{ route('todo.index') }}" class="btn btn-md btn-outline-primary  w-100"> <- Go Back</a>
                </h5>

                <div class="card-body py-1">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('todo.update',  $todo->id)}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="title" class="col-form-label text-md-right">Title</label>
                            
                            <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" 
                            name="title" value="{{ $todo->title }}" required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>   
                        
                        <div class="form-group row">
                            <label for="description" class="col-form-label text-md-right">Description</label>
                            
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('password') is-invalid @enderror"
                            autocomplete="description" value="{{ $todo->description }}">{{ $todo->description }}</textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> 

                        <div class="form-group row">
                            <div class="form-check">
                                @if ($todo->completed)
                                    <input class="form-check-input" type="checkbox" name="completed"
                                    id="completed" value="{{ $todo->completed }}" checked>
                                @else
                                    <input class="form-check-input" type="checkbox" name="completed"
                                    id="completed" value="{{ $todo->completed }}">
                                @endif

                                <label for="completed" class="form-check-label">
                                    Completed
                                </label>
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <div class="w-100">
                                <button type="submit" class="btn btn-success w-100">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
