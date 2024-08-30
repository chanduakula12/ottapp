<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Payment Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    </head>
        <style>
            body {
            padding: 5px;
            background-image: url('http://127.0.0.1:8000/movies/1/home1.webp');
        }
        </style>
    <body>
        <div class="container d-lg-flex mt-3 mb-3">
            <div class="box-1 bg-light user">
                
                <div class="box-inner-1 pb-3 mb-3">
                    <div class="d-flex justify-content-between mb-3 userdetails">
                        <p class="fw-bold text-danger">{{ $moviedetails->title }}</p>
                        <p class="fw-lighter"><span class="fas fa-dollar-sign">{{ $moviedetails->price }}</span></p>
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
                        <p class="dis mb-3 text-danger fw-bold">You can watch this movie 30-days and available for 24 horus</p>
                    </div>
                    
                            <div class="address">
                                <div class="d-flex flex-column dis">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="fw-bold">Total</p>
                                        <p class="fw-bold"><span class="fas fa-dollar-sign">{{ $moviedetails->price }}</span></p>
                                    </div>
                                        <!--razor payment -->
                                        
                                        <button   id="rzp-button" type="button" class="btn btn-outline-danger">Continue to Pay</button>
                                                    <div class="">
                                        
                                    </div>
                                        <!--end razor payment -->
                                        <form id="razorpay-form" action="{{ route('response') }}" method="POST" style="display: none;">
                                            @csrf <!-- Include CSRF token if using Laravel -->
                                            <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                            <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                                            <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                                        </form>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    document.getElementById('rzp-button').onclick = function(e) {
        var options = {
            "key": "rzp_test_Muz86P5J70D0WT", // Your API key
            "amount": "{{ $moviedetails->price }}", // Amount in currency subunits (e.g., paise for INR)
            "currency": "INR",
            "name": "Hexamed",
            "description": "Payment",
            "image": "https://dsdsdsdsdsdsd-sdsdsdsd.com/public/assets/img/hexamedlogo.png",
            "order_id": "{{ $order->id }}", // Pass the order id obtained from backend
            "prefill": {
                "name": "John Doe",
                "email": "customer@example.com"
            },
            "theme": {
                "color": "#FF0000" // Bright red color
            },
            "handler": function (response){
                // Populate form with the response data
                document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                document.getElementById('razorpay_signature').value = response.razorpay_signature;

                // Submit the form
                document.getElementById('razorpay-form').submit();
            },
            "modal": {
                "ondismiss": function(){
                    console.log("Checkout form closed");
                }
            }
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
    }
</script>
    </body>
</html>
