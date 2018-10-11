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
                            <h2>¿que es esto?</h2>
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (auth()->user()->admin)
                        <h2>Usted es Admin</h2>
                    @else
                        <h2>Usted es Usuario</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection