@section('maincontent')
			<div class="col-md-8  content-var" id="insert-new">
				<h2 class="headings-gl">Unos novog dela</h2>
				<form class="form-horizontal">
					<div class="form-group">
						<label for="authorname" class="col-sm-2 control-label">Autor</label>
						<div class="col-sm-10">
							<input type="text" class="form-control knj-input" id="authorname" placeholder="Ime i prezime autora">
						</div>
					</div>
					<div class="form-group">
						<label for="title" class="col-sm-2 control-label">Naslov</label>
						<div class="col-sm-10">
							<input type="text" class="form-control knj-input" id="title" placeholder="Naslov">
						</div>
					</div>
					<div class="form-group">
						<label for="titleotherm" class="col-sm-2 control-label">Deo drugog dela*</label>
						<div class="col-sm-10">
							<input type="text" class="form-control knj-input" id="titleotherm" placeholder="Naslov drugog dela">
						</div>
					</div>
					<p>
						*Ukoliko je delo koje unosite deo drugog dela (npr. pesma u zbirci pesama)
					</p>
					<div class="form-group">
						<label for="titleother" class="col-sm-2 control-label">Veza sa delom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control knj-input" id="titleother" placeholder="Naslov drugog dela">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-default btn-sm black-btn">Još</button>
						</div>
					</div>
					<div class="form-group">
						<label for="descr" class="col-sm-2 control-label">Opis</label>
						<div class="col-sm-10">
							<textarea id="descr" class="form-control knj-input" rows="10"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="year" class="col-sm-2 control-label">Godina izdanja</label>
						<div class="col-sm-10">
							<input type="text" class="form-control knj-input" id="year" placeholder="2000">
						</div>
					</div>
					<div class="form-group">
						<label for="year" class="col-sm-2 control-label">Književna forma</label>
						<div class="col-sm-10">
							<input type="text" class="form-control knj-input" id="year" placeholder="2000">
						</div>
					</div>
					<div class="form-group">
						<label for="year" class="col-sm-2 control-label">Književni pravac</label>
						<div class="col-sm-10">
							<input type="text" class="form-control knj-input" id="year" placeholder="2000">
						</div>
					</div>
					<div class="form-group">
						<label for="year" class="col-sm-2 control-label">Istorijske epohe</label>
						<div class="col-sm-10">
							<input type="text" class="form-control knj-input" id="year" placeholder="2000">
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