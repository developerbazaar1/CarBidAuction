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

                    <button class="btn btn-credit-card ">
                        Delivery
                    </button>

                    <button class="btn btn-credit-card bg-white">
                        Purchase History
                    </button>
                </div>


                <div class="p-10 pb-0 pt-30">
                    <div class="table-award table-responsive ">

                        <table class="table table-borderless mb-0">

                            <tr class="bg-table-award bg-table-history">
                                <td class="border-top-left">S.NO.</td>
                                <td>Purchase ID</td>
                                <td>Purchase Date</td>
                                <td>Purchase Description</td>
                                <td>Payment Method</td>
                                <td>Total Price</td>
                                <td class="border-top-right">Invoice</td>
                            </tr>


                            <tbody class="table-body-award">
                                <tr>
                                    <td>1</td>
                                    <td>#21456710</td>
                                    <td>Dec 04, 2023</td>
                                    <td>AVEO LS AUTOMATIC A/A Bid</td>
                                    <td>Credit Card</td>
                                    <td>AED 15</td>
                                    <td>
                                        <button class="btn set-payment set-payment-bg">
                                            Download
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>#60776425</td>
                                    <td>Nov 24, 2023</td>
                                    <td>Membership Purchased</td>
                                    <td>PayPal</td>
                                    <td>AED 750</td>
                                    <td><button class="btn set-payment set-payment-bg">
                                            Download
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