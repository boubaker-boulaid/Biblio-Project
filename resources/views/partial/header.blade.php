    <header class="bg-white border-b border-gray-200 shadow-sm">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <a href="{{ route('index') }}" class="text-gray-800 font-bold text-xl">{{ __('layout.brand') }}</a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('index') }}"
                                class="text-gray-600 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">{{ __('layout.nav_home') }}</a>
                            <a href="{{ route('book.index') }}"
                                class="text-gray-600 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">{{ __('layout.nav_books') }}</a>
                            <a href="{{ route('books') }}"
                                class="text-gray-600 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">{{ __('layout.nav_search') }}</a>
                            <a href="{{ route('about') }}"
                                class="text-gray-600 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">{{ __('layout.nav_about') }}</a>
                            <a href="{{ route('contact') }}"
                                class="text-gray-600 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">{{ __('layout.nav_contact') }}</a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <form method="POST" id="lang-form">
                        @csrf
                        <select name="local" onchange="this.form.action=`/language/${this.value}`; this.form.submit();"
                            class="py-1.5 pl-2 pr-6 rounded border border-gray-300 bg-white text-gray-700 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 cursor-pointer hover:bg-gray-50 transition-colors">
                            <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}> @lang('layout.lang_en')</option>
                            <option value="fr" {{ session('locale') == 'fr' ? 'selected' : '' }}> @lang('layout.lang_fr')</option>
                            <option value="ar" {{ session('locale') == 'ar' ? 'selected' : '' }}> @lang('layout.lang_ar')</option>
                        </select>
                    </form>
                </div>

                <div class="hidden md:block">
                    @auth
                        @include('layouts.navigation')
                    @else
                        <div class="ml-4 flex items-center md:ml-6">
                            <a href="{{ route('register') }}"
                                class="text-gray-600 hover:bg-gray-100 font-medium rounded-md text-sm px-3 py-2">{{ __('layout.nav_register') }}</a>
                            <a href="{{ route('login') }}"
                                class="ml-3 text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-md text-sm px-3 py-2">{{ __('layout.nav_login') }}</a>
                        </div>
                    @endauth
                </div>

            </div>
        </nav>
    </header>
