<?php
session_start();

/* ------------------------------------------------------------------
   CONTENT — edit these to make the site yours
------------------------------------------------------------------- */

$owner = [
    'name'    => 'Sofia Marchetti',
    'role'    => 'Stylist & content creator',
    'tagline' => 'Quiet, wearable style for people who don\'t want to think about it every morning.',
    'email'   => 'hello@sofiamarchetti.com',
    'location'=> 'Milan, Italy',
];

$socials = [
    'Instagram' => 'https://instagram.com/',
    'TikTok'    => 'https://tiktok.com/',
    'Pinterest' => 'https://pinterest.com/',
];

$collaborations = [
    [
        'brand' => 'Loro & Co.',
        'type' => 'Capsule collection',
        'year' => '2025',
        'description' => 'Co-designed a six-piece capsule of everyday basics, sized and priced to actually be worn — not just photographed.',
        'hue' => 350,
    ],
    [
        'brand' => 'Maren Studio',
        'type' => 'Campaign styling',
        'year' => '2025',
        'description' => 'Styled the spring campaign around one idea: clothes that still look good after the third wear of the week.',
        'hue' => 20,
    ],
    [
        'brand' => 'Ferro Denim',
        'type' => 'Brand partnership',
        'year' => '2024',
        'description' => 'Ongoing partnership documenting how one pair of jeans actually ages over a year of daily wear.',
        'hue' => 200,
    ],
    [
        'brand' => 'Bellalana',
        'type' => 'Editorial feature',
        'year' => '2024',
        'description' => 'A knitwear editorial shot in a working wool mill outside Biella, tracing the yarn from sheep to sweater.',
        'hue' => 15,
    ],
];

$now_wearing = ['Wide-leg trousers', 'Boiled wool coats', 'One good white shirt', 'Loafers, always'];

