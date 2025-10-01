@extends('layouts.app')

@section('title', 'Luxury Family Home - FindHouse')

@section('content')
<!-- Property Image Gallery -->
<div class="single_page_listing_style">
  <div class="container-fluid p0">
    <div class="row">
      <div class="col-sm-6 col-lg-6 p0">
        <div class="row m0">
          <div class="col-lg-12 p0">
            <div class="spls_style_one pr1 1px">
              <img class="img-fluid w100" src="{{ asset('images/property/ls1.jpg') }}" alt="ls1.jpg">
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-6 p0">
        <div class="row m0">
          <div class="col-sm-6 col-lg-6 p0">
            <div class="spls_style_one">
              <a class="popup-img" href="{{ asset('images/property/ls2.jpg') }}"><img class="img-fluid w100" src="{{ asset('images/property/ls2.jpg') }}" alt="ls2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6 p0">
            <div class="spls_style_one">
              <a class="popup-img" href="{{ asset('images/property/ls3.jpg') }}"><img class="img-fluid w100" src="{{ asset('images/property/ls3.jpg') }}" alt="ls3.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6 p0">
            <div class="spls_style_one">
              <a class="popup-img" href="{{ asset('images/property/ls4.jpg') }}"><img class="img-fluid w100" src="{{ asset('images/property/ls4.jpg') }}" alt="ls4.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6 p0">
            <div class="spls_style_one">
              <a class="popup-img" href="{{ asset('images/property/ls5.jpg') }}"><img class="img-fluid w100" src="{{ asset('images/property/ls5.jpg') }}" alt="ls5.jpg"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Property Actions Bar -->
<section class="p0">
  <div class="container">
    <div class="row listing_single_row">
      <div class="col-sm-6 col-lg-7 col-xl-8">
        <div class="single_property_title">
          <a href="{{ asset('images/property/ls1.jpg') }}" class="upload_btn popup-img"><span class="flaticon-photo-camera"></span> View Photos</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-5 col-xl-4">
        <div class="single_property_social_share">
          <div class="spss style2 mt10 text-right tal-400">
            <ul class="mb0">
              <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Agent Single Grid View -->
