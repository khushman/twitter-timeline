<html>
<head>

<title> Twitter Timeline </title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script src="js/jquery.js" type="text/javascript"></script>
</head>

<body>

<div class = "maincontainer borders">

	<div class = "topcontainer borders"></div> 

	<div class = "timelinecontainer borders">
		
		<div class = "timeline"></div>

	<ol class = "timelineblock">

	  <li> 
	    <div class="time">Yesterday</div>
	    <span class="corner"></span>
	    <p>just had a lunch ...</p>
	  </li>

	  <li>
	    <div class="time">about an hour ago</div>
	    <span class="corner"></span>
	    <p>play football</p>
	  </li>


	  <li>
	    <div class="time">about an hour ago</div>
	    <span class="corner"></span>
	    <p>play football</p>
	  </li>

	  <li> 
	    <div class="time">Yesterday</div>
	    <span class="corner"></span>
	    <p>just had a lunch ...<br/></p>
	  </li>

	  <li>
	    <div class="time">about an hour ago</div>
	    <span class="corner"></span>
	    <p>play football</p>
	  </li>
 	
	  <li> 
	    <div class="time">Yesterday</div>
	    <span class="corner"></span>
	    <p>just had a lunch ...<br/></p>
	  </li>

	  <li>
	    <div class="time">about an hour ago</div>
	    <span class="corner"></span>
	    <p>play football</p>
	  </li>



	</ol>

<script>
$(".timelineblock li:odd").css("margin", "0px 0 20px 65px");

$(".timelineblock li:even").css("margin", "0px 0 20px 65px");

$(".timelineblock li:odd").css("float", "right").css("margin-right", "60px").css("clear", "both");

</script>
	
	</div> 


</div>

</body>

</html>
