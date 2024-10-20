<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>P19</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="css/semantic.min.js" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-lBISJVJ49zh34fnUuAaSAyuYzQ2ioGvhm4As4Z1JFde0kVpaC1FFWD3f9adpZrdD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/js/coreui.bundle.min.js" integrity="sha384-yoEOGIfJg9mO8eOS9dgSYBXwb2hCCE+AMiJYavhAofzm8AoyVE241kjON695K1v5" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .input-field {
            margin-top: 10px;
        }
        #hideofficialsite {
            display: none; /* Initially hidden */
        }
        #buynowotts {
            display: none; /* Initially hidden */
        }
        .trailer {
            margin-bottom: 20px;
        }
        .symbol-container {
            display: flex; /* Use flexbox for alignment */
            align-items: center; /* Center items vertically */
            margin-bottom: 20px; /* Spacing below */
        }
        .add-symbol, .remove-symbol {
            display: inline-block;
            background-color: #4CAF50; /* Green background for add */
            color: white; /* White text */
            border-radius: 50%; /* Circular shape */
            width: 30px; /* Width */
            height: 30px; /* Height */
            text-align: center; /* Centered text */
            line-height: 30px; /* Centered vertically */
            font-size: 20px; /* Font size */
            cursor: pointer; /* Pointer on hover */
            margin-right: 10px; /* Spacing between symbols */
        }
        .remove-symbol {
            background-color: #F44336; /* Red background for remove */
        }
    </style>
</head>

<body class="inner_page contact_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('admin.sidebar')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                @include('admin.navbar')
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Movies</h2>
                                </div>
                            </div>
                        </div>

                     

                        <!-- row -->
                        <div class="row column1">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head"></div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <!-- Success Message -->
                                    @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    <div class="full price_table padding_infor_info">
                                               <!-- Bootstrap Cards Section -->
                                                <div class="row">
                                                    <!-- Add Banner Section -->
                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card" style="background-color: #f9f9f9;">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Add Banner</h5>
                                                                <p class="card-text">
                                                                    <a href="{{ route('admin.bannerdetailsmore',['id' => $id]) }}"><button class="btn btn-primary">ADD</button></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Details Section -->
                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card" style="background-color: #eaf7ff;">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Tags</h5>
                                                                <p class="card-text">
                                                                <a href="{{  route('admin.addtags',['id' => $id])  }}"><button class="btn btn-primary">ADD Tags</button></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Trailer Section -->
                                                    <div class="col-lg-4 mb-4">
                                                        <div class="card" style="background-color: #fff3e0;">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Trailer</h5>
                                                                <p class="card-text">
                                                                <a href="{{ route('admin.movietrailers',['id' => $id]) }}"><button class="btn btn-primary">ADD</button></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end boostrap cards -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- footer -->
                <div class="container-fluid">
                    <div class="footer">
                        <p>
                            Copyright © 2018 Designed by html.design. All rights reserved.
                            <br />
                            <br />
                            Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end dashboard inner -->
        </div>
    </div>

    <!-- Include necessary scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>



</html>