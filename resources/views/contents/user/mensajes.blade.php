@extends('layouts.template.template')

@section('content')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$titulo}}</h6>
        </div>
        <br>
        @foreach ($errors->all() as $error)
			<p class = "alert alert-danger">{{ $error }}</p>
		@endforeach

		@if (session('status'))
			<div class = "alert alert-success">
				{{ session('status') }}
			</div>
		@endif
    </div>

@endsection
