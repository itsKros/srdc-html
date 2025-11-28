 <?php include('header.php'); ?>






    <!-- Details Hero Section STARTS-->

  <section class="careersHero" id="CareersHeroSection">
    
    <div class="container">

    <div class="row title-section col-md-8 ">
        
                <h1>Careers at</h1>
                <h2>Sydney Road Dental Care</h2>
                
                <p>Enjoy our series of educational articles on everything dental. We have created this resource for you, and we are continually adding new articles to provide.</p>
               
            </div>
        </div>
  </section>

    <!-- Hero Section ENDS-->


    <!-- FORM SECTION STARTS -->

    <div class="careersFormTab" id="careersFormSection">
        <div class="container">

            <div class="row careerContainer d-flex">

                <div class="careersFormContent col-md-4">
                    <h1>We are expanding and hiring now!</h1>

                    <h3>Seeking stability and a challenge? Help people daily in a rewarding role where no two days are alike.</h3>

                    <p>We have a supportive work environment to learn and grow and full training is provided so previous experience is not necessary.</p>

                    <p>As a dental assistant you will work directly with our dentists to help make our patient experience pleasant and comfortable.As a clinical assistant you will work closely with our clinical team to help make our patient visits run smoothly.</p>

                    <p>So if customer service and the desire to help others is your passion we would love to hear from you!</p>
                    </div>



                <div class="careersForm col-md-8">
                    <form action="#">

                <div class="form-header">
                <h1 class="fw-semibold">Personal Information</h1>
                <hr class="text-secondary">
                </div>
                      
            <!--DROPDOWN OPTIONS-->    
            <div class="mb-3">
            <label for="position"
            class="form-label">Position you are applying for</label>
            <select id="position" name="position"
            class="form-select">
            <option value="Dentist">Dentist</option>
            <option value="Dentist">Dental Hygienist</option>
            <option value="Dentist">Dental Assistant</option>
            <option value="Dentist">Oral Surgeon</option>
            <option value="Dentist">Orthodontist</option>
            <option value="other">Other</option>
            </select>
            </div>


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


            <!--EMAIL SECTION-->
            <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
            </div>


            <!--PHONE NUMBER-->
            <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number">
            </div>

            <!--CITY & ZIP-->
            <div class="row">

            <div class="col-md-6">
                <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" id="city" name="city"
            placeholder="City" class="form-control">
            </div>
</div>

            <div class="col-md-6">
                <div class="mb-3">
            <label for="zip" class="form-label">Post Code</label>
            <input type="text" id="zip" name="zip"
            placeholder="Post Code" class="form-control">
            </div>
</div>

            </div>
            <hr>

            <!--WORK HISTORY-->
            <div class="section-header">
                <h1 class="fw-semibold">Work History</h1>
                <p>Previous roles and responsibilities</p>
                <hr class="text-secondary">
            </div>

            <div class="mb-3">
                        <label for="previousExperience" class="form-label">Previous Experience</label>
                        <input type="text" id="previousExperience"
                        name="previousExperience" placeholder="Previous Experience" class="form-control">
            </div>


            <div class="mb-3">
                        <label for="experienceDescription" class="form-label">
                            Previous Experience Description
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