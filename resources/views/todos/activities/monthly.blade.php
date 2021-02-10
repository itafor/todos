
@extends('layouts.app',['pageTitle' => 'My Todos'])



@section('title')

My Todos

@endsection

@section('content')
<div class="container">
  <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title float-left">My Todo</h5>
                <h5 class="title float-right">
                </h5>
              </div>
              <div class="card-body">
                 
                  <div class="container">
                    <div class="row">

                            <div class="col-xl-6">
                                <div class="form-group dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                       Activities for this Month
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('activities.view', [$id=1]) }}">All activities</a>
                                        <a class="dropdown-item" href="{{ route('activities.view', [$id=2]) }}"> Today's Activities</a>
                                         <a class="dropdown-item" href="{{ route('activities.view', [$id=3]) }}"> Activities for this week</a>
                                       <!--  <a class="dropdown-item" href="{{ route('activities.view', [$id=4]) }}">Activities for this Month</a> -->
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6"></div>
                        </div>




                     <div class="row">
                       @if(count($todos) >=1)
                  @foreach($todos as $todo)
                   <div class="col-md-4" >
                    <a href="{{route('todo.show',[$todo->id])}}">
                    <div class="card todo_card" style="border: 1px solid black;">
                       <span id="todo_date">{{ strftime('%d/%b/%Y', strtotime($todo->todo_date)) }}</span>
                      <div class="card-body">
                        <h5 class="card-title">{{$todo->title}}</h5>
                        <p class="card-text"> {{ Str::limit($todo->description, 60) }}</p>
                      </div>
                     
                       <h3 id="todo_status" class="{{$todo->status =='Pending' ? 'text-danger' :'text-success'}}">
                        {{$todo->status}}</h3>
                       
                    </div>
                    </a>
                   </div>
              @endforeach
               </div>
                      {{ $todos->links() }}

              </div>
                  @else
                  <span>No todos found</span>
                  @endif
              </div>
            </div>
          </div>
         
        </div>
      </div>
</div>
@endsection


@section('scripts')


@endsection