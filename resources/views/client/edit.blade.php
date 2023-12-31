@extends('layouts.app')


@section('content')
<div class="pagetitle">
    <h1>Update Client</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
      </ol>
    </nav>
  </div>
    <section class="section">
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


{!! Form::model($Client, ['method' => 'PATCH','route' => ['system-setting.update', $Client->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Company Name:</strong>
            {!! Form::text('company_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>Tranding Name:</strong>
                {!! Form::text('tranding_name', null, array('placeholder' => 'Tranding Name','class' => 'form-control')) !!}
            </div>
        <div class="form-group">
            <strong>Client First Name:</strong>
            {!! Form::text('first_name', null, array('placeholder' => 'first name','class' => 'form-control')) !!}
          
        </div>
        <div class="form-group">
            <strong>Client Last Name:</strong>
            {!! Form::text('last_name', null, array('placeholder' => 'last name','class' => 'form-control')) !!}
          
        </div>
        <div class="form-group">
            <strong>Client Address:</strong>
            {!! Form::text('address', null, array('placeholder' => 'address','class' => 'form-control')) !!}
           
        </div>
        <div class="form-group">
            <strong>Client Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'email','class' => 'form-control')) !!}
       
        </div>
        <div class="form-group">
            <strong>Client Phone:</strong>
            {!! Form::text('phone', null, array('placeholder' => 'phone','class' => 'form-control')) !!}
       
        </div>
        <div class="form-group">
            <strong>Client Logo:</strong>
            {!! Form::file('logo', null, array('class' => 'form-control')) !!}
       
        </div>
    </div>
  
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

        </div>
    </section></div>
@endsection