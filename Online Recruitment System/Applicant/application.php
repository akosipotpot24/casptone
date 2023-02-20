<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Form</title>
    <link rel="stylesheet" href="appform.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="birthday.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <body>

  <form action="applicationConnect.php" method="post">
 <br>
 <br>
 <br>
  <header>
        <img src="aoe.png" class="logo" />
        <div class="comDetails">
          <p class="compName">
            Academy of Operation Excellence and Services Inc.
          </p>
        </div>
      </header>
 <!-- PERSONAL INFORMATION ROW -->

 <div class="row" style="max-width: 90%; margin: 0 auto;"> 
      <legend>Personal Information</legend>
    <div class="col-lg-4  ">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" name="fname" id="userName" placeholder = "Enter first name e.g Juan" required>        
    </div>
  <br>
    <div class="col-lg-4">
      <label for="middlename">Middle Name:</label>
      <input type="text" class="form-control" name="mname" id="userLastName" placeholder = "Enter middle name e.g Reyes">
    </div>
  <br>
    <div class=" col-lg-4">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" name="lname" id="email1" placeholder="Enter last name e.g Dela Cruz" required>
    </div>
  </div>
  <br>
  <br>
  <!-- BIRTHDAYS -->
 <div class="row" style="max-width: 90%; margin: 0 auto;"> 
    <div class="col-lg-4">
      <label for="birthplace">Birthplace:</label>
      <input type="text" class="form-control" name="bplace" id="userName" placeholder = "Enter birthplace" required>        
    </div>
  <br>
  <div class="col-lg-3">
  <label for="Birthdate">Birthdate:</label>
  <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Enter birthdate" required>
</div>
<br>
<div class="col-lg-2">
  <label for="Age">Age:</label>
  <input type="text" class="form-control" name="age" id="age" placeholder="Age" readonly>
