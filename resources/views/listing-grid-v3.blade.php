@extends('layouts.app')

@section('title', 'Property Listings - Grid View')

@section('content')
<!-- Listing Grid View -->
<section class="our-listing bgc-f7 pb30-991">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="listing_sidebar dn db-991">
          <div class="sidebar_content_details style3">
            <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
              <div class="sidebar_advanced_search_widget">
                <h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
                <ul class="sasw_list style2 mb0">
                  <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
                      <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                    </div>
                  </li>
                  <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
                      <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                    </div>
                  </li>
                  <li>
                    <div class="search_option_two">
                      <div class="candidate_revew_select">
                        <select class="selectpicker w100 show-tick">
                          <option>Status</option>
                          <option>For Rent</option>
                          <option>For Sale</option>
                          <option>Sold</option>
                        </select>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="search_option_two">
                      <div class="candidate_revew_select">
                        <select class="selectpicker w100 show-tick">
                          <option>Property Type</option>
                          <option>Apartment</option>
                          <option>Villa</option>
                          <option>House</option>
                          <option>Condo</option>
                        </select>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="search_option_button">
                      <button type="submit" class="btn btn-block btn-thm">Search</button>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="dn db-991">
          <div id="main2">
            <span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> Show Filter</span>
          </div>
        </div>
        <div class="breadcrumb_content style2 mt30-767 mb30-767">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-thm" aria-current="page">Property Listings</li>
          </ol>
          <h2 class="breadcrumb_title">Property Listings - Grid View</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-xl-4">
        <div class="sidebar_listing_list dn-991">
          <div class="sidebar_advanced_search_widget">
            <ul class="sasw_list mb0">
              <li class="search_area">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
                  <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                </div>
              </li>
              <li class="search_area">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
                  <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                </div>
              </li>
              <li>
                <div class="search_option_two">
                  <div class="candidate_revew_select">
                    <select class="selectpicker w100 show-tick">
                      <option>Status</option>
                      <option>For Rent</option>
                      <option>For Sale</option>
                      <option>Sold</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                <div class="search_option_two">
                  <div class="candidate_revew_select">
                    <select class="selectpicker w100 show-tick">
                      <option>Property Type</option>
                      <option>Apartment</option>
                      <option>Villa</option>
                      <option>House</option>
                      <option>Condo</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                <div class="small_dropdown2">
                  <div id="prncgs2" class="btn dd_btn">
                    <span>Price</span>
                    <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                  </div>
                  <div class="dd_content2 style2">
                    <div class="pricing_acontent">
                      <input type="text" class="amount" placeholder="$52,239"> 
                      <input type="text" class="amount2" placeholder="$985,14">
                      <div class="slider-range"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="search_option_two">
                  <div class="candidate_revew_select">
                    <select class="selectpicker w100 show-tick">
                      <option>Bathrooms</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4+</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                <div class="search_option_two">
                  <div class="candidate_revew_select">
                    <select class="selectpicker w100 show-tick">
                      <option>Bedrooms</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4+</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                <div class="search_option_button">
                  <button type="submit" class="btn btn-block btn-thm">Search</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-8">
        <div class="row">
          <div class="grid_list_search_result">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
              <div class="left_area tac-xsd">
                <p>9 Search results</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
              <div class="right_area text-right tac-xsd">
                <ul>
                  <li class="list-inline-item"><span class="stts">Status:</span>
                    <select class="selectpicker show-tick">
                      <option>All Status</option>
                      <option>For Rent</option>
                      <option>For Sale</option>
                    </select>
                  </li>
                  <li class="list-inline-item"><span class="shrtby">Sort by:</span>
                    <select class="selectpicker show-tick">
                      <option>Featured First</option>
                      <option>Price Low to High</option>
                      <option>Price High to Low</option>
                      <option>Newest</option>
                    </select>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <div class="feat_property home7">
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
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
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
          <div class="col-md-6 col-lg-6">
            <div class="feat_property home7">
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
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
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
          <div class="col-md-6 col-lg-6">
            <div class="feat_property home7">
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
                  <a class="fp_price" href="#">$850,000</a>
                </div>
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Single Family Home</p>
                  <h4>Luxury Family Home</h4>
                  <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                  <ul class="prop_details mb0">
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 5</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 3</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 6200</a></li>
                  </ul>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Sarah Johnson</a></li>
                  </ul>
                  <div class="fp_pdate float-right">2 years ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="feat_property home7">
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
                  <a class="fp_price" href="#">$2,800<small>/mo</small></a>
                </div>
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Condo</p>
                  <h4>Modern Downtown Condo</h4>
                  <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                  <ul class="prop_details mb0">
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 2</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 1800</a></li>
                  </ul>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="{{ asset('images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Mike Chen</a></li>
                  </ul>
                  <div class="fp_pdate float-right">1 year ago</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mt20">
            <div class="mbp_pagination text-center">
              <ul class="page_navigation">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><span class="flaticon-left-arrow"></span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
