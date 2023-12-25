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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Header Section -->
    <section class="header" id="header">

        <!-- Nav Bar -->
        <div class="navbar">
            <a href="#"><img src="./images/logo.png" alt="Anjana Dil Graphic Design Logo - anjanadil.com"></a>

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
        <!-- <div class="header-text">
            <h3>Hello, I am</h3>
        </div> -->
    </section>

    <!-- Order Form -->
    <section class="order-form" id="order-form">
        <form action="{{route('order.create')}}" method="POST">
            @csrf
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" required><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" required><br>
            <label for="phone">Phone number:</label><br>
            <input type="text" id="phone" name="phone" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="design">Design type:</label><br>
            <input type="text" id="design" name="design" required><br>
            <label for="project">Project name:</label><br>
            <input type="text" id="project" name="project" required><br>
            <label for="project">Complete date:</label><br>
            <input type="date" id="due_date" name="due_date" required><br>
            <label for="color1">Color 1:</label><br>
            <input type="color" id="color1" name="color1" value="#808080" required><br>
            <label for="color2">Color 2:</label><br>
            <input type="color" id="color2" name="color2" value="#008000" required><br>
            <label for="color3">Color 3:</label><br>
            <input type="color" id="color3" name="color3" value="#FFBF00" required><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" required></textarea><br>
            <input class="submit-btn" type="submit" value="Submit">
        </form>
    </section>

    <!-- Footer -->
    <section class="footer" id="footer">
        <div class="footer-top">
            <!-- Logo Image-->
            <a href="../index.html"><img src="../images/logo.png" alt="Anjana Dil Graphic Design Logo - anjanadil.com"></a>

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
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li><a href="/#portfolio">Portfolio</a></li>
                <li><a href="/#Services"></a>Services</li>
                <li><a href="/#reviews">Reviews</a></li>
                <li><a href="/#Contact">Contact</a></li>
                
            </ul>
        </div>

        <div class="footer-bottom">
            <small>Copyright Notice</small>
        </div>


    </section>

    <!-- Link JavaScript Files -->

</body>

</html>