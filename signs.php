<!DOCTYPE html>
<html>
<head>
	<title>መንገድ ምልክቶች </title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
	
  body{
  	position: relative;
  	overflow-x: hidden;
  }
  body,
  html{height: 100%;}

  .nav .open > a,
  .nav .open > a:hover,
  .nav .open > a:focus{background-color: transparent;}

#wrapper{
	padding-left: 0;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease; 
}
#wrapper .toggled{
   padding-left: 220px;
}

#sidebar-wrapper{
	/*z-index: 1000;*/
	left: 220px;
	width: 0;
	height: 100%;
	margin-left: -220px;
	/*background: #1a1a1a;*/
	background-color: #000;
/*	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;*/

}
/*#sidebar-wrapper::-webkit-scrollbar{
	display: none;
}*/
#wrapper.toggled #sidebar-wrapper{
	width: 220px;
}

#page-content-wrapper{
	width: 100%;
	padding-top: 70px;
}


#wrapper.toggled #page-content-wrapper{
	position: absolute;
	margin-right: 220px;
}

.sidebar-nav{
	position: absolute;
	top: 0;
	width: 220px;
	margin: 0;
	padding:0;
	list-style: none;
	display: inline-block;
}

.sidebar-nav li{
	position: relative;
	line-height: 20px;
	display: inline-block;
	width: 100%;
}
.container{
	padding-right: 10px;
	margin-left: 210px;
}
/*.sidebar-nav li:before{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	z-index: -1;
	height: 100%;
	width: 3px;
}*/
.sidenav > ul > a {
	color: black !important;
}


.modal {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: rgba(0, 0, 0, 0.5);
	z-index: 2;
	display: none;
}

.modal-content {
	background: #fff;
	margin-top: 100px;
	width: 50%;
	margin-left: auto;
	margin-right: auto;
	padding: 8px 24px;
	border-radius: 4px;
	z-index: 4;
	font-weight: 100;
	padding: 10px 0;
	font-size: 20px;
}
.modal-close {
	float: right;
	font-size: 20px;
	border: 0;
	outline: 0;
	padding: 5px 8px;
	border-radius: 50%;
	transform: rotate(45deg);
	cursor: pointer;
}

img {
	padding: 10px 10px 10px 10px;

}

.btn{
		margin: 15px;
		text-align: center;
		padding: 10px;
		background-color: red;
		width: 20%;
		color: white;
		border-radius: 6px;
		font-weight: bold;
		text-transform: uppercase;
		box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);
		transition: ease-in all 0.2s;
}
.btn1 {
	margin: 15px;
		text-align: center;
		padding: 10px;
		background-color: yellow;
		width: 20%;
		color: white;
		border-radius: 6px;
		border-color: yellow;
		font-weight: bold;
		text-transform: uppercase;
		box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);
		transition: ease-in all 0.2s;

}
.btn2 {
		margin: 15px;
		text-align: center;
		padding: 10px;
		background-color: blue;
		width: 20%;
		color: white;
		border-radius: 6px;
		font-weight: bold;
		text-transform: uppercase;
		box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);
		transition: ease-in all 0.2s;

}
.btn a {
	text-decoration: none;
}
.btn1 a {
	text-decoration: none;
}
.btn2 a {
	text-decoration: none;
}
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 200px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}






	</style>
	
