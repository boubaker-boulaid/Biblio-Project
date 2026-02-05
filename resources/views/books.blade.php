@extends('layouts.app')
@section('titre', 'books')

@section('content')
    <!-- Main Content -->
    <main class="py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-900">Rechercher un Livre</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

                <!-- Left content (Filters) -->
                <aside class="col-span-1">
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md space-y-8">
                        <h4 class="text-xl font-semibold text-gray-800 border-b border-gray-200 pb-4">Filtrer les livres</h4>

                        <div>
                            <h5 class="font-semibold text-gray-800 mb-3">Categories</h5>
                            <select name="category" onchange="window.location.href = this.value"
                                class="w-full bg-gray-50 border border-gray-300 rounded-md text-gray-800 focus:ring-blue-500 focus:border-blue-500 text-sm p-2.5">
                                <option value="{{ route('books', array_merge(request()->except('page','categorie'), [])) }}">Tout</option>
                                <option value="{{ route('books', array_merge(request()->except('page'), ['categorie' => 'Horreur']) ) }}" {{request('categorie') == 'Horreur' ? 'selected' : ''}}>Horreur</option>
                                <option value="{{ route('books', array_merge(request()->except('page'), ['categorie' => 'Mystere']) ) }}" {{request('categorie') == 'Mystere' ? 'selected' : ''}}>Mystere</option>
                                <option value="{{ route('books', array_merge(request()->except('page'), ['categorie' => 'Fiction']) ) }}" {{request('categorie') == 'Fiction' ? 'selected' : ''}}>Fiction</option>
                                <option value="{{ route('books', array_merge(request()->except('page'), ['categorie' => 'Action'] ) ) }} " {{request('categorie') == 'Action' ? 'selected' : ''}}>Action</option>
                            </select>
                        </div>

                        <div>
                            <h5 class="font-semibold text-gray-800 mb-3">Language</h5>
                            <div class="space-y-2">
                                <label class="flex items-center text-gray-600">
                                    <input type="checkbox" onchange="window.location.href = this.value"
                                        value="{{route('books', array_merge(request()->except('page','langue'), []))}}" {{request('langue') ? '' : 'checked'}}
                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2">All</span>
                                </label>
                                <label class="flex items-center text-gray-600">
                                    <input type="checkbox" onchange="window.location.href = this.value"
                                        value="{{route('books', array_merge(request()->except('page'), ['langue' => 'Espagnol']) )}}" {{request('langue') == 'Espagnol' ? 'checked' : ''}}
                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2">Espagnol</span>
                                </label>
                                <label class="flex items-center text-gray-600">
                                    <input type="checkbox" onchange="window.location.href = this.value"
                                        value="{{route('books', array_merge(request()->except('page'), ['langue' => 'Francais']))}}" {{request('langue') == 'Francais' ? 'checked' : ''}}
                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2">Francais</span>
                                </label>
                                <label class="flex items-center text-gray-600">
                                    <input type="checkbox" onchange="window.location.href = this.value"
                                        value="{{route('books', array_merge(request()->except('page'), ['langue' => 'Allemand']))}}" {{request('langue') == 'Allemand' ? 'checked' : ''}}
                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2">Allemand</span>
                                </label>
                                <label class="flex items-center text-gray-600">
                                    <input type="checkbox" onchange="window.location.href = this.value"
                                        value="{{route('books', array_merge(request()->except('page'), ['langue' => 'Arabe']))}}" {{request('langue') == 'Arabe' ? 'checked' : ''}}
                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2">Arabe</span>
                                </label>
                                <label class="flex items-center text-gray-600">
                                    <input type="checkbox"  onchange="window.location.href = this.value"
                                        value="{{route('books', array_merge(request()->except('page'), ['langue' => 'Anglais']))}}" {{request('langue') == 'Anglais' ? 'checked' : ''}}
                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2">Anglais</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <h5 class="font-semibold text-gray-800 mb-3">Tags</h5>
                            <div class="space-y-2">
                                <label class="flex items-center text-gray-600">
                                    <input type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2">HTML</span>
                                </label>
                                <label class="flex items-center text-gray-600">
                                    <input type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2">Laravel</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </aside>

                <!-- Right content (Book List) -->
                @isset($books)
                    <div class="col-span-1 lg:col-span-3">
                        <div
                            class="flex items-center justify-between mb-6 bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                            <span class="text-gray-600">{{$booksCount}} Livres trouvé</span>
                            <div class="flex items-center">
                                <span class="text-gray-600 mr-2">Trier par:</span>
                                <select name="sort" onchange="window.location.href=this.value"
                                    class="bg-gray-50 border border-gray-300 rounded-md text-gray-800 focus:ring-blue-500 focus:border-blue-500 text-sm p-2">
                                    <option value="{{route('books', array_merge(request()->except('page', 'sort')))}}" >newest </option>
                                    <option value="{{route('books', array_merge(request()->except('page'), ['sort' => 'created_at-asc']) )}}" {{request('sort') == 'created_at-asc' ? 'selected' : '' }}>oldest</option>
                                    <option value="{{route('books', array_merge(request()->except('page'), ['sort' => 'designation-desc']) )}}" {{request('sort') == 'designation-desc' ? 'selected' : '' }}>title</a></option>
                                    <option value="{{route('books', array_merge(request()->except('page'), ['sort' => 'prix-desc']) )}}" {{request('sort') == 'prix-' ? 'selected' : '' }}>price (hight to low) </option>
                                    <option value="{{route('books', array_merge(request()->except('page'), ['sort' => 'prix-asc']) )}}" {{request('sort') == 'prix-asc' ? 'selected' : '' }}>price (low to hight)</option>
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
                                                <li>{{ $book->categorie }} </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href={{ route('book.show', $book) }}
                                            class="text-blue-600 hover:underline">Détails</a>
                                        <span class="block text-lg font-semibold text-gray-900 mt-1">{{ $book->prix }} </span>
                                    </div>
                                </div>
                            @endforeach
                        
                    </div>

                    @if ($books->hasPages())
                        <div class="mt-12 flex justify-center">
                            {{ $books->links() }}
                        </div>
                    @endif

                @endisset    
                </div>
            </div>
        </div>
    </main>
@endsection
