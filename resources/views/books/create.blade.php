@extends('layouts.app')
@section('titre', __('books.create.title'))
@section('content')

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-md">
                <h2 class="text-3xl text-center font-bold text-gray-900 mb-6">{{ __('books.create.add_new') }}</h2>
                
                @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6 rounded-r-md">
                        <p class="text-sm text-red-700 font-bold">{{ __('books.create.error_summary') }}</p>
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6 rounded-r-md">
                        <p class="text-sm text-red-700 font-bold">{{ session('error') }}</p>
                    </div>
                @endif

                <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="m-4">
                        <label for="designation">{{ __('books.designation') }}</label>
                        <input type="text" id="designation" name="designation"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            
                            value="{{old('designation')}}">
                        @error('designation')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="auteur">{{ __('books.author') }}</label>
                        <input type="text" id="auteur" name="auteur"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('auteur')}}">
                        @error('auteur')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="m-4">
                        <label for="prix">{{ __('books.price') }}</label>
                        <input type="number" id="prix" name="prix"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('prix')}}">
                        @error('prix')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="type">{{ __('books.type') }}</label>
                        <input type="text" id="type" name="type"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('type')}}">
                        @error('type')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="annee">{{ __('books.year') }}</label>
                        <input type="date" id="annee" name="annee"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('annee')}}">
                        @error('annee')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="m-4">
                        <label for="categories">{{ __('books.category') }}</label>
                        <select name="categories[]" multiple
                            class="w-full bg-gray-50 border border-gray-300 rounded-md text-gray-800 focus:ring-blue-500 focus:border-blue-500 text-sm p-2.5">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"  {{ in_array($category->id, old('categories', [])) ? 'selected' : ''}}>
                                    {{$category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('categories')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="description">{{ __('books.description') }}</label>
                        <textarea name="description" id="description" cols="30" rows="10"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            {{old('description')}}
                        </textarea>
                        @error('description')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="cover">{{ __('books.cover') }}</label>
                        <input type="file" id="cover" name="cover"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('cover')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="flex justify-center">
                        <a href="{{route('book.index')}}"
                            class="text-center px-5">{{ __('books.create.cancel') }}</a>
                        <button type="submit"
                            class="px-4 w-56 text-2xl text-center h-15 py-2 rounded-md bg-blue-600 hover:bg-blue-700 text-white font-semibold">{{ __('books.create.submit_add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