</div>
    <div class="col-lg-3">
          <label for="gender">Gender:</label>
              <select class="form-control" id="gender" name="gender"  required>
              <option value="" disabled selected>Please Select a Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
        </div>
  </div>
 <br>
 <br>
 <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--GENDER-->
        
        <div class="col-lg-4">
          <label for="email">Email:</label>
              <input class="form-control"type="email"id="emailAdd"name="email"placeholder="name@gmail.com" required/>
        </div>
        <div class="col-lg-4">
          <label for="number">Contact Number:</label>
              <input class="form-control" type="tel" id="phone" name="phone" placeholder="Enter Contact Number e.g 0912-345-6789" pattern="[0-9]{11}" required/>
        </div>
         <div class="col-lg-4">
          <label for="status">Civil Status:</label>
              <select class="form-control" id="civil-status" name="civil" required>
                <option value="" disabled selected>Please Select Civil Status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
                <option value="divorced">Divorced</option>
              </select>
        </div>
        </div>
        <br> 
        <br> 

 <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 4-->
       <legend>Address</legend>
       <div class="col-lg-2">
          <label for="province/state">Province/State:</label>
              <input class="form-control" type="text" id="province" name="province" placeholder="Enter Province/State" required/>
        </div>
        <div class="col-lg-2">
          <label for="city">City:</label>
              <input class="form-control" type="text" id="city" name="city" placeholder="Enter City" required/>
        </div>
        <div class="col-lg-3">
          <label for="baranggay">Baranggay:</label>
          <input class="form-control" type="text" id="baranggay" name="baranggay" placeholder="Enter Baranggay" required/>
        </div>
        <div class="col-lg-3">
          <label for="address">Street Address:</label>
              <input class="form-control" type="text" id="street-address" name="street" placeholder="Enter Street Address" required/>
        </div>
        <div class="col-lg-2">
          <label for="postal">Enter Postal Code:</label>
              <input class="form-control" type="tel" id="postal-code" name="postal" placeholder="Enter Postal Code" required/>
        </div>
       
  </div>
        
        <br> 
       <div class="row" style="max-width: 90%; margin: 0 auto;">  <!--row 6-->
         <legend>Parent / Guardian</legend>
        <div class="col-lg-4">
          <label for="father">Father's Full Name:</label>
              <input class="form-control" type="text" id="father-name" name="father" placeholder="Enter Father's Name" required/>
        </div>
        <div class="col-lg-4">
          <label for="fatherOccupation">Father Occupation:</label>
              <input class="form-control" type="text"id="f_occu"name="f_occu" placeholder="Enter Father's Occupation" required/>
        </div>
           </div>
        <br> 
        <br> 
        <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 7-->
        <div class="col-lg-4">
                 <label for="mother">Mother's Full Name:</label>
              <input class="form-control" type="text" id="mother-name" placeholder="   Enter Mother's Name" name="mother" required/>
        </div>
        <div class="col-lg-4">
           <label for="motherOccupation">Mother Occupation:</label>
              <input class="form-control" type="text" id="m_occu" name="m-occu" placeholder="Enter Mother's Occupation" required/>
        </div>
        </div>
        <br>
        <br>
        <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>College:</legend>
        <div class="col-lg-4">
          <label for="collegeName">College Name:</label>
          <input class="form-control" type="text" id="cname" name="cname" placeholder="Enter College School Name" />
        </div>
        <div class="col-lg-4">
          <label for="program">Study Program:</label>
          <input class="form-control" type="text" id="cprogram" name="cprogram" placeholder = "Enter Study Program" />
        </div>
        <div class="col-lg-2">
          <label for="year">Year Graduated:</label>
          <input class="form-control" type="date" id="cyear" name="cyear" placeholder="Enter Year Graduated"pattern="\d{2}/\d{2}/\d{4}" />
        </div>
        </div>
        <br> 
        <br> 
    <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>Senior High School:</legend>
        <div class="col-lg-4">
          <label for="collegeName">Senior High School Name:</label>
          <input class="form-control" type="text" id="school-name" name="sname" placeholder="Enter Senior High School Name" />
        </div>
        <div class="col-lg-4">
          <label for="program">Study Program:</label>
          <input class="form-control" type="text" id="study-program" name="sprogram" placeholder="Enter Study Program" />
        </div>
        <div class="col-lg-2">
          <label for="year">Year Graduated:</label>
          <input class="form-control" type="date" id="year-graduated" name="syear" placeholder="Enter Year Grasuated" />
        </div>
          
        </div>
        <br>
         <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>HighSchool:</legend>
       
        <div class="col-lg-4">
        <label for="collegeName">College Name:</label>  
          <input class ="form-control"type="text" id="school-name" name="hname" placeholder="Enter School name" />
        </div>
        <div class="col-lg-2">
          <label for="program">Year Graduated:</label>  
          <input  class ="form-control" type="date" id="year-graduated" name="hyear" placeholder="Enter Year Graduated" />
        </div>
  
        </div>
        <br>
         <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Elementary:</legend>
        <div class="col-lg-4">
        <label for="school-name">School Name:</label>
          <input  class ="form-control"type="text" id="school-name" name="ename" placeholder = "Enter Name of School"/>
        </div>
        <div class="col-lg-2">
          <label for="year-graduated">Year Graduated:</label>
          <input class ="form-control" type="date" id="year-graduated" name="eyear" />
        </div>
        
        </div>
        <br>
        <br>
       <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Work Experience</legend>
          <br>
          <br>
          <legend>First work</legend>
             <div class="col-lg-4">
            <label>Company Name:</label>
            <input type="text" name="company_name1" id="name" class="form-control" placeholder="Enter Company Name">
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address1" id="address" class="form-control" placeholder="Enter Company Address">
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position1" id="position1" class="form-control" placeholder="Enter Position">
          </div>
          <div class="col-lg-2">
            <label>Date Started:</label>
            <input type="date" name="work_date_start1" id="work_start" class="form-control">
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended1" id="work_end" class="form-control">
          </div>
        </div>
        <br>
        <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Second Work</legend>
     <div class="col-lg-4">
            <label>Company Name:</label>
            <input type="text" name="company_name2" id="name" class="form-control" placeholder="Enter Company Name">
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address2" id="address" class="form-control" placeholder="Enter Company Address">
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position2" id="position" class="form-control" placeholder="Enter Position">
          </div>
          <div class="col-lg-2">
            <label>Date Started:</label>
            <input type="date" name="work_date_start2" id="work_start" class="form-control">
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended2" id="work_end" class="form-control">
          </div>
        </div>
        <br>
          <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Third Work</legend>
          <div class="col-lg-4">
            <label>Company Name:</label>
            <input type="text" name="company_name3" id="name" class="form-control" placeholder="Enter Company Name">
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address3" id="address" class="form-control" placeholder="Enter Company Address">
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position3" id="position" class="form-control" placeholder="Enter Position">
          </div>
          <div class="col-lg-2">
            <label>Date Started:</label>
            <input type="date" name="work_date_start3" id="work_start" class="form-control">
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended3" id="work_end" class="form-control">
          </div>
        </div>
        <br>
        <br>
     <div class="row" style="max-width: 90%; margin: 0 auto;"> 
            <legend>Character Reference</legend>
           <div class="col-lg-4">
            <label for="email">Name:</label>
            <input class="form-control" type="text  " name="email_ref" id="email" placeholder="Enter Email e.g juan@gmail.com">
          </div>
           <div class="col-lg-4">
            <label for="number">Contact Number:</label>
            <input class="form-control" type="tel" name="phone_ref" id="email" placeholder="Enter Contact Number e.g 0912-345-6789">
          </div>
           <div class="col-lg-4" style="margin-bottom:5%;">
            <label for="occupation">Occupation:</label>
            <input class="form-control" type="text" name="occu_ref" id="email" placeholder="Enter Occupation">
          </div>
       <div class="row" style="max-width: 90%; margin: 0 auto;">
    <div class="row" style="max-width: 90%; margin: 0 auto;">

    <div style="display: flex; flex-direction: column; align-items: center;">
      <label for="cv" style="margin-bottom: 10px;">Upload Resume Here:</label>
      <input accept=".pdf,.doc,.docx" style="background:#ECEFF1; padding:8px  15px; border-radius:50px;" type="file" class="form-control-file" id="cv" name="cv_file">
    </div>
</div>

</div>
         <div class="row"> 
    <div class="col-md-12">
      <p style="margin-top: 3%;">
        I hereby certify that all details provided are true and correct to my knowledge. False information may lead to cancellation of application and/or termination of employment.
      </p>
      <label for="agreement">
        <input type="checkbox" id="agreement" name="agreement" required> I agree
      </label>
    </div>
  </div>
 <div class="row"> 
    <div class="col-md-12">
    <button type="submit" name="save" value="Submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to submit this form?');">Submit</button>

</div>
  </div>
</form>
 </form>                     
</body>
</html>