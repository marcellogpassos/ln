@extends('layouts.appm')

@section('title')
    Cadastar marca de produtos
@endsection

@section('content')
    <div class="container">

        @include('layouts.messages')

        <div class="row">
            <div class="col s12">

                <div class="card white">

                    <h4 class="card-title">Cadastrar nova marca de produtos</h4>

                    <form id="marcasForm" method="POST" action="{{ url('/marcas/cadastrar') }}" role="form">

                        {{ csrf_field() }}

                        @include('marcas.partials.form')

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

@endsection