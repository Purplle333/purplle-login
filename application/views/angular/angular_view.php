<!DOCTYPE html>
<html>

<head>
<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd)	{
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<script type="text/javascript">
function customersController($scope,$http) {
  $http.get("http://www.w3schools.com/website/Customers_JSON.php")
  .success(function(response) {$scope.array = response;});
}
</script>
</head>

<body>
<h2>AngularJS Tutorial</h2>
<div ng-app="" ng-controller="customersController"> 

<table>
  <tr ng-repeat="x in array">
    <td>{{ x.Name }}</td>
    <td>{{ x.Country | uppercase}}</td>
  </tr>
</table>

</div>
</body>
</html>