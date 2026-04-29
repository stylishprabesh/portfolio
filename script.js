
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

    

