<?php
require_once __DIR__ . '/config/auth.php';

$user = require_login();

$stmt = $pdo->prepare(
    'SELECT full_name, email, student_id, role, status, created_at
     FROM users WHERE id = ?'
);
$stmt->execute([$user['id']]);
$profile = $stmt->fetch();

if (!$profile) {
    header('Location: login.php');
    exit;
}

$dashboard = $profile['role'] === 'admin'
    ? 'admin_dashboard.php'
    : 'dashboard.php';

$initial = mb_strtoupper(mb_substr($profile['full_name'], 0, 1));
$roleLabel = $profile['role'] === 'admin' ? 'Administrator' : 'Student';
$joined = date('d M Y', strtotime($profile['created_at']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | NSBM StudyCircle</title>
    <link rel="stylesheet" href="site.css">
    <link rel="stylesheet" href="theme.css?v=1">
    <script src="theme.js?v=1"></script>
    <style>
        .profile-page { max-width: 860px; margin: 0 auto; }
        .profile-hero {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 22px;
            align-items: center;
            padding: 30px;
            margin-bottom: 20px;
            border: 1px solid var(--sc-border);
            border-radius: 24px;
            background: linear-gradient(135deg, var(--sc-surface), var(--sc-soft));
        }
        .profile-big-avatar {
            display: grid;
            place-items: center;
            width: 92px;
            height: 92px;
            border-radius: 50%;
            background: linear-gradient(135deg, #147644, #39a66b);
            color: #fff;
            font-size: 36px;
            font-weight: 800;
            box-shadow: 0 12px 28px rgba(20,118,68,.22);
        }
        .profile-hero h1 { margin: 0 0 7px; }
        .profile-hero p { margin: 0; color: var(--sc-muted); }
        .profile-role {
            display: inline-flex;
            margin-top: 13px;
            padding: 6px 11px;
            border-radius: 999px;
            background: var(--sc-soft);
            color: var(--sc-accent);
            font-size: 12px;
            font-weight: 800;
        }
        .profile-details {
            display: grid;
            grid-template-columns: repeat(2, minmax(0,1fr));
            gap: 15px;
        }
        .profile-detail {
            padding: 21px;
            border: 1px solid var(--sc-border);
            border-radius: 17px;
            background: var(--sc-surface);
        }
        .profile-detail small {
            display: block;
            margin-bottom: 7px;
            color: var(--sc-muted);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .7px;
        }
        .profile-detail strong { font-size: 16px; overflow-wrap: anywhere; }
        .profile-actions { display:flex; flex-wrap:wrap; gap:12px; margin-top:20px; }
        @media(max-width:650px) {
            .profile-hero { grid-template-columns:1fr; text-align:center; }
            .profile-big-avatar { margin:auto; }
            .profile-details { grid-template-columns:1fr; }
            .profile-actions { flex-direction:column; }
            .profile-actions .button { text-align:center; }
        }
    </style>
    <link rel="stylesheet" href="branding.css?v=1">
    <link rel="stylesheet" href="nsbm-professional.css?v=1">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?= escape($dashboard) ?>">
            <span class="brand-mark brand-mark-logo" aria-hidden="true"><img src="assets/nsbm-logo.svg" alt="NSBM Green University Town"></span>
            <span>
                <strong>StudyCircle</strong>
                <small>MY PROFILE</small>
            </span>
        </a>
        <nav aria-label="Profile navigation">
            <button type="button" class="theme-toggle" aria-label="Switch to dark theme" aria-pressed="false" hidden>Dark mode</button>
            <a class="profile-chip" href="profile.php" aria-current="page">
                <span class="profile-avatar" aria-hidden="true"><?= escape($initial) ?></span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="7" r="4"/></svg>
                <span class="profile-name">Profile</span>
            </a>
            <form method="post" action="logout.php">
                <input type="hidden" name="csrf_token" value="<?= escape(csrf_token()) ?>">
                <button class="button button-outline" type="submit">Log out</button>
            </form>
        </nav>
    </div>
</header>

<main class="container">
    <a class="back-button" href="<?= escape($dashboard) ?>"><span class="back-arrow" aria-hidden="true">&larr;</span> Back to dashboard</a>

    <section class="profile-page">
        <div class="profile-hero">
            <div class="profile-big-avatar" aria-hidden="true"><?= escape($initial) ?></div>
            <div>
                <p class="eyebrow">NSBM Green University · StudyCircle</p>
                <h1><?= escape($profile['full_name']) ?></h1>
                <p>Your account details and StudyCircle membership information.</p>
                <span class="profile-role"><?= escape($roleLabel) ?></span>
            </div>
        </div>

        <div class="profile-details">
            <article class="profile-detail">
                <small>Full name</small>
                <strong><?= escape($profile['full_name']) ?></strong>
            </article>
            <article class="profile-detail">
                <small>Email address</small>
                <strong><?= escape($profile['email']) ?></strong>
            </article>
            <article class="profile-detail">
                <small>Student ID</small>
                <strong><?= $profile['student_id'] ? escape($profile['student_id']) : 'Not provided' ?></strong>
            </article>
            <article class="profile-detail">
                <small>Account type</small>
                <strong><?= escape($roleLabel) ?></strong>
            </article>
            <article class="profile-detail">
                <small>Account status</small>
                <strong><?= escape(ucfirst($profile['status'])) ?></strong>
            </article>
            <article class="profile-detail">
                <small>Member since</small>
                <strong><?= escape($joined) ?></strong>
            </article>
        </div>

        <div class="profile-actions">
            <a class="button" href="<?= escape($dashboard) ?>">Return to dashboard</a>
            <?php if ($profile['role'] === 'student'): ?>
                <a class="button button-outline" href="my_uploads.php">View my uploads</a>
            <?php else: ?>
                <a class="button button-outline" href="admin_reports.php">View reports</a>
            <?php endif; ?>
        </div>
    </section>
</main>
</body>
</html>
