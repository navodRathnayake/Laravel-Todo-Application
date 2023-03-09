@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg">
            <h1 class ="page-title">Todo Page</h1>
        </div>
    </div>
    <div class="col-lg-12">
        <form action="{{ route('todo.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <input class="form-control" type="text"  name="title" aria-label="readonly input example" >
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="clo-lg-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $key => $task)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $task->title }}</td>
                    <td>
                        @if ($task->done == 0)
                            <span class = "badge bg-warning">Not Completed</span>
                        @else
                            <span class = "badge bg-success">Completed</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('todo.delete',$task->id) }}" class = "btn btn-danger">Delete</a>
                        <a href="{{ route('todo.update',$task->id) }}" class = "btn btn-primary">Update</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection

@push('css')
    <style>
        .page-title{
            padding-top: 5vh;
            text-align: center;
            color: rgb(9, 36, 87);
        }
    </style>
@endpush