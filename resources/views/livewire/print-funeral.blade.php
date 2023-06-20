<x-print.readings>
    {{-- Page 1--}}
    @if(empty($liturgy['1ReadingNoPrint']))
        <div class="p-6 break-after-page">
            <div class="text-right text-xl text-red-500 font-semibold">FIRST READING</div>
            <div class="text-right text-xl text-red-500 font-semibold italic">{{$readings->where('id', $liturgy['1ReadingId'])->first()['pericope']}}</div>
            @if(!empty($liturgy['1ReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['1ReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['1ReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['1ReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['1ReadingId'])->first()['conclusion']}}</div>
        </div>
    @endif

    {{-- Page Psalm--}}
    @if(empty($liturgy['PsalmReadingNoPrint']))
        <div class="p-6 break-after-page">
            <div class="text-right text-xl text-red-500 font-semibold">PSALM</div>
            <div class="text-right text-xl text-red-500 font-semibold italic">{{$readings->where('id', $liturgy['PsalmReadingId'])->first()['pericope']}}</div>
            @if(!empty($liturgy['PsalmReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['PsalmReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['PsalmReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['PsalmReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['PsalmReadingId'])->first()['conclusion']}}</div>
        </div>
    @endif

    {{-- Page 3--}}
    @if(empty($liturgy['2ReadingNoPrint']))
        <div class="p-6 break-after-page">
            <div class="text-right text-xl text-red-500 font-semibold">SECOND READING</div>
            <div class="text-right text-xl text-red-500 font-semibold italic">{{$readings->where('id', $liturgy['2ReadingId'])->first()['pericope']}}</div>
            @if(!empty($liturgy['2ReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['2ReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['2ReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['2ReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['2ReadingId'])->first()['conclusion']}}</div>
        </div>
    @endif

    {{-- Page 4--}}
    @if(empty($liturgy['GospelReadingNoPrint']))
        <div class="p-6 break-after-page">
            <div class="text-right text-xl text-red-500 font-semibold">GOSPEL READING</div>
            <div class="text-right text-xl text-red-500 font-semibold italic">{{$readings->where('id', $liturgy['GospelReadingId'])->first()['pericope']}}</div>
            @if(!empty($liturgy['GospelReadingLector']))
                <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['GospelReadingLector']}}</div>
            @endif
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['GospelReadingId'])->first()['introduction']}}</div>
            <p class="mt-3">{!! $readings->where('id', $liturgy['GospelReadingId'])->first()['reading']  !!}</p>
            <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['GospelReadingId'])->first()['conclusion']}}</div>
        </div>
    @endif

</x-print.readings>
