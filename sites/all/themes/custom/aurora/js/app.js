var spreadsheetsApp = angular.module('spreadsheetsApp', ['ngResource', 'spreadsheetsControllers']);

var spreadsheetsControllers = angular.module('spreadsheetsControllers', []);

spreadsheetsApp.controller('spreadsheetsCtrl', function($scope, $http) {

	var _dataCells;

	var idSheet = 1;
	$scope.dataCells//Se obtiene el archivo JSON de la Hoja de Cálculo
	$http.get('https://spreadsheets.google.com/feeds/list/1VW8vXzQR_0M50aoVyCkYkSgCO3gWnMxRkK3wnY1Hbgw/' + idSheet + '/public/values?alt=json').success(function(data) {
		//Convert data to array.
		//datos lo tenemos disponible en la vista gracias a $scope
		$scope.dataSpreadSheet = data;
		console.log(data);
		init($scope.dataSpreadSheet.feed.entry)
	});

	//Se inicializan las variables
	function init(dataCells) {
		_dataCells = dataCells;
		readCells();
	}

	function readCells() {
		var log = [];
		var currMonth;
		angular.forEach(_dataCells, function(value, key) {
			this.push({
				"motonave" : value.gsx$motonave.$t,
				"fecha" : value.gsx$fechadeatraque.$t,
				"hora" : value.gsx$hora.$t,
				"agente" : value.gsx$agentemarítimo.$t,
				"clientes" : value.gsx$clientesprincipales.$t,
				"producto" : value.gsx$tipodeproducto.$t,
				"anunciado" : value.gsx$tonelajeanunciado.$t,
				"descargado" : value.gsx$tonelajedescargado.$t
			});
		}, log);
 		console.log(log);
		$scope.dataCells = log;
		//expect(log).toEqual(['name: misko', 'gender: male']);
	}

});
