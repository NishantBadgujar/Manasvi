<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course Registration Form</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- FontAwesome for icons -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link href="enroll.css" rel="stylesheet" />
  </head>

  <body>
    <header>
      <nav
        class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm"
      >
        <div class="container-fluid">
          <img
            src="mansvinewlogo.png"
            alt="Logo"
            class="logo"
            style="height: 40px"
          />
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="manasvi.php"
                  ><i class="fas fa-home"></i> Home</a
                >
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#footer"
                  > <i class="fas fa-pencil-alt"></i> Register</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="mt-5 pt-5">
      <div id="qoutes-container">
        <div>
        <h1 class="quotes-h">What is Manasvi ?</h1>
      </div>
      <div class="qout-vdo">
        <div id="qoutes">
          <p>
            <i class="fas fa-book"></i> "Education is the key to unlock the
            golden door of freedom." - George Washington Carver
          </p>
          <p>
            <i class="fas fa-briefcase"></i> "The future belongs to those who
            believe in the beauty of their dreams." - Eleanor Roosevelt
          </p>
          <p>
            <i class="fas fa-unlock-alt"></i> Unlock your future with top
            industry skills. Register now for the course of your dreams!
          </p>
        </div>
        <div id="qoutes-video">
          <video controls autoplay muted loop>
            <source src="Manasvi-vdo.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
      </div>

      <div class="container">
        <div class="row">
          <!-- Form Section -->
          <h1 class="rgt-h">
            <i class="fas fa-pencil-alt"></i> Course Registration
          </h1>
          <div class="col-lg-8">
            <form id="registrationForm" action="connect1.php" method="POST">
              <fieldset class="border p-4 rounded shadow-sm">
                <legend class="text-center">Personal Info</legend>

                <!-- Name -->
                <div class="mb-3">
                  <label for="name" class="form-label"
                    ><i class="fas fa-user"></i> Name:</label
                  >
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    required
                    placeholder="Enter your full name"
                  />
                </div>

                <!-- Email -->
                <div class="mb-3">
                  <label for="email" class="form-label"
                    ><i class="fas fa-envelope"></i> Email:</label
                  >
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    required
                    placeholder="Enter your email"
                  />
                </div>

                <!-- Phone -->
                <div class="mb-3">
                  <label for="phone" class="form-label"
                    ><i class="fas fa-phone"></i> Phone Number:</label
                  >
                  <input
                    type="tel"
                    id="phone"
                    name="phone"
                    class="form-control"
                    required
                    placeholder="Enter your phone number"
                  />
                </div>


                <!-- Degree -->

                <div class="mb-3">
                  <label for="degree" class="form-label"
                    ><i class="fa-solid fa-graduation-cap"></i> Graduation Degree:</label
                  >
                  <input
                    type="text"
                    id="degree"
                    name="degree"
                    class="form-control"
                    required
                    placeholder="Enter your Graduation Degree"
                  />
                </div>

                <!-- Stream  -->

                <div class="mb-3">
                  <label for="stream" class="form-label"
                    ><i class="fa-solid fa-graduation-cap"></i> Degree Stream:</label
                  >
                  <input
                    type="text"
                    id="stream"
                    name="stream"
                    class="form-control"
                    required
                    placeholder="Enter your Stream in Degree"
                  />
                </div>


                <!-- Year of Passing Out -->
                <div class="mb-3">
                  <label for="year" class="form-label"
                    ><i class="fas fa-calendar-alt"></i> Year of Passing
                    Out:</label
                  >
                  <select id="year" name="passout_yr" class="form-select" required>
                    <option value="">Select Year</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                  </select>
                </div>

                <!-- Domain -->
                <div class="mb-3">
                  <label for="domainDropdown" class="form-label"
                    ><i class="fas fa-laptop-code"></i> Domain
                    Interested:</label
                  >
                  <select
                    id="domain-dropdown"
                    name="domain"
                    class="form-select"
                    required
                  >
                    <option value="">Select Domain</option>
                    <option value="React Js">React Js</option>
                    <option value="Frontend Developer">
                      Frontend Developer
                    </option>
                    <option value="Backend Developer">Backend Developer</option>
                    <option value="Python Developer">Python Developer</option>
                    <option value="PHP">PHP</option>
                    <option value="Java FullStack">Java FullStack</option>
                    <option value="Data Analytics">Data Analytics</option>
                    <option value="Cloud">Cloud</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="BlockChain">BlockChain</option>
                  </select>
                </div>

                <!-- Resume Upload -->
                <div class="mb-3">
                  <label for="resume" class="form-label"
                    ><i class="fas fa-file-upload"></i> Upload Resume:</label
                  >
                  <input
                    type="file"
                    id="resume"
                    name="resume"
                    class="form-control"
                    accept=".pdf,.docx,.txt"
                    required
                  />
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">
                  <i class="fas fa-paper-plane"></i> Submit
                </button>
              </fieldset>
            </form>
          </div>

          <!-- Image Section -->
          <div
            class="col-lg-4 d-flex align-items-center justify-content-end"
          >
            <img class="rgt-img"
              src="img/register-img.jpg"
              alt="Responsive Image"
              class="img-fluid rounded"
            />
          </div>
        </div>
      </div>
    </main>

    <!-- Popup -->
    <div id="thankYouPopup" class="popup">
      <div class="popup-content text-center">
        <h2>
          <i class="fas fa-thumbs-up"></i> Thank You for Choosing Us! We will
          reach you soon.
        </h2>
        <p class="text-muted mb-3">
          <i class="fas fa-quote-left"></i> "Success usually comes to those who
          are too busy to be looking for it." - Henry David Thoreau
          <i class="fas fa-quote-right"></i>
        </p>
        <p class="text-muted mb-3">
          Our team is reviewing your registration. Stay tuned for updates!
        </p>
        <button class="btn btn-danger mt-3" onclick="closePopup()">
          Close
        </button>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="enroll.js"></script>

    <!-- Footer -->
    <footer id="footer">
      <strong>&copy; 2023 Enroll. All rights reserved.</strong>
      <div class="social-links text-center text-md-right pt-5 pt-md-0">
        <a href="https://www.facebook.com/manasvi.tech/" class="facebook"
          ><i class="fab fa-facebook"></i
        ></a>
        <a
          href="https://www.instagram.com/manasvitechsolutions/"
          class="instagram"
          ><i class="fab fa-instagram"></i
        ></a>
      </div>
    </footer>
  </body>
</html>
