<?php
require_once __DIR__ . '/config/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help and FAQ | NSBM StudyCircle</title>
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
            <a href="study_tips.php">Study tips</a>
            <button type="button" class="theme-toggle" aria-label="Switch theme" aria-pressed="false" hidden>Dark mode</button>
        </nav>
    </div>
</header>

<main class="container">
    <div class="page-intro">
        <span class="badge">Help</span>
        <h1>Help and frequently asked questions</h1>
        <p>Quick answers about uploading notes, joining groups and using StudyCircle.</p>
    </div>
    <section class="faq-list" aria-label="Frequently asked questions">
        <details class="card faq-item">
            <summary>Who can use StudyCircle?</summary>
            <p>Any NSBM student can create an account. Administrators review uploaded materials and moderate community content.</p>
        </details>
        <details class="card faq-item">
            <summary>Why is my upload not visible yet?</summary>
            <p>Every PDF is reviewed by an administrator first. Once approved, it appears in the materials list and you can track its status under My uploads.</p>
        </details>
        <details class="card faq-item">
            <summary>What file types can I upload?</summary>
            <p>Study materials are uploaded as PDF files. Check the upload page for the current size limit.</p>
        </details>
        <details class="card faq-item">
            <summary>How do I join a study group?</summary>
            <p>Open Study groups from your dashboard, choose a group that matches your subject and select Join. You can leave at any time.</p>
        </details>
        <details class="card faq-item">
            <summary>How do I report a problem or inappropriate content?</summary>
            <p>Contact a StudyCircle administrator through your faculty. Administrators can remove questions, answers and comments.</p>
        </details>
        <details class="card faq-item">
            <summary>Can I switch to dark mode?</summary>
            <p>Yes. Use the theme button in the page header. Your choice is remembered on this device.</p>
        </details>
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
