<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
	  <div class="container-">
		  <div class="row-">
			  <div class="col-md-8 offset-2 mx-auto">
				  <h1>Data Mahasiswa <a href="#" class="btn btn-primary" id="btnadd" data-toggle="modal" data-target="#exampleModal">add</a></h1>
				<table class='table table-hover'>
					<thead class="thead-dark">
						<tr>
							<th>No</th>
							<th>Nim</th>
							<th>Nama</th>
							<th>Jurusan</th>
							<th>alamat</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			  </div>
		  </div>
	  </div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
					<div class="modal-body">
						<p id='delabel'></p>
				<form>
						<div class="form-group">
							<label for="exampleInputFile">Nim</label>
							<input type="text" class='form-control' id='NIM' name='NIM'>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Nama</label>
							<input type="text" class='form-control' id='NAMA' name='NAMA'>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Jurusan</label>
							<input type="text" class='form-control' id='JURUSAN' name='JURUSAN'>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Alamat</label>
							<input type="text" class='form-control' id='ALAMAT' name='ALAMAT'>
							<input type="hidden" class='form-control' id='ID' name='ID'>
						</div>
					</div>
				</form>
					<div class="modal-footer">
						<button type="button" id='btnclose' class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" id='btnSave' class="btn btn-primary">Save changes</button>
					</div>
			</div>
		</div>
		</div>

	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	   <script src="<?=base_url('assets/js/')?>site.js"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	   <script>
			
	   </script>
	</body>
</html>
