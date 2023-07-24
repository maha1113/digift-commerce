@extends('site3assets.master')

@section('content')
  <!-- brand section -->

  <section class="brand_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Featured Brands
        </h2>
      </div>
      <div class="brand_container layout_padding2">
        <div class="box">
          <a href="">
            <div class="new">
              <h5>
                New
              </h5>
            </div>
            <div class="img-box">
              <img src="{{ asset('site3assets/images/slider-img.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                $100
              </h6>
              <h6>
                Chair
              </h6>
            </div>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="{{ asset('site3assets/images/slider-img.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                $100
              </h6>
              <h6>
                Chair
              </h6>
            </div>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="{{ asset('site3assets/images/slider-img.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                $100
              </h6>
              <h6>
                Chair
              </h6>
            </div>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="{{ asset('site3assets/images/slider-img.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                $100
              </h6>
              <h6>
                Chair
              </h6>
            </div>
          </a>
        </div>
      </div>
      <a href="" class="brand-btn">
        See More
      </a>
    </div>
  </section>

  <!-- end brand section -->


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
                    <img src="{{ asset('site3assets/images/i-1.jpg') }}" alt="">
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
