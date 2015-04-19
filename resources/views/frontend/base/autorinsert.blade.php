@section('maincontent')	
<div class="col-md-8  content-var" id="insert-new">
	<h2 class="headings-gl">Unos novog pisca</h2>
	<form class="form-horizontal insert-form">
		<div class="form-group">
			<label for="authorname" class="col-sm-3 control-label">Ime i prezime pisca</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="authorname" placeholder="Ime i prezime autora">
			</div>
		</div>

		<div class="form-group">
			<label for="birthDate" class="col-sm-3 control-label">Godina rođenja</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="birthDate" placeholder="Unesite godinu (npr 1918)">
			</div>
		</div>
		<div class="form-group">
			<label for="deathDate" class="col-sm-3 control-label">Godina smrti</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="deathDate" placeholder="Unesite godinu (npr 1918)">
			</div>
		</div>
		<div class="form-group">
			<label for="wiki" class="col-sm-3 control-label">Autor na wikipediji</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="wiki" placeholder="Link">
			</div>
		</div>

		<div class="form-group">
			<label for="pic" class="col-sm-3 control-label">Slika autora</label>
			<div class="col-sm-9">
				<input type="file" class="form-control knj-input" id="pic" placeholder="Link">
			</div>
		</div>

		<div class="form-group">
			<label for="state" class="col-sm-3 control-label">Država porekla</label>
			<div class="col-sm-9">
				<select class="form-control knj-input" id="state">
					<option>Albanija</option>
					<option>Azerbejdžan</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="authdescr" class="col-sm-3 control-label">Kratka biografija</label>
			<div class="col-sm-9">
				<textarea id="authdescr" class="form-control knj-input non-resize" rows="10"></textarea>
			</div>
		</div>


		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default btn-lg black-btn pull-right">Unesi</button>
			</div>
		</div>
	</form>

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