/* ------------------------------------------------------------------
   CONTACT FORM HANDLING
------------------------------------------------------------------- */

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') $errors[] = 'Enter your name.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Enter a valid email address.';
    if ($message === '') $errors[] = 'Write a message before sending.';

    if (empty($errors)) {
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

function swatch($hue) {
    return "linear-gradient(160deg, hsl({$hue}, 55%, 88%), hsl({$hue}, 45%, 72%))";
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
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Playfair+Display:ital,wght@1,500;1,600&display=swap" rel="stylesheet">
<style>
  :root {
    --cream: #fbf6f1;
    --blush: #f1ded6;
    --rose: #b4555f;
    --ink: #322722;
    --ink-soft: #6f6259;
    --line: #e6d9cf;
    --font-display: 'Playfair Display', Georgia, serif;
    --font-body: 'Manrope', -apple-system, BlinkMacSystemFont, sans-serif;
  }

  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; }

  body {
    margin: 0;
    background: var(--cream);
    color: var(--ink);
    font-family: var(--font-body);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
  }

  a { color: inherit; }

  .wrap {
    max-width: 1040px;
    margin: 0 auto;
    padding: 0 28px;
  }

  /* ---------- Header ---------- */

  header.site {
    padding: 24px 0;
  }

  header.site .wrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
  }

  .mark {
    font-family: var(--font-display);
    font-style: italic;
    font-weight: 600;
    font-size: 1.3rem;
    text-decoration: none;
  }

  nav.primary {
    display: flex;
    gap: 28px;
    font-size: 0.88rem;
  }

  nav.primary a {
    text-decoration: none;
    color: var(--ink-soft);
  }

  nav.primary a:hover,
  nav.primary a:focus-visible {
    color: var(--rose);
  }

  /* ---------- Hero: collage + text ---------- */

  .hero {
    padding: 40px 0 80px;
  }

  .hero .wrap {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: 48px;
    align-items: center;
  }

  @media (max-width: 780px) {
    .hero .wrap { grid-template-columns: 1fr; }
  }

  .hero h1 {
    font-family: var(--font-display);
    font-style: italic;
    font-weight: 500;
    font-size: clamp(1.9rem, 3.6vw, 2.6rem);
    line-height: 1.3;
    margin: 0 0 20px;
  }

  .hero p.sub {
    color: var(--ink-soft);
    font-size: 0.95rem;
    max-width: 40ch;
    margin: 0;
  }

  .collage {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 120px 90px;
    gap: 14px;
  }

  .collage .block {
    border-radius: 18px;
  }

  .collage .block:nth-child(1) { grid-row: 1 / 3; border-radius: 22px; }

  /* ---------- Section shell ---------- */

  section { padding: 56px 0; border-top: 1px solid var(--line); }

  .section-head {
    margin-bottom: 36px;
  }

  .section-head .eyebrow {
    font-size: 0.8rem;
    color: var(--rose);
    display: block;
    margin-bottom: 8px;
  }

  .section-head h2 {
    font-family: var(--font-display);
    font-style: italic;
    font-weight: 500;
    font-size: 1.6rem;
    margin: 0;
  }

  /* ---------- Collaborations ---------- */

  .collab-list {
    display: flex;
    flex-direction: column;
    gap: 0;
  }

  .collab {
    display: grid;
    grid-template-columns: 90px 1fr auto;
    gap: 20px;
    align-items: center;
    padding: 22px 0;
    border-bottom: 1px solid var(--line);
  }

  .collab:first-child { border-top: 1px solid var(--line); }

  @media (max-width: 620px) {
    .collab { grid-template-columns: 60px 1fr; }
    .collab .year { display: none; }
  }

  .collab .swatch {
    width: 64px;
    height: 64px;
    border-radius: 14px;
  }

  .collab h3 {
    font-family: var(--font-body);
    font-weight: 700;
    font-size: 1.02rem;
    margin: 0 0 4px;
  }

  .collab .type {
    font-size: 0.82rem;
    color: var(--rose);
    margin: 0 0 6px;
  }

  .collab p.desc {
    font-size: 0.88rem;
    color: var(--ink-soft);
    margin: 0;
    max-width: 46ch;
  }

  .collab .year {
    font-size: 0.85rem;
    color: var(--ink-soft);
  }

  /* ---------- Now wearing ---------- */

  .now-list {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .now-list li {
    font-size: 0.88rem;
    padding: 10px 18px;
    background: var(--blush);
    border-radius: 30px;
    color: var(--ink);
  }

  /* ---------- Contact ---------- */

  .contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
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
    font-style: italic;
    font-size: 1.2rem;
    color: var(--rose);
    text-decoration: none;
    margin-bottom: 24px;
  }

  .contact-info ul.social {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 18px;
    font-size: 0.85rem;
  }

  .contact-info ul.social a { text-decoration: none; color: var(--ink-soft); }
  .contact-info ul.social a:hover { color: var(--rose); }

  form.contact-form label {
    display: block;
    font-size: 0.8rem;
    color: var(--ink-soft);
    margin-bottom: 6px;
  }

  form.contact-form .field { margin-bottom: 18px; }

  form.contact-form input,
  form.contact-form textarea {
    width: 100%;
    font-family: var(--font-body);
    font-size: 0.92rem;
    padding: 12px 16px;
    border: 1px solid var(--line);
    border-radius: 30px;
    background: #fff;
    color: var(--ink);
  }

  form.contact-form textarea {
    border-radius: 18px;
    min-height: 120px;
    resize: vertical;
  }

  form.contact-form input:focus-visible,
  form.contact-form textarea:focus-visible {
    outline: 2px solid var(--rose);
    outline-offset: 1px;
  }

  form.contact-form button {
    font-family: var(--font-body);
    font-size: 0.9rem;
    font-weight: 700;
    background: var(--rose);
    color: #fff;
    border: none;
    padding: 13px 26px;
    border-radius: 30px;
    cursor: pointer;
  }

  form.contact-form button:hover { background: #9a4249; }

  .notice {
    font-size: 0.85rem;
    padding: 12px 16px;
    border-radius: 14px;
    margin-bottom: 18px;
  }

  .notice.success {
    background: #eaf1e3;
    color: #4c6b3c;
  }

  .notice.error {
    background: #f7e3e1;
    color: #96453c;
  }

  footer.site {
    padding: 32px 0 48px;
    font-size: 0.8rem;
    color: var(--ink-soft);
    text-align: center;
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
      <a href="#work">Collaborations</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>

<main id="top">

  <div class="wrap hero-wrap">
    <section class="hero" style="border-top:none; padding-top:20px;">
      <div class="wrap" style="padding:0;">
        <div>
          <h1><?= e($owner['tagline']) ?></h1>
          <p class="sub"><?= e($owner['role']) ?> — <?= e($owner['location']) ?></p>
        </div>
        <div class="collage">
          <div class="block" style="background: <?= swatch(350) ?>;"></div>
          <div class="block" style="background: <?= swatch(30) ?>;"></div>
          <div class="block" style="background: <?= swatch(200) ?>;"></div>
        </div>
      </div>
    </section>
  </div>

  <section id="work">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Selected work</span>
        <h2>Collaborations</h2>
      </div>

      <div class="collab-list">
        <?php foreach ($collaborations as $c): ?>
          <div class="collab">
            <div class="swatch" style="background: <?= swatch($c['hue']) ?>;"></div>
            <div>
              <h3><?= e($c['brand']) ?></h3>
              <p class="type"><?= e($c['type']) ?></p>
              <p class="desc"><?= e($c['description']) ?></p>
            </div>
            <div class="year"><?= e($c['year']) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">A little about me</span>
        <h2>Style should be easy</h2>
      </div>
      <p style="max-width:56ch; color:var(--ink-soft); margin:0 0 28px;">
        I spent four years as an assistant stylist before going independent, and I still build every wardrobe the same way I learned back then: start with what someone already owns and wears often, then fill the real gaps — not the aspirational ones.
      </p>
      <ul class="now-list">
        <?php foreach ($now_wearing as $item): ?>
          <li><?= e($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section id="contact">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">Get in touch</span>
        <h2>Let's work together</h2>
      </div>

      <div class="contact-grid">
        <div class="contact-info">
          <p>For collaborations, styling requests, or press — send a note and I'll get back to you within a few days.</p>
          <a class="email" href="mailto:<?= e($owner['email']) ?>"><?= e($owner['email']) ?></a>
          <ul class="social">
            <?php foreach ($socials as $label => $url): ?>
              <li><a href="<?= e($url) ?>"><?= e($label) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <form class="contact-form" method="post" action="#contact">
          <?php if ($success): ?>
            <div class="notice success">Thanks — your message is in. I'll be in touch soon.</div>
          <?php endif; ?>

          <?php if (!empty($errors)): ?>
            <div class="notice error"><?= e(implode(' ', $errors)) ?></div>
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
  &copy; <?= date('Y') ?> <?= e($owner['name']) ?> — Built with PHP
</footer>

</body>
</html>