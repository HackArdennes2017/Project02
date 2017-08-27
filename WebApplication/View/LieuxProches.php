<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
  margin-left: 15%;
  margin-top: 25%;
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

.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    margin-left: 40%;
    margin-top: 40%;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

#attente {
  margin-left: 20%;
  color: white;
}

</style>
	<title>Test</title>
</head>
<body>
 <div class="loader"></div> 
 <h1 id="attente">En attente d'acceptation</h1>
<script type="text/javascript" src="assets/js/myscript.js"></script>
</body>
</html>
