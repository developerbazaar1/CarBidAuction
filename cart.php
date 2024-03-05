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

    <section class="pt-50 pb-50">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Cart</a></li>
                </ol>
            </nav>

            <div class="heading">
                Your Cart
            </div>

            <div class="p">
                Explore Your Vehicle and Add-On Options
            </div>

            <!-- for left section -->
            <div class="row pt-50 g-5">
                <div class="col-lg-8">
                    <div class="left-section-cart">
                        <div class="header-cart">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="cart-car-img">
                                        <img src="assets/images/livebidding/car4.png" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="d-flex flex-column justify-content-center h-100">
                                        <div class="url-heading mb-1">
                                            Toyota Camry New
                                        </div>
                                        <div class="p pt-0">
                                            3.5 D5 PowerPulse Momentum 5dr AWD Geartronic Estate
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex flex-column justify-content-center h-100">
                                        <h5 class="fs-5 header-cart-price">
                                            AED 35,000
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- for service section  -->
                        <div class="service">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="service-title">
                                        Air Conditioner
                                    </div>
                                    <div class="service-desc">
                                        Includes minor repairs such as dent removal, scratch touch-up, and small part
                                        replacements.
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="service-prise">
                                        AED 1500
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="service-title">
                                        Insurance Service
                                    </div>
                                    <div class="service-desc">
                                        Comprehensive insurance coverage for all types of damages including accidents,
                                        theft, and natural disasters.
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="service-prise">
                                        AED 1,200/year
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="service-title">
                                        Recovery Service
                                    </div>
                                    <div class="service-desc">
                                        24/7 roadside assistance for towing, flat tire assistance, battery jump-start,
                                        and
                                        lockout services.
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="service-prise">
                                        AED 150/year
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service border-0">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="service-title">
                                        Protection Plan
                                    </div>
                                    <div class="service-desc">
                                        Extends manufacturer's warranty to cover repairs and replacements for mechanical
                                        and
                                        electrical failures beyond the standard warranty period.
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="service-prise">
                                        AED 150/year
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- for right section order card  -->
                <div class="col-lg-4">
                    <div class="card-order">
                        <div class="since-text">
                            Order Summary
                        </div>

                        <div class="d-flex justify-content-between border-card-order">
                            <div class="service-desc p-0">
                                Subtotal
                            </div>
                            <div class="service-prise">
                                AED 35,000
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-10 border-card-order">
                            <div class="d-flex justify-content-between">
                                <div class="service-desc p-0">
                                    Repair Service
                                </div>
                                <div class="service-prise">
                                    AED 1500
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="service-desc p-0">
                                    Insurance Service
                                </div>
                                <div class="service-prise">
                                    AED 1200
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="service-desc p-0">
                                    Recovery Service
                                </div>
                                <div class="service-prise">
                                    AED 150
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="service-desc p-0">
                                    Protection Plan
                                </div>
                                <div class="service-prise">
                                    AED 150
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between border-card-order">
                            <div class="service-desc p-0">
                                Value Added Tax (5%)
                            </div>
                            <div class="service-prise">
                                AED 1150
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="since-text">
                                Total Amount
                            </div>
                            <div class="since-text">
                                AED 39,150
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn bid-now">Procced to Checkout</a>
                        </div>
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