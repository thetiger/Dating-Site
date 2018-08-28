<div class="container" style="background-color:#<?php echo $blockcolor; ?>;">
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12" style="background-color:<?php echo $blockcolor; ?>; border-radius:10px; padding:15px;">
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-md-8">
                                <p>Welcome,
                                    <?php echo $_SESSION['name']; ?>!</p>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="col-xs-12">
                                    <div class="col-xs-12 visible-md visible-lg">
                                        <a href="#" title="You have messages in your inbox" class="mylinks">
                                            <span class="glyphicon glyphicon-envelope"></span> 8 &nbsp;</a>
                                        <a href="#" title="You are a premium member" class="mylinks">
                                            <span class="glyphicon glyphicon-user"></span> Premium</a>
                                    </div>
                                    <div class="col-xs-12 visible-xs" style="font-size:1.5em;">
                                        <div class="col-xs-6">
                                            <a href="#" title="You have messages in your inbox" class="mylinks"></a>
                                            <span class="glyphicon glyphicon-envelope"></span> 8</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="#" title="You are a premium user" class="mylinks">
                                                <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <hr>
                    </div>
                    <div class="col-xs-12 visible-md visible-lg ">
                        <p>
                            We have thought about our clients and you can see below information that may be of use to you.
                        </p>
                    </div>
                    <div class="col-xs-12">
                        <h4 class="visible-md visible-lg">Profiles</h4>
                        <h1 class="visible-xs">Profiles</h1>
                    </div>
                    <!-- Avatars -->
                    <div class="col-xs-12">
                        <?php
                    foreach($allusers AS $ouruser){?>
                            <!-- Avatars Physical -->
                            <a href="viewprofile.php?view&id=<?php echo $ouruser['id']; ?>" title="View Profile" class="mylinks">
                                <div class="col-xs-12 col-md-2 col-sm-4" style="border:2px solid #ccc; border-radius: 15px 0px 10px 0px; margin:6px; padding:5px;">
                                    <div class="col-xs-12">
                                            <?php if(empty($ouruser['image'])){
                                                ?>
                                                <img src="https://www.contentchampion.com/wp-content/uploads/2013/11/avatar-placeholder.png" alt="Name here" class="img-responsive">
                                                <?php
                                            }
                                            ?>
                                    </div>

                                    <div class="col-xs-12 text-center" style="color: #888;">
                                        <p>
                                            <?php echo $ouruser['fname'].' '.$ouruser['lname']; ?>
                                        </p>
                                        <?php
                                $ourlocation = \Users\users::getwildcarddata('dating_location','dt_name','dt_locationid',$ouruser['location'],0);
                                ?>
                                            <p>
                                                Location: <?php echo $ourlocation; ?>
                                            </p>
                                            <p>
                                            <?php
                            $bday = new DateTime($ouruser['dob']); // Your date of birth
                            $today = new Datetime(date('m.d.y'));
                            $diff = $today->diff($bday);
                            ?>
                            Age: <?php echo $diff->y; ?>
                                            </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Avatars Physical End-->
                            <?php
                    }
                    ?>

                    </div>
                    <!-- Avatars End -->
                </div>
            </div>
        </div>
    </div>
</div>