@extends('layouts.app')
@section('content')
    <div class="content-header">
        @if ($errors->has('formations_exists'))
            <div class="alert alert-danger">
                {{ $errors->first('formations_exists') }}
            </div>
        @else
            @if ($errors->has('unexpected_error'))
                <div class="alert alert-danger">
                    {{ $errors->first('unexpected_error') }}
                </div>
            @endif
        @endif
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <!-- Obtenir le formulaire -->
                        @include('GestionFormation.Formation.fields')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
