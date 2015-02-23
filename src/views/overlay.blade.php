@if (notifier_render()->overlay())
   <div class="modal fade notify-overlay" id="notify-overlay">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">{{ucfirst(notifier_render('level'))}}</h4>
	            </div>
	            <div class="modal-body">
	                <p>{{notifier_render('text')}}</p>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	            </div>
	        </div>
	    </div>
	</div>
    <script>$('.notify-overlay').modal('show');</script>
@endif
