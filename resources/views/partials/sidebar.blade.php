<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">I Gede Yuda Pratama</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://twitter.com/_ydpratama" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://web.facebook.com/5x5yuda/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/_ydpratama/" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/ydpratama/" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="/" class="nav-link scrollto {{ ($title === "Home") ? 'active' : '' }} "><i class="bx bx-home"></i>
                        <span>Home</span></a></li>
                <li><a href="/about" class="nav-link scrollto {{ ($title === "About") ? 'active' : '' }}"><i class="bx bx-user"></i> <span>About</span></a>
                </li>
                <li><a href="/resume" class="nav-link scrollto {{ ($title === "Resume") ? 'active' : '' }}"><i class="bx bx-file-blank"></i>
                        <span>Resume</span></a></li>
                <li><a href="/portofolio" class="nav-link scrollto {{ ($title === "Portofolio") ? 'active' : '' }}"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="/contact" class="nav-link scrollto {{ ($title === "Contact") ? 'active' : '' }}"><i class="bx bx-envelope"></i>
                        <span>Contact</span></a></li>
            </ul>
        </nav>
    </div>
</header>