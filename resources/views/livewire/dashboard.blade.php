<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">

                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Welcome!
                    </h1>

                    <p class="mt-6 text-gray-500 leading-relaxed">
                        Select and print out your readings with ease.
                    </p>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <div class="flex items-center">
                            <x-icon.book />
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="{{ route('wedding-readings') }}">Wedding Readings</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            These are the main selections available from the lectionary for weddings.  They can be printed and placed in a binder at thte ambo.
                        </p>

                    </div>

                    <div>
                        <div class="flex items-center">
                            <x-icon.book />
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="{{route('funeral-readings')}}">Funeral Readings</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            These are the main selections available from the lectionary for weddings.  They can be printed and placed in a binder at thte ambo.
                        </p>

                    </div>

                    <div>
                        <div class="flex items-center">
                            <x-icon.book />
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="{{route('wedding-prayers')}}">Wedding Prayers</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            These prayers can be printed and placed in a binder for the priest.
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center">
                            <x-icon.book />
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="{{route('funeral-prayers')}}">Funeral Prayers</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            These prayers can be printed and placed in a binder for the priest.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
