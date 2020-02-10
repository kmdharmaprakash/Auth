<!DOCTYPE html>
<html>
<head>
	<title>customers edit</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

	<form action="/customers-update" method="POST">
		{{ csrf_field() }}
	<div class="container">
		<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>name:</label>
						<input type="hidden" name="id" value="{{ $customers['id']}}">
						<input type="text" name="name" class="form-control" value="{{ $customers['name']}}"> 
					</div>
					<div class="form-group">
						<label>phonenumber:</label>
						<input type="text" name="phonenumber" class="form-control" value="{{ $customers['phonenumber']}}"> 
					</div>
					<div class="form-group">
						<label>email:</label>
						<input type="text" name="email" class="form-control" value="{{ $customers['email']}}">
					</div>
					<input type="submit" name="" class="btn btn-success" value="update">
				</div>
		</div>
	</div>
	{{--
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>name</th>
				<th>phonenumber</th>
				<th>email</th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $customer)
				<tr>
					<td>{{ $customer['name'] }}</td>
					<td>{{ $customer['phonenumber'] }}</td>
					<td>{{ $customer['email'] }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	--}}
</body>
</html>