<?php
// ================= CONFIG =================
$site = [
    'name'     => 'John Doe',
    'title'    => 'Full-Stack Web Developer',
    'tagline'  => 'I build clean, fast, and reliable web applications.',
    'email'    => 'johndoe@example.com',
    'phone'    => '+1 (555) 123-4567',
    'location' => 'Casablanca, Morocco',
    'about'    => 'I am a passionate web developer with experience building modern websites and applications using PHP, JavaScript, and MySQL. I love turning ideas into functional, elegant digital products.',
    'avatar'   => 'https://i.pravatar.cc/300',
    'github'   => 'https://github.com/yourusername',
    'linkedin' => 'https://linkedin.com/in/yourusername',
    'twitter'  => 'https://twitter.com/yourusername',
];

$skills = [
    ['name' => 'PHP',        'level' => 90],
    ['name' => 'JavaScript', 'level' => 85],
    ['name' => 'MySQL',      'level' => 80],
    ['name' => 'HTML/CSS',   'level' => 95],
    ['name' => 'Laravel',    'level' => 75],
    ['name' => 'Git',        'level' => 80],
];

$projects = [
    ['title' => 'E-Commerce Platform', 'description' => 'A full-featured online store with cart, checkout, and admin dashboard.', 'tags' => ['PHP', 'MySQL', 'JavaScript']],
    ['title' => 'Task Manager App', 'description' => 'A collaborative task management tool with real-time updates.', 'tags' => ['Laravel', 'Vue.js', 'MySQL']],
    ['title' => 'Blog CMS', 'description' => 'A lightweight custom content management system for bloggers.', 'tags' => ['PHP', 'SQLite', 'Bootstrap']],
];

// ================= CONTACT FORM HANDLER =================
$statusMsg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $statusMsg = '<p class="form-msg error">Please fill in all fields correctly.</p>';
    } else {
        $to      = $site['email'];
        $subject = "New portfolio contact from " . htmlspecialchars($name);
        $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\nReply-To: $email\r\n";
        $sent = @mail($to, $subject, $body, $headers);
        $statusMsg = $sent
            ? '<p class="form-msg success">Thanks! Your message has been sent.</p>'
            : '<p class="form-msg error">Message could not be sent (mail server not configured).</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($site['name']) ?> — <?= htmlspecialchars($site['title']) ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
:root {
    --primary: #4f46e5;
    --primary-dark: #4338ca;
    --dark: #111827;
    --gray: #6b7280;
    --light-bg: #f9fafb;
    --border: #e5e7eb;
    --white: #ffffff;
}
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Poppins', sans-serif; color: var(--dark); line-height: 1.6; background: var(--white); }
.container { max-width: 1100px; margin: 0 auto; padding: 0 24px; }
a { text-decoration: none; color: inherit; }
ul { list-style: none; }
img { max-width: 100%; display: block; }

/* Navbar */
.navbar { position: sticky; top: 0; background: var(--white); border-bottom: 1px solid var(--border); z-index: 100; }
.navbar-inner { display: flex; justify-content: space-between; align-items: center; height: 70px; }
.logo { font-weight: 700; font-size: 1.3rem; color: var(--primary); }
.nav-links { display: flex; gap: 28px; }
.nav-links a { font-weight: 500; color: var(--gray); transition: color 0.2s; }
.nav-links a:hover { color: var(--primary); }

/* Hero */
.hero { padding: 100px 0 80px; text-align: center; background: linear-gradient(180deg, var(--light-bg) 0%, var(--white) 100%); }
.avatar { width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 24px; border: 4px solid var(--white); box-shadow: 0 8px 24px rgba(0,0,0,0.1); }
.hero h1 { font-size: 2.5rem; margin-bottom: 8px; }
.hero h1 span { color: var(--primary); }
.hero h2 { font-size: 1.3rem; color: var(--gray); font-weight: 500; margin-bottom: 12px; }
.hero p { max-width: 500px; margin: 0 auto 32px; color: var(--gray); }
.hero-buttons { display: flex; justify-content: center; gap: 16px; }

/* Buttons */
.btn { display: inline-block; padding: 12px 28px; border-radius: 8px; font-weight: 600; transition: all 0.2s; cursor: pointer; border: 2px solid transparent; }
.btn-primary { background: var(--primary); color: var(--white); }
.btn-primary:hover { background: var(--primary-dark); }
.btn-outline { border-color: var(--primary); color: var(--primary); }
.btn-outline:hover { background: var(--primary); color: var(--white); }
.btn-small { padding: 8px 18px; font-size: 0.9rem; background: var(--dark); color: var(--white); }

/* Sections */
.section { padding: 80px 0; }
.section-alt { background: var(--light-bg); }
.section-title { text-align: center; font-size: 2rem; margin-bottom: 48px; position: relative; }
.section-title::after { content: ''; display: block; width: 60px; height: 4px; background: var(--primary); margin: 12px auto 0; border-radius: 2px; }

/* About */
.about-text { max-width: 700px; margin: 0 auto 32px; text-align: center; color: var(--gray); }
.about-info { display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; text-align: center; }

/* Skills */
.skills-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; max-width: 700px; margin: 0 auto; }
.skill-name { display: flex; justify-content: space-between; margin-bottom: 6px; font-weight: 500; }
.skill-bar { background: var(--border); border-radius: 6px; height: 10px; overflow: hidden; }
.skill-bar-fill { background: var(--primary); height: 100%; border-radius: 6px; }

