<?php include 'v_menu.php'; ?>
        <div class="container" style="margin-top:100px;">
            <div class="col-md-12">
                <div class="col-md-3" style="background-color: #2eb6ea;">
                    <img class="profile-img" src="images/icon-account.png" alt="Avatar" />
                    <ul style="list-style: none;">
                        <li><strong>Lastname : </strong></li>
                        <li><strong>Firstname : </strong></li>
                        <li><strong>Email : </strong></li>
                        <li><strong>Class : </strong></li>
                        <li><strong>Session : </strong></li>
                    </ul>
                    <hr />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-9"></div>
            </div>
        </div>
<?php include'vues/v_contact.php';  ?>   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.classysocial').ClassySocial();
    });
</script> 
