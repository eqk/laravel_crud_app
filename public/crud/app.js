var app = angular.module('app', []);

app.controller('CrudCtrl', ['$scope', function($scope) {
	$scope.name = '';
	$scope.routes = true;
	$scope.items = [];

	$scope.add_field = function() {
		$scope.items.push({'name' : '', 'type' : '', 'html_type': ''});
	}

	$scope.remove_field = function(item) {
		var index = $scope.items.indexOf(item);
		$scope.items.splice(index, 1); 
	}

	$scope.add_field();

}]);