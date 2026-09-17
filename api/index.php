<?php
// ================= CONFIG =================
$site = [
    'name'     => 'John Doe',
    'title'    => 'Full-Stack Web Developer',
    'tagline'  => 'Turning ideas into fast, functional digital products.',
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
    ['name' => 'PHP', 'level' => 90],
    ['name' => 'JavaScript', 'level' => 85],
    ['name' => 'MySQL', 'level' => 80],
    ['name' => 'HTML/CSS', 'level' => 95],
    ['name' => 'Laravel', 'level' => 75],
    ['name' => 'Git', 'level' => 80],
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
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
:root {
    --bg: #0b0e14;
    --panel: rgba(255,255,255,0.04);
    --border: rgba(255,255,255,0.08);
    --text: #e5e7eb;
    --muted: #9ca3af;
    --accent: #22d3ee;
    --accent2: #a78bfa;
}
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
    font-family: 'Space Grotesk', sans-serif;
    background: radial-gradient(circle at 20% 0%, #14192b 0%, var(--bg) 60%);
    color: var(--text);
    line-height: 1.6;
    min-height: 100vh;
}
a { text-decoration: none; color: inherit; }
ul { list-style: none; }
img { max-width: 100%; display: block; }

.layout { display: flex; min-height: 100vh; }

/* Sidebar */
.sidebar {
    width: 280px;
    flex-shrink: 0;
    padding: 40px 28px;
    border-right: 1px solid var(--border);
    position: sticky;
    top: 0;
    height: 100vh;
    display: flex;
    flex-direction: column;
}
.avatar {
    width: 100px;
    height: 100px;
    border-radius: 20px;
    object-fit: cover;
    margin-bottom: 20px;
    border: 2px solid var(--accent);
}
.sidebar h1 { font-size: 1.4rem; margin-bottom: 4px; }
.sidebar .role { color: var(--accent); font-size: 0.9rem; margin-bottom: 24px; }
.side-nav { display: flex; flex-direction: column; gap: 4px; margin-bottom: auto; }
.side-nav a {
    padding: 10px 14px;
    border-radius: 10px;
    color: var(--muted);
    font-weight: 500;
    font-size: 0.95rem;
    transition: 0.2s;
}
.side-nav a:hover { background: var(--panel); color: var(--text); }
.side-social { display: flex; gap: 14px; margin-top: 24px; }
.side-social a {
    width: 36px; height: 36px;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid var(--border); border-radius: 10px;
    font-size: 0.75rem; color: var(--muted);
}
.side-social a:hover { color: var(--accent); border-color: var(--accent); }

/* Main content */
.main { flex: 1; padding: 60px 60px 40px; max-width: 900px; }

.hero-tag {
    display: inline-block;
    padding: 6px 14px;
    border: 1px solid var(--border);
    border-radius: 20px;
    font-size: 0.8rem;
    color: var(--accent);
    background: var(--panel);
    margin-bottom: 20px;
}
.hero h2 {
    font-size: 2.4rem;
    font-weight: 700;
    line-height: 1.25;
    margin-bottom: 16px;
}
.hero h2 .grad {
    background: linear-gradient(90deg, var(--accent), var(--accent2));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.hero p { color: var(--muted); max-width: 520px; margin-bottom: 28px; }
.btn {
    display: inline-block;
    padding: 12px 26px;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    border: 1px solid transparent;
}
.btn-primary { background: var(--accent); color: #06171b; }
.btn-primary:hover { opacity: 0.85; }
.btn-outline { border-color: var(--border); color: var(--text); margin-left: 12px; }
.btn-outline:hover { border-color: var(--accent); color: var(--accent); }

/* Sections */
.section { padding: 60px 0; border-top: 1px solid var(--border); }
.section-label {
    color: var(--accent);
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 8px;
}
.section-title { font-size: 1.6rem; margin-bottom: 32px; }

/* About */
.about-text { color: var(--muted); max-width: 640px; margin-bottom: 24px; }
.about-info { display: flex; flex-wrap: wrap; gap: 28px; }
.about-info li { color: var(--muted); font-size: 0.9rem; }
.about-info strong { color: var(--text); }

/* Skills */
.skills-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
.skill-card { background: var(--panel); border: 1px solid var(--border); border-radius: 12px; padding: 16px 18px; }
.skill-name { display: flex; justify-content: space-between; margin-bottom: 8px; font-weight: 500; font-size: 0.9rem; }
.skill-bar { background: rgba(255,255,255,0.08); border-radius: 6px; height: 6px; overflow: hidden; }
.skill-bar-fill { background: linear-gradient(90deg, var(--accent), var(--accent2)); height: 100%; border-radius: 6px; }

/* Projects */
.projects-grid { display: flex; flex-direction: column; gap: 16px; }
.project-card {
    background: var(--panel);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 24px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 20px;
    transition: 0.2s;
}
.project-card:hover { border-color: var(--accent); transform: translateX(4px); }
.project-card h3 { margin-bottom: 8px; }
.project-card p { color: var(--muted); font-size: 0.9rem; max-width: 500px; margin-bottom: 12px; }
.tags { display: flex; flex-wrap: wrap; gap: 8px; }
.tag { border: 1px solid var(--border); padding: 3px 10px; border-radius: 20px; font-size: 0.75rem; color: var(--muted); }
.project-arrow { font-size: 1.4rem; color: var(--accent); flex-shrink: 0; }

/* Contact form */
.contact-form { max-width: 560px; }
.form-group { margin-bottom: 18px; }
.form-group label { display: block; margin-bottom: 6px; font-size: 0.9rem; color: var(--muted); }
.form-group input, .form-group textarea {
    width: 100%; padding: 12px 14px;
    background: var(--panel); border: 1px solid var(--border);
    border-radius: 10px; color: var(--text); font-family: inherit; font-size: 0.95rem;
}
.form-group input:focus, .form-group textarea:focus { outline: none; border-color: var(--accent); }
.form-msg { padding: 12px; border-radius: 10px; margin-bottom: 18px; font-size: 0.9rem; }
.form-msg.success { background: rgba(34,211,238,0.1); color: var(--accent); border: 1px solid var(--accent); }
.form-msg.error { background: rgba(248,113,113,0.1); color: #f87171; border: 1px solid #f87171; }

footer { text-align: center; padding: 30px 0 10px; color: var(--muted); font-size: 0.85rem; }

@media (max-width: 800px) {
    .layout { flex-direction: column; }
    .sidebar { width: 100%; height: auto; position: relative; flex-direction: row; align-items: center; gap: 16px; padding: 20px; }
    .side-nav { display: none; }
    .main { padding: 40px 24px; }
    .skills-grid { grid-template-columns: 1fr; }
    .project-card { flex-direction: column; }
}
</style>
</head>
<body>

<div class="layout">

    <aside class="sidebar">
        <img src="<?= htmlspecialchars($site['avatar']) ?>" alt="<?= htmlspecialchars($site['name']) ?>" class="avatar">
        <h1><?= htmlspecialchars($site['name']) ?></h1>
        <div class="role"><?= htmlspecialchars($site['title']) ?></div>
        <nav class="side-nav">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="side-social">
            <a href="<?= htmlspecialchars($site['github']) ?>" target="_blank" rel="noopener">GH</a>
            <a href="<?= htmlspecialchars($site['linkedin']) ?>" target="_blank" rel="noopener">IN</a>
            <a href="<?= htmlspecialchars($site['twitter']) ?>" target="_blank" rel="noopener">TW</a>
        </div>
    </aside>

    <main class="main">

        <section class="hero">
            <span class="hero-tag">Available for freelance work</span>
            <h2>Building <span class="grad">clean, fast</span><br>web experiences.</h2>
            <p><?= htmlspecialchars($site['tagline']) ?></p>
            <a href="#contact" class="btn btn-primary">Get in touch</a>
            <a href="#projects" class="btn btn-outline">See projects</a>
        </section>

        <section id="about" class="section">
            <div class="section-label">01 · Who I am</div>
            <h2 class="section-title">About Me</h2>
            <p class="about-text"><?= htmlspecialchars($site['about']) ?></p>
            <ul class="about-info">
                <li><strong>Email</strong><br><?= htmlspecialchars($site['email']) ?></li>
                <li><strong>Phone</strong><br><?= htmlspecialchars($site['phone']) ?></li>
                <li><strong>Location</strong><br><?= htmlspecialchars($site['location']) ?></li>
            </ul>
        </section>

        <section id="skills" class="section">
            <div class="section-label">02 · What I use</div>
            <h2 class="section-title">Skills</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="skill-card">
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
        </section>

        <section id="projects" class="section">
            <div class="section-label">03 · Recent work</div>
            <h2 class="section-title">Projects</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <a href="#" class="project-card">
                        <div>
                            <h3><?= htmlspecialchars($project['title']) ?></h3>
                            <p><?= htmlspecialchars($project['description']) ?></p>
                            <div class="tags">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span class="tag"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <span class="project-arrow">→</span>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="section-label">04 · Let's talk</div>
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
        </section>

        <footer>&copy; <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?>. All rights reserved.</footer>

    </main>

</div>

</body>
</html>