
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        .container h3{
            margin:20px;
            padding:20px;
        }
        .container{
           margin-top:30px;
           padding: 20px;
           width: 950px;
           
        }
        .container hr{
            width: 900px; 
        }
        .container input[type = text]{
            padding:10px;
            margin-left:25px;
        }
        .container label{
            margin-left:5px;
            margin-left:25px;
        }
       .container input[type = email]
       {
        margin-left:25px;
       }
       .container input[type = date]
       {
        margin-left:25px;
       }
       .container input[type = radio]
       {
        margin-left:25px;
       }
       .container input[type = password]
       {
        margin-left:25px;
       }
       .container select{
        margin-left:25px;
       }
      
    </style>
</head>
<body>

       <?php
            include('Connections/_header.php');
       ?>
    <form action="insertion.php" method="post">
        <div class="container bg-light p-2 text bg-opacity-10 rounded-2 shadow">
            <div class="well">
             <div class="heading">
                 <h3>Registration Form</h3>
                <hr>
             </div><br>
             <div class="row g-2">
                 <div class="col-4">
                   <div class="form">
                       <label for="uname">First Name</label>
                       <input type="text" name="fname" id="fname" class="form-control with-border" padding="20px" style="width: 300px; height: 50px;">
                   </div>
                 </div>
                 <div class="col-2">
                     <div class="form">
                         <label for="lname">Last Name</label>
                         <input type="text" name="lname" id="lname" class="form-control with-border" padding="20px" style="width: 300px; height: 50px;">
                     </div>
                 </div>
               </div>
               <br>
     
               <div class="row g-2">
                   <div class="col-5">
                       <div class="form">
                           <label for="email">Email</label>
                           <input type="email" name="email" id="email" class="form-control with border" padding="20px" style="width: 400px; height: 50px;" placeholder="example@example.com">
                       </div>
                     </div>
                       <div class="col-6">
                         <div class="form">
                             <label for="date">Date of Birth</label>
                             <input type="date" name="date" id="date" class="form-control with border" padding="20px" style="width: 220px; height: 50px;">
                         </div>
                       </div>
               </div><br>
     
               <div class="row g-4">
                   <div class="col-5">
                       <div class="form">
                           <label for="country">Country :<br></label>
                           <select class="form-select" aria-label="Default select example" id="country_value" name="country_value">
                             <option selected>Select Country</option>
                             <option value="India">India</option>
                             <option value="Australia">Australia</option>
                             <option value=" New Zealand"> New Zealand</option>
                             <option value="Pakistan">Pakistan</option>
                             <option value="South Korea">South Korea</option>
                             <option value="United States of America">United States of America</option>
                             <option value="United Kingdom">United Kingdom</option>
                           </select>

                   </div>
               </div>
               <div class="col-5">
                 <label for="gender">Gender </label><br>
                 <div class="form"><br>
                           <input type="radio" name="gender" id="gender"  class="form-check-input with border" value="Female" />
                           <label for="female">Female</label>
                           <input type="radio" name="gender" id="gender" class="form-check-input with border" value="Male" /> 
                           <label for="male">Male</label>
                           <input type="radio" name="gender" id="gender" class="form-check-input with border" value="Other" />
                           <label for="other">Other</label>
                       </div>
                 </div>
               
               </div><br>
     
               <div class="row g-2">
                   <div class="col-4">
                       <div class="form">
                           <label for="pass">Password </label>
                           <input type="password" name="pass" id="pass" class = "form-control" style="width:300px; height: 50px;">
                       </div>
                   </div>
                   <div class="col-4">
                     <div class="form">
                         <label for="pass">Confirm Password</label>
                         <input type="password" name="cpass" id="cpass" class = "form-control" style="width:300px; height: 50px;">
                     </div>
                 </div>
               </div>
               </div>
               <br><br>
                 
                    <button type="submit" class="btn btn-primary rounded" value="Submit" style="width: 900px;">Submit</button>
                      <br><br><br>
            </div>
         </div>
    </form>
   
</body>
</html>