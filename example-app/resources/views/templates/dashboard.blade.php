@extends('_header')

<!-- Profile -->
<section class="profile my-5 mx-auto" id="profile">
    <div class="container row mx-auto justify-content-between" style="margin-top: 5rem">
        <div
            class="d-flex flex-column col-12 col-md-3 flex-shrink-0 py-3 bg-light rounded mx-auto shadow w-sm-100 mb-5 mb-md-0   ">
            <div class="p-1 w-100 d-flex justify-content-center ">
                <img src="../images/profile.jpg" alt="" width="120" height="120" class="rounded-circle  mx-auto " />
            </div>

            <div class=" mx-auto">

                <p class="fs-6 fw-bold mx-auto text-primary ">Shatha Al-Bajly</p>
            </div>
            <hr />
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="dashboard" class="nav-link link-dark" aria-current="page">

                        <svg class="bi me-2" width="16" height="16">

                            <use xlink:href="#home"></use>
                        </svg>
                        Personal Data
                    </a>
                </li>
                <li>
                    <a href="experience" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Experience
                    </a>
                </li>
                <li>
                    <a href="skills" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Skills
                    </a>
                </li>
                <li>
                    <a href="qualification" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Educational and Courses
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-12 col-md-8 bg-light rounded mx-auto shadow ">
            <!-- <div class="row">
            <div class="col">
              <img
                src="../images/profile.jpg"
                alt=""
                width="70"
                height="70"
                class="rounded-circle me-2"
              />
            </div>
            <div class="col">
              <p class="h3">Shatha Al-Bajly</p>
            </div>
          </div> -->
            <div class="row">
                <div class="col-md-3 border-right mx-auto ">

                </div>
                <div class=" border-right">
                    <div class="p-3 pb-5">
                        <div class="d-flex justify-content-between align-items-center my-3 ">
                            <h4 class="text-right text-primary">Personal Data</h4>
                            <i class="bi bi-plus h2 text-primary  " style="cursor: pointer;"></i>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="first name" value="">
                            </div>
                            <div class="col-md-6"><label class="labels">Surname</label><input type="text"
                                    class="form-control" value="" placeholder="surname"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text"
                                    class="form-control" placeholder="enter phone number" value=""></div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                    class="form-control" placeholder="enter address" value=""></div>
                            <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                    class="form-control" placeholder="enter email id" value=""></div>
                            <div class="col-md-12"><label class="labels">Education</label><input type="text"
                                    class="form-control" placeholder="education" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                    class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                                    class="form-control" value="" placeholder="state"></div>
                        </div>
                        <div class="mt-4 text-start"><button class="btn btn-primary profile-button" type="button">Save
                                Profile</button></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
</section>

@extends('_footer')