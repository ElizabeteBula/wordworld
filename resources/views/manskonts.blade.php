@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MANS KONTS') }}</div>

                <div class="card-body">
                        @csrf
		
			<div >{{ Auth::user()->name }}</div>
			<div > {{ Auth::user()->email }}</div>
		
                            
                    </form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
