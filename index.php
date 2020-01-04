<!DOCTYPE html>
<html>
    <?php require_once('php/head.php'); ?>
    <body>
        <!-- Fixed navbar -->
        <div class="container">
            <!--?php require_once('php/navbar.php'); ?-->
            <div class="page-header text-center">
                <img class="img-circle img-fluid float-left" width="150px" height="150px" src="images/sunburn300.png" alt="Solar Power"></img>
                <h3>Enphase Envoy Gateway - Real-time Solar production</h3>
            </div>
        </div>
        <div class="container bgimg-1">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Solar Production</h3>
                        </div>
                        <div class="panel-body">
                            <img src="images/solar_panel.png" class="img-fluid" width="50px" height="50px" alt="Responsive image">
                            <span id="prod"></span> watts
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Energy Consumption</h3>
                        </div>
                        <div class="panel-body">
                            <img src="images/lightning.png" class="img-fluid" width="50px" height="50px" alt="Responsive image">
                            <span id="gross"></span> watts
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="panel_net" class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Net Consumption</h3>
                        </div>
                        <div class="panel-body">
                            <img src="images/green-energy.png" class="img-fluid" width="50px" height="50px" alt="Responsive image">
                            <span id="net"></span> watts
                        </div>
                    </div>
                </div>
            </div>
        </div -->
    </body>
</html>
