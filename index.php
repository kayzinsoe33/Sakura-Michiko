<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<!-- JQ -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		
		<div id="create">
			<h1>Add New Student</h1>
			<form action="addstudent.php" method="POST" enctype="multipart/form-data">
			
				<div class="form-group row">
					<label for="profile" class="col-sm-2 col-form-label"> Profile</label>
					<div class="col-sm-10">

						<input type="file" class="form-control-file" name="profile" id="profile">

					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" name="name" class="form-control" id="name">
					</div>
				</div>

				<div class="form-group row">

					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" id="email">
					</div>
				</div>

				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked>
								<label class="form-check-label" for="male">
									Male
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="gender" value="female">
								<label class="form-check-label" >
									Female
								</label>
							</div>
							
						</div>
					</fieldset>
					<div class="form-group row">

						<label for="address" class="col-sm-2 col-form-label">Address</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="address" name="address" rows="3"></textarea>
						</div>

					</div>

					<button type="submit" id="save" class="btn btn-primary">Save</button>

				
			</form>
		</div>
	</div>





	<div class="container">

		<div id="update">
			<!-- for input Form -->
			<h1>Edit Existing Student</h1>
			<div class="tab-pane show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

				<form enctype="multipart/form-data" method="POST" action="updatestudent.php">
						<input type="hidden" class="" name="edit_id" id="edit_id">
						<input type="hidden" id="edit_oldphoto" name="edit_oldprofile">
					
					<div class="form-group row">
						<label for="oldprofile" class="col-sm-2 col-form-label"> Profile</label>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Profile</a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">New Profile</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<img src="" id="edit_photo" width="150px" height="150px;">
  </div>
 
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  	<input type="file" name="edit_newprofile" class="form-control-file">
  </div>
</div>
					</div>
					<div class="form-group row">
						<label for="oldname" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_name" id="edit_name">
						</div>
					</div>

					<div class="form-group row">

						<label for="oldemail" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="edit_email" id="edit_email">
						</div>
					</div>

					<fieldset class="form-group">
						<div class="row">
							<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
							<div class="col-sm-10">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="edit_gender" id="edit_male" value="male" checked>
									<label class="form-check-label" for="oldgender">
										Male
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="edit_gender" id="edit_female" value="female">
									<label class="form-check-label" for="edit_gender">
										Female
									</label>
								</div>
							</div>
						</div>
					</fieldset>

					<div class="form-group row">

						<label for="oldaddress" class="col-sm-2 col-form-label">Address</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="edit_address" id="edit_address" rows="3"></textarea>
						</div>

					</div>
				
					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit"  id="upd" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>



			</div>
		</div>

				<table class="table" border="1" >
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Gender</th>
							<th scope="col">Email</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
				<tbody></tbody>
			</table>

			<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="container">
								<div class="row">
									<div class="col-4">
										<img id="detail_photo" class="img-fluid">
										
									</div>

								<div class="col-8">
									<h1 id="detail_name"></h1>
									<p id="detail_gender"></p>
									<p id="detail_email"></p>
									<p id="detail_address"></p>
									
								</div>
									
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>

		</div>

<script type="text/javascript"> 

	$(document).ready(function(){
		$("#create").show();
		$("#update").hide();

	getStudentList();
	function getStudentList(){

		$.get('studentlist.json',function(response){

			if(response)
			{
				console.log(typeof(response));
				var studentObjArray=JSON.parse(response);

				var html=''; var j=1;
				$.each(studentObjArray,function(i,v){
					html+=`<tr>
								<td>${j++}</td>
								<td>${v.name}</td>
								<td>${v.gender}</td>
								<td>${v.email}</td>
								<td>
								<button class="btn btn-outline-primary detail"  data-id="${i}" ><i class="fas fa-info-circle"></i></button>

								<button class="btn btn-outline-warning edit" data-id="${i}" ><i class="fas fa-edit"></i></button>

								<button class="btn btn-outline-danger delete" data-id="${i}" ><i class="fas fa-trash-alt"></i></button>
								</td>
							</tr>`;

				});

			$('tbody').html(html);



			}
		});

	};
    // add
	$('tbody').on('click','.detail',function(){
		var id=$(this).data('id');
		//console.log(id);
		$.get('studentlist.json',function(response){
			if (response) {
				var studentObjArray=JSON.parse(response);

				var name=studentObjArray[id].name;
				var email=studentObjArray[id].email;
				var address=studentObjArray[id].address;
				var gender=studentObjArray[id].gender;
				var profile=studentObjArray[id].profile;

				$('#detail_name').text(name);
				$('#detail_email').text(email);
				$('#detail_address').text(address);
				$('#detail_gender').text(gender);

				$('#detail_photo').attr('src',profile);
				$('#detailModal').modal('show');

			}
		})
	});

// edit

	$('tbody').on('click','.edit',function(){
		var id=$(this).data('id');
		$.get('studentlist.json',function(response){
			if (response) {
				var studentObjArray=JSON.parse(response);

				var name=studentObjArray[id].name;
				var email=studentObjArray[id].email;
				var address=studentObjArray[id].address;
				var gender=studentObjArray[id].gender;
				var profile=studentObjArray[id].profile;

				$('#edit_name').val(name);
				$('#edit_email').val(email);
				$('#edit_address').val(address);
				if (gender=="male") {
					$('#edit_male').attr('checked','checked');
				}else
				{
					$('#edit_female').attr('checked','checked');
				}

				$('#edit_photo').attr('src',profile);
				$('#create').hide('slow');
				$('#update').show('slow');

				$('#edit_id').val(id);
				$('#edit_oldphoto').val(profile);

			}
		})
	})

	$('tbody').on('click','.delete',function(){

		var id=$(this).data('id');
		var ans=confirm('Are You sure you want to delete?');

		if (ans) {

			$.post(
				'deletestudents.php',{id:id},function(data){
					getStudentList();
				}
				)
		}
	})



});


			
</script>
</body>
</html>