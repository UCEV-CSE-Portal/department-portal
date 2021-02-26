<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<?php
	include 'links.php';
	?>

	<link rel="stylesheet" type="text/css" href="assets/css/achievement.css">
    <style type="text/css">
		p{
			text-align: justify;
		}
		.table th{
            text-decoration-color: white;
            color:snow;
        }

	</style>


</head>
</head>
<body>
	<?php
	include 'nav.php';
	?>
	<br>
	<div class="container">
<img src="assets/img/placement.png" alt="img" style="display:flex;width: 70% ;height: 30%;margin-left: 185px; ">
	</div>
	<br>




	<div class ="container">
            <div style="overflow-x: auto;">
                <table class ="table table-bordered table-striped table-hover">
                    <thead>
                        <tr style = "background-color: #003366;">
                            <th>Item</th>
                            <th>LYG(2013-2014)</th>
                            <th>LYG(2014-2015)</th>
                            <th>LYG(2015-2016)</th>

                            <th>LYG(2016-2017)</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Total no of Final Year Students</td><td>61</td><td>61  </td><td>54</td> <td>61 </td>
                        </tr>
                         <tr>
                            <td>No. of Students placed in the companies or government sector(X)</td><td>32</td><td>30 </td><td>39</td> <td>40 </td>
                        </tr>
                        <tr>
                            <td>No of students admitted to higher studies with valid qualifying scores (GATE or equivalent state or national level tests ,GRE,GMAT,etc.)(Y)</td><td>9</td><td>06 </td><td>04</td> <td>06 </td>
                        </tr>
                         <tr>
                            <td>No of students turned entreprenuer in engineering/technology(Z)</td><td>0</td><td>0 </td><td>0</td> <td>0 </td>
                        </tr>
                        <tr>
                            <td>X+Y+Z=</td><td>41</td><td>36 </td><td>43</td> <td>46 </td>
                        </tr>
                         <tr>
                            <td>Placement Index [X+Y+Z]/N </td><td>1.00</td><td>0.59 </td><td>0.8</td> <td>0.75S </td>
                        </tr>
                    </tbody>
            </table>
            <P style = "text-align:right"> <b> *Years referred here are the admitting years of respective batches</b></P>

            </div>
 </div>

    <br>
	<br>
	<?php
	include 'footer.php';
	?>

</body>
</html>
