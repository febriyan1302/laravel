<!DOCTYPE html>
<html>
<head>
	<title>Paging User</title>
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

	<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
</head>
<body>
	<div class="container">

		<div class="panel panel-default">
			<div class="panel-heading">Panel heading</div>
			<div class="panel-body">
			    <p>Data User</p>
			</div>
			
			<!-- Table -->
				<table class="table">
					<thead>
					    <tr>
					    	<th>ID</th>
					    	<th>Nama</th>
					    	<th>Alamat</th>
					    	<th>Usia</th>
					    	<th>Asal</th>
					    </tr>
				    </thead>
				    <tbody>
					    @foreach($data as $user)
					    <tr>
					    	<td>{{$user->idUser}}</td>
					    	<td>{{$user->nama}}</td>
					    	<td>{{$user->alamat}}</td>
					    	<td>{{$user->usia}}</td>
					    	<td>{{$user->asal}}</td>
					    </tr>
					    @endforeach
					    <tr>
					    	<td colspan="5" align="right">
					    		{!! $data->render() !!}
					    	</td>
				    	</tr>
				    </tbody>
				    

				</table>
				
			
		</div>

	</div>
</body>
</html>