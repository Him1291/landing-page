<?php 
// Public landing page (no session required)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="img/logo/a.jpg" rel="icon">
  <title>Attendance Monitoring System – Landing</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <style>
    :root {
      --primary-bg: #e8f5f0;
      --card-bg: #ffffff;
      --accent-color: #3eb489;
      --accent-light: #8fd3c7;
      --accent-dark: #2a9d8f;
      --accent-very-light: #e0f2e9;
      --text-color: #2d3748;
      --muted: #718096;
      --border: #e2e8f0;
      --success-light: #c6f6d5;
    }

    body {
      background: linear-gradient(135deg, #e0f2e9 0%, #d4ede4 100%);
      color: var(--text-color);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
    }

    .hero {
      padding: 80px 0 40px;
      text-align: center;
      background: linear-gradient(135deg, rgba(62,180,137,0.08) 0%, rgba(255,255,255,0.9) 100%);
      border-bottom: 1px solid var(--accent-very-light);
    }

    .hero .badge {
      background: rgba(62,180,137,0.15);
      color: var(--accent-color);
      border: 1px solid rgba(62,180,137,0.35);
      padding: 10px 20px;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.9rem;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .hero h1 {
      margin: 25px 0 15px;
      font-weight: 800;
      letter-spacing: .3px;
      font-size: 2.8rem;
    }

    .hero .accent-text {
      color: var(--accent-color);
      position: relative;
    }

    .hero .accent-text::after {
      content: '';
      position: absolute;
      bottom: 5px;
      left: 0;
      width: 100%;
      height: 8px;
      background: rgba(62,180,137,0.2);
      z-index: -1;
      border-radius: 4px;
    }

    .lead {
      color: var(--muted);
      max-width: 800px;
      margin: 0 auto;
      font-size: 1.2rem;
    }

    .btn-success {
      background-color: var(--accent-color);
      border-color: var(--accent-color);
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 50px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(62,180,137,0.3);
    }

    .btn-success:hover {
      background-color: var(--accent-dark);
      border-color: var(--accent-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(62,180,137,0.4);
    }

    .section {
      padding: 60px 0;
    }

    .card-mint {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,.08);
      color: var(--text-color);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      overflow: hidden;
    }

    .card-mint:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0,0,0,.12);
    }

    .card-mint::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--accent-color), var(--accent-light));
    }

    .section-title {
      font-weight: 700;
      margin-bottom: 25px;
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 1.5rem;
    }

    .section-title i {
      color: var(--accent-color);
      background: var(--accent-very-light);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .step-list {
      counter-reset: step;
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .step-list li {
      position: relative;
      padding-left: 60px;
      margin: 20px 0;
      padding-top: 5px;
    }

    .step-list li:before {
      counter-increment: step;
      content: counter(step);
      position: absolute;
      left: 0;
      top: 0;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--accent-very-light);
      color: var(--accent-color);
      border: 2px solid var(--accent-light);
      font-weight: 700;
      font-size: 1rem;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 15px;
    }

    .contact-item i {
      color: var(--accent-color);
      background: var(--accent-very-light);
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    a.soft-link { 
      color: var(--accent-color); 
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }
    
    a.soft-link:hover { 
      color: var(--accent-dark); 
      text-decoration: underline;
    }

    .footer-note {
      color: var(--muted);
      font-size: .95rem;
      padding: 40px 0 60px;
      text-align: center;
      border-top: 1px solid var(--border);
      margin-top: 40px;
    }

    .tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 8px 16px;
      background: var(--accent-very-light);
      color: var(--accent-color);
      border: 1px solid var(--accent-light);
      border-radius: 50px;
      font-size: .85rem;
      font-weight: 500;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
      margin-top: 30px;
    }

    .feature-card {
      background: var(--accent-very-light);
      border-radius: 12px;
      padding: 25px;
      text-align: center;
      transition: all 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .feature-card i {
      font-size: 2.5rem;
      color: var(--accent-color);
      margin-bottom: 15px;
    }

    .faq-item {
      border-bottom: 1px solid var(--border);
      padding: 20px 0;
    }

    .faq-item:last-child {
      border-bottom: none;
    }

    .faq-question {
      font-weight: 600;
      color: var(--text-color);
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .faq-question i {
      color: var(--accent-color);
    }

    .faq-answer {
      color: var(--muted);
      padding-left: 30px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .hero {
        padding: 60px 0 30px;
      }
      
      .hero h1 {
        font-size: 2.2rem;
      }
      
      .section {
        padding: 40px 0;
      }
      
      .section-title {
        font-size: 1.3rem;
      }
      
      .section-title i {
        width: 40px;
        height: 40px;
      }
      
      .step-list li {
        padding-left: 50px;
      }
      
      .step-list li:before {
        width: 35px;
        height: 35px;
      }
      
      .feature-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 576px) {
      .hero h1 {
        font-size: 1.8rem;
      }
      
      .lead {
        font-size: 1rem;
      }
      
      .card-mint {
        border-radius: 12px;
      }
      
      .btn-success {
        width: 100%;
        max-width: 280px;
      }
    }
  </style>
</head>
<body>
  <header class="hero">
    <div class="container">
      <span class="badge"><i class="fas fa-qrcode"></i> QR Code Attendance System</span>
      <h1 class="display-5">Students and Teachers Attendance <br><span class="accent-text">Using QR Code Technology</span></h1>
      <p class="lead mt-3">A modern, paperless solution for efficient attendance tracking with secure QR scanning and real-time reporting.</p>
      <div class="mt-4">
        <a href="index.php" class="btn btn-success btn-lg"><i class="fas fa-sign-in-alt"></i> Go to Login Portal</a>
      </div>
    </div>
  </header>

  <main class="container">
    <!-- Overview Section -->
    <section class="section">
      <div class="card card-mint p-4 p-md-5 position-relative">
        <h2 class="section-title"><i class="fas fa-info-circle"></i> System Overview</h2>
        <p>The Attendance Monitoring System using QR Code technology revolutionizes how schools track attendance. By replacing manual processes with digital QR code scanning, we eliminate errors, save time, and provide real-time insights into attendance patterns.</p>
        
        <div class="feature-grid">
          <div class="feature-card">
            <i class="fas fa-bolt"></i>
            <h5>Fast & Efficient</h5>
            <p class="mb-0">Record attendance in seconds with a simple scan</p>
          </div>
          <div class="feature-card">
            <i class="fas fa-shield-alt"></i>
            <h5>Secure & Reliable</h5>
            <p class="mb-0">Unique QR codes prevent proxy attendance</p>
          </div>
          <div class="feature-card">
            <i class="fas fa-chart-line"></i>
            <h5>Real-time Analytics</h5>
            <p class="mb-0">Instant reports and attendance insights</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Developer Section -->
    <section class="section">
      <div class="card card-mint p-4 p-md-5 position-relative">
        <h2 class="section-title"><i class="fas fa-user-cog"></i> Development Team</h2>
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <p class="mb-2"><strong>Developed by:</strong></p>
            <p class="mb-3">Alediojo, Ma. Kristine A.<br>
            Balicucos, Mohamedin M.<br>
            Camos, Cristian H.<br>
            Fabellore, Frenz H.</p>
            
            <p class="mb-1"><strong>Course/Department:</strong> BS Information Technology</p>
            <p class="mb-1"><strong>Institution:</strong> South East Asian Institute of Technology</p>
            <p class="mb-3"><strong>Version:</strong> 1.0</p>
            <span class="tag"><i class="fas fa-shield-alt"></i> Built for educational excellence</span>
          </div>
          <div class="col-lg-6">
            <p>Our team developed this system to help educational institutions transition from manual to automated attendance management. We believe in creating solutions that enhance efficiency, transparency, and the overall educational experience.</p>
            <div class="mt-4">
              <span class="tag me-2"><i class="fas fa-leaf"></i> Eco-friendly</span>
              <span class="tag me-2"><i class="fas fa-clock"></i> Time-saving</span>
              <span class="tag"><i class="fas fa-chart-bar"></i> Data-driven</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Steps Section -->
    <section class="section">
      <div class="card card-mint p-4 p-md-5 position-relative">
        <h2 class="section-title"><i class="fas fa-shoe-prints"></i> How to Use the System</h2>
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h5 class="mb-3 d-flex align-items-center"><i class="fas fa-user-shield me-2"></i> For Administrators</h5>
            <ol class="step-list">
              <li>Login to Admin Dashboard using your credentials</li>
              <li>Add students and teachers to the system</li>
              <li>Generate unique QR codes for each user</li>
              <li>Distribute QR codes to respective users</li>
              <li>Monitor real-time attendance records</li>
              <li>Generate comprehensive reports</li>
              <li>Securely logout after session</li>
            </ol>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h5 class="mb-3 d-flex align-items-center"><i class="fas fa-chalkboard-teacher me-2"></i> For Teachers</h5>
            <ol class="step-list">
              <li>Access your account with login credentials</li>
              <li>Use QR scanner to record student attendance</li>
              <li>Review student attendance logs</li>
              <li>Edit records when necessary</li>
              <li>Generate class-specific reports</li>
              <li>Logout securely after use</li>
            </ol>
          </div>
          <div class="col-lg-4">
            <h5 class="mb-3 d-flex align-items-center"><i class="fas fa-user-graduate me-2"></i> For Students</h5>
            <ol class="step-list">
              <li>Login using student ID and password</li>
              <li>Present QR code for scanning</li>
              <li>View personal attendance history</li>
              <li>Report discrepancies if needed</li>
              <li>Logout after checking records</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Help Section -->
    <section class="section">
      <div class="card card-mint p-4 p-md-5 position-relative">
        <h2 class="section-title"><i class="fas fa-life-ring"></i> Support & Assistance</h2>
        <p>Our dedicated support team is available to help with any technical issues or questions about the system.</p>
        <div class="row">
          <div class="col-md-6">
            <div class="contact-item">
              <i class="fas fa-envelope"></i>
              <div>
                <strong>Email</strong><br>
                digitalcorecompany@gmail.com
              </div>
            </div>
            <div class="contact-item">
              <i class="fas fa-phone"></i>
              <div>
                <strong>Phone</strong><br>
                +63 970 257 01113
              </div>
            </div>
            <div class="contact-item">
              <i class="far fa-clock"></i>
              <div>
                <strong>Support Hours</strong><br>
                Monday – Friday, 8:00 AM to 5:00 PM
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <p>For immediate assistance, please contact your school's IT department or system administrator. They can provide on-site support and resolve most issues quickly.</p>
            <div class="mt-3">
              <span class="tag"><i class="fas fa-headset"></i> Quick response guaranteed</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
      <div class="card card-mint p-4 p-md-5 position-relative">
        <h2 class="section-title"><i class="fas fa-question-circle"></i> Frequently Asked Questions</h2>
        <div class="faq-list">
          <div class="faq-item">
            <div class="faq-question"><i class="fas fa-question"></i> Who can use the system?</div>
            <div class="faq-answer">This system is designed for students, teachers, and school administrators of educational institutions.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question"><i class="fas fa-question"></i> How does the QR code system work?</div>
            <div class="faq-answer">Each user receives a unique QR code. When scanned, it automatically logs attendance with timestamp into the secure database.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question"><i class="fas fa-question"></i> What if my QR code doesn't scan properly?</div>
            <div class="faq-answer">Ensure the code is clear and undamaged. If issues persist, contact your IT department for a replacement.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question"><i class="fas fa-question"></i> Can someone else use my QR code?</div>
            <div class="faq-answer">No. Each QR code is uniquely tied to an individual student ID, preventing proxy attendance.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question"><i class="fas fa-question"></i> What if I forget my password?</div>
            <div class="faq-answer">Contact your system administrator to reset your password securely.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question"><i class="fas fa-question"></i> Is my attendance data secure?</div>
            <div class="faq-answer">Yes, all attendance records are stored securely and can only be accessed by authorized personnel.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question"><i class="fas fa-question"></i> Can teachers modify attendance records?</div>
            <div class="faq-answer">Yes, with proper authorization, teachers can make corrections to attendance data.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <div class="footer-note">
      <span>&copy; <?php echo date('Y'); ?> QR Code Attendance Monitoring System</span>
      <span class="mx-2">•</span>
      <a href="index.php" class="soft-link">Back to Login Portal</a>
      <span class="mx-2">•</span>
      <a href="#" class="soft-link">Privacy Policy</a>
    </div>
  </main>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    // Smooth animations
    document.addEventListener('DOMContentLoaded', function() {
      // Fade in effect
      document.body.style.opacity = 0;
      document.body.style.transition = 'opacity .5s ease';
      requestAnimationFrame(() => document.body.style.opacity = 1);
      
      // Add scroll animations
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, observerOptions);
      
      // Observe cards for animation
      document.querySelectorAll('.card-mint').forEach(card => {
        card.style.opacity = 0;
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(card);
      });
    });
  </script>
</body>
</html>