<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

```
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Get Started</title>

{{-- Tailwind CSS CDN --}}
<script src="https://cdn.tailwindcss.com"></script>
```

</head>

<body class="bg-gray-50">

```
{{-- Header --}}
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Get Started
        </h2>

    </div>
</header>


{{-- Main Content --}}
<main class="py-12 bg-gray-50 min-h-screen">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">


        {{-- Hero Section --}}
        <div class="bg-indigo-700 rounded-2xl shadow-xl overflow-hidden text-white p-8 md:p-12">

            <div class="max-w-3xl">

                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-indigo-500 text-indigo-100 uppercase tracking-wide">
                    Welcome aboard
                </span>

                <h1 class="mt-4 text-3xl md:text-5xl font-extrabold tracking-tight">

                    Let's get your account set up,
                    {{ Auth::user()->name ?? 'User' }}!

                </h1>

                <p class="mt-4 text-lg text-indigo-100">

                    Follow the quick steps below to configure your workspace
                    and launch your first project in minutes.

                </p>

            </div>

        </div>


        {{-- Setup Guide --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 md:p-8">

            <h3 class="text-xl font-bold text-gray-900 mb-6">
                Setup Guide
            </h3>


            <div class="space-y-6">


                {{-- Step 1 --}}
                <div class="flex items-start space-x-4">

                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-indigo-600 text-white flex items-center justify-center font-bold text-sm">
                        1
                    </div>

                    <div class="flex-1">

                        <h4 class="text-base font-semibold text-gray-900">
                            Complete your profile
                        </h4>

                        <p class="text-sm text-gray-600 mt-1">
                            Add your avatar, bio, and time zone to personalize your dashboard.
                        </p>


                        @if (Route::has('profile.edit'))

                            <a href="{{ route('profile.edit') }}"
                               class="inline-flex items-center mt-3 text-sm font-semibold text-indigo-600 hover:text-indigo-500">

                                Update profile →

                            </a>

                        @else

                            <span class="inline-block mt-3 text-sm text-gray-400">
                                Profile setup coming soon
                            </span>

                        @endif

                    </div>

                </div>


                <hr class="border-gray-100">


                {{-- Step 2 --}}
                <div class="flex items-start space-x-4">

                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-indigo-600 text-white flex items-center justify-center font-bold text-sm">
                        2
                    </div>

                    <div class="flex-1">

                        <h4 class="text-base font-semibold text-gray-900">
                            Create your first workspace
                        </h4>

                        <p class="text-sm text-gray-600 mt-1">
                            Set up a dedicated project area and invite team members to collaborate.
                        </p>

                        <button type="button"
                                class="mt-3 px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition">

                            Create Workspace

                        </button>

                    </div>

                </div>


                <hr class="border-gray-100">


                {{-- Step 3 --}}
                <div class="flex items-start space-x-4">

                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-sm">
                        3
                    </div>

                    <div class="flex-1">

                        <h4 class="text-base font-semibold text-gray-900">
                            Connect integrations
                        </h4>

                        <p class="text-sm text-gray-600 mt-1">
                            Link your GitHub, Slack, or Google services to automate your workflow.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- Helpful Resources --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


            {{-- Documentation --}}
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">

                <h4 class="font-bold text-gray-900">
                    Documentation
                </h4>

                <p class="text-sm text-gray-600 mt-2">
                    Explore technical guides and API references to build faster.
                </p>

                <a href="#"
                   class="mt-4 inline-block text-sm font-medium text-indigo-600 hover:underline">

                    Read docs

                </a>

            </div>


            {{-- Community --}}
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">

                <h4 class="font-bold text-gray-900">
                    Community Forum
                </h4>

                <p class="text-sm text-gray-600 mt-2">
                    Ask questions, share ideas, and connect with other creators.
                </p>

                <a href="#"
                   class="mt-4 inline-block text-sm font-medium text-indigo-600 hover:underline">

                    Join community

                </a>

            </div>


            {{-- Support --}}
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">

                <h4 class="font-bold text-gray-900">
                    Support
                </h4>

                <p class="text-sm text-gray-600 mt-2">
                    Need help? Get in touch with our technical support team anytime.
                </p>

                <a href="#"
                   class="mt-4 inline-block text-sm font-medium text-indigo-600 hover:underline">

                    Contact us

                </a>

            </div>

        </div>

    </div>

</main>
```

</body>

</html>
