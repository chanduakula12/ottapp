<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  

        <div class="container mt-5 mb-1">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <!-- Banner Section -->
                        <section class="">
                            <div class="text-center headerpayment">
                                <img src="{{ asset($moviedetails->bannerimages->banner_image) }}" class="img-fluid rounded" alt="Banner Image">
                            </div>
                            <div class="movie-title pt-1">
                                <h4>{{ $moviedetails->title }}</h4>
                            </div>
                            <div class="movie-description pt-1">
                                <h6>{{ $moviedetails->description }}</h6>
                            </div>
                        </section>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="">
                    <div class="card  p-3 h-100">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">Order Recap</h5>
                            <div class="d-flex justify-content-between">
                                <span>Total</span>
                                <span class="text-success">$85.00</span>
                            </div>
                        </div>
                        <!-- razorpay -->
                        
                       
                        <div class="">
                            <form action="{{ route('create') }}" method="POST">
                                @csrf
                                <script
                                    src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key="rzp_test_Muz86P5J70D0WT"
                                    data-amount="{{ $moviedetails->price }}"
                                    data-currency="INR"
                                    data-order_id="{{ $order->id }}"
                                    data-buttontext="Continue to Payment"
                                    data-name="Hexamed"
                                    data-description="Payment"
                                    data-image="https://dsdsdsdsdsdsd-sdsdsdsd.com/public/assets/img/hexamedlogo.png"
                                    data-prefill.name="John Doe"
                                    data-prefill.email="customer@example.com"
                                    data-theme.color="#F37254"
                                ></script>
                            </form>
                        </div>
                    
                        <!-- razorpay -->
                    </div>
                </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
