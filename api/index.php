<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Douae Karmoun | Portfolio</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header>
        <nav class="navbar">
            <h2 class="logo">Douae<span>.</span></h2>

            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>


    <!-- HOME -->
    <section id="home" class="hero">

        <div class="hero-text">

            <p class="hello">Hello, I'm</p>

            <h1>Douae Karmoun</h1>

            <h2>Web Developer</h2>

            <p>
                I am a web development student passionate about
                creating modern and responsive websites.
            </p>

            <div class="buttons">
                <a href="#projects" class="btn">View My Projects</a>
                <a href="#contact" class="btn secondary">Contact Me</a>
            </div>

        </div>

        <div class="hero-image">
            <div class="circle">
                👩‍💻
            </div>
        </div>

    </section>


    <!-- ABOUT -->
    <section id="about" class="section">

        <h2 class="section-title">About Me</h2>

        <div class="about">

            <div class="about-card">
                <h3>Who Am I?</h3>

                <p>
                    My name is Douae Karmoun. I am a web development
                    student interested in creating websites and
                    applications.
                </p>

                <p>
                    I am currently learning HTML, CSS, JavaScript,
                    PHP and MySQL. My goal is to become a professional
                    full-stack developer.
                </p>
            </div>

            <div class="about-info">

                <div>
                    <strong>Name:</strong>
                    <span>Douae Karmoun</span>
                </div>

                <div>
                    <strong>Profession:</strong>
                    <span>Web Developer</span>
                </div>

                <div>
                    <strong>Location:</strong>
                    <span>Morocco</span>
                </div>

                <div>
                    <strong>Email:</strong>
                    <span>douae@example.com</span>
                </div>

            </div>

        </div>

    </section>


    <!-- SKILLS -->
    <section id="skills" class="section skills-section">

        <h2 class="section-title">My Skills</h2>

        <div class="skills">

            <div class="skill">
                <h3>HTML</h3>
                <div class="progress">
                    <span style="width: 90%;"></span>
                </div>
                <p>90%</p>
            </div>

            <div class="skill">
                <h3>CSS</h3>
                <div class="progress">
                    <span style="width: 85%;"></span>
                </div>
                <p>85%</p>
            </div>

            <div class="skill">
                <h3>JavaScript</h3>
                <div class="progress">
                    <span style="width: 75%;"></span>
                </div>
                <p>75%</p>
            </div>

            <div class="skill">
                <h3>PHP</h3>
                <div class="progress">
                    <span style="width: 70%;"></span>
                </div>
                <p>70%</p>
            </div>

            <div class="skill">
                <h3>MySQL</h3>
                <div class="progress">
                    <span style="width: 70%;"></span>
                </div>
                <p>70%</p>
            </div>

        </div>

    </section>


    <!-- PROJECTS -->
    <section id="projects" class="section">

        <h2 class="section-title">My Projects</h2>

        <div class="projects">

            <div class="project-card">

                <div class="project-icon">📅</div>

                <h3>Calendar Application</h3>

                <p>
                    A PHP and MySQL calendar application for
                    managing events and planning.
                </p>

                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>CSS</span>
                </div>

            </div>


            <div class="project-card">

                <div class="project-icon">🖼️</div>

                <h3>Responsive Gallery</h3>

                <p>
                    A modern responsive image gallery designed
                    for desktop and mobile devices.
                </p>

                <div class="tags">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>Bootstrap</span>
                </div>

            </div>


            <div class="project-card">

                <div class="project-icon">👨‍💼</div>

                <h3>Employee Management</h3>

                <p>
                    A CRUD application for adding, editing,
                    deleting and displaying employees.
                </p>

                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>JavaScript</span>
                </div>

            </div>

        </div>

    </section>


    <!-- CONTACT -->
    <section id="contact" class="section contact-section">

        <h2 class="section-title">Contact Me</h2>

        <div class="contact-container">

            <div class="contact-info">

                <h3>Let's Talk</h3>

                <p>
                    Do you have a project or a question?
                    Feel free to contact me.
                </p>

                <p>📧 douae@example.com</p>
                <p>📍 Morocco</p>

            </div>


            <form action="contact.php" method="POST">

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

                <input
                    type="text"
                    name="subject"
                    placeholder="Subject"
                    required
                >

                <textarea
                    name="message"
                    placeholder="Your Message"
                    rows="6"
                    required
                ></textarea>

                <button type="submit">
                    Send Message
                </button>

            </form>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <p>
            © 2026 Douae Karmoun. All Rights Reserved.
        </p>

    </footer>


</body>
</html>