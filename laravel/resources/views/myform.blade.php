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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>



<body>
<style>
    body{
    }

    * {
        box-sizing: border-box;
    }

    body {
        background:gray;
    }

    #regForm {
        background-color: white;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
        color: white !important;
        font-weight: bolder;
        font-size: 40px;

    }

    input {
        padding: 15px;
        width: 100%;
        font-size: 25px ;
        font-family: Raleway;
        color: white; !important;
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
        color: white;
        font-size: 30px;
    }

    button {
        background: none;
        color: white;
        border: 1px solid #aaaaaa;
        padding: 10px 20px;
        font-size: 25px;
        font-family: Raleway;
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
        background-color: #4CAF50;
    }
    .taxform{
        /*background-color:#2e3436!important;*/

        background: url("https://media.tavid.ee/s/resize/960/product_catalog/1-oz-canadian-maple-leaf-gold-coin-previous-years/canada_maple_leaf_2015_1_oz_investment_gold_coin_reverse.jpg?v5");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y: -150px;
    }
    .table-bordered{
        background-color: white!important;
    }

</style>




{{--<!-- Modal -->--}}
{{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">Taxes form Information</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<section class="taxform">

    <div class="container">
        <table class="table-bordered table-sm">
            <div class="masthead-subheading">
                <h1>Personal Information for Income Tax Purposes</h1>
                <!-- One "tab" for each step in the form: -->
                <h1>My Taxes Form Information ({{count($mytaxesform)}})records</h1>
            </div>

            @if(\Illuminate\Support\Facades\Session::has('msg'))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{\Illuminate\Support\Facades\Session::get('msg')}}</a>.
                </div>
            @endif
            <div class="text-white">
                <p> To delete records added  click on name.</p>
            </div>
            @foreach($mytaxesform as $taxform)

                <thead>
                {{--                        <button type="button" class="btn btn-primary" data-toggle="modal" >--}}
                {{--                            <a href="/delete?id/={{$taxform->id}}">DELETE {{$taxform->fname}}</a>--}}
                {{--                        </button>--}}

                <tr>
                    <th>
                        <button type="button" class="btn btn-primary" data-toggle="modal" >
                            <a href="/update/={{$taxform->id}}">UPDATE</a>
                        </button>
                        First Name</th>
                    <th>Last Name</th>
                    <th>Date Of Birth  (YYYY/MM/DD)</th>
                    <th>Address</th>
                    <th>Postal Code</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>***SIN</th>
                    <th>Marital Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="/delete?id={{$taxform->id}}"> {{$taxform->fname}}</a>

                    </td>

                    <td>{{$taxform->lname}}</td>
                    <td>{{$taxform->dateOfBirth}}</td>
                    <td>{{$taxform->address}}</td>
                    <td>{{$taxform->postalCode}}</td>
                    <td>{{$taxform->city}}</td>
                    <td>{{$taxform->province}}</td>
                    <td>{{$taxform->email}}</td>
                    <td>{{$taxform->phone}}</td>
                    <td> {{$taxform->sin}}</td>
                    <td>{{$taxform->maritalStatus}}</td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <th>Spouse First Name</th>
                    <th>Spouse Last Name</th>
                    <th>Spouse Address</th>
                    <th>Spouse Postal Code</th>
                    <th>Spouse City</th>
                    <th>Spouse Province</th>
                </tr>

                </thead>

                <tbody>
                <tr>
                    <td>{{$taxform->spouseFname}}</td>
                    <td> {{$taxform->spouseLname}}</td>
                    <td> {{$taxform->spouseAddress}}</td>
                    <td> {{$taxform->postalCode}}</td>
                    <td>{{$taxform->city}}</td>
                    <td>{{$taxform->spouseProvince}}
                    </td>
                    <td></td>
                    <td></td>

                </tr>
                </tbody>
                <thead>
                <tr>
                    <th>Dependant Relationship</th>
                    <th>Dependant Name</th>
                    <th>Dependant Last Name</th>
                    <th>Dependant Address</th>
                    <th>Dependant Postal Code</th>
                    <th>Dependant City</th>
                    <th>Dependant Province</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>{{$taxform->Drelationship}}</td>
                    <td>{{$taxform->DName}}</td>
                    <td>{{$taxform->DLname}}</td>
                    <td>{{$taxform->DAddress}}</td>
                    <td>{{$taxform->DPostalCode}}</td>
                    <td>{{$taxform->DCity}}</td>
                    <td>{{$taxform->DProvince}}</td>

                </tr>
                </tbody>

            @endforeach
        </table>
        <div class="container text-white">
            <p>***Our clients confidentiality is very important to us. We use SIN numbers to retrieve your records from CRA!</p>
            <h2>Thanks for your information! You may now book your appointment at your convenience!</h2>
        </div>

    </div>

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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>


</html>


