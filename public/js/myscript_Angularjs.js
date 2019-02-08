


var app = angular.module("myApp", [],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


app.controller("HomeController" , function ($scope) {

    $scope.showMain = true ;
    $scope.showBranch = false ;

$scope.changeToMain = function () {

    $scope.showMain = true ;
    $scope.showBranch = false ;

    console.log('to main')
    console.log($scope.showMain)
    console.log($scope.showBranch)
};

    $scope.changeToBranch = function () {
        $scope.showMain = false ;
        $scope.showBranch = true ;

        console.log('to branch')
        console.log($scope.showMain)
        console.log($scope.showBranch)
    };

});

