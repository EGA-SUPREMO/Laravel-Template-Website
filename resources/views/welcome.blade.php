@extends('layouts.app')

@section('title', 'Home')

@section('content')
	<div class="container">
		@if(isset($message))
		    <div class="alert alert-danger" role="alert">
		    	<small class="text-danger">{{ $message }}</small>
		    </div>
	    @endif
	    <div class="jumbotron">
	        <h1>{{ config('app.name') }}</h1>
	        <p>
	            {{ __('welcome.small description') }}
	        </p>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
			    <div class="card">
			    	<div class="card-header">
			    		{{ __('welcome.card-header') }}
			    	</div>
			    	<div class="card-body no-padding">
			    		<ul class="list-group list-group-flush">
			    			@foreach(__('welcome.card-items') as $cardItem)
			    				<li class="list-group-item">{{ $cardItem }}</li>
			    			@endforeach
			    		</ul>
			    	</div>
			    </div>
			</div>
	    </div>
	    <br>
	    <div class="row">
	    	<x-partials.contact-us-form/>
	    </div>
    </div>
@endsection
