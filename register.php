<?php
$showerror=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $connect = mysqli_connect("localhost", "root", "", "ehr");

	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$occupation = $_POST['occupation'];
	$blood = $_POST['blood'];
	$medical = $_POST['medical'];
	$doctor = $_POST['doctor'];
    $med = $_POST['med'];
    $age = $_POST['age'];
    // $image = $_POST['image'];

	if($connect){
		$query = "INSERT INTO `patient`(`name`, `dob`, `email`, `phone`, `gender`, `occupation`, `blood`, `medical`,`doctor`,`med`, `age`) VALUES ('$name','$dob','$email','$phone','$gender','$occupation','$blood','$medical','$doctor','$med','$age')";
	    $res = mysqli_query($connect, $query);

		if($res) {

				header("Location:index.php");
		} else{
             $showerror=true;
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----===CSS===---->

    <link rel="stylesheet" href="registration.css">
    <title>Registration Form</title>

    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

body
{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   background: #166264;
}

.container
{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 1);
}
.container header
{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.container header ::before
{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}

.container form
{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;

}
.container form .details
{
    margin-top: 30px;
}
.container form .details.patient
{
    margin-top: 10px;
}

.container form .title
{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}

.container form .fields
{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

form .fields .input-field
{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}

.input-field label
{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}

.input-field input
{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}

.input-field select
{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}


.input-field input:is(:focus, :valid)
{
    box-shadow: 0 3px 6px rgba(0, 0, 0, 13);
}

.input-field input[type="date"]
{
    color: #707070;
}

.input-field input[type="date"]:valid
{
    color: #333;
}

.container form button{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0; 
    background-color: #4070f4;
    transition: all 0.3s linear;
}

form button:hover
{
    background-color: #265df2;
}


    .container111{
        width: 100%;
        height: 100vh;
        background: #166264;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn{
        padding: 10px 60px;
        background: #fff;
        border: 0;
        outline: none;
        cursor: pointer;
        font-size: 22px;
        font-weight: 500;
        border-radius: 30px;
    }

    .popup{
       width: 400px;
       background: #fff;
       border-radius: 6px;
       position: absolute;
       top: 0;
       left: 50%;
       transform: translate(-50%,-50%) scale(0.1);
       text-align: center;
       padding: 0px 30px 30px;
       color: #333; 
       visibility: hidden;
       transition: transform 0.4s, top 0.4s;
    }

    .popup img{
        width: 100px;
        margin-top: -50px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .popup h2{
        font-size: 38px;
        font-weight: 500;
        margin: 30px 0 10px;
    }

    .popup button{
        width: 100%;
        margin-top: 50px;
        padding: 10px 0;
        background: #6fd649;
        color: #fff;
        border: 0;
        outline: none;
        font-size: 18px;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .open-popup{
        visibility: visible;
        top: 50%;
        transform: translate(-50%,-50%) scale(1);
    }


    </style>

</head>
<body>
        <div class="container">
            <header>Registration</header>

            <form action="/EHR/register.php" method="post">
                <div class="form first">
                    <div class="details personal">
                         <span class="title">Personal Details </span>

                         <div class="fields">
                            <div class="input-field">
                                <label>Name</label>
                                <input type="text" placeholder="Enter your name" id = "name" name = "name" required autocomplete = "off">
                            </div>

                            <div class="input-field">
                                <label>Date of birth</label>
                                <input type="date" placeholder="Enter birth date" id = "dob" name = "dob" required autocomplete = "off">
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input type="email" placeholder="Enter your email" id = "email" name = "email" required autocomplete = "off">
                            </div>

                            <div class="input-field">
                                <label>Phone Number</label>
                                <input type="tel" placeholder="Enter mobile number" id = "phone" name = "phone" required autocomplete = "off">
                            </div>

                            <div class="input-field">
                                <label>Gender</label>
                                <input type="text" placeholder="Enter your gender" id = "gender" name = "gender" required autocomplete = "off">
                                <!-- <select name="gender" id="gender">
                                    <option value="">Select Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select> -->
                            </div>

                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" placeholder="Enter your Occupation" id = "occupation" name = "occupation" required autocomplete = "off">
                            </div>
                         </div>
                    </div>


                    <div class="details Patient">
                        <span class="title">Patient Details </span>

                        <div class="fields">
                           <div class="input-field">
                               <label>Blood Group</label>
                               <input type="text" placeholder="Enter Blood Group" id = "blood" name = "blood" required autocomplete = "off">
                           </div>

                           <div class="input-field">
                               <label>Medical Condition</label>
                               <input type="text" placeholder="Enter Medical Condition" id = "medical" name = "medical" required autocomplete = "off">
                           </div>

                           <div class="input-field">
                               <label>Doctor Assigned</label>
                               <input type="text" placeholder="Enter Assigned Doctor" id = "doctor" name = "doctor" required autocomplete = "off">
                           </div>

                           <div class="input-field">
                               <label>Medications</label>
                               <input type="text" placeholder="Enter assigned medicines" id = "med" name = "med" required autocomplete = "off">
                           </div>

                           <div class="input-field">
                               <label>Age</label>
                               <input type="number" placeholder="Enter your age" id = "age" name = "age" required autocomplete = "off">
                           </div>

                           <div class="input-field">
                               <label>Image</label>
                               <input type="file" onchange = "readURL(this)" accept = "Image/*" id = "image" name = "image" required autocomplete = "off">
                           </div>
                        </div>

                        <button class="submit" id = "submit">Submit
                            
                        </button>
                   </div>
                </div>
            </form>

        </div>

       <script></script>
</body>
</html>