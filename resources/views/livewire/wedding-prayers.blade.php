<x-layout.page>

    <div class="block md:flex md:justify-between mb-6">
        <x-index.heading>
            Wedding Prayers
        </x-index.heading>

        <div class="space-x-2 flex items-center">
            <x-button.white wire:click="print">Print</x-button.white>
        </div>
    </div>

    <x-form-section submit="save">
        <x-slot name="title">
            Wedding Prayers
        </x-slot>


        <x-slot name="form">
            @if(empty($liturgy['collectNoPrint']))
                <div class="col-span-6 sm:col-span-4">
                    <x-label>Collect (Opening Prayer)</x-label>
                    <x-input.select class="mt-1" wire:model.lazy="liturgy.collectId">
                        <option value="">Select</option>
                        @foreach($prayers->where('liturgy_type', 'wedding')->where('type', 'collect')->where('translation_id', '1') as $prayer)
                            <option value="{{$prayer['id']}}">{{$prayer['text']}}</option>
                        @endforeach
                    </x-input.select>
                    @error('liturgy.collectId')
                    <x-input.error>{{ $message }}</x-input.error>
                    @enderror
                </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.collectNoPrint"></x-input.checkbox>
                </div>
                <hr class="mt-3">
            </div>


            @if(empty($liturgy['offeringsNoPrint']))
                <div class="col-span-6 sm:col-span-4">
                    <x-label>Prayer over the Offerings</x-label>
                    <x-input.select class="mt-1" wire:model.lazy="liturgy.offeringsId">
                        <option value="">Select</option>
                        @foreach($prayers->where('liturgy_type', 'wedding')->where('type', 'offerings')->where('translation_id', '1') as $prayer)
                            <option value="{{$prayer['id']}}">{{$prayer['text']}}</option>
                        @endforeach
                    </x-input.select>
                    @error('liturgy.offeringsId')
                    <x-input.error>{{ $message }}</x-input.error>
                    @enderror
                </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.offeringsNoPrint"></x-input.checkbox>
                </div>
                <hr class="mt-3">
            </div>


            @if(empty($liturgy['prefaceNoPrint']))
                <div class="col-span-6 sm:col-span-4">
                    <x-label>Preface</x-label>
                    <x-input.select class="mt-1" wire:model.lazy="liturgy.prefaceId">
                        <option value="">Select</option>
                        @foreach($prayers->where('liturgy_type', 'wedding')->where('type', 'preface')->where('translation_id', '1') as $prayer)
                            <option value="{{$prayer['id']}}">{{$prayer['text']}}</option>
                        @endforeach
                    </x-input.select>
                    @error('liturgy.prefaceId')
                    <x-input.error>{{ $message }}</x-input.error>
                    @enderror
                </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.prefaceNoPrint"></x-input.checkbox>
                </div>
                <hr class="mt-3">
            </div>


            @if(empty($liturgy['nuptialBlessingNoPrint']))
                <div class="col-span-6 sm:col-span-4">
                    <x-label>Nuptial Blessing</x-label>
                    <x-input.select class="mt-1" wire:model.lazy="liturgy.nuptialBlessingId">
                        <option value="">Select</option>
                        @foreach($prayers->where('liturgy_type', 'wedding')->where('type', 'nuptial_blessing')->where('translation_id', '1') as $prayer)
                            <option value="{{$prayer['id']}}">{{$prayer['text']}}</option>
                        @endforeach
                    </x-input.select>
                    @error('liturgy.nuptialBlessingId')
                    <x-input.error>{{ $message }}</x-input.error>
                    @enderror
                </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.afterCommunionNoPrint"></x-input.checkbox>
                </div>
                <hr class="mt-3">
            </div>

            @if(empty($liturgy['afterCommunionNoPrint']))
                <div class="col-span-6 sm:col-span-4">
                    <x-label>Prayer After Communion</x-label>
                    <x-input.select class="mt-1" wire:model.lazy="liturgy.afterCommunionId">
                        <option value="">Select</option>
                        @foreach($prayers->where('liturgy_type', 'wedding')->where('type', 'after_communion')->where('translation_id', '1') as $prayer)
                            <option value="{{$prayer['id']}}">{{$prayer['text']}}</option>
                        @endforeach
                    </x-input.select>
                    @error('liturgy.afterCommunionId')
                    <x-input.error>{{ $message }}</x-input.error>
                    @enderror
                </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.afterCommunionNoPrint"></x-input.checkbox>
                </div>
                <hr class="mt-3">
            </div>


            @if(empty($liturgy['solemnBlessingNoPrint']))
                <div class="col-span-6 sm:col-span-4">
                    <x-label>Solemn Blessing</x-label>
                    <x-input.select class="mt-1" wire:model.lazy="liturgy.solemnBlessingId">
                        <option value="">Select</option>
                        @foreach($prayers->where('liturgy_type', 'wedding')->where('type', 'solemn_blessing')->where('translation_id', '1') as $prayer)
                            <option value="{{$prayer['id']}}">{{$prayer['text']}}</option>
                        @endforeach
                    </x-input.select>
                    @error('liturgy.solemnBlessingId')
                    <x-input.error>{{ $message }}</x-input.error>
                    @enderror
                </div>
            @endif

            <div class="col-span-6 sm:col-span-4">
                <div class="flex space-x-2 items-center">
                    <x-label>Do not Print</x-label>
                    <x-input.checkbox wire:model="liturgy.solemnBlessingNoPrint"></x-input.checkbox>
                </div>
                <hr class="mt-3">
            </div>


        </x-slot>



    </x-form-section>


</x-layout.page>
