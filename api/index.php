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
    --muted: