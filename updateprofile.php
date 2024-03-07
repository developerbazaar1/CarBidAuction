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
                <button class="btn btn-outline-primary ">Won Vehicles</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary">Lost Pre-Bids</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary">My Vehicles</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary active-btn-at">Profile</button>
            </div>

        </div>
    </div>

    <section class="mt-50 mb-50">
        <div class="container">
            <div class="won-vehicles-section">
                <div class="header-checkout nav nav-tabs" id="myTab" role="tablist">
                    <button class="btn btn-credit-card bg-white">
                        Update profile
                    </button>

                    <button class="btn btn-credit-card ">
                        Change Password
                    </button>

                    <button class="btn btn-credit-card">
                        Notification
                    </button>

                    <button class="btn btn-credit-card ">
                        Licenses & Documents
                    </button>

                    <button class="btn btn-credit-card">
                        Payment Method
                    </button>
                </div>


                <div class="p-10 pb-0 pt-30">
                    <div class="d-flex flex-column gap-20 update-section">
                        <div>
                            <label class="form-label label-checkout">Name
                            </label>
                            <input type="text" class="form-control input-field-checkout"
                                placeholder="Sheikh Muhammad Bilal">
                        </div>
                        <div>
                            <label class="form-label label-checkout">Account Activity Email
                            </label>
                            <input type="email" class="form-control input-field-checkout"
                                placeholder="Perry68@yahoo.com">
                        </div>
                        <div>
                            <label class="form-label label-checkout">Phone No.
                            </label>
                            <!-- <input type="text" class="form-control input-field-checkout" placeholder=""> -->
                            <div class="d-flex month-year-input">
                                <div class="dropdown border-end border-3 pe-2">
                                    <button class="btn p-0 d-flex align-items-center gap-3 " type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="assets/images/icon/flag.svg" />
                                        <img src="assets/images/icon/left2.svg" />
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="dropdown-item"><img src="assets/images/icon/flag.svg" /></div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item"><img src="assets/images/icon/flag.svg" /></div>
                                        </li>
                                        <li>
                                            <div class="dropdown-item"><img src="assets/images/icon/flag.svg" /></div>
                                        </li>
                                    </ul>
                                </div>
                                <input type="number" class="form-control input-field-checkout-year"
                                    placeholder="585-417-424">
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-30">
                        <button class="btn place-bid-btn px-5">
                            Save Updates
                        </button>
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