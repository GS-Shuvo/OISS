@extends('layout.guest')

@section('guestcontent')


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12">
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://images.pexels.com/photos/1476321/pexels-photo-1476321.jpeg?auto=compress&cs=tinysrgb&w=1388&h=500&dpr=1"  style="width: 100%; height: 500px;" alt="First slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>First slide</h3>
              <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/257886/pexels-photo-257886.jpeg?auto=compress&cs=tinysrgb&w=1260&h=550&dpr=1"  style="width: 100%; height: 500px;" alt="Second slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>Second slide</h3>
              <p>In numquam omittam sea.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/2582931/pexels-photo-2582931.jpeg?auto=compress&cs=tinysrgb&w=1260&h=500&dpr=1"  style="width: 100%; height: 500px;" alt="Third slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>Third slide</h3>
              <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    
    </div>
  </div>

<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>
          Welcome
          <small class="text-muted">Message</small>
        </h3>
        <hr/>
      </div>
      <div class="card-body">
        <p>
          Stylized implementation of HTML’s <abbr> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help cursor to provide additional context on hover and to users of assistive technologies.
    
            Add .initialism to an abbreviation for a slightly smaller font-size.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>
          Our
          <small class="text-muted">Services</small>
        </h3>
        <hr/>
      </div>
      <div class="card-body">
        <div class="nav-align-top mb-4">
          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
              <button
                type="button"
                class="nav-link active"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-justified-laptop"
                aria-controls="navs-justified-laptop"
                aria-selected="true"
              >
                <i class="tf-icons bx bx-home"></i> Laptop service
                <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span>
              </button>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-justified-desktop"
                aria-controls="navs-justified-desktop"
                aria-selected="false"
              >
                <i class="tf-icons bx bx-user"></i> Desktop service
              </button>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-justified-pinter"
                aria-controls="navs-justified-pinter"
                aria-selected="false"
              >
                <i class="tf-icons bx bx-message-square"></i> Printer & Photocopiers service
              </button>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-justified-corporate"
                aria-controls="navs-justified-corporate"
                aria-selected="false"
              >
                <i class="tf-icons bx bx-message-square"></i> Corporate service
              </button>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-justified-Security"
                aria-controls="navs-justified-Security"
                aria-selected="false"
              >
                <i class="tf-icons bx bx-message-square"></i> Security surveillance
              </button>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-justified-software"
                aria-controls="navs-justified-software"
                aria-selected="false"
              >
                <i class="tf-icons bx bx-message-square"></i> Software installation
              </button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-justified-laptop" role="tabpanel">
              <div class="row">
                <div class="col-md-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="https://images.pexels.com/photos/2312369/pexels-photo-2312369.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                      </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="https://images.pexels.com/photos/2312369/pexels-photo-2312369.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                      </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="https://images.pexels.com/photos/2312369/pexels-photo-2312369.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                      </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="https://images.pexels.com/photos/2312369/pexels-photo-2312369.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                      </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <p>Are you experiencing issues with your laptop or notebook? 
                    IOSS is here to help. As an authorized service center, we have
                     the expertise and resources to handle all types of Laptop repair
                      needs. Whether you have a desktop or a laptop, our team of 
                      certified technicians can diagnose and fix a wide range of 
                      issues, from hardware failures to software problems. We offer 
                      fast turnaround times and competitive pricing, and we stand 
                      behind our work with a 100% satisfaction guarantee. Contact us 
                      today to schedule your computer repair service and get your 
                      device running smoothly again.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-desktop" role="tabpanel">
              <div class="row">
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                      <img
                        class="img-fluid d-flex mx-auto my-4"
                        src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop"
                      />
                      <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                      <a href="javascript:void(0);" class="card-link">Card link</a>
                      <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                      <img
                        class="img-fluid d-flex mx-auto my-4"
                        src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop"
                      />
                      <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                      <a href="javascript:void(0);" class="card-link">Card link</a>
                      <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                      <img
                        class="img-fluid d-flex mx-auto my-4"
                        src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop"
                      />
                      <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                      <a href="javascript:void(0);" class="card-link">Card link</a>
                      <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                      <img
                        class="img-fluid d-flex mx-auto my-4"
                        src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop"
                      />
                      <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                      <a href="javascript:void(0);" class="card-link">Card link</a>
                      <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <p>Are you experiencing issues with your laptop or notebook? 
                    IOSS is here to help. As an authorized service center, we have
                     the expertise and resources to handle all types of Laptop repair
                      needs. Whether you have a desktop or a laptop, our team of 
                      certified technicians can diagnose and fix a wide range of 
                      issues, from hardware failures to software problems. We offer 
                      fast turnaround times and competitive pricing, and we stand 
                      behind our work with a 100% satisfaction guarantee. Contact us 
                      today to schedule your computer repair service and get your 
                      device running smoothly again.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-pinter" role="tabpanel">
              <div class="row">
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <p>Are you experiencing issues with your laptop or notebook? 
                    IOSS is here to help. As an authorized service center, we have
                     the expertise and resources to handle all types of Laptop repair
                      needs. Whether you have a desktop or a laptop, our team of 
                      certified technicians can diagnose and fix a wide range of 
                      issues, from hardware failures to software problems. We offer 
                      fast turnaround times and competitive pricing, and we stand 
                      behind our work with a 100% satisfaction guarantee. Contact us 
                      today to schedule your computer repair service and get your 
                      device running smoothly again.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-corporate" role="tabpanel">
              <div class="row">
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <p>Are you experiencing issues with your laptop or notebook? 
                    IOSS is here to help. As an authorized service center, we have
                     the expertise and resources to handle all types of Laptop repair
                      needs. Whether you have a desktop or a laptop, our team of 
                      certified technicians can diagnose and fix a wide range of 
                      issues, from hardware failures to software problems. We offer 
                      fast turnaround times and competitive pricing, and we stand 
                      behind our work with a 100% satisfaction guarantee. Contact us 
                      today to schedule your computer repair service and get your 
                      device running smoothly again.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-Security" role="tabpanel">
              <div class="row">
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <p>Are you experiencing issues with your laptop or notebook? 
                    IOSS is here to help. As an authorized service center, we have
                     the expertise and resources to handle all types of Laptop repair
                      needs. Whether you have a desktop or a laptop, our team of 
                      certified technicians can diagnose and fix a wide range of 
                      issues, from hardware failures to software problems. We offer 
                      fast turnaround times and competitive pricing, and we stand 
                      behind our work with a 100% satisfaction guarantee. Contact us 
                      today to schedule your computer repair service and get your 
                      device running smoothly again.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-software" role="tabpanel">
              <div class="row">
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.pexels.com/photos/930530/pexels-photo-930530.jpeg?auto=compress&cs=tinysrgb&w=286&h=180&dpr=1" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <p>Are you experiencing issues with your laptop or notebook? 
                    IOSS is here to help. As an authorized service center, we have
                     the expertise and resources to handle all types of Laptop repair
                      needs. Whether you have a desktop or a laptop, our team of 
                      certified technicians can diagnose and fix a wide range of 
                      issues, from hardware failures to software problems. We offer 
                      fast turnaround times and competitive pricing, and we stand 
                      behind our work with a 100% satisfaction guarantee. Contact us 
                      today to schedule your computer repair service and get your 
                      device running smoothly again.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>
          Our
          <small class="text-muted">Team</small>
        </h3>
        <hr/>
      </div>
      <div class="card-body">
        <div class="card-group mb-5">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/elements/4.jpg') }}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This
                content is a little bit longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/elements/5.jpg') }}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This card has supporting text below as a natural lead-in to additional content.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/elements/1.jpg') }}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This
                card has even longer content than the first to show that equal height action.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>

        <div class="card-group mb-5">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/elements/4.jpg') }}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This
                content is a little bit longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/elements/5.jpg') }}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This card has supporting text below as a natural lead-in to additional content.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/img/elements/1.jpg') }}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This
                card has even longer content than the first to show that equal height action.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3>
          Customer
          <small class="text-muted">Feedback</small>
        </h3>
        <hr/>
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Company</label>
            <div class="col-sm-10">
              <input
                type="text"
                class="form-control"
                id="basic-default-company"
                placeholder="ACME Inc."
              />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <input
                  type="text"
                  id="basic-default-email"
                  class="form-control"
                  placeholder="john.doe"
                  aria-label="john.doe"
                  aria-describedby="basic-default-email2"
                />
                <span class="input-group-text" id="basic-default-email2">@example.com</span>
              </div>
              <div class="form-text">You can use letters, numbers & periods</div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
            <div class="col-sm-10">
              <input
                type="text"
                id="basic-default-phone"
                class="form-control phone-mask"
                placeholder="658 799 8941"
                aria-label="658 799 8941"
                aria-describedby="basic-default-phone"
              />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
            <div class="col-sm-10">
              <textarea
                id="basic-default-message"
                class="form-control"
                placeholder="Hi, Do you have a moment to talk Joe?"
                aria-label="Hi, Do you have a moment to talk Joe?"
                aria-describedby="basic-icon-default-message2"
              ></textarea>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3>
          Our
          <small class="text-muted">Address</small>
        </h3>
        <hr/>
      </div>
      <div class="card-body">
        <dl class="row mt-2">
          <dt class="col-sm-3">Address</dt>
          <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

          <dt class="col-sm-3">Mobile No.</dt>
          <dd class="col-sm-9">
            <p>+88 01756 307427</p>
          </dd>

          <dt class="col-sm-3">Email Address</dt>
          <dd class="col-sm-9">goutom@gmail.com</dd>

        </dl>

      </div>
    </div>
  </div>
</div>




</div>
<!-- / Content -->




@stop
