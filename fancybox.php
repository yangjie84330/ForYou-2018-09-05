<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<title>Document</title>

	<style>
	#single_1 img{
		width:350px;
		height:300px;
	}
	</style>
</head>


<body>
<a id="single_1" href="images/p2.png" title="p1">
	<img src="images/p1.png" alt="" />
</a>
<a id="single_2" href="http://farm1.staticflickr.com/756/22625719192_fdc3369588_b.jpg" title="Transparence (delphine.cury)">
	<img src="http://farm1.staticflickr.com/756/22625719192_fdc3369588_m.jpg" alt="" />
</a>
<a id="single_3" href="http://farm9.staticflickr.com/8542/29466009773_a809b99d19_b.jpg" title="aletsch (|| | | gamma | | ||)">
	<img src="http://farm9.staticflickr.com/8542/29466009773_a809b99d19_m.jpg" alt="" />
</a>
<a id="single_4" href="http://farm2.staticflickr.com/1514/23919332220_60b7867d60_b.jpg" title="the forest at dawn (Luca-Anconetani)">
	<img src="http://farm2.staticflickr.com/1514/23919332220_60b7867d60_m.jpg" alt="" />
</a>

<a class="fancybox" rel="gallery1" href="http://farm2.staticflickr.com/1669/23976340262_a5ca3859f6_b.jpg" title="Twilight Memories (doraartem)">
	<img src="http://farm2.staticflickr.com/1669/23976340262_a5ca3859f6_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm2.staticflickr.com/1459/23610702803_83655c7c56_b.jpg" title="Electrical Power Lines and Pylons disappear over t.. (pautliubomir)">
	<img src="http://farm2.staticflickr.com/1459/23610702803_83655c7c56_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm2.staticflickr.com/1617/24108587812_6c9825d0da_b.jpg" title="Morning Godafoss (Brads5)">
	<img src="http://farm2.staticflickr.com/1617/24108587812_6c9825d0da_m.jpg" alt="" />
</a>
<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3691/10185053775_701272da37_b.jpg" title="Vertical - Special Edition! (cedarsphoto)">
	<img src="http://farm4.staticflickr.com/3691/10185053775_701272da37_m.jpg" alt="" />
</a>
</body>

<script>
$(document).ready(function() {
    $("#single_1").fancybox();
	
    $("#single_2").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
    });

    $("#single_3").fancybox({
    	openEffect : 'none',
    	closeEffect	: 'none',
    	helpers : {
    		title : {
    			type : 'outside'
    		}
    	}
    });

    $("#single_4").fancybox({
    	helpers : {
    		title : {
    			type : 'over'
    		}
    	}
    });
    
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

</script>
</html>