
    <!-- Include header  -->
    <?php require_once('header.php'); ?>
    <div class="page-content">
        <div class="filter-bar">
            <div class="container">
                <div class="filter-bar-content">
                    <div class="row">
                        <div class="col-md-5 offset-1">
                            <ul class="list-unstyled d-flex p-0 m-0">
                                <li class="a">Residental</li>
                                <li class="active">Commercial</li>
                                <li class="a">Agricultural</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb  -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 offset-1">
                        <ul class="list-unstyled d-flex p-0 m-0">
                            <li class="a">Home</li>
                            <li class="">></li>
                            <li class="a">Find a Property</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Property Content -->
        <section class="property-shop">
            <div class="container">
                <div class="row">
                    
                    <!-- Sidebar Filters  -->
                    <div class="col-md-4">
                        <div class="sidebar-filter">
                            <div id="accordion">
                                <div class="card rounded-0 border-0">
                                    <div class="card-header p-0 bg-transparent border-0" id="headingOne">
                                        <h5 class="m-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#filter-search" aria-expanded="true" aria-controls="collapseOne">
                                            SEARCH
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="filter-search" class="sidebar-accordion collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <input type="text" class="form-control rounded-0 border-0" placeholder="Property Name/Landmark">
                                        <div class="price-filters d-flex justify-content-between w-100">
                                            <button class="btn rounded-0 text-white border-0">Min Price</button>
                                            <button class="btn rounded-0 text-white border-0">Max Price</button>
                                        </div>
                                        <div class="search-filters">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <span>Bedrooms</span>
                                                </div>
                                                <div class="col">
                                                    <ul class="list-unstyled m-0 p-0 d-flex">
                                                        <li><input class="form-control rounded-0" type="number" name="" id=""></li>
                                                        <li><button class="btn btn-sm rounded-0 minus-plus">-</button></li>
                                                        <li><button class="btn btn-sm rounded-0 minus-plus">+</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            &nbsp; 
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <span>Bathrooms</span>
                                                </div>
                                                <div class="col">
                                                    <ul class="list-unstyled m-0 p-0 d-flex">
                                                        <li><input class="form-control rounded-0" type="number" name="" id=""></li>
                                                        <li><button class="btn btn-sm rounded-0 minus-plus">-</button></li>
                                                        <li><button class="btn btn-sm rounded-0 minus-plus">+</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end search-button-filter">
                                                <div class="col-md-7">
                                                    <button class="btn rounded-0 border-0 text-white w-100">SEARCH</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="card search border-0 rounded-0">
                                    <div class="card-header p-0 bg-transparent border-0" id="headingOne">
                                        <h5 class="m-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#facilities" aria-expanded="true" aria-controls="collapseOne">
                                            Facilities
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="facilities" class="sidebar-accordion collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                    <div class="checkbx">
                                                        <input type="checkbox" name="" id=""> Less than 1km
                                                        
                                                    </div>
                                                    <span class="badge badge-pill">14</span> 
                                                </li>
                                                <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                    <div class="checkbx">
                                                        <input type="checkbox" name="" id=""> Less than 3km
                                                        
                                                    </div>
                                                    <span class="badge badge-pill">4</span> 
                                                </li>
                                                <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                    <div class="checkbx">
                                                        <input type="checkbox" name="" id=""> Less than 6km
                                                        
                                                    </div>
                                                    <span class="badge badge-pill">9</span> 
                                                </li>
                                                <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                    <div class="checkbx">
                                                        <input type="checkbox" name="" id=""> Less than 9km
                                                        
                                                    </div>
                                                    <span class="badge badge-pill">1</span> 
                                                </li>
                                            </ul>
                                    </div>
                                    </div> 

                                </div>

                                <div class="card search border-0 rounded-0">
                                    <div class="card-header p-0 bg-transparent border-0" id="headingOne">
                                        <h5 class="m-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#distance-from-landmark" aria-expanded="true" aria-controls="collapseOne">
                                            Distance from landmark
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="distance-from-landmark" class="sidebar-accordion collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                        <div class="checkbx">
                                                            <input type="checkbox" name="" id=""> Less than 1km
                                                            
                                                        </div>
                                                        <span class="badge badge-pill">14</span> 
                                                    </li>
                                                    <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                        <div class="checkbx">
                                                            <input type="checkbox" name="" id=""> Less than 3km
                                                            
                                                        </div>
                                                        <span class="badge badge-pill">4</span> 
                                                    </li>
                                                    <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                        <div class="checkbx">
                                                            <input type="checkbox" name="" id=""> Less than 6km
                                                            
                                                        </div>
                                                        <span class="badge badge-pill">9</span> 
                                                    </li>
                                                    <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                        <div class="checkbx">
                                                            <input type="checkbox" name="" id=""> Less than 9km
                                                            
                                                        </div>
                                                        <span class="badge badge-pill">1</span> 
                                                    </li>
                                                </ul>
                                        </div>
                                    </div> 
                                </div>

                                <div class="card search border-0 rounded-0">
                                    <div class="card-header p-0 bg-transparent border-0" id="headingOne">
                                        <h5 class="m-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#property-accessibility" aria-expanded="true" aria-controls="collapseOne">
                                            Property Accessibility
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="property-accessibility" class="sidebar-accordion collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                            <ul class="list-group"> 
                                                <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                    <div class="checkbx">
                                                        <input type="checkbox" name="" id=""> Wheelchair
                                                        
                                                    </div>
                                                    <span class="badge badge-pill">14</span> 
                                                </li>
                                                <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                    <div class="checkbx">
                                                        <input type="checkbox" name="" id=""> Elevator
                                                        
                                                    </div>
                                                    <span class="badge badge-pill">4</span> 
                                                </li>
                                                <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                    <div class="checkbx">
                                                        <input type="checkbox" name="" id=""> Emergency Exit
                                                        
                                                    </div>
                                                    <span class="badge badge-pill">9</span> 
                                                </li>
                                                <li class="list-group-item bg-transparent border-0 d-flex justify-content-between align-items-center">
                                                    <div class="checkbx">
                                                        <input type="checkbox" name="" id=""> Raised Toilets
                                                        
                                                    </div>
                                                    <span class="badge badge-pill">1</span> 
                                                </li>
                                            </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="card search border-0 rounded-0">
                                    <div class="card-header p-0 bg-transparent border-0" id="headingOne">
                                        <h5 class="m-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#map" aria-expanded="true" aria-controls="collapseOne">
                                            Map
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="map" class="sidebar-accordion collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8093664058933!2d36.7986712141361!3d-1.2885636990601592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10b868ebb4e5%3A0x301aae9a9ff6fc9c!2sLegibra!5e0!3m2!1sen!2ske!4v1581254434160!5m2!1sen!2ske" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Listings  -->
                    <div class="col-md-8">
                        <div class="search-results">
                            <span>"Search Query": 11,060 properties found.</span>
                        </div>

                        <!-- Results Tab -->
                        <ul class="nav nav-tabs nav-fill border-0" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Price (lowest first)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="star-rating-tab" data-toggle="tab" href="#star-rating" role="tab" aria-controls="star-rating" aria-selected="false">Star rating</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="landmark-distance-tab" data-toggle="tab" href="#landmark-distance" role="tab" aria-controls="landmark-distance" aria-selected="false">Distance from landmark</a>
                            </li>
                        </ul>
                        &nbsp; 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="property-item">
                                    <div class="row no-gutters">
                                        <div class="col-md-4 position-relative">
                                            <img src="images/3.jpg" class="property-image">
                                        </div>
                                        <div class="col">
                                            <div class="property-details">
                                                <div class="title-price d-flex align-items-center justify-content-between">
                                                    <h4 class="m-0">Property Title</h4>
                                                    <div class="text-right">
                                                        <span class="price d-block small font-weight-bold">Ksh.13,000</span>
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>

                                                <div class="search-property-tags">
                                                    <ul class="list-unstyled d-flex m-0 p-0">
                                                        <li>Nairobi</li>
                                                        <li>Map</li>
                                                        <li>1km Landmark</li>
                                                    </ul>
                                                </div>

                                                <div class="property-detail-desc">
                                                    <p>Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing.</p>
                                                </div>
                                                <button class="btn propert-detail-cta d-block ml-auto text-white btn-sm">Open</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-item">
                                    <div class="row no-gutters">
                                        <div class="col-md-4 position-relative">
                                            <img src="images/3.jpg" class="property-image">
                                        </div>
                                        <div class="col">
                                            <div class="property-details">
                                                <div class="title-price d-flex align-items-center justify-content-between">
                                                    <h4 class="m-0">Property Title</h4>
                                                    <div class="text-right">
                                                        <span class="price d-block small font-weight-bold">Ksh.13,000</span>
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>

                                                <div class="search-property-tags">
                                                    <ul class="list-unstyled d-flex m-0 p-0">
                                                        <li>Nairobi</li>
                                                        <li>Map</li>
                                                        <li>1km Landmark</li>
                                                    </ul>
                                                </div>

                                                <div class="property-detail-desc">
                                                    <p>Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing.</p>
                                                </div>
                                                <button class="btn propert-detail-cta d-block ml-auto text-white btn-sm">Open</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-item">
                                    <div class="row no-gutters">
                                        <div class="col-md-4 position-relative">
                                            <img src="images/3.jpg" class="property-image">
                                        </div>
                                        <div class="col">
                                            <div class="property-details">
                                                <div class="title-price d-flex align-items-center justify-content-between">
                                                    <h4 class="m-0">Property Title</h4>
                                                    <div class="text-right">
                                                        <span class="price d-block small font-weight-bold">Ksh.13,000</span>
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>

                                                <div class="search-property-tags">
                                                    <ul class="list-unstyled d-flex m-0 p-0">
                                                        <li>Nairobi</li>
                                                        <li>Map</li>
                                                        <li>1km Landmark</li>
                                                    </ul>
                                                </div>

                                                <div class="property-detail-desc">
                                                    <p>Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing.</p>
                                                </div>
                                                <button class="btn propert-detail-cta d-block ml-auto text-white btn-sm">Open</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-item">
                                    <div class="row no-gutters">
                                        <div class="col-md-4 position-relative">
                                            <img src="images/3.jpg" class="property-image">
                                        </div>
                                        <div class="col">
                                            <div class="property-details">
                                                <div class="title-price d-flex align-items-center justify-content-between">
                                                    <h4 class="m-0">Property Title</h4>
                                                    <div class="text-right">
                                                        <span class="price d-block small font-weight-bold">Ksh.13,000</span>
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>

                                                <div class="search-property-tags">
                                                    <ul class="list-unstyled d-flex m-0 p-0">
                                                        <li>Nairobi</li>
                                                        <li>Map</li>
                                                        <li>1km Landmark</li>
                                                    </ul>
                                                </div>

                                                <div class="property-detail-desc">
                                                    <p>Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing.</p>
                                                </div>
                                                <button class="btn propert-detail-cta d-block ml-auto text-white btn-sm">Open</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="star-rating" role="tabpanel" aria-labelledby="star-rating-tab">...</div>
                            <div class="tab-pane fade" id="landmark-distance" role="tabpanel" aria-labelledby="landmark-distance-tab">...</div>
                        </div>

                        <!-- Property Pagination  -->
                        <div class="property-pagination">
                            <ul class="d-flex p-0 list-unstyled">
                                <li><a href=""><</a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href="">...</a></li>
                                <li><a href="">></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Include footer  -->
    <?php require_once('footer.php'); ?>