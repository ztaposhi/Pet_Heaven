<?php include 'header.php';?>

    
        <section class="loginPage p-5">
            <div class="container mt-5">
                <div style="full-height: 100%;" class="row">
                    <center>
                        <div style="background: #ffffff;" >
                            <div class="fBloodForm">
                         <form method="post" action="#">
                            <h3>Sign Up</h3>
                                    
                            <div class="row mb-4 mt-5">
                             <!-- Name input -->
                            <div class="col">
                               <div class="form-outline">
                                  <input type="text" id="name" name="name" class="form-control" />
                                     <label class="form-label" for="form3Example1">Full Name
                                      </label>
                                   </div>
                                   <span class="field_error" id="name_error"></span>
                                 </div>
                                    </div>
                                    <div class="row mb-4">
                                        <!-- Number input -->

                            <div class="col">
                            <div class="form-outline">
                             <input type="number" id="phone" name="phone" class="form-control" />
                            <label class="form-label" for="form3Example1">Phone Number</label>
                            </div>
                            <span class="field_error" id="phone_error"></span>
                            </div>
                            </div>

                        <div class="row mb-4">
                        <!-- Email input -->
                        <div class="col">
                         <div class="form-outline">
                         <input type="email" id="email"  name="email" class="form-control" />
                         <label class="form-label" for="form3Example2">Email address</label>
                         </div>
                         <span class="field_error" id="email_error"></span>
                            </div>
                                        <!-- Email input -->
                            <div class="col">
                                <div class="form-outline">
                                 <input type="password" id="password" name="password" class="form-control" />
                                <label class="form-label" for="form3Example2">password</label>
                                </div>
                                <span class="field_error" id="password_error"></span>
                             </div>
                        </div>

                                    <!-- Submit button -->
                                    <button type="button" class="btn btn-danger float-start" onclick="user_signup()">
                                        Sign Up
                                    </button>
                                </form>

                                <div class="signupWithFG">
                                    <p style="color: rgb(165, 165, 165);" class="px-2">
                                        or sign up with other account
                                    </p>
                                    <!-- Facebook -->
                                    <a style="color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f fa-lg fa-fw"> </i>Sign up with Fcebook</a>

                                    <!-- Google -->
                                    <a class="px-3" style="color: #dd4b39;" href="#!" role="button"><i class="fab fa-google fa-lg fa-fw"></i>Sign up with Google</a>
                                </div>
                            </div>
                            
                        </div>
                    </center>
                </div>
            </div>
        </section>

        <?php include 'footer.php';?>