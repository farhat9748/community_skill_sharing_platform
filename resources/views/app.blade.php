```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'SkillShare') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="min-h-screen">

        {{-- Navigation --}}
        <nav class="bg-white border-b border-gray-200 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex justify-between items-center h-16">

                    {{-- Logo --}}
                    <a href="{{ url('/home') }}"
                       class="text-xl font-bold text-violet-700">
                        SkillShare
                    </a>

                    {{-- Navigation Links --}}
                    <div class="flex items-center gap-6">

                        <a href="{{ url('/home') }}"
                           class="text-sm font-medium text-gray-600 hover:text-violet-600">
                            Home
                        </a>

                        <a href="{{ url('/connect-share') }}"
                           class="text-sm font-medium text-violet-600">
                            Connect & Share
                        </a>

                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit"
                                        class="text-sm font-medium text-red-600 hover:text-red-800">
                                    Logout
                                </button>
                            </form>
                        @endauth

                    </div>

                </div>

            </div>
        </nav>


        {{-- Header --}}
        @isset($header)

            <header class="bg-white shadow-sm">

                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                    {{ $header }}

                </div>

            </header>

        @endisset


        {{-- Main Content --}}
        <main>

            {{ $slot }}

        </main>

    </div>

</body>

</html>
```
