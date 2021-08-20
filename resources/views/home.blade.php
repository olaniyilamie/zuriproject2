@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="row mt-3">
                        <div class="col-6">
                            <p class="btn btn-sm btn-warning"><a href="zuristage2olamiee" class="text-white">HOME PAGE</a></p>
                        </div>
                        <div class="col-6 text-right">
                            <p class="btn btn-sm btn-info"><a href="yourmessages" class="text-white"> CHECK MESSAGES</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
