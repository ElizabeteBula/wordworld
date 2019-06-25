@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-body">
					<h3><B>PIEVIENOJAM PIERAKSTUS!!!</b></h3>
					<form method="POST" action="/pieraksti/add" class="form-horizontal">
					@csrf
						<div class="form-group row">
							<textarea name="pieraksti" id="pieraksti"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Pievienot</button>
					</form>
				</div>	
			</div>	
			@foreach ($pieraksti as $pieraksts)
			<div class="card">
				<div class="card-body">
					<p>{{$pieraksts}}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
