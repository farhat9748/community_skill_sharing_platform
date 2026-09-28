
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Skill Sharing Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-indigo-600 text-white shadow">

        <div class="max-w-7xl mx-auto px-6 py-4">

            <div class="flex items-center justify-between">

                <a href="{{ route('home') }}"
                   class="text-2xl font-bold">
                    SkillShare
                </a>

                <div class="flex items-center gap-4">

                    <a href="{{ route('home') }}"
                       class="hover:text-indigo-200">
                        Home
                    </a>

                    <a href="{{ route('skill') }}"
                       class="hover:text-indigo-200">
                        Skills
                    </a>

                    <a href="{{ route('share') }}"
                       class="hover:text-indigo-200">
                        Share
                    </a>

                    <a href="{{ route('help') }}"
                       class="hover:text-indigo-200">
                        Help
                    </a>

                </div>

            </div>

        </div>

    </nav>


    <!-- Dashboard Header -->

    <div class="max-w-7xl mx-auto px-6 py-8">

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

            <div>

                <h1 class="text-3xl font-bold text-gray-800">
                    Skill Sharing Dashboard
                </h1>

                <p class="text-gray-600 mt-2">
                    Learn, teach and share your skills with the community.
                </p>

            </div>

            <a href="{{ route('share') }}"
               class="bg-indigo-600 text-white px-5 py-3 rounded-lg hover:bg-indigo-700">
                + Share a Skill
            </a>

        </div>


        <!-- Statistics -->

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

            <div class="bg-white rounded-xl shadow p-6">

                <p class="text-gray-500">
                    Skills Offered
                </p>

                <h2 class="text-3xl font-bold text-indigo-600 mt-2">
                    {{ $mySkillsCount ?? 0 }}
                </h2>

            </div>


            <div class="bg-white rounded-xl shadow p-6">

                <p class="text-gray-500">
                    Upcoming Sessions
                </p>

                <h2 class="text-3xl font-bold text-green-600 mt-2">
                    {{ $upcomingSessionsCount ?? 0 }}
                </h2>

            </div>


            <div class="bg-white rounded-xl shadow p-6">

                <p class="text-gray-500">
                    Community Credits
                </p>

                <h2 class="text-3xl font-bold text-orange-500 mt-2">
                    0 pts
                </h2>

            </div>

        </div>


        <!-- Main Content -->

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">


            <!-- Community Skills -->

            <div class="lg:col-span-2 bg-white rounded-xl shadow p-6">

                <div class="flex justify-between items-center mb-5">

                    <h2 class="text-xl font-bold text-gray-800">
                        Skills Available in Community
                    </h2>

                    <a href="{{ route('skill') }}"
                       class="text-indigo-600 hover:underline">
                        View All
                    </a>

                </div>


                @forelse($communitySkills ?? [] as $skill)

                    <div class="border rounded-lg p-4 mb-4">

                        <div class="flex justify-between">

                            <div>

                                <span class="inline-block bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs">

                                    {{ $skill->category ?? 'General' }}

                                </span>

                                <h3 class="font-bold text-lg mt-2">

                                    {{ $skill->title }}

                                </h3>

                                <p class="text-gray-500 text-sm">

                                    Offered by
                                    {{ $skill->user->name ?? 'Community Member' }}

                                </p>

                            </div>


                            <div>

                                <a href="{{ route('skill') }}"
                                   class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm">

                                    Learn

                                </a>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="text-center py-10">

                        <p class="text-gray-500">
                            No community skills posted yet.
                        </p>

                        <a href="{{ route('share') }}"
                           class="inline-block mt-4 bg-indigo-600 text-white px-5 py-2 rounded-lg">

                            Share Your First Skill

                        </a>

                    </div>

                @endforelse

            </div>


            <!-- My Skills -->

            <div class="bg-white rounded-xl shadow p-6">

                <h2 class="text-xl font-bold text-gray-800 mb-5">

                    My Skill Listings

                </h2>


                @forelse($mySkills ?? [] as $skill)

                    <div class="border-b py-4">

                        <h3 class="font-semibold">

                            {{ $skill->title }}

                        </h3>

                        <p class="text-sm text-gray-500">

                            {{ $skill->category ?? 'General' }}

                        </p>

                    </div>

                @empty

                    <div class="text-center py-8">

                        <p class="text-gray-500">

                            You haven't listed any skills yet.

                        </p>

                        <a href="{{ route('share') }}"
                           class="inline-block mt-4 bg-green-600 text-white px-4 py-2 rounded-lg">

                            Offer a Skill

                        </a>

                    </div>

                @endforelse

            </div>

        </div>


        <!-- Skill Categories -->

        <div class="mt-8">

            <h2 class="text-2xl font-bold text-gray-800 mb-5">

                Popular Skills

            </h2>


            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">


                <div class="bg-white rounded-xl shadow p-6 text-center">

                    <div class="text-4xl mb-3">
                        🧵
                    </div>

                    <h3 class="font-bold">
                        Sewing
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Learn stitching and clothing design.
                    </p>

                </div>


                <div class="bg-white rounded-xl shadow p-6 text-center">

                    <div class="text-4xl mb-3">
                        💻
                    </div>

                    <h3 class="font-bold">
                        Computer & Coding
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Learn programming and computer skills.
                    </p>

                </div>


                <div class="bg-white rounded-xl shadow p-6 text-center">

                    <div class="text-4xl mb-3">
                        🍳
                    </div>

                    <h3 class="font-bold">
                        Cooking
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Learn cooking and new recipes.
                    </p>

                </div>


                <div class="bg-white rounded-xl shadow p-6 text-center">

                    <div class="text-4xl mb-3">
                        📚
                    </div>

                    <h3 class="font-bold">
                        Teaching
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Teach and learn academic skills.
                    </p>

                </div>

            </div>

        </div>


    </div>


    <!-- Footer -->

    <footer class="bg-gray-800 text-white mt-12">

        <div class="max-w-7xl mx-auto px-6 py-6 text-center">

            <p>
                © {{ date('Y') }} SkillShare Community.
                Learn. Teach. Share.
            </p>

        </div>

    </footer>


</body>

</html>
```
