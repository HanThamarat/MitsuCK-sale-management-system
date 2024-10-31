@extends('layouts.app')

@section('content')
    <div class="w-full">
        @component('components.content-card.full-card')
           
        @endcomponent
    </div> 
    @include('pages.content-carstock.create-stock.script')
@endsection