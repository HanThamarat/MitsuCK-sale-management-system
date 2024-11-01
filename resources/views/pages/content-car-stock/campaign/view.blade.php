@extends('layouts.app')

@section('content')
    <div class="w-full">
        @component('components.content-card.full-card')
            <div class="text-[20px] font-primaryMedium text-orange-500">
                <span>Add Compaign</span>
            </div>
            <div class="grid grid-cols-3">
                @component('components.content-input.input-field')
                    @slot('data', [
                        "label" => "Model Name (EN)",
                        "id" => "Name_EN",
                        "type" => "text",
                        "name" => "Name_EN"
                    ])
                @endcomponent
            </div>
        @endcomponent
    </div> 
    @include('pages.content-car-stock.campaign.script')
@endsection