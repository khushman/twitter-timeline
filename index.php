<html>
<head>

<title> Twitter Timeline </title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script src="js/jquery.js" type="text/javascript"></script>
</head>

<body>

<div class = "maincontainer borders">

	<div class = "topcontainer"></div> 

	<div class = "timelinecontainer">
		
		<div class = "timeline"></div>

	<ol class = "timelineblock">

	  <li> 
   	    <span id="edge"></span><D-r>
	    <p>just had a lunch ...</p>
	  </li>

	  <li> 
   	    <span id = "edge"></span>
	    <p>just had a lunch ...</p>
	  </li>

	  <li> 
   	    <span id="edge"></span>
	    <p>just had a lunch ...</p>
	  </li>

	  <li> 
   	    <span id="edge"></span>
	    <p>just had a lunch ...</p>
	  </li>

	  <li> 
   	    <span id="edge"></span>
	    <p>just had a lunch ...</p>
	  </li>
	 


	</ol>

<script>
$(function(){
	$(".timelineblock li:odd").css("margin", "0px 0 20px 25px");
	$(".timelineblock li:even").css("margin", "0px 0 20px 25px");
	$(".timelineblock li:odd").css("float", "right").css("margin-right", "20px").css("clear", "both");

	$(".timelineblock li:odd").children("span#edge").addClass("ledge");
	$(".timelineblock li:even").children("span#edge").addClass("redge");

});
</script>
	
	</div> 


</div>

</body>

</html>
