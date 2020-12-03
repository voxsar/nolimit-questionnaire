<div class="form-group">
	<label >{{$label}}</label>
	<input type="{{$type}}" class="form-control" aria-describedby="emailHelp" value="{{$value}}" list="{{$name}}list" name="{{$name}}">
	@isset($help)
		<small id="emailHelp" class="form-text text-muted">{{$help}}</small>
	@endisset
</div>