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
                    <div class="card-footer mt-5 justify-content-center text-center">
                        <a class="text-light" style="scrollbar-color: #fff;" href="{{ url('admin/dashboard') }}">
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Dashboard Admin">
                                Dashboard
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
