<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tawazun Psychiatric Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Navigation Bar -->
    <section id="navbar" class="fade-in" >
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/HomePage">Tawazun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
              <div class="collapse navbar-collapse" id="navbarNav">  </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Appointment</a>
                    </li>
                    <li class="nav-item">
                        <div class="collapse navbar-collapse" id="navbarNav">
                <div class="nav-link">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                   @auth
    <!-- Show when user is logged in -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('appointments.list') }}">My Appointments</a>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link nav-link" style="display:inline; cursor:pointer;">
                Logout
            </button>
        </form>
    </li>
@else
    <!-- Show when user is not logged in -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
    @endif
@endauth
              
                </div>
            @endif
                    </li>
                                      
                </ul>
            </div>
        </div>
    </nav>
    <div style="height: 60px;background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;"></div>

    {{-- <!-- Hero Banner -->
    <section id="hero" class="fade-in" continer;>
        <div class="container">
            <h1 class="text-start">Tawazun</h1>
            <p class="text-start"x  >
            </div>

            <div class="container mt-5">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/images/interiorroom.jpg') }}" 
                         class="img-fluid" width="650" hight="500" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); margin: 20px;" alt=""> 
                    </div>
                    <div class="col-md-6">
                        <p class="text-start" style="font-size: 20px; line-height: 1.6; color: #333;  margin-left: 60px;">
                        We believe mental wellness begins with understanding, empathy, and expert care. Our team of dedicated professionals is here to guide you toward balance, healing, and a renewed sense of self
                        </p>
                    </div>
                    </div>
                </div>
            </div>        
          
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#bookingModal">Book an
                Appointment</button>
        </div>
    </section> --}}
    </section>
    <!-- Hero Banner -->
<section id="hero" class="fade-in">
  <div class="container">
    <h1 class="text-start">Tawazun</h1>
    <p class="text-start">
      <!-- Optional intro text here -->
    </p>

    <div class="container mt-5">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="{{ asset('storage/images/interiorroom.jpg') }}"
               class="img-fluid rounded shadow"
               alt="Clinic Interior">
        </div>
        <div class="col-md-6">
          <p class="text-start" style="font-size: 20px; line-height: 1.6; color: #333; margin-left: 60px;">
            We believe mental wellness begins with understanding, empathy, and expert care.
            Our team of dedicated professionals is here to guide you toward balance, healing,
            and a renewed sense of self.
          </p>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#bookingModal">
        Book an Appointment
      </button>
    </div>
  </div>
</section>

    <!-- About Section -->
    <section id="about" class="fade-in" >
        <div class="container">
            <h2>About Tawazun Clinic</h2>
            <p>Tawazun Clinic is dedicated to providing compassionate and effective psychiatric care. Our team of
                experienced professionals is committed to helping you achieve balance and well-being in your life.</p>

            <h3>Our Doctors</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="doctor">
                        <img src="{{ asset('storage/images/DrMo.jpg') }}" alt="Doctor 1" class="img-fluid">
                        <h4>Dr. Mohammed Alyafay</h4>
                        <p>Consultant in Geriatric psychiatrist</p>
                        <p>Dr. Alyafay is the go-to psychiatrist for anyone who’s ever said “Back in my day…” and meant it. With a deep respect for the wisdom of older adults, he specializes in cognitive health, late-life depression, and making sure every grandparent gets the care they deserve — and maybe a good story or two along the way.</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="doctor">
                        <img src="{{ asset('storage/images/DrBaha.jpg') }}" alt="Doctor 2" class="img-fluid">
                        <h4>Dr. Baha Goul</h4>
                        <p>Consultant in Adolescent Psychiatry</p>
                        <p>Dr. Goul has mastered the art of decoding teenage silence, eye rolls, and TikTok references. He’s passionate about helping adolescents navigate the stormy seas of hormones, homework, and identity — all while keeping a straight face and a steady hand. His motto: “If they talk to me, I’m winning.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="doctor">
                        <img src="{{ asset('storage/images/DrAhmad.jpg') }}" alt="Doctor 3" class="img-fluid">
                        <h4>Dr. Ahmad Lolo</h4>
                        <p>Consultant in Child Psychiatry</p>
                        <p>basically a superhero in a white coat. Whether it’s tantrums, imaginary friends, or mysterious crayon murals, he’s got it covered. With a gentle approach and a pocket full of stickers (metaphorically), he helps kids feel safe, seen, and heard — even when they’re upside down on the exam table.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="doctor">
                        <img src="{{ asset('storage/images/DrEat.jpg') }}" alt="Doctor 4" class="img-fluid">
                        <h4>Dr. Baseel Mohammed</h4>
                        <p>Consultant in food disorders </p>
                        <p>Dr. Baseel understands that food is more than fuel — it’s emotion, culture, and sometimes chaos. He specializes in treating eating disorders with empathy, clinical precision, and zero judgment. Whether it’s binge eating or food avoidance, he’s here to help patients rebuild a healthy relationship with their plate — and maybe sneak in a nutrition pun or two.</p>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Learn More About Us</button>
        </div>
        
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="fade-in">
        <div class="container">
            <h2>Testimonials</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial">
                            <p>"Tawazun Clinic has been instrumental in my journey to recovery. The therapists are
                                compassionate and understanding."</p>
                            <p>- Sarah J.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <p>"I highly recommend Tawazun Clinic to anyone seeking mental health support. The care I
                                received was exceptional."</p>
                            <p>- Michael K.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <p>"The doctors at Tawazun Clinic are truly dedicated to their patients' well-being. I am
                                grateful for their expertise and support."</p>
                            <p>- Emily L.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <p>"Tawazun Clinic provided a safe and supportive environment for me to address my mental
                                health concerns. I feel much better now."</p>
                            <p>- David M.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <button class="btn btn-primary">Read More Testimonials</button>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="fade-in">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Address</h4>
                    <p>Ahmed Mokhtar Hegazy, Eastern El-Manial<br>Cairo Governorate</p>
                    <h4>Phone</h4>
                    <p>+201551944093</p>
                    <h4>Email</h4>
                    <p><a href="mailto:MohammedAlyafay@tawazunclinic.com">info@tawazunclinic.com</a></p>
                </div>
                <div class="col-md-6">
                    <h4>Send us a message</h4>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <p>&copy; 2026 Tawazun Clinic. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Book an Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Booking Form -->
