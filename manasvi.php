<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manasvi Tech Solutions</title>
    <link rel="icon" type="image/x-icon" href="Manasvi_logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="manasvi.css" />
    <!-- Link to the external CSS file -->
  </head>
  <body>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg sticky-top bg-body-tertiary shadow-lg p-3 bg-body-tertiary rounded"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img class="nav-logo" src="mansvinewlogo.png" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-5 mx-auto p-2">
            <li class="nav-item dropdown ms-4">
              <a
                class="nav-link dropdown-toggle badge fs-4 text-bg-danger"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Courses
              </a>
              <ul class="dropdown-menu">
                <li>
                  <li><a class="dropdown-item" href="#card-1" data-target="card-1">React.Js</a></li>
                  <a class="dropdown-item" href="#card-2" data-target="card-2">Frontend Developer</a>
                </li>
                <li><a class="dropdown-item" href="#card-3" data-target="card-3">Backend Developer</a></li>
                <li><a class="dropdown-item" href="#card-4" data-target="card-4">Python</a></li>
                <li><a class="dropdown-item" href="#card-5" data-target="card-5">PHP</a></li>
                <li><a class="dropdown-item" href="#card-6" data-target="card-6">Java FullStack</a></li>
                <li><a class="dropdown-item" href="#card-7" data-target="card-7">Data Analytics</a></li>
                <li><a class="dropdown-item" href="#card-8" data-target="card-8">Cloud</a></li>
                <li><a class="dropdown-item" href="#card-9" data-target="card-9">Digital Marketing</a></li>
                <li><a class="dropdown-item" href="#card-10" data-target="card-10">BlockChain</a></li>

              </ul>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link active" id="nav-lk" aria-current="page" href="#"><i class="fa-solid fa-house m-1"></i>Home</a>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link actived" id="nav-lk" href="#about"><i class="fas fa-user m-1"></i>About Us</a>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link" id="nav-lk" href="#contact"><i class="fas fa-phone m-1"></i>Contact Us</a>
            </li>
          </ul>
          <ul class="navbar-nav me-1 ms-5 mx-auto p-2">
            <li class="nav-item ms-5">
              <link
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
                rel="stylesheet"
              />
              <a href="LoginForm.html " class="nav-link" id="nav-lk"
                ><i class="fa-solid fa-user px-1"></i>Login</a
              >
            </li>
            <li class="nav-item ms-5">
              <link
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
                rel="stylesheet"
              />
              <a class="nav-link" href="CreateForm.html" id="nav-lk"
                ><i class="fa-solid fa-user px-1"></i>Sign Up</a
              >
            </li>
          </ul>
        </div>
        
      </div>
    </nav>

    <!-- Heading -->
    <!-- <h1 class="text-center">Hero Section</h1> -->

    
    <!-- Slider -->

    <div id="carouselExampleInterval" class="carousel slide slide-container" data-bs-ride="carousel">
      <div class="carousel-inner slide-container">
        
        <div class="carousel-item active slide-container" data-bs-interval="5000">
          <img src="mastercode.jpeg" class="sld-img d-block w-100" alt="Dream Job Image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Land Your Dream Job with <br><span ><img id="manasvi-h" src="manasvi-carousel.png" alt=""></span></h5>
            <p>Turn your aspirations into achievements.
              the culmination of hard work, dedication, and relentless pursuit of your goals. It's not just about securing a position; it's about stepping into a role that aligns with your passions, leverages your skills, and challenges you to grow. Whether you're coding late into the night, perfecting your portfolio, or acing interviews, every effort brings you closer to that one opportunity that changes everything. Dream big, stay focused, and let your ambition guide you to a future filled with purpose and success.
            </p>
         
          
          </div>
        </div>
        <div class="carousel-item slide-container" data-bs-interval="2000">
          <img src="Coding.jpeg" class="sld-img d-block w-100" alt="Coding Image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Code Your Way to Success</h5>
            <p>Learn, innovate, and bring your ideas to life.
              because in the world of technology, every line of code holds the power to transform ideas into reality. It’s not just about solving problems; it’s about innovating, creating, and leaving a mark in a rapidly evolving digital landscape. Embrace the challenges, learn from the errors, and celebrate the victories – because each step forward brings you closer to mastering your craft and achieving greatness. Let your code speak louder than words and pave the way to a future full of endless possibilities.
            </p>
          </div>
        </div>
        <div class="carousel-item slide-container" data-bs-interval="2000">
          <img src="FullStack.webp" class="sld-img d-block w-100" alt="Full Stack Image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Master Full Stack Development</h5>
            <p>Build dynamic, responsive web applications with ease.
              We're a bunch of smart minds,
              Strengthening your digital presence
              to fuel your business growth.From designing intuitive user interfaces to building powerful and scalable back-end systems, the journey of a full-stack developer is all about creating seamless, end-to-end digital experiences. It’s not just about writing code; it’s about bridging the gap between technology and users, ensuring performance, reliability, and creativity at every level. Whether it’s the sleek design you see or the invisible logic that makes it work, full-stack development is the art of transforming ideas into reality.
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    



            <!-- Hero Section -->


     <div class="projects" id="about">
      <div class="project">
          
          <h1 class="hero-h">Who we are ?</h1>
          <img src="MansviAbt-1.jpg" alt="Project 1">
          &nbsp; &nbsp;
         <ul><li> Manasvi Tech Solutions Pvt Ltd is a registered software consulting and services company. Manasvi Tech Solutions Pvt Ltd is having 5+ years experience in designing & developing software solutions.</li>
  
          <br><li>Manasvi Tech Solutions Pvt Ltd is an innovative design and technology company proudly based in Nashik. We specialize in offering ingenious solutions for Website Design & Development, Mobile Application Development, UX / UI Designing, Branding, Product designing, printing, & packaging solutions.</li>
          <br><li> We are a team of skillful, customer-centric, energetic techno-geeks, hungry for the latest resourceful technologies in the web and mobile application development fields.</li>
          <br><li> Our work will often describe who we are. We aim to fulfill the client's needs and associate with them to enhance their business organically.</li></ul>
          
      </div>
  
  
  
  
      <div class="project">
          <h1 class="hero-h">What we do ?</h1>
          <img src="MansviAbt-2.jpg" alt="Project 2">

          &nbsp;
          
          <ul><li>We build software solutions as you work, as per your needs. With in-depth knowledge and experience in various industry verticals, we have strong teams of analysts and engineers to design & develop a perfect solution for your business needs. </li>
            <br><li>We use agile development methodology to ensure fast delivery of a quality product.We have a dedicated quality department that monitors the full development cycle to deliver the best quality product.</li>
  
          <br><li>Our methodology is to study your requirements in detail and then we design a system to suit your current requirements, keeping in mind the future growth of your organization.</li> 
          <br> <li>We build the solutions based on our extensive business domain knowledge with technology competence and proven methodologies to deliver high-quality results cost-effectively to maximize your competitive advantage and productivity.</li></ul>
    </div>
  </div>

    <!-- cards -->


     <div id="course">
    <h1 class="course-h"><span style="color: rgb(7, 75, 143);">Our</span> Courses</h1>
    <div class="card-container">
    <div class="card" id="card-1" style="width: 18rem">
      <img src="img/React js.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">React Js</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 10-15 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities : Become Frontend Developer, Making Responsive Web applicatios.
        </p>
        <a href="Enroll.php?domain=React Js" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div class="card" id="card-2" style="width: 18rem">
      <img src="img/Frontend-Development-(1).webp" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">Frontend Developer</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 15-20 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities :Frontend Developer, Software Engineer & much more.
        </p>
        <a href="Enroll.php?domain=Frontend Developer" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div  id="card-3" class="card" style="width: 18rem">
      <img src="img/Backend-Development.webp" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">Backend Developer</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i> No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i> Become job-ready in 21-25 weeks. <br />
          <i class="fa-solid fa-check-to-slot"></i> Opportunities : Backend Developer, Software Engineer & much more.
        </p>
        <a href="Enroll.php?domain=Backend Developer" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div class="card" id="card-4" style="width: 18rem">
      <img src="img/Python.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">Python Developer</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 20-25 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities : Python Developer, Backend Developer, Software Engineer & much more.
        </p>
        <a href="Enroll.php?domain=Python Developer" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div class="card" id="card-5" style="width: 18rem">
      <img src="img/PHP-Developer.webp" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">PHP</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 20-25 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities : PHP Developer, Backend Developer, Software Engineer & much more.
        </p>
        <a href="Enroll.php?domain=PHP" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div class="card" id="card-6" style="width: 18rem">
      <img src="img/Java full stack.png" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">Java FullStack</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 25-30 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities : Full
          Stack Developer, Backend Developer, Software Engineer & much more.
        </p>
        <a href="Enroll.php?domain=Java FullStack" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div class="card" id="card-7" style="width: 18rem">
      <img src="img/Data-Analytics-.webp" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">Data Analytics</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 25-30 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities : Data Analytics, Data Scientist Data Engineer & much more.
        </p>
        <a href="Enroll.php?domain=Data Analytics" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div class="card" id="card-8" style="width: 18rem">
      <img src="img/Cloud-Computing.webp" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">Cloud</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 25-30 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities : Cloud Computing, AWS, AZURE, Cloud Engine & much more.
        </p>
        <a href="Enroll.php?domain=Cloud" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div class="card" id="card-9" style="width: 18rem">
      <img src="img/Master-Digital-Marketing.webp" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">Digital Marketing</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required.
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 20 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities : Digital Marketing Executive, Content Marketer, Social Media Coordinator.
        </p>
        <a href="Enroll.php?domain=Digital Marketing" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>
      </div>
    </div>
    <div class="card" id="card-10" style="width: 18rem">
      <img src="img/Blockchain.webp" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">BlockChain</h5>
        <p class="card-text">
          <i class="fa-solid fa-check-to-slot"></i>No prior coding experience required
          <br /><i class="fa-solid fa-check-to-slot"></i>Become job-ready in 25-30 weeks. <br /><i class="fa-solid fa-check-to-slot"></i>Opportunities  : Master tools like Ethereum, Hyperledger, Solidity, and Truffle. & much more.
        </p>

        <a href="Enroll.php?domain=BlockChain" class="btn btn-primary">Enroll Now</a>
        <a href="#" class="btn btn-view">View details<i class="fa-solid fa-circle-arrow-right nxt-arw"></i></a>

        
      </div>
    </div>
  </div>
