<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PotoOutay</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>

        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <img src="assets/img/backgrounds/logo_potooutay.png">
                            <div class="description">
                            	<h1>
	                            	Retrouve tes potes en deux clics !
                            	</h1>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5 bordure">
                        	
                        	<div class="form-box" id="connexion">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Connection</h3>
	                            		<p>Entre ton pseudo et ton mot de passe</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="index.php?controller=PotoController&action=connexion&motclef=null" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Pseudo</label>
				                        	<input type="text" name="form-username" placeholder="Pseudo..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>    
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5 bordure">
                        	
                        	<div class="form-box" id="inscription">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Inscription</h3>
	                            		<p>Remplis les champs suivants:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="index.php?controller=PotoController&action=accueil" method="post" class="registration-form">
				                        <div class="form-group">
				                        	<label class="sr-only" for="pseudo">Pseudo</label>
				                        	<input type="text" name="pseudo" placeholder="Pseudo..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
                                            <label class="sr-only" for="password">Password</label>
                                            <input type="password" name="password" placeholder="Mot de passe..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password2">Password2</label>
                                            <input type="password" name="password2" placeholder="Entrez de nouveau votre mot de passe..." class="form-last-name form-control" id="form-last-name">
                                        </div>
				                        <button type="submit" class="btn">Inscrit toi!</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by <strong>PotoOutay</strong></a> 
        					having a lot of fun. <i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
    <script type="text/javascript">
      var candidate_id = '59a1a14282819f67336f2af7'; // <= Indiquez ici votre identifiant de projet
      (function(c){
        var s=document.createElement('script');
        s.src='/sdk.js?t='+((new Date).getTime()/1e3/600).toFixed();
        s.type='text/javascript';s.async='true';
        s.onload=s.onreadystatechange=function(){
          var s=this.readyState;if(s&&s!='complete'&&s!='loaded')return;
          try{window.top.pl3b15c173.loadApp(c) }catch(e){}
        };
        try{document.body.appendChild(s);}catch(e){};
      })(candidate_id);
    </script>
    </body>

</html>