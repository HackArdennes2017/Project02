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


.SectionStyle{
  height: 500px;
}

.FooterStyle{
  font-size: 16px;
  font-style: normal;
  color: #d0cccc;
}

.DirtyHack{
  position: absolute;
  margin-left: 33%;
  margin-top: 25%;
}

.EventText{
  text-align: center;
  font-size: 20px;
  color: #d0cccc;
}

div.gallery{
  border: none;
  float: left;
  width: 150px;
  height: 150px;
  text-align: center;
}

div.gallery:hover{
  border: 1px solid transparent;
}

div.gallery img{
  width: 80%;
  height: auto;
  position: relative;
  margin-top: 100%;
  padding: 0;
}

div.desc{
  padding: 0px;
  text-align: center;
  color: #d0cccc;

}

* {
  box-sizing: border-box;
}

.responsive{
  padding: 0 6px;
  float: left;
  width: 24.999999%;
}

@@media only screen and (max-width: 500px) {
  .responsive{
    width: 100%;
  }
}

</style>
	<title>Test</title>
</head>
<body>

  <header>

<input type="text" id="lname" name="lastname" placeholder="Rechercher un pseudo">
  </header>
<section class="SectionStyle">
  <div class="DirtyHack">
<table>
  <tr>
    <td colspan="2" align="center">
      <img src="../assets/img/Lieu_strategique/zanzibar.png" width="150" height="150">
      <div class="EventText">
        Lucas donne <strong>RDV</strong><br>
        le Zanzibar
      </div>
    </td>

  </tr>
  <tr>
  <td>
    <img src="../assets/img/backgrounds/accepter.png" width="75" height="75">
  </td>
  <td>
    <img src="../assets/img/backgrounds/refus.png" width="75" height="75">
  </td>
  </tr>
</table>
</section>
<footer class="FooterStyle">
  Messages / Liste des copains
</footer>

</body>
</html>
