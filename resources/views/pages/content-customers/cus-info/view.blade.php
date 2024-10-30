@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-between gap-x-3">
        <div class="w-[25%]">
            @component('components.content-card.full-card')
          
            @endcomponent
            <div class="mt-5">
                @component('components.content-card.full-card')
                <div class="my-1 font-primaryMedium text-[18px]">
                    <span>CUSTOMER <span class="text-red-500">INFOMATION</span></span>
                </div>
                <div class="flex gap-x-2">
                    <div>
                        
                    </div>
                    <div>
                        <span>Customer Name</span>
                        <span class="block">{{ $customers[0]->FirstName }} {{ $customers[0]->MiddleName }} {{ $customers[0]->LastName }}</span>
                    </div>
                </div>  
                <div class="flex gap-x-2 mt-1">
                    <div>
                        
                    </div>
                    <div>
                        <span>Card Id</span>
                        <span class="block">{{ $customers[0]->IDNumber !== null ? $customers[0]->IDNumber : '- Data is empty -' }}</span>
                    </div>
                </div>  
                <div class="flex gap-x-2 mt-1">
                    <div>
                        
                    </div>
                    <div>
                        <span>Phone Number</span>
                        <span class="block">{{ $customers[0]->Mobilephone1 }}</span>
                    </div>
                </div>  
                @endcomponent
            </div>
        </div>
        <div class="w-[75%]">
            @component('components.content-card.full-card')
                
            @endcomponent
        </div>
    </div>
    @include('pages.content-customers.cus-info.script')
@endsection