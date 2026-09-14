<?php
session_start();

/* ------------------------------------------------------------------
   CONTENT — edit these to make the site yours
------------------------------------------------------------------- */

$owner = [
    'name'    => 'Maya Okafor',
    'role'    => 'Full-stack developer',
    'tagline' => 'I build fast, unglamorous software that holds up under real use.',
    'email'   => 'hello@mayaokafor.dev',
    'location'=> 'Lagos, Nigeria — works remote',
];

$socials = [
    'GitHub'   => 'https://github.com/',
    'LinkedIn' => 'https://linkedin.com/',
    'Twitter'  => 'https://twitter.com/',
];

$projects = [
    [
        'year' => '2025',
        'title' => 'Ledgerline',
        'role' => 'Sole developer',
        'description' => 'A reconciliation tool for small finance teams. Imports bank CSVs, matches them against invoices, and flags what doesn\'t add up — used daily by three accounting firms.',
        'stack' => ['PHP', 'MySQL', 'htmx'],
        'link' => '#',
    ],
    [
        'year' => '2024',
        'title' => 'Harbor',
        'role' => 'Lead engineer, team of 3',
        'description' => 'Internal shipping-logistics dashboard for a freight startup. Rebuilt their route-planning view from a spreadsheet into a live map with load constraints.',
        'stack' => ['Laravel', 'Vue', 'PostgreSQL'],
        'link' => '#',
    ],
    [
        'year' => '2023',
        'title' => 'Recede',
        'role' => 'Sole developer',
        'description' => 'A habit tracker that deliberately has no streaks, badges, or notifications. Built after getting tired of apps designed to make me anxious about missing a day.',
        'stack' => ['PHP', 'SQLite', 'Vanilla JS'],
        'link' => '#',
    ],
    [
        'year' => '2022',
        'title' => 'Field Notes API',
        'role' => 'Sole developer',
        'description' => 'A small, opinionated API for field researchers to log observations offline and sync later. Adopted by two university ecology departments.',
        'stack' => ['Node', 'Express', 'MongoDB'],
        'link' => '#',
    ],
];

$skills = [
    'PHP', 'Laravel', 'MySQL', 'PostgreSQL', 'JavaScript', 'Vue',
    'REST APIs', 'Docker', 'Linux server admin', 'Git',
];

/* ------------------------------------------------------------------
   CONTACT FORM HANDLING
------------------------------------------------------------------- */

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') {
        $errors[] = 'Enter your name.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Enter a valid email address.';
    }
    if ($message === '') {
        $errors[] = 'Write a message before sending.';
    }

    if (empty($errors)) {
        // Wire this up to mail(), a mailer library, or a database insert.
        // mail($owner['email'], "Portfolio contact from $name", $message, "From: $email");

        $_SESSION['flash_success'] = true;
        header('Location: ' . $_SERVER['PHP_SELF'] . '#contact');
        exit;
    }
}

