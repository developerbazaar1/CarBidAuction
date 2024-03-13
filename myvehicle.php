<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php include 'assets/include/cssinclude.php' ;?>

</head>

<body>

    <!-- Header -->
    <?php include 'assets/include/header.php' ;?>
    <!-- /Header -->


    <!-- for tab bar -->
    <div class="fillter-btn bg-f7 mt-50 input-group-checkout text-center">
        <div class="btn-group ml-20" role="group" aria-label="Basic checkbox toggle button group">

            <div class="at">
                <a href="/dashboard.php">
                    <button class="btn btn-outline-primary">Dashboard</button>
                </a>
            </div>

            <div class="at">
                <a href="/award.php">
                    <button class="btn btn-outline-primary ">Award Pending</button>
                </a>
            </div>


            <div class="at">
                <a href="/wonvehicles.php">
                    <button class="btn btn-outline-primary ">Won Vehicles</button>
                </a>
            </div>


            <div class="at">
                <a href="/lostbid.php">
                    <button class="btn btn-outline-primary">Lost Pre-Bids</button>
                </a>
            </div>


            <div class="at">
                <a href="/myvehicle.php">
                    <button class="btn btn-outline-primary active-btn-at">My Vehicles</button>
                </a>
            </div>


            <div class="at">
                <a href="/profile.php">
                    <button class="btn btn-outline-primary">Profile</button>
                </a>
            </div>

        </div>
    </div>


    <!-- for table  -->

    <section class="position-relative mt-50 mb-50">
        <div class="dropdown">
            <button class="btn position-absolute top-0 start-0 side-icon" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="assets/images/icon/tune.svg" />
            </button>
            <div class="dropdown-menu filter-dropdown border-0">
                <dev class="filters-item d-flex justify-content-between aling-items-center gap-2">
                    <div class="font-24 font-900 text-black font-montserrat fst-italic">Filters</div>
                    <img src="assets/images/icon/tune.svg" />
                </dev>

                <dev class="filters-item bg-status mt-10 d-flex justify-content-between aling-items-center gap-2">
                    <div class="font-20 font-700 text-black font-montserrat fst-italic">Status</div>
                    <img src="assets/images/icon/sync_alt.svg" />
                </dev>

                <div class="divider-filters"></div>

                <dev class="filters-item bg-status d-flex justify-content-between aling-items-center gap-2">
                    <div class="font-20 font-700 text-black font-montserrat fst-italic">Sale Filter </div>
                    <img src="assets/images/icon/sync_alt.svg" />
                </dev>
            </div>
        </div>
        <div class="container">
            <div class="table-award table-responsive">

                <table class="table table-borderless mb-0">

                    <tr class="bg-table-award">
                        <td class="border-top-left"></td>
                        <td scope="col" class="col-1">Image</td>
                        <td scope="col" class="col-2">Auction Title</td>
                        <td scope="col" class="col-2">Branch</td>
                        <td scope="col" class="col-3">Bid Now</td>
                        <td scope="col" class="border-top-right col-3">Buy Now</td>
                    </tr>


                    <tbody class="table-body-award">
                        <tr>
                            <td>
                                <div data-target="vehicle-element1" id="vehicle-element1"
                                    class="element-to-change clickable-image">
                                    <img src="assets/images/icon/star.svg" />
                                </div>
                            </td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/livebidding/car8.png" />
                                </div>
                            </td>
                            <td class="px-5">AVEO LS AUTOMATIC A/A</td>
                            <td>Phoenix</td>
                            <td>
                                <div>
                                    <div class="d-flex month-year-input rounded-pill p-1">
                                        <!-- <input type="number" class="form-control input-field-checkout-month"
                                            placeholder="MM"> -->
                                        <input type="number" id="bid-amount"
                                            class="form-control bg-transparent rounded-pill w-100 input-field-checkout-year"
                                            placeholder="Enter Amount">
                                        <div>
                                            <button class="btn set-payment set-payment-bg myvehicle-bid">
                                                Place Bid
                                            </button>
                                        </div>
                                    </div>
                                    <div class="font-12 font-500 mt-2">05:35 Hrs.</div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-usrhub">
                                    Buy Now AED XXXX
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div data-target="vehicle-element2" id="vehicle-element2"
                                    class="element-to-change clickable-image">
                                    <img src="assets/images/icon/star.svg" />
                                </div>
                            </td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/product/product-1.jpg" />
                                </div>
                            </td>
                            <td class="px-5">AVEO LS AUTOMATIC A/A</td>
                            <td>Atlanta South</td>
                            <td>
                                <div>
                                    <div class="d-flex month-year-input rounded-pill p-1">
                                        <!-- <input type="number" class="form-control input-field-checkout-month"
                                            placeholder="MM"> -->
                                        <input type="number" id="bid-amount"
                                            class="form-control bg-transparent rounded-pill w-100 input-field-checkout-year"
                                            placeholder="Enter Amount">
                                        <div>
                                            <button class="btn set-payment set-payment-bg myvehicle-bid">
                                                Place Bid
                                            </button>
                                        </div>
                                    </div>
                                    <div class="font-12 font-500 mt-2">05:35 Hrs.</div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-usrhub">
                                    Buy Now AED XXXX
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div data-target="vehicle-element3" id="vehicle-element3"
                                    class="element-to-change clickable-image">
                                    <img src="assets/images/icon/star.svg" />
                                </div>
                            </td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/product/product-4.png" />
                                </div>
                            </td>
                            <td class="px-5">AVEO LS AUTOMATIC A/A</td>
                            <td>Dream Rides</td>
                            <td>
                                <div>
                                    <div class="d-flex month-year-input rounded-pill p-1">
                                        <!-- <input type="number" class="form-control input-field-checkout-month"
                                            placeholder="MM"> -->
                                        <input type="number" id="bid-amount"
                                            class="form-control bg-transparent rounded-pill w-100 input-field-checkout-year"
                                            placeholder="Enter Amount">
                                        <div>
                                            <button class="btn set-payment set-payment-bg myvehicle-bid">
                                                Place Bid
                                            </button>
                                        </div>
                                    </div>
                                    <div class="font-12 font-500 mt-2">05:35 Hrs.</div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-usrhub">
                                    Buy Now AED XXXX
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>

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