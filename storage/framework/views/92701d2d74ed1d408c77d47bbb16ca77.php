<?php $__env->startSection('title', 'Property Listings - Grid View'); ?>

<?php $__env->startSection('content'); ?>
<!-- Listing Grid View -->
<section class="our-listing bgc-f7 pb30-991">
  <div class="container-fluid p0">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb_content style2 text-center">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="breadcrumb-item active text-thm" aria-current="page">Property Listings</li>
          </ol>
          <h2 class="breadcrumb_title">Property Listings - Grid View</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-xl-3 pl30 pr15 hidden" id="sidebar" style="transition: all 0.3s ease-in-out;">
        <div class="sidebar_listing_list dn-991">
          <div class="sidebar_advanced_search_widget">
            <h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#" onclick="toggleSidebar()" style="color: black; text-decoration: none;"><span class="flaticon-close"></span></a></h4>
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
      <div class="col-lg-12 pl30 pr30" id="mainContent" style="transition: all 0.3s ease-in-out;">
        <div class="row">
          <div class="grid_list_search_result">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
              <div class="left_area tac-xsd d-flex align-items-center">
                <span id="filterIcon" class="flaticon-filter-results-button filter_open_btn mr15 mt-2" onclick="toggleSidebar()" style="cursor: pointer; display: inline-block; color: black; font-size: 18px; padding: 8px; background-color: transparent !important;"></span>
                <p class="mb0 mt-2">9 Search results</p>
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
          <div class="col-md-6 col-lg-3 property-item" style="transition: all 0.3s ease-in-out;">
            <div class="feat_property home7 style4 property-card" style="cursor: pointer;" onclick="window.location.href='<?php echo e(route('listing.single.v2')); ?>'">
              <div class="thumb">
                <img class="img-whp" src="<?php echo e(asset('images/property/fp1.jpg')); ?>" alt="fp1.jpg">
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
                    <li class="list-inline-item"><a href="#"><img src="<?php echo e(asset('images/property/pposter1.png')); ?>" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                  </ul>
                  <div class="fp_pdate float-right">4 years ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 property-item" style="transition: all 0.3s ease-in-out;">
            <div class="feat_property home7 style4 property-card" style="cursor: pointer;" onclick="window.location.href='<?php echo e(route('listing.single.v2')); ?>'">
              <div class="thumb">
                <img class="img-whp" src="<?php echo e(asset('images/property/fp2.jpg')); ?>" alt="fp2.jpg">
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
                    <li class="list-inline-item"><a href="#"><img src="<?php echo e(asset('images/property/pposter1.png')); ?>" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                  </ul>
                  <div class="fp_pdate float-right">4 years ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 property-item" style="transition: all 0.3s ease-in-out;">
            <div class="feat_property home7 style4 property-card" style="cursor: pointer;" onclick="window.location.href='<?php echo e(route('listing.single.v2')); ?>'">
              <div class="thumb">
                <img class="img-whp" src="<?php echo e(asset('images/property/fp3.jpg')); ?>" alt="fp3.jpg">
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
                    <li class="list-inline-item"><a href="#"><img src="<?php echo e(asset('images/property/pposter1.png')); ?>" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Sarah Johnson</a></li>
                  </ul>
                  <div class="fp_pdate float-right">2 years ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 property-item" style="transition: all 0.3s ease-in-out;">
            <div class="feat_property home7 style4 property-card" style="cursor: pointer;" onclick="window.location.href='<?php echo e(route('listing.single.v2')); ?>'">
              <div class="thumb">
                <img class="img-whp" src="<?php echo e(asset('images/property/fp1.jpg')); ?>" alt="fp1.jpg">
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
                    <li class="list-inline-item"><a href="#"><img src="<?php echo e(asset('images/property/pposter1.png')); ?>" alt="pposter1.png"></a></li>
                  <li class="list-inline-item"><a href="#">Mike Chen</a></li>
                  </ul>
                  <div class="fp_pdate float-right">1 year ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 property-item" style="transition: all 0.3s ease-in-out;">
            <div class="feat_property home7 style4 property-card" style="cursor: pointer;" onclick="window.location.href='<?php echo e(route('listing.single.v2')); ?>'">
              <div class="thumb">
                <img class="img-whp" src="<?php echo e(asset('images/property/fp2.jpg')); ?>" alt="fp2.jpg">
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
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 6</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 4</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 8500</a></li>
                  </ul>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="<?php echo e(asset('images/property/pposter1.png')); ?>" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Emma Wilson</a></li>
                  </ul>
                  <div class="fp_pdate float-right">3 months ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 property-item" style="transition: all 0.3s ease-in-out;">
            <div class="feat_property home7 style4 property-card" style="cursor: pointer;" onclick="window.location.href='<?php echo e(route('listing.single.v2')); ?>'">
              <div class="thumb">
                <img class="img-whp" src="<?php echo e(asset('images/property/fp3.jpg')); ?>" alt="fp3.jpg">
                <div class="thmb_cntnt">
                  <ul class="tag mb0">
                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                    <li class="list-inline-item dn"></li>
                  </ul>
                  <ul class="icon mb0">
                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                  </ul>
                  <a class="fp_price" href="#">$3,500<small>/mo</small></a>
                </div>
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Penthouse</p>
                  <h4>Downtown Penthouse</h4>
                  <p><span class="flaticon-placeholder"></span> 800 Main St, New York, NY 10001</p>
                  <ul class="prop_details mb0">
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 3</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 3</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 2500</a></li>
                  </ul>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="<?php echo e(asset('images/property/pposter1.png')); ?>" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">David Brown</a></li>
                  </ul>
                  <div class="fp_pdate float-right">6 months ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 property-item" style="transition: all 0.3s ease-in-out;">
            <div class="feat_property home7 style4 property-card" style="cursor: pointer;" onclick="window.location.href='<?php echo e(route('listing.single.v2')); ?>'">
              <div class="thumb">
                <img class="img-whp" src="<?php echo e(asset('images/property/fp1.jpg')); ?>" alt="fp1.jpg">
                <div class="thmb_cntnt">
                  <ul class="tag mb0">
                    <li class="list-inline-item"><a href="#">For Sale</a></li>
                    <li class="list-inline-item dn"></li>
                  </ul>
                  <ul class="icon mb0">
                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                  </ul>
                  <a class="fp_price" href="#">$750,000</a>
                </div>
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Townhouse</p>
                  <h4>Modern Townhouse</h4>
                  <p><span class="flaticon-placeholder"></span> 1200 Oak Street, Chicago, IL 60610</p>
                  <ul class="prop_details mb0">
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 3</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 3200</a></li>
                  </ul>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="<?php echo e(asset('images/property/pposter1.png')); ?>" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Lisa Garcia</a></li>
                  </ul>
                  <div class="fp_pdate float-right">8 months ago</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 property-item" style="transition: all 0.3s ease-in-out;">
            <div class="feat_property home7 style4 property-card" style="cursor: pointer;" onclick="window.location.href='<?php echo e(route('listing.single.v2')); ?>'">
              <div class="thumb">
                <img class="img-whp" src="<?php echo e(asset('images/property/fp2.jpg')); ?>" alt="fp2.jpg">
                <div class="thmb_cntnt">
                  <ul class="tag mb0">
                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                    <li class="list-inline-item"><a href="#">Featured</a></li>
                  </ul>
                  <ul class="icon mb0">
                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                  </ul>
                  <a class="fp_price" href="#">$4,200<small>/mo</small></a>
                </div>
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Apartment</p>
                  <h4>Luxury Family Home</h4>
                  <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                  <ul class="prop_details mb0">
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
                  </ul>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="<?php echo e(asset('images/property/pposter1.png')); ?>" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Robert Smith</a></li>
                  </ul>
                  <div class="fp_pdate float-right">5 months ago</div>
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
<?php $__env->stopSection(); ?>

