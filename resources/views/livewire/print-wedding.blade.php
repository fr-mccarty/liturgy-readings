<x-layout.print>
    {{-- Page 1--}}
    @if(empty($liturgy['1ReadingNoPrint']))
    <div class="p-6 break-after-page">
        <div class="text-right text-xl text-red-500 font-semibold">FIRST READING</div>
        <div class="text-right text-xl text-red-500 font-semibold italic">{{$readings->where('id', $liturgy['1ReadingId'])->first()['pericope']}}</div>
        @if(!empty($liturgy['1ReadingLector']))
            <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['1ReadingLector']}}</div>
        @endif
        <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['1ReadingId'])->first()['introduction']}}</div>
        <p class="mt-3 whitespace-pre-line">{!! $readings->where('id', $liturgy['1ReadingId'])->first()['reading']  !!}</p>
        <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['1ReadingId'])->first()['conclusion']}}</div>
    </div>
    @endif

    {{-- Page 2--}}
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
        <p class="mt-3 whitespace-pre-line">{!! $readings->where('id', $liturgy['2ReadingId'])->first()['reading']  !!}</p>
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
        <p class="mt-3 whitespace-pre-line">{!! $readings->where('id', $liturgy['GospelReadingId'])->first()['reading']  !!}</p>
        <div class="mt-3 font-semibold">{{$readings->where('id', $liturgy['GospelReadingId'])->first()['conclusion']}}</div>
    </div>
    @endif

    {{-- Page 5--}}
    @if(empty($liturgy['PetitionsNoPrint']))
    <div class="p-6 break-after-page">
        <div class="text-right text-xl text-red-500 font-semibold">Petitions</div>
        @if(!empty($liturgy['PetitionsLector']))
            <div class="text-right text-xl text-red-500 font-bold">{{$liturgy['PetitionsLector']}}</div>
        @endif

        <div class="space-y-2">

            <div class="font-semibold">
                <span class="font-bold">Reader:</span>The response is “Lord, hear our prayer.” <span class="font-bold text-red-500">[Pause]</span>
                <br>
                For {{$liturgy['nameOfSpouse1']}} and {{$liturgy['nameOfSpouse2']}}, joined now in marriage, that their love will grow and their commitment will deepen every day, we pray to the Lord.
            </div>

            <div class="italic">
                <span class="font-semibold">People:</span> Lord, hear our prayer.
            </div>

            <div class="font-semibold">
                <span class="font-bold">Reader:</span> For the parents and grandparents of {{$liturgy['nameOfSpouse1']}} and {{$liturgy['nameOfSpouse2']}}, without whose dedication to God and family we would not be gathered here today, that they will be blessed as they gain a son or daughter, we pray to the Lord.
            </div>

            <div class="italic">
                <span class="font-semibold">People:</span> Lord, hear our prayer.
            </div>

            <div class="font-semibold">
                <span class="font-bold">Reader:</span>
                For the families and friends of {{$liturgy['nameOfSpouse1']}} and {{$liturgy['nameOfSpouse2']}}, gathered here today, that they continue to enrich each other with love and support through the years, we pray to the Lord.
            </div>

            <div class="italic">
                <span class="font-semibold">People:</span> Lord, hear our prayer.
            </div>

            <div class="font-semibold">
                <span class="font-bold">Reader:</span>
                For all married couples throughout the world, that God may continue to bless and strengthen their unions, and for vocations to the priesthood and religious life, we pray to the Lord.
            </div>

            <div class="italic">
                <span class="font-semibold">People:</span> Lord, hear our prayer.
            </div>

            <div class="font-semibold">
                <span class="font-bold">Reader:</span>
                For family members and loved ones who suffer or have gone before us marked with the sign of faith, that they may live in happiness with God, we pray to the Lord:
            </div>

            <div class="italic">
                <span class="font-semibold">People:</span> Lord, hear our prayer.
            </div>
        </div>

    </div>
    @endif

</x-layout.print>
