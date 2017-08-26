<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

html {
    background-image: url("../assets/img/backgrounds/fond_ecran_cut.png");
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

.InputButton{
	background:url("../assets/img/backgrounds/logo_potooutay.png");
	background-repeat: no-repeat;
	background-color: #F1622A;
	background-position: center;
  background-size: 80%;
	cursor:pointer;
	border-radius: 50%;
	border:1px solid #F1622A;
	width:200px;
	height:200px;
	position: relative;
	margin-top: 40%;
	margin-left: 33%;
}
.InputButton:active{
	transform: scale(1.05);
}

.SectionStyle{
  height: 500px;
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

Boussolle
</section>
<footer class="FooterStyle">
  Messages / Liste des copains
</footer>

</body>
</html>