<section class="our-agent-single bgc-f7 pb30-991">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 mt50">
        <div class="row">
          <div class="col-lg-12">
            <div class="listing_single_description2 mt30-767 mb30-767">
              <div class="single_property_title">
                <h2>Luxury Family Home</h2>
                <p>1421 San Pedro St, Los Angeles, CA 90015</p>
              </div>
              <div class="single_property_social_share style2">
                <div class="price">
                  <h2>$13,000<small>/mo</small></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="listing_single_description style2">
              <div class="lsd_list">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#">Apartment</a></li>
                  <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                  <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                  <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                </ul>
              </div>
              <h4 class="mb30">Description</h4>
              <p class="mb25">Evans Tower very high demand corner junior one bedroom plus a large balcony boasting full open NYC views. You need to see the views to believe them. Mint condition with new hardwood floors. Lots of closets plus washer and dryer.</p>
              <p class="gpara second_para white_goverlay mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <p class="mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
                  <p class="mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
                </div>
              </div>
              <p class="overlay_close">
                <a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Show More <span class="flaticon-download-1 fz12"></span>
                </a>
              </p>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="additional_details">
              <div class="row">
                <div class="col-lg-12">
                  <h4 class="mb15">Property Details</h4>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                  <ul class="list-inline-item">
                    <li><p>Property ID :</p></li>
                    <li><p>Price :</p></li>
                    <li><p>Property Size :</p></li>
                    <li><p>Year Built :</p></li>
                  </ul>
                  <ul class="list-inline-item">
                    <li><p><span>HZ27</span></p></li>
                    <li><p><span>$130,000</span></p></li>
                    <li><p><span>1560 Sq Ft</span></p></li>
                    <li><p><span>2016-01-09</span></p></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                  <ul class="list-inline-item">
                    <li><p>Bedrooms :</p></li>
                    <li><p>Bathrooms :</p></li>
                    <li><p>Garage :</p></li>
                    <li><p>Garage Size :</p></li>
                  </ul>
                  <ul class="list-inline-item">
                    <li><p><span>8</span></p></li>
                    <li><p><span>4</span></p></li>
                    <li><p><span>2</span></p></li>
                    <li><p><span>200 SqFt</span></p></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                  <ul class="list-inline-item">
                    <li><p>Property Type :</p></li>
                    <li><p>Property Status :</p></li>
                  </ul>
                  <ul class="list-inline-item">
                    <li><p><span>Apartment</span></p></li>
                    <li><p><span>For Sale</span></p></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="additional_details">
              <div class="row">
                <div class="col-lg-12">
                  <h4 class="mb15">Additional details</h4>
                </div>
                <div class="col-md-6 col-lg-6">
                  <ul class="list-inline-item">
                    <li><p>Deposit :</p></li>
                    <li><p>Pool Size :</p></li>
                    <li><p>Additional Rooms :</p></li>
                  </ul>
                  <ul class="list-inline-item">
                    <li><p><span>20%</span></p></li>
                    <li><p><span>300 Sqft</span></p></li>
                    <li><p><span>Guest Bath</span></p></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-6">
                  <ul class="list-inline-item">
                    <li><p>Last remodel year :</p></li>
                    <li><p>Amenities :</p></li>
                    <li><p>Equipment :</p></li>
                  </ul>
                  <ul class="list-inline-item">
                    <li><p><span>1987</span></p></li>
                    <li><p><span>Clubhouse</span></p></li>
                    <li><p><span>Grill - Gas</span></p></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="property_attachment_area">
              <h4 class="mb30">Property Attachments</h4>
              <div class="iba_container style2">
                <div class="icon_box_area style2">
                  <div class="score"><span class="flaticon-document text-thm fz30"></span></div>
                  <div class="details">
                    <h5><span class="flaticon-download text-thm pr10"></span> Demo Word Document</h5>
                  </div>
                </div>
                <div class="icon_box_area style2">
                  <div class="score"><span class="flaticon-pdf text-thm fz30"></span></div>
                  <div class="details">
                    <h5><span class="flaticon-download text-thm pr10"></span> Demo pdf Document</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="application_statics mt30">
              <div class="row">
                <div class="col-lg-12">
                  <h4 class="mb10">Features</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <ul class="order_list list-inline-item">
                    <li><a href="#"><span class="flaticon-tick"></span>Air Conditioning</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Barbeque</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Dryer</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Gym</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Laundry</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <ul class="order_list list-inline-item">
                    <li><a href="#"><span class="flaticon-tick"></span>Lawn</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Microwave</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Outdoor Shower</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Refrigerator</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Sauna</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <ul class="order_list list-inline-item">
                    <li><a href="#"><span class="flaticon-tick"></span>Swimming Pool</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>TV Cable</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Washer</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>WiFi</a></li>
                    <li><a href="#"><span class="flaticon-tick"></span>Window Coverings</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="application_statics mt30">
              <h4 class="mb30">Location <small class="float-right">1421 San Pedro St, Los Angeles, CA 90015</small></h4>
              <div class="property_video p0">
                <div class="thumb">
                  <div class="h400" id="map-canvas"></div>
                  <div class="overlay_icon">
                    <a href="#"><img class="map_img_icon" src="{{ asset('images/header-logo.png') }}" alt="header-logo.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <h4 class="mt30 mb30">Similar Properties</h4>
          </div>
          <div class="col-lg-6">
            <div class="feat_property">
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
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                  </ul>
                  <div class="fp_pdate float-right">4 years ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feat_property">
              <div class="thumb">
                <img class="img-whp" src="{{ asset('images/property/fp2.jpg') }}" alt="fp2.jpg">
                <div class="thmb_cntnt">
                  <ul class="tag mb0">
                    <li class="list-inline-item"><a href="#">For Sale</a></li>
                    <li class="list-inline-item"><a href="#">Featured</a></li>
                  </ul>
                  <ul class="icon mb0">
                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                  </ul>
                  <a class="fp_price" href="#">$1,200,000</a>
                </div>
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Luxury Villa</p>
                  <h4>Oceanfront Villa</h4>
                  <p><span class="flaticon-placeholder"></span> 2500 Ocean Drive, Miami Beach, FL 33139</p>
                  <ul class="prop_details mb0">
                    <li class="list-inline-item"><a href="#">Beds: 6</a></li>
                    <li class="list-inline-item"><a href="#">Baths: 4</a></li>
                    <li class="list-inline-item"><a href="#">Sq Ft: 8500</a></li>
                  </ul>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Emma Wilson</a></li>
                  </ul>
                  <div class="fp_pdate float-right">3 months ago</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Sidebar -->
      <div class="col-md-12 col-lg-4">
        <div class="sidebar_listing_list">
          <div class="sidebar_advanced_search_widget">
            <h4 class="mb25">Contact Agent</h4>
            <div class="agent_single_grid_view">
              <div class="aso_agent_content_details">
                <div class="media">
                  <img class="img-fluid" src="{{ asset('images/team/1.jpg') }}" alt="1.jpg">
                  <div class="media-body">
                    <h5 class="mt-0">Ali Tufan</h5>
                    <p>Real Estate Agent</p>
                    <ul class="view_location mb0">
                      <li><a href="#"><span class="flaticon-phone-call"></span></a></li>
                      <li><a href="#"><span class="flaticon-email"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <form class="contact_form" action="#" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input id="form_name" name="form_name" class="form-control" required="required" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input id="form_phone" name="form_phone" class="form-control required" required="required" type="text" placeholder="Phone">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input id="form_email" name="form_email" class="form-control required" required="required" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea id="form_message" name="form_message" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb0">
                    <button type="submit" class="btn btn-thm">Send Message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

