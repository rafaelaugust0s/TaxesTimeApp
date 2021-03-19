@extends('layouts.taxes')

{{--@include('nav')--}}





<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="taxes/css/form.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>

        * {
            box-sizing: border-box;
        }

        body {

        }

        #regForm {
            background-color: white;
            margin: 100px auto;
            font-family: Montserrat;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
            color: black !important;
            font-weight: bolder;
            font-size: 40px;

        }

        input {
            padding: 15px;
            width: 100%;
            font-size: 25px ;
            font-family: Monserrat;
            color: black;
            border: 1px solid white;
            background: none;
            /*font-weight: bold;*/
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
            color: black;
            font-size: 30px;
        }

        button {
            background: #fed136!important;
            color: black;
            border: 1px solid #aaaaaa;
            padding: 10px 20px;
            font-size: 25px;
            font-family: Monserrat;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background: none;
            border: white;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: dimgray;
        }

        .taxform{
            /*background-color:#2e3436!important;*/
            background: url("https://media.tavid.ee/s/resize/960/product_catalog/1-oz-canadian-maple-leaf-gold-coin-previous-years/canada_maple_leaf_2015_1_oz_investment_gold_coin_reverse.jpg?v5");
            background-repeat: no-repeat;
            background-size: cover;
            background-position-y: -100px;
        }

    </style>

</head>


<body >

<section class="taxform">

<form  action="/create_new_taxform" method="post" id="regForm">
    {{csrf_field()}}


    <h1>Personal Information for Income Tax Purposes</h1>
    <!-- One "tab" for each step in the form: -->

    <div class="tab">Name:
        <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
        <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
        <p><input placeholder="Date of Birth...YYYY/MM/DD" oninput="this.className = ''" name="dateOfBirth"></p>

    </div>
    <div class="tab">Contact Info:
        <p><input placeholder="Address..." oninput="this.className = ''" name="address"></p>
        <p><input placeholder="Postal code..." oninput="this.className = ''" name="postalCode"></p>
        <p><input placeholder="City..." oninput="this.className = ''" name="city"></p>
        <p><input placeholder="Province..." oninput="this.className = ''" name="province"></p>
    </div>

    <div class="tab">Contact Info:
        <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
        <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
        <p><input placeholder="Social Security Number..." oninput="this.className = '' " name="sin" id="sin"></p>

    </div>

    <div class="tab">Marital Status:
        <p><input list="status" placeholder="Marital Status." oninput="this.className = ''" name="maritalStatus">
            <datalist  id="status">
                <option value="single"></option>
                <option value="married"></option>
                <option value="divorced"></option>
                <option value="separated"></option>
                <option value="widowed"></option>
            </datalist>
        </p>
    </div>

    <div class="tab">Spouse info:
        <p><input placeholder="Spouse Name..." oninput="this.className = ''" name="spouseFname"></p>
              <p><input placeholder="Spouse Last name..." oninput="this.className = ''" name="spouseLname" ></p>
              <p><input placeholder="Spouse Address..." oninput="this.className = ''" name="spouseAddress"></p>
              <p><input placeholder="Spouse Postal code..." oninput="this.className = ''" name="spousePostalCode"></p>
              <p><input placeholder="City..." oninput="this.className = ''" name="spouseCity"></p>
              <p><input placeholder="Province..." oninput="this.className = ''" name="spouseProvince"></p>
    </div>
    <div class="tab">Dependents info:
        <p><input list="dependents" placeholder="How many dependents do you have?" oninput="this.className = ''" name="Drelationship">
            <datalist id="dependents">
                <option value="one"></option>
                <option value="two"></option>
                <option value="three"></option>
                <option value="four"></option>
                <option value="five"></option>
                <option value="none"></option>
            </datalist>
         </p>
    </div>

    <div class="tab"> Dependents info:
          <p><input placeholder="relationship..." oninput="this.className = ''" name="Drelationship"></p>
            <p><input placeholder=" Name..." oninput="this.className = ''" name="DName"></p>
            <p><input placeholder=" Last name..." oninput="this.className = ''" name="DLname" ></p>
            <p><input placeholder="Address..." oninput="this.className = ''" name="DAddress"></p>
            <p><input placeholder="Postal code..." oninput="this.className = ''" name="DPostalCode"></p>
            <p><input placeholder="City..." oninput="this.className = ''" name="DCity"></p>
            <p><input placeholder="Province..." oninput="this.className = ''" name="DProvince"></p>
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            <input type="submit" class="btn btn-primary">
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>
</section>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

</script>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="taxes/assets/mail/jqBootstrapValidation.js"></script>
<script src="taxes/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="taxes/js/scripts.js"></script>

</body>
</html>


