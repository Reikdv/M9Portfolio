<?php
// Configuratie
$site_title = "Reik de Vries - Portfolio";
$name = "Reik de Vries";
$job_title = "Full-Stack Web Developer";
$email = "Reikdv@gmail.com";
$github = "https://github.com/reikdevries";
$linkedin = "https://linkedin.com/in/reikdevries";

// Skills data
$skills = [
    "Frontend" => ["HTML5", "CSS3", "JavaScript", "React", "Vue.js", "Tailwind CSS"],
    "Backend" => ["PHP", "Node.js", "Python", "MySQL", "PostgreSQL", "MongoDB"],
    "Tools" => ["Git", "Docker", "VS Code", "Photoshop"]
];

// Projects data
$projects = [
    [
        "title" => "Pokemon",
        "description" => "",
        "technologies" => ["JavaScript", "CSS"],
        "github" => "https://github.com/reikdevries/",
        "demo" => "https://37676.hosts1.ma-cloud.nl/pokemon/",
        "image" => "project1.jpg"
    ],
    [
        "title" => "React Dashboard",
        "description" => "",
        "technologies" => ["React", "Chart.js", "Node.js", "Express"],
        "github" => "https://github.com/reikdevries/dashboard",
        "demo" => "https://37676.hosts1.ma-cloud.nl/M5BO/",
        "image" => "project2.jpg"
    ],
    [
        "title" => "",
        "description" => "",
        "technologies" => ["PHP", "MySQL", "Bootstrap", "jQuery"],
        "github" => "https://github.com/reikdevries/portfolio-cms",
        "demo" => "https://cms.reikdevries.nl",
        "image" => "project3.jpg"
    ],
    [
        "title" => "Weather App",
        "description" => "",
        "technologies" => ["JavaScript", "API", "CSS3", "HTML5"],
        "github" => "https://github.com/reikdevries/weather-app",
        "demo" => "https://weather.reikdevries.nl",
        "image" => "project4.jpg"
    ]
];

// Experience data
$experience = [
    [
        "position" => "",
        "company" => "TechStart BV",
        "period" => "2023 - Heden",
        "description" => "Ontwikkeling van webapplicaties met PHP en JavaScript. Samenwerking in Agile teams."
    ],
    [
        "position" => " (Stage)",
        "company" => "Digital Agency",
        "period" => "2022 - 2023",
        "description" => "Specialisatie in responsive webdesign en gebruikerservaring. Werken met moderne frameworks."
    ]
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_title ?></title>
    <meta name="description" content="Portfolio van <?= $name ?> - <?= $job_title ?>. Bekijk mijn projecten en ervaring in webontwikkeling.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-container">
                <a href="#home" class="logo"><?= explode(' ', $name)[0] ?></a>
                <ul class="nav-links">
                    <li><a href="#about">Over mij</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projecten</a></li>
                    <li><a href="#experience">Ervaring</a></li>
                    <li><a href="#contact" class="btn">Contact</a></li>
                </ul>
                <button class="mobile-nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Hallo, ik ben <?= $name ?></h1>
                <p><?= $job_title ?> met passie voor moderne webtechnologieën</p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn">Bekijk mijn werk</a>
                    <a href="#contact" class="btn btn-outline">Contact opnemen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title fade-in">Over mij</h2>
            <div class="about-content fade-in">
                <div class="about-image">
                    <div style="width: 300px; height: 300px; background: var(--gradient); border-radius: 1rem; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-user" style="font-size: 4rem; color: white; opacity: 0.8;"></i>
                    </div>
                </div>
                <div class="about-text">
                    <p>Als gepassioneerde web developer ben ik gespecialiseerd in het bouwen van moderne, gebruiksvriendelijke websites en applicaties. Met een sterke focus op zowel frontend als backend ontwikkeling, creëer ik complete digitale oplossingen.</p>
                    
                    <p>Mijn ervaring omvat het werken met moderne frameworks en technologieën, waarbij ik altijd streef naar clean code, optimale gebruikerservaring en responsive design. Ik ben continu bezig met het bijhouden van de nieuwste trends en technieken in webontwikkeling.</p>
                    
                    <p>Wanneer ik niet aan het programmeren ben, besteed ik graag tijd aan het leren van nieuwe technologieën en het werken aan persoonlijke projecten die mijn vaardigheden verder ontwikkelen.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title fade-in">Mijn Skills</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $category => $skill_list): ?>
                    <div class="skill-category fade-in">
                        <h3><?= $category ?></h3>
                        <div class="skill-tags">
                            <?php foreach ($skill_list as $skill): ?>
                                <span class="skill-tag"><?= $skill ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section projects">
        <div class="container">
            <h2 class="section-title fade-in">Mijn Projecten</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $index => $project): ?>
                    <div class="project-card fade-in">
                        <div class="project-image">
                            <i class="fas <?= ['fa-shopping-cart', 'fa-chart-line', 'fa-cogs', 'fa-cloud-sun'][$index] ?>"></i>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title"><?= $project['title'] ?></h3>
                            <p class="project-description"><?= $project['description'] ?></p>
                            <div class="project-tech">
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <span class="tech-tag"><?= $tech ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <a href="<?= $project['github'] ?>" class="project-link" target="_blank">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="<?= $project['demo'] ?>" class="project-link" target="_blank">
                                    <i class="fas fa-external-link-alt"></i> Demo
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section">
        <div class="container">
            <h2 class="section-title fade-in">Werkervaring</h2>
            <div class="experience-timeline">
                <?php foreach ($experience as $exp): ?>
                    <div class="experience-item fade-in">
                        <div class="experience-content">
                            <div class="experience-position"><?= $exp['position'] ?></div>
                            <div class="experience-company"><?= $exp['company'] ?></div>
                            <div class="experience-period"><?= $exp['period'] ?></div>
                            <p><?= $exp['description'] ?></p>
                        </div>
                        <div class="experience-dot"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact">
        <div class="container">
            <div class="contact-content">
                <h2 class="section-title fade-in" style="color: white;">Contact</h2>
                <p class="fade-in">Interesse in samenwerking? Neem gerust contact met me op!</p>
                
                <div class="contact-info fade-in">
                    <a href="mailto:<?= $email ?>" class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <?= $email ?>
                    </a>
                    <a href="<?= $github ?>" class="contact-item" target="_blank">
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>
                    <a href="<?= $linkedin ?>" class="contact-item" target="_blank">
                        <i class="fab fa-linkedin"></i>
                        LinkedIn
                    </a>
                </div>

                <a href="cv.pdf" class="btn fade-in" download>
                    <i class="fas fa-download"></i> Download CV
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= $name ?>. Alle rechten voorbehouden.</p>
        </div>
    </footer>

    <script>
        // Mobile Navigation
        const mobileToggle = document.querySelector('.mobile-nav-toggle');
        const navLinks = document.querySelector('.nav-links');

        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Navbar scroll effect
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