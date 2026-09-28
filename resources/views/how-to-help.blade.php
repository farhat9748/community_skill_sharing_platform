```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Help & Learning - SkillShare Community</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: bold;
        }

        .hero {
            background: linear-gradient(135deg, #6f42c1, #0d6efd);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 45px;
            font-weight: bold;
        }

        .hero p {
            font-size: 18px;
        }

        .help-section {
            padding: 70px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-weight: bold;
        }

        .skill-card {
            background: white;
            border-radius: 15px;
            padding: 35px 25px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .skill-icon {
            font-size: 55px;
            margin-bottom: 20px;
        }

        .skill-card h3 {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .skill-card ul {
            padding-left: 20px;
        }

        .skill-card li {
            margin-bottom: 8px;
        }

        .help-box {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-top: 50px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        footer {
            background: #212529;
            color: white;
            padding: 25px;
            text-align: center;
        }
    </style>
</head>

<body>

<!-- ================= NAVBAR ================= -->

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
                    <a class="nav-link" href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about-us') }}">
                        About Us
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/courses') }}">
                        Courses
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/help') }}">
                        Help
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">
                        Contact
                    </a>
                </li>

                <li class="nav-item ms-2">
                    <a class="btn btn-primary"
                       href="{{ url('/login') }}">
                        Login
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="container">

        <h1>How Can We Help You?</h1>

        <p class="mt-3">
            Learn practical skills from experienced community members
            and share your own knowledge with others.
        </p>

    </div>

</section>


<!-- ================= SKILL SECTIONS ================= -->

<section class="help-section">

    <div class="container">

        <div class="section-title">

            <h2>Explore Our Skill Areas</h2>

            <p class="text-muted">
                Choose a skill and start learning today.
            </p>

        </div>


        <div class="row g-4">


            <!-- ================= SEWING ================= -->

            <div class="col-md-6">

                <div class="skill-card">

                    <div class="skill-icon">
                        🧵
                    </div>

                    <h3>Sewing</h3>

                    <p>
                        Learn creative and practical sewing skills from
                        experienced community instructors.
                    </p>

                    <h5>You can learn:</h5>

                    <ul>
                        <li>Basic stitching</li>
                        <li>Using a sewing machine</li>
                        <li>Clothing design</li>
                        <li>Embroidery</li>
                        <li>Tailoring</li>
                        <li>Dress making</li>
                    </ul>

                    <a href="{{ url('/courses?category=sewing') }}"
                       class="btn btn-primary mt-3">

                        View Sewing Courses

                    </a>

                </div>

            </div>


            <!-- ================= TEACHING ================= -->

            <div class="col-md-6">

                <div class="skill-card">

                    <div class="skill-icon">
                        👩‍🏫
                    </div>

                    <h3>Teaching</h3>

                    <p>
                        Improve your teaching abilities and learn effective
                        ways to help others understand difficult topics.
                    </p>

                    <h5>You can learn:</h5>

                    <ul>
                        <li>Teaching methods</li>
                        <li>Communication skills</li>
                        <li>Classroom management</li>
                        <li>Presentation skills</li>
                        <li>Lesson planning</li>
                        <li>Online teaching</li>
                    </ul>

                    <a href="{{ url('/courses?category=teaching') }}"
                       class="btn btn-primary mt-3">

                        View Teaching Courses

                    </a>

                </div>

            </div>


            <!-- ================= COMPUTER ================= -->

            <div class="col-md-6">

                <div class="skill-card">

                    <div class="skill-icon">
                        💻
                    </div>

                    <h3>Computer</h3>

                    <p>
                        Develop essential computer and digital skills
                        useful for education, work, and everyday life.
                    </p>

                    <h5>You can learn:</h5>

                    <ul>
                        <li>Computer fundamentals</li>
                        <li>Microsoft Word</li>
                        <li>Microsoft Excel</li>
                        <li>PowerPoint</li>
                        <li>Internet and email</li>
                        <li>Digital literacy</li>
                    </ul>

                    <a href="{{ url('/courses?category=computer') }}"
                       class="btn btn-primary mt-3">

                        View Computer Courses

                    </a>

                </div>

            </div>


            <!-- ================= CODING ================= -->

            <div class="col-md-6">

                <div class="skill-card">

                    <div class="skill-icon">
                        👨‍💻
                    </div>

                    <h3>Coding & Programming</h3>

                    <p>
                        Learn programming and web development skills from
                        beginner level to advanced concepts.
                    </p>

                    <h5>You can learn:</h5>

                    <ul>
                        <li>HTML and CSS</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>Python</li>
                        <li>Laravel</li>
                        <li>Database and MySQL</li>
                    </ul>

                    <a href="{{ url('/courses?category=coding') }}"
                       class="btn btn-primary mt-3">

                        View Coding Courses

                    </a>

                </div>

            </div>

        </div>


        <!-- ================= GENERAL HELP ================= -->

        <div class="help-box text-center">

            <h2>Need More Help?</h2>

            <p class="text-muted mt-3">

                If you cannot find the skill or course you are looking for,
                contact our community team. You can also become an instructor
                and share your own skills with other learners.

            </p>

            <a href="{{ url('/contact') }}"
               class="btn btn-success mt-3">

                Contact Us

            </a>

            <a href="{{ url('/register') }}"
               class="btn btn-outline-primary mt-3">

                Join Our Community

            </a>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="container">

        <p class="mb-0">
            © {{ date('Y') }} SkillShare Community.
            All Rights Reserved.
        </p>

    </div>

</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
```
