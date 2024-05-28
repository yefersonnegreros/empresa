@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('content')
<section id="projects" class="py-5 mt-5">
    <div class="container">
        <h2 class="text-center mb-5">Nuestros Clientes</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/pepsi_logo_icon_168910.png" alt="Pepsi Logo" style="width: 50px;"></p>
                        </div>
                        <h5 class="card-title">Pepsi</h5>
                        <p class="card-text">Desarrollamos una tienda en línea para Pepsi,incrementando sus ventas en poco tiempo.</p>
                        <a href="{{ route('clientes.detalle', ['id' => 'Pepsi']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <img src="https://logolook.net/wp-content/uploads/2021/01/Alicorp-Emblem.png" alt="Alicorp Logo" style="width: 110px;"></p>
                        </div>
                        <h5 class="card-title">Alicorp</h5>
                        <p class="card-text">Implementamos un sistema para gestionar las relaciones con los clientes de Alicorp.</p>
                        <a href="{{ route('clientes.detalle', ['id' => 'Alicorp']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <img src="https://media.licdn.com/dms/image/C560BAQGpz1gDMp7KOA/company-logo_200_200/0/1630641048821/cementos_pacasmayo_saa_logo?e=2147483647&v=beta&t=xtIekDuEtej8ZD5lo_R5szXPC_MCsMwgex8ryHPZxOI" alt="Alicorp Logo" style="width: 60px;"></p>
                        </div>
                        <h5 class="card-title">Pacasmayo</h5>
                        <p class="card-text">Desarrollamos un sistema ERP para optimizar los procesos internos de administración.</p>
                        <a href="{{ route('clientes.detalle', ['id' => 'Pacasmayo']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection