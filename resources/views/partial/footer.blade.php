 <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-semibold text-gray-800">{{ __('layout.footer_about_title') }}</h4>
                    <p class="mt-2 text-gray-500">{{ __('layout.footer_about_text') }}</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-800">{{ __('layout.footer_links_title') }}</h4>
                    <ul class="mt-2 space-y-2">
                        <li><a href="{{ route('books') }}" class="text-gray-500 hover:text-gray-900">{{ __('layout.nav_search') }}</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-500 hover:text-gray-900">{{ __('layout.nav_about') }}</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-500 hover:text-gray-900">{{ __('layout.nav_contact') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-800">{{ __('layout.footer_contact_title') }}</h4>
                    <ul class="mt-2 space-y-2 text-gray-500">
                        <li>{{ __('layout.footer_contact_email') }}</li>
                        <li>{{ __('layout.footer_contact_phone') }}</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-800">{{ __('layout.footer_newsletter_title') }}</h4>
                    <form class="mt-4 flex">
                        <input type="email" placeholder="{{ __('layout.footer_newsletter_placeholder') }}"
                            class="w-full px-3 py-2 rounded-l-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit"
                            class="px-4 py-2 rounded-r-md bg-blue-600 hover:bg-blue-700 text-white font-semibold">{{ __('layout.footer_newsletter_button') }}</button>
                    </form>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-8 text-center">
                <p class="text-gray-500 text-sm">{{ __('layout.footer_copyright', ['year' => date('Y')]) }}</p>
            </div>
        </div>
    </footer>
