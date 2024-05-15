

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="style.css" />
  
  
<style>

  <style>
    body {
        font-family: Arial;
    }
    table {
        /* width: 100%; */
        margin: 40px auto;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    .btn1 {
        background-color: dodgerblue;
        color: white;
        padding: 5px;
        border-radius: 5px;
    }
    .btn2 {
        background-color: red;
        color: white;
        padding: 5px;
        border-radius: 5px;
    }
</style>
  
</head>
<body>
  

<div >
  <h1 class="text-center text-3xl">List of candidates for web developer job</h1>

  <table >
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Degree</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Reference</th>
      <th>Position</th>
      <th>Operation</th>
      <th></th>
    </tr>


  </thead>
              <tbody>
              
              <?php

                      include("connection.php");
                      include("update.php");
                      include("delete.php");

                      //data gula kothai theke nibo oitar path dekhano hoyeche
                      $selectquery = " select * from jobregistration ";

                      $query = mysqli_query($con, $selectquery);
                      $num = mysqli_num_rows($query);
                      echo 'Total Applied Candidates for the post is : ' .$num;

                      // $res = mysqli_fetch_array($query);
                      // echo $res["1"];

                      while ($res = mysqli_fetch_array($query)) {
              ?>
                  
                  <tr>
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo $res['name'] ?></td>
                        <td><?php echo $res['qualification'] ?></td>
                        <td><?php echo $res['number'] ?></td>
                        <td><?php echo $res['email'] ?></td>
                        <td><?php echo $res['refference'] ?></td>
                        <td><?php echo $res['jobposition'] ?></td>
                        <td>
                            
                              <!-- <button class="btn1"><a href="update.php">Edit</a></button> -->

                              <a class="btn1" href="update.php">Edit</a>
                        
                          </td>
                          <td> 
                            <!-- <button class="btn2" >Delete</button>  -->
                            <a  class="btn2" href="delete.php">Delete</a>
                            </td>
                  </tr>

              <?php
                      }

                ?>





            
              
                <!-- Add more rows as needed -->
              </tbody>
</table>


  <!-- <div class="container p-2 mx-auto sm:p-4 dark:text-gray-800">
	
	<div class="overflow-x-auto">
		<table class="w-full text-xs">
			<colgroup>
				<col>
				<col>
				<col>
				<col>
				<col>
				<col class="w-32">
			</colgroup>
			<thead class="bg-green-500">
				<tr class="text-start">
					<th class="p-3">No.</th>
					<th class="p-3">Name</th>
					<th class="p-3">Degree</th>
					<th class="p-3">Phpne</th>
					<th class="p-3 ">Email</th>
					<th class="p-3">Refference</th>
					<th class="p-3">Position</th>
					<th class="p-3">Operation</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
					<td class="p-3">demo</td>
					<td class="p-3">demo</td>
					<td class="p-3">demo</td>
					<td class="p-3">demo</td>
					<td class="p-3">demo</td>
					<td class="p-3">demo</td>
          <td class="p-3">demo</td>
          <td class="p-3 flex w-full justify-end gap-20">
       
       <button class="bg-green-500 p-1 rounded-md me-10">Update</button>
       <i class="fa-solid fa-pen-to-square"></i>
       
       
       <button class="bg-green-500 p-1 rounded-md">Delete</button>
      
          </td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div> -->

</div>

</body>
</html>