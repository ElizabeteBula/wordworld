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
	<nav>
	<table style="width:100%">
	 <tr >
		<?php $__currentLoopData = $vardi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<th><a href='/manavardnica/<?php echo e($i->id); ?>' > <?php echo e($i->valoda); ?></a></th>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
			<!--
			<th><a href="html.html" > <?php echo e($i->valoda); ?></a></th>
			<th><a href="manskonts.html">MANS KONTS</a> </th>
			-->
		</tr>
		  </table>
	</nav>


</section>
<footer>
Copyright © Elizabete Līga Bula
2019
</footer>
<body>
</body>
</html>
<?php /**PATH C:\wamp\www\wordworld\resources\views/manavardnica.blade.php ENDPATH**/ ?>