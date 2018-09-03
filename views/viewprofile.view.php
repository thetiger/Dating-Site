<?php
use MyFunctions\myfunctions;
?>
<div class="container" style="background-color:<?php echo $blockcolor; ?>; border-radius:10px; padding:15px;">
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-md-4 col-sm-4 col-lg-2">
                        <div class="col-xs-12" style="border:2px solid #ccc; border-radius: 15px 0px 10px 0px; margin:6px; padding:5px;">
                            <div class="col-xs-12">
                                <?php if(empty($userdata[0]['image'])){
                                    ?>
                                <img src="https://www.contentchampion.com/wp-content/uploads/2013/11/avatar-placeholder.png"
                                    alt="Name here" class="img-responsive">
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-xs-12">
                                <p>
                                    <?php echo $userdata[0]['fname'].' '.$userdata[0]['lname']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-sm-8">
                        <div class="col-xs-12">
                            <div class="col-xs-4 col-md-2">
                                Age:
                            </div>
                            <div class="col-xs-8 col-md-10">
                                <?php
                            $bday = new DateTime($ouruserdata[0]['dt_age']); // Your date of birth
                            $today = new Datetime(date('m.d.y'));
                            $diff = $today->diff($bday);
                            ?>
                                <?php echo $diff->y; ?>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4 col-md-2">
                                <p>Location:</p>
                            </div>
                            <div class="col-xs-8 col-md-10">
                                <?php
                                $ourlocation = \Users\users::getwildcarddata('dating_location','dt_name','dt_locationid',$userdata[0]['location'],0);
                                echo $ourlocation;
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4 col-md-2">
                                <p>Occupation:</p>
                            </div>
                            <div class="col-xs-8 col-md-10">
                                Wallstreet Banker
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4 col-md-2">
                                <p>Current Status:</p>
                            </div>
                            <div class="col-xs-8 col-md-10">
                                Looking for fun!
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4 col-md-2">
                                <p>Last Active:</p>
                            </div>
                            <div class="col-xs-8 col-md-10">
                                1hr ago
                            </div>
                            <div class="col-xs-12">
                                <?php
                                $information = myfunctions::getdistance($_SESSION['postcode'],$userdata[0]['dt_postcode']);
                                $miles = $information['miles'];
                                echo ((int) ($miles)).' miles away';
                                ?>
                            </div>
                            <?php
                            if($_SESSION['id'] === $_GET['id']){
                                ?>
                            <!-- Modal -->
                            <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Here you can edit your profile.</p>
                                            <form method="post" action="<?php echo $fullurl; ?>">
                                                <div class="form-group">
                                                    <label>Postcode:</label>
                                                    <input type="text" placeholder="etc: HX1 4AR" name="postcode" value=""
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status:</label>
                                                    <input type="text" placeholder="Walking on sunshine..." name="postcode"
                                                        value="" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>About Me:</label>
                                                    <textarea name="about" class="form-control" rows=5></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Introduction video:</label>
                                                    <input type="text" placeholder="e.g.; tD4HCZe-tew" name="myvideo"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Your interests:</label>
                                                    <?php
                                                    foreach($interests AS $hobby){
                                                        if(!empty($hobby)){
                                                        ?>
                                                    <div class="checkbox" style="padding:10px">
                                                        <label><input type="checkbox" value="<?php echo $hobby; ?>">
                                                            <?php echo $hobby; ?></label>
                                                    </div>
                                                    <?php
                                                            }
                                                    }
                                                    ?>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Enter email">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never
                                                        share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                                        placeholder="Password">
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-md-12">
                                <div class="col-xs-12" style="padding:5px;">
                                    <button class="btn btn-primary">Message</button>
                                </div>
                                <?php
                                if($_SESSION['id'] === $_GET['id']){
                                    ?>
                                <div class="col-xs-12" style="padding:5px;">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editprofile">
                                        Edit Profile
                                    </button>
                                </div>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">

                    <div class="col-md-12">
                        <div class="col-xs-12">
                            <h1>About Me</h1>
                        </div>
                        <div class="col-xs-12">
                            <?php echo $ouruserdata['0']['dt_about']; ?>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12">
                                <h1>An Introduction</h1>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-0" style="border:5px solid #ccc; padding:1px; border-radius:0px 15px 0px 15px;">
                                <div class="embed-responsive embed-responsive-16by9" style="border-radius:0px 15px 0px 15px;">
                                    <?php
                                if(!empty($ouruserdata['0']['dt_intro'])){
                                    ?>
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $ouruserdata['0']['dt_intro']; ?>?rel=0"
                                        allowfullscreen></iframe>
                                    <?php
                                }
                                else
                                {
                                ?>
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IGMabBGydC0?rel=0"
                                        allowfullscreen></iframe>
                                    <?php
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <h3>My Hobbies</h3>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <ul>
                                    <?php
                                    if(!empty($ouruserdata['0']['dt_hobbies'])){
                            $hobbies = explode(',', $ouruserdata['0']['dt_hobbies']);
                            
                                foreach($hobbies AS $mine){?>
                                    <li>
                                        <?php echo $mine; ?>
                                    </li>
                                    <?php
                                }
                                ?>
                                </ul>
                                <?php
                            }
                            else
                            {
                                ?>

                                <?php
                            }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <h3>My Interests</h3>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12">
                                <?php
                             if(!empty($ouruserdata['0']['dt_interests'])){
                                $hobbies = explode(',', $ouruserdata['0']['dt_interests']);
                                $amount = 0;
                                $hobbies = explode(',', $ouruserdata['0']['dt_interests']);
                                ?>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <?php
                        foreach($hobbies AS $mine){
                            $amount++;
                            ?>
                                    <?php
                                if($amount < 4){?>
                                    <li>
                                        <?php echo $mine; ?>
                                    </li>
                                    <?php
                            }
                            ?>
                                    <?php
                                if($amount > 4){
                                    $amount = 0;
                                    ?>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <ul>
                                        <li>
                                            <?php echo $mine; ?>
                                        </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                        <p>This user is a bum and has left not interests.</p>
                                        <?php
                                                    }
                                                    ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>