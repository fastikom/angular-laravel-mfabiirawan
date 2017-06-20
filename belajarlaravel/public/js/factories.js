angular
	.module('factories', [])
	.factory('Mahasiswa', function($http){
		return {
			fetch: function(){
				return $http.get(options.siteUrl + 'mahasiswa/fetch');
			}
		};
	});