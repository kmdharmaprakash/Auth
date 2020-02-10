<!DOCTYPE html>
<html>
<head>
	<title>customers</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

	<form action="/customers" method="POST">
		{{ csrf_field() }}
	<div class="container">
		<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>name:</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>phonenumber:</label>
						<input type="text" name="phonenumber" class="form-control">
					</div>
					<div class="form-group">
						<label>email:</label>
						<input type="text" name="email" class="form-control">
					</div>
					<input type="submit" name="submit" class="btn btn-success" >
				</div>
		</div>
	</div>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>name</th>
				<th>phonenumber</th>
				<th>email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $customer)
				<tr>
					<td>{{ $customer['name'] }}</td>
					<td>{{ $customer['phonenumber'] }}</td>
					<td>{{ $customer['email'] }}</td>
					<td>
						<a href="/customers/{{ $customer['id'] }}" class="btn btn-warning">Update</a>
						<a href="/customers-delete/{{ $customer['id'] }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
</body>
</html>