if (isset($_SESSION['flash_success'])) {
    $success = true;
    unset($_SESSION['flash_success']);
}

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($owner['name']) ?> — <?= e($owner['role']) ?></title>
<meta name="description" content="<?= e($owner['tagline']) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root {
    --ink: #14181c;
    --ink-soft: #3c4650;
    --paper: #f6f4ee;
    --paper-dim: #eae7dd;
    --rule: #d8d3c4;
    --cobalt: #2b3fe0;
    --gold: #a9791f;
    --font-display: 'Fraunces', Georgia, serif;
    --font-body: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  }

  * { box-sizing: border-box; }

  html { scroll-behavior: smooth; }

  body {
    margin: 0;
    background: var(--paper);
    color: var(--ink);
    font-family: var(--font-body);
    font-size: 16px;
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
  }

  a { color: inherit; }

  .wrap {
    max-width: 920px;
    margin: 0 auto;
    padding: 0 28px;
  }

  /* ---------- Header ---------- */

  header.site {
    padding: 28px 0 0;
    border-bottom: 1px solid var(--rule);
  }

  header.site .wrap {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    padding-bottom: 20px;
    flex-wrap: wrap;
    gap: 12px;
  }

  .mark {
    font-family: var(--font-display);
    font-size: 1.15rem;
    font-weight: 600;
    letter-spacing: -0.01em;
    text-decoration: none;
  }

  nav.primary {
    display: flex;
    gap: 24px;
    font-size: 0.9rem;
  }

  nav.primary a {
    text-decoration: none;
    color: var(--ink-soft);
    border-bottom: 1px solid transparent;
    padding-bottom: 2px;
  }

  nav.primary a:hover,
  nav.primary a:focus-visible {
    color: var(--ink);
    border-bottom-color: var(--cobalt);
  }

  /* ---------- Hero ---------- */

  .hero {
    padding: 88px 0 96px;
  }

  .hero h1 {
    font-family: var(--font-display);
    font-weight: 500;
    font-size: clamp(2.4rem, 5vw, 3.6rem);
    line-height: 1.08;
    margin: 0 0 28px;
    max-width: 14ch;
    letter-spacing: -0.01em;
  }

  .hero .role {
    font-size: 1.05rem;
    color: var(--ink-soft);
    margin: 0 0 8px;
  }

  .hero .tagline {
    font-size: 1.05rem;
    max-width: 46ch;
    color: var(--ink-soft);
    margin: 0;
  }

  /* ---------- Section shell ---------- */

  section {
    padding: 64px 0;
    border-bottom: 1px solid var(--rule);
  }

  section:last-of-type { border-bottom: none; }

  .section-head {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    margin-bottom: 40px;
    gap: 16px;
  }

  .section-head h2 {
    font-family: var(--font-display);
    font-size: 1.5rem;
    font-weight: 500;
    margin: 0;
  }

  .section-head .count {
    font-size: 0.85rem;
    color: var(--ink-soft);
    font-variant-numeric: tabular-nums;
  }

  /* ---------- Project index ---------- */

  .project {
    display: grid;
    grid-template-columns: 3.5rem 1fr auto;
    gap: 6px 24px;
    padding: 28px 0;
    border-top: 1px solid var(--rule);
    align-items: start;
  }

  .project:first-child { border-top: none; }

  .project .year {
    font-size: 0.85rem;
    color: var(--gold);
    font-variant-numeric: tabular-nums;
    padding-top: 4px;
  }

  .project .title-row {
    grid-column: 2;
  }

  .project h3 {
    font-family: var(--font-display);
    font-size: 1.25rem;
    font-weight: 500;
    margin: 0 0 4px;
  }

  .project .role {
    font-size: 0.85rem;
    color: var(--ink-soft);
    margin: 0 0 12px;
  }

  .project p.desc {
    margin: 0 0 14px;
    max-width: 58ch;
    color: var(--ink-soft);
  }

  .stack {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .stack li {
    font-size: 0.78rem;
    color: var(--ink-soft);
  }

  .stack li:not(:last-child)::after {
    content: '·';
    margin-left: 8px;
    color: var(--rule);
  }

  .project .visit {
    grid-column: 3;
    align-self: start;
    font-size: 0.85rem;
    text-decoration: none;
    color: var(--cobalt);
    white-space: nowrap;
    padding-top: 4px;
  }

  .project .visit:hover,
  .project .visit:focus-visible {
    text-decoration: underline;
  }

  @media (max-width: 640px) {
    .project {
      grid-template-columns: 1fr;
    }
    .project .title-row,
    .project .visit {
      grid-column: 1;
    }
    .project .visit { padding-top: 0; }
  }

  /* ---------- About / skills ---------- */

  .about p {
    max-width: 62ch;
    color: var(--ink-soft);
    margin: 0 0 20px;
    font-size: 1.02rem;
  }

  .skills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 12px;
    padding: 0;
    margin: 28px 0 0;
    list-style: none;
  }

  .skills li {
    font-size: 0.85rem;
    padding: 6px 12px;
    border: 1px solid var(--rule);
    border-radius: 3px;
    color: var(--ink-soft);
  }

  /* ---------- Contact ---------- */

  .contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.3fr;
    gap: 48px;
  }

  @media (max-width: 720px) {
    .contact-grid { grid-template-columns: 1fr; }
  }

  .contact-info p {
    color: var(--ink-soft);
    max-width: 32ch;
    margin: 0 0 20px;
  }

  .contact-info .email {
    display: inline-block;
    font-family: var(--font-display);
    font-size: 1.2rem;
    text-decoration: none;
    border-bottom: 1px solid var(--ink);
    margin-bottom: 24px;
  }

  .contact-info ul.social {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 18px;
    font-size: 0.88rem;
  }

  .contact-info ul.social a { text-decoration: none; color: var(--ink-soft); }
  .contact-info ul.social a:hover { color: var(--cobalt); }

  form.contact-form label {
    display: block;
    font-size: 0.82rem;
    color: var(--ink-soft);
    margin-bottom: 6px;
  }

  form.contact-form .field { margin-bottom: 20px; }

  form.contact-form input,
  form.contact-form textarea {
    width: 100%;
    font-family: var(--font-body);
    font-size: 0.95rem;
    padding: 10px 12px;
    border: 1px solid var(--rule);
    border-radius: 3px;
    background: #fff;
    color: var(--ink);
  }

  form.contact-form input:focus-visible,
  form.contact-form textarea:focus-visible {
    outline: 2px solid var(--cobalt);
    outline-offset: 1px;
  }

  form.contact-form textarea {
    min-height: 120px;
    resize: vertical;
  }

  form.contact-form button {
    font-family: var(--font-body);
    font-size: 0.9rem;
    font-weight: 600;
    background: var(--ink);
    color: var(--paper);
    border: none;
    padding: 12px 22px;
    border-radius: 3px;
    cursor: pointer;
  }

  form.contact-form button:hover { background: var(--cobalt); }

  .notice {
    font-size: 0.88rem;
    padding: 12px 14px;
    border-radius: 3px;
    margin-bottom: 20px;
  }

  .notice.success {
    background: #e5efe1;
    color: #2f5c25;
    border: 1px solid #c4dab8;
  }

  .notice.error {
    background: #f6e6e3;
    color: #8a3a2a;
    border: 1px solid #e3c3ba;
  }

  /* ---------- Footer ---------- */

  footer.site {
    padding: 32px 0 48px;
    font-size: 0.8rem;
    color: var(--ink-soft);
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 8px;
  }

  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
  }
