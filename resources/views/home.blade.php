<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Skill Sharing Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- ========== NAVBAR ========== -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo / Heading -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-hands-helping text-indigo-600 text-2xl"></i>
                    <a href="/home" class="text-xl font-bold text-indigo-700 hover:text-indigo-900">
                        Join Platform
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-gray-600 hover:text-indigo-600 font-medium transition">About Us</a>
                    <a href="#help" class="text-gray-600 hover:text-indigo-600 font-medium transition">How to Help</a>
                    <a href="#contact" class="text-gray-600 hover:text-indigo-600 font-medium transition">Contact Us</a>
                    <a href="/login" class="text-gray-600 hover:text-indigo-600 font-medium transition">Login</a>
                    <a href="/register" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg font-medium transition">
                        Register
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-indigo-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-3 space-y-3">
                <a href="#about" class="block text-gray-600 hover:text-indigo-600">About Us</a>
                <a href="#help" class="block text-gray-600 hover:text-indigo-600">How to Help</a>
                <a href="#contact" class="block text-gray-600 hover:text-indigo-600">Contact Us</a>
                <a href="/login" class="block text-gray-600 hover:text-indigo-600">Login</a>
                <a href="/register" class="block bg-indigo-600 text-white text-center py-2 rounded-lg">Register</a>
            </div>
        </div>
    </nav>

    <!-- ========== HERO SECTION ========== -->
    <section class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                    Share Skills. Grow Together.
                </h1>
                <p class="text-lg md:text-xl text-indigo-100 mb-10">
                    Join a vibrant community where people teach what they know and learn what they need — free, friendly, and local.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/register" class="bg-white text-indigo-700 font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-50 transition">
                      Get started
                    </a>
                    <a href="/learn-more" class="border-2 border-white text-white font-semibold px-8 py-3 rounded-lg hover:bg-white/10 transition">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ABOUT US ========== -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">About Us</h2>
                <div class="w-20 h-1 bg-indigo-600 mx-auto rounded"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Building a Culture of Sharing</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Community Skill Sharing Platform was created with a simple belief: everyone has something valuable to teach, and everyone has something new to learn.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Whether you are a professional developer, a home cook, a language enthusiast, or a DIY expert — this is the place where knowledge flows freely between neighbors, friends, and strangers who become friends.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Our mission is to make skill-sharing accessible, safe, and rewarding for everyone.
                    </p>
                    <a href="/about-us" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                        Learn More About Us
                    </a>
                </div>
                <div class="bg-indigo-50 rounded-2xl p-8">
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-indigo-600 text-white p-3 rounded-lg">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Inclusive Community</h4>
                                <p class="text-gray-600 text-sm">Open to all ages, backgrounds, and skill levels.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-indigo-600 text-white p-3 rounded-lg">
                                <i class="fas fa-heart text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Free & Kind</h4>
                                <p class="text-gray-600 text-sm">Most exchanges are free or based on mutual help.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-indigo-600 text-white p-3 rounded-lg">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Safe Environment</h4>
                                <p class="text-gray-600 text-sm">Verified profiles and community guidelines keep everyone safe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== HOW TO HELP EACH OTHER ========== -->
    <section id="help" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">How to Help Each Other</h2>
                <div class="w-20 h-1 bg-indigo-600 mx-auto rounded"></div>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Helping is simple. Here's how our community works:
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <a href="/offer-your-skill" class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-xl transition cursor-pointer group">
                    <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:bg-indigo-200 transition">
                        1
                    </div>
                    <h3 class="text-xl font-semibold mb-3 group-hover:text-indigo-600 transition">Offer Your Skills</h3>
                    <p class="text-gray-600">
                        Create a profile and list the skills you can teach — coding, cooking, music, languages, gardening, or anything else.
                    </p>
                </a>

                <!-- Step 2 -->
                <a href="/find-what-you-need" class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-xl transition cursor-pointer group">
                    <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:bg-indigo-200 transition">
                        2
                    </div>
                    <h3 class="text-xl font-semibold mb-3 group-hover:text-indigo-600 transition">Find What You Need</h3>
                    <p class="text-gray-600">
                        Browse skills offered by others or post a request. Match with people who can help you grow.
                    </p>
                </a>

                <!-- Step 3 -->
                <a href="/connect-share" class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-xl transition cursor-pointer group">
                    <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:bg-indigo-200 transition">
                        3
                    </div>
                    <h3 class="text-xl font-semibold mb-3 group-hover:text-indigo-600 transition">Connect & Share</h3>
                    <p class="text-gray-600">
                        Meet online or in person, exchange knowledge, and leave feedback so the community keeps getting better.
                    </p>
                </a>
            </div>

            <div class="text-center mt-12">
                <a href="/help" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-lg transition">
                    Explore All Help Topics
                </a>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT US ========== -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Contact Us</h2>
                <div class="w-20 h-1 bg-indigo-600 mx-auto rounded"></div>
                <p class="mt-4 text-gray-600">Have questions or ideas? We'd love to hear from you.</p>
            </div>

            <div class="max-w-2xl mx-auto">
                <form action="{{ route('contact') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" name="name" required
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                            <input type="email" name="email" required
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" name="subject" required
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea name="message" rows="6" required
                                  class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:border-transparent"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-gray-900 text-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-hands-helping text-indigo-400 text-2xl"></i>
                        <h3 class="text-xl font-bold">Join Platform</h3>
                    </div>
                    <p class="text-gray-400 text-sm">Share skills, grow together, and build a community of mutual learning.</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#about" class="text-gray-400 hover:text-indigo-400 transition">About Us</a></li>
                        <li><a href="/about-us" class="text-gray-400 hover:text-indigo-400 transition">Full About Page</a></li>
                        <li><a href="#help" class="text-gray-400 hover:text-indigo-400 transition">How It Works</a></li>
                        <li><a href="/help" class="text-gray-400 hover:text-indigo-400 transition">Help Topics</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-indigo-400 transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Get Started</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/register" class="text-gray-400 hover:text-indigo-400 transition">Create Account</a></li>
                        <li><a href="/get-started" class="text-gray-400 hover:text-indigo-400 transition">Get Started Guide</a></li>
                        <li><a href="/offer-your-skill" class="text-gray-400 hover:text-indigo-400 transition">Offer Skills</a></li>
                        <li><a href="/find-what-you-need" class="text-gray-400 hover:text-indigo-400 transition">Find Skills</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Community</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/connect-share" class="text-gray-400 hover:text-indigo-400 transition">Connect & Share</a></li>
                        <li><a href="/learn-more" class="text-gray-400 hover:text-indigo-400 transition">Learn More</a></li>
                        <li><a href="/login" class="text-gray-400 hover:text-indigo-400 transition">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8">
                <p class="text-center text-gray-400 text-sm">
                    © 2026 Community Skill Sharing Platform. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Close mobile menu when clicking on a link
        const mobileLinks = document.querySelectorAll('#mobile-menu a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>
</html>
