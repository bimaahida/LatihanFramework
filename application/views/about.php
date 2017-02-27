<div class="container">
	<div class="jumbotron">
		<div class="container">
			<h1>Hello, world!</h1>
			<p>Saya <?php echo $nama ?></p>
			<p>
				<a class="btn btn-primary btn-lg">Learn more</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Data Diri</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $nama ?></td>
							
						</tr>
						<tr>
							<td><?php echo $nim ?></td>
						</tr>
						<tr>
							<td><?php echo $kelas ?></td>
						</tr>
						<tr>
							<td><?php echo $kampus ?></td>
						</tr>
						<tr>
							<td><?php echo $emial ?></td>
						</tr>	
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Hobi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $hobi1 ?></td>
						</tr>
						<tr>
							<td><?php echo $hobi2 ?></td>
						</tr>
						<tr>
							<td><?php echo $hobi3 ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>