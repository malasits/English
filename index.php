<?php
    require_once("layout.php");
    //Get the header of the page
    echo GetHeader("Start Page");
?>

    <?php /*--HERE IS THE CONTENT OF THE PAGE--*/?>
    <div ng-controller="AppController">
        <?php /*--CONTAINER--*/?>
        <div class="container" ng-show="InitLoaded">

        <div class="row">
            <div class="header">
                <div class="headerText">{{HeaderText}}</div>
                <div id="dateTime" class="dateTime">{{actDate | date : "h:mm a"}}<br /> {{actDate | date : "EEEE, MMMM d, y"}}</div>
            </div>
        </div>

        </div>
    </div>


<?php 
    //Get the footer of the page
    echo GetFooter();
?>