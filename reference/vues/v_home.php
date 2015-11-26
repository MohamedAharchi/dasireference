<?php include 'v_menu.php'; ?>
        <div class="container" style="margin-top:100px;">
            <div class="col-md-12">
                <div class="col-md-1"></div>
                <div class="jumbotron col-md-10">
                    <center>
                    <h1>Hello, world!</h1>
                    <p>...</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus</a></p>
                    </center>
                </div>
                <style type="text/css">
                    #conversation {
                        width: 300px;
                        height: 400px;
                        border: black 1px solid;
                        background-color: #efecca;
                        overflow-x: hidden;
                        overflow-y: scroll;
                        padding: 5px;
                        margin-left: 10px;
                    }
                    .fieldset {
                        width: 330px;
                        background-color: #e6e2af;
                        border: black 1px solid;
                    }
                </style>
                <fieldset class='fieldset'>
                    <center><legend>Chat</legend></center>
                    <div id="conversation"></div><br />
                    <form action="#" method="post">
                        <input type="text" id="nom" value="pseudo" size="6">
                        <input type="text" id="message" size="27">
                        <button type="button" id="envoyer" title="Envoyer">Envoyer</button>
                    </form>
                </fieldset>
                <div class="col-md-1"></div>
            </div>
        </div>
<?php include'vues/v_contact.php';  ?>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
        $(function() {
            afficheConversation();
            $('#envoyer').click(function() {
                var nom = $('#nom').val();
                var message = $('#message').val();
                $.post('vues/chat.php', {'nom':nom, 'message': message }, function() {
                    afficheConversation;
                });
		$('#message').focus();
            });

            function afficheConversation() {
                $('#conversation').load('vues/ac.htm');
                if (!$('#message').is(':focus')) {
                    $('#message').val('');
                }
            }
            setInterval(afficheConversation, 1000);
        });
    </script>
