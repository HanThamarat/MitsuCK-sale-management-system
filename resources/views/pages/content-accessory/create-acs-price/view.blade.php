@extends('layouts.app')

@section('content')
    <div class="w-full">
        <div class="flex w-full justify-between gap-x-2 mb-2">
            <button id="cost" class="w-full px-5 py-2 bg-orange-500 text-white rounded-lg">
                <span>ราคาทุน</span>
            </button>
            <button id="sale" class="w-full px-5 py-2 bg-white text-orange-500 rounded-lg">
                <span>ราคาขาย</span>
            </button>
            <button id="promo" class="w-full px-5 py-2 bg-white text-orange-500 rounded-lg">
                <span>โปรโมชั่น</span>
            </button>
        </div>
        @component('components.content-card.full-card')
           <form id="formData" class="w-full">
                <div class="w-full flex justify-between gap-x-2">
                    <div class="w-[25%]">

                    </div>
                    <div class="w-[75%]">
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "ชื่อ",
                                "id" => "firstName",
                                "type" => "text",
                                "name" => "firstName"
                            ])
                        @endcomponent
                    </div>
                </div>
           </form>
        @endcomponent
    </div> 
    @include('pages.content-accessory.create-acs-price.script')
@endsection