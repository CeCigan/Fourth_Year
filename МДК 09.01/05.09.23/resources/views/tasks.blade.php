@extends('layouts.app')

@section('content')

<div class="card-body">
    @include('errors')

    <form action="{{url('tasks')}}" method="post" class = 'form-horizontal'>
        {{csrf_field()}}

        <div class="row">
            <div class="form-group">
                <label for="Task" class = 'col-sm-3 control-label'>Task</label>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="Task" class="col-sm-3 control-label">Task</label>
                    <div class="row">
                    <div class="col-sm-6">
                    </div>
                    </div>
                    <input type="text" name="name" id="task-name" class="form-control">
                    <div class="col-sm-6">
                    <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    Add task</button>
                    </div>
                    </div>
                    </div>
        </div>
    </form>
</div>