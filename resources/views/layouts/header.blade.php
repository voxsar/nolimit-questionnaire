<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<a class="navbar-brand" href="#">Nolimit</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{route('quizzes.index')}}">Appraisals</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('quizzes.create')}}">New Appraisal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('users.index')}}">Users</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('users.create')}}">New User</a>
			</li>
		</ul>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p class="mt-2">&nbsp;</p>
			<h1 class="mt-5">@stack('title')</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					@stack('breadcrumbs')
				</ol>
			</nav>
		</div>
	</div>
</div>