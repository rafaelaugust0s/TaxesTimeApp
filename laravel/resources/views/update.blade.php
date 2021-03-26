
{{--@extends('layouts.taxes');--}}

<!Doctype html>

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

    <!--table css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
       body{
           /*background: url("https://www.southwestbroking.co.uk/wp-content/uploads/2017/05/digital-calculator-hd-wallpaper-1080p.jpg");*/
           /*background-repeat: no-repeat;*/
           /*background-size: cover;*/
           background-color: dimgray;
        }
       .updateForm{
           background-color: white;

       }
       #update{
           padding-right: 200px;
           padding-left: 500px;
       }

    </style>
</head>

<body>
<section id="update">
    <div class="container">
            <div class="col-lg-8  masthead-heading updateForm">
                    <!-- One "tab" for each step in the form: -->
{{--                    <h1>My Taxes Form Information ({{count($mytaxesform)}})</h1>--}}
                <form  action="/update/{{$taxform_to_edit->id}}" method="post" class="updateForm">
                    {{csrf_field()}}
                    <h1>Personal Information for Income Tax Purposes UPDATE</h1>

                    <div class="modal-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="fname"
                                   value="{{$taxform_to_edit->fname}}">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="lname"
                                   value="{{$taxform_to_edit->lname}}">

                        </div>
                        <div class="form-group">
                            <label>Date Of Birth  (YYYY/MM/DD)</label>
                            <input type="text" class="form-control" placeholder="Date Of Birth  (YYYY/MM/DD)" name="dateOfBirth"
                            value="{{$taxform_to_edit->dateOfBirth}}">

                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" name="address"
                                   value="{{$taxform_to_edit->address}}">

                        </div>
                        <div class="form-group">
                            <label>Postal Code</label>
                            <input type="text" class="form-control" placeholder="Postal Code" name="postalCode"
                                   value="{{$taxform_to_edit->postalCode}}">

                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="City" name="city"
                                   value="{{$taxform_to_edit->city}}">

                        </div>
                        <div class="form-group">
                            <label>Province</label>
                            <input type="text" class="form-control" placeholder="Province" name="province"
                                   value="{{$taxform_to_edit->city}}">

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                   value="{{$taxform_to_edit->email}}">

                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" name="phone"
                                   value="{{$taxform_to_edit->phone}}">

                        </div>
                        <div class="form-group">
                            <label>***SIN</label>
                            <input type="text" class="form-control" placeholder="SIN" name="sin"
                                   value="{{$taxform_to_edit->sin}}">

                        </div>
                        <div class="form-group">
                            <label>Marital Status</label>
                            <input type="text" class="form-control" placeholder="Marital Status" name="maritalStatus"
                                   value="{{$taxform_to_edit->maritalStatus}}">

                        </div>
                        <div class="form-group">
                            <label>Spouse First Name</label>
                            <input type="text" class="form-control" placeholder="Spouse First Name" name="spouseFname"
                                   value="{{$taxform_to_edit->spouseFname}}">

                        </div>
                        <div class="form-group">
                            <label>Spouse Last Name</label>
                            <input type="text" class="form-control" placeholder="Spouse Last Name" name="spouseLname"
                                   value="{{$taxform_to_edit->spouseLname}}">

                        </div>
                        <div class="form-group">
                            <label>Spouse Address</label>
                            <input type="text" class="form-control" placeholder="Spouse Address" name="spouseAddress"
                                   value="{{$taxform_to_edit->spouseAddress}}">

                        </div>
                        <div class="form-group">
                            <label>Spouse Postal Code</label>
                            <input type="text" class="form-control" placeholder="Spouse Postal Code" name="spousePostalCode"
                                   value="{{$taxform_to_edit->spousePostalCode}}">

                        </div>
                        <div class="form-group">
                            <label>Spouse City</label>
                            <input type="text" class="form-control" placeholder="Spouse City" name="spouseCity"
                                   value="{{$taxform_to_edit->spouseCity}}">

                        </div>
                        <div class="form-group">
                            <label>Spouse Province</label>
                            <input type="text" class="form-control" placeholder="Spouse Province" name="spouseProvince"
                                   value="{{$taxform_to_edit->spouseProvince}}">

                        </div>
                        <div class="form-group">
                            <label>Dependant Relationship</label>
                            <input type="text" class="form-control" placeholder="Dependant Relationship" name="Drelationship"
                                   value="{{$taxform_to_edit->Drelationship}}">

                        </div>
                        <div class="form-group">
                            <label>Dependant Name</label>
                            <input type="text" class="form-control" placeholder="Dependant Name" name="DName"
                                   value="{{$taxform_to_edit->Dname}}">

                        </div>
                        <div class="form-group">
                            <label>Dependant Last Name</label>
                            <input type="text" class="form-control" placeholder="Dependant Last Name" name="DLname"
                                   value="{{$taxform_to_edit->DLname}}">

                        </div>
                        <div class="form-group">
                            <label>Dependant Address</label>
                            <input type="text" class="form-control" placeholder="Dependant Address" name="DAddress"
                            value="{{$taxform_to_edit->DAddress}}">
                        </div>
                        <div class="form-group">
                            <label>Dependant Postal Code</label>
                            <input type="text" class="form-control" placeholder="Dependant Postal Code" name="DPostalCode"
                                   value="{{$taxform_to_edit->DPostalCode}}">
                        </div>
                        <div class="form-group">
                            <label>Dependant City</label>
                            <input type="text" class="form-control" placeholder="Dependant City" name="DCity"
                                   value="{{$taxform_to_edit->DCity}}">
                        </div>
                        <div class="form-group">
                            <label>Dependant Province</label>
                            <input type="text" class="form-control" placeholder="Dependant Province" name="DProvince"
                                   value="{{$taxform_to_edit->DProvince}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-warning" value="SAVE CHANGES">
                    </div>
                </form>
            </div>
        </div>
</section>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
