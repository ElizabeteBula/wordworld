@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('tulkot') }}</div>

                <div class="card-body">
					<form method="POST" action="/valoda" class="form-horizontal">
                        @csrf

                        <div class="form-group row">
                            <label for="vards" class="col-md-4 col-form-label text-md-right">{{ __('vards') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="vards">
 

                            </div>
                        </div>
				
                        <div class="form-group row">
                            <label for="tulkojums" class="col-md-4 col-form-label text-md-right">{{ __('tulkojums') }}</label>

                            <div class="col-md-6">
                                <input name="tulkojums" id="text" type="text" class="form-control @error('password') is-invalid @enderror" >


                            </div>
                        </div>
						<input type="hidden" name="valoda" id="valoda" value="{{ $valodasId }}" class="form-control @error('valoda') is-invalid @enderror" >
						<div>



                                <button type="submit" class="btn btn-primary">
                                    {{ __('PIEVIENOT') }}
                                </button>



                        </div>
                    </form>
                </div>
            </div>
			<div>
				@foreach ($vardi as $vards)
					<div class="card">
						<div class="card-body">
							<p>Vards: {{$vards->vards}}</p>
							<p>Tulkojums: {{$vards->tulkojums}}</p>	
						</div>
					</div>
				@endforeach
			</div>
        </div>
    </div>
</div>

@endsection
