<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HR & Admin dashbord</title>
    <!-- Google font cdn file imported here -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- bootstrap cdn files for the Tables and other contents  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <!-- Link the External Css here And please see name Its a Styles.css  -->
    <link rel="stylesheet" href="styles.css">

</head>

<style>
  
</style>


<body>

<?php
	
    include 'adminnavbar.php';
    
require 'HRMIS/phpmailer/class.smtp.php';
require 'HRMIS/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->setFrom('admin@example.com');
$mail->addAddress('pdpatil@mitaoe.ac.in');
$mail->Subject = 'HRMIS';
$mail->Body = '
Dear Mr...........

With reference to our telephonic conversation, we have scheduled your interview for Open position, Sales & Marketing Engineer - Sales & Marketing Department.

Organization    :  Rathi Transpower Pvt.Ltd
Venue               :  M/S Rathi Transpower Pvt.Ltd
                             Rathi Transpower Pvt Ltd.,
                             Gaia Apex, S. No. 33/2D,
                             Viman Nagar,Near Hindustan International Hotel,
                             Pune, 411014         

Day                   :
Time                 :  

Contact Person   :-   Ms. Neha

Contact No.       :  

for any information you can visit our websites of Rathi group ;

Web Address   :      
www.rathicouplings.com
http://www.rathigroup.com

Kindly available with following documents :
1. Updated Resume.
2. Passport size Photo.
3. Last month updated salary slip.

* Feel free to ask if you have any query.
* Kindly confirm your presence after receiving the mail.
* Kindly available before 15 Min.


Thank you,
With Best Regards,
Rathi Group of Industries. ';
$mail->isHTML(true);
$mail->AltBody = "This message is generated by plain text !";
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'kedar@mitaoe.ac.in';
$mail->Password = '';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}
 ?>

<br><br><br>


<!-- Next Div that contains the title of the INTERVIEW SCHEDULE Start here -->

<div class="interview">
    <div class="block">
      <center>  <h2> SCHEDULE INTERVIEW
        </h2>
    <hr class="line">
    </center>
    </div>
</div>

<!-- INTERVIEW SCHEDULE Div Close here -->



<div class="shortlist">
    <span style="border-bottom: 1px black; margin-left: 20px; font-family: 'Hind Siliguri', sans-serif;;">SHORT LISTED EMPLOYEES			
       
    </span>
<br>
<br>


<!-- bootstrap table start here Add and remove containt in table according to your task -->

<div class="table">
    <table class="table table-bordered">
        <thead>
          <tr>
              <!-- table header  -->
            <th scope="col">Name</th>
            <th scope="col">Open Position	
                </th>
            <th scope="col">department	
                </th>
            <th scope="col">location
                </th>

                <th scope="col">Day

                    </th>

                    <th scope="col">Time

                        </th>
        
                        <th scope="col">EMAIL	

                            </th>
                            <th scope="col">HOD EMAIL

                                </th>

                                <th scope="col">Interview Call Letter	

                                    </th>
                    

            </tr>
        </thead>
        <tbody>
        <form method="POST" action="interviewschedule.php"> 
	<tr>
	
            <!-- table body -->
            <th scope="row">Sourav Roy</th>
            <td>Assi. Manager</td>
            <td>Production</td>
            <td><select>
                <option value="PUNE">PUNE</option>
                <option value="Kolhapur">Kolhapur</option>
            </select></td>
    <td><input type="date" name="date" id="date"></td>
    <td><input type="text" name="time" id="time" placeholder="hr:min am/pm"></td>
    <td><input type="email" name="iemail" id="iemail"></td>
    <td><input type="email" name="hemail" id="hemail"></td>            <td><button name="" class="btn btn-block btn-primary">Send</button></td>
          </tr>
          <tr>
                <th scope="row">Ayan Banerjee	</th>
                <td>Sales Engineer</td>
                <td>Sales</td>
                <td><select>
                    <option value="PUNE">PUNE</option>
                    <option value="Kolhapur">Kolhapur</option>
                </select></td>
                <td><input type="date" name="date" id="date"></td>
                <td><input type="text" name="time" id="time" placeholder="hr:min am/pm"></td>
                <td><input type="email" name="iemail" id="iemail"></td>
                <td><input type="email" name="hemail" id="hemail"></td>             <td><button name="" class="btn btn-block btn-primary">Send</button></td>
              </tr>
              <tr>
                    <th scope="row">Sonu Kumar Giri	
	
    
                        </th>
                    <td>Sales Engineer</td>
                    <td>Sales</td>
                    <td><select>
                        <option value="PUNE">PUNE</option>
                        <option value="Kolhapur">Kolhapur</option>
                    </select></td>
                    <td><input type="date" name="date" id="date"></td>
                    <td><input type="text" name="time" id="time" placeholder="hr:min am/pm"></td>
                    <td><input type="email" name="iemail" id="iemail"></td>
                    <td><input type="email" name="hemail" id="hemail"></td>
                    <td><button name="" class="btn btn-block btn-primary">Send</button></td>
                  </tr>

                  <tr>
                        <th scope="row">Somnath</th>
                        <td>Sales Executive</td>
                        <td>Sales</td>
                        <td><select>
                            <option value="PUNE">PUNE</option>
                            <option value="Kolhapur">Kolhapur</option>
                        </select></td>
                        <td><input type="date" name="date" id="date"></td>
                        <td><input type="text" name="time" id="time" placeholder="hr:min am/pm"></td>
                        <td><input type="email" name="iemail" id="iemail"></td>
                        <td><input type="email" name="hemail" id="hemail"></td>
                        <td><button name="" class="btn btn-block btn-primary">Send</button></td>
                      </tr>

                      <tr>
                            <th scope="row">Sourav Mandal</th>
                            <td>Sales & MKT Engineer</td>
                            <td>Marketing</td>
                            <td><select>
                                <option value="PUNE">PUNE</option>
                                <option value="Kolhapur">Kolhapur</option>
                            </select></td>
                            <td><input type="date" name="date" id="date"></td>
                            <td><input type="text" name="time" id="time" placeholder="hr:min am/pm"></td>
                            <td><input type="email" name="iemail" id="iemail"></td>
                            <td><input type="email" name="hemail" id="hemail"></td>                            <td><button name="" class="btn btn-block btn-primary">Send</button></td>
                      </tr>
        </tbody>
      </table>
</div>
<br><br><br>
</div>

</body>
</html>
