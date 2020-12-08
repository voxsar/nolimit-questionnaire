<div class="form-group">
	<label >{{$label}}</label>
	<input type="@isset($type){{$type}}@endisset" class="form-control" aria-describedby="emailHelp" value="@isset($value){{$value}}@endisset" name="{{$name}}" @isset($list)list="{{$list}}"@endisset
		@if(isset($disabled) && $disabled != null)disabled="{{$disabled}}"@endif>
	@isset($help)
		<small id="emailHelp" class="form-text text-muted">{{$help}}</small>
	@endisset
	<x-errors name="{{$name}}" />
</div>