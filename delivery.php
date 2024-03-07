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
                <button class="btn btn-outline-primary ">Award Pending</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary active-btn-at">Won Vehicles</button>
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

    <section class="mt-50 mb-50">
        <div class="container">
            <div class="won-vehicles-section">
                <div class="header-checkout nav nav-tabs" id="myTab" role="tablist">
                    <button class="btn btn-credit-card ">
                        How It Works
                    </button>

                    <button class="btn btn-credit-card ">
                        To Be Paid
                    </button>

                    <button class="btn btn-credit-card ">
                        To Be Picked Up
                    </button>

                    <button class="btn btn-credit-card bg-white">
                        Delivery
                    </button>

                    <button class="btn btn-credit-card">
                        Purchase History
                    </button>
                </div>


                <div class="p-10 pb-0 pt-30">
                    <div class="table-award table-responsive ">

                        <table class="table table-borderless mb-0">

                            <tr class="bg-table-award bg-table-history">
                                <td class="border-top-left">S.NO.</td>
                                <td scope="col" class="col-2">Image</td>
                                <td scope="col" class="col-2">Auction Title</td>
                                <td scope="col" class="col-2">Delivery Date</td>
                                <td scope="col" class="col-2">Delivery Method</td>
                                <td scope="col" class="col-2">Delivery Location</td>
                                <td class="border-top-right" scope="col" class="col-2">Delivery Status</td>
                            </tr>


                            <tbody class="table-body-award">
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="table-img">
                                            <img src="assets/images/product/product-1.jpg" />
                                        </div>
                                    </td>
                                    <td>DAVEO LS AUTOMATIC A/A</td>
                                    <td>Nov 06,2023</td>
                                    <td>Courier</td>
                                    <td>
                                        <div class="d-flex justify-content-between gap-1">
                                            <div> Jumeirah Beach Residence (JBR)</div>
                                            <img src="assets/images/icon/edit.svg" />
                                        </div>
                                    </td>
                                    <td scope="col" class="col-2">
                                        <button class="btn set-payment deliver-btn-bg">
                                            Deliver in 2 days
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="table-img">
                                            <img src="assets/images/product/product-1.jpg" />
                                        </div>
                                    </td>
                                    <td>AVEO LS AUTOMATIC A/A</td>
                                    <td>Oct 15, 2023</td>
                                    <td>In-Person Delivery</td>
                                    <td>
                                        <div class="d-flex justify-content-between gap-1">
                                            <div> Business Bay</div>
                                            <img src="assets/images/icon/edit.svg" />
                                        </div>
                                    </td>
                                    <td scope="col" class="col-2"><button class="btn set-payment set-payment-bg">
                                            Delivered
                                        </button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include 'assets/include/footer.php' ;?>
    <!-- /Footer -->

</body>

</html>