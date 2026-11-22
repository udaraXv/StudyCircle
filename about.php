<?php
require_once __DIR__ . '/config/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About StudyCircle | NSBM</title>
    <link rel="stylesheet" href="site.css?v=2">
    <link rel="stylesheet" href="theme.css?v=2">
    <script src="theme.js?v=2"></script>
    <link rel="stylesheet" href="branding.css?v=1">
    <link rel="stylesheet" href="nsbm-professional.css?v=1">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="index.php">
            <span class="brand-mark brand-mark-logo" aria-hidden="true"><img src="assets/nsbm-logo.svg" alt="NSBM Green University Town"></span>
            <span><strong>StudyCircle</strong><small>NSBM GREEN UNIVERSITY</small></span>
        </a>
        <nav aria-label="Page navigation">
            <a href="index.php">Home</a>
            <a href="study_tips.php">Study tips</a>
            <button type="button" class="theme-toggle" aria-label="Switch theme" aria-pressed="false" hidden>Dark mode</button>
        </nav>
    </div>
</header>

<main class="container">
    <div class="page-intro">
        <span class="badge">About the project</span>
        <h1>Why StudyCircle exists</h1>
        <p>
            StudyCircle is our Topic 4 web application for the Web and Mobile
            Application Development module. It gives NSBM students one place
            to share resources, ask questions and organise study sessions.
        </p>
    </div>

    <section class="grid">
        <article class="card">
            <span class="feature-icon">01</span>
            <h2>Share resources</h2>
            <p>Students can submit PDF study materials. Approved resources become available to the wider student community.</p>
        </article>
        <article class="card">
            <span class="feature-icon">02</span>
            <h2>Learn from peers</h2>
            <p>The discussion area supports questions and answers, while resource ratings and comments help students find useful content.</p>
        </article>
        <article class="card">
            <span class="feature-icon">03</span>
            <h2>Study together</h2>
            <p>Groups and study sessions make it easier to organise revision with classmates around a shared subject.</p>
        </article>
    </section>

    <section class="home-highlight">
        <article class="card">
            <h2>For students</h2>
            <p>Register, browse approved materials, upload your own notes, join discussions and take part in study groups.</p>
            <a class="button" href="register.php">Join StudyCircle</a>
        </article>
        <article class="card">
            <h2>For administrators</h2>
            <p>Administrators can review resources, manage subjects and categories, moderate community content and inspect reports.</p>
            <a class="button button-outline" href="login.php">Sign in</a>
        </article>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="sc-footer-grid">
            <div class="sc-footer-brand">
                <img src="assets/nsbm-logo.svg" alt="NSBM Green University Town">
                <p>StudyCircle is a student community for sharing notes, asking questions and organising group study at NSBM Green University.</p>
            </div>
            <div>
                <h4>StudyCircle</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About the project</a></li>
                    <li><a href="study_tips.php">Study tips</a></li>
                    <li><a href="faq.php">Help and FAQ</a></li>
                </ul>
            </div>
            <div>
                <h4>NSBM Green University</h4>
                <ul>
                    <li>Faculty of Computing</li>
                    <li>Batch 26.1 IFSL</li>
                    <li><a href="https://www.nsbm.ac.lk" target="_blank" rel="noopener">nsbm.ac.lk</a></li>
                </ul>
            </div>
        </div>
        <div class="sc-footer-bottom">&copy; 2026 NSBM StudyCircle &middot; Student coursework project</div>
    </div>
</footer>
</body>
</html>
