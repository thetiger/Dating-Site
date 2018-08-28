<div class="col-xs-12">
<?php if(isset($formmessage)){ ?>
<p>There is a problem with the details provided.</p>
<?php } ?>
    <form action="index.php" method="post">
        <legend>Login to
            <?php echo $sitename; ?>
        </legend>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" value="" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" value="" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="submit" name="login" value="Login!">
        </div>
    </form>
</div>
<div class="col-xs-12">
    <hr>
</div>
<div class="col-xs-12">
    <a class="col-xs-12 btn btn-primary" href="createaccount.php" title="Create Account">Create Account</a>
</div>
<div class="col-xs-12">
    <div class="col-xs-12">
        <h4>Statistics</h4>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12">
            <span class="glyphicon glyphicon-envelope"></span> 700 sent
        </div>
        <div class="col-xs-12">
            <span class="glyphicon glyphicon-user"></span> 1000 users
        </div>
        <div class="col-xs-12">
            <span class="glyphicon glyphicon-globe"></span> 7 continents
        </div>
    </div>
</div>