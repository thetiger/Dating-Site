<div class="container" style="background-color:<?php echo $blockcolor; ?>; border-radius:10px; padding:15px;">
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-md-4 col-sm-4 col-lg-2">
                        <div class="col-xs-12" style="border:2px solid #ccc; border-radius: 15px 0px 10px 0px; margin:6px; padding:5px;">
                            <div class="col-xs-12">
                                <?php if(empty($userdata['image'])){
                                    ?>
                                    <img src="https://www.contentchampion.com/wp-content/uploads/2013/11/avatar-placeholder.png" alt="Name here" class="img-responsive">
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-xs-12">
                                <p>
                                    <?php echo $userdata['fname'].' '.$userdata['lname']; ?>
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
                            $bday = new DateTime($ouruserdata['dt_age']); // Your date of birth
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
                                $ourlocation = \Users\users::getwildcarddata('dating_location','dt_name','dt_locationid',$userdata['location'],0);
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
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-md-12">
                                <div class="col-xs-12" style="padding:5px;">
                                    <button class="btn btn-primary">Message</button>
                                </div>
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
                            <?php echo $ouruserdata['dt_about']; ?>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12">
                                <h1>An Introduction</h1>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-0" style="border:5px solid #ccc; padding:1px; border-radius:0px 15px 0px 15px;">
                                <div class="embed-responsive embed-responsive-16by9" style="border-radius:0px 15px 0px 15px;">
                                    <?php
                                if(!empty($ouruserdata['dt_intro'])){
                                    ?>
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $ouruserdata['dt_intro']; ?>?rel=0" allowfullscreen></iframe>
                                        <?php
                                }
                                else
                                {
                                ?>
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IGMabBGydC0?rel=0" allowfullscreen></iframe>
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
                                    if(!empty($ouruserdata['dt_hobbies'])){
                            $hobbies = explode(',', $ouruserdata['dt_hobbies']);
                            
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
                             if(!empty($ouruserdata['dt_interests'])){
                                $hobbies = explode(',', $ouruserdata['dt_interests']);
                                $amount = 0;
                                $hobbies = explode(',', $ouruserdata['dt_interests']);
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