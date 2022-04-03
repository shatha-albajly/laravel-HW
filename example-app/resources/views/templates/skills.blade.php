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
        <div class="col-12 col-md-5  bg-light rounded mx-auto shadow ">
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

                <div class=" border-right">
                    <div class="p-3 pb-5">
                        <div class="d-flex justify-content-between align-items-center mb-3 ">
                            <h4 class="text-right text-primary">Skills</h4>
                            <!-- <i class="bi bi-plus h2 text-primary " style="cursor: pointer;"></i> -->
                            <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill"><i
                                    class="bi bi-plus h2 text-primary"></i></a>


                            <!-- <button type="button" class="btn btn-primary btn-sm bg-white plus" data-toggle="modal" data-target="#changeCity"><i class="bi bi-plus h2 text-primary " style="cursor: pointer;"></i></button> -->

                        </div>
                        <div class="skills">
                            <span class="p-2 py-1 mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                javascript
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1 mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                php
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                python
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1  mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                html
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2  py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                css
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                jquery
                                <i class="bi bi-x" style="cursor: pointer;
                            " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1  mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                larvel
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                c++
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-block  rounded-pill bg-primary text-white">
                                java
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                figma
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                web design
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-block  rounded-pill bg-primary text-white">
                                database
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                mysql
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>
                            <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                                nosql
                                <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"></i>
                            </span>




                        </div>


                    </div>
                </div>

            </div>

        </div>
        <div class="col-12 col-md-3"></div>

    </div>
    </div>
    <div class="modal fade" id="addSkill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Skill</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text " class="form-control">
                    </form>
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <!-- <div
    class="modal fade "
    id="staticBackdrop"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">Do you want t delete?</div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            No
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Yes</button>

          <!-- <button type="button" class="btn btn-primary remove">Yes</button> -->
    </div>
    </div>
    </div>
    </div> -->
</section>

@extends('_footer')