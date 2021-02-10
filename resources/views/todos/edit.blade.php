
@extends('layouts.app',['pageTitle' => 'Create Todo'])



@section('title')

Manage Todo

@endsection

@section('content')
<div class="container">
  <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title float-left">Manage Todo</h5>
                <h5 class="title float-right">
                </h5>
              </div>
              
              <div class="card-body">
                <form class="form" method="post" action="{{ route('todo.update') }}" autocomplete="off">
                    @csrf
                    <input type="hidden" name="id" value="{{$todo->id}}">
                      <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="todo_date" id="todoId" class="form-control datepicker" placeholder="Enter date"  data-provide="datepicker" data-date-format="dd/mm/yyyy"  value="{{\Carbon\Carbon::parse($todo->todo_date)->format('d/m/Y')}}"  required>
                          @error('todo_date')
                    <small style="color: red; font-size: 14px;"> {{ $message }}</small>
                    @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{$todo->title}}" placeholder="Enter todo title" required>
                          @error('title')
                    <small style="color: red; font-size: 14px;"> {{ $message }}</small>
                    @enderror
                      </div>
                    </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Status</label>
                       <select class="form-control" name="status">
                         <option value="{{$todo->status}}">{{$todo->status}}</option>
                         <option value="Completed">Completed</option>
                         <option value="Pending">Pending</option>
                       </select>
                          @error('title')
                    <small style="color: red; font-size: 14px;"> {{ $message }}</small>
                    @enderror
                      </div>
                    </div>
                  </div>
              
                   
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Todo Details</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Enter description" rows="5">{{$todo->description}}</textarea>
                          @error('description')
                    <small style="color: red; font-size: 14px;"> {{ $message }}</small>
                    @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                       <div class="card-footer text-center mb-20">
                        <button type="submit" class="btn btn-round btn-lg btn-lg-pd btn-primary">{{ _('Save') }}</button>
                    </div>
                       
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
         
        </div>
      </div>
</div>
@endsection


@section('scripts')


@endsection