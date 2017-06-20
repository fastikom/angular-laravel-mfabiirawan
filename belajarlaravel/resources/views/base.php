<html data-ng-app=”main”>
 
 <script>
    var options = {
        baseUrl : '<?php echo str_replace('public', '', url('')) ?>',
        siteUrl : '<?php echo url('') ?>/'
    };
</script>
<body data-ng-controller=”mahasiswa”>

<table>
	<thead>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
		</tr>
	</thead>
	<tbody>
		<tr data-ng-repeat="mahasiswa in mahasiswa" data-ng-class="$even ? 'even' : 'odd'">
			<td data-ng-bind="mahasiswa.st_nim"></td>
			<td data-ng-bind="mahasiswa.st_nama"></td>
			<td data-ng-bind="mahasiswa.st_jurusan"></td>
			<td data-ng-bind="mahasiswa.st_alamat"></td>
		</tr>
	</tbody>
</table>

</body>
</html>