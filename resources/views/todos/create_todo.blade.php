
@extends('layouts.app',['pageTitle' => 'Create Todo'])



@section('title')

Create Todo

@endsection

@section('content')
<div class="container">
  <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title float-left">Create Todo</h5>
                <h5 class="title float-right">
                </h5>
              </div>
              
              <div class="card-body">
                <form class="form" method="post" action="{{ route('todo.store') }}" autocomplete="off">
                    @csrf

                      <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="todo_date" id="todoId" class="form-control datetimepicker" placeholder="Enter date" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required>
                          @error('todo_date')
                    <small style="color: red; font-size: 14px;"> {{ $message }}</small>
                    @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter todo title" required>
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
                        <textarea type="text" name="description" class="form-control" placeholder="Enter description" rows="5"></textarea>
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