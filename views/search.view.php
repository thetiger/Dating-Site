<div class="container" style="background-color:<?php echo $blockcolor; ?>; border-radius:10px; padding:15px;">
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12" style="margin-top:40px;">
                    <div class="col-xs-12">
                        <h1>Search</h1>
                    </div>
                    <div class="col-xs-12">
                        <p>Here you can view all the profiles of people who you may be a match with, make the first move and
                            message them.</p>
                    </div>
                </div>
                <div class="col-xs-12">
                    <form method="post" action="search.php">
                        <div class="col-xs-12 col-md-2">
                            <div class="form-group">
                                <label>Min age</label>
                                <select class="form-control" name="Minage">
                                    <?php
                                        for($i=0;$i<101;$i++){
                                            ?>
                                        <option value="<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <div class="form-group">
                                <label>Max age</label>
                                <select class="form-control" name="Minage">
                                    <?php
                                        for($i=0;$i<101;$i++){
                                            ?>
                                        <option value="<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <div class="form-group">
                                <label>Search Radius</label>
                                <select class="form-control" name="Minage">
                                    <?php
                                        for($i=0;$i<101;$i++){
                                            ?>
                                        <option value="<?php echo $i; ?>">Up to
                                            <?php echo $i; ?> miles away</option>
                                        <?php
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <div class="form-group">
                                <label>Postcode</label>
                                <input class="form-control" type="text" name="postcode" value="HX1 3SU">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <label>&nbsp;</label>
                            <input class="form-control btn btn-primary" type="submit" name="submitsearch" value="Search!">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>