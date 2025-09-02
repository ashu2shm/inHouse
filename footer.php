  <!-- Footer  Start -->
        <footer class="footer-wrap style-three">
            <!-- <div class="footer-top pb-70">
                <img src="assets/img/footer-shape.webp" alt="Image" class="footer-shape">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-sm-6">
                            <div class="footer-widget">
                                <a href="index.html" class="footer-logo">
                                    <img class="logo-light" src="assets/img/logo-white.webp" alt="Image">
                                    <img class="logo-dark" src="assets/img/logo-white.webp" alt="Image">
                                </a>
                                <p class="comp-desc">There are many variations of passages ofor
                                Ipsum available, but the majority have suffered
                                alteration in some form by inject.</p>
                                <div class="contact-info">
                                    <h6><i class="flaticon-pin"></i>Contact Address</h6>
                                    <p>64C East Crest, Melane Plaza,DanyBoyle, TT 3346, USA</p>
                                </div>
                                <ul class="social-profile list-style">
                                    <li><a href="" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                    <li><a href="" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-12 col-sm-6 pe-xxl-6">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Quick Links</h3>
                                <ul class="footer-menu list-style">
                                    <li><a href="service-style-one.html"><i class="ri-arrow-right-double-line"></i>Hospital</a></li>
                                    <li><a href="about.html"><i class="ri-arrow-right-double-line"></i>About Us</a></li>
                                    <li><a href="service-style-one.html"><i class="ri-arrow-right-double-line"></i>Services</a></li>
                                    <li><a href="service-details.html"><i class="ri-arrow-right-double-line"></i>Portfolio</a></li>
                                    <li><a href="contact.html"><i class="ri-arrow-right-double-line"></i>Contact Us</a></li>
                                    <li><a href="service-details.html"><i class="ri-arrow-right-double-line"></i>Dental Implants</a></li>
                                    <li><a href="book-appointment.html"><i class="ri-arrow-right-double-line"></i>Make An Appointment</a></li>
                                    <li><a href="faq.html"><i class="ri-arrow-right-double-line"></i>Faq</a></li>
                                    <li><a href="pricing-plan.html"><i class="ri-arrow-right-double-line"></i>Pricing</a></li>
                                    <li><a href="privacy-policy.html"><i class="ri-arrow-right-double-line"></i>Privacy Policy</a></li>
                                    <li><a href="terms-conditions.html"><i class="ri-arrow-right-double-line"></i>Terms & Condition</a></li>
                                    <li><a href="service-style-one.html"><i class="ri-arrow-right-double-line"></i>Cleaning Facilities</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-12 col-sm-6 px-xxl-0">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Clinic Hours</h3>
                                <ul class="opening-time list-style">
                                    <li><span>Mon - Thu</span> <span>9:00 AM - 7:00 PM</span></li>
                                    <li><span>Friday - </span> <span>9:00 AM - 6:00 PM</span></li>
                                    <li><span>Saturday -</span> <span>Closed</span></li>
                                    <li><span>Sunday -</span> <span>Closed</span></li>
                                </ul>
                                <div class="contact-info">
                                    <h6><i class="flaticon-phone-call"></i>Call Us</h6>
                                    <a href="tel:08811234567899">(088)  +1-123-456-7899</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <p class="copyright-text"><i class="ri-copyright-line"> </i> Website is Managed by CIE Global</p>
        </footer>
   
   <!-- Sticky Buttons (Mobile Only) -->
<div class="mobile-sticky-buttons d-md-none">
  <!-- WhatsApp -->
  <a href="https://wa.me/+917753835834" target="_blank" class="btn btn-success">
    <i class="bi bi-whatsapp pe-1"></i> WhatsApp
  </a>

  <!-- Call -->
  <a href="tel:+917753835834" class="btn btn-primary">
    <i class="bi bi-telephone pe-1"></i> Call
  </a>
</div>

<!-- CSS -->
<style>
.mobile-sticky-buttons {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: space-between;
  padding: 0; /* remove padding so buttons touch edges */
  background: #fff;
  box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
  z-index: 9999;
}

.mobile-sticky-buttons a {
  flex: 1;                /* take equal space */
  padding: 12px 0;        /* taller buttons */
  font-size: 16px;
  font-weight: 600;
  border-radius: 0;       /* remove pill look */
  text-align: center;
  margin: 0;              /* no gaps */
}
</style>

  <!-- Js -->
        <script>
  document.querySelectorAll('.leadForm').forEach((form) => {
    form.addEventListener('submit', async function (e) {
      e.preventDefault();

      const formData = new FormData(form);
      const formObject = {};
      const submitButton = form.querySelector('.SubmitBtnEnq');

      // Get unique form ID to find the corresponding success box
      const formId = form.getAttribute('data-form-id');
     const successBox = document.querySelector(`.successMessageBro[data-form-id="${formId}"]`);

      submitButton.innerHTML = 'Submitting...';
      submitButton.disabled = true;

      formData.forEach((value, key) => {
        formObject[key] = value;
      });

      try {
        const response = await fetch('https://api2.quantumspark.in/api/v2/lead/create', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'apiKey': '7e0da9eb-effc-4073-beff-926a727bd6b9',
            'secretKey': '4d7b247173b8ea6130206b0669d20b05'
          },
          body: JSON.stringify(formObject),
        });

        console.log('Response status:', response.status);

        if (response.status === 201 || response.status === 409) {
          showSuccessMessage(form, successBox, "Thank you! Your details have been captured. Please wait while we contact you.");
        } else {
          const result = await response.text();
          showErrorMessage("Something went wrong: " + result);
        }

      } catch (error) {
        console.error('Network error:', error);
        showErrorMessage("There was an error submitting your details. Please try again later.");
      } finally {
        submitButton.innerHTML = 'Submit';
        submitButton.disabled = false;
      }
    });
  });

  function showSuccessMessage(form, successBox, message) {
    form.reset();
    form.style.display = 'none';

    if (successBox) {
      successBox.innerText = message;
      successBox.style.display = 'block';
    } else {
      console.warn("No success message container found.");
    }
  }

  function showErrorMessage(message) {
    alert(message);
  }
</script>
        
        
 <script>
  const countrySelects = document.querySelectorAll('select[name="countryCode"]');

  countrySelects.forEach((select) => {
    select.addEventListener("change", () => {
      const form = select.closest("form") || select.parentElement;
      const numberInput = form.querySelector('input[name="number"]');

      const selectedValue = select.value;

      if (selectedValue === "c" || selectedValue === "+91") {
        numberInput.type = "tel";
        numberInput.setAttribute("maxlength", "10");
        numberInput.setAttribute("pattern", "[6789][0-9]{9}");
      } else {
        numberInput.type = "tel";
        numberInput.removeAttribute("maxlength");
        numberInput.removeAttribute("pattern");
      }
    });
  });
</script>




<!-- Bootstrap Icons (if not already included) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


      
         <!--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">  </script>-->
         <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swiper.bundle.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/fslightbox.js"></script>
        <script src="assets/js/main.js"></script>
    </body>


</html>