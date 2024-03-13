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
                    <button class="btn btn-outline-primary ">Dashboard</button>
                </a>
            </div>

            <div class="at">
                <a href="/award.php">
                    <button class="btn btn-outline-primary active-btn-at">Award Pending</button>
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
        <button class="btn position-absolute top-0 start-0 side-icon">
            <img src="assets/images/icon/tune.svg" />
        </button>
        <div class="container">

            <div class="table-award table-responsive">

                <table class="table table-borderless mb-0">

                    <tr class="bg-table-award">
                        <td scope="col" class="col-1 border-top-left">S.NO.</td>
                        <td scope="col" class="col-1">Image</td>
                        <td scope="col" class="col-2">Award Title</td>
                        <td scope="col" class="col-2">Branch</td>
                        <td scope="col" class="col-2">Won Date</td>
                        <td scope="col" class="col-2">Payment Due</td>
                        <td scope="col" class="border-top-right col-3">Pay Now</td>
                    </tr>


                    <tbody class="table-body-award">
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/livebidding/car8.png" />
                                </div>
                            </td>
                            <td class="px-5">AVEO LS AUTOMATIC A/A</td>
                            <td>Phoenix</td>
                            <td>Nov 21, 2023</td>
                            <td>AED 10,000</td>
                            <td><button class="btn set-payment set-payment-bg">
                                    Set Payment
                                </button></td>
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