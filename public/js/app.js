// Mobile Navigation Toggle
document.addEventListener('DOMContentLoaded', function() {
    // Dynamic Active Navigation Detection
    function setActiveNavLink() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            const linkHref = link.getAttribute('href');
            
            // Extract path from href
            let linkPath;
            try {
                // Try to parse as full URL first
                if (linkHref.startsWith('http://') || linkHref.startsWith('https://')) {
                    linkPath = new URL(linkHref).pathname;
                } else {
                    // It's a relative path
                    linkPath = linkHref;
                }
            } catch (e) {
                // Fallback: treat as relative path
                linkPath = linkHref;
            }
            
            // Normalize paths (remove trailing slashes and base path)
            const basePath = '/lightweight';
            let normalizedCurrent = currentPath.replace(/\/$/, '') || '/';
            let normalizedLink = linkPath.replace(/\/$/, '') || '/';
            
            // Remove base path if present
            if (normalizedCurrent.startsWith(basePath)) {
                normalizedCurrent = normalizedCurrent.replace(basePath, '') || '/';
            }
            if (normalizedLink.startsWith(basePath)) {
                normalizedLink = normalizedLink.replace(basePath, '') || '/';
            }
            
            // Check if current path matches link path
            if (normalizedCurrent === normalizedLink) {
                link.classList.add('active');
            } else if (normalizedCurrent !== '/' && normalizedLink !== '/') {
                // Check if current path starts with link path (for nested routes)
                const currentSegments = normalizedCurrent.split('/').filter(s => s);
                const linkSegments = normalizedLink.split('/').filter(s => s);
                if (linkSegments.length > 0 && currentSegments[0] === linkSegments[0]) {
                    link.classList.add('active');
                }
            }
        });
    }
    
    // Set active link on page load
    setActiveNavLink();
    
    // Update active link when navigating
    window.addEventListener('popstate', setActiveNavLink);
    
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (navToggle) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });
    }
    
    // Close menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navMenu) {
                navMenu.classList.remove('active');
            }
            if (navToggle) {
                navToggle.classList.remove('active');
            }
            document.body.style.overflow = '';
            // Update active state after navigation
            setTimeout(setActiveNavLink, 100);
        });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInsideNav = navMenu && navMenu.contains(event.target);
        const isClickOnToggle = navToggle && navToggle.contains(event.target);
        
        if (!isClickInsideNav && !isClickOnToggle && navMenu && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            if (navToggle) {
                navToggle.classList.remove('active');
            }
            document.body.style.overflow = '';
        }
    });
    
    // Close menu on escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && navMenu && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            if (navToggle) {
                navToggle.classList.remove('active');
            }
            document.body.style.overflow = '';
        }
    });
    
    // Scroll to Top Button
    const scrollTopBtn = document.getElementById('scrollTop');
    
    if (scrollTopBtn) {
        // Show/hide scroll to top button
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });
        
        // Scroll to top on click
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Chat Widget Click Handler
    const chatWidget = document.getElementById('chatWidget');
    if (chatWidget) {
        chatWidget.addEventListener('click', function() {
            // You can integrate a chat service here or redirect to contact page
            window.location.href = window.location.origin + '/contact';
        });
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href.length > 1) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// Form validation enhancement
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();
        
        if (!name || !email || !subject || !message) {
            e.preventDefault();
            alert('Please fill in all required fields.');
            return false;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            e.preventDefault();
            alert('Please enter a valid email address.');
            return false;
        }
    });
}

