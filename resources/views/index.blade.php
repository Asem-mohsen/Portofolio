@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row align-items-center content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h2>Building Scalable Digital Products & Smart Business Solutions</h2>
            <p class="lead">
              I develop real-world platforms and SaaS applications with clean architecture, secure backend systems, and elegant user experiences — turning business needs into reliable software.
            </p>
    
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="#portfolio" class="btn btn-primary">Explore My Work</a>
              <a href="#contact" class="btn btn-outline">Get In Touch</a>
            </div>
    
            <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-item">
                <span class="stat-number">3+</span>
                <span class="stat-label">Years Experience</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">10+</span>
                <span class="stat-label">Real Projects Delivered</span>
              </div>
            </div>
          </div>
    
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="{{ asset('assets/img/profile/profile-1.webp') }}" alt="Assem Mohsen" class="img-fluid" data-aos="zoom-out" data-aos-delay="300">
              <div class="shape-1"></div>
              <div class="shape-2"></div>
            </div>
          </div>
        </div>
    
      </div>
    
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="{{ asset('assets/img/person/assem_mohsen.jpeg') }}" alt="Assem Mohsen" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <span class="subtitle">About Me</span>

              <h2>PHP &amp; Laravel / Angular Developer</h2>

              <p class="lead mb-4">
                Passionate software engineer specializing in PHP, Laravel, and Angular development. 
                With a strong foundation in backend architecture and API development, I transform complex requirements into scalable, 
                efficient solutions that drive business success.
              </p>

              <div class="personal-info">
                <div class="row g-4">
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Name</span>
                      <span class="value">Assem Mohsen</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Phone</span>
                      <a href="tel:+201152992719" class="value">+20 11 5299 2719</a>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Age</span>
                      <span class="value">25 Years</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Email</span>
                      <a href="mailto:asemmohsen911@gmail.com" class="value">asemmohsen911@gmail.com</a>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Occupation</span>
                      <span class="value">Software Engineer</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Nationality</span>
                      <span class="value">Egyptian</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <h3>PHP</h3>
              <p>PHP is a popular server-side scripting language for web development.</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
              <h3>Laravel</h3>
              <p>Laravel is a popular PHP framework for web development.</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
              <h3>Angular</h3>
              <p>Angular is a popular JavaScript framework for web development.</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
              <h3>Database Management</h3>
              <p>Database Management is the process of storing, retrieving, and managing data in a database.</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
              <h3>Git tools</h3>
              <p>Git tools are used to manage and version control code repositories.</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400"> 
            <div class="skill-box">
              <h3>API Development</h3>
              <p>API Development is the process of creating APIs for web and mobile applications.</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400"> 
            <div class="skill-box">
              <h3>CI/CD</h3>
              <p>CI/CD is the process of continuously integrating and delivering code to production.</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400"> 
            <div class="skill-box">
              <h3>Docker</h3>
              <p>Docker is a containerization platform for building, shipping, and running applications.</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>My work experience and education</p>
        <div class="mt-3">
          <a href="{{ asset('assets/cv/AssemMohsen.pdf') }}" class="btn btn-download-cv" download>
            <i class="bi bi-download me-2"></i>Download CV
          </a>
        </div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="resume-wrapper">
              <div class="resume-block" data-aos="fade-up">
                <h2>Work Experience</h2>
                <p class="lead">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>

                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">Geeks</h4>
                      <span class="period">September, 2024 - Current</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Software Developer</h3>
                      <p class="description">I am a software developer at Geeks, a software development company that provides software development services to businesses.</p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">Nile University</h4>
                      <span class="period">September, 2023 - October, 2024</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Junior Php Developer</h3>
                      <p class="description">
                        I was a junior php developer at Nile University, a university that provides education to students.
                      </p>
                      <ul>
                        <li>Developed and maintained web applications using PHP and Laravel.</li>
                        <li>Collaborated with the team to design and implement new features.</li>
                        <li>Optimized the performance of the applications.</li>
                        <li>Debugged and fixed bugs in the applications.</li>
                      </ul>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-left">
                      <h4 class="company">Maged Software House</h4>
                      <span class="period">July, 2023 - September, 2023</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Internship Php Developer</h3>
                      <p class="description">I was an internship php developer at Maged Software House, a software development company that provides software development services to businesses.</p>
                      <ul>
                        <li>Developed and maintained web applications using PHP and Laravel.</li>
                        <li>Collaborated with the team to design and implement new features.</li>
                        <li>Optimized the performance of the applications.</li>
                        <li>Debugged and fixed bugs in the applications.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="resume-block" data-aos="fade-up" data-aos-delay="100">
                <h2>My Education</h2>
                <p class="lead">My education and qualifications</p>

                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">Faculty of Computer Science, Cairo University</h4>
                      <span class="period">2024 - Current</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Master of Computer Science</h3>
                      <p class="description">
                        Currently studying for a Master of Computer Science at Cairo University. 
                        The program enhances my technical background in algorithms, data structures, databases, 
                        operating systems, and software development. It strengthens my foundation as a backend 
                        developer and improves my problem-solving and analytical skills. I am currently in my first year of the program.
                      </p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">Faculty of Business Information Systems, Helwan University</h4>
                      <span class="period">September, 2019 - August, 2022</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Bachelor of Business Information Systems</h3>
                      <p class="description">
                        Completed a Bachelor's degree in Business Information Systems at Helwan University. 
                        The program focuses on combining technology with business operations, including systems analysis, 
                        database management, data analytics, and digital business solutions. It helped me understand 
                        how organizations use technology to optimize processes and make smarter decisions.
                      </p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>
          A collection of real-world applications I developed, including SaaS platforms, enterprise dashboards,
          booking systems, and digital management tools used by businesses and organizations.
        </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('assets/img/portfolio/gymivida.png') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('assets/img/portfolio/gymivida.png') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="{{ config('social.gymivida') }}" class="details-link" target="_blank"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <h3>Gymivida</h3>
                  <p>
                    A complete gym management platform with a public interface for users to browse gyms, view
                    branches, check amenities, and book memberships, classes, and services. The admin dashboard
                    supports members, payments, schedules, trainers, notifications, and real-time tracking.
                  </p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('assets/img/portfolio/clockboost.webp') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('assets/img/portfolio/clockboost.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="{{ config('social.clockboost') }}" class="details-link" target="_blank"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <h3>Clockboost</h3>
                  <p>
                    A smart time-tracking and productivity system for companies. Employees can clock in/out from
                    web or mobile, while managers monitor activity, attendance, absence requests, manual time,
                    and detailed productivity reports. Includes real-time dashboards, Stripe billing, and
                    automated notifications.
                  </p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('assets/img/portfolio/imentet.jpeg') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('assets/img/portfolio/imentet.jpeg') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-motion"><i class="bi bi-eye"></i></a>
                      <a href="{{ config('social.imentet') }}" class="details-link" target="_blank"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <h3>Imentet</h3>
                  <p>
                    A booking platform for events and organized experiences at The Giza Pyramids and The Grand
                    Egyptian Museum. Visitors can buy tickets securely online, receive QR entry codes, and view
                    available programs. Includes an admin panel for event management, staff access, ticket
                    validation, and multi-language support.
                  </p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-brand">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('assets/img/portfolio/mitraQ.png') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('assets/img/portfolio/mitraQ.png') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-brand"><i class="bi bi-eye"></i></a>
                      <a href="{{ config('social.mitraq') }}" class="details-link" target="_blank"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <h3>MitraQ</h3>
                  <p>
                    A mining analytics system that visualizes mining activities across the world. The platform
                    provides data dashboards, charts, and production analysis, helping companies monitor
                    operations, compare outputs, and predict mining performance using real-time datasets.
                  </p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">Contact</div>
              <h2 class="display-5 mb-4">Get In Touch</h2>
              <p class="lead mb-4">
                Feel free to reach out for project collaborations, job opportunities, or any tech-related inquiries.
              </p>
              
              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <a href="mailto:asemmohsen911@gmail.com" class="text-decoration-none">asemmohsen911@gmail.com</a>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <a href="tel:+201152992719" class="text-decoration-none">+20 11 5299 2719</a>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>Cairo, Egypt</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

                <form action="{{ route('contact.send') }}" method="post" class="php-email-form" id="contactForm">
                  @csrf
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                      <button type="submit" class="btn btn-submit w-100">Submit Message</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

@endsection