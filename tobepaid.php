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

                    <button class="btn btn-credit-card bg-white">
                        To Be Paid
                    </button>

                    <button class="btn btn-credit-card">
                        To Be Picked Up
                    </button>

                    <button class="btn btn-credit-card ">
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
                                <td scope="col" class="col-1">Image</td>
                                <td scope="col" class="col-2">Auction Title</td>
                                <td scope="col" class="col-2">Won Date</td>
                                <td scope="col" class="col-3">Addon Services</td>
                                <td scope="col" class="col-2">Payment Due</td>
                                <td class="border-top-right" scope="col" class="col-2">Pay Now</td>
                            </tr>


                            <tbody class="table-body-award">
                                <tr>
                                    <td class="align-top">1</td>
                                    <td class="align-top">
                                        <div class="table-img">
                                            <img src="assets/images/livebidding/car8.png" />
                                        </div>
                                    </td>
                                    <td class="align-top">AVEO LS AUTOMATIC A/A</td>
                                    <td class="align-top">Nov 21, 2023</td>
                                    <td class="align-top">
                                        <div class="d-flex gap-3 flex-column">
                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Repair Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Insurance Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Recovery Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-top">
                                        AED 10,000
                                    </td>
                                    <td scope="col" class="col-2 align-top">
                                        <button class="btn set-payment set-payment-bg">
                                            Set Payment
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-top">2</td>
                                    <td class="align-top">
                                        <div class="table-img">
                                            <img src="assets/images/product/product-1.jpg" />
                                        </div>
                                    </td>
                                    <td class="align-top">AVEO LS AUTOMATIC A/A</td>
                                    <td class="align-top">Nov 21, 2023</td>
                                    <td class="align-top">
                                        <div class="d-flex gap-3 flex-column">
                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Repair Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Insurance Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Recovery Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-top">
                                        AED 10,000
                                    </td>
                                    <td scope="col" class="col-2 align-top">
                                        <button class="btn set-payment set-payment-bg">
                                            Set Payment
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-top">3</td>
                                    <td class="align-top">
                                        <div class="table-img">
                                            <img src="assets/images/product/product-4.png" />
                                        </div>
                                    </td>
                                    <td class="align-top">AVEO LS AUTOMATIC A/A</td>
                                    <td class="align-top">Nov 21, 2023</td>
                                    <td class="align-top">
                                        <div class="d-flex gap-3 flex-column">
                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Repair Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Insurance Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between gap-1">
                                                <div class="d-flex align-items-center gap-10">
                                                    <input checked class="form-check-input m-0 border-dark rounded-0"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <div>
                                                        Recovery Service
                                                    </div>
                                                </div>
                                                <div class="service-prise">
                                                    AED 1500
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-top">
                                        AED 10,000
                                    </td>
                                    <td scope="col" class="col-2 align-top">
                                        <button class="btn set-payment set-payment-bg">
                                            Set Payment
                                        </button>
                                    </td>
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