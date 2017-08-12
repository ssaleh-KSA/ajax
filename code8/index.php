<?php 

include '../connect.php';



?>

<html>  
  <head>  
       <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <style>
      	.connect {
		    background-color: #117efd;
		    width: 60px;
		    height: 60px;
		    text-align: center;
		    color: #FFF;
		    border-radius: 50%;
		    margin: auto;
		    margin-top: 100px;
		    box-shadow: 0px 0px 15px 6px #CCC;
		    cursor: pointer;
      	}
      	.button-connect {
		    margin-top: 18px;
		    font-size: 20px;
      	}
      	.question {
		    width: 50px;
		    height: 50px;
		    border-radius: 50%;
		    text-align: center;
		    color: #117efd;
		    box-shadow: 0px 0px 10px 4px #CCC;
		    margin: auto;
		    margin-top: 40px;
		    cursor: pointer;
      	}
      	.chart {
      		width: 50px;
		    height: 50px;
		    border-radius: 50%;
		    text-align: center;
		    color: #117efd;
		    box-shadow: 0px 0px 10px 4px #CCC;
		    margin: auto;
		    margin-top: 40px;
		    margin-bottom: 40px;
		    cursor: pointer;
      	}
      	.button-question {
    		margin-top: 16px;
    		font-size: 18px;
      	}
      	.button-chart {
      		margin-top: 16px;
    		font-size: 18px;  
  	 	}
  	 	.question-div {
			background-color: #959595;
		    width: 95px;
		    height: 40px;
		    padding: 7px;
		    color: #d4d4d4;
		    border-radius: 5px;
		    position: relative;
		    left: 70px;
		    top: -28px;
		    font-size: 18px;
		    cursor: context-menu;
  	 	}
  	 	.chart-div {
			background-color: #959595;
		    width: 95px;
		    height: 40px;
		    padding: 9px;
		    color: #d4d4d4;
		    border-radius: 5px;
		    position: relative;
		    left: 70px;
		    top: -28px;
		    font-size: 16px;
		    cursor: context-menu;
  	 	}
  	 	.show_buttons {
  	 		display: none;
  	 	}
      </style> 
   </head>
   <body>
   	<div class="connect">
		<i class="fa fa-envelope-o button-connect" aria-hidden="true"></i>
   	</div>
   	<div class="show_buttons">
	   	<div class="question">
	   		<i class="fa fa-question button-question" aria-hidden="true"></i>
	   		<div class="question-div">
	   			اسأل سؤال
	   		</div>
	   	</div>
	   	<div class="chart">
	   		<i class="fa fa-pie-chart button-chart" aria-hidden="true"></i>
	   		<div class="chart-div">
	   			إنشاء استطلاع
	   		</div>
	   	</div>
   	</div>
   	<script>
   		
   	$(document).ready(function() {

   		$(document).on('click', '.connect', function() {

   			$('.show_buttons').toggle(500);

   		});

   	});

   	</script>
   </body>
</html>