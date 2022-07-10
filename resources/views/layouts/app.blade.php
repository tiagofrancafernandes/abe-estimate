@extends('layouts.base')

@section('extended_section')

@include('layouts._navbar')

<div class="container mt-4 pt-5">
    @yield('content')
</div>
@endsection
