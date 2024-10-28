@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-md">
        <form id="DataCus" class="flex gap-x-3">
            <div class="w-[20%]">

            </div>
            <div class="w-[80%] px-4 py-4 grid grid-cols-3 gap-2">
                <div class="flex items-center">
                    <select class="h-11 w-full border-gray-300 rounded-xl">
                        <option value="">-- select prefix name --</option>
                        @foreach ($perfixName as $item)
                            <option value="{{ @$item->id }}">{{ @$item->Name_TH }} ({{ @$item->Name_EN }})</option>
                        @endforeach
                    </select>
                </div>
                @component('components.content-input.input-field')
                    @slot('data', [
                        "label" => "ชื่อ",
                        "id" => "firstName",
                        "type" => "text",
                        "name" => "firstName"
                    ])
                @endcomponent
                @component('components.content-input.input-field')
                    @slot('data', [
                        "label" => "นามสกุล",
                        "id" => "lastName",
                        "type" => "text",
                        "name" => "lastName"
                    ])
                @endcomponent
            </div>
        </form>
    </div>
    @include('pages.content-customers.create-cus.script')
@endsection