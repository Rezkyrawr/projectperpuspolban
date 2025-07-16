<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
        
        // Mobile menu toggle (placeholder - would need implementation)
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.lg\\:hidden');
            // You would add click handler here for mobile menu
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Floating button interaction
            const floatBtn = document.querySelector('.floating-btn');
            if (floatBtn) {
                floatBtn.addEventListener('click', function() {
                    // Would typically open a help modal or chat
                   
                });
            }

            // Dropdown folder functionality
            document.querySelectorAll('.dropdown-folder button').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const folder = this.parentElement;
                    const content = this.nextElementSibling;
                    
                    // Toggle active class
                    folder.classList.toggle('active');
                    
                    // Toggle content visibility with animation
                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        content.style.maxHeight = '0';
                        setTimeout(() => {
                            content.style.maxHeight = content.scrollHeight + 'px';
                        }, 10);
                    } else {
                        content.style.maxHeight = '0';
                        setTimeout(() => {
                            content.classList.add('hidden');
                        }, 300);
                    }
                    
                    // Close other open dropdowns
                    document.querySelectorAll('.dropdown-folder').forEach(otherFolder => {
                        if (otherFolder !== folder && otherFolder.classList.contains('active')) {
                            otherFolder.classList.remove('active');
                            const otherContent = otherFolder.querySelector('.dropdown-content');
                            otherContent.style.maxHeight = '0';
                            setTimeout(() => {
                                otherContent.classList.add('hidden');
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>