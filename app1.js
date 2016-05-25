var app=angular.module('myApp',["ngRoute"]);
app.config(function($routeProvider){
$routeProvider
.when("/tr",{
      templateUrl:"partials/tr.html",
	  
	  })
	  .when("/mr",{
	  templateUrl:"partials/mr.html",
	  
	  })
	  .when("/hr",{
	  templateUrl:"partials/hr.html",
	  
	  })
	  .otherwise({
	  redirectTo:"/tr"
	  });
 });