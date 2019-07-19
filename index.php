<!DOCTYPE html>
<html lang="en" ng-app="myModule">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body ng-controller="myController">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="<a href="https://eliasngumbipro"" rel="nofollow">https://eliasngumbipro.com"</a> >Elias Ngumbi</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Insert MySQLi Data Using AngularJS</h3>
		<hr style="border-top:1px dotted #ccc;">
		<div class="col-md-4">
			<form>
				<div class="form-inline">
					<input type="text" class="form-control" ng-model="firstname" placeholder="Firstname"/>
					<input type="text" class="form-control" ng-model="lastname" placeholder="Lastname"/>
					<input type="text" class="form-control" ng-model="address" placeholder="Address"/>
					<br /><br />
					<center><button type = "button" class = "btn btn-primary" ng-click = "insetDats()" ><span class = "glyphicon glyphicon-save"></span> Insert</button></center>
				</div>
			</form>
		</div>
		<div class="col-md-8">
			<table class = "table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat = "member in members">
						<td>{{member.firstname}}</td>
						<td>{{member.lastname}}</td>
						<td>{{member.address}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
<script src = "js/angular.js"></script>
<script src = "js/script.js"></script>
</body>	
</html>
