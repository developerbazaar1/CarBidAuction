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


    <!-- for tab bar -->

    <div class="row"></div>
    <div class="fillter-btn bg-f7 mt-50 input-group-checkout text-center">
        <div class="btn-group ml-20" role="group" aria-label="Basic checkbox toggle button group">

            <div class="at">
                <a href="/dashboard.php">
                    <button class="btn btn-outline-primary active-btn-at">Dashboard</button>
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
                    <button class="btn btn-outline-primary">My Vehicles</button>
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

        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="section-heading p-0">Sheikh Muhammad Bilal</div>
                        <div class="font-termina font-18 font-600 text-gray">
                            Buyer# 607764
                        </div>
                    </div>
                    <div class="row pt-30 gx-5 gy-4">
                        <div class="col-lg-4">
                            <div data-tab-id="tobepaid-tab"
                                class="dashboard-vehicles cursor-pointer d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="font-termina text-black fw-bold font-20">
                                        5 Vehicles
                                    </div>
                                    <div class="font-14 text-gray font-termina font-500 pt-2">Total Watchlist</div>
                                </div>
                                <div>
                                    <img src="assets/images/icon/star-fill.svg" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <!-- <a href="#" class="text-decoration-none"> -->
                            <div data-tab-id="tobepickedup-tab"
                                class="dashboard-vehicles cursor-pointer d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="font-termina text-black fw-bold font-20">
                                        1 Vehicles
                                    </div>
                                    <div class="font-14 text-gray font-termina font-500 pt-2">
                                        To Be Picked Up
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/images/icon/key.svg" />
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>

                        <div class="col-lg-4">
                            <!-- <a href="#" class="text-decoration-none"> -->
                            <div
                                class="dashboard-vehicles cursor-pointer d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="font-termina text-black fw-bold font-20">
                                        0 Vehicles
                                    </div>
                                    <div class="font-14 text-gray font-termina font-500 pt-2">
                                        Pre-Bid: Winning
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/images/icon/trophy.svg" />
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>

                        <div class="col-lg-4">
                            <!-- <a href="#" class="text-decoration-none"> -->
                            <div class="dashboard-vehicles d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="font-termina text-black fw-bold font-20">
                                        0 Vehicles
                                    </div>
                                    <div class="font-14 text-gray font-termina font-500 pt-2">
                                        Pre-Bid: Outbid
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/images/icon/graph.svg" />
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>

                        <div class="col-lg-4">
                            <a href="/assets/award.php" class="text-decoration-none">
                                <div class="dashboard-vehicles d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="font-termina text-black fw-bold font-20">
                                            1 Vehicles
                                        </div>
                                        <div class="font-14 text-gray font-termina font-500 pt-2">
                                            Award Pending
                                        </div>
                                    </div>
                                    <div>
                                        <img src="assets/images/icon/timer.svg" />
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4">
                            <!-- <a href="#" class="text-decoration-none"> -->
                            <div data-tab-id="purchasehistory-tab"
                                class="dashboard-vehicles cursor-pointer d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="font-termina text-black fw-bold font-20">
                                        2 Vehicles
                                    </div>
                                    <div class="font-14 text-gray font-termina font-500 pt-2">
                                        Purchase History
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/images/icon/History.svg" />
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>

                        <div class="col-lg-4">
                            <!-- <a href="#" class="text-decoration-none"> -->
                            <div data-tab-id="tobepaid-tab"
                                class="cursor-pointer dashboard-vehicles d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="font-termina text-black fw-bold font-20">
                                        AED 1,181.25
                                    </div>
                                    <div class="font-14 text-gray font-termina font-500 pt-2">
                                        To Be Paid
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/images/icon/money.svg" />
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>

                        <div class="col-lg-4">
                            <!-- <a href="#" class="text-decoration-none"> -->
                            <div class="dashboard-vehicles d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="font-termina text-black fw-bold font-20">
                                        AED 0.00
                                    </div>
                                    <div class="font-14 text-gray font-termina font-500 pt-2">
                                        Available CA Credit
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/images/icon/dolar.svg" />
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="announcements-card">
                        <div class="font-20 text-black font-900 fst-italic text-uppercase font-montserrat text-center">
                            Announcements
                        </div>
                        <div class="text-gray font-termina font-600 mt-10 announcements-sub-header">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                        <div class="mt-10 font-montserrat font-500 lh-lg text-black">
                            Lorem ipsum dolor sit amet consectetur. Blandit ut ac eget pharetra sed diam. Egestas ut
                            amet magna justo.
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