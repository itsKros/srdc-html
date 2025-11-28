 <?php include('header.php'); ?>

  <!-- Details Hero Section STARTS-->

  <section class="contactHerosection" id="contactHeroSection">
    
    <div class="container d-flex">

    <div class="row col-md-8 ">
        <div class="title-section ">
                <h1>Contact Us</h1>
                
                <p>As a new patient to our clinic, we will do our best to ensure this, and every visit, is as welcoming and comfortable as possible. Read below to see what you can expect on your first visit.</p>
                <a href="#" class="btn btn-light contact-btn">Contact Us</a>
                </div>

            </div>
        </div>
  </section>

    <!-- Hero Section ENDS-->


    <!-- FORM SECTION STARTS -->

    <div class="contactFormTab" id="contactFormSection">
        <div class="container">

            <div class="row contactContainer d-flex">

                <div class="contactFormContent col-md-5">
                

                    <p>Opening Hours</p>

                    <hr class="text-secondary mb-0">

                    <div class="contact-timing-container d-flex justify-content-between">
                        <h3>Monday-Friday</h3>
                        <h3>8:30pm-5:30pm</h3>
                    </div>

                           <hr class="text-secondary my-0">

                     <div class="contact-timing-container d-flex justify-content-between">
                        <h3>Saturday:</h3>
                        <p>Closed</p>
                    </div>

                    <hr class="text-secondary my-0">

                    <div class="contact-timing-container d-flex justify-content-between">
                        <h3>Sunday:</h3>
                        <p>Closed</p>
                    </div>

                    <img class="contact-map-image" src="assets/imgs/Contact-Us/Contact-Map.webp" alt="">

                    </div>



                <div class="contactForm col-md-8">
                    <form action="#">

                <div class="form-header">
                <h1 class="fw-semibold">We'd love to hear from you!</h1>
                <p>Please fill out the form and we'll get back to you as soon as possible.</p>
                <hr class="text-secondary">
                </div>
                      
            <!--DROPDOWN OPTIONS-->    

            <!--NAME SECTION-->
            <div class="row">
            <div class="col-md-6">
            <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" id="fname" name="fname"
             placeholder="First Name" class="form-control">
            </div>
            </div>

            <div class="col-md-6">
            <div class="mb-3">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname"
            placeholder="Last Name" class="form-control"><br>
            </div>
            </div>
            </div>


            <!--PHONE NUMBER-->
            <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number">
            </div>


            <!--EMAIL SECTION-->
            <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
            </div>


            <!--INTERESTED IN-->

            <div class="mb-3">
            <label for="position"
            class="form-label">I am interested in</label>
            <select id="position" name="position"
            class="form-select">
            <option value="Dentist">Select</option>
            <option value="Dentist">Select</option>
            <option value="Dentist">Select</option>
            <option value="Dentist">Select</option>
            <option value="Dentist">Select</option>
            <option value="other">Other</option>
            </select>
            </div>


            <!--Like To-->

            

            <div class="mb-3">
            <label for="position"
            class="form-label">I’d like to</label>
            <select id="position" name="position"
            class="form-select"
            >
            <option value="Dentist">Select</option>
            <option value="Dentist">Select</option>
            <option value="Dentist">Select</option>
            <option value="Dentist">Select</option>
            <option value="Dentist">Select</option>
            <option value="other">Other</option>
            </select>
            </div>





           

            <!--WORK HISTORY-->
            <div class="mb-3 contact-text-area">
                        <label for="experienceDescription" class="form-label">
                          How can we help?
                        </label>
                        <textarea id="experienceDescription" name="experienceDescription"
                        placeholder="Write here..." class="form-control"></textarea>
            </div>

                    <!--SUBMIT BUTTON-->
                    <div class="d-flex justify-content-end pt-4 pb-4">

                        <button type="submit" class="btn btn-submit">
                            Submit Application
                        </button>
                    </div>   
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FORM SECTION ENDS -->


<?php include('footer.php'); ?>