<style>
.property-item {
    transition: all 0.3s ease-in-out;
}

.property-card {
    transition: all 0.3s ease-in-out;
}

.property-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.filter_open_btn {
    transition: all 0.2s ease-in-out;
    border-radius: 4px;
    background-color: rgba(0,0,0,0.05);
}


.filter_closed_btn {
    transition: all 0.2s ease-in-out;
    padding: 4px 8px;
    border-radius: 4px;
}


#sidebar {
    overflow: hidden;
}

#sidebar.hidden {
    width: 0 !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
    margin: 0 !important;
    opacity: 0;
    transform: translateX(-100%);
    min-width: 0 !important;
    flex: 0 0 0% !important;
    max-width: 0% !important;
}
</style>

<script>
let sidebarVisible = false;

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const propertyItems = document.querySelectorAll('.property-item');
    const filterIcon = document.getElementById('filterIcon');
    
    if (sidebarVisible) {
        // Hide sidebar smoothly
        sidebar.classList.add('hidden');
        
        // Immediately adjust main content to fill the space
        setTimeout(() => {
            mainContent.className = 'col-lg-12 pl30 pr30';
            mainContent.style.transition = 'all 0.3s ease-in-out';
            mainContent.style.width = '100%';
            mainContent.style.flex = '0 0 100%';
            mainContent.style.maxWidth = '100%';
            
            // Change properties from 3 per row to 4 per row
            propertyItems.forEach(item => {
                item.className = item.className.replace('col-lg-4', 'col-lg-3');
                item.style.transition = 'all 0.3s ease-in-out';
            });
        }, 50);
        
        // Show filter icon after sidebar is hidden
        setTimeout(() => {
            filterIcon.style.display = 'inline-block';
            filterIcon.style.opacity = '0';
            filterIcon.style.transition = 'opacity 0.2s ease-in-out';
            setTimeout(() => {
                filterIcon.style.opacity = '1';
            }, 10);
        }, 300);
        
        sidebarVisible = false;
    } else {
        // Hide filter icon first
        filterIcon.style.opacity = '0';
        setTimeout(() => {
            filterIcon.style.display = 'none';
        }, 200);
        
        // Show sidebar
        setTimeout(() => {
            sidebar.classList.remove('hidden');
            mainContent.className = 'col-lg-9 col-xl-9 pl15 pr30';
            mainContent.style.width = '';
            mainContent.style.flex = '';
            mainContent.style.maxWidth = '';
            
            // Change properties from 4 per row to 3 per row
            propertyItems.forEach(item => {
                item.className = item.className.replace('col-lg-3', 'col-lg-4');
            });
        }, 50);
        
        sidebarVisible = true;
    }
}
</script>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\msc-it sem1\real estate project\real_estate\resources\views/listing-grid-v3.blade.php ENDPATH**/ ?>