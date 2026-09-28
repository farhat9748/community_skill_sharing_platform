<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Learn More') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">

            {{-- Hero Header --}}
            <div class="text-center max-w-3xl mx-auto space-y-4">
                <span class="px-3 py-1 text-xs font-semibold uppercase tracking-wider text-indigo-700 bg-indigo-100 rounded-full">
                    Platform Overview
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                    Everything you need to scale your workflow
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Discover how our platform simplifies complex tasks, automates your daily operations, and helps your team collaborate efficiently.
                </p>
            </div>

            {{-- Value Proposition Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Feature 1 --}}
                <div class="bg-white rounded-2xl p-8 border border-gray-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Lightning Fast Performance</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Built on top of modern architecture to deliver millisecond response times and zero-latency data syncing.
                    </p>
                </div>

                {{-- Feature 2 --}}
                <div class="bg-white rounded-2xl p-8 border border-gray-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise Security</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        End-to-end encryption, automated backups, and strict RBAC controls keep your data safe at all times.
                    </p>
                </div>

                {{-- Feature 3 --}}
                <div class="bg-white rounded-2xl p-8 border border-gray-200 shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 0120 12M11 3.055A9.001 9.001 0 003 12m8-8.945V12m0 0l4.07 4.07M11 12H3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Real-Time Analytics</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Gain insights instantly with actionable metrics, customizable dashboards, and scheduled report exports.
                    </p>
                </div>
            </div>

            {{-- Detailed Feature Section / Breakdown --}}
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-8 md:p-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="space-y-4">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                        Seamless integration with your existing stack
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Whether you are using third-party APIs, database hooks, or custom webhooks, our platform plugs into your existing workflow without requiring a complete rewrite.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-center space-x-2">
                            <span class="text-green-500 font-bold">✓</span>
                            <span>RESTful & GraphQL API support</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="text-green-500 font-bold">✓</span>
                            <span>Automated Webhook triggers</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="text-green-500 font-bold">✓</span>
                            <span>SDKs for PHP, JavaScript, Python, and Go</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-100 rounded-xl p-6 border border-gray-200 font-mono text-xs text-gray-800 overflow-x-auto">
                    <p class="text-gray-400 mb-2">// Example SDK Initialization</p>
                    <p><span class="text-purple-600">use</span> App\Services\ClientService;</p>
                    <br>
                    <p><span class="text-blue-600">$client</span> = <span class="text-purple-600">new</span> ClientService([</p>
                    <p class="pl-4">'api_key' => config('services.api.key'),</p>
                    <p class="pl-4">'environment' => 'production',</p>
                    <p>]);</p>
                    <br>
                    <p><span class="text-blue-600">$response</span> = <span class="text-blue-600">$client</span>->connect();</p>
                </div>
            </div>

            {{-- Call To Action (CTA) --}}
            <div class="bg-gradient-to-r from-indigo-600 to-indigo-800 rounded-2xl p-8 md:p-12 text-center text-white space-y-6">
                <h2 class="text-3xl font-extrabold">Ready to take the next step?</h2>
                <p class="text-indigo-100 max-w-xl mx-auto text-base">
                    Start exploring today or get in touch with our team to request a personalized demo.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded-lg shadow hover:bg-gray-100 transition">
                        Get Started Free
                    </a>
                    <a href="#" class="px-6 py-3 bg-indigo-700 text-white font-semibold rounded-lg hover:bg-indigo-600 transition border border-indigo-500">
                        Contact Sales
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>