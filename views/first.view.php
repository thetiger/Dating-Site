<div class="container">
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-md-8">
                        <div class="col-xs-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border:none; border-radius:15px 15px 15px 15px;">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox" style="border-radius:15px 15px 15px 15px;">
                                    <div class="item active">
                                        
                                        <img src="https://www.meetmevirgin.com/sites/all/themes/mmv/images/main-banner.jpg" alt="..." class="img-responsive">

                                        <div class="carousel-caption">
                                            <h2>Welcome to Free Dating!</h2>
                                        </div>

                                    </div>
                                    <div class="item">

                                        <img src="http://thebendstudio.com/img/86c0d66fcb0a4b8d77eccbd02ca4e959.jpg" alt="..." class="img-responsive">

                                        <div class="carousel-caption">

                                            <h2>We understand what it takes for a lasting relationship, your in good hands in our community of singles!</h2>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <hr>
                        </div>
                        <?php
                        foreach($stories AS $story){
                            ?>
                        <div class="col-xs-12" style="border:1px solid #ccc; border-radius:10px; margin: 5px;">
                            <div class="col-xs-12">
                                <h1>
                                   <?php echo $story['dt_title']; ?>
                                </h1>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-12">
                                    <?php echo substr($story['dt_description'],0,400); ?>
                                </div>
                                <div class="col-xs-12">
                                    <a href="story.php?view&id=<?php echo $story['dt_id']; ?>" title="Read More">Read more....</a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <div class="col-xs-12">
                                        <p>
                                            <span class="glyphicon glyphicon-time"></span> <?php echo $story['dt_date']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="col-xs-12">
                            <hr>
                        </div>
                        <?php include('views/sidebar.view.php'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>