<form action="{{ route('appointment.add') }}" method="POST" class="p-4 shadow rounded-4 bg-white">
    @csrf
    <h4 class="mb-4 fw-bold text-primary"><i class="bi bi-calendar-plus me-2"></i> Book an Appointment</h4>

    <!-- Name -->
    <div class="mb-3">
        <label for="patientName" class="form-label fw-semibold">
            <i class="bi bi-person-circle me-1"></i> Name
        </label>
        <input type="text" class="form-control form-control-lg" id="patientName" name="patientName" placeholder="Enter your full name" required>
    </div>

    <!-- Email -->
    <div class="mb-3">
        <label for="email" class="form-label fw-semibold">
            <i class="bi bi-envelope-at me-1"></i> Email
        </label>
        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="example@email.com" required>
    </div>

    <!-- Date -->
    <div class="mb-3">
        <label for="date" class="form-label fw-semibold">
            <i class="bi bi-calendar-event me-1"></i> Date
        </label>
        <input type="date" class="form-control form-control-lg" id="date" name="date" value="{{ date('Y-m-d') }}" required>
    </div>

    <!-- Time -->
    <div class="mb-3">
        <label for="time" class="form-label fw-semibold">
            <i class="bi bi-clock me-1"></i> Time
        </label>
        <select class="form-select form-select-lg" id="time" name="time" required>
            <option value="">-- Select a time --</option>
            <option value="10:00">10:00 AM</option>
            <option value="10:30">10:30 AM</option>
            <option value="11:00">11:00 AM</option>
            <option value="11:30">11:30 AM</option>
            <option value="12:00">12:00 PM</option>
            <option value="12:30">12:30 PM</option>
            <option value="13:00">1:00 PM</option>
            <option value="13:30">1:30 PM</option>
            <option value="14:00">2:00 PM</option>
            <option value="14:30">2:30 PM</option>
            <option value="15:00">3:00 PM</option>
        </select>
    </div>

    <!-- Doctor -->
    <div class="mb-4">
        <label for="selectedDoctor" class="form-label fw-semibold">
            <i class="bi bi-person-badge me-1"></i> Select Doctor
        </label>
        <select class="form-select form-select-lg" id="selectedDoctor" name="selectedDoctor" required>
            <option value="dr al yafya">Dr. al yafya</option>
            <option value="dr bahaa">Dr. bahaa</option>
            <option value="dr basile">Dr. basile</option>
            <option value="dr Lolo">Dr. Lolo</option>
        </select>
    </div>

    <!-- Submit -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg shadow-sm">
            <i class="bi bi-check-circle me-1"></i> Book Now
        </button>
    </div>
</form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Optional: You can add JavaScript for scrollspy or other dynamic behaviors here
        const scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#navbarNav'
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</body>

</html>
