@extends('site3assets.master')

@section('content')

  <!-- trending section -->

  <section class="trending_section layout_padding">
    <div id="accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Trending Categories
                </h2>
              </div>
              <div class="tab_container">
                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">
                  <div class="number">
                    <h5>
                      01
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Chairs
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  <div class="number">
                    <h5>
                      02
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Tables
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  <div class="number">
                    <h5>
                      03
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Bads
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="false" aria-controls="collapseFour">
                  <div class="number">
                    <h5>
                      04
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Furnitures
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-1.jpg') }}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-2.jpg') }}" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-3.jpg') }}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-4.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-3.jpg') }}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-4.jpg') }}" alt="">
                  </div>
                </div>
                <div class="box b-2">

                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-1.jpg') }}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-2.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-4.jpg') }}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-1.jpg') }}" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-3.jpg') }}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-2.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-1.jpg') }}" alt="">
                  </div>

                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-4.jpg') }}" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-3.jpg') }}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{ asset('site3assets/images/t-2.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end trending section -->


  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          Digitf
        </h2>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="{{ asset('site3assets/images/location-white.png') }}" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{ asset('site3assets/images/telephone-white.png') }}" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{ asset('site3assets/images/envelope-white.png') }}" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="">
                  <div class="insta-box b-1">
                    <img src="{{ asset('site3assets/images/i-1.jpg" alt=') }}"">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-2">
                    <img src="{{ asset('site3assets/images/i-2.jpg') }}" alt="">
                  </div>
                </a>
              </div>

              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="{{ asset('site3assets/images/i-3.jpg') }}" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="{{ asset('site3assets/images/i-4.jpg') }}" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="{{ asset('site3assets/images/i-5.jpg') }}" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="{{ asset('site3assets/images/i-6.jpg') }}" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="{{ asset('site3assets/images/fb.png') }}" alt="">
              </a>
              <a href="">
                <img src="{{ asset('site3assets/images/twitter.png') }}" alt="">
              </a>
              <a href="">
                <img src="{{ asset('site3assets/images/linkedin.png') }}" alt="">
              </a>
              <a href="">
                <img src="{{ asset('site3assets/images/youtube.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->
@endsection
