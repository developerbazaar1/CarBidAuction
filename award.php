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
                <button class="btn btn-outline-primary">Dashboard</button>
            </div>

            <div class="at">
                <button class="btn btn-outline-primary active-btn-at">Award Pending</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary">Won Vehicles</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary">Lost Pre-Bids</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary">My Vehicles</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary">Profile</button>
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
                        <td class="border-top-left">S.NO.</td>
                        <td>Image</td>
                        <td>Award Title</td>
                        <td>Branch</td>
                        <td>Won Date</td>
                        <td>Payment Due</td>
                        <td class="border-top-right">Pay Now</td>
                    </tr>


                    <tbody class="table-body-award">
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/livebidding/car3.png" />
                                </div>
                            </td>
                            <td>AVEO LS AUTOMATIC A/A</td>
                            <td>Phoenix</td>
                            <td>Nov 21, 2023</td>
                            <td>AED 10,000</td>
                            <td><button class="btn set-payment">
                                    Set Payment
                                </button></td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/livebidding/car3.png" />
                                </div>
                            </td>
                            <td>AVEO LS AUTOMATIC A/A</td>
                            <td>Phoenix</td>
                            <td>Nov 21, 2023</td>
                            <td>AED 10,000</td>
                            <td><button class="btn set-payment">
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

</body>

</html>