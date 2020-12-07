<div class="form-group">
	<label >{{$label}}</label>
	<textarea name="{{$name}}" class="form-control summernote{{$name}}">{!!$value!!}</textarea>
	@isset($help)
		<small id="emailHelp" class="form-text text-muted">{{$help}}</small>
	@endisset
</div>
@push("scripts")
	<script type="text/javascript">
		$(document).ready(function() {
			@isset($value)
				$('.summernote{{$name}}').summernote();
			@endisset
		});
	</script>
@endpush