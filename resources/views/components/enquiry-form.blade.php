@php
$products = DB::table('products')->get();
@endphp
<h2>Form</h2>
@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif
{!! Form::open(['route'=>'enquiryForm.store']) !!}
@csrf
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>
<div class="form-group {{ $errors->has('product') ? 'has-error' : '' }}">
{!! Form::label('Product:') !!}
<select name="product" id="product" class="form-control">
    @foreach ($products as $product)
    <option value="{{$product->name}}">{{$product->name}}</option>
    @endforeach
</select>
<span class="text-danger">{{ $errors->first('product') }}</span>
</div>
<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>
<div class="form-group">
<button class="btn btn-success">Send Enquiry</button>
</div>
{!! Form::close() !!}