<?php
require_once __DIR__ . '/config/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Tips | NSBM StudyCircle</title>
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
            <a href="about.php">About</a>
            <button type="button" class="theme-toggle" aria-label="Switch theme" aria-pressed="false" hidden>Dark mode</button>
        </nav>
    </div>
</header>

<main class="container">
    <div class="page-intro">
        <span class="badge">A few practical ideas</span>
        <h1>Make your StudyCircle time useful</h1>
        <p>These are simple habits that fit naturally with the tools already available in the project.</p>
    </div>

    <ul class="tip-list">
        <li><strong>Give files clear names.</strong><br>Use a subject and topic in the filename so another student can recognise it quickly.</li>
        <li><strong>Write a useful description.</strong><br>A short note about what the PDF contains is more helpful than uploading a file with no context.</li>
        <li><strong>Search before asking.</strong><br>Check the materials and forum first. You may find an answer immediately.</li>
        <li><strong>Keep forum questions specific.</strong><br>Include the topic, what you tried and where you got stuck.</li>
        <li><strong>Use study sessions for a clear goal.</strong><br>Choose a topic before the session starts and leave with one thing you can explain confidently.</li>
        <li><strong>Help the next student.</strong><br>If a resource or answer solved your problem, leave a useful rating or comment.</li>
    </ul>

    <section class="card" style="margin-top:20px;">
        <h2>Ready to study?</h2>
        <p>Open the resource browser or start a discussion with your classmates.</p>
        <div class="actions">
            <a class="button" href="materials.php">Browse materials</a>
            <a class="button button-outline" href="forum.php">Open forum</a>
        </div>
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
