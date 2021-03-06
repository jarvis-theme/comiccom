<div class="container">
	<div class="inner-column row">
		<div class="col-lg-9 col-xs-12">
			<p>Silahkan Login untuk kemudahan melakukan checkout. Cepat dan Mudah dalam bertransaksi. Mudah untuk mengetahui status dan riwayat order kamu.</p>
			<br>
			<h2 class="title bold">Log in</h2>
			<hr><br>
			<form class="form-horizontal login" action="{{url('member/login')}}" method="post">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2">Email</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" name="email" placeholder="Email" value="{{Input::old('email')}}" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2">Password</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" name="password" placeholder="Password" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<small><a href="{{url('member/forget-password')}}">Lupa Password?</a></small>
					</div>
				</div>
				<div class="form-group">
					<div class="pull-left col-sm-2">
						<button type="submit" class="btn btn-success">Log in</button>
					</div>
					<div class="pull-right col-sm-4">
						<small>Belum punya akun?</small>
						<a href="{{url('member/create')}}" class="btn btn-info">Daftar Baru</a>
					</div>
				</div>
			</form>
			<br>
		</div>
		<div class="col-lg-3 col-xs-12">
			@foreach(vertical_banner() as $banners)
			<div id="adv-sidebar">
				{{HTML::image(banner_image_url($banners->gambar), 'Info Promo')}}
			</div>
			@endforeach
		</div>
	</div>
</div>