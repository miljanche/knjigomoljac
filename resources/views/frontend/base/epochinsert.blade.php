@section('maincontent')
<div class="col-md-8  content-var" id="insert-new">
	<h2 class="headings-gl">Unos nove epohe</h2>
	<form class="form-horizontal insert-form">
		<div class="form-group">
			<label for="epochname" class="col-sm-3 control-label">Naziv istorijske epohe</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="epochname" placeholder="Naziv istorijske epohe">
			</div>
		</div>

		<div class="form-group">
			<label for="startDate" class="col-sm-3 control-label">Početak istorijske epohe</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="startDate" placeholder="Unesite godinu (npr 1918)">
			</div>
		</div>
		<div class="form-group">
			<label for="endDate" class="col-sm-3 control-label">Kraj istorijske epohe</label>
			<div class="col-sm-9">
				<input type="text" class="form-control knj-input" id="endDate" placeholder="Unesite godinu (npr 1918)">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default black-btn pull-right">Unesi</button>
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