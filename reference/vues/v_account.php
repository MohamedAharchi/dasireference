<?php include 'v_menu.php'; ?>
        <div class="container" style="margin-top:100px;">
            <div class="col-md-12">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="background-color: #2eb6ea;">
                    <img class="profile-img" src="images/icon-account.png" alt="Avatar" />
                    <ul style="list-style: none;">
                        <li><strong>Lastname : </strong>SIGNORET</li>
                        <li><strong>Firstname : </strong>Alexandre</li>
                        <li><strong>Email : </strong>alexandre.signoret@etu.univ-lyon1.fr</li>
                        <li><strong>Class : </strong>DASI 2</li>
                        <li><strong>Session : </strong>2015/2016<span style="margin-left: 50px;"><a href="#contact" class="btn btn-default" data-toggle="modal">Contact</a></span></li>
                    </ul>
                    <hr />
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
<?php include'vues/v_contact.php';  ?>   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.classysocial').ClassySocial();
    });
</script> 
