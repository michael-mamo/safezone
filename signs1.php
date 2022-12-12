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
        				<h4>የሚከለክሉ</h4>
                        <img src="img/Signs/yemikeleklu/Capture1.PNG" class="modal-open" data-modal="modal1" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture2.PNG" class="modal-open" data-modal="modal2" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture3.PNG" class="modal-open" data-modal="modal3" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture4.PNG" class="modal-open" data-modal="modal4" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture5.PNG" class="modal-open" data-modal="modal5" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture6.PNG" class="modal-open" data-modal="modal6" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture7.PNG" class="modal-open" data-modal="modal7" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture8.PNG" class="modal-open" data-modal="modal8" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture9.PNG" class="modal-open" data-modal="modal9" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture10.PNG" class="modal-open" data-modal="modal10" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture11.PNG" class="modal-open" data-modal="modal11" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture12.PNG" class="modal-open" data-modal="modal12" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture13.PNG" class="modal-open" data-modal="modal13" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture14.PNG" class="modal-open" data-modal="modal14" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture15.PNG" class="modal-open" data-modal="modal15" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture16.PNG" class="modal-open" data-modal="modal16" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture17.PNG" class="modal-open" data-modal="modal17" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture18.PNG" class="modal-open" data-modal="modal18" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture19.PNG" class="modal-open" data-modal="modal19" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture20.PNG" class="modal-open" data-modal="modal20" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture21.PNG" class="modal-open" data-modal="modal21" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture22.PNG" class="modal-open" data-modal="modal22" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture23.PNG" class="modal-open" data-modal="modal23" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture24.PNG" class="modal-open" data-modal="modal24" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture25.PNG" class="modal-open" data-modal="modal25" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture26.PNG" class="modal-open" data-modal="modal26" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture27.PNG" class="modal-open" data-modal="modal27" width="80" height="80;">
	                     <img src="img/Signs/yemikeleklu/Capture28.PNG" class="modal-open" data-modal="modal28" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture29.PNG" class="modal-open" data-modal="modal29" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture30.PNG" class="modal-open" data-modal="modal30" width="80" height="80;">
						<img src="img/Signs/yemikeleklu/Capture31.PNG" class="modal-open" data-modal="modal31" width="80" height="80;">
	                    <img src="img/Signs/yemikeleklu/Capture32.PNG" class="modal-open" data-modal="modal32" width="80" height="80;">
						<img src="img/Signs/yemikeleklu/Capture33.PNG" class="modal-open" data-modal="modal33" width="80" height="80;">
						<img src="img/Signs/yemikeleklu/Capture34.PNG" class="modal-open" data-modal="modal34" width="80" height="80;">
						<img src="img/Signs/yemikeleklu/Capture35.PNG" class="modal-open" data-modal="modal35" width="80" height="80;">
						<img src="img/Signs/yemikeleklu/Capture36.PNG" class="modal-open" data-modal="modal36" width="80" height="80;">
						<img src="img/Signs/yemikeleklu/Capture37.PNG" class="modal-open" data-modal="modal37" width="80" height="80;">

	                    <br>

    <button class="btn1"><a href="signs.php">የሚያስጠነቅቁ</a></button> 
    <button class="btn1"><a href="signs1.php"> የሚከለክሉ</a></button>
    <button class="btn1"><a href="signs2.php"> ቅድሚያ የሚያሰጡ</a></button>
    <button class="btn1"><a href="signs3.php"> የሚያስገድዱ</a></button>
    <button class="btn1"><a href="signs4.php"> መረጃ የሚሰጡ</a></button>

     <div class="modal" id="modal1">
	 	<div class="modal-content">
	 		ማንኛቸውም አይነት ተሽከርካሪና በእጅ የሚገፉትም ጭምር እንዳያልፉ የተከለከለ መንገድ ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal2">
	 	<div class="modal-content">
	 		ምልክቱ ባለበት አቅጣጫ እያሽከረከሩ ማለፍ ክልክል ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal3">
	 	<div class="modal-content">
	 		 ቀስቱ በሚያመለክተው አቅጣጫ ወደቀኝ መታጠፍ የተከለከለ ነው  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal4">
	 	<div class="modal-content">
		 ቀስቱ በሚያመለክተው አቅጣጫ ወደግራ መታጠፍ የተከለከለ ነው    
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal5">
	 	<div class="modal-content">
	 		  ከሁለት እግር በላይ ያላቸውን አነስተኛ ተሽከርካሪዎች ምልክቱ ከተከለከለበት ስፍራ ጀምሮ መጨረሻ የሚል ሌላ ምልክት እስከሚታለፍበት ድረስ መቅደም የተከለከለ ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal6">
	 	<div class="modal-content">
		 ከሁለት እግር በላይ ያላቸው የሞተር ተሽከርካሪዎች በዚህ በኩል እንዳይሄዱ የተከለከለ ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal7">
	 	<div class="modal-content">
	 		ሞተር ብስኪሌት ማሽከርከር የተከለከለበት መንገድ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal8">
	 	<div class="modal-content">
	 		በሞተር ሃይል የሚንቀሳቀስ ማንኛውም አይነት ተሽከርካሪ እንዳያልፍ የተከለከለበት መንገድ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal9">
	 	<div class="modal-content">
	 		 ጠቅላላ ክብደቱ በኪሎ ግራም በምልክቱ ላይ ከተመለከተው በላይ ለሆነ የጭነት ተሽከርካሪ ማለፍ የተከለከለ 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal10">
	 	<div class="modal-content">
	 		 ጠቅላላ ክብደቱ በምልክቱ ላይ ከተመለከተው በላይ ለሆነ ማንኛውም ተሽከርካሪ ማለፍ የተከለከለ  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal11">
	 	<div class="modal-content">
	 		ቀስቱ እንደሚያመለክተው በስተግራ ወደኋላ ዞሮ መመለስ ክልክል ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal12">
	 	<div class="modal-content">
	 		 ይህ ምልክት ባለበት መንገድ ብስክሌት እያሽከረከሩ ማለፍ ክልክል ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal13">
	 	<div class="modal-content">
	 		 ለማንኛውም እንስሳና በእንሣት ለሚሳቡ ተሽከርካሪዎች ጭምር በዚህ በኩል ማለፍ ክልክል ነው   
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal14">
	 	<div class="modal-content">
	 		በሰው ሃይል የሚንቀሳቀሱ ተሽከርካሪዎችን በዚህ በኩል ማሳለፍ ክልክል ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal15">
	 	<div class="modal-content">
	 		 ይህ ምልክት ባለበት መንገድ ላይ እግረኞች እንዳይሄዱበት ይከለከላል
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal16">
	 	<div class="modal-content">
	 		የአክስሉ ጭነት በምልክቱ ላይ ከተመለከተው ኪሎ ግራም ክብደት በላይ ለሆነ ተሽከርካኢ ማለፍ የተከለከለ 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal17">
	 	<div class="modal-content">
	 		 ጠቅላላ ስፋቱ በሜትር በምልክቱ ላይ ከተመለከተው ኪሎግራም በላይ ለሆነ ተሽከርካሪ ማለፍ የተከለከለ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal18">
	 	<div class="modal-content">
	 		 ጠቅላላ ስፋቱ በሜትር በምልክቱ ከተመለከተው በላይ ለሆነ ተሽከርካሪ ማለፍ የተከለከለ 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>


	 <div class="modal" id="modal19">
	 	<div class="modal-content">
	 		 የከተማ ክልል ምልክት በከተማ ክልል ዉስጥ ለማሽከርከር የተወሰኑትን ህጎች አክብር
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal20">
	 	<div class="modal-content">
	 		 የከተማ ክልልና የፍጥነት ወሰን መጨረሻ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal21">
	 	<div class="modal-content">
	 		 ማንኛውም አይነት የማስጠንቀቂያ የጡሩንባ ድምፅ ማሰማት የተከለከለ ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal22">
	 	<div class="modal-content">
	 		 ይህ ምልክት ከተተከለበት ስፍራ ጀምሮ መገናኛ ወይም መስቀለኛ መንገድ እስክታልፍ ድረስ ወይም በውስጡ መጨረሻ የሚል ፅሁፍ ያለበትን የዚህን አይነት ምልክት እስክታልፍ ድረስ ተሽከርካሪህን ማቆም በፍፁም የተከለከለ ነው 
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal23">
	 	<div class="modal-content">
	 		 ይህ ምልክት ከተተከለበት ስፍራ ጀምሮ የሚቀለውን መገናኛ ወይም መስቀለኛ መንገድ እስክታልፍ ድረስ ወይም መጨረሻ የሚል ፅሁፍ ያለበትን የዚህን አይነት ምልክት እስክታልፍ ድረስ ተሽከርካሪህን ማቆም በፍፁም የተከለከለ ነው ነገር ግን አሽከርካሪው ከመኪናው ሳይወጣ ሰዎችን ማሳፈር እቃ ለመጫን እና ለማውረድ ብቻ ለጥቂት ጌዜ ማቆም ይቻላል
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal24">
	 	<div class="modal-content">
	 		ይህ ምልክት ባለበት መንገድ ላይ ከፊት ለፊት ለሚመጣ ተሽከርካሪ ቅድሚያ ሳይሰጡ ማሽከርከር ክልክል ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal25">
	 	<div class="modal-content">
	 		 ቁም! የጉምሩል ም/ቤት /ፍተሻ ቦና/ ነው። ይህ ምልክት ባለበት ቦታ ሁሉ ማንኛውም አሽከርካሪ ተሽከርካሪውን አቁሞ በጉምሩክ ተቆጣጣሪዎች ሳያስፈትሽ እንዳያልፍ የሚከለክል ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal26">
	 	<div class="modal-content">
	 		 መኪና ለማቆም የሚከለክለው ምልክት ትዕዛዝ መጨረሻ መሆኑን የሚገልጽ ምልክት ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal27">
	 	<div class="modal-content">
	 		 በምልክቱ ላይ ከሚታየው ባነሰ ርቀት ተጠግቶ ማሽከርከር ክልክል ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal28">
	 	<div class="modal-content">
	 		ይህ ምልክት ካለበት ጀምሮ እስከሚቀጥለው መስቀለኛ መንገድ ወይም 'መጨረሻ' ከሚል ጽሁፍ ቀጥሎ የሚገኝ የዚህ አይነት ምልክት እስካለበት ድረስ ለአጭርም ለረጅምም ጊዜ ማቆም የተከለከለ ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal29">
	 	<div class="modal-content">
	 		አደገኛ ፍንዳታ የሚያስከትን ጭነት ለጫነ ተሽከርካሪ የተፈቀደ መንገድ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal30">
	 	<div class="modal-content">
	 		አደገኛ ፍንዳታ የሚያስከትል ጭነት የጫነ ተሽከርካሪ ማለፍ የተከለከለ ነው
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>  
	 <div class="modal" id="modal31">
	 	<div class="modal-content">
	 		የጭነት ተሽከርካሪዎች እንዲተላለፉበት የተፈቀደ መንገድ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div> 
	 <div class="modal" id="modal32">
	 	<div class="modal-content">
	 		ለጭነት ተሽከርካሪ ማለፍ የተከለከለ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div> 
	 <div class="modal" id="modal33">
	 	<div class="modal-content">
	 		የተበላሸ ተሽከርካሪ እየጎተቱ መጓዝ የተከለከለበት መንገድ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div> 
	 <div class="modal" id="modal34">
	 	<div class="modal-content">
	 		ለብስክሌቶች ብቻ ለማሽከርከር የተፈቀደ መንገድ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div> 
	 <div class="modal" id="modal35">
	 	<div class="modal-content">
	 		በመንገዱ ላይ የማሽከርከሪያ አነስተኛ ፍጥነት
	 		<div class="modal-close">+</div>
	 	</div>
	 </div> 
	 <div class="modal" id="modal36">
	 	<div class="modal-content">
	 		የአነስተኛ ፍጥነት መጨረሻ
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>    
	 <div class="modal" id="modal37">
	 	<div class="modal-content">
	 		ጠቅላላ ርዝመቱ በምልክቱ ላይ ከተጠቀሰው በሜትር በላይ ለሆኑ ተሽከርካሪዎች ማለፍ የተከለከለ
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