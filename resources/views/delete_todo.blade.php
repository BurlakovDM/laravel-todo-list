@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="font-size: 18px">
                <div class="card-header"><h4 class="p-0 m-0">Delete {{ $todo->title }}</h4></div>

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


                    <form method="POST" action="{{ route('todo.update', $todo->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="form-group row mt-2">
                            <div class="w-100">
                                Are you shure? {{ $todo->title }}
                            </div>
                        </div>


                        <div class="form-group row mt-2">
                            <div class="w-100">
                                <button type="submit" class="btn btn-danger">
                                    Do it!
                                </button>
                                <a href="{{ route('todo.index') }}" class="btn btn-success">Canle</a>
                            </div>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
