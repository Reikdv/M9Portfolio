<?php

$site_title = "Over Mij - Reik de Vries";
$name = "Reik de Vries";
$job_title = "Full-Stack Web Developer";
$email = "Reikdv@gmail.com";
$github = "https://github.com/reikdv";
$linkedin = "https://www.linkedin.com/in/reik-de-vries-759a93387/";


$about_intro = "Mijn naam is Reik de Vries. Ik ben een creatieve software developer.";

$about_details = [
    "Ik ben een enthousiaste software developer en volg momenteel mijn opleiding aan het Media College Amsterdam, waar ik in het derde jaar zit. Ik heb ervaring met verschillende programmeertalen, waaronder HTML, CSS, JavaScript, PHP, Laravel, React, en Bootstrap en blijf mijn kennis continu uitbreiden.",
    "Ik ben ook bezig met het bijhouden van de nieuwste trends en technieken in webontwikkeling.",
];


$interests = [
    ["icon" => "fa-code", "title" => "Programmeren", "desc" => "Nieuwe technologieën leren"],
    ["icon" => "fa-palette", "title" => "Design", "desc" => "UI/UX & Visual Design"],
    ["icon" => "fa-gamepad", "title" => "Gaming", "desc" => "Strategie & Indie games"],
    ["icon" => "fa-book", "title" => "Lezen", "desc" => "filosofie & fictie boeken"]
];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_title ?></title>
    <meta name="description" content="Meer informatie over <?= $name ?> - <?= $job_title ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="aboutme.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-container">
                <a href="index.php" class="logo"><?= explode(' ', $name)[0] ?></a>
                <ul class="nav-links">
                    <li><a href="index.php#projects">Projecten</a></li>
                    <li><a href="aboutme.php" class="active">Over mij</a></li>
                    <li><a href="index.php#skills">Skills</a></li>
                    <li><a href="index.php#experience">Ervaring</a></li>
                    <li><a href="index.php#contact" class="btn">Contact</a></li>
                </ul>
                <button class="mobile-nav-toggle"><i class="fas fa-bars"></i></button>
            </div>
        </div>
    </nav>

    <section class="hero-small">
        <div class="container">
            <h1 class="fade-in">Over Mij</h1>
            <p class="fade-in"><?= $job_title ?></p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="about-grid">
                <div class="about-image fade-in">
                    <div class="image-wrapper">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="about-content fade-in">
                    <h2>Hallo, ik ben <?= $name ?></h2>
                    <p class="intro"><?= $about_intro ?></p>
                    <?php foreach ($about_details as $detail): ?>
                        <p><?= $detail ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Interesses & Hobbies</h2>
            <div class="interests-grid">
                <?php foreach ($interests as $interest): ?>
                    <div class="interest-card fade-in">
                        <i class="fas <?= $interest['icon'] ?>"></i>
                        <h3><?= $interest['title'] ?></h3>
                        <p><?= $interest['desc'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section contact-cta">
        <div class="container">
            <div class="cta-content fade-in">
                <h2>Laten we samenwerken!</h2>
                <p>Interesse in een project of gewoon een koffie? Neem contact op!</p>
                <div class="contact-links">
                    <a href="mailto:<?= $email ?>" class="btn"><i class="fas fa-envelope"></i> Email</a>
                    <a href="<?= $github ?>" class="btn btn-outline" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                    <a href="<?= $linkedin ?>" class="btn btn-outline" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= $name ?>. Alle rechten voorbehouden.</p>
        </div>
    </footer>

    <script>
        const mobileToggle = document.querySelector('.mobile-nav-toggle');
        const navLinks = document.querySelector('.nav-links');
        mobileToggle.addEventListener('click', () => navLinks.classList.toggle('active'));

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({behavior: 'smooth', block: 'start'});
            });
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('visible');
            });
        }, {threshold: 0.1, rootMargin: '0px 0px -50px 0px'});

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            lastScrollTop = scrollTop;
        });
    </script>
</body>
</html>