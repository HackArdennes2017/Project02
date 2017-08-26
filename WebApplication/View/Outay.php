<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/form-elements.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>

    input[type=text], select {
      font-size: 16px;
      font-style: italic;
      color: #d0cccc;
      display: inline-block;
      border: none;
      border-radius: 40px;
      box-sizing: border-box;
      background-color: #928783;
    }

    input ::placeholder {
      color: red;
      font-size: 1.5em;
    }

    .InputButton{
      background:url("assets/img/backgrounds/logo_potooutay.png");
      background-repeat: no-repeat;
      background-color: #F1622A;
      background-position: center;
      background-size: 80%;
      cursor:pointer;
      border-radius: 50%;
      border:1px solid #F1622A;
      margin-top: 40%;
      width:200px;
      height:200px;
      position: relative;
    }

    .InputButton:active{
      transform: scale(1.05);
    }

    .SectionStyle{
      height: 500px;
    }

    .pseudoRecherche a {
      text-decoration: none;
      color: white;
    }

    .resultat {
      background-color: #E6662A;
      width: 30%;
      padding-left: 13%;
      border-radius: 20px;
    }
  </style>
  <title>Test</title>
</head>
<body>
  <nav class="navbar fixed-top navbar-light bg-faded mt-4">
    <div class="container" style="margin: 5%;">
      <div class="row justify-content-md-center">
        <input class="form-control" type="text" id="lname" name="lastname" placeholder="Rechercher un pseudo">
        <div class="resultat" id="resultat"></div>
      </div>
    </div>
  </nav>

  <div>
  	<input class="InputButton" type="submit" value="">
  </div>

  <nav class="navbar fixed-bottom navbar-light bg-faded">
    <div style="color: #d0cccc;">Messages / Liste des copains</div>
  </nav>

  <script src="assets/js/myscripts.js"></script>
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script type="text/javascript" src="assets/js/myscripts.js"></script>
</body>
</html>
