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

            <div class="row">
                <div class="col-md-3 border-right mx-auto ">

                </div>
                <div class=" border-right">
                    <div class="p-3 pb-5">
                        <div class="d-flex justify-content-between align-items-center my-3 ">
                            <h4 class="text-right text-primary">Qualifications and Courses</h4>
                            <i class="bi bi-plus h2 text-primary  " style="cursor: pointer;"></i>

                        </div>
                        <div class="qualification">

                            <div class="row my-3 qualification-card">

                                <div class=" shadow-sm mx-auto py-3 bg-white col-10 ">
                                    <div class="d-flex justify-content-between align-items-center px-md-2">
                                        <div class="col-10">
                                            <p class="h5 text-primary">Twitter Sentiment Analysis
                                            </p>
                                            <p class="text-black country p-0 m-0"> <span class="fw-bold">Provider :
                                                </span>
                                                Coursera</p>

                                            <p class="text-black">Certificate of Twitter Sentiment Analysis from
                                                Coursera.Certificate of Twitter Certificate of Twitter Sentiment
                                                Analysis from Coursera.


                                            </p>
                                        </div>
                                        <div class="col-2 align-self-start">
                                            <i class="bi bi-trash text-primary h5 mx-1  trash" style="cursor: pointer;"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                                            <i class="bi bi-pencil-square text-primary h5  mx-1 modify"
                                                style="cursor: pointer; " data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3 qualification-card">

                                <div class=" shadow-sm mx-auto py-3 bg-white col-10 ">
                                    <div class="d-flex justify-content-between align-items-center px-md-2">
                                        <div class="col-10">
                                            <p class="h5 text-primary">Twitter Sentiment Analysis
                                            </p>
                                            <p class="text-black country p-0 m-0"> <span class="fw-bold">Provider :
                                                </span>
                                                Coursera</p>

                                            <p class="text-black">Certificate of Twitter Sentiment Analysis from
                                                Coursera.Certificate of Twitter Certificate of Twitter Sentiment
                                                Analysis from Coursera.


                                            </p>
                                        </div>
                                        <div class="col-2 align-self-start">
                                            <i class="bi bi-trash text-primary h5 mx-1  trash" style="cursor: pointer;"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                                            <i class="bi bi-pencil-square text-primary h5  mx-1 modify"
                                                style="cursor: pointer;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3 qualification-card">

                                <div class=" shadow-sm mx-auto py-3 bg-white col-10 ">
                                    <div class="d-flex justify-content-between align-items-center px-md-2">
                                        <div class="col-10">
                                            <p class="h5 text-primary">Twitter Sentiment Analysis
                                            </p>
                                            <p class="text-black country p-0 m-0"> <span class="fw-bold">Provider :
                                                </span>
                                                Coursera</p>

                                            <p class="text-black">Certificate of Twitter Sentiment Analysis from
                                                Coursera.Certificate of Twitter Certificate of Twitter Sentiment
                                                Analysis from Coursera.


                                            </p>
                                        </div>
                                        <div class="col-2 align-self-start">
                                            <i class="bi bi-trash text-primary h5 mx-1  trash" style="cursor: pointer;"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                                            <i class="bi bi-pencil-square text-primary h5  mx-1 modify"
                                                style="cursor: pointer;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- Modal -->
    <!-- <div
    class="modal fade"
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
          <button type="button" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div> -->
</section>
@extends('_footer')