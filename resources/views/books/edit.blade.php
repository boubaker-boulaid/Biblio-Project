@extends('layouts.app')
@section('titre', 'modifier un livre')
@section('content')

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-md">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Modifier {{$book->designation}} </h2>
                
                @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6 rounded-r-md">
                        <p class="text-sm text-red-700 font-bold">Veuillez corriger les erreurs ci-dessous.</p>
                    </div>
                @endif

                <form action="{{ route('book.update', $book) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="m-4">
                        <label for="designation">Designation</label>
                        <input type="text" id="designation" name="designation"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            
                            value="{{old('designation' , $book->designation ?? '')}}">
                        @error('designation')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="auteur">Auteur</label>
                        <input type="text" id="auteur" name="auteur"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('auteur' , $book->auteur ?? '')}}">
                        @error('auteur')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="m-4">
                        <label for="prix">Prix</label>
                        <input type="number" id="prix" name="prix"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('prix' , $book->prix ?? '')}}">
                        @error('prix')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="type">Type</label>
                        <input type="text" id="type" name="type"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('type' , $book->type ?? '')}}">
                        @error('type')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="annee">Annee</label>
                        <input type="date" id="annee" name="annee"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('annee' , $book->annee ?? '')}}">
                        @error('annee')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="m-4">
                        <label for="categorie">Categorie</label>
                        <input type="text" id="categorie" name="categorie"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{old('categorie', $book->categorie ?? '')}}">
                        @error('categorie')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="description">description</label>
                        <textarea name="description" id="description" cols="30" rows="10"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            {{old('description', $book->description ?? '')}}
                        </textarea>
                        @error('description')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="m-4">
                        <label for="cover">Cover</label>
                        <input type="file" id="cover" name="cover"
                            class="w-full px-3 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('cover')
                            <span class="text-red-500 text-sm mt-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="flex justify-center items-center">
                        <a href="{{route('book.index')}}"
                            class="text-center px-5">Annuler</a>
                        <button type="submit"
                            class="px-4 w-56 text-2xl text-center h-15 py-2 rounded-md bg-blue-600 hover:bg-blue-700 text-white font-semibold">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

