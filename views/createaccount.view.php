<div class="container">
    <div class="row">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <p>Thanks for choosing to create an account with us, before we proceed, we first need some details from
                            you.
                        </p>
                    </div>
                    <div class="col-xs-12">
                        <form action="createaccount.php" method="post">
                            <div class="form-group">
                                <label>Forename</label>
                                <input type="text" name="firstname" class="form-control" required>
                                <?php if(isset($fnamemsg)){?>
                                <p>This is not valid input!</p>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" name="lastname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Your Date of Birth:</label>
                                <input type="date" name="dob" class="form-control" required placeholder="12/12/2019">
                                <p>Like</p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password1" class="form-control" required>
                                <?php if(isset($passwordmsg)){?>
                                <p>Not valid input</p>
                                <?php } ?>
                                <?php if(isset($passwordwrongmsg)){?>
                                <p>Passwords do not match!</p>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Re-enter Password</label>
                                <input type="text" name="password2" class="form-control" required>
                                <?php if(isset($passwordmsg)){?>
                                <p>Not valid input</p>
                                <?php } ?>
                                <?php if(isset($passwordwrongmsg)){?>
                                <p>Passwords do not match!</p>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="createaccount" class="form-control" value="Create Account">
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>