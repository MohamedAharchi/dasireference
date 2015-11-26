<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Connexion</strong>
                </div>
                <div class="panel-body">
                    <!-- Formulaire de connexion -->
                    <form role="form" action="index.php?uc=connexion&action=passToHome" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="images/user.png" alt="">
                                </div>
                            </div>
                            <!-- Message d'erreur -->
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                    </span>
                                            <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-lock"></i>
                                                    </span>
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Connexion">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <!-- Fin du formulaire de connexion -->
                </div>
                <div class="panel-footer ">
                    Don't have account ? <a href="#" onClick=""> Contact us </a>
                </div>
            </div>
        </div>
    </div>
</div>