<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Website</title>
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">EduLearn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="py-5 bg-info text-white text-center">
        <div class="container">
            <h1 class="display-4">Welcome to EduLearn</h1>
            <p class="lead">Your gateway to quality education.</p>
            <a href="#courses" class="btn btn-dark btn-lg mt-3">Explore Courses</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2>About Us</h2>
                <p class="text-muted">We provide top-notch educational resources and training for students worldwide.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo e(asset('img/img.jpeg')); ?>" alt="About" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <p class="mt-4">At EduLearn, we believe in empowering students through knowledge and skill-building. Our courses are designed to provide hands-on experience, ensuring you gain practical skills that are in demand in the real world.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Our Courses</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="https://youtu.be/GxmfcnU3feo?feature=shared" style="text-decoration: none;" <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Learn to build modern websites using HTML, CSS, JavaScript, and more.</p>
                        </div>
                    </div></a>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Data Science</h5>
                            <p class="card-text">Analyze, visualize, and gain insights from data like a professional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="https://youtu.be/bixR-KIJKYM?feature=shared"style="text-decoration: none;"
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text">Master SEO, social media marketing, and online advertising strategies.</p>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Contact Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 EduLearn. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 5.3.0 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH E:\Web Design\do\student-reg\resources\views/wed.blade.php ENDPATH**/ ?>