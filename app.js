var app=angular.module('myapp',["ngRoute"]);
app.config(function($routeProvider){
$routeProvider
.when("/login",{
      templateUrl:"partials/login.html",
	  controller:"loginCtrl"
	  })
	  .when("/register",{
	  templateUrl:"partials/register.html",
	  controller:"myctrl"
	  })
	  .when("/start",{
	  templateUrl:"partials/home.html",
	  
	  
	  })
	  .otherwise({
	  redirectTo:"/start"
	  });
 });

app.controller('myctrl',function($scope,$http,$location){
	$scope.insertdata= function(){
	$http.post("register.php",{'fname':$scope.fname,'lname':$scope.lname,'user':$scope.user,'pass':$scope.pass}).
	success(function(data,status,header,config){
	console.log("inserted");
	
	$scope.fname='';
	$scope.lname='';
	$scope.user='';
	$scope.pass='';

	});
	
	}
	});

app.controller('loginCtrl',function($scope,$http,$window){
	$scope.checkData=function(){
	var data={
	user:$scope.user,
	pass:$scope.pass
	}
	$http.post('login.php',data).success(function(response){
	
	console.log("correct login");
	if($scope.user=='singhpreeti369@gmail.com' && $scope.pass=='as'){
	$window.location.href = 'role.html';
	}
	}).error(function(error){
	console.error(error);
	});
	}
	});	