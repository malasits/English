//Create angular controller
App.controller('AppController', function ($scope, $interval) {

    /********************************************************************/
    /* VARIABLES                                                        */
    /********************************************************************/
    $scope.InitLoaded = false; //Show content if init completed
    $scope.HeaderText = ""; //Header content text
    $scope.actDate = new Date(); //Header time and date

    /********************************************************************/
    /* DEFINITION: This function start first                            */
    /* PARAMETERS: -                                                    */
    /* RETURN:     -                                                    */
    /********************************************************************/
    $scope.Init = function(){
        $scope.HeaderText = GetHeaderText();
        
        $scope.InitLoaded = true;
    }

    $scope.Init();

    /********************************************************************/
    /* DEFINITION: Add a value to $scope.HeaderText variable            */
    /* PARAMETERS: -                                                    */
    /* RETURN:     String, what's depends on the actual date            */
    /********************************************************************/
    function GetHeaderText(){
        var dt = new Date();
        var time = dt.getHours();

        if(time > 4 && time < 12)
            return "Good morning!";
        else if (time > 11 && time < 19)
            return "Good afternoon!";
        else
            return "Good evening!";
    }

    /********************************************************************/
    /* DEFINITION: Refresh $scope.actDate value after 1s                */
    /* PARAMETERS: -                                                    */
    /* RETURN:     Actual date                                          */
    /********************************************************************/
    $interval(function () {
        $scope.actDate = new Date();
        $scope.HeaderText = GetHeaderText();
    }, 1000);
    

});