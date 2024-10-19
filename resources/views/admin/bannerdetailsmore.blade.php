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
                                      <!-- Success Message -->
                                            @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}

                                                <!-- Redirect Button with ID -->
                                                @if (session('id'))
                                                   <a href="{{ route('admin.movieaddmoredetails', ['id' => $id]) }}"><button class="btn btn-primary mt-3"> Go to Details</button> </button></a> 
                                                      
                                                @endif
                                            </div>
                                            @endif
                                    <div class="full price_table padding_infor_info">
                                    <form method="post" action="{{ route('admin.uploadmovie', ['id' => $id]) }}" enctype="multipart/form-data">
                                            @csrf
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row mb-4">
                                                <div class="col-6">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="form-label" for="form6Example2">Price</label>
                                                        <input type="text" id="form6Example2" name="price" class="form-control" />
                                                        <input type="hidden" id="movietype" name="movietype" value="bannerdetails" class="form-control" />

                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                                <!-- thumb nail -->
                                                    <div data-mdb-input-init class="form-outline mb-4">
                                                        <label class="form-label" for="form6Example4">Banner</label>
                                                        <input type="file" id="form6Example4" name="banner" class="form-control" />
                                                    </div>
                                                    <!-- thumb nail -->
                                                </div>

                                                
                                        
                                       
                                            <!-- Checkbox -->

                                            <div>
                                                <input type="submit" id="submit" name="submit" class="form-control" value="Upload" />
                                            </div>
                                        </form>
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
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->
    <script src="js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="js/Chart.min.js"></script>
    <script src="js/Chart.bundle.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar("#sidebar");
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- calendar file css -->
    <script src="js/semantic.min.js"></script>
    <script>
        var room = 1;
        function education_fields() {
            room++;
            var objTo = document.getElementById("education_fields");
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "form-group removeclass" + room);
            var rdiv = "removeclass" + room;
            divtest.innerHTML =
                '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Tagname" name="Tagname[]" value="" placeholder="Tags"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' +
                room +
                ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

            objTo.appendChild(divtest);
        }
        function remove_education_fields(rid) {
            $(".removeclass" + rid).remove();
        }
    </script>

    <script>
        const checkbox = document.getElementById("site");
        const inputField = document.getElementById("hideofficialsite");

        checkbox.addEventListener("change", () => {
            if (checkbox.checked) {
                inputField.style.display = "block"; // Show the input field
            } else {
                inputField.style.display = "none"; // Hide the input field
            }
        });

        const checkboxnuynow = document.getElementById("buy");
        const inputFieldott = document.getElementById("buynowotts");

        checkboxnuynow.addEventListener("change", () => {
            if (checkboxnuynow.checked) {
                inputFieldott.style.display = "block"; // Show the input field
            } else {
                inputFieldott.style.display = "none"; // Hide the input field
            }
        });
    </script>
    <script>
        const selectElement = document.getElementById("mySelect");
        const inputContainer = document.getElementById("inputContainer");

        selectElement.addEventListener("change", function () {
            // Clear existing input fields
            inputContainer.innerHTML = "";

            // Get selected options
            const selectedOptions = Array.from(selectElement.selectedOptions).map((option) => option.value);

            // Create input fields for selected options
            selectedOptions.forEach((option) => {
                const inputFieldDiv = document.createElement("div");
                inputFieldDiv.classList.add("input-field");

                const label = document.createElement("label");
                label.setAttribute("for", `input${option}`);
                label.innerText = `Input for Option ${option}:`;

                const input = document.createElement("input");
                input.setAttribute("type", "text");
                input.setAttribute("id", `input${option}`);

                inputFieldDiv.appendChild(label);
                inputFieldDiv.appendChild(input);
                inputContainer.appendChild(inputFieldDiv);
            });
        });

        const fileInput = document.getElementById("fileInput");
        const radioContainer = document.getElementById("radioContainer");
        const dynamicInput = document.getElementById("dynamicInput");
        const addTrailerButton = document.getElementById("addTrailerButton");
        const removeTrailerButton = document.getElementById("removeTrailerButton");
        const trailerForm = document.getElementById("trailerForm");

        fileInput.addEventListener("change", function () {
            const files = fileInput.files;
            radioContainer.innerHTML = ""; // Clear existing radio buttons

            Array.from(files).forEach((file, index) => {
                const radioDiv = document.createElement("div");

                const radio = document.createElement("input");
                radio.type = "radio";
                radio.name = "fileOption";
                radio.value = `file${index}`;
                radio.id = `radio${index}`;

                const label = document.createElement("label");
                label.htmlFor = `radio${index}`;
                label.innerText = `Option for ${file.name}`;

                radioDiv.appendChild(radio);
                radioDiv.appendChild(label);
                radioContainer.appendChild(radioDiv);
            });
        });

        addTrailerButton.addEventListener("click", function () {
            const trailerDiv = document.createElement("div");
            trailerDiv.classList.add("trailer");

            const titleInput = document.createElement("input");
            titleInput.type = "text";
            titleInput.placeholder = "Trailer Title";
            titleInput.name = `trailerTitle[]`; // Use array notation for form submission

            const orderInput = document.createElement("input");
            orderInput.type = "number";
            orderInput.placeholder = "Order";
            orderInput.name = `trailerOrder[]`; // Use array notation for form submission

            const uploadOption = document.createElement("div");
            const textOption = document.createElement("div");

            // Radio buttons for selecting input type
            const fileOptionRadio = document.createElement("input");
            fileOptionRadio.type = "radio";
            fileOptionRadio.name = `inputChoice${dynamicInput.children.length}`;
            fileOptionRadio.value = "upload";
            fileOptionRadio.id = `upload${dynamicInput.children.length}`;

            const textOptionRadio = document.createElement("input");
            textOptionRadio.type = "radio";
            textOptionRadio.name = `inputChoice${dynamicInput.children.length}`;
            textOptionRadio.value = "text";
            textOptionRadio.id = `text${dynamicInput.children.length}`;

            const fileOptionLabel = document.createElement("label");
            fileOptionLabel.htmlFor = `upload${dynamicInput.children.length}`;
            fileOptionLabel.innerText = "Upload File";

            const textOptionLabel = document.createElement("label");
            textOptionLabel.htmlFor = `text${dynamicInput.children.length}`;
            textOptionLabel.innerText = "Text Input";

            uploadOption.classList.add("input-field");
            textOption.classList.add("input-field");

            // File upload input
            const fileUploadInput = document.createElement("input");
            fileUploadInput.type = "file";
            fileUploadInput.accept = "video/*"; // Adjust as needed
            fileUploadInput.name = `trailerFile[]`; // Use array notation for form submission

            // Assemble options
            trailerDiv.appendChild(titleInput);
            trailerDiv.appendChild(orderInput);
            trailerDiv.appendChild(fileOptionRadio);
            trailerDiv.appendChild(fileOptionLabel);
            trailerDiv.appendChild(textOptionRadio);
            trailerDiv.appendChild(textOptionLabel);
            trailerDiv.appendChild(uploadOption);
            trailerDiv.appendChild(textOption);

            dynamicInput.appendChild(trailerDiv);

            // Handle radio selection
            fileOptionRadio.addEventListener("change", function () {
                uploadOption.innerHTML = ""; // Clear previous input
                uploadOption.appendChild(fileUploadInput);
                uploadOption.style.display = "block";
                textOption.style.display = "none";
            });

            textOptionRadio.addEventListener("change", function () {
                textOption.innerHTML = ""; // Clear previous input
                const textInput = document.createElement("input");
                textInput.type = "text";
                textInput.name = `trailerText[]`; // Use array notation for form submission
                textOption.appendChild(textInput);
                textOption.style.display = "block";
                uploadOption.style.display = "none";
            });
        });

        // Remove the last trailer section
        removeTrailerButton.addEventListener("click", function () {
            const trailers = dynamicInput.getElementsByClassName("trailer");
            if (trailers.length > 0) {
                dynamicInput.removeChild(trailers[trailers.length - 1]);
            }
        });

        // Handle form submission
        trailerForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent default form submission

            // Collect form data (you can also send it via AJAX here)
            const formData = new FormData(trailerForm);
            for (let [key, value] of formData.entries()) {
                console.log(key, value); // Display form data in console
            }

            // For actual submission, you would typically send this data to a server
            // Example: fetch('/submit-url', { method: 'POST', body: formData });
        });
    </script>
</body>


</html>