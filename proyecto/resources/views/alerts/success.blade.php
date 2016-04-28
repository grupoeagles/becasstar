@if(Session::has('message'))
    <div class="container alert alert-success alert-dismissible" role="alert">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	{{Session::get('message')}}
    </div>
@elseif(Session::has('message-error'))
	<div class="container alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{Session::get('message-error')}}
	</div>
	@endif