<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontrollers extends Controller
{

			function tourist()
 			  {
   				$proj=\App\tourist::all(); // \ is used before App to tell browser to go to location in root

   				return view ('/tourist', compact($proj));
 			  }

  			 function create()
  			 {
  			 	return view ('FormTOtable');
  			 }

  			 function store(Request $req)       // Request is a class and is used from above  to create an object $req to access 								the data fetched from form
  				 {
   					$p= new \App\tourist;   
   					// model project refers to database tourist eloquent through model file

                       			       // fetch values from Form
   					return $req->name;
   					$pname= $req->name;
   					$pf_name= $req->F_name;
    					  $padd= $req->address;
     					 $pgender= $req->gender;
     					 $pcountry= $req->country;
      					$pstate= $req->state;
      					$pdob= $req->dob;
      					$ppin= $req->pincode;
      					$pemail= $req->email;
      					$pnumber= $req->number;
        				    echo "fetched";
   	 				//Store the values in table using project model
    					$p->name =$pname;
    					$p->father_name=$pfname;
      				 $p->address=$padd;
      				 $p->gender=$pgender;
      				 $p->country=$pcountry;
      				 $p->state=$pstate;
       				$p->dob=$pdob;
      				 $p->pin=$ppin;
       				$p->email=$pemail;
       				$p->number=$pnumber;
   	 				$p->save(); // updates the timestamp into the table
    				}






	
				function places($id)
		
		{                 
 			   
 			   	if ($id==1)
 			   	{
 			   		return view('patna.blade.php');  
 			   	}
 			   	else if ($id==2)
 			   	{
 			   		return view('bodhgaya.blade.php');  
 			   	}
 			   	else if ($id==3)
 			   	{
 			   		return view('aurangabad.blade.php');  
 			   	}
 			   	else if ($id==4)
 			   	{
 			   		return view('rajgir.blade.php');  
 			   	}
 			   	else if ($id==5)
 			   	{
 			   		return view('nalanda.blade.php');  
 			   	}
 			   else if ($id==6)
 			   	{
 			   		return view('sasaram.blade.php');  
 			   	}
 			   	else 
 			   	{
 			   		echo 
 			   	}

		// return view('test2',['boys'=>$obj ]);  //Passing the whole 	 											obj to it
 			  // return view('test2', ['boys' => $obj[$id] ]); to print index wise
		}  
}
