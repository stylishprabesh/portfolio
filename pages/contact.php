<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

  <!-- Header -->
    <nav id="navbar">
        <div class="container">
            <a href="#" class="logo"><i class="fas fa-palette"></i>StylishPrabesh</a>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Work</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

   <!--ection -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Me</h2>
                <p>Get in touch for collaborations</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>123 Design Street, San Francisco, CA 94103</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p>hello@example.com</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p>+1 (555) 123-4567</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <p>Monday - Friday: 9AM - 6PM</p>
                    </div>
                </div>
                <form class="contact-form">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Subject">
                    <textarea placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>Portfolio</h3>
                    <p>A modern portfolio showcasing my design and development work. Creating digital experiences that make an impact.</p>
                    <div class="social-icons">
                         <a href="https://www.facebook.com/stylishprabesh1"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/stylishprabesh"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkdin.com/prabesh"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://github.com/stylishprabesh"><i class="fab fa-github"></i></a>
                                                                        <a href="https://x.com/stylishprabesh"><i class="fa-brands fa-x-twitter"></i></a>

                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                     <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Work</a></li>
                <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">App Design</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Brand Identity</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Subscribe to receive updates and design insights.</p>
                    <form>
                        <input type="email" placeholder="Your Email" required>
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 My Portfolio. All rights reserved. Designed with <i class="fas fa-heart"></i></p>
            </div>
        </div>
    </footer>

    <script>
        // Hero Slider Functionality
        const slides = document.querySelector('.slides');
        const dots = document.querySelectorAll('.slider-dot');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        let slideIndex = 0;
        let slideInterval;
        
        // Initialize slider
        function initSlider() {
            slideInterval = setInterval(nextSlide, 5000);
        }
        
        // Next slide
        function nextSlide() {
            slideIndex = (slideIndex + 1) % 3;
            updateSlider();
        }
        
        // Previous slide
        function prevSlide() {
            slideIndex = (slideIndex - 1 + 3) % 3;
            updateSlider();
        }
        
        // Update slider position and active dot
        function updateSlider() {
            slides.style.transform = `translateX(-${slideIndex * 25}%)`;
            
            // Update active dot
            dots.forEach((dot, index) => {
                if (index === slideIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
            
            // Reset timer
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }
        
        // Dot click event
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                slideIndex = index;
                updateSlider();
            });
        });
        
        // Navigation buttons
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);
        
        // Initialize slider on page load
        document.addEventListener('DOMContentLoaded', initSlider);
        
        // Mobile Menu Toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');
        
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
        
        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Portfolio filtering
        const filterBtns = document.querySelectorAll('.filter-btn');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');
                // Filter logic would go here in a real implementation
            });
        });
    </script>
 
</body>
</html>