<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Taxform;
//use Illuminate\Http\Request;
class TaxformController extends Controller

{
    //

    public function store()
    {

        //Receive data from HTML

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $address = $_POST['address'];
        $postalCode = $_POST['postalCode'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sin = $_POST['sin'];
        $maritalStatus = $_POST['maritalStatus'];
        $spouseFname = $_POST['spouseFname'];
        $spouseLname = $_POST['spouseLname'];
        $spouseAddress = $_POST['spouseAddress'];
        $spousePostalCode = $_POST['spousePostalCode'];
        $spouseCity = $_POST['spouseCity'];
        $spouseProvince = $_POST['spouseProvince'];
        $Drelationship = $_POST['Drelationship'];
        $DName = $_POST['DName'];
        $DLname = $_POST['DLname'];
        $DAddress = $_POST['DAddress'];
        $DPostalCode = $_POST['DPostalCode'];
        $DCity = $_POST['DCity'];
        $DProvince = $_POST['DProvince'];

        //Store data to BD using nameModel( Model class)

        $taxform = new Taxform();
        $taxform->fname = $fname;
        $taxform->lname = $lname;
        $taxform->dateOfBirth = $dateOfBirth;
        $taxform->address = $address;
        $taxform->postalCode = $postalCode;
        $taxform->city = $city;
        $taxform->province = $province;
        $taxform->email = $email;
        $taxform->phone = $phone;
        $taxform->sin = $sin;
        $taxform->maritalStatus = $maritalStatus;
        $taxform->spouseFname = $spouseFname;
        $taxform->spouseLname = $spouseLname;
        $taxform->spouseAddress = $spouseAddress;
        $taxform->spousePostalCode = $spousePostalCode;
        $taxform->spouseCity = $spouseCity;
        $taxform->spouseProvince = $spouseProvince;
        $taxform->Drelationship = $Drelationship;
        $taxform->DName = $DName;
        $taxform->DLname = $DLname;
        $taxform->DAddress = $DAddress;
        $taxform->DPostalCode = $DPostalCode;
        $taxform->DCity = $DCity;
        $taxform->DProvince = $DProvince;


        $taxform->user_id = Auth::user()->id;
        $taxform->save();


        //redirect user to the dashboard
//        return redirect()->back();

        return redirect('/myform')->with(['msg' => 'Your information was added successfully!']);


    }

    public function myform()
    {

//        $taxform= Taxform::all();

        $taxform = Taxform::where('user_id', Auth::user()->id)->get();

        return view('myform')->with(['mytaxesform' => $taxform]);


    }

    public function delete()
    {

        //1.get the id of the row you want to delete

        $taxform = $_GET['id'];

        //2. Delete from DB

        Taxform::destroy($taxform);

        //3.Redirect users to the list

        return redirect('/myform');

//        $taxform = Taxform::where('user_id', Auth::user()->id)->get();
//
//
//        return view('myform')->with(['mytaxesform'=>$taxform]);


    }

    public function update(Taxform $taxform)
    {


        return view('update')->with(['taxform_to_edit' => $taxform]);

    }


    public function edit(Taxform $taxform)
    {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $address = $_POST['address'];
        $postalCode = $_POST['postalCode'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sin = $_POST['sin'];
        $maritalStatus = $_POST['maritalStatus'];
        $spouseFname = $_POST['spouseFname'];
        $spouseLname = $_POST['spouseLname'];
        $spouseAddress = $_POST['spouseAddress'];
        $spousePostalCode = $_POST['spousePostalCode'];
        $spouseCity = $_POST['spouseCity'];
        $spouseProvince = $_POST['spouseProvince'];

        $Drelationship = $_POST['Drelationship'];
        $DName = $_POST['DName'];
        $DLname = $_POST['DLname'];
        $DAddress = $_POST['DAddress'];
        $DPostalCode = $_POST['DPostalCode'];
        $DCity = $_POST['DCity'];
        $DProvince = $_POST['DProvince'];



        $taxform->fname = $fname;
        $taxform->lname = $lname;
        $taxform->dateOfBirth = $dateOfBirth;
        $taxform->address = $address;
            $taxform->postalCode = $postalCode;
        $taxform->city = $city;
        $taxform->province = $province;
        $taxform->email = $email;
        $taxform->phone = $phone;
        $taxform->sin = $sin;
        $taxform->maritalStatus = $maritalStatus;
        $taxform->spouseFname = $spouseFname;
        $taxform->spouseLname = $spouseLname;
        $taxform->spouseAddress = $spouseAddress;
        $taxform->spousePostalCode = $spousePostalCode;
        $taxform->spouseCity = $spouseCity;
        $taxform->spouseProvince = $spouseProvince;

        $taxform->Drelationship = $Drelationship;
        $taxform->DName = $DName;
        $taxform->DLname = $DLname;
        $taxform->DAddress = $DAddress;
        $taxform->DPostalCode = $DPostalCode;
        $taxform->DCity = $DCity;
        $taxform->DProvince = $DProvince;

        $taxform->save();

        return redirect('/myform');
    }
}
//    public function replaceNumbers($chars){
//
//        $number= $_GET['sin'];
//        $replace= substr((string) $number,0, -strlen($chars)) . $chars;
//
//
//
//        return view('myform')->with(['mytaxesform' =>$replace] );
//    }
//}
//
//    public function status(){
//
//        $status=$_POST['spouse'];
//        return view('myform')->with(['mytaxesform'=>$spouse]);
//
//    }

