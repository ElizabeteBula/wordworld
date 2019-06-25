<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stils.css">
	<meta charset="utf-8">
	<title> WordWorld </title>
</head>
<header>
<br>
  <strong> <h1>Word World</h1></strong>
   <br>
</header>

<nav>
<table style="width:100%">
 <tr >
    <th><a href="/" > SĀKUMS</a></th>
    <th><a href="/manavardnica">MANAS VĀRDNĪCAS</a></th>
    <th><a href="/pieraksti">PIERAKSTI</a></th>
	  <th><a href="/ieiet">IEIET</a> </th>
	  <th><a href="/registreties">REĢISTRĒTIES</a> </th>
		<th><a href="/manskonts">MANS KONTS</a> </th>
	</tr>
	  </table>
</nav>

<section>




<?php
if (empty($_POST["pieraksti"])) {
    $pieraksti = "";
  } else {

    $pieraksti = test_input($_POST["pieraksti"]);
  }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	<p font-size: 20px><B>PIEVIENOJAM PIERAKSTUS!!!</b></P>
	<form>

	<textarea name="pieraksti" rows="20" cols="50"><?php echo $pieraksti;?></textarea>
 <BR>
<!--	<button  class="button" onclick="ok()">PIEVIENOT </button>  -->
	
	<input type="submit" value="PIEVIENOT" onclick="pievienot()"  class="button">
     
  </form>
  <?php
echo "<h2>Your Input:</h2>";
echo $pieraksti;
?>


</section>






<footer>
Copyright © Elizabete Līga Bula
2019
</footer>
<body>
</body>
</html>
