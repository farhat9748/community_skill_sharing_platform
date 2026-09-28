```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us - SkillShare Community</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fb;
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: bold;
        }

        .hero {
            background: linear-gradient(135deg, #6f42c1, #0d6efd);
            color: white;
            text-align: center;
            padding: 70px 20px;
        }

        .hero h1 {
            font-size: 45px;
            font-weight: bold;
        }

        .contact-section {
            padding: 60px 0;
        }

        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .contact-info {
            background: #212529;
            color: white;
            border-radius: 15px;
            padding: 35px;
            height: 100%;
        }

        .contact-info h3 {
            margin-bottom: 25px;
        }

        .info-item {
            margin-bottom: 25px;
        }

        .info-item h5 {
            color: #0d6efd;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-submit {
            padding: 12px 30px;
            font-weight: bold;
        }

        footer {
            background: #212529;
            color: white;
            text-align: center;
            padding: 25px 0;
            margin-top: 30px;
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
                    <a class="nav-link" href="{{ url('/help') }}">
                        Help
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/contact') }}">
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

        <h1>Contact Us</h1>

        <p class="lead mt-3">
            Have a question or need help? Get in touch with us.
        </p>

    </div>

</section>


<!-- ================= CONTACT SECTION ================= -->

<section class="contact-section">

    <div class="container">

        <div class="row g-4">

            <!-- Contact Information -->

            <div class="col-lg-4">

                <div class="contact-info">

                    <h3>Get In Touch</h3>

                    <p>
                        We are happy to help you with courses, workshops,
                        instructors, and other questions about SkillShare
                        Community.
                    </p>

                    <hr>

                    <div class="info-item">

                        <h5>📍 Address</h5>

                        <p>
                            SkillShare Community<br>
                            Kolkata, West Bengal, India
                        </p>

                    </div>

                    <div class="info-item">

                        <h5>📞 Phone</h5>

                        <p>
                            +91 98765 43210
                        </p>

                    </div>

                    <div class="info-item">

                        <h5>📧 Email</h5>

                        <p>
                            support@skillsharecommunity.com
                        </p>

                    </div>

                </div>

            </div>


            <!-- Contact Form -->

            <div class="col-lg-8">

                <div class="contact-card">

                    <h2 class="mb-4">
                        Send Us a Message
                    </h2>

                    <!-- Success Message -->

                    @if(session('success'))

                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>

                    @endif


                    <!-- Validation Errors -->

                    @if($errors->any())

                        <div class="alert alert-danger">

                            <strong>Please fix the following errors:</strong>

                            <ul class="mb-0 mt-2">

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <form action="{{ route('contact.submit') }}"
                          method="POST">

                        @csrf


                        <!-- Name -->

                        <div class="mb-3">

                            <label for="name" class="form-label">
                                Full Name
                            </label>

                            <input type="text"
                                   name="name"
                                   id="name"
                                   class="form-control"
                                   placeholder="Enter your full name"
                                   value="{{ old('name') }}"
                                   required>

                        </div>


                        <!-- Address -->

                        <div class="mb-3">

                            <label for="address" class="form-label">
                                Address
                            </label>

                            <textarea name="address"
                                      id="address"
                                      class="form-control"
                                      rows="3"
                                      placeholder="Enter your address"
                                      required>{{ old('address') }}</textarea>

                        </div>


                        <!-- Phone -->

                        <div class="mb-3">

                            <label for="phone" class="form-label">
                                Phone Number
                            </label>

                            <input type="tel"
                                   name="phone"
                                   id="phone"
                                   class="form-control"
                                   placeholder="Enter your phone number"
                                   value="{{ old('phone') }}"
                                   required>

                        </div>


                        <!-- Email -->

                        <div class="mb-3">

                            <label for="email" class="form-label">
                                Email ID
                            </label>

                            <input type="email"
                                   name="email"
                                   id="email"
                                   class="form-control"
                                   placeholder="Enter your email address"
                                   value="{{ old('email') }}"
                                   required>

                        </div>


                        <!-- Subject -->

                        <div class="mb-3">

                            <label for="subject" class="form-label">
                                Subject
                            </label>

                            <input type="text"
                                   name="subject"
                                   id="subject"
                                   class="form-control"
                                   placeholder="Enter subject"
                                   value="{{ old('subject') }}"
                                   required>

                        </div>


                        <!-- Message -->

                        <div class="mb-3">

                            <label for="message" class="form-label">
                                Message
                            </label>

                            <textarea name="message"
                                      id="message"
                                      class="form-control"
                                      rows="5"
                                      placeholder="Write your message here..."
                                      required>{{ old('message') }}</textarea>

                        </div>


                        <!-- Submit -->

                        <button type="submit"
                                class="btn btn-primary btn-submit">

                            Send Message

                        </button>

                    </form>

                </div>

            </div>

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
