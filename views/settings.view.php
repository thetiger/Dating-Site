<div class="container">
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-md-3">
                        <ul class="nav nav-pills nav-stacked" style="border:2px solid #ccc; border-radius:5px 5px 5px 5px;">
                            <li <?php if(isset($id) && $id==='1' OR !isset($id)){?>class="active"
                                <?php } ?>>
                                <a href="?show&id=1" title="Show my account settings">
                                    <span class="badge pull-right">42</span>
                                    Home
                                </a>
                            </li>
                            <ul class="nav nav-pills nav-stacked">
                                <li <?php if(isset($id) && $id==='2' ){?>class="active"
                                    <?php } ?>>
                                    <a href="?show&id=2" title="Show my Privacy Settings">
                                        <span class="badge pull-right">none</span>
                                        Privacy
                                    </a>
                                </li>
                            </ul>

                    </div>
                    <?php
                    if(isset($id) && $id === '1' OR !isset($id)){?>
                        <div class="col-xs-12 col-md-9">
                            <div class="col-xs-12">
                                <h1>Settings</h1>
                            </div>
                            <div class="col-xs-12">
                                <p>Here you can control what people see of you, including site-wide settings.</p>
                            </div>
                            <div class="col-xs-12">
                                <div class="well">
                                    <form method="post" action="settings.php">
                                        <div class="form-group">
                                            <label>Your e-mail:</label>
                                            <input class="form-control" type="text" name="email" value="<?php echo 'jonathonmaguire@gmail.com';?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Photo:</label>
                                            <input type="file" name="profilepicture" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Account type</label>
                                            <input class="form-control" type="text" name="type" value="Premium" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Created</label>
                                            <input class="form-control" type="text" name="type" value="12-12-2017" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>2 factor Authentication?</label>
                                            <select class="form-control" name="2fa">
                                                <option value="1">Enabled</option>
                                                <option selected="selected" value="0">Disabled</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control btn btn-primary" type="submit" name="updatesettings" value="Update">
                                        </div>

                                </div>
                            </div>
                        </div>
                        <?php
                }
                ?>
                            <?php
                if(isset($id) && $id === '2'){?>
                                <div class="col-xs-12 col-md-9">
                                    <div class="col-xs-12">
                                        <h1>Privacy Settings</h1>
                                    </div>
                                    <div class="col-xs-12">
                                        <p>This is the biggie, make sure you choose the right settings and audience!</p>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="well">
                                            <form method="post" action="settings.php">
                                                <div class="form-group">
                                                    <label>Who can see you?</label>
                                                    <select class="form-control" name="seeme" required>
                                                        <option value="0">No one</option>
                                                        <option selected="selected" value="1">Outsiders</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Who can message you?</label>
                                                    <select class="form-control" name="messages" required>
                                                        <option value="1">Outsiders</option>
                                                        <option selected="selected" value="0">No one</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control btn btn-primary" type="submit" name="updateprivacy" value="Update">
                                                </div>

                                        </div>
                                    </div>
                                </div>
                                <?php
            }
            ?>

                </div>
            </div>
        </div>
    </div>
</div>