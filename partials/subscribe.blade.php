<div id="newsletter_footer" class="col-sm-6">
	<h2 class="title">Newsletter</h2>
	<div class="col-xs-12 col-lg-8 pad0">
		<form class="fl" action="{{@$mailing->action}}" method="post" target="_blank" novalidate>
			<div class="input-group">
				<input type="text" class="form-control input-newsletter" id="newsletter mce-EMAIL" placeholder="Masukkan email anda" name="EMAIL" {{ @$mailing->action==''?'disabled="disabled"':'' }}>
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity:0.5"':'' }}>Subscribe</button>
				</span>
			</div>
			<!-- <input class="input-newsletter" type="text" placeholder="Masukkan email anda" name="EMAIL" class="input-medium required email" id="newsletter mce-EMAIL" {{ @$mailing->action==''?'disabled="disabled"':'' }} />
			<button type="submit" class="btn" {{ @$mailing->action==''?'disabled="disabled" style="opacity:0.5"':'' }}>Subscribe</button> -->
		</form>
	</div>
</div>