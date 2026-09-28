<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Offer Your Skills') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen" x-data="skillForm()">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            {{-- Header Banner --}}
            <div class="bg-indigo-700 rounded-2xl p-8 text-white shadow-xl">
                <span class="text-xs font-semibold uppercase tracking-wider bg-indigo-500 text-indigo-100 px-3 py-1 rounded-full">
                    Share Your Knowledge
                </span>
                <h1 class="text-3xl font-extrabold mt-3">Become a Mentor or Teacher</h1>
                <p class="text-indigo-100 mt-2 text-sm md:text-base max-w-2xl">
                    Create your instructor profile and let your community know what you can teach—from coding and languages to cooking, music, or gardening.
                </p>
            </div>

            {{-- Form Card --}}
            <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 md:p-10 space-y-8">
                @csrf

                {{-- Section 1: Basic Profile Details --}}
                <div class="space-y-6">
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-100 pb-3">1. Instructor Profile</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="headline" class="block text-sm font-semibold text-gray-700">Profile Headline</label>
                            <input type="text" id="headline" name="headline" required placeholder="e.g. Senior Software Engineer & Guitarist" 
                                class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                        </div>

                        <div>
                            <label for="location" class="block text-sm font-semibold text-gray-700">Location / Availability</label>
                            <select id="location" name="teaching_mode" class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                                <option value="online">Online Only</option>
                                <option value="in-person">In-Person Only</option>
                                <option value="hybrid" selected>Hybrid (Online & In-Person)</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="bio" class="block text-sm font-semibold text-gray-700">About You & Teaching Style</label>
                        <textarea id="bio" name="bio" rows="4" required placeholder="Tell learners a bit about your experience, approach, and background..."
                            class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"></textarea>
                    </div>
                </div>

                {{-- Section 2: Category & Skills Selection --}}
                <div class="space-y-6">
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-100 pb-3">2. Skills You Can Teach</h3>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Quick-Select Categories</label>
                        <div class="flex flex-wrap gap-2">
                            <template x-for="category in presetCategories" :key="category">
                                <button type="button" @click="addSkill(category)" 
                                    class="px-3 py-1.5 rounded-full border border-gray-300 bg-gray-50 text-gray-700 text-xs font-medium hover:bg-indigo-50 hover:border-indigo-300 hover:text-indigo-600 transition">
                                    + <span x-text="category"></span>
                                </button>
                            </template>
                        </div>
                    </div>

                    {{-- Custom Skill Tag Input --}}
                    <div>
                        <label for="custom-skill" class="block text-sm font-semibold text-gray-700">Add Specific Skills</label>
                        <div class="flex mt-2 gap-2">
                            <input type="text" x-model="newSkill" @keydown.enter.prevent="addCustomSkill()" id="custom-skill" placeholder="e.g. Python, French Speaking, Sourdough Baking" 
                                class="flex-1 rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                            <button type="button" @click="addCustomSkill()" class="px-4 py-2 bg-gray-800 text-white font-medium text-sm rounded-lg hover:bg-gray-700 transition">
                                Add
                            </button>
                        </div>
                    </div>

                    {{-- Selected Skill Chips --}}
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-500 mb-2">Selected Skills List</label>
                        <div class="min-h-[48px] p-3 rounded-lg border border-dashed border-gray-300 bg-gray-50 flex flex-wrap gap-2">
                            <template x-if="selectedSkills.length === 0">
                                <span class="text-xs text-gray-400 italic">No skills selected yet. Click quick categories above or type custom ones.</span>
                            </template>
                            <template x-for="(skill, index) in selectedSkills" :key="index">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-indigo-100 text-indigo-800 space-x-1">
                                    <span x-text="skill"></span>
                                    <input type="hidden" name="skills[]" :value="skill">
                                    <button type="button" @click="removeSkill(index)" class="text-indigo-500 hover:text-indigo-900 ml-1 font-bold">&times;</button>
                                </span>
                            </template>
                        </div>
                    </div>
                </div>

                {{-- Section 3: Preferences & Rates --}}
                <div class="space-y-6">
                    <h3 class="text-lg font-bold text-gray-900 border-b border-gray-100 pb-3">3. Pricing & Availability</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="rate" class="block text-sm font-semibold text-gray-700">Hourly Rate (or Free/Volunteer)</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <input type="number" id="rate" name="hourly_rate" min="0" placeholder="0 for Free exchange"
                                    class="w-full rounded-lg border-gray-300 pl-7 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="experience" class="block text-sm font-semibold text-gray-700">Experience Level</label>
                            <select id="experience" name="experience_level" class="mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                                <option value="beginner">Beginner Friendly</option>
                                <option value="intermediate">Intermediate / Competent</option>
                                <option value="expert">Expert / Professional</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- Submit Action --}}
                <div class="pt-4 flex justify-end gap-3 border-t border-gray-100">
                    <a href="{{ route('dashboard') }}" class="px-5 py-2.5 rounded-lg border border-gray-300 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-indigo-600 text-white font-semibold text-sm rounded-lg hover:bg-indigo-700 shadow-sm transition">
                        Publish Profile & Offer Skills
                    </button>
                </div>

            </form>
        </div>
    </div>

    {{-- Alpine.js dynamic state management --}}
    <script>
        function skillForm() {
            return {
                presetCategories: ['Coding & Web Dev', 'Cooking & Baking', 'Music & Instruments', 'Languages', 'Gardening & Plants', 'Fitness & Yoga', 'Digital Marketing'],
                selectedSkills: ['Coding & Web Dev'],
                newSkill: '',
                addSkill(skill) {
                    if (!this.selectedSkills.includes(skill)) {
                        this.selectedSkills.push(skill);
                    }
                },
                addCustomSkill() {
                    const trimmed = this.newSkill.trim();
                    if (trimmed !== '' && !this.selectedSkills.includes(trimmed)) {
                        this.selectedSkills.push(trimmed);
                        this.newSkill = '';
                    }
                },
                removeSkill(index) {
                    this.selectedSkills.splice(index, 1);
                }
            }
        }
    </script>
</x-app-layout>