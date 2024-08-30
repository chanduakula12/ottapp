<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Payment Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    </head>
    <body>
        <div class="container d-lg-flex mt-3 mb-3">
            <div class="box-1 bg-light user">
                
                <div class="box-inner-1 pb-3 mb-3">
                    <div class="d-flex justify-content-between mb-3 userdetails">
                        <p class="fw-bold">{{ $moviedetails->title }}</p>
                        <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>33.00+</p>
                    </div>
                    <div class="container">
                        <div class="bannerimage">
                        <img src="{{ asset($moviedetails->bannerimages->banner_image) }}" class="img-fluid rounded" alt="Banner Image">
                        </div>
                    </div>
                    <p class="dis info my-3"></p>
                    
                </div>
            </div>
            <div class="box-2">
                <div class="box-inner-2">
                    <div>
                        <p class="fw-bold">Payment Details</p>
                        <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                    </div>
                    <form action="">
                        <div class="mb-3">
                            <p class="dis fw-bold mb-2">Email address</p>
                            <input class="form-control" type="email" value="luke@skywalker.com" />
                        </div>
                        <div>
                            <p class="dis fw-bold mb-2">Card details</p>
                            <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                                <div class="fab fa-cc-visa ps-3"></div>
                                <input type="text" class="form-control" placeholder="Card Details" />
                                <div class="d-flex w-50">
                                    <input type="text" class="form-control px-0" placeholder="MM/YY" />
                                    <input type="password" maxlength="3" class="form-control px-0" placeholder="CVV" />
                                </div>
                            </div>
                            <div class="my-3 cardname">
                                <p class="dis fw-bold mb-2">Cardholder name</p>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="address">
                                <p class="dis fw-bold mb-3">Billing address</p>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected hidden>United States</option>
                                    <option value="1">India</option>
                                    <option value="2">Australia</option>
                                    <option value="3">Canada</option>
                                </select>
                                <div class="d-flex">
                                    <input class="form-control zip" type="text" placeholder="ZIP" />
                                    <input class="form-control state" type="text" placeholder="State" />
                                </div>
                                <div class="my-3">
                                    <p class="dis fw-bold mb-2">VAT Number</p>
                                    <div class="inputWithcheck">
                                        <input class="form-control" type="text" value="GB012345B9" />
                                        <span class="fas fa-check"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column dis">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>Subtotal</p>
                                        <p><span class="fas fa-dollar-sign"></span>33.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>VAT<span>(20%)</span></p>
                                        <p><span class="fas fa-dollar-sign"></span>2.80</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="fw-bold">Total</p>
                                        <p class="fw-bold"><span class="fas fa-dollar-sign"></span>35.80</p>
                                    </div>
                                    <div class="btn btn-primary mt-2">Pay<span class="fas fa-dollar-sign px-1"></span>35.80</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
