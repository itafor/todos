
@extends('layouts.app',['pageTitle' => 'My Todos'])



@section('title')

View Tod

@endsection

@section('content')
<div class="container">
  <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title float-left">My Todo - {{$todo->title}}</h5>
                <h5 class="title float-right">

                  Status : <span class="{{$todo->status =='Pending' ? 'text-danger' :'text-success'}}">{{$todo->status}}</span>
                    <a href="{{route('todo.destroy', [$todo->id])}}"  onclick="return confirm('Delete Todo?')">
                    <button class="btn-sm btn-danger">Delete</button>
                  </a>
                  <a href="{{route('todo.edit', [$todo->id])}}">
                    <button class="btn btn-primary btn-sm">Manage</button>
                  </a>
                </h5>
              </div>
              <div class="card-body">
                  <h5 class="card-title">{{ strftime('%d/%b/%Y', strtotime($todo->todo_date)) }}</h5>

                  <p>
                    {{$todo->description}}
                  </p>
              </div>
            </div>
          </div>
         
        </div>
      </div>
</div>
@endsection


@section('scripts')


@endsection