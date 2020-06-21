@extends('layouts.app')

@section('title', 'Home')

@section('content')
	<div class="container">
	    <div class="jumbotron">
	        <h1>{{ config('app.name') }}</h1>
	        <p>
	            {{ "Small description" }}
	        </p>
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-12">
			    <div class="card">
			    	<div class="card-header">
			    		Servicios que ofrecemos
			    	</div>
			    	<div class="card-body no-padding">
			    		<ul class="list-group list-group-flush">
			    			<li class="list-group-item">Asesoramiento financiero</li>
			    			<li class="list-group-item">Asesoramiento en criptoactivos</li>
			    			<li class="list-group-item">Protección contra la inflación</li>
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
