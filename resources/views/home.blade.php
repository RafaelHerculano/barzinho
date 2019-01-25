@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
                    <div class="container">
                        <div class="row">
                            <div class="col">Column</div>
                            <div class="col">Column</div>
                            <div class="w-100"></div>
                            <div class="col">Column</div>
                            <div class="col">Column</div>
                        </div>
                    </div>
@endsection
