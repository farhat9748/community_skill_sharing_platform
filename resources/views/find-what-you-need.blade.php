<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Find What You Need') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen" x-data="{ activeTab: 'browse', searchQuery: '', selectedCategory: 'all' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Header Hero --}}
            <div class="bg-gradient-to-r from-emerald-600 to-teal-700 rounded-2xl p-8 md:p-12 text-white shadow-xl flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="max-w-2xl space-y-3">
                    <span class="px-3 py-1 text-xs font-semibold uppercase tracking-wider bg-emerald-500 text-emerald-100 rounded-full">
                        Community Marketplace
                    </span>
                    <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight">
                        Learn new skills or find expert help
                    </h1>
                    <p class="text-emerald-100 text-sm md:text-base leading-relaxed">
                        Browse skills offered by people near you, or post a custom request to get matched with members who can help you grow.
                    </p>
                </div>

                {{-- Primary Tab Switcher --}}
                <div class="bg-emerald-800/60 p-1.5 rounded-xl border border-emerald-500/40 flex shrink-0 gap-1 self-start md:self-auto">
                    <button @click="activeTab = 'browse'" 
                        :class="activeTab === 'browse' ? 'bg-white text-emerald-900 shadow-sm' : 'text-emerald-100 hover:text-white'"
                        class="px-5 py-2.5 rounded-lg text-sm font-bold transition">
                        Browse Skills
                    </button>
                    <button @click="activeTab = 'post-request'" 
                        :class="activeTab === 'post-request' ? 'bg-white text-emerald-900 shadow-sm' : 'text-emerald-100 hover:text-white'"
                        class="px-5 py-2.5 rounded-lg text-sm font-bold transition">
                        Post a Request
                    </button>
                </div>
            </div>

            {{-- TAB 1: BROWSE SKILLS --}}
            <div x-show="activeTab === 'browse'" class="space-y-6">
                
                {{-- Search & Filter Bar --}}
                <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm flex flex-col md:flex-row gap-4 justify-between items-center">
                    <div class="relative w-full md:w-96">
                        <input type="text" x-model="searchQuery" placeholder="Search skills (e.g. Python, Piano, Spanish)..."
                            class="w-full pl-10 pr-4 py-2.5 text-sm rounded-lg border-gray-300 focus:border-emerald-500 focus:ring-emerald-500">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>

                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <select x-model="selectedCategory" class="w-full md:w-48 text-sm rounded-lg border-gray-300 focus:border-emerald-500 focus:ring-emerald-500">
                            <option value="all">All Categories</option>
                            <option value="tech">Coding & Tech</option>
                            <option value="creative">Music & Art</option>
                            <option value="languages">Languages</option>
                            <option value="lifestyle">Cooking & Home</option>
                        </select>
                    </div>
                </div>

                {{-- Skill Cards Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    {{-- Sample Card 1 --}}
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition flex flex-col justify-between p-6">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-md text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    Coding & Tech
                                </span>
                                <span class="text-xs font-bold text-gray-500">$25 / hr</span>
                            </div>

                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Full-Stack Web Development</h3>
                                <p class="text-xs text-gray-500 mt-1">Offered by <span class="font-semibold text-gray-700">Alex Rivera</span></p>
                            </div>

                            <p class="text-sm text-gray-600 line-clamp-3">
                                Learn HTML, CSS, JavaScript, and Laravel from scratch. I offer 1-on-1 hands-on coding sessions for beginners.
                            </p>

                            <div class="flex flex-wrap gap-1.5 pt-2">
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-medium">Laravel</span>
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-medium">Vue.js</span>
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-medium">Tailwind</span>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs text-gray-500 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 inline-block"></span> Online / In-Person
                            </span>
                            <a href="#" class="px-4 py-2 bg-emerald-600 text-white rounded-lg text-xs font-bold hover:bg-emerald-700 transition">
                                Connect & Match
                            </a>
                        </div>
                    </div>

                    {{-- Sample Card 2 --}}
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition flex flex-col justify-between p-6">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-md text-xs font-semibold bg-purple-50 text-purple-700 border border-purple-200">
                                    Music & Art
                                </span>
                                <span class="text-xs font-bold text-emerald-600">Free Exchange</span>
                            </div>

                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Acoustic Guitar for Beginners</h3>
                                <p class="text-xs text-gray-500 mt-1">Offered by <span class="font-semibold text-gray-700">Sarah Chen</span></p>
                            </div>

                            <p class="text-sm text-gray-600 line-clamp-3">
                                Happy to teach fundamental chords, rhythm patterns, and popular songs in exchange for conversational Spanish practice.
                            </p>

                            <div class="flex flex-wrap gap-1.5 pt-2">
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-medium">Guitar</span>
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-medium">Music Theory</span>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs text-gray-500 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 inline-block"></span> Online Only
                            </span>
                            <a href="#" class="px-4 py-2 bg-emerald-600 text-white rounded-lg text-xs font-bold hover:bg-emerald-700 transition">
                                Connect & Match
                            </a>
                        </div>
                    </div>

                    {{-- Sample Card 3 --}}
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition flex flex-col justify-between p-6">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-md text-xs font-semibold bg-orange-50 text-orange-700 border border-orange-200">
                                    Cooking & Home
                                </span>
                                <span class="text-xs font-bold text-gray-500">$20 / hr</span>
                            </div>

                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Artisanal Sourdough Baking</h3>
                                <p class="text-xs text-gray-500 mt-1">Offered by <span class="font-semibold text-gray-700">Marco Rossi</span></p>
                            </div>

                            <p class="text-sm text-gray-600 line-clamp-3">
                                Master starter cultures, hydration ratios, and oven techniques to bake bakery-quality sourdough at home.
                            </p>

                            <div class="flex flex-wrap gap-1.5 pt-2">
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-medium">Baking</span>
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-medium">Culinary</span>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs text-gray-500 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 inline-block"></span> In-Person
                            </span>
                            <a href="#" class="px-4 py-2 bg-emerald-600 text-white rounded-lg text-xs font-bold hover:bg-emerald-700 transition">
                                Connect & Match
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- TAB 2: POST A REQUEST --}}
            <div x-show="activeTab === 'post-request'" class="max-w-3xl mx-auto" x-cloak>
                <form action="{{ route('requests.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 md:p-10 space-y-6">
                    @csrf

                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Post a Learning Request</h3>
                        <p class="text-sm text-gray-500 mt-1">Can't find what you need? Describe what you're looking to learn and let experts contact you.</p>
                    </div>

                    <hr class="border-gray-100" />

                    <div>
                        <label for="request_title" class="block text-sm font-semibold text-gray-700">What do you want to learn?</label>
                        <input type="text" id="request_title" name="title" required placeholder="e.g. Need help preparing for a French B2 exam"
                            class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 text-sm">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="category" class="block text-sm font-semibold text-gray-700">Category</label>
                            <select id="category" name="category" class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 text-sm">
                                <option value="tech">Coding & Tech</option>
                                <option value="creative">Music & Art</option>
                                <option value="languages">Languages</option>
                                <option value="lifestyle">Cooking & Home</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="budget" class="block text-sm font-semibold text-gray-700">Preferred Rate / Exchange</label>
                            <input type="text" id="budget" name="budget" placeholder="e.g. $20/hr, Skill Swap, or Free"
                                class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700">Details & Goals</label>
                        <textarea id="description" name="description" rows="4" required placeholder="Explain your current level, goals, and availability..."
                            class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 text-sm"></textarea>
                    </div>

                    <div class="pt-4 flex justify-end gap-3 border-t border-gray-100">
                        <button type="button" @click="activeTab = 'browse'" class="px-5 py-2.5 rounded-lg border border-gray-300 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-2.5 bg-emerald-600 text-white font-semibold text-sm rounded-lg hover:bg-emerald-700 shadow-sm transition">
                            Publish Request
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>