</div>


          <!-- Winning Formulas -->
<div class="win-frml">
  <div>
    <h1 id="win-h"><span style="color: rgb(7, 75, 143);">Our</span> Winning Formula</h1>
  </div>


  <div id="win-card-cnt">
  <div id="win-card-1">
    <div>
      <img src="img/learning_icon.svg" alt="">
    </div>
    <h4 class="win-card-h">Hands-On Learning</h4>
    <p>Learn by doing with practical projects and real-world applications.</p>
  </div>

  <div id="win-card-2">
    <div>
      <img src="img/simulate_learning.svg" alt="">
    </div>
    <h4 class="win-card-h">Simulated Learning</h4>
    <p>Ensuring learning never stops, with the power of AI.</p>
  </div>
</div>

</div>


    <!-- Contact Us Page -->
    <div class="contact-wrapper">
      <div class="image-container">
        <img src="Contact-Mansvi.avif" alt="Contact Us" class="contact-img">
      </div>
      <section id="contact" class="section contact">
        <div class="container contact-container">
          <h2 id="cont-h"><i class="fas fa-phone cnt-logo"></i>Contact Us</h2>
          <form id="contact-form" method="POST" action="connect.php">
            <input type="text" name="name" id="name" placeholder="Your Name" required />
            <input type="email" name="email" id="email" placeholder="Your Email" required />
            <textarea id="message" name="msg" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn"><b>Send Message</b></button>
          </form>
        </div>
      </section>
    </div>
    

    <!-- Footer Section  -->

    <footer class="bg-info-subtle p-5 text-center pb-2" id="footer ">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <img src="mansvinewlogo.png"  class="footer-logo"/><a href="index.html"></a>
              <p style="text-align: justify; line-height: 1.5;">
                <br />
                We give our customers the best value through excellent services
                with the cutting-edge technologies and low cost at any and every
                time.
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul style="list-style: none; text-align: justify; line-height: 2;">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li>
                  <a href="#about">About us</a>
                </li>
                <li>
                  <a href="#services">Services</a>
                </li>
                <li>
                  <a href="#technologies">Technologies</a>
                </li>
                <li>
                  <a href="#whyus">Why us</a>
                </li>
                <li>
                  <a href="#contact">Contact us</a>
                </li>
                <li>
                  <a
                    href="#join_us"
                    data-toggle="modal"
                    data-target=".bd-example-modal-lg"
                    >Join Us</a
                  >
                </li>
              </ul>
              
            </div>

            <div class="col-lg-3 col-md-6 text-center footer-links">
              <h4>We Provide</h4>
              <ul style="list-style: none; text-align: justify; line-height: 2;">
                <li>
                  <a href="#services">Website Development</a>
                </li>
                <li>
                  <a href="#services">Application Development</a>
                </li>
                <li>
                  <a href="#services">Customized Software</a>
                </li>
                <li>
                  <a href="#services">Learning &amp; Training</a>
                </li>
                <li>
                  <a href="#services">Digital Marketing</a>
                </li>
                <li>
                  <a href="#services">Data Analytics &amp; Science</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 d-flex flex-column mb-3 footer-links">
              <h4>Contact Us</h4>
              <ul>
                <p style="text-align: justify;">
                  <i class="fa-solid fa-location-dot"></i> Manasvi Tech
                  Solutions Flat no:18, B-Wing, Sai Meghdoot Apartment, Pandit
                  Colony lane no:5, Behind Kabra Emporium,
                  Sharanpur Road, Nashik-422002
                </p>
                <p style="text-align: justify;">
                  <i class="fa-solid fa-location-dot"></i> Manasvi Tech
                  Solutions Pvt Ltd, Survey No:114,Flat No.101, Homewoods
                  Apartment, Bhumkar vasti,
                  Near Bhumkar Chowk, Wakad, Pune-411057.
                  <li style="list-style: none;">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:9028889915" style="color: #777777"
                      >+91 9028889915</a
                    >
                  </li>
                  <li style="list-style: none;">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:developer@mansvi.tech" style="color: #777777"
                      >developer@manasvi.tech</a
                    >
                  </li>
                </p>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="container-cpr d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright ps-5">
            © Copyright
            <strong><span>Manasvi Tech Solution Pvt Ltd.</span></strong
            >&nbsp;&nbsp;All Rights Reserved
          </div>
        </div>

        <div class="social-links text-center text-md-right pt-5 pt-md-0">
          <a href="https://www.facebook.com/manasvi.tech/" class="facebook"
            ><i class="fa-brands fa-facebook fb"></i></a
          >
          <a
            href="https://www.instagram.com/manasvitechsolutions/"
            class="instagram"
            ><i class="fa-brands fa-instagram insta"></i></a
          >
          <a
            href="https://www.linkedin.com/company/manasvi-tech-website-software-solutions/mycompany/"
            class="linkedin"
            ><i class="fab fa-linkedin Lkdn-icon lnkdn"></i></a
          >
        </div>
      </div>
      <div class="up-arr-cnt"><a href="#"><i class="fa-solid fa-arrow-up up-arr"></i></a></div>
    </footer>

    <script src="manasvi.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
