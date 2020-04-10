

<? php



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
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))          // filters are expressions which are already built {ex in server side we use type="email"}
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

?>


<!doctype html>
<html >
<head>
    <title> Home</title>
    </head>

<body>
                                          @yield('header')
    

<!-- form start -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <form method="POST" action="/store" >

                        {{ csrf_field() }}                                  
                        
                        <h2>Tourer signup form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" >
                            </div>
                            <div class="form-group">
                                <label for="father_name">Father Name :</label>
                                <input type="text" name="father_name"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address"  />
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" >
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" >
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="country">country :</label>
                                <div class="form-select">
                                    <select name="country" 
                                        <option value="SELECT">Select</option>
                                        <option value="IN">INDIA</option>
                                        <option value="FR">FOREIGN</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" value="">
                             <option value="SELECT">Select</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chandigarh">Chandigarh</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
							<option value="Daman and Diu">Daman and Diu</option>
							<option value="Delhi">Delhi</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Puducherry">Puducherry</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Odisha">Odisha</option>
							<option value="Punjab">Punjab</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Telangana">Telangana</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="Uttarakhand">Uttarakhand</option>
							<option value="West Bengal">West Bengal</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="text" name="birth_date" ">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Pincode :</label>
                            <input type="text" name="pincode" ">
                        </div>
                       
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" />
                            <input type="submit" value="Signup" class="submit" name="submit"  />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                                    @yield('footer')          <!-- extends the footer code here -->                                 

</body>
</html>
