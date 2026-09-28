```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us - SkillShare Community</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 25px;
        }

        .hero {
            background: linear-gradient(135deg, #6f42c1, #0d6efd);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .about-section {
            padding: 70px 0;
        }

        .about-section h2 {
            font-weight: bold;
            color: #333;
        }

        .about-text {
            font-size: 17px;
            line-height: 1.8;
            color: #555;
        }

        .skill-card {
            border: none;
            border-radius: 15px;
            padding: 30px 20px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
            background: white;
        }

        .skill-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .skill-icon {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .mission {
            background-color: #ffffff;
            padding: 60px 20px;
        }

        .mission-box {
            background: #f1edff;
            padding: 35px;
            border-radius: 15px;
        }

        footer {
            background: #212529;
            color: white;
            padding: 25px 0;
            text-align: center;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            SkillShare Community
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/about-us') }}">
                        About Us
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/courses') }}">
                        Courses
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/instructors') }}">
                        Instructors
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">
                        Contact
                    </a>
                </li>

                <li class="nav-item ms-2">
                    <a class="btn btn-primary" href="{{ url('/login') }}">
                        Login
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!-- Hero Section -->
<section class="hero">

    <div class="container">

        <h1>About SkillShare Community</h1>

        <p class="lead mt-3">
            Learn new skills, share your knowledge, and grow together
            with your community.
        </p>

    </div>

</section>


<!-- About Section -->
<section class="about-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6 mb-4">

                <h2>Who We Are</h2>

                <p class="about-text mt-3">
                    SkillShare Community is a community-based learning
                    platform designed to connect people who want to learn
                    with people who have valuable skills and knowledge to
                    share.
                </p>

                <p class="about-text">
                    Our platform allows instructors and community members
                    to create workshops and online courses. Learners can
                    explore different skills, enroll in courses, attend
                    scheduled sessions, and improve their knowledge.
                </p>

                <p class="about-text">
                    From learning how to sew a dress to understanding
                    computer technology, preparing delicious meals, or
                    improving teaching skills, our goal is to make learning
                    accessible and enjoyable for everyone.
                </p>

            </div>

            <div class="col-lg-6">

                <div class="mission-box">

                    <h3>Our Purpose</h3>

                    <p class="about-text">
                        We believe everyone has something valuable to teach
                        and everyone has something new to learn.
                    </p>

                    <p class="about-text">
                        SkillShare Community brings people together to
                        exchange knowledge, develop practical skills, and
                        build stronger communities.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Skills Section -->
<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">What You Can Learn</h2>

            <p class="text-muted">
                Explore practical skills shared by members of our community.
            </p>

        </div>

        <div class="row g-4">

            <!-- Sewing -->
            <div class="col-md-6 col-lg-3">

                <div class="skill-card text-center">

                    <div class="skill-icon">🧵</div>

                    <h4>Sewing</h4>

                    <p class="text-muted">
                        Learn stitching, embroidery, clothing design,
                        tailoring, and other creative sewing skills.
                    </p>

                    <a href="{{ url('/courses?category=sewing') }}"
                       class="btn btn-outline-primary">
                        Explore Sewing
                    </a>

                </div>

            </div>


            <!-- Computer -->
            <div class="col-md-6 col-lg-3">

                <div class="skill-card text-center">

                    <div class="skill-icon">💻</div>

                    <h4>Computer Skills</h4>

                    <p class="text-muted">
                        Learn computer basics, programming, web development,
                        office applications, and digital skills.
                    </p>

                    <a href="{{ url('/courses?category=computer') }}"
                       class="btn btn-outline-primary">
                        Explore Computer
                    </a>

                </div>

            </div>


            <!-- Cooking -->
            <div class="col-md-6 col-lg-3">

                <div class="skill-card text-center">

                    <div class="skill-icon">🍳</div>

                    <h4>Cooking</h4>

                    <p class="text-muted">
                        Discover cooking techniques, recipes, baking,
                        healthy meals, and traditional dishes.
                    </p>

                    <a href="{{ url('/courses?category=cooking') }}"
                       class="btn btn-outline-primary">
                        Explore Cooking
                    </a>

                </div>

            </div>


            <!-- Teaching -->
            <div class="col-md-6 col-lg-3">

                <div class="skill-card text-center">

                    <div class="skill-icon">📚</div>

                    <h4>Teaching</h4>

                    <p class="text-muted">
                        Improve teaching techniques, communication,
                        classroom management, and educational skills.
                    </p>

                    <a href="{{ url('/courses?category=teaching') }}"
                       class="btn btn-outline-primary">
                        Explore Teaching
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Mission Section -->
<section class="mission">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-4 mb-4">

                <div class="mission-box">

                    <h3>🌱 Learn</h3>

                    <p>
                        Discover new skills and improve your knowledge
                        through courses and workshops.
                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="mission-box">

                    <h3>🤝 Share</h3>

                    <p>
                        Share your knowledge and experience with other
                        members of your community.
                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="mission-box">

                    <h3>🚀 Grow</h3>

                    <p>
                        Build confidence, develop practical skills, and
                        grow together with others.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Footer -->
<footer>

    <div class="container">

        <p class="mb-0">
            © {{ date('Y') }} SkillShare Community. All Rights Reserved.
        </p>

    </div>

</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
```
