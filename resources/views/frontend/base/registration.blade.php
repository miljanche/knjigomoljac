@section('multibook')
<div class="col-md-8  content-var" id="insert-new">
	<h2 class="headings-gl">Registracija novog korisnika</h2>
	<form class="form-horizontal insert-form">
		<div class="form-group">
			<label for="epochname" class="col-sm-3 control-label">Korisničko ime</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="epochname" placeholder="">
			</div>
		</div>

		<div class="form-group">
			<label for="name" class="col-sm-3 control-label">Ime</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="name" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label for="lastname" class="col-sm-3 control-label">Prezime</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="lastname" placeholder="">
			</div>
		</div>

		<div class="form-group">
			<label for="pass" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-9">
				<input type="password" class="form-control knj-input" id="pass" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label for="pass2" class="col-sm-3 control-label">Ponovite password</label>
			<div class="col-sm-9">
				<input type="password" class="form-control knj-input" id="pass2" placeholder="">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-3 control-label">email Adresa</label>
			<div class="col-sm-9">
				<input type="email" class="form-control knj-input" id="lastname" placeholder="">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default black-btn pull-right">Registruj se</button>
			</div>
		</div>
	</form>

</div>
@stop