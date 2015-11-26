$(document).ready(function(){
    $( "#signup" ).click(function() {
        $("#connexion").hide( "fast" );
        $("#register").show( "slow" );
    });
    
    $( "#backconnexion" ).click(function() {
        $("#register").hide( "fast" );
        $("#connexion").show( "slow" );
    });
 });