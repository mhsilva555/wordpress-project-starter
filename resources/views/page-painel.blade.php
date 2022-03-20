@extends('layouts.app')

@php

// $clientes = file_get_contents( get_template_directory_uri() . '/clientes.json' );
// $decode = json_decode($clientes);
// $decode = array_filter($decode);

// \App\debug($decode);

@endphp

@section('content')

    {{-- Cards Numbers --}}
    @include('partials.card-number')

    {{-- Table Contratos --}}
    @include('partials.table')

@endsection
