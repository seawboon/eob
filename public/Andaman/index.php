<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Seaw Boon">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Andaman</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">
    <script src="https://kit.fontawesome.com/581b6659bd.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="css/app.css?v=<?php echo time();?>" rel="stylesheet">
    <link rel="stylesheet" href="css/intlTelInput.css" />
    <link rel="stylesheet" href="css/countrySelect.css">
</head>

<body>
    <section class="banner">
        <div class="container-fluid">
            <div class="row justify-content-center px-0">
                <div class="col-8 col-md-3 px-0 text-center">
                    <img src="imgs/EOB_symbol-2.png" class="mt-3 mx-auto mb-4" />
                    <h1 class="text-uppercase fit mb-3 ">Between Urban and Island is</h1>
                    <img src="imgs/logo-type.png" class="w-100" />
                    <div class="banner-btn-wrp justify-content-center">
                      <a href="#" id="btn-register" class="btn btn-outline-primary" tabindex="-1">register now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-contact pt-4">
        <div class="container">
            <h2 class="mt-5 mb-4">Between Urban and Island is Andaman</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in tempor mauris. Nunc tincidunt vel elit et consectetur. Duis diam arcu, venenatis ac mi id, ornare tempus massa. Proin scelerisque lacus nibh, in pretium justo
                convallis eget.
            </p>
            <p>
                Aliquam eros nunc, accumsan porttitor massa vitae, venenatis mollis enim.
            </p>
            <h5 class="py-4" id="form-wrp">
                Register your interest now.
            </h5>

            <!--<div class="col-md-8 mt-4">

                <input type="text" id="phone" />
            </div>-->

            <form id="andaman_form" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Required" required>
                        <div class="invalid-feedback">
                          Name field is required.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Required" required>
                        <div class="invalid-feedback">
                          Email field is required.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="phone" class="form-label">mobile number</label>
                        <input type="text" class="form-control" name="mobile" id="phone" required>
                        <div class="invalid-feedback">
                          Mobile Number field is required.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="country_selector" class="form-label">Country</label>
                        <input id="country_selector" class="form-control" type="text">
                        <label for="country_selector" style="display:none;">Select a country here...</label>
                        <div class="form-item" style="display:none;">
                            <input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                            <label for="country_selector_code">...and the selected country code will be updated here</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="address" class="form-label">address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Required" required>
                        <div class="invalid-feedback">
                          Address field is required.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="city" class="form-label">city</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Required" required>
                        <div class="invalid-feedback">
                          City field is required.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="state" class="form-label">province / state</label>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Required" required>
                        <div class="invalid-feedback">
                          Province / State field is required.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="postal" class="form-label">postal / zip code</label>
                        <input type="text" class="form-control" name="postal" id="postal" placeholder="Required" required>
                        <div class="invalid-feedback">
                          Postal / Zip Code field is required.
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="newsletter" id="newsletter" value="yes">
                            <label class="form-check-label" for="newsletter">I hereby agree to receive future communications from E&O</label>
                        </div>
                        <div class="form-check mb-3 ">
                            <input type="checkbox" class="form-check-input" name="tnc" id="tnc" value="agree" required>
                            <label class="form-check-label" for="tnc">I have read and agree to the <a href="#">Terms & Conditions and Privacy Policy</a></label>
                        </div>
                        <label class="form-check-label">
                          This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.
                        </label>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-start"><button type="reset" class="btn btn-outline-dark text-uppercase">reset</button></div>
                    <div class="col-12 col-md-6 text-center text-md-end"><button type="submit" class="btn btn-outline-dark text-uppercase">register now</button></div>
                </div>
            </form>
        </div>


    </section>

    <footer class="py-4">
        <div class="container text-center pb-5" style="border-bottom:1px solid #000">
            <img src="imgs/eob.png" class="my-4" />
            <div class="pb-3">
                For further enquiries, please contact:<br />
                <a href="tel:+603 2095 6868" target="_blank">+603 2095 6868</a> | <a href="mailto:corp.comm@easternandoriental.com" target="_blank">corp.comm@easternandoriental.com</a>
            </div>
            <ul class="nav justify-content-center social-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-weibo"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>

        <div class="container footer-end mt-3">
            <div class="row">
                <div class="col-12 col-md-6 ps-md-0">
                    <ul class="nav justify-content-center justify-content-md-start">
                        <li class="nav-item">
                            <a class="nav-link ps-md-0" href="#">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Land Acquisition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disclaimer & Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">APDL</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end pe-md-0 pt-2">
                    © 2021 Eastern & Oriental Berhad. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/fitty.js"></script>
    <script src="js/intlTelInput.min.js"></script>
    <script src="js/utils.min.js"></script>
    <script src="js/countrySelect.js"></script>
    <script>
        fitty('.fit', {
            minSize: 1
        });
        var input = document.querySelector("#phone");
        intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "my";
                    success(countryCode);
                });
            },
        });

        $("#country_selector").countrySelect({
            defaultCountry: "my",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            responsiveDropdown: true,
            preferredCountries: ['my']
        });

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
        })();

        $( "#btn-register" ).click(function() {
          $('html, body').animate({
              scrollTop: $("#form-wrp").offset().top
          }, 200);
          return false;
        });
    </script>
</body>

</html>
