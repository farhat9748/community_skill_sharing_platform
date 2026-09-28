<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Connect & Share') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen" x-data="connectShare()">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Hero Section --}}
            <div class="bg-gradient-to-r from-violet-700 to-purple-800 rounded-2xl p-8 md:p-12 text-white shadow-xl flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                <div class="max-w-2xl space-y-3">
                    <span class="px-3 py-1 text-xs font-semibold uppercase tracking-wider bg-violet-500 text-violet-100 rounded-full">
                        Community Hub
                    </span>
                    <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight">
                        Connect, Learn, and Grow Together
                    </h1>
                    <p class="text-violet-100 text-sm md:text-base leading-relaxed">
                        Meet online or in person to exchange knowledge. Leave constructive feedback after your sessions to keep our community safe and high-quality.
                    </p>
                </div>
                
                {{-- Quick Stats Card --}}
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 text-center flex gap-6 shrink-0">
                    <div>
                        <div class="text-2xl font-bold">12</div>
                        <div class="text-xs text-violet-200">Sessions Met</div>
                    </div>
                    <div class="border-r border-white/20"></div>
                    <div>
                        <div class="text-2xl font-bold">4.9 ★</div>
                        <div class="text-xs text-violet-200">User Rating</div>
                    </div>
                </div>
            </div>

            {{-- Main Dashboard Layout --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                {{-- Left & Center Column (2 Cols): Active & Past Sessions --}}
                <div class="lg:col-span-2 space-y-8">
                    
                    {{-- Upcoming Sessions Section --}}
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 space-y-6">
                        <div class="flex justify-between items-center border-b border-gray-100 pb-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Upcoming Sessions</h3>
                                <p class="text-xs text-gray-500">Scheduled online or in-person skill exchanges</p>
                            </div>
                            <span class="px-2.5 py-1 text-xs font-semibold bg-violet-100 text-violet-700 rounded-full">
                                2 Active
                            </span>
                        </div>

                        <div class="space-y-4">
                            {{-- Upcoming Card 1: Online --}}
                            <div class="p-5 rounded-xl border border-gray-200 bg-gray-50 flex flex-col md:flex-row justify-between md:items-center gap-4">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2 py-0.5 text-xs font-bold rounded bg-blue-100 text-blue-700">Online</span>
                                        <span class="text-xs text-gray-500 font-semibold">Today @ 4:00 PM</span>
                                    </div>
                                    <h4 class="font-bold text-gray-900">Python Basics with Marcus Vance</h4>
                                    <p class="text-xs text-gray-600">Exchange topic: Introduction to Data Structures</p>
                                </div>

                                <div class="flex items-center gap-2">
                                    <a href="https://meet.jit.si/skill-share-session" target="_blank" 
                                       class="px-4 py-2 bg-violet-600 text-white font-bold text-xs rounded-lg hover:bg-violet-700 transition flex items-center gap-1.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                        Join Video Call
                                    </a>
                                </div>
                            </div>

                            {{-- Upcoming Card 2: In-Person --}}
                            <div class="p-5 rounded-xl border border-gray-200 bg-gray-50 flex flex-col md:flex-row justify-between md:items-center gap-4">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2 py-0.5 text-xs font-bold rounded bg-emerald-100 text-emerald-700">In Person</span>
                                        <span class="text-xs text-gray-500 font-semibold">Thu, Sep 3 @ 10:00 AM</span>
                                    </div>
                                    <h4 class="font-bold text-gray-900">Acoustic Guitar Lessons with Sarah Chen</h4>
                                    <p class="text-xs text-gray-600">Location: Central Public Library (Study Room 3B)</p>
                                </div>

                                <div class="flex items-center gap-2">
                                    <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 font-semibold text-xs rounded-lg hover:bg-gray-100 transition">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Past Sessions & Feedback Section --}}
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 space-y-6">
                        <div class="border-b border-gray-100 pb-4">
                            <h3 class="text-lg font-bold text-gray-900">Completed Sessions & Feedback</h3>
                            <p class="text-xs text-gray-500">Leave ratings to build trust and maintain quality across the platform</p>
                        </div>

                        <div class="space-y-4">
                            {{-- Pending Review Card --}}
                            <div class="p-5 rounded-xl border border-amber-200 bg-amber-50/50 flex flex-col md:flex-row justify-between md:items-center gap-4">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2 py-0.5 text-xs font-bold rounded bg-amber-100 text-amber-800">Feedback Needed</span>
                                        <span class="text-xs text-gray-500">Completed yesterday</span>
                                    </div>
                                    <h4 class="font-bold text-gray-900">Sourdough Starter Workshop with Marco Rossi</h4>
                                </div>

                                <button @click="openModal('Marco Rossi', 'Sourdough Workshop')" 
                                    class="px-4 py-2 bg-amber-600 text-white font-bold text-xs rounded-lg hover:bg-amber-700 transition shadow-sm">
                                    Leave Review
                                </button>
                            </div>

                            {{-- Reviewed Card --}}
                            <div class="p-5 rounded-xl border border-gray-200 bg-white space-y-3">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-bold text-gray-900">Spanish Conversation Exchange with Elena Rostova</h4>
                                        <p class="text-xs text-gray-500">Completed Aug 20, 2026</p>
                                    </div>
                                    <div class="flex text-amber-400 text-sm">
                                        ★ ★ ★ ★ ★
                                    </div>
                                </div>
                                <blockquote class="text-xs text-gray-600 italic bg-gray-50 p-3 rounded-lg border border-gray-100">
                                    "Elena was super patient! We spent 30 mins speaking Spanish and 30 mins practicing web design fundamentals."
                                </blockquote>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Right Column (1 Col): Community Guidelines & Activity --}}
                <div class="space-y-6">
                    
                    {{-- Safe Exchange Guidelines --}}
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 space-y-4">
                        <h3 class="font-bold text-gray-900 text-base flex items-center gap-2">
                            <svg class="w-5 h-5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            Exchange Guidelines
                        </h3>
                        <ul class="text-xs text-gray-600 space-y-3">
                            <li class="flex items-start gap-2">
                                <span class="text-violet-600 font-bold">•</span>
                                <span><strong>Public Spaces:</strong> For in-person meetings, pick public cafes, libraries, or co-working spaces.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-violet-600 font-bold">•</span>
                                <span><strong>Punctuality:</strong> Respect each other's time. Message ahead if you're running late.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-violet-600 font-bold">•</span>
                                <span><strong>Honest Feedback:</strong> Constructive reviews help learners find reliable mentors.</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Quick Connect Callout --}}
                    <div class="bg-violet-50 rounded-2xl border border-violet-100 p-6 space-y-3 text-center">
                        <h4 class="font-bold text-violet-900 text-sm">Looking for more peers?</h4>
                        <p class="text-xs text-violet-700">Discover new subjects or post your learning requests to schedule more sessions.</p>
                        <a href="{{ route('find.index') }}" class="inline-block mt-2 px-4 py-2 bg-violet-600 text-white font-bold text-xs rounded-lg hover:bg-violet-700 transition">
                            Find New Connections &rarr;
                        </a>
                    </div>

                </div>

            </div>

        </div>

        {{-- Interactive Review / Feedback Modal --}}
        <div x-show="showModal" class="fixed inset-0 z-50 overflow-y-auto bg-gray-900/50 backdrop-blur-sm flex items-center justify-center p-4" x-cloak>
            <div class="bg-white rounded-2xl max-w-md w-full p-6 space-y-6 shadow-2xl" @click.away="showModal = false">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-bold text-gray-900">Leave Feedback</h3>
                    <button @click="showModal = false" class="text-gray-400 hover:text-gray-600 font-bold">&times;</button>
                </div>

                <form action="{{ route('reviews.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <p class="text-xs text-gray-500">Reviewing session with <span class="font-bold text-gray-800" x-text="targetUser"></span></p>
                        <p class="text-xs font-semibold text-gray-700" x-text="targetTopic"></p>
                    </div>

                    {{-- Rating Stars --}}
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-2">Rating</label>
                        <div class="flex gap-2">
                            <template x-for="star in [1,2,3,4,5]" :key="star">
                                <button type="button" @click="rating = star" class="text-2xl transition"
                                    :class="star <= rating ? 'text-amber-400' : 'text-gray-300'">
                                    ★
                                </button>
                            </template>
                        </div>
                        <input type="hidden" name="rating" :value="rating">
                    </div>

                    {{-- Written Review --}}
                    <div>
                        <label for="review_text" class="block text-xs font-semibold text-gray-700 mb-1">Your Review</label>
                        <textarea id="review_text" name="comment" rows="3" required placeholder="How was the session? Did you learn what you expected?"
                            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-violet-500 focus:ring-violet-500 text-xs"></textarea>
                    </div>

                    <div class="pt-2 flex justify-end gap-2">
                        <button type="button" @click="showModal = false" class="px-4 py-2 border border-gray-300 text-xs font-semibold rounded-lg hover:bg-gray-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-violet-600 text-white text-xs font-bold rounded-lg hover:bg-violet-700">
                            Submit Review
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    {{-- Alpine.js state handler --}}
    <script>
        function connectShare() {
            return {
                showModal: false,
                targetUser: '',
                targetTopic: '',
                rating: 5,
                openModal(user, topic) {
                    this.targetUser = user;
                    this.targetTopic = topic;
                    this.rating = 5;
                    this.showModal = true;
                }
            }
        }
    </script>
</x-app-layout>