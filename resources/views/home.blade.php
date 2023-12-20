<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portofolio</title>
    <!-- Fonts -->

    <!-- Styles -->
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/alerts.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Header Section -->
    <section class="header" id="header">

        <!-- Nav Bar -->
        <div class="navbar">
            <a href="#"><img src="./images/logo.png" alt="Anjana Dil Graphic Design Logo - anjanadil.com"></a>

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <div class="menubtn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown-menu open">
            <ul>
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a class="action-btn" href="./pages/form.html">Get Started</a></li>
            </ul>
        </div>

        <!-- Header Section -->
        <ul class="header-text">
            <h3>Hello, I am</h3>
            <h1>Anjana Dilhara</h1>
            <p>I will Design your dream design with more than 6 years of experience in Graphic Design.</p>
            <a class="action-btn" href="./pages/form.html">Get Started</a>
        </ul>
    </section>

    <!-- About Section -->
    <section class="about" id="about">

        <!--About Section Heading -->
        <div class="section-heading">
            <h2>About Me</h2>
            <p class="subtilte">"I will Design Your Dream Design"</p>
        </div>

        <!-- About Section Description -->
        <div class="about-description">
            <p>As a creative graphic designer with over six years of experience, I specialize in designing event posts,
                logos, social media, banner images, flyers, and various other graphic designs. My expertise has been
                honed
                through self-study and a strong passion for the field. I have had the pleasure of working with numerous
                companies and clients as a freelancer, and I am currently collaborating with several event management
                companies. My work is characterized by its unique and engaging visuals, which have helped boost brand
                awareness and drive social media engagement. I am committed to delivering exceptional designs that
                resonate
                with the target audience and enhance the overall visual appeal of any project.</p>
            <div class="social-media">
                <a href="http://facbook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="http://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://lk.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://behance.net/"><i class="fa-brands fa-behance"></i></a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">

        <!-- Portpolio Section Heading-->
        <div class="section-heading">
            <h2>Portfolio</h2>
            <p class="subtilte">Designs, I created.</p>
        </div>

        <!-- Portfolio projects-->
        <div class="portfolio-projects">

            <div class="projects-row">
                <div class="ps-project-1">
                    <h4>Unique and Fresh</h4>
                    <small>Logo Design</small>
                </div>

                <div class="ps-project-2">
                    <h4>Konfor</h4>
                    <small>Social Media Post Designg</small>
                </div>

                <div class="ps-project-3">
                    <h4>Sapna Devi</h4>
                    <small>Social Media Post Design</small>
                </div>
            </div>

            <div class="projects-row">
                <div class="ps-project-4">
                    <h4>Salaba Vilapaya</h4>
                    <small>Social Media Post Design</small>
                </div>

                <div class="ps-project-5">
                    <h4>Cake Oasis</h4>
                    <small>Logo Design</small>
                </div>

                <div class="ps-project-6">
                    <h4>Mage Nisa</h4>
                    <small>YouTube Thumbnail Design</small>
                </div>
            </div>
        </div>

        <a class="action-btn" href="./pages/portfolio.html">Discover</a>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">

        <div class="section-heading">
            <h2>Services</h2>
            <p class="subtilte">Our services</p>
        </div>

        <div class="services-row">
            <div class="service">
                <img src="./images/services1.jpg" alt="">
                <div class="service-description">
                    <p>Logo Design</p>
                    <a class="action-btn" href="{{ route('order') }}">Start Design</a>
                </div>
            </div>

            <div class="service">
                <img src="./images/services2.jpg" alt="">
                <div class="service-description">
                    <p>Social Media Post Design</p>
                    <a class="action-btn" href="{{ route('order') }}">Start Design</a>
                </div>
            </div>
        </div>

        <div class="services-row">
            <div class="service">
                <img src="./images/services3.jpg" alt="">
                <div class="service-description">
                    <p>Flyer Design</p>
                    <a class="action-btn" href="{{ route('order') }}">Start Design</a>
                </div>
            </div>

            <div class="service">
                <img src="./images/services4.jpg" alt="">
                <div class="service-description">
                    <p>YouTube Thumbnail Design</p>
                    <a class="action-btn" href="{{ route('order') }}">Start Design</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="reviews" id="reviews">

        <div class="section-heading">
            <h2>Reviews</h2>
            <p class="subtilte">What is saying our customers.</p>
        </div>

        <!-- Reviews Cards -->
        <div class="reviews-row">
            <div class="reviews-card">
                <div class="reviews-user">
                    <img src="./images/about.png" alt="">
                    <p>Username</p>
                </div>
                <div class="comment">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo possimus
                        facilis iste asperiores nulla tenetur.</p>
                </div>
            </div>

            <div class="reviews-card">
                <div class="reviews-user">
                    <img src="./images/about.png" alt="">
                    <p>Username</p>
                </div>
                <div class="comment">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo possimus
                        facilis iste asperiores nulla tenetur.</p>
                </div>
            </div>

            <div class="reviews-card">
                <div class="reviews-user">
                    <img src="./images/about.png" alt="">
                    <p>Username</p>
                </div>
                <div class="comment">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo possimus
                        facilis iste asperiores nulla tenetur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">

        <div class="section-heading">
            <h2>Contact</h2>
            <p class="subtilte">Contact US</p>
        </div>

        <form class="contact-form" action="{{ route('contact.create') }}" method="POST">
            @csrf
            <!--<label for="name">Name:</label>-->
            <input type="text" id="name" name="name" required placeholder="Name"><br><br>

            <!--<label for="email">Email:</label>-->
            <input type="email" id="email" name="email" required placeholder="Email"><br><br>

            <!--<label for="phone">Phone Number:</label>-->
            <input type="tel" id="phone" name="phone" placeholder="Phone Number"><br><br>

            <!--<label for="subject">Subject:</label>-->
            <input type="text" id="subject" name="subject" placeholder="Subjet"><br><br>

            <!--<label for="message">Message:</label><br>-->
            <textarea id="message" name="message" rows="5" cols="40" required placeholder="Message"></textarea><br><br>

            <input class="submit-btn" type="submit" value="Submit">
        </form>
    </section>

    <!-- Footer -->
    <section class="footer" id="footer">
        <div class="footer-top">
            <!-- Logo Image-->
            <a href="./index.html"><img src="./images/logo.png"
                    alt="Anjana Dil Graphic Design Logo - anjanadil.com"></a>

            <!--Social Media-->
            <div class="social-media">
                <a href="http://facbook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="http://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://lk.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://behance.net/"><i class="fa-brands fa-behance"></i></a>
            </div>
        </div>

        <div class="footer-links">
            <ul class="nav-links">
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#header">Services</a></li>
                <li><a href="#header">Reviews</a></li>
                <li><a href="#header">Contact</a></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <small>Copyright Notice</small>
        </div>


    </section>

    <!-- Link JavaScript Files -->
    <script src="{{ asset('/js/alerts.js') }}"></script>

    @if (session()->has('success'))
        <script>
            let globalOptions = {}
            let currentCallOptions = {}
            let notifier = new AWN(globalOptions);
            notifier.success("{{session('success')}}", currentCallOptions);
        </script>
    @endif

</body>

</html>