/* Projects */
.projects-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 28px; }
.project-card { background: var(--white); border: 1px solid var(--border); border-radius: 12px; overflow: hidden; transition: transform 0.2s, box-shadow 0.2s; }
.project-card:hover { transform: translateY(-4px); box-shadow: 0 12px 24px rgba(0,0,0,0.08); }
.project-image { height: 160px; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); }
.project-body { padding: 20px; }
.project-body h3 { margin-bottom: 8px; }
.project-body p { color: var(--gray); font-size: 0.95rem; margin-bottom: 14px; }
.tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 16px; }
.tag { background: var(--light-bg); border: 1px solid var(--border); padding: 4px 10px; border-radius: 20px; font-size: 0.8rem; color: var(--gray); }

/* Contact form */
.contact-form { max-width: 600px; margin: 0 auto; }
.form-group { margin-bottom: 20px; }
.form-group label { display: block; margin-bottom: 6px; font-weight: 500; }
.form-group input, .form-group textarea { width: 100%; padding: 12px 14px; border: 1px solid var(--border); border-radius: 8px; font-family: inherit; font-size: 1rem; }
.form-group input:focus, .form-group textarea:focus { outline: none; border-color: var(--primary); }
.form-msg { text-align: center; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-weight: 500; }
.form-msg.success { background: #d1fae5; color: #065f46; }
.form-msg.error { background: #fee2e2; color: #991b1b; }

/* Footer */
.footer { padding: 32px 0; border-top: 1px solid var(--border); }
.footer-inner { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; color: var(--gray); font-size: 0.9rem; }
.social-links { display: flex; gap: 20px; }
.social-links a:hover { color: var(--primary); }

/* Responsive */
@media (max-width: 640px) {
    .nav-links { gap: 16px; font-size: 0.9rem; }
    .skills-grid { grid-template-columns: 1fr; }
    .hero h1 { font-size: 2rem; }
}
</style>
</head>
<body>

<header class="navbar">
    <div class="container navbar-inner">
        <a href="#" class="logo"><?= htmlspecialchars($site['name']) ?></a>
        <nav>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="container hero-inner">
        <img src="<?= htmlspecialchars($site['avatar']) ?>" alt="<?= htmlspecialchars($site['name']) ?>" class="avatar">
        <h1>Hi, I'm <span><?= htmlspecialchars($site['name']) ?></span></h1>
        <h2><?= htmlspecialchars($site['title']) ?></h2>
        <p><?= htmlspecialchars($site['tagline']) ?></p>
        <div class="hero-buttons">
            <a href="#contact" class="btn btn-primary">Hire Me</a>
            <a href="#projects" class="btn btn-outline">View Work</a>
        </div>
    </div>
</section>

<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <p class="about-text"><?= htmlspecialchars($site['about']) ?></p>
        <ul class="about-info">
            <li><strong>Email:</strong> <?= htmlspecialchars($site['email']) ?></li>
            <li><strong>Phone:</strong> <?= htmlspecialchars($site['phone']) ?></li>
            <li><strong>Location:</strong> <?= htmlspecialchars($site['location']) ?></li>
        </ul>
    </div>
</section>

<section id="skills" class="section section-alt">
    <div class="container">
        <h2 class="section-title">Skills</h2>
        <div class="skills-grid">
            <?php foreach ($skills as $skill): ?>
                <div class="skill-item">
                    <div class="skill-name">
                        <span><?= htmlspecialchars($skill['name']) ?></span>
                        <span><?= (int)$skill['level'] ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-bar-fill" style="width: <?= (int)$skill['level'] ?>%;"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title">Projects</h2>
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <div class="project-image"></div>
                    <div class="project-body">
                        <h3><?= htmlspecialchars($project['title']) ?></h3>
                        <p><?= htmlspecialchars($project['description']) ?></p>
                        <div class="tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="tag"><?= htmlspecialchars($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a href="#" class="btn btn-small">View Project</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contact" class="section section-alt">
    <div class="container">
        <h2 class="section-title">Contact Me</h2>
        <?= $statusMsg ?>
        <form method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

<footer class="footer">
    <div class="container footer-inner">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?>. All rights reserved.</p>
        <div class="social-links">
            <a href="<?= htmlspecialchars($site['github']) ?>" target="_blank" rel="noopener">GitHub</a>
            <a href="<?= htmlspecialchars($site['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
            <a href="<?= htmlspecialchars($site['twitter']) ?>" target="_blank" rel="noopener">Twitter</a>
        </div>
    </div>
</footer>

</body>
</html>