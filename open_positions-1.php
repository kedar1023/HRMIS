<!DOCTYPE html>
<html lang="en">
<?php
require 'session.php'; 
require 'vendor\autoload.php'; 
$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empollection;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOD and ADMIN DASHBOARD</title>
    <!-- Google font cdn file imported here -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- bootstrap cdn files for the Tables and other contents  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Link the External Css here And please see name Its a Styles.css  -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    include 'adminnavbar.php';
    ?><br><br><br>
    <div class="interview">
        <div class="block">
            <center>
                <h2>OPEN POSITION
                </h2>
                <hr class="line">
		<br>
		<h5>
		POSITION TRACKER
		</h5>
		<br>
            </center>
        </div>
    </div>
		<h6>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="dropdown">
			
                        <span> <a href="#">DEPARTMENT : Sales</a></span>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <div class="dropdown">
                        <span> <a href="#">HOD: HOD NAME</a></span>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <div class="dropdown">
                        <span> <a href="#">EMAIL ID: hod@gmail.com</a></span>
                        
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="EDIT">


</h6>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Date : <input type="DATE">
    <!-- INTERVIEW SCHEDULE Div Close here -->
    <div class="shortlist">
        <span style="border-bottom: 1px black; margin-left: 20px; font-family: 'Hind Siliguri', sans-serif;;">			
    </span><br><br>
        <!-- bootstrap table start here Add and remove containt in table according to your task -->
        <div class="table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <!-- table header  -->
                        <th scope="col">Name</th>
                        <th scope="col">Current Position</th>
                       <th scope="col">Contact</th>
                        <th scope="col">Exp.</th>
                        <th scope="col">Current CTC</th>                        
                        <th scope="col">Expected CTC
                        <th scope="col">Notice Period</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Resume</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
$counter = $empcollection->find();
foreach($counter as $row) {
    echo "<tr>";
    echo "<td>" . $row['Candidate Name'] ."</td>";
    echo "<td>" . $row['Current Position'] ."</td>";
    echo "<td>" . $row['Expereince'] ."</td>";
    echo "<td>" . $row['Current CTC'] ."</td>";
    echo "<td>" . $row['Expected CTC'] ."</td>";
    echo "<td>" . $row['Notice Period'] ."</td>";
    echo "<td>" . $row['Remark'] ."</td>";?>
    <td><button name="" class="btn btn-block btn-primary">Upload</button></td>
    <?php echo "</tr>";
}
?>
                    <tr>
                        <th scope="row">Shailesh Pandey </th>
                        <td>Sales Engineer</td>
                        <td>7503388614
                        </td>
                        <td>6</td>
                        <td>5.8</td>
                        <td>As per company policy
                        </td>
                        <td>1 Month
                        </td>
                        <td>Notice period negociable for 15 days			
                        </td>
                        <td><button name="" class="btn btn-block btn-primary">Upload</button></td>
                    </tr>
                </tbody>
            </table>
	<center>
	<button name="">Submit</button>
	</center>
        </div>
        <br><br><br>
    </div>
</body>
</html>