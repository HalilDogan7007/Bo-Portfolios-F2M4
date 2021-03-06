<?php
require 'function2.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `opdrachtenen`');


?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="cUA9zwSuXZyJ1f1qvB2D4XDRX-_eaIJXSq41Fhorbeo" />
    <meta name="discription" content="Ik ben Halil Ben Web Developer en ben nog bezig met studeren voor meer informatie bezoek mijn portfolio vind u meer informatie">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=google">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Halil Dogan">
    <meta name="discription" content="Web-development">
    <title>Welkom bij uw web-design website!</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
    <script src=".vscode/settings.json" defer></script>
    <script src="js/speak.js" defer></script>
    <script src="js/analystic.js" defer></script>
    <script src="js/filter.js" defer></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KGXPMMB');
    </script>
    <!-- End Google Tag Manager -->


</head>

<body>
    <section id="header">
        <div class="header container">
            <nav class="nav-bar">

                <div class="brand">
                    <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#Text" data-after="Home">Home</a></li>
                        <li><a href="#services" data-after="Service">About Me</a></li>
                        <li><a href="#projects" data-after="Projects">Projects</a></li>
                        <li><a href="#services2" data-after="About">Web Services</a></li>
                        <li><a href="#about" data-after="Contact">Github</a></li>
                        <li><a href="#formulier2" data-after="Contact">Forms</a></li>
                        <li><a href="#contact" data-after="Contact">Contact</a></li>
                        <li><a href="index.php" data-after="Contact">Netherlands</a></li>
                    </ul>
                </div>
        </div>
        </div>
    </section>

    <main>
        <section id="Text">

            <div class="Text container">
                <div>
                    <h2>Hello, <span></span></h2>
                    <h2>Welcome To <span></span></h2>
                    <h1>Halil Web-Developer <span></span></h1>
                    <a href="#projects" type="button" class="cta">Portfolio</a>
                    <button class="tekst1" onclick="startRecognition()">Speach To Text</button>
                    <div id="result" class="hide"></div>
                    <div><img id="image1" class="hide"></div>
                </div>

            </div>

        </section>


        <section id="services">
            <div class="services container">
                <div class="service-top">
                    <h2 class="section-title"><span>Over</span> mij</h2>
                    <p>I am Halil Dogan. I am 18 years old and I am now studying Software Developer.
                    </p>
                </div>
                <div class="service-bottom2">
                    <div class="kopjes">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/education.png" alt="Icoontje met een hoedje voor opleiding" />
                        </div>
                        <h2>Education!</h2>
                        <p>I'm currently studying at the Media-College Amsterdam, I still have 3 years until I'm
                            graduated.
                            The subject I study is Software Development.</p>
                    </div>
                    <div class="kopjes">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/purposeful-man.png" alt="Icoontje van een leerling die zijn doel heeft behaald." /></div>
                        <h2>Goal!</h2>
                        <p>My goal is to study as well as possible in order to build up enough knowledge. I hope that I will perform well at the company where I will be working.
                        </p>
                    </div>
                    <div class="kopjes">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/discount.png" alt="Icoonje met een procent teken." />
                        </div>
                        <h2>What I offer!</h2>
                        <p>I make website / Logo / Dashboard / charts / everything related to web design and so on.
                            I
                            also think along with the options that customers come up with.</p>
                    </div>
                    <div class="kopjes">
                        <div class="icon"><img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/100/000000/external-studying-education-smashingstocks-circular-smashing-stocks-2.png" alt="Icoontje met boeken en een wekker erop" /></div>
                        <h2>
                            Leisure!</h2>
                        <p>In my spare time I am busy building more knowledge and expanding my mind. I
                            ben
                            working on building knowledge before letting everyone know.</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="projects">

            <div class="projects container">
                <div class="projects-header">
                    <h2 class="section-title">Recent <span>Projects</span></h2>
                </div>
                <div class="all-projects">
                    <?php foreach ($result as $row): ?>
                        <div class="project-item">
                            <div class="project-info">
                                <h2><?php echo $row['title']; ?></h2>
                                <p><?php echo $row['message']; ?>
                                    <a class="button" href="details2.php?id=<?php echo $row['id']; ?>">More Info</a>
                                </p>
                            </div>
                            <div class="project-img">
                                <a href="<?php echo $row['linkk']; ?>" target="_blank"> <img src="img/<?php echo $row['picture']; ?>" alt="Img van mijn project van periode 2 over museum scheepvaart."></a>
                            </div>



                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </section>

        <section id="services2">
            <div class="services2 container">
                <div class="service-top">
                    <h2 class="section-title"><span>Web</span> Services</h2>
                    <p></p>
                </div>
                <div class="filters">
                    <div>
                        <input id="checkbox-website" type="checkbox" class="filter" />
                        <label for="checkbox-website" class="label">Website</label>
                    </div>
                    <div>
                        <input id="checkbox-app" type="checkbox" class="filter" />
                        <label for="checkbox-app" class="label">App</label>
                    </div>
                    <div>
                        <input id="checkbox-design" type="checkbox" class="filter" />
                        <label for="checkbox-design" class="label">Design</label>
                    </div>
                </div>



                <div class="service-bottom2">
                    <div class="box kopjes" data-category="website">>
                        <div class="icon"><img src="https://img.icons8.com/stickers/100/000000/domain.png" alt="Icoontje met www op van een website" />
                        </div>
                        <h2>Website</h2>
                        <p>I make special websites by choice. I think along with the customer and create a beautiful website,
                            at the moment i am still studying. For more information contact me for your
                            Choice.</p>
                    </div>
                    <div class="box kopjes" data-category="app">
                        <div class="icon"><img src="https://img.icons8.com/dusk/100/000000/apple-app-store--v1.png" alt="Icoontje met de app store logo" /></div>
                        <h2>App</h2>
                        <p>I also make an app for customers who, for example, want to be able to show the number of hours worked
                            per
                            staff. Do you also want a handy app contact me? think along with you about the design and
                            options.
                        </p>
                    </div>
                    <div class="box kopjes" data-category="design">
                        <div class="icon"><img src="https://img.icons8.com/external-flaticons-flat-circular-flat-icons/100/000000/external-design-engineering-flaticons-flat-circular-flat-icons.png" alt="Icoontje met design verbindingen" /></div>
                        <h2>Design</h2>
                        <p>I also design logos according to your choice and ideas and am very good at thinking to a
                            new ones
                            universe plans. Don't forget to contact me for your design for your company or
                            such.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="about container">
                <div class="col-left">
                    <div class="about-img">
                        <img src="img/qr-git.png" alt="Img wr code van me github">
                    </div>
                </div>
                <div class="col-right">
                    <h2 class="section-title"><span>Github</span></h2>
                    <h2>Github Repostories</h2>
                    <p>This is my Github profile. Here you can find my projects and all my work.
                    </p>
                    <a href="https://github.com/HalilDogan7007" class="cta">Github</a>
                </div>
            </div>
        </section>

        <div class="projects-header">
            <h2 class="section-title">Contact <span>Forms</span></h2>
        </div>

        <div class="formulier">
            <div id="formulier2">
                <h3 class="fcf-h3">Contact Us</h3>

                <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">

                    <div class="Formulier3">
                        <label for="Name" class="fcf-label">Your Name</label>
                        <div class="fcf-input-group">
                            <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                        </div>
                    </div>

                    <div class="Formulier3">
                        <label for="Email" class="fcf-label">Your mail adres</label>
                        <div class="fcf-input-group">
                            <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                        </div>
                    </div>

                    <div class="Formulier3">
                        <label for="Message" class="fcf-label">Your Message</label>
                        <div class="fcf-input-group">
                            <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                        </div>
                    </div>

                    <div class="Formulier3">
                        <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Versturen</button>
                    </div>

                    <div class="fcf-credit" id="fcf-credit">
                        <a href="https://www.designhd.nl" target="_blank">Designhd.nl</a>
                    </div>
                </form>
            </div>

        </div>

        <section id="contact">
            <div class="contact container">
                <div>
                    <h2 class="section-title">Contact <span>info</span></h2>
                </div>
                <div class="contact-items">
                    <div class="contact-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" alt="Icoontje met een telfoon erop" />
                        </div>
                        <div class="contact-info">
                            <h2>Phone-Number</h2>
                            <h2>+31 (0)6 15527384</h2>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" alt="Icoontje met een mail formulier" />
                        </div>
                        <div class="contact-info">
                            <h2>Email</h2>
                            <h2>Info@designhd.nl</h2>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" alt="Icoontje met een kaart erop" />
                        </div>
                        <div class="contact-info">
                            <h2>Adres</h2>
                            <h2>Contactweg, Amsterdam, Nederland</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="footer">
            <div class="footer container">
                <div class="brand">
                    <h2><span>H</span>alil <span>D</span>ogan</h2>
                </div>
                <h2>For your complete web solution</h2>
                <div class="social-icon">
                    <div class="social-item">
                        <a href="https://github.com/HalilDogan7007">
                            <img src="https://img.icons8.com/bubbles/100/000000/github.png" alt="Icoontje van github" /></a>
                    </div>
                    <div class="social-item">
                        <a href="https://www.linkedin.com/in/halil-dogan-9016b91a4/">
                            <img src="https://img.icons8.com/bubbles/100/000000/linkedin.png" alt="Icoontje van linkedin" /></a>
                    </div>
                    <div class="social-item">
                        <a href="https://www.ma-web.nl/">
                            <img src="https://img.icons8.com/bubbles/100/undefined/podcast.png" alt="Icoontje van twitter" /></a>
                    </div>
                </div>
                <p>Copyright ?? 2022 Halil. All rights reserved</p>
            </div>
        </section>
    </main>

    <a class="top" href="#Text"> Top </a>




</body>

</html>