@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl">
            <h1>Edit Lease</h1>
            {!! Form::model($lease, ['route' => ['leases.update', $lease], 'method' => 'PUT']) !!}
            <div class="form-group">
                {{Form::label('adress', 'Adress')}}
                {{Form::text('adress', $lease->rentable->adress, ['class' => 'form-control', 'placeholer' => 'Adress', 'disabled']) }}
            </div>
            <div class="form-group">
                {{Form::label('date', 'Date')}}
                {{Form::date('date', $lease->rentable->date_of_hire, ['class' => 'form-control', 'placeholer' => 'Date', 'disabled']) }}
            </div>
            <div class="form-group">
                {{Form::label('start_time', 'Start Time')}}
                {{Form::time('start_time', $lease->start_time, ['class' => 'form-control', 'placeholer' => 'Start Time']) }}
            </div>
            <div class="form-group">
                {{Form::label('end_time', 'End Time')}}
                {{Form::time('end_time', $lease->end_time, ['class' => 'form-control', 'placeholer' => 'End Time']) }}
            </div>
            <div class="form-group">
                {{Form::label('price', 'Price/h')}}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">&euro;</span>
                    </div>
                    {{Form::text('price', $lease->rentable->price, ['class' => 'form-control', 'placeholer' => 'Date', 'disabled']) }}
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>

            </div>
            {{Form::submit('Save', [ 'class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
            {!! Form::open(['action' => ['LeaseController@destroy', $lease], 'method' => 'POST']) !!}
            @if (Auth::user()->role==="admin")
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
            @endif
        </div>
    </div>
</div>
@endsection
