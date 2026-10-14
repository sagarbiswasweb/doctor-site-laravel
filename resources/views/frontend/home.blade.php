@extends('frontend.master')

@section('title')
    Home
@endsection

@section('content')
    <!-- HERO -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT -->
            <div class="col-md-6 hero-text text-center text-md-start mb-4 mb-md-0 order-2 order-md-1">
                <h1 class="display-5 fw-bold" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                    <small class="welcome">Welcome to</small> <br>
                    <span class="center-highlight">
                        Advanced Hernia Center<br>
                        <small>Bangladesh</small>
                    </span>
                </h1>

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <p class="lead mt-3">
                        A healthier tomorrow starts Today. Schedule your Appointment <br>
                        Your wellness, Our Expertise
                    </p>
                    <h5 style="color: #213C51">BM&DC Registered | BM&DC No: A 39324</h5>
                    
                    <!-- From Uiverse.io by Nawsome --> 
                    <a href="#schedule" class="make-an-appointment d-inline-flex align-items-center gap-2 mt-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div>
                            <div class="pencil"></div>
                            <div class="folder">
                                <div class="top">
                                    <svg viewBox="0 0 24 27">
                                        <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                                    </svg>
                                </div>
                                <div class="paper"></div>
                            </div>
                        </div>
                        Make An Appointment
                    </a>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-md-6 hero-image position-relative text-center order-1 order-md-2" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">

                <!-- circle -->
                <div class="circle-bg position-absolute top-50 start-50 translate-middle"></div>

                <!-- doctor -->
                <img src="{{ asset('') }}frontend/assets/images/doctor1.jpg" class="doctor-img img-fluid" alt="Doctor">

                <!-- card: satisfied -->
                <div class="floating-card patients position-absolute">
                    <strong style="color: #213C51">10k+</strong>
                    <small style="color: #213C51">Satisfied Patients</small>
                </div>

                <!-- card: calendar -->
                <div class="floating-card calendar position-absolute">
                    <small id="calendar-month" style="color: #213C51"></small>
                    <div class="dates" id="calendar-dates"></div>
                </div>

                <!-- syringe icon -->
                {{-- <div class="floating-icon position-absolute">
                    <i class="bi bi-capsule"></i>
                </div> --}}

            </div>
        </div>
    </div>
</section>



<!-- ABOUT DOCTOR -->
<section id="about" class="about-section">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span class="section-tag">About the Doctor</span>
            <h2 class="section-title">
                Expertise You Can Trust, <span>Care You Can Feel</span>
            </h2>
            <p class="about-subtitle">
                Advanced surgical care with compassion, precision, and integrity
            </p>
        </div>

        <!-- CONTENT -->
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <div class="about-card">

                    <div class="about-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                        <p>
                            {{-- {!! strip_tags($about->about, '<p><br><strong><em><ul><li>') !!} --}}
                            {!! strip_tags($about->about ?? '', '<p><br><strong><em><ul><li>') ?: 'No about information available.' !!}
                        </p>
                    </div>

                    <!-- INFO GRID -->
                    <div class="about-info-grid">

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                            <i class="bi bi-mortarboard"></i>
                            <div>
                                <h6>Qualifications</h6>
                                <p>
                                    {{-- {{ $about->qualifications ?? 'No qualifications information available.' }} --}}
                                    {!! strip_tags($about->qualifications ?? '', '<p><br><strong><em><ul><li>') ?: 'No qualifications information available.' !!}
                                </p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                            <i class="bi bi-heart-pulse"></i>
                            <div>
                                <h6>Specialization</h6>
                                <p>
                                    {{-- {{ $about->specialization ?? 'No specialization information available.' }} --}}
                                    {!! strip_tags($about->specialization ?? '', '<p><br><strong><em><ul><li>') ?: 'No specialization information available.' !!}
                                </p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                            <i class="bi bi-hospital"></i>
                            <div>
                                <h6>Current Position</h6>
                                <p>
                                    {{-- {{ $about->current_position ?? 'No current position information available.' }} --}}
                                    {!! strip_tags($about->current_position ?? '', '<p><br><strong><em><ul><li>') ?: 'No current position information available.' !!}
                                </p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                            <i class="bi bi-globe"></i>
                            <div>
                                <h6>Professional Membership</h6>
                                <p>
                                    {{-- {{ $about->membership ?? 'No membership information available.' }} --}}
                                    {!! strip_tags($about->membership ?? '', '<p><br><strong><em><ul><li>') ?: 'No membership information available.' !!}
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <a href="#schedule" class="premium-btn">
                            <i class="bi bi-calendar-check me-2"></i>
                            <span>Book a Consultation</span>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>



