@component('components.content-card.full-card')
    <div class="w-full">
        <div class="flex">
            <h1 class="text-[20px] text-center font-primaryMedium text-orange-500">{{ @$AcsType }} Price List</h1>
        </div>
        <table class="w-full">
            <thead>
                <tr class="text-white">
                    <th class="bg-orange-300 py-1 rounded-l-md">#</th>
                    <th class="bg-orange-300 py-1">Accessosy Name</th>
                    <th class="bg-orange-300 py-1">{{ @$AcsType }} Price</th>
                    <th class="bg-orange-300 py-1">Commission (Percentage)</th>
                    <th class="bg-orange-300 py-1">Commission</th>
                    <th class="bg-orange-300 py-1">Start Date</th>
                    <th class="bg-orange-300 py-1 rounded-r-md">End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acsPrice as $key => $acs)
                    <tr class="text-center">
                        <td class="py-2">{{ @$key + 1 }}</td>
                        <td>{{ @$acs->ToAcs->AccessorySource }}</td>
                        @if (empty(@$condition) || @$condition === "1")
                            <td>{{ @$acs->accessoryCost }}</td>
                        @elseif (@$condition === "2")
                            <td>{{ @$acs->AccessorySalePrice }}</td>
                        @elseif (@$condition === "3")
                            <td>{{ @$acs->AccessoryPromoPrice }}</td>
                        @endif
                        <td>{{ @$acs->AccessoryCom }}</td>
                        <td>{{ @$acs->AccessoryComAmount }}</td>
                        <td>{{ @$acs->StartDate }}</td>
                        <td>{{ @$acs->EndDate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endcomponent