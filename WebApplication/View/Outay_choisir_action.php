<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>

html {
    background-image: url("assets/img/backgrounds/fond_ecran_cut.png");
    background-color: #F1622A;
    background-size: 100% 100%;
		background-size:  cover;
    height: 600px;
    background-repeat: no-repeat;

    position: relative;
    margin-left: auto;
    margin-right: auto;
}
input[type=text], select {
    width: 480px;
    padding: 12px 20px;
    margin: 8px 0;
		font-size: 16px;
		font-style: italic;
    color: #d0cccc;
    display: inline-block;
    border: none;
    border-radius: 40px;
    box-sizing: border-box;
		background-color: #928783;
}

.InputButtonSmall{
	cursor:pointer;
	border-radius: 50%;
	border:1px solid #F1622A;
	width:125px;
	height:125px;


}
.InputButtonSmall:active{
	transform: scale(1.05);
}

.InputButtonRDV{
	background:url("assets/img/backgrounds/rdv.png");
	background-repeat: no-repeat;
	background-size: 110px 110px;
	background-color: #F1622A;
	background-position: center;
}

.InputButtonJSI{
	background:url("assets/img/backgrounds/jesuisici.png");
	background-repeat: no-repeat;
	background-size: 110px 110px;
	background-color: #F1622A;
	background-position: center;
}

.SectionStyle{
  height: 256px;
	position: relative;
	margin-top: 50%;
	margin-left: 25%;

}

.FooterStyle{
  font-size: 16px;
  font-style: normal;
  color: #d0cccc;
}
</style>
	<title>Test</title>
</head>
<body>

  <header>

<input type="text" id="lname" name="lastname" placeholder="Rechercher un pseudo">
  </header>




<section class="SectionStyle">

	<input class="InputButtonSmall InputButtonRDV" type="submit" value="">
	<input class="InputButtonSmall InputButtonJSI" type="submit" value="">
</section>
<footer class="FooterStyle">
  Messages / Liste des copains
</footer>
<script src="assets/js/myscripts.js"></script> 
</body>
</html>
