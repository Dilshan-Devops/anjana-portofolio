<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design - Anjana Dil - Graphic Design Portfolio Website - Anjana Dilgara Gunarathne - Graphic Designer</title>

    <!-- Link CSS Files -->
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/portfolio.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Header Section -->
    <section class="header" id="header">

        <!-- Nav Bar -->
        <div class="navbar">
            <a href="../index.html"><img src="../images/logo.png" alt="Anjana Dil Graphic Design Logo - anjanadil.com"></a>

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li><a href="/#portfolio">Portfolio</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/#reviews">Reviews</a></li>
                <li><a href="/#contact">Contact</a></li>
            </ul>

            <div class="menubtn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown-menu open">
            <ul>
                <li><a href="../index.html/#header">Home</a></li>
                <li><a href="../index.html/#about">About</a></li>
                <li><a href="../index.html/#portfolio">Portfolio</a></li>
                <li><a href="../index.html/#services"></a>Services</li>
                <li><a href="../index.html/#reviews">Reviews</a></li>
                <li><a href="../index.html/#contact">Contact</a></li>
                <li><a class="action-btn" href="../pages/form.html">Get Started</a></li>
            </ul>
        </div>

        <!-- Header Section -->
        <ul class="header-text">
            <h3>PORTFOLIO</h3>
        </ul>

    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">

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

            <div class="projects-row">
                <div class="ps-project-7">
                    <h4>4K Logo Design</h4>
                    <small>Logo Design</small>
                </div>

                <div class="ps-project-8">
                    <h4>Konfor</h4>
                    <small>Social Media Post Design</small>
                </div>

                <div class="ps-project-9">
                    <h4>English Class</h4>
                    <small>Social Media Post Design</small>
                </div>
            </div>

            <div class="projects-row">
                <div class="ps-project-10">
                    <h4>Mango Vine</h4>
                    <small>Social Media Post Design</small>
                </div>

                <div class="ps-project-11">
                    <h4>Yoma</h4>
                    <small>Logo Design</small>
                </div>

                <div class="ps-project-12">
                    <h4>Shampoo</h4>
                    <small>Social Media Post Design</small>
                </div>
            </div>
        </div>

        <a class="action-btn" href="{{route('order')}}">Start Design</a>
    </section>

    <!-- Footer -->
    <section class="footer" id="footer">
        <div class="footer-top">
            <!-- Logo Image-->
            <a href="./portfolio.html"><img src="../images/logo.png" alt="Anjana Dil Graphic Design Logo - anjanadil.com"></a>

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
                <li><a href="../index.html">Home</a></li>
                <li><a href="../index.html/#about">About</a></li>
                <li><a href="../index.html/#portfolio">Portfolio</a></li>
                <li><a href="../index.html/#ervices"></a>Services</li>
                <li><a href="../index.html/#reviews">Reviews</a></li>
                <li><a href="../index.html/#contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <small>Copyright Notice</small>
        </div>
    </section>

    <!-- Link JavaScript Files -->

</body>

</html>