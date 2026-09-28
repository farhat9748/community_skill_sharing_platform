<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SkillShare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-purple-50 min-h-screen flex flex-col">

    <!-- Top Navigation -->
    <header class="w-full py-5 px-6 flex justify-between items-center">
        <a href="/home" class="flex items-center space-x-2">
            <div class="bg-purple-600 text-white p-1.5 rounded-lg">
                <i class="fas fa-users text-lg"></i>
            </div>
            <span class="text-xl font-bold text-purple-700">SkillShare</span>
        </a>
        <a href="/home" class="text-purple-600 hover:text-purple-800 font-medium flex items-center space-x-1 transition">
            <i class="fas fa-arrow-left text-sm"></i>
            <span>Back to Home</span>
        </a>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center px-4 py-8">
        <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">

            <!-- Left Purple Panel -->
            <div class="bg-gradient-to-br from-purple-600 to-indigo-700 text-white p-10 md:w-5/12 flex flex-col justify-center">
                <div class="mb-8">
                    <div class="bg-white/20 w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold mb-3">Welcome Back</h1>
                    <p class="text-purple-100 leading-relaxed">
                        Login to continue your journey of learning, teaching and sharing valuable skills.
                    </p>
                </div>

                <div class="space-y-4 mt-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full border-2 border-white flex items-center justify-center">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <span>Share your skills</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full border-2 border-white flex items-center justify-center">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <span>Learn from others</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full border-2 border-white flex items-center justify-center">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <span>Build new connections</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full border-2 border-white flex items-center justify-center">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <span>Grow together</span>
                    </div>
                </div>
            </div>

            <!-- Right Form Panel -->
            <div class="p-10 md:w-7/12 flex flex-col justify-center">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-1">Welcome Back!</h2>
                    <p class="text-gray-500">Login to your SkillShare account.</p>
                </div>

                <!-- Session Status / Errors -->
                @if (session('status'))
                    <div class="mb-4 p-3 bg-green-50 text-green-700 rounded-lg text-sm">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-50 text-red-600 rounded-lg text-sm">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                               placeholder="example@gmail.com"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition @error('email') border-red-500 @enderror">
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password <span class="text-red-500">*</span>
                            </label>
                            <a href="#" class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                                Forgot Password?
                            </a>
                        </div>
                        <input id="password" type="password" name="password" required
                               placeholder="Enter your password"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition @error('password') border-red-500 @enderror">
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                               class="h-4 w-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                        <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                            class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3.5 rounded-full shadow-md transition flex items-center justify-center space-x-2">
                        <i class="fas fa-lock text-sm"></i>
                        <span>Login</span>
                    </button>
                </form>

                <p class="mt-8 text-center text-gray-600 text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-purple-600 hover:text-purple-800 font-semibold">
                        Create Account
                    </a>
                </p>
            </div>
        </div>
    </main>

</body>
</html>