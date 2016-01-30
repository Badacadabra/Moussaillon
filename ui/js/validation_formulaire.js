$(document).ready(function() {
	
	function test_saisie( e, champ ) {
		if ($( "#" + champ ).val() == "") {
			$( "label[for='" + champ + "']" ).css( {"background-color":"#a60000","border-color":"#a60000"} );
			$( "#" + champ ).css( "border-color","#a60000" );
			e.preventDefault();
			var message_erreur = "Veuillez saisir des données valides";
			$( "#saisie-incorrecte" ).text(message_erreur).css( {"color":"#A60000","font-weight":"bold","margin-top":"20px","background-color":"white"} );
		}
	}
	
	$( "form" ).submit(function(e) {

		test_saisie(e, "nom");
		test_saisie(e, "prenom");
		test_saisie(e, "mail");
		test_saisie(e, "objet");
		test_saisie(e, "message");
		
	});
	
});
