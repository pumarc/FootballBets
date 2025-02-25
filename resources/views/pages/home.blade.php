@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @guest
                    <div class="alert alert-warning" role="alert">
                        Vous n'êtes pas enregistré.
                    </div>
                  @else
                    <div class="alert alert-success" role="alert">
                        Vous êtes bien enregistré.
                    </div>
                  @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
