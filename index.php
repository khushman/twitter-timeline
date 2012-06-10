<html>
<head>

<title> Twitter Timeline </title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/blocksit.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {



   $('#timelineblock').BlocksIt({
	numOfCol: 2,
	offsetX: 4,
	offsetY: 4,
	blockElement: 'div'
   });

// generate arrows according to the position generated bu BlocksIt.js
Arrows();
   

// This is a small hack to replace the arrows when the block is hovered
$(".block").hover(function() {
	var posLeft = $(this).css("left");
	
	if ( posLeft == "0px" ) {
				$(this).children("span#edge").addClass("redge_h");			
			} else 	{
				$(this).children("span#edge").addClass("ledge_h");			
			} 	
	}, function () {
	var posLeft = $(this).css("left");

		if ( posLeft == "0px" ) {
					$(this).children("span#edge").removeClass("redge_h");			
				} else 	{
					$(this).children("span#edge").removeClass("ledge_h");			
				} 
  	});

// function to place the arrows
function Arrows()
	{ 
		var all_blocks = $('#timelineblock').find('.block');
		
		$.each(all_blocks, function(i, obj){
			var posLeft = $(obj).css("left");

			if ( posLeft == "0px" ) {
				$(obj).css("margin", "0px 0px 20px 65px").css("width", "340px").css("float", "left");
				$(obj).children("span#edge").addClass("redge");			
			} else 	{
				$(obj).css("margin", "0px 0px 20px 18px").css("float","right").css("width", "340px").css("clear","both");
				$(obj).children("span#edge").addClass("ledge");			
			} 		
				
		});
	}
});
</script>

</head>

<body>

<div class = "maincontainer borders">

	<div class = "topcontainer"></div> 

	<div class = "timelinecontainer">
		
		<div class = "timeline"></div>

	<div id = "timelineblock">
	
		<div class = "block">
			<span id="edge"></span>
			<p> 1 This is a test tweet for Twitter Timeline. First Tweet.</p>
		</div>

		<div class = "block">
			<span id="edge"></span>
			<img src = "img1.jpg" class = "pic" />
			<p> 2 Hello.</p>
		</div>

		<div class = "block">
			<span id="edge"></span>
			<img src = "img1.jpg" class = "pic" />

			<p> 3 5 TEAMtalk takes a look at six players who are tipped to become high on the lists of Europe's top clubs with starring performances at Euro 2012.5 TEAMtalk takes a look at six players who are tipped to become high on the lists of Europe's top clubs with starring performances at Euro 2012.</p>
		</div>

		<div class = "block">
			<span id="edge"></span>
			<p>5 TEAMtalk takes a look at six players who are tipped to become high on the lists of Europe's top clubs with starring performances at Euro 2012. 5 TEAMtalk takes a look at six players who are tipped to become high on the lists of Europe's top clubs with starring performances at Euro 2012. </p>
		</div>

		<div class = "block">
			<span id="edge"></span>
			<p>5 TEAMtalk takes a look at six players who are tipped to become high on the lists of Europe's top clubs with starring performances at Euro 2012.</p>
		</div>

		<div class = "block">
			<span id="edge"></span>
			<p>6 TEAMtalk takes a look at six players who are tipped to become high on the lists of Europe's top clubs with starring performances at Euro 2012.</p>
		</div>

<div class = "block">
			<span id="edge"></span>
			<p>7 TEAMtalk takes a look at six players who are tipped to become high on the lists of Europe's top clubs with starring performances at Euro 2012.</p>
		</div>

	</div>
	
	</div> 


</div>

</body>

</html>
