angular
	.module('controllers', [])
	.controller('mahasiswa', function($scope, Mahasiswa){
		Mahasiswa.fetch().success(function(data){
			$scope.mahasiswa = data;
		});
	});