</style>
</head>
<body>

<header class="site">
  <div class="wrap">
    <a class="mark" href="#top"><?= e($owner['name']) ?></a>
    <nav class="primary">
      <a href="#work">Work</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>

<main id="top">

  <div class="wrap">
    <section class="hero">
      <p class="role"><?= e($owner['role']) ?> — <?= e($owner['location']) ?></p>
      <h1><?= e($owner['tagline']) ?></h1>
    </section>
  </div>

  <section id="work">
    <div class="wrap">
      <div class="section-head">
        <h2>Selected work</h2>
        <span class="count"><?= count($projects) ?> projects</span>
      </div>

      <?php foreach ($projects as $p): ?>
        <div class="project">
          <div class="year"><?= e($p['year']) ?></div>
          <div class="title-row">
            <h3><?= e($p['title']) ?></h3>
            <p class="role"><?= e($p['role']) ?></p>
            <p class="desc"><?= e($p['description']) ?></p>
            <ul class="stack">
              <?php foreach ($p['stack'] as $tech): ?>
                <li><?= e($tech) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <a class="visit" href="<?= e($p['link']) ?>">View ↗</a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="about" class="about">
    <div class="wrap">
      <div class="section-head">
        <h2>About</h2>
      </div>
      <p>I've spent the last several years building web applications for small teams who need something reliable more than something flashy — accounting tools, internal dashboards, the occasional API that just needs to work at 3am.</p>
      <p>Most of my work is in PHP and Laravel, though I reach for whatever fits the problem. I care more about a codebase someone else can pick up in six months than about using the newest framework.</p>
      <ul class="skills">
        <?php foreach ($skills as $skill): ?>
          <li><?= e($skill) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section id="contact">
    <div class="wrap">
      <div class="section-head">
        <h2>Contact</h2>
      </div>

      <div class="contact-grid">
        <div class="contact-info">
          <p>Have a project in mind, or just want to talk shop? I read everything that comes through here.</p>
          <a class="email" href="mailto:<?= e($owner['email']) ?>"><?= e($owner['email']) ?></a>
          <ul class="social">
            <?php foreach ($socials as $label => $url): ?>
              <li><a href="<?= e($url) ?>"><?= e($label) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <form class="contact-form" method="post" action="#contact">
          <?php if ($success): ?>
            <div class="notice success">Thanks — your message is in. I'll get back to you soon.</div>
          <?php endif; ?>

          <?php if (!empty($errors)): ?>
            <div class="notice error">
              <?= e(implode(' ', $errors)) ?>
            </div>
          <?php endif; ?>

          <div class="field">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?= e($_POST['name'] ?? '') ?>" required>
          </div>
          <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= e($_POST['email'] ?? '') ?>" required>
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea id="message" name="message" required><?= e($_POST['message'] ?? '') ?></textarea>
          </div>
          <button type="submit" name="contact_submit" value="1">Send message</button>
        </form>
      </div>
    </div>
  </section>

</main>

<footer class="site">
  <div class="wrap" style="display:flex; justify-content:space-between; width:100%; flex-wrap:wrap; gap:8px;">
    <span>&copy; <?= date('Y') ?> <?= e($owner['name']) ?></span>
    <span>Built with PHP</span>
  </div>
</footer>

</body>
</html>