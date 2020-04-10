<?php

  
header('Location:header.php') ;



$error= array['name'=>  ,
                'f_name'=>  , 
                'address'=>   ,
                'gender'=>  ,
                'country'=>  ,
                'state'=>  ,
                'dob'=>   ,
                'pincode'=>  , 
                'email'=>   , 
                'phone'=> ];


if(isset($_POST["submit"]))                                 
    {
        $name=$_POST["name"];
        $f_name=$_POST["f_name"];
        $add=$_POST["address"];
        $gen=$_POST["gender"];
        $country=$_POST["country"];
        $state=$_POST["state"];
        $dab=$_POST["dob"];
        $pin=$_POST["pincode"];
        $email=$_POST["email"];
        $number=$_POST["number"];


                                 // name validation
        if(empty($name))
            {
              echo "cannot be left empty !<br>";
                // $error[name]= "name can't be left empty";
            }

        else
            {
                if(!preg_match('/^[a-zA-Z\s]+$/',$name))
                {
                    echo "name can have only aplhabets and spaces<br>" ;
                    // $error[name]="name can have only aplhabets and spaces" ;
                }



                                // father name validation
        if(empty($f_name))
            {
              echo "cannot be left empty !<br>";
                // $error[f_name]= "name can't be left empty";
            }

        else
            {
                if(!preg_match('/^[a-zA-Z\s]+$/',$name))
                {
                    echo "name can have only aplhabets and spaces<br>" ;
                    // $error[f_name]="name can have only aplhabets and spaces" ;
                }


                                //   address validation
         if(empty($add))
            {
              echo "cannot be left empty !<br>";
                
            }



                                 // gender validation
        if(empty($gender))
            {
              echo "cannot be left empty !<br>";
              
            }

                                
                                // country validation
        if(empty($country))
            {
              echo "cannot be left empty !<br>";
              
            }


                                 // state validation
        if(empty($state))
            {
              echo "cannot be left empty !<br>";
              
            }


                                // dATE of birth validation
        if(empty($dob))
            {
                    echo "cannot be left empty !";
            }
        else
            {
                $date = $dob;
                $date = date_parse($date); 
                if (!checkdate($date['month'], $date['day'], $date['year'])) 
                {
                 echo "enter valid date !";   
                    }
            }


                                // pin code validation


         if(empty($pin))
            {
              echo "cannot be left empty !<br>";
               
            }

        else
            {
                if(!preg_match('/([0-9]{6}|[0-9]{3}\s[0-9]{3})/',$name))
                {
                    echo "should be of 6 digits<br>" ;
                    
                }



                                // email validation
        if(empty($email))
            {
            echo "email cant be left empty <br>";
            // $error[email]="email cant be left empty ";
            }   
        else                flag 
            if(!filter_var(preg_match('/[a-z]+[0-9]*+\@+[a-z]+\.+[a-z]+/', $email))          // filters are expressions which are already built {ex in server side we use type="email"}
                {
                echo "abc@gmail.com<br>";
               
                }



                                 //  number validation
        if(empty($number))
            {
              echo "cannot be left empty !<br>";
           
            }

        else
            {
                if(!preg_match('/\+?\d[\d -]{8,12}\d/',$number))
                {
                    echo "ex - +91-8074129779 !<br>" ;
                /;                      
                }


    }


                        // creating table tourist in database tourists

$serverName="localhost";
$username="root";
$password="";
$dbName="tourists";


$conn= new mysqli($serverName,$username,$password,$dbName); //connecting to tourists datad=base
$q=" create table tourist(
    id int(5) not NULL,
    Name varchar(5) not NULL,
    Father's name varchar(5) not NULL,          
    Address varchar(5) not NULL,
    Gender varchar(5) not NULL,
    Country varchar(5) not NULL,
    State varchar(5) not NULL,
    DOB int(5) not NULL,
    Pincode int(5) not NULL,
    Email Id varchar(5) not NULL,
    Phone no. int(5) not NULL,
)";
                            //creating table named tourist in the database
$q= " "
$res=$conn->query($q); 
if($res==TRUE)
{
    echo "Table Created";
}
else
{
    echo "error: $conn->error";
}


include 'footer.php';
?>

