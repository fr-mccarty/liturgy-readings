<x-print.readings>
    {{-- Page 1--}}
    <div class="p-6 break-after-page">
    @if(empty($liturgy['1ReadingNoPrint']))
            <div class="text-right text-xl text-red-500 font-semibold">FIRST READING</div>
            @if(!empty($liturgy['1ReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['1ReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['1ReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['1ReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['1ReadingId'])->first()['conclusion']}}</div>
    @endif
    </div>


</x-print.readings>
