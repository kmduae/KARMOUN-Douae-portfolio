<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Douae | My Portfolio</title>

    <style>

        :root {
            --pink: #d88b9b;
            --dark-pink: #b9677b;
            --light-pink: #f8e5e8;
            --cream: #fffaf7;
            --beige: #f3e5dc;
            --text: #4b3a3d;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: var(--cream);
            color: var(--text);
        }

        /* ================= NAVBAR ================= */

        header {
            width: 100%;
            background: rgba(255, 250, 247, 0.95);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid #f0dfe0;
        }

        .navbar {
            max-width: 1150px;
            margin: auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 30px;
            color: var(--text);
            text-decoration: none;
        }

        .logo span {
            color: var(--pink);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: var(--pink);
        }

        /* ================= HERO ================= */

        .hero {
            max-width: 1150px;
            min-height: 90vh;
            margin: auto;
            padding: 80px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 60px;
        }

        .hero-content {
            max-width: 600px;
        }

        .small-title {
            letter-spacing: 4px;
            color: var(--pink);
            font-size: 13px;
            font-weight: bold;
        }

        .hero h1 {
            font-family: "Playfair Display", serif;
            font-size: 75px;
            line-height: 1.05;
            margin: 20px 0;
        }

        .hero h1 span {
            color: var(--pink);
            font-style: italic;
        }

        .description {
            color: #806f72;
            max-width: 500px;
            font-size: 17px;
            line-height: 1.8;
        }

        .hero-buttons {
            margin-top: 35px;
            display: flex;
            gap: 15px;
        }

        .main-btn,
        .outline-btn {
            padding: 14px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
        }

        .main-btn {
            background: var(--pink);
            color: white;
        }

        .outline-btn {
            border: 1px solid var(--pink);
            color: var(--dark-pink);
        }

        .main-btn:hover,
        .outline-btn:hover {
            transform: translateY(-3px);
        }

        /* ================= PHOTO ================= */

        .hero-photo {
            width: 430px;
            height: 500px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .photo-frame {
            width: 330px;
            height: 420px;
            background: var(--beige);
            padding: 15px;
            border-radius: 170px 170px 20px 20px;
            transform: rotate(3deg);
            position: relative;
            z-index: 2;
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 155px 155px 15px 15px;
        }

        .pink-circle {
            width: 360px;
            height: 360px;
            background: var(--light-pink);
            border-radius: 50%;
            position: absolute;
            right: 0;
            bottom: 20px;
        }

        .flower {
            position: absolute;
            color: var(--pink);
            font-size: 35px;
            z-index: 5;
        }

        .flower-1 {
            top: 30px;
            left: 20px;
        }

        .flower-2 {
            right: 10px;
            top: 100px;
        }

        /* ================= SECTION ================= */

        .section {
            max-width: 1150px;
            margin: auto;
            padding: 100px 20px;
        }

        .section-small {
            text-align: center;
            color: var(--pink);
            letter-spacing: 3px;
            font-size: 12px;
            font-weight: bold;
        }

        .section h2 {
            font-family: "Playfair Display", serif;
            font-size: 50px;
            text-align: center;
            margin: 10px 0 60px;
        }

        .section h2 span {
            color: var(--pink);
        }

        /* ================= ABOUT ================= */

        .about-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .about-card,
        .info-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            border: 1px solid #f0dfe0;
        }

        .about-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .about-card h3 {
            font-family: "Playfair Display", serif;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .about-card p {
            color: #806f72;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .info {
            padding: 18px 0;
            border-bottom: 1px solid #f0e5e2;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .info span {
            color: var(--pink);
        }

        .info strong {
            font-weight: 500;
        }

        /* ================= SKILLS ================= */

        .skills-section {
            background: var(--light-pink);
            max-width: none;
            padding-left: calc((100% - 1110px) / 2);
            padding-right: calc((100% - 1110px) / 2);
        }

        .skills-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .skill-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
        }

        .skill-top {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .skill-top span {
            color: var(--pink);
        }

        .progress {
            height: 8px;
            background: #f0e4e5;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress div {
            height: 100%;
            background: var(--pink);
            border-radius: 20px;
        }

        /* ================= MODULES ================= */

        .modules-section {
            background: var(--cream);
        }

        .modules-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .module-card {
            background: white;
            padding: 30px 25px;
            border: 1px solid #f0dfe0;
            border-radius: 20px;
            text-align: center;
            transition: 0.3s;
        }

        .module-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(180, 110, 120, 0.12);
        }

        .module-number {
            display: inline-block;
            background: var(--light-pink);
            color: var(--dark-pink);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .module-card h3 {
            font-family: "Playfair Display", serif;
            font-size: 24px;
            margin-bottom: 12px;
        }

        .module-card p {
            color: #806f72;
            font-size: 14px;
            line-height: 1.7;
        }

        /* ================= PROJECTS ================= */

        .projects-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .project-card {
            background: white;
            border: 1px solid #f0dfe0;
            border-radius: 20px;
            overflow: hidden;
            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(180, 110, 120, 0.12);
        }

        .project-image {
            height: 190px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 70px;
        }

        .calendar {
            background: #f8e5e8;
        }

        .gallery {
            background: #f3e5dc;
        }

        .crud {
            background: #eee2e7;
        }

        .project-content {
            padding: 25px;
        }

        .project-number {
            color: var(--pink);
            font-size: 12px;
        }

        .project-content h3 {
            font-family: "Playfair Display", serif;
            font-size: 25px;
            margin: 8px 0;
        }

        .project-content p {
            color: #806f72;
            line-height: 1.7;
            font-size: 14px;
        }

        .technologies {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin: 20px 0;
        }

        .technologies span {
            background: var(--light-pink);
            color: var(--dark-pink);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 11px;
        }

        .project-link {
            color: var(--dark-pink);
            text-decoration: none;
            font-weight: bold;
            font-size: 13px;
        }

        /* ================= CONTACT ================= */

        .contact-section {
            background: var(--beige);
            max-width: none;
            padding-left: calc((100% - 1110px) / 2);
            padding-right: calc((100% - 1110px) / 2);
        }

        .contact-container {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 60px;
        }

        .contact-text h3 {
            font-family: "Playfair Display", serif;
            font-size: 45px;
            line-height: 1.2;
        }

        .contact-text > p {
            margin: 20px 0;
            color: #806f72;
            line-height: 1.8;
        }

        .contact-item {
            display: flex;
            gap: 15px;
            align-items: center;
            margin-top: 20px;
        }

        .contact-item > span {
            width: 45px;
            height: 45px;
            background: var(--light-pink);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--pink);
        }

        .contact-item small {
            color: var(--pink);
        }

        .contact-item p {
            margin: 0;
        }

        /* ================= FORM ================= */

        form {
            background: white;
            padding: 35px;
            border-radius: 20px;
        }

        .input-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        input,
        textarea {
            width: 100%;
            border: none;
            border-bottom: 1px solid #e6d5d6;
            padding: 15px 5px;
            margin-bottom: 20px;
            font-family: inherit;
            background: transparent;
            color: var(--text);
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: var(--pink);
        }

        button {
            border: none;
            background: var(--pink);
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            cursor: pointer;
            font-family: inherit;
            font-weight: bold;
        }

        button:hover {
            background: var(--dark-pink);
        }

        /* ================= FOOTER ================= */

        footer {
            background: #4b3a3d;
            color: white;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            max-width: none;
            padding-left: 10%;
            padding-right: 10%;
        }

        footer p {
            font-size: 13px;
        }

        /* ================= MOBILE ================= */

        @media (max-width: 800px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 12px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                flex-direction: column-reverse;
                text-align: center;
                padding-top: 50px;
            }

            .hero h1 {
                font-size: 52px;
            }

            .hero-buttons {
                justify-content: center;
                flex-wrap: wrap;
            }

            .hero-photo {
                width: 100%;
                height: 420px;
            }

            .photo-frame {
                width: 270px;
                height: 350px;
            }

            .pink-circle {
                width: 300px;
                height: 300px;
            }

            .about-container,
            .skills-container,
            .projects-container,
            .contact-container {
                grid-template-columns: 1fr;
            }

            .modules-container {
                grid-template-columns: 1fr;
            }

            .skills-section,
            .contact-section {
                padding-left: 20px;
                padding-right: 20px;
            }

            .section h2 {
                font-size: 40px;
            }

            .input-row {
                grid-template-columns: 1fr;
            }

            footer {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }

    </style>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <header>

        <nav class="navbar">

            <a href="#home" class="logo">
                Douae<span>♡</span>
            </a>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#modules">Modules</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

        </nav>

    </header>


    <!-- ================= HOME ================= -->

    <section id="home" class="hero">

        <div class="hero-content">

            <p class="small-title">HELLO, I'M</p>

            <h1>
                Douae
                <br>
                <span>Web Developer</span>
            </h1>

            <p class="description">
                I am a web development student who loves creating
                beautiful, modern and responsive websites.
            </p>

            <div class="hero-buttons">

                <a href="#projects" class="main-btn">
                    My Projects ♡
                </a>

                <a href="#contact" class="outline-btn">
                    Contact Me
                </a>

            </div>

        </div>


        <div class="hero-photo">

            <div class="flower flower-1">✿</div>
            <div class="flower flower-2">♡</div>

            <div class="photo-frame">
                <img src="images/profile.jpg" alt="Douae">
            </div>

            <div class="pink-circle"></div>

        </div>

    </section>


    <!-- ================= ABOUT ================= -->

    <section id="about" class="section">

        <p class="section-small">GET TO KNOW ME</p>

        <h2>About Me <span>♡</span></h2>

        <div class="about-container">

            <div class="about-card">

                <div class="about-icon">
                    ✨
                </div>

                <h3>A little about me</h3>

                <p>
                    My name is Douae Karmoun. I am a web development
                    student passionate about technology and design.
                </p>

                <p>
                    I enjoy creating websites that are simple,
                    elegant and easy to use.
                </p>

            </div>


            <div class="info-card">

                <div class="info">
                    <span>♡ Name</span>
                    <strong>Douae Karmoun</strong>
                </div>

                <div class="info">
                    <span>♡ Field</span>
                    <strong>Web Development</strong>
                </div>

                <div class="info">
                    <span>♡ Location</span>
                    <strong>Morocco</strong>
                </div>

                <div class="info">
                    <span>♡ Goal</span>
                    <strong>Full-Stack Developer</strong>
                </div>

            </div>

        </div>

    </section>


    <!-- ================= SKILLS ================= -->

    <section id="skills" class="section skills-section">

        <p class="section-small">WHAT I KNOW</p>

        <h2>My Skills <span>✿</span></h2>

        <div class="skills-container">

            <div class="skill-card">

                <div class="skill-top">
                    <h3>HTML</h3>
                    <span>90%</span>
                </div>

                <div class="progress">
                    <div style="width:90%"></div>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-top">
                    <h3>CSS</h3>
                    <span>85%</span>
                </div>

                <div class="progress">
                    <div style="width:85%"></div>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-top">
                    <h3>JavaScript</h3>
                    <span>75%</span>
                </div>

                <div class="progress">
                    <div style="width:75%"></div>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-top">
                    <h3>PHP</h3>
                    <span>70%</span>
                </div>

                <div class="progress">
                    <div style="width:70%"></div>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-top">
                    <h3>MySQL</h3>
                    <span>70%</span>
                </div>

                <div class="progress">
                    <div style="width:70%"></div>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-top">
                    <h3>Bootstrap</h3>
                    <span>80%</span>
                </div>

                <div class="progress">
                    <div style="width:80%"></div>
                </div>

            </div>

        </div>

    </section>


    <!-- ================= MODULES ================= -->

    <section id="modules" class="section modules-section">

        <p class="section-small">MY TRAINING</p>

        <h2>My Modules <span>♡</span></h2>

        <div class="modules-container">

            <div class="module-card">
                <span class="module-number">M201</span>
                <h3>M201</h3>
                <p>
                    Module M201 of my web development training.
                </p>
            </div>

            <div class="module-card">
                <span class="module-number">M202</span>
                <h3>M202</h3>
                <p>
                    Module M202 of my web development training.
                </p>
            </div>

            <div class="module-card">
                <span class="module-number">M203</span>
                <h3>M203</h3>
                <p>
                    Module M203 of my web development training.
                </p>
            </div>

            <div class="module-card">
                <span class="module-number">M204</span>
                <h3>M204</h3>
                <p>
                    Module M204 of my web development training.
                </p>
            </div>

            <div class="module-card">
                <span class="module-number">M205</span>
                <h3>M205</h3>
                <p>
                    Module M205 of my web development training.
                </p>
            </div>

            <div class="module-card">
                <span class="module-number">M206</span>
                <h3>M206</h3>
                <p>
                    Module M206 of my web development training.
                </p>
            </div>

            <div class="module-card">
                <span class="module-number">M207</span>
                <h3>M207</h3>
                <p>
                    Module M207 of my web development training.
                </p>
            </div>

        </div>

    </section>


    <!-- ================= PROJECTS ================= -->

    <section id="projects" class="section">

        <p class="section-small">MY RECENT WORK</p>

        <h2>My Projects <span>♡</span></h2>

        <div class="projects-container">


            <div class="project-card">

                <div class="project-image calendar">
                    📅
                </div>

                <div class="project-content">

                    <span class="project-number">01</span>

                    <h3>Calendar App</h3>

                    <p>
                        A planning and calendar application
                        developed using PHP and MySQL.
                    </p>

                    <div class="technologies">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>CSS</span>
                    </div>

                    <a href="#" class="project-link">
                        View Project →
                    </a>

                </div>

            </div>


            <div class="project-card">

                <div class="project-image gallery">
                    🖼️
                </div>

                <div class="project-content">

                    <span class="project-number">02</span>

                    <h3>Image Gallery</h3>

                    <p>
                        A responsive and modern image gallery
                        for desktop and mobile.
                    </p>

                    <div class="technologies">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                    </div>

                    <a href="#" class="project-link">
                        View Project →
                    </a>

                </div>

            </div>


            <div class="project-card">

                <div class="project-image crud">
                    💻
                </div>

                <div class="project-content">

                    <span class="project-number">03</span>

                    <h3>Employee CRUD</h3>

                    <p>
                        An employee management system with
                        create, read, update and delete functions.
                    </p>

                    <div class="technologies">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>

                    <a href="#" class="project-link">
                        View Project →
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= CONTACT ================= -->

    <section id="contact" class="section contact-section">

        <p class="section-small">LET'S TALK</p>

        <h2>Contact Me <span>♡</span></h2>

        <div class="contact-container">

            <div class="contact-text">

                <h3>
                    Have a project<br>
                    in mind?
                </h3>

                <p>
                    I would love to hear from you.
                    Send me a message and let's create
                    something beautiful together.
                </p>

                <div class="contact-item">

                    <span>♡</span>

                    <div>
                        <small>Email</small>
                        <p>douae@example.com</p>
                    </div>

                </div>

                <div class="contact-item">

                    <span>♡</span>

                    <div>
                        <small>Location</small>
                        <p>Morocco</p>
                    </div>

                </div>

            </div>


            <form action="contact.php" method="POST">

                <div class="input-row">

                    <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        required
                    >

                    <input
                        type="email"
                        name="email"
                        placeholder="Your Email"
                        required
                    >

                </div>

                <input
                    type="text"
                    name="subject"
                    placeholder="Subject"
                    required
                >

                <textarea
                    name="message"
                    rows="7"
                    placeholder="Write your message..."
                    required
                ></textarea>

                <button type="submit">
                    Send Message ♡
                </button>

            </form>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            Made with ♡ by Douae
        </p>

        <p>
            © 2026 All Rights Reserved
        </p>

    </footer>

</body>
</html>