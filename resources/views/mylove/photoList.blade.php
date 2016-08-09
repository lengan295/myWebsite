@foreach($photos as $photo)
<div class="col-xs-12 photo-list-item">
	<div class="col-xs-5">
		<img src="{{$photo->url}}" class="img-responsive">
	</div>
	<div class="col-xs-5">
		<p>{{$photo->caption}}</p>
	</div>
	<div class="col-xs-2">
		<span class="glyphicon glyphicon-pencil"></span>
		<a class="remove-photo" href="{{url('mylove/photo/delete?id='.$photo->id)}}">
			<span class="glyphicon glyphicon-remove"></span>
		</a>
	</div>
</div>
@endforeach