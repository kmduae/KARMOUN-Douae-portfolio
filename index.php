<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alex Morgan | Full-Stack Developer</title>
  <style>
    /* CSS Variables & Theme Setup */
    :root {
      --bg: #0f172a;
      --surface: #1e293b;
      --text: #f8fafc;
      --text-muted: #94a3b8;
      --primary: #38bdf8;
      --accent: #818cf8;
      --border: #334155;
      --transition: all 0.3s ease;
    }

    [data-theme="light"] {
      --bg: #f8fafc;
      --surface: #ffffff;
      --text: #0f172a;
      --text-muted: #64748b;
      --primary: #0284c7;
      --accent: #4f46e5;
      --border: #e2e8f0;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; font-family: system-ui, -apple-system, sans-serif; }
    body { background-color: var(--bg); color: var(--text); line-height: 1.6; transition: var(--transition); }
    a { color: inherit; text-decoration: none; }
    
    /* Layout Framework */
    .container { max-width: 1100px; margin: 0 auto; padding: 0 1.5rem; }
    section { padding: 5rem 0; }
    
    /* Navigation */
    nav { position: fixed; top: 0; width: 100%; background: var(--bg); border-bottom: 1px solid var(--border); z-index: 100; opacity: 0.95; backdrop-filter: blur(8px); }
    .nav-container { display: flex; justify-content: space-between; align-items: center; height: 4rem; }
    .logo { font-weight: 700; font-size: 1.25rem; color: var(--primary); }
    .nav-links { display: flex; gap: 1.5rem; list-style: none; align-items: center; }
    .nav-links a:hover { color: var(--primary); }
    .theme-toggle { background: none; border: none; cursor: pointer; color: var(--text); font-size: 1.2rem; }

    /* Hero Section */
    .hero { min-height: 100vh; display: flex; align-items: center; padding-top: 4rem; }
    .hero-content h1 { font-size: 3.5rem; line-height: 1.1; margin-bottom: 1rem; }
    .hero-content h1 span { color: var(--primary); }
    .hero-subtitle { font-size: 1.25rem; color: var(--text-muted); margin-bottom: 2rem; max-width: 600px; }
    .btn-group { display: flex; gap: 1rem; }
    .btn { padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 600; cursor: pointer; transition: var(--transition); }
    .btn-primary { background-color: var(--primary); color: #000; }
    .btn-primary:hover { opacity: 0.9; }
    .btn-secondary { border: 1px solid var(--border); background: var(--surface); }
    .btn-secondary:hover { border-color: var(--primary); }

    /* Tech Stack Badges */
    .skills-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 2rem; }
    .skill-card { background: var(--surface); border: 1px solid var(--border); padding: 1.5rem; border-radius: 0.75rem; }
    .skill-card h3 { margin-bottom: 1rem; color: var(--accent); }
    .tag-container { display: flex; flex-wrap: wrap; gap: 0.5rem; }
    .tag { background: var(--bg); border: 1px solid var(--border); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.875rem; }

    /* Projects Section */
    .projects-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem; }
    .project-card { background: var(--surface); border: 1px solid var(--border); border-radius: 0.75rem; overflow: hidden; display: flex; flex-direction: column; }
    .project-body { padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column; }
    .project-body h3 { margin-bottom: 0.5rem; }
    .project-body p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1rem; flex-grow: 1; }
    .project-links { display: flex; gap: 1rem; font-weight: 600; font-size: 0.9rem; color: var(--primary); }

    /* Contact Form */
    .form-group { margin-bottom: 1.25rem; }
    .form-group label { display: block; margin-bottom: 0.5rem; font-size: 0.9rem; }
    .form-group input, .form-group textarea { width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid var(--border); background: var(--surface); color: var(--text); }
    .form-group input:focus, .form-group textarea:focus { outline: 1px solid var(--primary); }

    /* Responsive Design */
    @media (max-width: 768px) {
      .hero-content h1 { font-size: 2.5rem; }
      .nav-links { display: none; }
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <div class="container nav-container">
      <a href="#" class="logo">&lt;AM /&gt;</a>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">🌙</button></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero" id="about">
    <div class="container hero-content">
      <h1>Full-Stack Developer.<br><span>Building scalable web systems.</span></h1>
      <p class="hero-subtitle">I design and implement end-to-end web applications, focusing on robust backend architectures and sleek modern user interfaces.</p>
      <div class="btn-group">
        <a href="#projects" class="btn btn-primary">View Projects</a>
        <a href="#contact" class="btn btn-secondary">Get In Touch</a>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills">
    <div class="container">
      <h2>Technical Capability</h2>
      <div class="skills-grid">
        <div class="skill-card">
          <h3>Frontend</h3>
          <div class="tag-container">
            <span class="tag">TypeScript</span>
            <span class="tag">React</span>
            <span class="tag">Next.js</span>
            <span class="tag">Tailwind CSS</span>
            <span class="tag">Redux</span>
          </div>
        </div>
        <div class="skill-card">
          <h3>Backend</h3>
          <div class="tag-container">
            <span class="tag">Node.js</span>
            <span class="tag">Express</span>
            <span class="tag">Python</span>
            <span class="tag">PostgreSQL</span>
            <span class="tag">Redis</span>
            <span class="tag">GraphQL</span>
          </div>
        </div>
        <div class="skill-card">
          <h3>DevOps & Tools</h3>
          <div class="tag-container">
            <span class="tag">Docker</span>
            <span class="tag">AWS</span>
            <span class="tag">CI/CD Pipeline</span>
            <span class="tag">Git</span>
            <span class="tag">Jest</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects">
    <div class="container">
      <h2>Featured Works</h2>
      <div class="projects-grid">
        
        <!-- Project Card 1 -->
        <div class="project-card">
          <div class="project-body">
            <h3>Distributed Task Scheduler</h3>
            <p>A background worker processing system that manages distributed jobs with automated retries and dead-letter queues.</p>
            <div class="tag-container" style="margin-bottom: 1rem;">
              <span class="tag">Node.js</span>
              <span class="tag">Redis</span>
              <span class="tag">Docker</span>
            </div>
            <div class="project-links">
              <a href="#" target="_blank">GitHub &rarr;</a>
              <a href="#" target="_blank">Live Demo &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Project Card 2 -->
        <div class="project-card">
          <div class="project-body">
            <h3>Collaborative Whiteboard Platform</h3>
            <p>Real-time interactive canvas supporting concurrent user editing, spatial caching, and WebSockets sync.</p>
            <div class="tag-container" style="margin-bottom: 1rem;">
              <span class="tag">React</span>
              <span class="tag">WebSockets</span>
              <span class="tag">Canvas API</span>
            </div>
            <div class="project-links">
              <a href="#" target="_blank">GitHub &rarr;</a>
              <a href="#" target="_blank">Live Demo &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Project Card 3 -->
        <div class="project-card">
          <div class="project-body">
            <h3>E-Commerce Microservices Engine</h3>
            <p>Microservice backend handling identity, payments, inventory management, and automated receipt generation.</p>
            <div class="tag-container" style="margin-bottom: 1rem;">
              <span class="tag">Python</span>
              <span class="tag">PostgreSQL</span>
              <span class="tag">Stripe API</span>
            </div>
            <div class="project-links">
              <a href="#" target="_blank">GitHub &rarr;</a>
              <a href="#" target="_blank">Live Demo &rarr;</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container" style="max-width: 600px;">
      <h2>Contact Me</h2>
      <form id="contactForm" onsubmit="handleFormSubmit(event)">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" required placeholder="John Doe">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" required placeholder="john@example.com">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" rows="5" required placeholder="Let's talk about a project..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
      </form>
    </div>
  </section>

  <script>
    // Dark/Light Theme Switching Logic
    const themeToggleBtn = document.getElementById('themeToggle');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    let currentTheme = localStorage.getItem('theme') || (prefersDark ? 'dark' : 'light');

    function applyTheme(theme) {
      document.documentElement.setAttribute('data-theme', theme);
      themeToggleBtn.textContent = theme === 'dark' ? '☀️' : '🌙';
    }

    applyTheme(currentTheme);

    themeToggleBtn.addEventListener('click', () => {
      currentTheme = currentTheme === 'dark' ? 'light' : 'dark';
      localStorage.setItem('theme', currentTheme);
      applyTheme(currentTheme);
    });

    // Form Handler Demo
    function handleFormSubmit(e) {
      e.preventDefault();
      alert('Thank you for reaching out! Form submitted successfully.');
      document.getElementById('contactForm').reset();
    }
  </script>
</body>
</html>