<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Time Table</title>
	<base href="./">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="scripts/jquery.min.1.12.0.js"></script>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

	<div class="text-center heading1">Dynamic Time Table</div>
	<button class="btn btn-primary section-button">Section A</button>
	<button class="btn btn-primary section-button">Section B</button>
  
				<div class="table-responsive table-background"><table width="98%">
					<thead>
  						<tr>
    						<th>Days</th>
   			 				<th>07:30 - 08:25</th> 
			    			<th>08:25 - 09:20</th>
    						<th>09:20 - 10:15</th>
    						<th></th>
    						<th>10:45 - 11:40</th> 
    						<th>11:40 - 12:35</th>
    						<th>12:35 - 01:30</th>
    						<th></th>
    						<th>02:30 - 03:25</th> 
    						<th>03:25 - 04:20</th>
    						<th>04:20 - 05:15</th>
    					</tr>
    				</thead>
            <?php
            $sql = "SELECT * FROM cl5b order by date";
            $result = $conn->query($sql);
            while($row=mysqli_fetch_assoc($result)){
            echo "
    				<tbody>
  						<tr>
    						<th>".$row['day']."</th> 
                <td>".$row['t1']."</td> <td>".$row['t2']."</td> <td>".$row['t3']."</td>
                <td>".."</td>
                <td>".$row['t4']."</td> <td>".$row['t5']."</td> <td>".$row['t6']."</td>
                <td>".."</td>
              <td>".$row['t7']."</td> <td>".$row['t8']."</td> <td>".$row['t9']."</td>
              </tr>
  					</tbody>
            ";
            }
            ?>
				</table></div>


	<br>
	<div class="row">
    <div class="col-md-2">  
      <button class="btn btn-success action-button">Add Single Class</button>
    </div>
    <div class="col-md-10">      
      <form>
        <input type="date" placeholder="Enter date">
        <input type="text" placeholder="Enter time">
        <input type="classcode" placeholder="Enter time">
        <input type="submit" class="btn btn-primary">
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <button class="btn btn-danger action-button">Cancel Single Class</button>
    </div>
    <div class="col-md-10">      
      <form>
        <input type="date" placeholder="Enter date">
        <input type="text" placeholder="Enter time">
        <input type="classcode" placeholder="Enter time">
        <input type="submit" class="btn btn-primary">
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <button class="btn btn-warning action-button">Swap Two Classes</button>
    </div>
    <div class="col-md-10">      
      <form>
        <input type="date" placeholder="Enter date">
        <input type="timeslot1" placeholder="Enter timeslot1">
        <input type="timeslot2" placeholder="Enter timeslot2">
        <input type="submit" class="btn btn-primary">
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <button class="btn btn-primary action-button">Teacher on Leave</button>
    </div>
    <div class="col-md-10">      
      <form>
        <input type="date" placeholder="Enter date">
        <input type="text" placeholder="Enter time">
        <input type="classcode" placeholder="Enter time">
        <input type="submit" class="btn btn-primary">
      </form>
    </div>
  </div>
	<div class="row bg-primary footer">
		<div class="col-md-3 footer-heading">Project Designed and Developed By:</div>
		<div class="col-md-3">
			Shetty Harshit Arun - 4NI14CS080<br>
			Sheetal Pamecha - 4NI14CS079
		</div>
		<div class="col-md-3">
			Rashmi Nayaran - 4NI14CS069<br>
			Ram Prasad Agarwal - 4NI14CS068
		</div>
		<div class="col-md-3">Project Source Code Available on <a href="https://github.com/RamPrasadAgarwal/Dynamic-Time-Table"><img src="images/github.png" width="40px" title="GitHub"></a></div>
	</div>
</body>
</html>