@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Bienvenido!
                    <a class="btn btn-primary" href="{{ url('/inicio') }}" type="submit" style= "background-color: #F9B32E; float: right;"  >
                        {{ __('Ir a Clonopolis') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection