@section('searchbox')
<div class="col-md-12" id="search-container">
	<form class="form-horizontal" id="search-form">
		<div class="form-group has-feedback has-feedback-left">
			<!-- <label for="inputSearch" class="col-sm-2 control-label">Pretraga</label> -->
			<div class="col-md-8">
				<input type="text" class="form-control rect-shape" id="inputSearch" placeholder="Unesite pojam...">
				<i class="form-control-feedback glyphicon glyphicon-search"></i>
			</div>
			<div class="col-md-2" id="search-button">
				<button type="submit" class="btn rect-shape">Pretraži</button>
			</div>
			<div class="col-md-2" id="advanced-search-button">
				<button type="button" class="btn rect-shape">Napredna pretraga</button>
			</div>
		</div>
	</form>
</div>

@stop