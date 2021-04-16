@extends('layouts.app')

@section('content')
<section class="container m-0 m-auto">
       <!-- This example requires Tailwind CSS v2.0+ -->
        <h1>Hello, {{ auth()->user()->name }} </h1>
    </section>
@endsection
