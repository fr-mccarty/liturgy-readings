<x-print.readings>
    {{-- Page 1--}}
    <div class="p-6 break-after-page">
    @if(empty($liturgy['1ReadingNoPrint']))
            <div class="text-right text-xl text-red-500 font-semibold italic">FIRST READING</div>
            @if(!empty($liturgy['1ReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['1ReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['1ReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['1ReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['1ReadingId'])->first()['conclusion']}}</div>
    @endif
    </div>

    {{-- Page Psalm--}}
    <div class="p-6 break-after-page">
        @if(empty($liturgy['PsalmReadingNoPrint']))
            <div class="text-right text-xl text-red-500 font-semibold italic">PSALM</div>
            @if(!empty($liturgy['PsalmReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['PsalmReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['PsalmReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['PsalmReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['PsalmReadingId'])->first()['conclusion']}}</div>
        @endif
    </div>

    {{-- Page 3--}}
    <div class="p-6 break-after-page">
        @if(empty($liturgy['2ReadingNoPrint']))
            <div class="text-right text-xl text-red-500 font-semibold italic">SECOND READING</div>
            @if(!empty($liturgy['2ReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['2ReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['2ReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['2ReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['2ReadingId'])->first()['conclusion']}}</div>
        @endif
    </div>

    {{-- Page 4--}}
    <div class="p-6 break-after-page">
        @if(empty($liturgy['GospelReadingNoPrint']))
            <div class="text-right text-xl text-red-500 font-semibold italic">GOSPEL READING</div>
            @if(!empty($liturgy['GospelReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['GospelReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['GospelReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['GospelReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['GospelReadingId'])->first()['conclusion']}}</div>
        @endif
    </div>

</x-print.readings>
