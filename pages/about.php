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

            <ul class="nav-links" id="mynav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Work</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

            <!-- Weather Widgets-->
            <div id="weather">
                <h5 id="city-name"></h5>
                <h6> <p id="weather-main"></p></h6>
            </div>

            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

  
   <!-- Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2>About Me</h2>
                <p>Get to know me better</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>I'm a Passionate Designer & Developer</h3>
                    <p>With a background in both design and development, I create digital solutions that not only look beautiful but also function flawlessly. I believe in the power of design to solve problems and create meaningful experiences.</p>
                    <p>My approach combines creative thinking with technical expertise to deliver projects that exceed expectations. I stay updated with the latest industry trends and technologies to ensure my work is always cutting-edge.</p>
                    
                    <div class="info">
                        <p><strong>Name:</strong> Prabesh</p>
                        <p><strong>Email:</strong> stylishprabesh@gmail.com</p>
                        <p><strong>From:</strong> Nepal</p>
                        <p><strong> Number:</strong>+977 9863732054</p>
                    </div>
                    
                    <a href="#" class="btn">Download CV</a>
                </div>
                
                <div class="skills">
                    <div class="skill">
                        <h4>UI/UX Design <span>95%</span></h4>
                        <div class="progress-bar">
                            <div class="progress" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h4>Web Development <span>90%</span></h4>
                        <div class="progress-bar">
                            <div class="progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h4>Graphic Design <span>85%</span></h4>
                        <div class="progress-bar">
                            <div class="progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h4>Brand Identity <span>80%</span></h4>
                        <div class="progress-bar">
                            <div class="progress" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h4>Mobile Design <span>75%</span></h4>
                        <div class="progress-bar">
                            <div class="progress" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
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

  const apiKey = "6d3fc6fb8152921219e3399d7ae0729b"; // Replace with your OpenWeather API key
  const city = "Kathmandu";

  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`)
    .then(response => response.json())
    .then(data => {
      document.getElementById("city-name").textContent = `Weather in ${data.name}`;
      document.getElementById("weather-main").textContent = `${data.weather[0].main} - ${data.weather[0].description}`;
      document.getElementById("weather-temp").textContent = `🌡️ Temp: ${data.main.temp}°C`;
      document.getElementById("weather-wind").textContent = `💨 Wind: ${data.wind.speed} m/s`;
    })
    .catch(error => {
      console.error("Weather fetch error:", error);
    });

    


    </script>

</body>
</html>