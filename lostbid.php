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
                    <button class="btn btn-outline-primary active-btn-at">Lost Pre-Bids</button>
                </a>
            </div>


            <div class="at">
                <a href="/myvehicle.php">
                    <button class="btn btn-outline-primary ">My Vehicles</button>
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

                <div class="filters-item">
                    <div class="dropdown">
                        <button class="btn btn-usrhub" data-bs-toggle="dropdown" aria-expanded="false">User
                            Hub <i class="fa-regular fa-user"></i>
                        </button>
                        <ul class="dropdown-menu border-0">
                            <li class="p-0">
                                <a class="dropdown-item d-flex gap-2" href="/dashboard.php">
                                    <img src="assets/images/icon/dashboard.svg" />
                                    <div class="text-14 font-500 text-gray font-termima">Dashboard</div>
                                </a>
                            </li>
                            <li class="p-0">
                                <a class="dropdown-item d-flex gap-2" href="#">
                                    <img src="assets/images/icon/myvehicles.svg" />
                                    <div class="text-14 font-500 text-gray font-termima">My Vehicles</div>
                                </a>
                            </li>
                            <li class="p-0">
                                <a class="dropdown-item d-flex gap-2" href="/wonvehicles.php">
                                    <img src="assets/images/icon/wonvehicles.svg" />
                                    <div class="text-14 font-500 text-gray font-termima">Won Vehicles</div>
                                </a>
                            </li>
                            <li class="p-0">
                                <a class="dropdown-item d-flex gap-2" href="#">
                                    <img src="assets/images/icon/lostprebids.svg" />
                                    <div class="text-14 font-500 text-gray font-termima">Lost Pre-Bids</div>
                                </a>
                            </li>
                            <li class="p-0">
                                <a class="dropdown-item d-flex gap-2" href="/profile.php">
                                    <img src="assets/images/icon/person_2.svg" />
                                    <div class="text-14 font-500 text-gray font-termima">Profile</div>
                                </a>
                            </li>
                            <li class="p-0">
                                <a class="dropdown-item d-flex gap-2" href="#">
                                    <img src="assets/images/icon/logout2.svg" />
                                    <div class="text-14 font-500 text-gray font-termima">Logout</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="table-award table-responsive">

                <table class="table table-borderless mb-0">

                    <tr class="bg-table-award">
                        <td class="border-top-left">S.NO.</td>
                        <td scope="col" class="col-1">Image</td>
                        <td scope="col" class="col-2">Auction Title</td>
                        <td scope="col" class="col-2">Branch</td>
                        <td scope="col" class="col-2">Bid Date</td>
                        <td scope="col" class="col-2">Bid Lost By</td>
                        <td scope="col" class="border-top-right col-2">Winning Bid</td>
                    </tr>


                    <tbody class="table-body-award">
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/livebidding/car8.png" />
                                </div>
                            </td>
                            <td class="px-5">AVEO LS AUTOMATIC A/A</td>
                            <td>Phoenix</td>
                            <td>
                                Nov 21, 2023
                            </td>
                            <td>
                                AED 10,000
                            </td>
                            <td>
                                AED 20,000
                            </td>
                        </tr>


                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/product/product-1.jpg" />
                                </div>
                            </td>
                            <td class="px-5">AVEO LS AUTOMATIC A/A</td>
                            <td>Atlanta South</td>
                            <td>
                                Oct 04, 2023
                            </td>
                            <td>
                                AED 25,000
                            </td>
                            <td>
                                AED 28,000
                            </td>
                        </tr>

                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/product/product-4.png" />
                                </div>
                            </td>
                            <td class="px-5">AVEO LS AUTOMATIC A/A</td>
                            <td>Dream Rides</td>
                            <td>
                                Sept 27, 2023
                            </td>
                            <td>
                                AED 15,000
                            </td>
                            <td>
                                AED 25,000
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