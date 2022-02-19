@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="font-size: 18px">
                <div class="card-header"><h4 class="p-0 m-0">{{ __('To-Do List') }}</h4></div>

                <h5 class="cart-header px-2  mt-2 text-center">
                    <a href="{{ route('todo.create') }}" class="btn btn-md btn-outline-primary  w-100">Add ToDo </a>
                </h5>

                <div class="card-body px-2 py-1">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                
                <table class="table table-hover table-borderless ">
                    <thead>
                        <th scope="col" >
                            ToDos
                        </th>
                        <th scope="col">

                        </th>
                    </thead>

                    <tbody>
                        @forelse($todos as $todo)
                        <tr style="border: 1px solid;">
                            @if($todo->completed)
                                <td><a href="{{ route('todo.edit', $todo->id) }}" style="text-decoration: none; color: black;"><s>{{ $todo->title }}</s></a></td>
                            @else
                                <td><a href="{{ route('todo.edit', $todo->id) }}" style="text-decoration: none; color: black;">{{ $todo->title }}</a></td>
                            @endif
                            
                            <td class="w-100 " style="float: right; text-align: right;">
                                <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-md btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('todo.show', $todo->id) }}" class="btn btn-md btn-outline-danger"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>No Todos!</td>
                        </tr>
                        @endforelse
                        
                    </tbody>

                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
