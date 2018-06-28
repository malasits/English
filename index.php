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

        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand active" href="index.php">Start page</a>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                      <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Page 1-1</a></li>
                          <li><a href="#">Page 1-2</a></li>
                          <li><a href="#">Page 1-3</a></li>
                        </ul>
                      </li> -->
                      <li><a href="#">Dictionary</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="https://translate.google.com/?hl=hu" target="_blank">Translate</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
              <script>              
                $('.nav a').on('click', function(){
                    $('.navbar-toggle').click() //bootstrap 3.x by Richard
                });
              </script>
        </div>

        </div>
    </div>


<?php 
    //Get the footer of the page
    echo GetFooter();
?>