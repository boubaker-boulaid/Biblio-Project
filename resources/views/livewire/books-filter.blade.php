<main class="py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-900">{{ __('books.heading') }}</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- Left content (Filters) -->
            <aside class="col-span-1">
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md space-y-8">
                    <h4 class="text-xl font-semibold text-gray-800 border-b border-gray-200 pb-4">
                        {{ __('books.filter_heading') }}</h4>

                    <div>
                        <h5 class="font-semibold text-gray-800 mb-3">{{ __('books.filter_categories') }}</h5>
                        <select name="category" onchange="window.location.href = this.value"
                            class="w-full bg-gray-50 border border-gray-300 rounded-md text-gray-800 focus:ring-blue-500 focus:border-blue-500 text-sm p-2.5">
                            <option value="">
                                All
                            </option>
                            @foreach ($categories as $category)
                                <option value="">
                                    {{$category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <h5 class="font-semibold text-gray-800 mb-3">{{ __('books.filter_language') }}</h5>
                        <div class="space-y-2">
                            <label class="flex items-center text-gray-600">
                                <input type="checkbox" onchange="window.location.href = this.value"
                                    value="{{ route('books', array_merge(request()->except('page', 'langue'), [])) }}"
                                    {{ request('langue') ? '' : 'checked' }}
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2">{{ __('books.filter_all_language') }}</span>
                            </label>
                            <label class="flex items-center text-gray-600">
                                <input type="checkbox" onchange="window.location.href = this.value"
                                    value="{{ route('books', array_merge(request()->except('page'), ['langue' => 'Espagnol'])) }}"
                                    {{ request('langue') == 'Espagnol' ? 'checked' : '' }}
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2">{{ __('books.filter_spanish') }}</span>
                            </label>
                            <label class="flex items-center text-gray-600">
                                <input type="checkbox" onchange="window.location.href = this.value"
                                    value="{{ route('books', array_merge(request()->except('page'), ['langue' => 'Francais'])) }}"
                                    {{ request('langue') == 'Francais' ? 'checked' : '' }}
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2">{{ __('books.filter_french') }}</span>
                            </label>
                            <label class="flex items-center text-gray-600">
                                <input type="checkbox" onchange="window.location.href = this.value"
                                    value="{{ route('books', array_merge(request()->except('page'), ['langue' => 'Allemand'])) }}"
                                    {{ request('langue') == 'Allemand' ? 'checked' : '' }}
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2">{{ __('books.filter_german') }}</span>
                            </label>
                            <label class="flex items-center text-gray-600">
                                <input type="checkbox" onchange="window.location.href = this.value"
                                    value="{{ route('books', array_merge(request()->except('page'), ['langue' => 'Arabe'])) }}"
                                    {{ request('langue') == 'Arabe' ? 'checked' : '' }}
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2">{{ __('books.filter_arabic') }}</span>
                            </label>
                            <label class="flex items-center text-gray-600">
                                <input type="checkbox" onchange="window.location.href = this.value"
                                    value="{{ route('books', array_merge(request()->except('page'), ['langue' => 'Anglais'])) }}"
                                    {{ request('langue') == 'Anglais' ? 'checked' : '' }}
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2">{{ __('books.filter_english') }}</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <h5 class="font-semibold text-gray-800 mb-3">{{ __('books.filter_tags') }}</h5>
                        <div class="space-y-2">
                            <label class="flex items-center text-gray-600">
                                <input type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2">{{ __('books.tag_html') }}</span>
                            </label>
                            <label class="flex items-center text-gray-600">
                                <input type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2">{{ __('books.tag_laravel') }}</span>
                            </label>
                        </div>
                    </div>

                </div>
            </aside>



            <!-- Right content (Book List) -->
                <div class="col-span-1 lg:col-span-3">
                    <div
                        class="flex items-center justify-between mb-6 bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                        <span class="text-gray-600">{{ __('books.found_count', ['count' => $booksCount]) }}</span>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">{{ __('books.sort_label') }}</span>
                            <select name="sort"  wire:model.live="sort"
                                class="bg-gray-50 border border-gray-300 rounded-md text-gray-800 focus:ring-blue-500 focus:border-blue-500 text-sm p-2">
                                <option value="sort_newest">
                                    {{ __('books.sort_newest') }}</option>
                                <option
                                    value="sort_oldest">
                                    {{ __('books.sort_oldest') }}</option>
                                <option
                                    value="sort_title">
                                    {{ __('books.sort_title') }}</option>
                                <option
                                    value="sort_price_high_low">
                                    {{ __('books.sort_price_high_low') }}</option>
                                <option
                                    value="sort_price_low_high">
                                    {{ __('books.sort_price_low_high') }}</option>
                            </select>
                        </div>
                    </div>

                    {{-- filtered books section --}}
                    <div class="space-y-6">

                        @foreach ($books as $book)
                            <div
                                class="bg-white rounded-lg p-4 flex items-center justify-between border border-gray-200 shadow-sm hover:shadow-lg transition">
                                <div class="flex items-center">
                                    <img src="{{ asset('covers/' . $book->cover) }}" alt="Book Cover"
                                        class="w-20 h-auto object-cover rounded-md mr-4">
                                    <div>
                                        <a href={{ route('book.show', $book) }}
                                            class="text-lg font-semibold text-gray-900 hover:text-blue-600">{{ $book->designation }}
                                        </a>
                                        <ul class="flex flex-wrap gap-x-4 text-sm text-gray-500 mt-1">
                                            <li>
                                                @foreach ($book->categories as $category )
                                                    {{ $category->name }}
                                                @endforeach    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href={{ route('book.show', $book) }}
                                        class="text-blue-600 hover:underline">{{ __('books.details') }}</a>
                                    <span class="block text-lg font-semibold text-gray-900 mt-1">{{ $book->prix }}
                                    </span>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    @if ($books->hasPages())
                        <div class="mt-12 flex justify-center">
                            {{ $books->links() }}
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</main>
