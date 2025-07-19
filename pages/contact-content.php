<?php
/**
 * Contact Page Content
 * Example of how easy it is to create a new page with the framework
 */

// Include page helpers
require_once __DIR__ . '/../includes/page-helper.php';
?>

<!-- Contact Hero Section -->
<section class="contact-hero py-5" style="background: linear-gradient(135deg, #79B905 0%, #5a8a04 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-4 mb-3">Contact Us</h1>
        <p class="lead">Get in touch with our team for your textile needs</p>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <?php render_section_title('Send us a Message', 'We\'d love to hear from you'); ?>
                
                <!-- Contact Form -->
                <form class="contact-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label">Subject *</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-lg-4">
                <?php render_section_title('Get in Touch', ''); ?>
                
                <!-- Contact Info Cards -->
                <div class="contact-info-cards">
                    <div class="contact-card mb-4 p-4 bg-light rounded">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h5>Our Location</h5>
                        <p class="mb-0">Divine Group<br>
                        Dhaka, Bangladesh</p>
                    </div>
                    
                    <div class="contact-card mb-4 p-4 bg-light rounded">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-phone fa-2x text-primary"></i>
                        </div>
                        <h5>Phone</h5>
                        <p class="mb-0">
                            <a href="tel:+8801750000379" class="text-decoration-none">+880 1750-000379</a>
                        </p>
                    </div>
                    
                    <div class="contact-card mb-4 p-4 bg-light rounded">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-envelope fa-2x text-primary"></i>
                        </div>
                        <h5>Email</h5>
                        <p class="mb-0">
                            <a href="mailto:info@divinetextile.com" class="text-decoration-none">info@divinetextile.com</a>
                        </p>
                    </div>
                    
                    <div class="contact-card mb-4 p-4 bg-light rounded">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-clock fa-2x text-primary"></i>
                        </div>
                        <h5>Business Hours</h5>
                        <p class="mb-0">
                            Monday - Friday: 9:00 AM - 6:00 PM<br>
                            Saturday: 9:00 AM - 2:00 PM
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Optional) -->
<section class="py-5 bg-light">
    <div class="container">
        <?php render_section_title('Find Us', 'Visit our facilities'); ?>
        <div class="map-container bg-white rounded shadow p-3">
            <!-- You can embed Google Maps or any other map service here -->
            <div class="placeholder-map d-flex align-items-center justify-content-center" style="height: 400px; background: #f8f9fa; border-radius: 8px;">
                <div class="text-center">
                    <i class="fas fa-map fa-3x text-muted mb-3"></i>
                    <p class="text-muted">Interactive map will be embedded here</p>
                </div>
            </div>
        </div>
    </div>
</section>