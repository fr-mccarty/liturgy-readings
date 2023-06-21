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
                    In baptism {{$liturgy['nameOfDeceased']}} received the light of Christ.  Scatter the darkness now and lead @if($liturgy['sexOfDeceased'] === 'Male')him @else her @endif over the waters of death, we pray to the Lord.
                </div>

                <div class="italic">
                    <span class="font-semibold">People:</span> Lord, hear our prayer.
                </div>

                <div class="font-semibold">
                    <span class="font-bold">Reader:</span> Our @if($liturgy['sexOfDeceased'] === 'male') brother @else sister @endif was nourished at the table of the Savior.  Welcome @if($liturgy['sexOfDeceased'] === 'Male') him @else her @endif into the halls of the heavenly banquet, we pray to the Lord.<br>
                </div>

                <div class="italic">
                    <span class="font-semibold">People:</span> Lord, hear our prayer.
                </div>

                <div class="font-semibold">
                    <span class="font-bold">Reader:</span>The families and friends of {{$liturgy['nameOfDeceased']}} seek comfort and consolation.  Heal their pain and dispel the darkness and doubt that come from grief, we pray to the Lord.<br>
                </div>

                <div class="italic">
                    <span class="font-semibold">People:</span> Lord, hear our prayer.
                </div>

                <div class="font-semibold">
                    <span class="font-bold">Reader:</span> We are assembled here in faith and confidence to pray for our @if($liturgy['sexOfDeceased'] === 'Male')	brother @else sister @endif {{$liturgy['nameOfDeceased']}}.  Strengthen our hope so that we may live in the expectation of your son's coming, we pray to the Lord.<br>
                </div>

                <div class="italic">
                    <span class="font-semibold">People:</span> Lord, hear our prayer.
                </div>

                <div class="font-semibold">
                    <span class="font-bold">Reader:</span> For our deceased relatives and friends and for all who have helped us, that they may have the reward of their goodness, we pray to the Lord.<br>
                </div>

                <div class="italic">
                    <span class="font-semibold">People:</span> Lord, hear our prayer.
                </div>
            </div>
        </div>
    @endif

</x-layout.print>
