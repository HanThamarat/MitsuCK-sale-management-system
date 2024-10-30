@extends('layouts.app')

@section('content')
    <div class="w-full">
        @component('components.content-card.full-card')
            <div>
                <table class="w-full">
                    <thead>
                        <tr class="text-white">
                            <th class="bg-orange-300 py-1 rounded-l-md">Customer ID</th>
                            <th class="bg-orange-300 py-1">Customer Name</th>
                            <th class="bg-orange-300 py-1">Customer Phone</th>
                            <th class="bg-orange-300 py-1">Customer Email</th>
                            <th class="bg-orange-300 py-1 rounded-r-md">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $key => $customer)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $customer->FirstName }} {{ $customer->MiddleName }} {{ $customer->LastName }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <div class="flex justify-center">
                                        <a href="{{ route('views.index') }}?page={{ 'customer-info' }}&cusId={{ @$customer->id }}">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endcomponent
    </div>
    @include('pages.content-customers.cus-list.script')
@endsection