<?php 
    $_REQUEST["action"] = "init";   //action name
    $_REQUEST["placement"] = (isset($_GET['p']) ? $_GET['p'] : '');    //advertiser placement
    $_REQUEST["actioncounter"] = 0; //action counter 
    include "ajax_call.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Web Opinion Survey</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Main Style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Media Style -->
        <link href="css/media.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Define global scope vars for tidy ness and scope godliness -->
        <script type="text/javascript">
        window.objGlobal = {};
        window.objGlobal.strPlacement = "<?php echo (isset($_GET['p']) ? $_GET['p'] : '' ); ?>";        
        window.objGlobal.intActionCounter = 0;
        window.objGlobal.intPageCounter  = 1;
        </script>

        <!--Main Scripts-->
        <script type="text/javascript" src="js/scripts.js?cb=<?php print(time()); ?>"></script>
    </head>
    <body>
    <!-- Header-->
        <header>
            <div class="header-wrapper">
                <div class="container">
                    <div class="row survey-heading">
                        <div class="col-lg-4  col-xs-2 browser-icon"></div>
                        <div class="col-lg-8 col-xs-10 heading-info text-left">
                            <p>2016 Annual Visitor Survey <span class="country"></span></p>
                            <h2>Internet Service Opinion Survey</h2>
                        </div>
                    </div>

                </div>
            </div>
        </header>
    <!--end Header-->

    <!--Main Content-->
        <div class="container main-content">
            <div class="page-holder">
                <div class="date pull-right"><?php echo date("F j, Y"); ?></div>
                <div class="space30"></div>
                <div class="questions-section">
                    <h5>Question 1 of 4</h5>
                    <form class="first-form">
                        <p>How many years have you been with your internet service provider</p>
                        <div class="radio">
                            <label><input type="radio" checked="checked" name="optradio">Less than 1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">1 - 2</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">2 - 3</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">3 +</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Prefer not to answer</label>
                        </div>
                    </form>
                    <button class="first-button">Next...</button>
                </div>
                <!-- Small modal -->

                <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-md " data-easein="shake" data-easeout="rollOut" role="document">
                        <div class="modal-content">
                            <div class="col-lg-2 col-sm-2 col-xs-2 browser-iconM "></div>
                            <div class="col-lg-10 col-sm-10 col-xs-10 survey-info ">
                                <h4>Dear Internet Service User.</h4>
                                <p>
                                    You are today's lucky visitor for: <strong class="date"><?php echo date("F j, Y"); ?></strong>
                                </p>
                                <div class="space10"></div>
                                <p>
                                    Pleasy complete this short survey and to say "Thank You" we'll give you <strong>
                                    a chance to win an <span class="phoneModel"></span>!
                                </strong>
                                </p>
                                <div class="space15"></div>
                            </div>
                            <button class="btn btn-primary pull-right">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--end Main Content-->
    <hr>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="footer-content text-center">
                <p>Copyright © 2016 - All Rights Reserved</p>
                <p>
                    This Survey is an Advertisement. All products have important Terms and Conditions, please read all products terms and conditions before ordering any product.
                </p>
            </div>
        </div>
    </footer>

    </body>
</html>