// Add fade-in animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all cards and sections
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.feature-card, .service-card, .experience-item');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

    // Consultation Modal
    const consultationModal = document.getElementById('consultationModal');
    const consultationForm = document.getElementById('consultationForm');
    const closeConsultationModal = document.getElementById('closeConsultationModal');
    const cancelConsultationBtn = document.getElementById('cancelConsultationBtn');
    
    // Function to open consultation modal
    function openConsultationModal() {
        if(consultationModal) {
            consultationModal.classList.add('active');
            document.body.style.overflow = 'hidden';
            // Focus on first input
            const firstInput = consultationForm?.querySelector('input[required]');
            if(firstInput) {
                setTimeout(() => firstInput.focus(), 100);
            }
        }
    }
    
    // Function to close consultation modal
    function closeConsultationModalFunc() {
        if(consultationModal) {
            consultationModal.classList.remove('active');
            document.body.style.overflow = '';
            if(consultationForm) {
                consultationForm.reset();
            }
        }
    }
    
    // Open modal when Book Consultation buttons are clicked
    document.addEventListener('click', function(e) {
        const target = e.target.closest('.btn-book, .btn-transform-cta, [data-open-consultation]');
        if(target && !target.hasAttribute('href') || (target && target.getAttribute('href') === '#')) {
            e.preventDefault();
            openConsultationModal();
        } else if(target && target.getAttribute('href')?.includes('/contact')) {
            // Check if it's a Book Consultation button
            const text = target.textContent.toLowerCase();
            if(text.includes('book') || text.includes('consultation')) {
                e.preventDefault();
                openConsultationModal();
            }
        }
    });
    
    // Close modal handlers
    if(closeConsultationModal) {
        closeConsultationModal.addEventListener('click', closeConsultationModalFunc);
    }
    
    if(cancelConsultationBtn) {
        cancelConsultationBtn.addEventListener('click', closeConsultationModalFunc);
    }
    
    // Close on outside click
    if(consultationModal) {
        consultationModal.addEventListener('click', function(e) {
            if(e.target === consultationModal) {
                closeConsultationModalFunc();
            }
        });
    }
    
    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if(e.key === 'Escape' && consultationModal && consultationModal.classList.contains('active')) {
            closeConsultationModalFunc();
        }
    });
    
    // Form submission
    if(consultationForm) {
        consultationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = consultationForm.querySelector('.btn-consultation-submit');
            const originalText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Booking...';
            
            const formData = new FormData(consultationForm);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });
            
            // Build query string
            const params = new URLSearchParams();
            Object.keys(data).forEach(key => {
                params.append(key, data[key]);
            });
            
            // Submit to contact form handler
            fetch(window.location.origin + '/lightweight/contact/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: params.toString()
            })
            .then(response => {
                if(response.ok) {
                    return response.json();
                }
                return response.json().then(err => {
                    throw new Error(err.message || 'Network response was not ok');
                });
            })
            .then(data => {
                if(data.success) {
                    // Show success message
                    alert(data.message || 'Thank you! Your consultation request has been submitted. We\'ll get back to you soon.');
                    closeConsultationModalFunc();
                } else {
                    throw new Error(data.message || 'Failed to submit request');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert(error.message || 'There was an error submitting your request. Please try again or contact us directly.');
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            });
        });
    }

    // Mobile-specific optimizations
    (function() {
    'use strict';
    
    // Prevent iOS double-tap zoom on buttons
    let lastTouchEnd = 0;
    document.addEventListener('touchend', function(event) {
        const now = Date.now();
        if (now - lastTouchEnd <= 300) {
            event.preventDefault();
        }
        lastTouchEnd = now;
    }, false);
    
    // Improve touch scrolling performance
    if ('ontouchstart' in window) {
        document.body.style.webkitOverflowScrolling = 'touch';
    }
    
    // Handle viewport height on mobile browsers (address bar)
    function setViewportHeight() {
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }
    
    setViewportHeight();
    window.addEventListener('resize', setViewportHeight);
    window.addEventListener('orientationchange', setViewportHeight);
    
    // Improve form input on mobile
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        // Prevent zoom on focus (iOS) - ensure font-size is at least 16px
        if (input.type !== 'date' && input.type !== 'time') {
            input.style.fontSize = '16px';
        }
        
        // Add touch-friendly styling
        input.addEventListener('touchstart', function() {
            this.style.outline = '2px solid var(--primary-blue)';
        });
    });
    
    // Optimize scroll performance
    let ticking = false;
    function updateOnScroll() {
        // Scroll-based updates here if needed
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateOnScroll);
            ticking = true;
        }
    }, { passive: true });
    
    // Handle orientation changes
    window.addEventListener('orientationchange', function() {
        setTimeout(function() {
            window.scrollTo(0, 0);
        }, 100);
    });
    
    // Improve tap highlight
    const tapElements = document.querySelectorAll('a, button, .btn, .nav-link');
    tapElements.forEach(el => {
        el.style.webkitTapHighlightColor = 'rgba(76, 81, 191, 0.3)';
    });
})();