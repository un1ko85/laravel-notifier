@if (notifier_render()->notification())
   <div class="alert alert-{{notifier_render('level')}} alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
  		</button>
	  	<strong>{{ucfirst(notifier_render('level'))}}</strong> {{notifier_render('text')}}
	</div>
@endif