@extends('layouts.master')
@section('content')
    @include('components.intro.intro')

    @include('components.about.about')

    @include('components.features.services')

    @include('components.menu.menu')

    @include('components.features.counter')

    @include('components.sellers.sale')

    @include('components.testimony.testimony')
@endsection
