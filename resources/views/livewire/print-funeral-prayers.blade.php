<x-layout.print>
    {{-- Page 1--}}
    @if(empty($liturgy['collectNoPrint']))
        <div class="p-6">
            <div class="text-xl text-red-500 font-semibold">Collect</div>
            <p class="mt-3 whitespace-pre-line">{!! $prayers->where('id', $liturgy['collectId'])->first()['text']  !!}</p>
        </div>
    @endif

    @if(empty($liturgy['offeringsNoPrint']))
        <div class="p-6">
            <div class="text-xl text-red-500 font-semibold">Prayer Over Offerings</div>
            <p class="mt-3 whitespace-pre-line">{!! $prayers->where('id', $liturgy['offeringsId'])->first()['text']  !!}</p>
        </div>
    @endif

    @if(empty($liturgy['prefaceNoPrint']))
        <div class="p-6 break-after-page">
            <div class="text-xl text-red-500 font-semibold">Preface</div>
            <p class="mt-3 whitespace-pre-line">{!! $prayers->where('id', $liturgy['prefaceId'])->first()['text']  !!}</p>
        </div>
    @endif

    {{--  Page 4  --}}
    @if(empty($liturgy['afterCommunionNoPrint']))
        <div class="p-6">
            <div class="text-xl text-red-500 font-semibold">Prayer After Communion</div>
            <p class="mt-3 whitespace-pre-line">{!! $prayers->where('id', $liturgy['afterCommunionId'])->first()['text']  !!}</p>
        </div>
    @endif

    @if(empty($liturgy['invitationToPrayerNoPrint']))
        <div class="p-6">
            <div class="text-xl text-red-500 font-semibold">Invitation to Prayer</div>
            <p class="mt-3 whitespace-pre-line">{!! $prayers->where('id', $liturgy['invitationToPrayerId'])->first()['text']  !!}</p>
        </div>
    @endif

    @if(empty($liturgy['finalCommendationNoPrint']))
        <div class="p-6">
            <div class="text-xl text-red-500 font-semibold">Final Commendation</div>
            <p class="mt-3 whitespace-pre-line">{!! $prayers->where('id', $liturgy['finalCommendationId'])->first()['text']  !!}</p>
        </div>
    @endif


</x-layout.print>
