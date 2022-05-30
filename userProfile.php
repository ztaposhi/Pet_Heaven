<?php include 'header.php';?>



        <!-- user profile information part start  -->
        <section class="fBlood">

            


            <div class="container">
                <div class="row justify-content-center pt-5">

                    <!-- nav start  -->
                     <nav style="box-shadow:none !important; background: #ffffff;"  class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a style="font-weight: 600;" class="navbar-brand">Profile information</a>  
                          <ul class="navbar-nav ">
                            <!-- Avatar -->
                            <li class="nav-item dropdown">
                              <a
                                class="nav-link dropdown-toggle d-flex align-items-center"
                                href="#"
                                id="navbarDropdownMenuLink"
                                role="button"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <img
                                  src="img/donor.jpg"
                                  class="rounded-circle"
                                  height="22"
                                  alt=""
                                  loading="lazy"
                                />
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="userProfile.php">My profile</a></li>
                                <li><a class="dropdown-item" href="editProfile.php">Edit Profile</a></li>
                                
                                <?php if(isset($_SESSION['USER_LOGIN'])){ ?>

                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
<?php } ?>

                              </ul>
                            </li>
                          </ul>
                        </div>
                      </nav>
                    <!-- nav end -->
                   



                    <div class="pro-img">
                        <div class=" donorImg ">
                          <center> <img class="img-fluid rounded-circle p-5" src="img/donor.jpg" alt="">
                            </center>
                          
                        </div>
                      </div>
                      
                    <div class="col-md-7 col-lg-7 col-sm-12 p-5">

                        <ul style="list-style-type:none;" class="list-group list-group-flush">
                            <li style="font-weight: 600;" class="m-3 mb-0">Name</li>
                            <li class="list-group-item m-1">Protik Kumar Paul</li>

                            <li style="font-weight: 600;" class="m-3 mb-0">Email</li>
                            <li class="list-group-item m-1">protik@gmail.com</li>

                            <li style="font-weight: 600;" class="m-3 mb-0">Phone Number</li>
                            <li class="list-group-item m-1">+880 1782 877 345</li>

                            <li style="font-weight: 600;" class="m-3 mb-0">Blood Group</li>
                            <li class="list-group-item m-1">O Positive (O+)</li>

                            <li style="font-weight: 600;" class="m-3 mb-0">City Name</li>
                            <li class="list-group-item m-1">Sylhet</li>

                            <li style="font-weight: 600;" class="m-3 mb-0">Zip Code</li>
                            <li class="list-group-item m-1">3100</li>

                            <li style="font-weight: 600;" class="m-3 mb-0">Adress</li>
                            <li class="list-group-item m-1">Raynogor, Mirabazar, Sylhet</li>
                          </ul>

                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- user profile information part end -->
        


        <?php include 'footer.php';?>