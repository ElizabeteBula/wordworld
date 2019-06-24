@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('tulkot') }}</div>

                <div class="card-body">
                        @csrf

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('vards') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="text">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('tulkojums') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('password') is-invalid @enderror" >


                            </div>
                        </div>




                                <button type="PIEVIENOT" class="btn btn-primary">
                                    {{ __('PIEVIENOT') }}
                                </button>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
