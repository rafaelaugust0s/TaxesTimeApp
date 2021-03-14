{{--@extends('layouts.taxes')--}}

@include('nav')





<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="taxes/css/form.css" rel="stylesheet" />
</head>



<body>
<style>
    body{
        background: url("https://media.tavid.ee/s/resize/960/product_catalog/1-oz-canadian-maple-leaf-gold-coin-previous-years/canada_maple_leaf_2015_1_oz_investment_gold_coin_reverse.jpg?v5");
    background-repeat: no-repeat;
        background-size: cover;
        background-position-y: -150px;

    }
</style>

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
        <p><input placeholder="Social Security Number..." oninput="this.className = ''" name="sin"></p>

    </div>
    <div class="tab">Spouse info:
        <p><input placeholder="Marital Status." oninput="this.className = ''" name="maritalStatus"></p>
        <p><input placeholder="Spouse Name..." oninput="this.className = ''" name="spouseFname"></p>
        <p><input placeholder="Spouse Last name..." oninput="this.className = ''" name="spouseLname" ></p>
        <p><input placeholder="Spouse Address..." oninput="this.className = ''" name="spouseAddress"></p>
        <p><input placeholder="Spouse Postal code..." oninput="this.className = ''" name="spousePostalCode"></p>
        <p><input placeholder="City..." oninput="this.className = ''" name="spouseCity"></p>
        <p><input placeholder="Province..." oninput="this.className = ''" name="spouseProvince"></p>
    </div>
    <div class="tab">Dependants info:
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

</body>
</html>


