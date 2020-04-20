@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl">
            <h1>User details</h1>
            {!! Form::model($user) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholer' => 'Name', 'disabled']) }}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::email('email', $user->email, ['class' => 'form-control', 'placeholer' => 'Email', 'disabled']) }}
            </div>
            <div class="form-group">
                {{Form::label('role', 'Role')}}
                {{Form::text('role', $user->role, ['class' => 'form-control', 'placeholer' => 'Role', 'disabled']) }}
            </div>
            <div class="form-group">
                {{Form::label('email_verified_at', 'Email verified at')}}
                {{Form::date('email_verified_at', $user->email_verified_at, ['class' => 'form-control', 'placeholer' => 'Email verified at', 'disabled']) }}
            </div>
            <div class="form-group">
                {{Form::label('created_at', 'Created at')}}
                {{Form::date('created_at', $user->created_at, ['class' => 'form-control', 'placeholer' => 'Created at', 'disabled']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection