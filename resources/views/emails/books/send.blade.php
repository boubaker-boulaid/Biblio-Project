<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details: {{ $book->designation }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-900 m-0 p-0">
    <div class="max-w-2xl mx-auto my-10 bg-white rounded-2xl overflow-hidden shadow-xl border border-slate-100">
        <!-- Header -->
        <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-fuchsia-600 p-10 text-center">
            <h1 class="text-3xl font-extrabold text-white tracking-tight m-0">Biblio Project</h1>
            <p class="text-indigo-100 mt-2 text-lg font-medium opacity-90">Your Requested Book Details</p>
        </div>

        <!-- Content -->
        <div class="p-8 md:p-12">
            @if($book->cover && $book->cover !== 'no_cover.jpg')
            <div class="flex justify-center mb-8">
                <img src="{{ asset('covers/' . $book->cover) }}" alt="{{ $book->designation }}" class="w-48 h-auto rounded-lg shadow-lg border-4 border-white">
            </div>
            @endif

            <div class="border-b border-slate-200 pb-6 mb-8">
                <h2 class="text-2xl font-bold text-slate-800 leading-tight">{{ $book->designation }}</h2>
                <p class="text-indigo-600 font-semibold mt-1">By {{ $book->auteur }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-8 mb-10">
                <div class="flex flex-col">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Category</span>
                    <span class="text-slate-700 font-medium">{{ $book->categorie }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Language</span>
                    <span class="text-slate-700 font-medium">{{ $book->langue }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Publisher</span>
                    <span class="text-slate-700 font-medium">{{ $book->editeur }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Type</span>
                    <span class="text-slate-700 font-medium">{{ $book->type }}</span>
                </div>
                @if($book->annee)
                <div class="flex flex-col">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Year</span>
                    <span class="text-slate-700 font-medium">{{ \Carbon\Carbon::parse($book->annee)->format('Y') }}</span>
                </div>
                @endif
                <div class="flex flex-col">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Price</span>
                    <div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-bold bg-emerald-50 text-emerald-700 border border-emerald-100">
                            {{ number_format($book->prix, 2) }} DH
                        </span>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-indigo-500">
                <h3 class="text-sm font-bold text-slate-800 uppercase tracking-widest mb-3">Description</h3>
                <p class="text-slate-600 leading-relaxed text-sm">
                    {{ $book->description }}
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-slate-50 border-t border-slate-100 p-8 text-center">
            <p class="text-slate-400 text-xs m-0">
                &copy; {{ date('Y') }} <span class="font-semibold text-slate-500">Biblio Project</span>. All rights reserved.
            </p>
            <p class="text-slate-400 text-[10px] mt-2 italic">
                This is an automated message. Please do not reply directly to this email.
            </p>
        </div>
    </div>
</body>
</html>