</head>
<body>


	<div id="wrapper">
		<div class="overlay">
		<nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">	
				<ul class="nav sidebar-nav sidenav" style="color: black; text-align: center; background-color: #002;">
				<li style="padding-bottom: 40px; padding-top: 10px; color: #fff;"><a href="index.php">መነሻ ገጽ</a></li>
			    <li><a href="Tutorial.php">ምእራፍ 1</a></li>
				 <li><a href="Ch2.php">ምእራፍ 2</a></li>
				 <li><a href="Ch3.php">ምእራፍ 3</a></li>
				 <li><a href="Ch4.php">ምእራፍ 4</a></li>
				 <li><a href="Ch5.php">ምእራፍ 5</a></li>
				 <li><a href="Ch6.php">ምእራፍ 6</a></li>	
				 <li><a href="Ch7.php">ምእራፍ 7</a></li>
				 <li><a href="Ch8.php">ምእራፍ 8</a></li>
				 <li><a href="Ch9.php">ምእራፍ 9</a></li>
				 <li><a href="Ch10.php">ምእራፍ 10</a></li>
				 <li><a href="Ch11.php">ምእራፍ 11</a></li>
				 <li><a href="Ch12.php">ምእራፍ 12</a></li>
				 <li><a href="Ch13.php">ምእራፍ 13</a></li>
				 <li><a href="Ch14.php">ምእራፍ 14</a></li>
				 <li><a href="quiz.php">ሙከራ ፈተና</a></li>
				 <li><a href="signs.php">የመንገድ ምልክቶች</a></li>
				 <li><a href="punish.php">ቅጣቶች</a></li>
				 <li><a href="user-ad.php">ማስታወቂያ</a></li>
			</ul>
		</nav>

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">
        				<h1> መንገድ ምልክቶች </h1>
        				<h4>የሚያስጠነቅቁ የመንገድ ዳር ምልክቶች</h4>
                        <img src="img/Signs/yemiastenekeku/Capture1.PNG" class="modal-open" data-modal="modal1" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture2.PNG" class="modal-open" data-modal="modal2" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture3.PNG" class="modal-open" data-modal="modal3" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture4.PNG" class="modal-open" data-modal="modal4" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture5.PNG" class="modal-open" data-modal="modal5" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture6.PNG" class="modal-open" data-modal="modal6" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture7.PNG" class="modal-open" data-modal="modal7" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture8.PNG" class="modal-open" data-modal="modal8" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture9.PNG" class="modal-open" data-modal="modal9" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture10.PNG" class="modal-open" data-modal="modal10" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture11.PNG" class="modal-open" data-modal="modal11" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture12.PNG" class="modal-open" data-modal="modal12" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture13.PNG" class="modal-open" data-modal="modal13" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture14.PNG" class="modal-open" data-modal="modal14" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture15.PNG" class="modal-open" data-modal="modal15" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture16.PNG" class="modal-open" data-modal="modal16" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture17.PNG" class="modal-open" data-modal="modal17" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture18.PNG" class="modal-open" data-modal="modal18" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture19.PNG" class="modal-open" data-modal="modal19" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture20.PNG" class="modal-open" data-modal="modal20" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture21.PNG" class="modal-open" data-modal="modal21" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture22.PNG" class="modal-open" data-modal="modal22" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture23.PNG" class="modal-open" data-modal="modal23" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture24.PNG" class="modal-open" data-modal="modal24" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture25.PNG" class="modal-open" data-modal="modal25" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture26.PNG" class="modal-open" data-modal="modal26" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture27.PNG" class="modal-open" data-modal="modal27" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture28.PNG" class="modal-open" data-modal="modal28" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture29.PNG" class="modal-open" data-modal="modal29" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture30.PNG" class="modal-open" data-modal="modal30" width="80" height="80;">
                        <img src="img/Signs/yemiastenekeku/Capture31.PNG" class="modal-open" data-modal="modal31" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture32.PNG" class="modal-open" data-modal="modal32" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture33.PNG" class="modal-open" data-modal="modal33" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture34.PNG" class="modal-open" data-modal="modal34" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture35.PNG" class="modal-open" data-modal="modal35" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture36.PNG" class="modal-open" data-modal="modal36" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture37.PNG" class="modal-open" data-modal="modal37" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture38.PNG" class="modal-open" data-modal="modal38" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture39.PNG" class="modal-open" data-modal="modal39" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture40.PNG" class="modal-open" data-modal="modal40" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture41.PNG" class="modal-open" data-modal="modal41" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture42.PNG" class="modal-open" data-modal="modal42" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture43.PNG" class="modal-open" data-modal="modal43" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture44.PNG" class="modal-open" data-modal="modal44" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture45.PNG" class="modal-open" data-modal="modal45" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture46.PNG" class="modal-open" data-modal="modal46" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture47.PNG" class="modal-open" data-modal="modal47" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture48.PNG" class="modal-open" data-modal="modal48" width="80" height="80;">
	                     <img src="img/Signs/yemiastenekeku/Capture49.PNG" class="modal-open" data-modal="modal49" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture50.PNG" class="modal-open" data-modal="modal50" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture51.PNG" class="modal-open" data-modal="modal51" width="80" height="80;">
						<img src="img/Signs/yemiastenekeku/Capture52.PNG" class="modal-open" data-modal="modal52" width="80" height="80;">
	                    <img src="img/Signs/yemiastenekeku/Capture53.PNG" class="modal-open" data-modal="modal53" width="80" height="80;">
						<br>

    <button class="btn1"><a href="signs.php">የሚያስጠነቅቁ</a></button> 
    <button class="btn1"><a href="signs1.php"> የሚከለክሉ</a></button>
    <button class="btn1"><a href="signs2.php"> ቅድሚያ የሚያሰጡ</a></button>
    <button class="btn1"><a href="signs3.php"> የሚያስገድዱ</a></button>
    <button class="btn1"><a href="signs4.php"> መረጃ የሚሰጡ</a></button>

     <div class="modal" id="modal1">
	 	<div class="modal-content">
		 	በመንገዱ ላይ ጠባብ ድልድይ ስለሚያጋጥምህ ተጠንቅቀህ አሽከርክር 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal2">
	 	<div class="modal-content">
	 		 በመንገዱ የሚጠግኑ ሰራተኞች ስላሉ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal3">
	 	<div class="modal-content">
	 		 ባለ አራት አቅጣጫ መንገድ ስለሚያጋጥምህ ቆመህ ለተሽከርከሪዎች እና ለተላላጊዎች ቅድሚያ በመስጠት ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal4">
	 	<div class="modal-content">
	 		 ፊት ለፊት እና ወደ ግራ የሚያስኬድ መገናኛ መንገድ ስለሚያጋጥምህ ተጠንቅቀህ አሽከርክር  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal5">
	 	<div class="modal-content">
		 ፊት ለፊት እና ወደ ቀኝ የሚያስኬድ መገናኛ መንገድ ስለሚያጋጥምህ ተጠንቅቀህ አሽከርክር    
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal6">
	 	<div class="modal-content">
	 		 መገናኛ መንገዱ ወደግራ እና ወደቀኝ የሚታጠፍ እንጂ ወደ ፊት ለፊት የሚያስኬድ ስላልሆነ ተጠንቅቀህ አሽከርክር 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal7">
	 	<div class="modal-content">
	 		 የተበላሸ መንገድ ስለሚያጋጥምህ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal8">
	 	<div class="modal-content">
	 		 የምታሽከረክርበት መንገድ ወደግራ ስለሚታጠፍ የግራ ረድፍህን ይዘህ በጥንቃቄ አሽከርክር  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal9">
	 	<div class="modal-content">
		 የምታሽከረክርበት መንገድ ወደቀኝ ስለሚታጠፍ የቀኝ ረድፍህን ይዘህ በጥንቃቄ አሽከርክር  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal10">
	 	<div class="modal-content">
	 		 መጀመሪያ ወደግራ ቀጥሎ ወደቀኝ የሚታጠፍ መንገድ ስለሚያጋጥምህ ተጠንቅቀህ አሽከርክር   
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal11">
	 	<div class="modal-content">
		 መጀመሪያ ወደቀኝ ቀጥሎ ወደግራ የሚታጠፍ መንገድ ስለሚያጋጥምህ ተጠንቅቀህ አሽከርክር   
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal12">
	 	<div class="modal-content">
			መንገዱ እየጠበበ የሚሄድ ስለሆነ ተጠንቅቀህ አሽከርክር	 		
			<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal13">
	 	<div class="modal-content">
	 		 መዝጊያ ያለው የባቡር ሃዲድ ማቋረጫ ስለሚያጋጥምህ ቆመህ ባቡር አለመኖሩን አረጋግጠህ በጥንቃቄ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal14">
	 	<div class="modal-content">
	 		 መዝጊያ የሌለው የባቡር ሃዲድ ማቋረጫ ስለሚያጋጥምህ ቆመህ ባቡር አለመኖሩን አረጋግጠህ በጥንቃቄ አሽከርክር 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal15">
	 	<div class="modal-content">
	 		 አደገኛ ቁልቁለት ስለምያጋጥምህ ከባድ ማርሽ በማስገባት ተጠንቅቀህ አሽከርክር  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal16">
	 	<div class="modal-content">
	 		 አጭር ርቀት ዉስጥ የተደጋገመ የባቡር ሃዲድ ማቋረጫ መኖሩን የሚያስጠነቅቅ ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal17">
	 	<div class="modal-content">
	 		 በመንገድ ላይ የባቡር ሃዲድ ማቋረጫ ስላለ ተጠንቅቀህ አሽከርክር 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal18">
	 	<div class="modal-content">
	 		 የህለት ባቡሮች ሃዲድ መንገዱን የሚያቋርጥ ስለሆነ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>


	 <div class="modal" id="modal19">
	 	<div class="modal-content">
	 		 በመንገድ ላይ ብዝይ ሰዎች የሚተላለፉበት አካባቢ ስለሆ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal20">
	 	<div class="modal-content">
	 		 ተማሪዎች የሚበዙበት አካባቢ ስለሆነ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal21">
	 	<div class="modal-content">
	 		 በአንድ አቅጣጫ ብቻ ለማሽከርከር በተፈቀደለት መንገድ ላይ ለጊዜው በሁለቱም አቅጣጫ በኩል እንዲተላለፉበት ስለተፈቀደ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal22">
	 	<div class="modal-content">
	 		 የሚያንሸራትት መንገድ ስለሚያጋጥምህ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal23">
	 	<div class="modal-content">
	 		 በመንገዱ ላይ አስጊ ወይም አደገኛ ሁኔታ ስላለ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal24">
	 	<div class="modal-content">
	 		 ወደፊት የትራፊክ መብራት ስላለ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal25">
	 	<div class="modal-content">
	 		 በመንገድ አግድም የሚነፍስ ሃይለኛ ንፋስ ስላለ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal26">
	 	<div class="modal-content">
	 		 ወደግራ የሚታጠፍ አደገኛ ኩርባ /ምልክቱ ሲዞር ወደቀኝ የሚታጠፍ አደገኛ ኩርባ ስላለ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal27">
	 	<div class="modal-content">
	 		 ወደፊት ክብ አደባባይ ስላለ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal28">
	 	<div class="modal-content">
	 		ሁለት ነጠላ መንገድ ወደ አንድ ነጠላ መንገድ ስለሚገናኝ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal29">
	 	<div class="modal-content">
	 		በመንገድ ላይ የሙፈናጠር ድንጋይ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal30">
	 	<div class="modal-content">
	 		ወደፊት የትራፊክ መጨናነቅ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal31">
	 	<div class="modal-content">
	 		ወደፊት የቤት እንስሳት ስላሉ /መንገድ ስለሚያቋርጡ/ ፍጥነትህን በመቀነስ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal32">
	 	<div class="modal-content">
	 		የአካል ጉዳተኞች ስላሉ ፍጥነትህን በመቀነስ ተጠንቅቀህ እለፍ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal33">
	 	<div class="modal-content">
	 		ወደፊት የእርሻ መገልገያ መሳሪያዎች ስላሉ / መንገዱን ስለሚያቋርጡ/ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal34">
	 	<div class="modal-content">
	 		አደገኛ ጠመዝማዛ መንገድ ስለሚያጋጥም ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal35">
	 	<div class="modal-content">
	 		ወደፊት የእሳት አደጋ መከላከያ ጣቢያ ስላለ /የእሳት አደጋ መከላከያ ተሽከርካሪ ስለሚያቋርጥ/ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal36">
	 	<div class="modal-content">
	 		  ወደፊት የጭነት ተሽከርካሪዎች ስላልይ /መንገዱን ስለሚያቋርጡ/ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal37">
	 	<div class="modal-content">
	 		ከፊት ለፊት የህጻናት መጫወቻ ኦታ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal38">
	 	<div class="modal-content">
	 		መንገድ ለሁለት መከፈል የሚጀምርበት ስለሆነ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal39">
	 	<div class="modal-content">
	 		ለሁለት ተከፍሉ የነበረው መንገድ ማብቂያ ስለሆነ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal40">
	 	<div class="modal-content">
	 		ቁም የሚል ምልክት ወደፊት ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal41">
	 	<div class="modal-content">
	 		ቅድሚያ ስጥ የሚል ምልክት ወደፊት ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal42">
	 	<div class="modal-content">
	 		በጎን በኩል ማዕዘናዊ ቅርፅ ሰርቶ የሚገኝ መንገድ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal43">
	 	<div class="modal-content">
	 		Y ቅርፅ ያለው መገናኛ መንገድ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal44">
	 	<div class="modal-content">
	 		በባንዲራ ትራፊክን የሚያስተናግድ ሰው ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal45">
	 	<div class="modal-content">
	 		መንገድ ቀያሽ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal46">
	 	<div class="modal-content">
	 		በቀኝ በኩል የባቡር ሃዲድ ማቋረጫ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal47">
	 	<div class="modal-content">
	 		በግራ በኩል የባቡር ሃዲድ ማቋረጫ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal48">
	 	<div class="modal-content">
	 		T ቅርፅ ያለው መንገድ ትይዩ የባቡር ሃዲድ ማቋረጫ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal49">
	 	<div class="modal-content">
	 		  የአስፋልት መንገድ መጨረሻ ስላለ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal50">
	 	<div class="modal-content">
	 		  ናዳ ያለበት መንገድ ስለሚያጋጥምህ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal51">
	 	<div class="modal-content">
	 		ተንቀሳቃሽ /ተነሺ/ ድልድይ ስለሚያጋጥምህ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal52">
	 	<div class="modal-content">
	 		ወደወንዝ ዳርቻ የሚወስድ መንገድ ስለሚያጋጥምህ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>
	 <div class="modal" id="modal53">
	 	<div class="modal-content">
	 		የመንገዱ ዳር አደገኛ ስለሆነ ፍጥነትህን በመቀነስ ተጠንቅቀህ አሽከርክር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>









     			
     				 
                        


                         </div>
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>



		</div>
	</div>

 <script type="text/javascript">
	 	var modalBtns = document.querySelectorAll('.modal-open');

	 	modalBtns.forEach(function(btn){
	 		btn.onclick = function() {
	 			var modal = btn.getAttribute("data-modal");

	 			document.getElementById(modal).style.display = "block";
	 		};
	 	});


	 	var closeBtns = document.querySelectorAll(".modal-close");
	 	closeBtns.forEach(function(btn){
	 		btn.onclick = function() {
	 			var modal = (btn.closest(".modal").style.display = "none");
	 		};
	 	});
	 </script>


	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<script src="css/jquery.min.js"></script>

</body>
</html>