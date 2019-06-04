@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        {!! Form::open(['method' => 'post', 'routes' => 'task']) !!}

            <!-- Task Name -->
            <div class="form-group">
                {!! Form::label('task-name', trans('tasks.lb_name'), [
                    'class'=> 'col-sm-3 control-label' 
                    ]) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', '', [
                        'id' => 'task-name',
                        'class' => 'form-control'
                    ]) !!}
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans('tasks.sb_add'), [
                        'class' => 'btn btn-default'
                    ]) !!}
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection
