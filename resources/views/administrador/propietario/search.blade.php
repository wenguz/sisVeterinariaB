{!! Form::open(array('url'=>'administrador/propietario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<section>
	<div class="col-md-5">
		<div class="input-group">
			<input type="text" style="padding: 5px" class="form-control" name="searchText" placeholder="Buscar por nombre..." value="{{$searchText}}">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</div>
	</div>
	<br><br><br>
</section>
{{Form::close()}}