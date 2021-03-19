

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


{{--<!-- Button trigger modal -->--}}
{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
{{--    Update--}}
{{--</button>--}}

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

            <form action="/update" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname"
                               value="{{$taxform_to_edit->taxform}}">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="fname">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div> <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div> <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div> <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname">
                    </div>

                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
