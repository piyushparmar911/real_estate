@extends('layouts.app')

@section('title', 'Home - FindHouse')

@section('content')
  <!-- Home Design -->
  <section class="home-three bg-img3">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="home3_home_content">
            <h1>Your Property, Our Priority.</h1>
            <h4>From as low as $10 per day with limited time offer discounts</h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="home3_home_content">
            <a class="popup_video_btn popup-iframe popup-youtube" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y"><i class="flaticon-play"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="home_adv_srch_opt home3">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Buy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
              </li>
            </ul>
            <div class="tab-content home1_adsrchfrm" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="home1-advnc-search home3">
                  <ul class="h1ads_1st_list mb0">
                    <li class="list-inline-item">
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter keyword...">
                      </div>
                    </li>
                    <li class="list-inline-item">
                      <div class="search_option_two">
                        <div class="candidate_revew_select">
                          <select class="selectpicker w100 show-tick">
                            <option>Property Type</option>
                            <option>Apartment</option>
                            <option>Bungalow</option>
                            <option>Condo</option>
                            <option>House</option>
                            <option>Land</option>
                            <option>Single Family</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li class="list-inline-item">
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
                        <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                      </div>
                    </li>
                    <li class="list-inline-item">
                      <div class="small_dropdown2 home3">
                        <div id="prncgs" class="btn dd_btn">
                          <span>Price</span>
                          <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                        </div>
                        <div class="dd_content2">
                          <div class="pricing_acontent">
                            <span id="slider-range-value1"></span>
                            <span id="slider-range-value2"></span>
                            <div id="slider"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="custome_fields_520 list-inline-item">
                      <div class="navbered">
                        <div class="mega-dropdown home3">
                          <span id="show_advbtn" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
                          <div class="dropdown-content">
                            <div class="row p15">
                              <div class="col-lg-12">
                                <h4 class="text-thm3">Amenities</h4>
                              </div>
                              <!-- amenities lists (truncated for brevity) -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Properties -->
  <section id="feature-property" class="feature-property mt80 pb0">
    <div class="container-fluid ovh">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-title mb40">
            <h2>Featured Properties</h2>
            <p>Handpicked properties by our team. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="feature_property_home3_slider">
            <div class="item">
              <div class="feat_property home3">
                <div class="thumb">
                  <img class="img-whp" src="{{ asset('images/property/fp1.jpg') }}" alt="fp1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Rent</a></li>
                      <li class="list-inline-item"><a href="#">Featured</a></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Renovated Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property home3">
                <div class="thumb">
                  <img class="img-whp" src="{{ asset('images/property/fp2.jpg') }}" alt="fp2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Rent</a></li>
                      <li class="list-inline-item dn"></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Villa</p>
                    <h4>Gorgeous Villa Bay View</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property home3">
                <div class="thumb">
                  <img class="img-whp" src="{{ asset('images/property/fp3.jpg') }}" alt="fp3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Sale</a></li>
                      <li class="list-inline-item dn"></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Single Family Home</p>
                    <h4>Luxury Family Home</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property home3">
                <div class="thumb">
                  <img class="img-whp" src="{{ asset('images/property/fp1.jpg') }}" alt="fp1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Rent</a></li>
                      <li class="list-inline-item dn"></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Modern Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Property Cities -->
  <section id="property-city" class="property-city pt0 pb30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-title">
            <h2>Find Properties in These Cities</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
          <div class="properti_city">
            <div class="thumb"><img class="img-fluid w100" src="{{ asset('images/property/pc7.jpg') }}" alt="pc7.jpg"></div>
            <div class="overlay">
              <div class="details">
                <h4>Miami</h4>
                <p>24 Properties</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
          <div class="properti_city">
            <div class="thumb"><img class="img-fluid w100" src="{{ asset('images/property/pc8.jpg') }}" alt="pc8.jpg"></div>
            <div class="overlay">
              <div class="details">
                <h4>Los Angeles</h4>
                <p>18 Properties</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
          <div class="properti_city">
            <div class="thumb"><img class="img-fluid w100" src="{{ asset('images/property/pc9.jpg') }}" alt="pc9.jpg"></div>
            <div class="overlay">
              <div class="details">
                <h4>New York</h4>
                <p>89 Properties</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
          <div class="properti_city">
            <div class="thumb"><img class="img-fluid w100" src="{{ asset('images/property/pc10.jpg') }}" alt="pc10.jpg"></div>
            <div class="overlay">
              <div class="details">
                <h4>Florida</h4>
                <p>47 Properties</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
          <div class="properti_city">
            <div class="thumb"><img class="img-fluid w100" src="{{ asset('images/property/pc11.jpg') }}" alt="pc11.jpg"></div>
            <div class="overlay">
              <div class="details">
                <h4>Orlando</h4>
                <p>89 Properties</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Property Search -->
  <section id="property-search" class="property-search bg-img4">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="search_smart_property text-center">
            <h2>Search Smarter, From Anywhere</h2>
            <p>Power your search with our Resideo real estate platform, for timely listings and a seamless experience.</p>
            <button class="btn ssp_btn">Search Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Best Property -->
  <section id="best-property" class="best-property pt100 pb0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-title">
            <h2>Best Property Value</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Sample card (duplicate or loop in future) -->
        <div class="col-sm-6 col-lg-4">
          <div class="feat_property home3">
            <div class="thumb">
              <img class="img-whp" src="{{ asset('images/property/fp4.jpg') }}" alt="fp4.jpg">
              <div class="thmb_cntnt">
                <ul class="tag mb0">
                  <li class="list-inline-item"><a href="#">For Rent</a></li>
                  <li class="list-inline-item dn"></li>
                </ul>
                <ul class="icon mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
              </div>
            </div>
            <div class="details">
              <div class="tc_content">
                <p class="text-thm">Villa</p>
                <h4>Gorgeous Villa Bay View</h4>
                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                <ul class="prop_details mb0">
                  <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                  <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                  <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Repeat more cards as needed (omitted for brevity) -->
      </div>
    </div>
  </section>

  <!-- Our Agents -->
  <section id="our-agents" class="our-agents pt40 pb30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-title">
            <h2>Our Agents</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
          <div class="our_agent">
            <div class="thumb">
              <img class="img-fluid w100" src="{{ asset('images/team/5.jpg') }}" alt="5.jpg">
              <div class="overylay">
                <ul class="social_icon">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <h4>Jennifer Barton</h4>
              <p>Broker <a class="float-right" href="#">4.5 <i class="fa fa-star color-golden"></i></a></p>
            </div>
          </div>
        </div>
        <!-- Repeat agent cards as needed -->
      </div>
    </div>
  </section>
@endsection
