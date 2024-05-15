<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit_update_show database</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

  <section class="p-6 dark:bg-gray-500 dark:text-gray-900 ">
	<form novalidate="" method="POST" class="container flex flex-col text-slate-500 mx-auto space-y-12 md:w-[900px]">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm md:rounded-l-[30px] bg-slate-300">
			<div class="space-y-3 md:h-[300px] md:w-[200px] md:mt-[50px] col-span-full lg:col-span-1">
				<p class="font-medium">Applyings Inormation</p>
				<p class="text-xs mb-10">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <!-- <input class="text-white p-1 bg-indigo-400 rounded-lg col-span-full" type="submit" name="submit" value="Checkout"> -->
        <div class="mt-10">
        <a class="p-1 text-white bg-indigo-400 rounded-lg" href="displaytable.php">Check Form</a>
        </div>
		</div>


			<div class="grid p-3 rounded-lg  md:ps-10  md:w-[400px] md:ms-52 grid-cols-6 gap-4 col-span-full lg:col-span-3">


				<div class="col-span-full sm:col-span-3">
					<label for="firstname" class="text-sm"></label>
					<input id="name" name="name" type="text" placeholder="Your Name" class="w-full p-1 rounded-md focus:ring focus:ring-opacity-75 text-slate-600 dark:border-gray-300">
				</div>


				<div class="col-span-full sm:col-span-3">
					<label for="qualification" class="text-sm"></label>
					<input id="qualification" name="qualification" type="text"  placeholder="Your Qualification" class="w-full p-1 rounded-md focus:ring focus:ring-opacity-75 text-slate-600 dark:border-gray-300">
				</div>


				<div class="col-span-full sm:col-span-3">
					<label for="email" class="text-sm"></label>
					<input id="email" name="email" type="email" placeholder="Enter email" class="w-full p-1 rounded-md focus:ring focus:ring-opacity-75 text-slate-600  dark:border-gray-300">
				</div>


				<div class="col-span-full sm:col-span-3">
					<label for="number" class="text-sm"></label>
					<input id="number" name="number" type="number" placeholder="Your number" class="w-full p-1 rounded-md focus:ring focus:ring-opacity-75 text-slate-600 focus:dark:ring-violet-600 dark:border-gray-300">
				</div>


				<div class="col-span-full sm:col-span-3">
					<label for="reffer" class="text-sm"></label>
					<input id="reffer" name="reffer" type="text" placeholder="Refference" class="w-full p-1 rounded-md focus:ring focus:ring-opacity-75 text-slate-600dark:border-gray-300">
				</div>


				<div class="col-span-full sm:col-span-3">
					<label for="jobposition" class="text-sm"></label>
					<input id="jobposition" name="jobposition" type="text" value="Web Developer" class="w-full rounded-md focus:ring focus:ring-opacity-75 p-1  text-slate-600 dark:border-gray-300">
				</div>

        <input type="submit" name="submit" class="text- w-[70px] mx-auto md:ms-[280px] text-white p-2 bg-indigo-400 rounded-lg col-span-full" value="Submit">
		


			</div>
      
		</fieldset>
		
	</form>
</section>

  </body>
</html>



<?php


include("connection.php");
include("links.php");

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$qualification = $_POST['qualification'];
$email = $_POST['email'];
$number = $_POST['number'];
$reffer = $_POST['reffer'];
$jobposition = $_POST['jobposition'];

$insertquery = " insert into jobregistration(name, qualification,email,number,refference,jobposition) value('$name', '$qualification', '$email', '$number', '$reffer', '$jobposition')";



$res = mysqli_query($con, $insertquery);

if($res){
?>
<script>
  alert('Data successfully inserted');
</script>
<?php
}else{
  ?>
<script>
  alert('Facing Error');
</script>
<?php
}

}

?>


