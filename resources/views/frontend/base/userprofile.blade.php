@section('maincontent')
<div class="col-md-8 content-var" id="insert-new">
	<h2 class="headings-gl">Korisnički profil</h2>
	<!-- Slika -->
	<div class="col-md-4" id="profile-info">
		<img src="images/avatar.png">
		<h3>User_1</h3>
		<h4>Ime</h4>
		<h4>Prezime</h4>
	</div>
	<!-- forma za izmenu podataka -->
	<div class="col-md-8">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="epochname" class="col-sm-4 control-label">Email</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="epochname" placeholder="johndoe@example.com">
				</div>
			</div>



			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Unesi</button>
				</div>
			</div>
		</form>
		<h4>Izmena šifre</h4>
		<form class="form-horizontal">

			<div class="form-group">
				<label for="pass" class="col-sm-4 control-label">Stari password</label>
				<div class="col-sm-8">
					<input type="password" class="form-control" id="pass" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="pass2" class="col-sm-4 control-label">Novi password</label>
				<div class="col-sm-8">
					<input type="password" class="form-control" id="pass2" placeholder="">
				</div>
			</div>

			<div class="form-group">
				<label for="pass3" class="col-sm-4 control-label">Ponovite novi password</label>
				<div class="col-sm-8">
					<input type="password" class="form-control" id="pass3" placeholder="">
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Izmeni password</button>
				</div>
			</div>
		</form>
	</div>
</div>


<div class="col-md-4">
	<div class="col-md-12">
		<div class="panel rect-shape panel-list">
			<a href=""><div class="panel-heading headings-gl rect-shape hcolor3">Od istog pisca</div></a>
			<div class="panel-body pcolor3">
				<ul class="list-group">
					<a href=""><li class="list-group-item">Seobe</li></a>
					<a href=""><li class="list-group-item">Seobe II</li></a>
					<a href=""><li class="list-group-item">Roman o Londonu</li></a>
					<a href=""><li class="list-group-item">Kod Hiperborejaca</li></a>
					<a href=""><li class="list-group-item">Priče o muškom</li></a>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="col-md-12">
		<div class="panel rect-shape panel-list">
			<a href=""><div class="panel-heading headings-gl rect-shape hcolor4">Slična dela</div></a>
			<div class="panel-body pcolor4">
				<ul class="list-group">
					<a href=""><li class="list-group-item">Na Drini ćuprija</li></a>
					<a href=""><li class="list-group-item">Na Zapadu ništa novo</li></a>
					<a href=""><li class="list-group-item">Za kim zvona zvone</li></a>
					<a href=""><li class="list-group-item">Doživljaji dobrog vojnika Švejka</li></a>
					<a href=""><li class="list-group-item">Veliki Getsbi</li></a>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="col-md-12">
		<div class="panel rect-shape panel-list">
			<a href=""><div class="panel-heading headings-gl rect-shape hcolor1">Preporučujemo</div></a>
			<div class="panel-body pcolor1">
				<ul class="list-group">
					<a href=""><li class="list-group-item">Tihi Don</li></a>
					<a href=""><li class="list-group-item">Silmarilion</li></a>
					<a href=""><li class="list-group-item">Pisma prijatelju</li></a>
					<a href=""><li class="list-group-item">Nečista krv</li></a>
					<a href=""><li class="list-group-item">Kaputt</li></a>
				</ul>
			</div>
		</div>
	</div>
</div>
@stop