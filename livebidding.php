<!DOCTYPE html>
<html lang="en">

<head>
    <title> Car Arbab</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <?php include 'assets/include/cssinclude.php' ;?>
</head>

<body>

    <!-- Header -->
    <?php include 'assets/include/header.php' ;?>
    <!-- /Header -->


    <!-- Header -->

    <!-- sticky header -->
    <div class="d-block d-sm-none sticky-bg" id="heder-top-livebidding">

    </div>
    <div class="car-details-header-section sticky-header-livebidding d-block d-sm-none">
        <div class="d-flex max-w-850 justify-content-between gap-md-3 gap-2">
            <div class="d-flex flex-md-row flex-column">
                <div class="text-header">Auction List: </div>
                <div class="font-600 text-black font-termina text-uppercase sub-header-text-livebidding">
                    Toyota Camry
                </div>
            </div>
            <div class="d-flex flex-md-row flex-column">
                <div class="text-header">Participants: </div>
                <div class="font-600 font-termina text-black text-uppercase sub-header-text-livebidding">3,905
                </div>

            </div>
            <div class="d-flex flex-md-row flex-column">
                <div class="text-header">Units: </div>
                <div class="font-600 font-termina text-black text-uppercase sub-header-text-livebidding">149</div>
            </div>

        </div>
    </div>


    <!-- car details-->
    <section class="pt-50 pb-lg-4 ">
        <div class="container">
            <div class="car-bid-detail-secion">
                <!-- top head section -->
                <div class="car-details-header-section d-none d-sm-block">
                    <div class="d-flex max-w-850 justify-content-between gap-md-3 gap-2">
                        <div class="d-flex flex-md-row flex-column">
                            <div class="text-header">Auction List: </div>
                            <div class="font-600 text-black font-termina text-uppercase">
                                Toyota Camry
                            </div>
                        </div>
                        <div class="d-flex flex-md-row flex-column">
                            <div class="text-header">Participants: </div>
                            <div class="font-600 font-termina text-black text-uppercase">3,905
                            </div>

                        </div>
                        <div class="d-flex flex-md-row flex-column">
                            <div class="text-header">Units: </div>
                            <div class="font-600 font-termina text-black text-uppercase">149</div>
                        </div>

                    </div>
                </div>

                <div class="ps-lg-3">
                    <!-- row -->
                    <div class="row ">

                        <!-- left section -->
                        <div class="col-lg-8">
                            <div class="py-1 px-1 py-4">

                                <!-- for slider section -->
                                <div class="owl-carousel owl-theme mx-0 px-0 position-relative" id="slider-3">
                                    <div class="item">
                                        <div class="slider-ratio ag-photo-gallery_item ag-photo-gallery_item__wide">
                                            <figure class="ag-photo-gallery_figure">
                                                <a href="assets/images/livebidding/car1.png" data-fancybox="gallery"
                                                    data-caption="Car 1">
                                                    <img src="assets/images/livebidding/car1.png"
                                                        class="d-block w-100 h-100" alt="...">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slider-ratio ag-photo-gallery_item ag-photo-gallery_item__wide">
                                            <figure class="ag-photo-gallery_figure">
                                                <a href="assets/images/livebidding/car2.png" data-fancybox="gallery"
                                                    data-caption="Car 1">
                                                    <img src="assets/images/livebidding/car2.png"
                                                        class="d-block w-100 h-100" alt="...">

                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slider-ratio ag-photo-gallery_item ag-photo-gallery_item__wide">
                                            <figure class="ag-photo-gallery_figure">
                                                <a href="assets/images/livebidding/car3.png" data-fancybox="gallery"
                                                    data-caption="Car 1">
                                                    <img src="assets/images/livebidding/car3.png"
                                                        class="d-block w-100 h-100" alt="...">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slider-ratio ag-photo-gallery_item ag-photo-gallery_item__wide">
                                            <figure class="ag-photo-gallery_figure h-100">
                                                <a href="assets/images/livebidding/car4.png" data-fancybox="gallery"
                                                    data-caption="Car 1">
                                                    <img src="assets/images/livebidding/car4.png"
                                                        class="d-block h-100 w-100" alt="...">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slider-ratio ag-photo-gallery_item ag-photo-gallery_item__wide">
                                            <figure class="ag-photo-gallery_figure h-100">
                                                <a href="assets/images/livebidding/car4.png" data-fancybox="gallery"
                                                    data-caption="Car 1">
                                                    <img src="assets/images/livebidding/car4.png"
                                                        class="d-block h-100 w-100" alt="...">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <!-- car name section -->
                                <div class="car-name mt-25 text-black text-uppercase">
                                    Toyota Camry New
                                </div>
                                <div class="pt-lg-25 pt-2 d-flex lot-no justify-content-between">
                                    <div>
                                        Lot No: <span class="font-600">LTN123456</span>
                                    </div>
                                    <div class="font-600">
                                        On Reserve
                                    </div>
                                </div>
                                <!-- show in lg screen -->


                                <div class="pt-4 h-100 d-lg-none d-block position-relative">

                                    <div id="live-success" class="success-popup">
                                        Your Bid Has Been Successfully Placed!
                                    </div>
                                    <div id="bid-done-alert" class="bid-done">
                                        <div class="mb-10">
                                            Congratulations! You've Won the Bid!
                                        </div>
                                        <a href="/cart.php" class="text-black  font-800">
                                            Proceed to Checkout
                                        </a>
                                    </div>

                                    <!-- progress bar -->
                                    <div class="text-center">
                                        <svg width="200" height="200" viewBox="0 0 250 250" class="circular-progress">
                                            <circle class="bg"></circle>
                                            <circle class="fg">
                                            </circle>
                                            <text x="50%" y="35%" text-anchor="middle" dominant-baseline="middle"
                                                class="minnesato-text">MINNESATO</text>
                                            <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle"
                                                fill="#21E786" class="aed-text">AED 2,500</text>
                                            <text x="50%" y="65%" text-anchor="middle" dominant-baseline="middle"
                                                class="minnesato-text">BID
                                                !</text>
                                        </svg>
                                    </div>

                                    <!-- input field and button -->
                                    <div class="d-flex justify-content-center mt-30">
                                        <input type="number" id="bid-amount" value="250" placeholder="Enter Amount"
                                            class="input-field form-control rounded-pill" />
                                        <button id="decrement-btn" class="btn minus-icon">
                                            <img src="assets/images/icon/minus_icon.svg" />
                                        </button>
                                        <button id="increment-btn" class="btn plus-icon">
                                            <img src="assets/images/icon/plus_icon.svg" />
                                        </button>
                                    </div>

                                    <!-- place bid button -->
                                    <div class="place-bid">
                                        <button id="btn-place-bid" class="btn place-bid-btn w-100">
                                            Place Bid
                                        </button>
                                    </div>


                                    <div class="mt-30 text-center">
                                        <div class="lot-no">
                                            (AED 250 Bid Increment) <a href="#" class="bid-guidelines">Incremental Bid
                                                Guidelines</a>
                                        </div>
                                    </div>

                                    <!-- previous bid section -->
                                    <div class="previous-bid">
                                        Previous Bid
                                    </div>
                                    <div class="p-10">
                                        <div class="d-flex justify-content-between flex-lg-column flex-xl-row gap-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <img src="assets/images/icon/flag-italy.svg" />
                                                </div>
                                                <div class="pri">
                                                    <div>Country Name</div>
                                                    <div class="font-600 mt-1">AED 20,00</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <img src="assets/images/icon/flag-italy.svg" />
                                                </div>
                                                <div class="pri">
                                                    <div>Country Name</div>
                                                    <div class="font-600 mt-1">AED 22,00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- /show in lg screen -->

                                <!-- for tag section -->
                                <div class="pt-25 d-flex flex-wrap gap-3">

                                    <a class="btn btn-tag" href="#">Ending Soon</a>
                                    <a class="btn btn-tag" href="#">Accident Free</a>
                                    <a class="btn btn-tag" href="#">GCC Specs</a>
                                    <a class="btn btn-tag" href="#">Warranty Available</a>

                                </div>

                                <!-- for vichecle details -->
                                <div class="row">
                                    <div class="col-lg-12 ">

                                        <h2 class="car-overv" Car Overview>Vehicle Details</h2>
                                    </div>
                                    <div class="col-lg-12 pt-25">

                                        <div class="row gx-5 gy-4">

                                            <div class="col-lg-6">

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Title</div>
                                                        <div class="right-text">2018 Toyota Camry SE</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">VIN Number</div>
                                                        <div class="right-text">ABC123XYZ456789</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Title Code</div>
                                                        <div class="right-text">Clean</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Vehicle Type</div>
                                                        <div class="right-text">Sedan</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Key Availability</div>
                                                        <div class="right-text">Yes</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Year</div>
                                                        <div class="right-text">2020</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Primary Damage</div>
                                                        <div class="right-text">None</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Color</div>
                                                        <div class="right-text">Midnight Blue</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Engine Type</div>
                                                        <div class="right-text">Inline-4</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Transmission</div>
                                                        <div class="right-text">Automatic</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Drive Type</div>
                                                        <div class="right-text">Front-Wheel Drive</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Highlights</div>
                                                        <div class="right-text w-225">Leather Seats, Advanced Safety
                                                            Features
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- right section -->
                        <div class="col-lg-4 d-lg-block d-none">
                            <div class="py-4 box-shadow-left-div h-100 position-relative">

                                <div id="live-success" class="success-popup">
                                    Your Bid Has Been Successfully Placed!
                                </div>
                                <div id="bid-done-alert" class="bid-done">
                                    <div class="mb-10">
                                        Congratulations! You've Won the Bid!
                                    </div>
                                    <a href="/cart.php" class="text-black  font-800">
                                        Proceed to Checkout
                                    </a>
                                </div>

                                <!-- progress bar -->
                                <div class="text-center">
                                    <svg width="200" height="200" viewBox="0 0 250 250" class="circular-progress">
                                        <circle class="bg"></circle>
                                        <circle class="fg">
                                        </circle>
                                        <text x="50%" y="35%" text-anchor="middle" dominant-baseline="middle"
                                            class="minnesato-text">MINNESATO</text>
                                        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle"
                                            fill="#21E786" class="aed-text">AED 2,500</text>
                                        <text x="50%" y="65%" text-anchor="middle" dominant-baseline="middle"
                                            class="minnesato-text">BID
                                            !</text>
                                    </svg>
                                </div>

                                <!-- input field and button -->
                                <div class="d-flex justify-content-center mt-30">
                                    <input type="number" id="bid-amount" value="250" placeholder="Enter Amount"
                                        class="input-field form-control rounded-pill" />
                                    <button id="decrement-btn" class="btn minus-icon">
                                        <img src="assets/images/icon/minus_icon.svg" />
                                    </button>
                                    <button id="increment-btn" class="btn plus-icon">
                                        <img src="assets/images/icon/plus_icon.svg" />
                                    </button>
                                </div>

                                <!-- place bid button -->
                                <div class="place-bid">
                                    <button id="btn-place-bid" class="btn place-bid-btn w-100">
                                        Place Bid
                                    </button>
                                </div>


                                <div class="mt-30 text-center">
                                    <div class="lot-no">
                                        (AED 250 Bid Increment) <a href="#" class="bid-guidelines">Incremental Bid
                                            Guidelines</a>
                                    </div>
                                </div>

                                <!-- previous bid section -->
                                <div class="previous-bid">
                                    Previous Bid
                                </div>
                                <div class="p-10">
                                    <div class="d-flex justify-content-between flex-lg-column flex-xl-row gap-3">
                                        <div class="d-flex gap-2">
                                            <div>
                                                <img src="assets/images/icon/flag-italy.svg" />
                                            </div>
                                            <div class="pri">
                                                <div>Country Name</div>
                                                <div class="font-600 mt-1">AED 20,00</div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <div>
                                                <img src="assets/images/icon/flag-italy.svg" />
                                            </div>
                                            <div class="pri">
                                                <div>Country Name</div>
                                                <div class="font-600 mt-1">AED 22,00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- place bid secion  -->
    <section class="p-1 pb-4 d-lg-block d-none">
        <div class="container">
            <div class="d-flex flex-column gap-3">
                <div class="car-bid-detail-secion p-10">
                    <div class="row gx-xl-5 gx-lg-3">
                        <div class="col-lg-2">
                            <div class="car-bid-img">
                                <img src="assets/images/livebidding/car8.png" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-lg-4 col-xl-3">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4">
                            <div class="d-flex align-items-center h-100 gap-xl-5 gap-lg-3">
                                <button class="btn place-bid-btn p-3 w-100 max-w-250">
                                    Next Bid
                                </button>

                                <button class="btn p-0">
                                    <img src="assets/images/icon/like.svg" />
                                </button>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="car-bid-detail-secion p-10">
                    <div class="row gx-xl-5 gx-lg-3">
                        <div class="col-lg-2">
                            <div class="car-bid-img">
                                <img src="assets/images/product/product-1.jpg" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4">
                            <div class="d-flex align-items-center h-100 gap-xl-5 gap-lg-3">
                                <button class="btn not-eligible-btn p-3 w-100  max-w-250">
                                    Not Eligible
                                </button>
                                <button class="btn p-0">
                                    <img src="assets/images/icon/dislike.svg" />
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="car-bid-detail-secion p-10">
                    <div class="row gx-xl-5 gx-lg-3">
                        <div class="col-lg-2">
                            <div class="car-bid-img">
                                <img src="assets/images/livebidding/car5.png" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4">
                            <div class="d-flex align-items-center h-100 gap-xl-5 gap-lg-3">
                                <button class="btn place-bid-btn p-3 w-100  max-w-250">
                                    15 Mins
                                </button>
                                <button class="btn p-0">
                                    <img src="assets/images/icon/like.svg" />
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="car-bid-detail-secion p-10">
                    <div class="row gx-xl-5 gx-lg-3">
                        <div class="col-lg-2">
                            <div class="car-bid-img">
                                <img src="assets/images/livebidding/car6.png" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4">
                            <div class="d-flex align-items-center h-100 gap-xl-5 gap-lg-3">
                                <button class="btn place-bid-btn p-3 w-100 max-w-250">
                                    30 Mins
                                </button>
                                <button class="btn p-0">
                                    <img src="assets/images/icon/like.svg" />
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-lg-none d-block car-bid-show-lg">
        <div class="container pb-4 pt-2">
            <div class="owl-carousel owl-theme mx-0 px-0" id="slider-5">


                <div class="item">
                    <div class="car-bid-cart">
                        <div class="car-bid-img">
                            <img src="assets/images/livebidding/car8.png" class="object-fit-cover" />
                        </div>

                        <div class="pt-4">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="d-flex align-items-center h-100 gap-3">
                                <button class="btn place-bid-btn p-3 w-100">
                                    Next Bid
                                </button>

                                <button class="btn p-0">
                                    <img src="assets/images/icon/like.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="car-bid-cart">
                        <div class="car-bid-img">
                            <img src="assets/images/product/product-1.jpg" class="object-fit-cover" />
                        </div>

                        <div class="pt-4">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="d-flex align-items-center h-100 gap-3">
                                <button class="btn not-eligible-btn p-3 w-100">
                                    Not Eligible
                                </button>
                                <button class="btn p-0">
                                    <img src="assets/images/icon/dislike.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="car-bid-cart">
                        <div class="car-bid-img">
                            <img src="assets/images/livebidding/car5.png" class="object-fit-cover" />
                        </div>

                        <div class="pt-4">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="d-flex align-items-center h-100 gap-3">
                                <button class="btn place-bid-btn p-3 w-100 ">
                                    15 Mins
                                </button>
                                <button class="btn p-0">
                                    <img src="assets/images/icon/like.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="car-bid-cart">
                        <div class="car-bid-img">
                            <img src="assets/images/livebidding/car6.png" class="object-fit-cover" />
                        </div>

                        <div class="pt-4">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="d-flex align-items-center h-100 gap-3">
                                <button class="btn place-bid-btn p-3 w-100">
                                    30 Mins
                                </button>
                                <button class="btn p-0">
                                    <img src="assets/images/icon/like.svg" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'assets/include/footer.php' ;?>
    <!-- /Footer -->


    <!-- JS Include -->
    <?php include 'assets/include/jsinclude.php' ;?>
    <!-- /JS Include -->

</body>

</html>