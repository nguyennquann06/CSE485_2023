@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.navbar')
        <div class="d-flex justify-content-between">
            @include('layouts.sidebar')
            @include('layouts.card')
        </div>
    </div>
@endsection
