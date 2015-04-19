@section('maincontent')
<div class="col-md-8  content-var" id="publication-info">
	<h1 class="headings-gl">Dnevnik o Čarnojeviću</h1>
	<h3 class="headings-gl">Miloš Crnjanski</h3>
	<div class="col-md-8">
		
		<h4 class="genre-gl">Roman</h4>
		<p class="movement-gl">Književni pravci: <span>Ekspresionizam</span>,<span>Sumatraizam</span></p>
		<p class="epoch-gl">Epohe: <span>Prvi svetski rat</span>, <span>Izgubljena generacija</span>, <span>Početak 20. veka</span></p>
		<h4 class="synopsis-gl">Opis:</h4>
		<p>Dnevnik o Čarnojeviću nije ni novela, ni roman ni pesma, ni monodrama. To je prosto tekst, lirski tekst, tzv. moderne umetničke tehnologije, modernog postupka, i duhom i načinom. Odsustvo svake kompozicije; princip rasipanja utisaka, misli, slika, rasipanja građe jeste put do postizanja unutrašnje logike kazivanja. Ništa se tu, tako reći, ni sa čim ne podudara i ne povezuje, a celina ipak održava samu sebe. Dnevnik ima stalnu aktuelnost, stvaran je, kako to mogu biti samo duboko proživljena, misleća dela. Ovo delo je građeno isključivo na jednoj velikoj temi borbe za nacionalno oslobođenje. Ono što uslovljava stalno stvaralačko interesovanje za Dnevnik jeste slutnja da je taj tekst na tragu jednoj velikoj temi, uistinu sudbinskoj. Draž njegova je u tome što je sadržao u sebi nekoliko najvažnijih pitanja epohe, i što na njih nije dao nijedan odgovor. Draž je u toj iskrenosti, u tom nepristajanju na zabludu, u pameti da se ne uhvati na lepak. Jer pitanja postoje već pedeset i više godina, a pravog odgovora nema, i pored svih pokušaja. Dnevnik o Čarnojeviću je prosto prisutan, govori ono što može i koliko može, i traži sebi druga.</p>
	</div>
	<div class="col-md-4 characters-listed">
		<h4 class="characters-gl">Likovi</h4>
		<ul>
			<li>Marko Miljanić</li>
			<li>Goran Maksimović</li>
			<li>Stefan Petrović</li>
			<li>
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCharacter">
					Dodaj novog
				</button>
			</li>
		</ul>
	</div>

	<div class="col-md-12" id="review-tabs">
		<div class="col-md-12" id="sort-reviews">
			<form class="form-horizontal">
				<label for="type-sort" class="col-md-3 control-label">Sortiraj prema:</label>
				<div class="col-md-6">
					<select class="form-control knj-input" id="type-sort">
						<option>Datum</option>
						<option>Ocena</option>
						<option>Broj ocena</option>
					</select>
				</div>
				<button type="submit" class="btn btn-default pull-right">Sortiraj</button>
			</form>
		</div>

		<!-- Modal za unos novog lika -->
		



		<!-- Modal -->
		<div class="modal fade" id="addCharacter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Unesite novog lika:</h4>
					</div>
					<form class="form-horizontal">
						<div class="modal-body">
							<div class="form-group">
								<label for="nameCh" class="col-sm-3 control-label">Ime lika</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="nameCh" placeholder="">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
							<button type="submit" class="btn btn-primary">Unesi</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Kraj modala za unos novog lika -->



		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="#">Recenzije</a></li>
			<li role="presentation"><a href="#">Recenzije sa spojlerima</a></li>
			<li role="presentation"><a href="#">Likovi</a></li>
		</ul>
		
		<div id="review-holder">
			<div class="col-md-12">
				<button class="btn" id="btn-add-review" type="button" data-toggle="collapse" data-target="#add-new-review" aria-expanded="false" aria-controls="add-new-review">
					Dodaj recenziju
				</button>
				<div class="collapse" id="add-new-review">
					<form class="form-horizontal">
						<div class="form-group col-md-12">
							<label for="review-for" class="col-sm-3 control-label">Recenzija za:</label>
							<div class="col-sm-6">
								<select class="form-control knj-input" id="review-for">
									<option>Dnevnik o Čarnojeviću</option>
									<option>Miloš Crnjanski</option>
									<option>Marko</option>
									<option>Goran</option>
									<option>Stefan</option>
								</select>
							</div>
						</div>
						<div class="form-group col-md-12">
							<label for="spoiler">Ima spoiler?</label>
							<input type="checkbox" id="spoiler" value="1">
						</div>
						<div class="form-group col-md-12">
							<label for="new-review-text">Tekst recenzije</label>
							<textarea id="new-review-text" class="form-control knj-input non-resize" rows="10"></textarea>
							
						</div>
						
						<button type="submit" class="btn btn-default pull-right">Ostavi recenziju</button>
					</form>
				</div>

			</div>


			<div class="col-md-12 review-one">
				<div class="col-md-9">
					<h4>korisnik92</h4>
					<div>
						Kratak sadržaj - Dnevnik o Čarnojeviću odbijaju da štampaju u cjelini i predlažu piscu da izdvoji nekih pet tabaka iz ogromnog rukopisa. U hotelu "Pariz", Crnjanski nasumice odabira dijelove teksta. Ostalo spaljuje. Kasnije je Vinaver ispremetao poglavlja i knjiga je tako objavljena. Zbog toga, a i zbog činjenice da je ovaj roman lirski, ne može se govoriti o fabuli. Knjiga, ustvari, predstavlja splet razmišljanja glavnog junaka ili, možda, lirskog subjekta o mnogim motivima iz života
					</div>
				</div>


				<div class="col-md-3">
					<p class="text-center">21.12.2014. 14:27</p>
					<button class="btn btn-danger btn-xs btn-report">Prijavi</button>
					<div class="review-grade">
						3.7
					</div>
					<div class="put-grade text-center">
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</div>
				</div>

			</div>






			<div class="col-md-12 review-one">
				<div class="col-md-9">
					<h4>korisnik92</h4>
					<div>
						U ulozi nosioca ovih sudova (o čoveku i svetu), pojavljuje se po pravilu, lik glavnog junaka. Glavni junak 'Dnevnika' zamišljen je kao neko ko se 'oslobodio i odrodio od svega', kao neko koga 'ništa više ne vezuje ni za dobro ni za zlo'. Ovom junaku život liči na komediju: 'sve sam čekao da će još nešto doći u životu, da ovo dosad beše samo komedija.
					</div>
				</div>


				<div class="col-md-3">
					<p class="text-center">21.12.2014. 14:27</p>
					<button class="btn btn-danger btn-xs btn-report">Prijavi</button>
					<div class="review-grade">
						3.7
					</div>
					<div class="put-grade text-center">
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</div>
				</div>

			</div>	
			<div class="col-md-12 review-one">
				<div class="col-md-9">
					<h4>korisnik92</h4>
					<div>
						Dnevnik o Čarnojeviću je roman o mladom intelektualcu koji se našao u vrtlogu prvog svetskog rata. Crnjanski je ovde sproveo postupak paralelnog pričanja doživljavanja detinjstva i dečaštva doratnih godina - sa jedne strane, i mučnih slika i doživljaja rata - s druge strane. Pisan u prvom licu i u naglašeno emocionalnom tonu, ovaj roman ostavlja utisak izrazito lirske autobiografske poeme.
						U slikama detinjstva i dečaštva junaka romana oživljena je građanska porodična i društvena atmosfera tipična za staru Vojvodinu i viđena isključivo kroz dečju psihu:
						- Bolesti su bile moji najlepši doživljaji, priča junak romana. Oblačili su me u belo i metali me u prozor, a ljudi su zastajali i gledali me... Ležao sam sav u čipkama, lakim kao perje, a kroz prozor sam video golubove moje, koje sam toliko voleo, premeštao i kupao... Mati mi je morala vaditi stare adiđare, sve bisere njene i svilene vezove, i ja bih sve kupio i gomilao na grudima i ležao pod njima sav blažen.
					</div>
				</div>


				<div class="col-md-3">
					<p class="text-center">21.12.2014. 14:27</p>
					<button class="btn btn-danger btn-xs btn-report">Prijavi</button>
					<div class="review-grade">
						3.7
					</div>
					<div class="put-grade text-center">
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</div>
				</div>

			</div>



















		</div>
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
