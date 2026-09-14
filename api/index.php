<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Web Developer Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: url('/public/images/km.jpg') center center / cover no-repeat fixed;
            color: #222;
        }

        /* NAVBAR */
        nav {
            background: #111;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav h2 {
            color: white;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            color: #ff4d8d;
        }

        /* HOME */
        #home {
            min-height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: transparent;
        }

        #home > div {
            background: rgba(255, 255, 255, 0.55);
            backdrop-filter: blur(6px);
            padding: 50px 60px;
            border-radius: 16px;
        }

        #home h1 {
            font-size: 50px;
            margin-bottom: 15px;
        }

        #home span {
            color: #ff4d8d;
        }

        #home p {
            font-size: 20px;
            color: #666;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            background: #ff4d8d;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
        }

        /* SECTIONS */
        section {
            padding: 80px 8%;
        }

        section h2 {
            text-align: center;
            font-size: 35px;
            margin-bottom: 40px;
        }

        /* ABOUT */
        .about {
            max-width: 800px;
            margin: auto;
            text-align: center;
            line-height: 1.8;
            font-size: 18px;
        }

        /* SKILLS */
        .skills {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .skill {
            background: rgba(255, 255, 255, 0.85);
            padding: 25px 40px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
            border: 1px solid #111;
        }

        /* PROJECTS */
        .projects {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .project {
            background: rgba(255, 255, 255, 0.85);
            width: 300px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
            border: 1px solid #111;
        }

        .project h3 {
            margin-bottom: 10px;
            color: #111;
        }

        .project p {
            color: #666;
            line-height: 1.5;
        }

        /* CONTACT */
        .contact {
            max-width: 600px;
            margin: auto;
        }

        .contact input,
        .contact textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #111;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.9);
        }

        .contact textarea {
            height: 150px;
            resize: none;
        }

        .contact button {
            background: #ff4d8d;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* FOOTER */
        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* MOBILE */
        @media (max-width: 700px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                gap: 12px;
            }

            #home h1 {
                font-size: 35px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>

        <h2>Douae</h2>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

    </nav>


    <!-- HOME -->
    <section id="home">

        <div>

            <h1>Hello, I'm <span>Douae</span></h1>

            <p>Web Developer</p>

            <a href="#projects" class="btn">
                View My Work
            </a>

        </div>

    </section>


    <!-- ABOUT -->
    <section id="about">

        <h2>About Me</h2>

        <div class="about">

            <p>
                Hello! I'm a passionate Web Developer interested in
                creating modern, responsive and user-friendly websites.
                I enjoy developing web applications and learning new
                technologies.
            </p>

        </div>

    </section>


    <!-- SKILLS -->
    <section id="skills">

        <h2>My Skills</h2>

        <div class="skills">

            <div class="skill">
                <h3>HTML</h3>
            </div>

            <div class="skill">
                <h3>CSS</h3>
            </div>

            <div class="skill">
                <h3>PHP</h3>
            </div>

            <div class="skill">
                <h3>JavaScript</h3>
            </div>

            <div class="skill">
                <h3>MySQL</h3>
            </div>

        </div>

    </section>


    <!-- PROJECTS -->
    <section id="projects">

        <h2>My Projects</h2>

        <div class="projects">

            <div class="project">

                <h3>Portfolio Website</h3>

                <p>
                    A personal portfolio website developed using
                    HTML, CSS and PHP.
                </p>

            </div>


            <div class="project">

                <h3>Web Application</h3>

                <p>
                    A web application developed using PHP,
                    MySQL, HTML and CSS.
                </p>

            </div>


            <div class="project">

                <h3>Responsive Website</h3>

                <p>
                    A responsive website designed to work on
                    computers, tablets and mobile devices.
                </p>

            </div>

        </div>

    </section>


    <!-- CONTACT -->
    <section id="contact">

        <h2>Contact Me</h2>

        <div class="contact">

            <form action="" method="POST">

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

                <textarea
                    name="message"
                    placeholder="Your Message"
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
            © <?php echo date("Y"); ?> PHMR. All rights reserved.
        </p>

    </footer>

</body>
</html>