<!-- DISEASES TREATED -->
<section id="diseases" class="diseases-section">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span class="section-tag">Conditions Treated</span>
            <h2 class="section-title">
                Hernia & Related <span>Conditions</span>
            </h2>
            <p class="section-subtitle">
                Comprehensive treatment of all types of hernia for adults and children
            </p>
        </div>

        <!-- DISEASE GRID -->
        <div class="row g-4 justify-content-center">
            @foreach ($treatments as $treatment)
                <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left" data-aos-delay="{{ ($loop->index + 1) * 200 }}" data-aos-duration="1000">
                    <div class="disease-card">
                        @if($treatment->image)
                        <img src="{{ asset('storage/' . $treatment->image) }}" alt="{{ $treatment->treated_condition }}" class="img-fluid mb-3 rounded" style="width:120px; height:120px; object-fit:cover;">
                        @else
                        <i class="bi bi-check-circle-fill"></i>
                        @endif
                        <p>{{ $treatment->treated_condition }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



<!-- SERVICES -->
<section id="services" class="services-section bg-light">
    <div class="container">
        
        <!-- HEADER -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span class="section-tag">Our Expertise</span>
            <h2 class="section-title">
                How We Treat <span>Hernias</span>
            </h2>
            <p class="section-subtitle">
                Advanced surgical services for hernia and related abdominal wall conditions
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            @foreach ($procedures as $procedure)
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="{{ ($loop->index + 1) * 200 }}" data-aos-duration="1000">
                    <div class="service-card">
                        <div class="icon-wrapper">
                            <i class="{{ $procedure->icon_class }}"></i>
                        </div>
                        <h5>{{ $procedure->heading }}</h5>
                        <p>{{ Str::limit($procedure->content, 300) }}</p>
                        <button class="btn btn-sm btn-outline-primary rounded-pill mt-3" 
                                data-bs-toggle="modal" 
                                data-bs-target="#procedureModal"
                                data-title="{{ $procedure->heading }}"
                                data-content="{{ $procedure->content }}">
                            <i class="bi bi-arrow-right-circle"></i> View Details
                        </button>
                    </div>
                </div>
            @endforeach
            
        </div>

        <!-- Procedure Modal -->
        <div class="modal fade" id="procedureModal" tabindex="-1" aria-labelledby="procedureModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 shadow-lg">
                    <div class="modal-header bg-gradient border-0">
                        <h5 class="modal-title fw-bold" id="procedureModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="procedureContent"></div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>



<!-- DOCTOR SCHEDULE -->
<section id="schedule" class="schedule-section">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span class="section-tag">Doctor Schedule</span>
            <h2 class="section-title">
                Chamber <span>Timings</span>
            </h2>
            <p class="schedule-subtitle">
                Please check schedule before visiting
            </p>
        </div>

        <!-- SCHEDULE GRID -->
        <div class="schedule-grid">

            @foreach ($schedules as $schedule)
                <div class="schedule-card"
                    data-start="14:30"
                    data-end="16:00"
                    data-map="https://www.google.com/maps?q=Al+Markazul+Islami+Hospital+Mohammadpur+Dhaka"
                    data-aos="zoom-in"
                    data-aos-delay="{{ ($loop->index + 1) * 200 }}"
                    data-aos-duration="1000">

                    <div class="day text-center">{{ $schedule->hospital }}</div>

                    <div class="time">
                       <i class="bi bi-calendar-check-fill"></i> {{ $schedule->days }}: {{ $schedule->getFormattedFromAttribute() }} – {{ $schedule->getFormattedToAttribute() }}
                    </div>
                    <div class="time text-danger">
                        Off Days: {{ $schedule->off_days }}
                    </div>

                    <div class="hospital-info text-start">
                        <div class="hospital-address mb-3">
                            <i class="bi bi-geo-alt-fill"></i> {{ $schedule->address }}
                        </div>

                        @if($schedule->phone1)
                            <div class="contact-line">
                                <i class="bi bi-telephone-fill"></i>
                                <span>{{ $schedule->phone1_type }}: <a href="tel:+880{{ $schedule->phone1 }}">{{ $schedule->phone1 }}</a></span>
                            </div>
                        @endif

                        @if($schedule->phone2)
                            <div class="contact-line">
                                <i class="bi bi-telephone-fill"></i>
                                <span>{{ $schedule->phone2_type }}: <a href="tel:+880{{ $schedule->phone2 }}">{{ $schedule->phone2 }}</a></span>
                            </div>
                        @endif

                        @if($schedule->phone3)
                            <div class="contact-line">
                                <i class="bi bi-telephone-fill"></i>
                                <span>{{ $schedule->phone3_type }}: <a href="tel:+880{{ $schedule->phone3 }}">{{ $schedule->phone3 }}</a></span>
                            </div>
                        @endif

                        @if($schedule->phone4)
                            <div class="contact-line">
                                <i class="bi bi-telephone-fill"></i>
                                <span>{{ $schedule->phone4_type }}: <a href="tel:+880{{ $schedule->phone4 }}">{{ $schedule->phone4 }}</a></span>
                            </div>
                        @endif

                        @if($schedule->phone5)
                            <div class="contact-line">
                                <i class="bi bi-telephone-fill"></i>
                                <span>{{ $schedule->phone5_type }}: <a href="tel:+880{{ $schedule->phone5 }}">{{ $schedule->phone5 }}</a></span>
                            </div>
                        @endif
                    </div>

                    <div class="card-footer-modern">
                        <span class="status-ribbon {{ $schedule->chamber_status['is_open'] ? 'open' : 'closed' }}">
                            {{ $schedule->chamber_status['label'] }}
                        </span>

                        <a href="https://www.google.com/maps/dir/?api=1&destination={{ $schedule->map }}"
                        class="direction-btn"
                        target="_blank"
                        rel="noopener noreferrer">
                            <i class="bi bi-signpost-fill"></i> Get Directions
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- CTA -->
        {{-- <div class="text-center mt-5">
            <a href="#appointment" class="btn btn-primary rounded-pill px-4">
                Book Appointment
            </a>
        </div> --}}

    </div>
</section>


<!-- CONTACT FORM -->
<section id="contact" class="contact-section bg-light">
    <div class="container">

        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span class="section-tag">Contact</span>
            <h2 class="section-title">
                Send Message for <span>Any Queries</span>
            </h2>
            <p class="schedule-subtitle">
                Please check the schedule before visiting
            </p>
        </div>


        <div class="row g-4 align-items-stretch">

            <!-- CONTACT INFO -->
            <div class="col-lg-4 order-2 order-md-1">
                <div class="contact-info">

                    @foreach ($schedules as $schedule)
                        <div class="info-card" data-aos="fade-right" data-aos-delay="{{ ($loop->index + 1) * 200 }}" data-aos-duration="1000">
                            <div class="info-header">
                                {{-- <i class="bi bi-hospital"></i> --}}
                                <h5>{{ $schedule->hospital }}</h5>
                            </div>

                            @php
                                $phones = [
                                    $schedule->phone1,
                                    $schedule->phone2 ?? null,
                                    $schedule->phone3 ?? null,
                                    $schedule->phone4 ?? null,
                                    $schedule->phone5 ?? null,
                                ];
                            @endphp

                            @foreach($phones as $phone)
                                @if($phone)
                                    <a href="tel:+88{{ $phone }}" class="phone d-block text-center">
                                        <i class="bi bi-telephone"></i>
                                        +88 {{ $phone }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                    
                </div>
            </div>


            <!-- CONTACT FORM -->
            <div class="col-lg-8 order-1 order-md-2">
                <div class="card border-0 shadow-lg rounded-4 p-4 h-100" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h4 class="mb-4 fw-semibold text-center"><u>Send a Message</u></h5>

                    <!-- Alert Messages -->
                    <div id="successMessage" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        <i class="bi bi-check-circle-fill"></i> <strong>Success!</strong> Your message has been sent successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div id="errorMessage" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <i class="bi bi-exclamation-circle-fill"></i> <strong>Error!</strong> <span id="errorText"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form id="contactForm" class="mt-5">
                        @csrf
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label"><b>Full Name</b></label>
                                <input type="text" class="form-control form-control-md rounded-pill" placeholder="Your Name" name="name" required>
                                <small class="text-danger d-block mt-2" id="error-name" style="display: none;"></small>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label"><b>Email Address</b></label>
                                <input type="email" class="form-control form-control-md rounded-pill" placeholder="Your Email" name="email" required>
                                <small class="text-danger d-block mt-2" id="error-email" style="display: none;"></small>
                            </div>

                            <div class="col-12">
                                <label class="form-label"><b>Phone Number</b></label>
                                <input type="tel" class="form-control form-control-md rounded-pill" placeholder="+880 1XXXXXXXXX" name="phone">
                            </div>

                            <div class="col-12">
                                <label class="form-label"><b>Message</b></label>
                                <textarea class="form-control rounded-4" rows="8" name="message" placeholder="Describe your problem or appointment request..." required></textarea>
                                <small class="text-danger d-block mt-2" id="error-message" style="display: none;"></small>
                            </div>

                            <div class="col-12 text-center mt-3">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5" id="submitBtn">
                                    <i class="bi bi-send"></i> Send Message
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>



<!-- GOOGLE MAP -->
<section id="map-section" class="map-section">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span class="section-tag">Map</span>
            <h2 class="section-title">
                Find <span>Our Location</span>
            </h2>
            <p class="schedule-subtitle">
                Please check the schedule before visiting
            </p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="col-md-12">
                <!-- Optional Google Map -->
                <div class="mt-4 rounded-4 overflow-hidden">
                    <iframe src="https://www.google.com/maps/d/embed?mid=11glZ_HM_bgXG94_WwnAEIWBP6yCSgqw&ehbc=2E312F&noprof=1" width="100%" height="480"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const form = this;
        const submitBtn = document.getElementById('submitBtn');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');
        const errorText = document.getElementById('errorText');
        
        // Hide previous messages
        successMessage.style.display = 'none';
        errorMessage.style.display = 'none';
        
        // Clear individual field errors
        document.querySelectorAll('[id^="error-"]').forEach(el => {
            el.style.display = 'none';
            el.textContent = '';
        });
        
        // Disable submit button
        submitBtn.disabled = true;
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> Sending...';
        
        // Create FormData
        const formData = new FormData(form);
        
        // Send AJAX request
        fetch('{{ route('message.store') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => {
            return response.json().then(data => ({
                status: response.status,
                ok: response.ok,
                data: data
            }));
        })
        .then(({ status, ok, data }) => {
            if (ok && data.success) {
                // Show success message
                successMessage.style.display = 'block';
                form.reset();
                
                // Auto-hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 5000);
            } else if (status === 422 && data.errors) {
                // Show field-specific validation errors
                Object.keys(data.errors).forEach(key => {
                    const errorElement = document.getElementById('error-' + key);
                    if (errorElement) {
                        errorElement.textContent = Array.isArray(data.errors[key]) 
                            ? data.errors[key][0] 
                            : data.errors[key];
                        errorElement.style.display = 'block';
                    }
                });
            } else {
                // Show general error message
                errorText.textContent = data.message || 'An error occurred. Please try again.';
                errorMessage.style.display = 'block';
            }
        })
        .catch(error => {
            // Show general error message
            errorText.textContent = 'An error occurred. Please try again.';
            errorMessage.style.display = 'block';
            console.error('Error:', error);
        })
        .finally(() => {
            // Re-enable submit button
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        });
    });
</script>



{{-- for modal  --}}
<script>
    const procedureModal = document.getElementById('procedureModal');
    procedureModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const title = button.getAttribute('data-title');
        const content = button.getAttribute('data-content');
        
        const modalTitle = procedureModal.querySelector('#procedureModalLabel');
        const modalBody = procedureModal.querySelector('#procedureContent');
        
        modalTitle.textContent = title;
        modalBody.textContent = content;
    });
</script>

@endsection