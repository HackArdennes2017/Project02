$(document).ready(function() {
	$('#lname').keyup(function() {
		console.log("coucou");
		var recherche = $(this).val();
		var data = 'motclef=' + recherche;
		if (recherche.length > 2) {
			$.ajax ({
				type : "GET",
				url : "index.php?controller=PotoController&action=recherche",
				data : data,
				success: function(server_response) {
					$('#resultat').html(server_response).show();
				}
			});
		}
	});
});