<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div id="connexion" class="panel panel-default">
                <div class="panel-heading">
                    <strong> Login</strong>
                </div>
                <div class="panel-body">
                    <!-- Formulaire de connexion -->
                    <form role="form" action="index.php?uc=connexion&action=passToHome" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <center><img class="profile-img" src="images/icon-profile.png" alt=""></center>
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
                    Don't have account ? <a href="#" id="signup" > Register here ! </a>
                </div>
            </div>
            <div id="register" class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                        <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
                        <form action="#" method="post" class="form" role="form">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <input class="form-control" name="firstname" placeholder="First Name" type="text"
                                    required autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                            </div>
                        </div>
                        <input class="form-control" name="email" placeholder="Your Email" type="email" />
                        <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                        <input class="form-control" name="password" placeholder="Password" type="password" />
                        <input class="form-control" name="reenterpassword" placeholder="Re-enter Password" type="password" />

                        <br />
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign up</button>
                        </form>
                        <span><a href="#" id="backconnexion">Back to login</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>