
@extends('app')

@section('content')
<div class="container">
	<form role="form" method="POST" action="{{url('/mylove/photo/add')}}">
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <div class="form-group">
	    <label for="url">Photo's URL:</label>
	    <input type="text" class="form-control" id="url" name="url">
	  </div>
	  <div class="form-group">
	    <label for="caption">Caption:</label>
	    <input type="text" class="form-control" id="caption" name="caption">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
@endsection
