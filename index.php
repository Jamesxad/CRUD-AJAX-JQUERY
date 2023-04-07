<?php
include 'pdodbcon.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script type="text/javascript" src="js/java.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>
    <!-- Alert -->
    <div class="div-alerthome" style="float:right">
		<div class="modal-dialog">
			<div  class="alert alert-success" id="alertmsghome" style=" display:none; width: 300px;">
				<strong class="alert-message"></strong>
			</div>
		</div>
	</div>
    <header><h1 class="headh1">JamesXad Web Development</h1></header>
    
<body > 

<!-- Button trigger modal -->

<div class="container">
<div class="addclient">
<button type="button" id="btn-addclient" class="btn btn-primary my-3" data-bs-toggle="modal" onclick="addClient()" data-bs-target="#Modal">
 Add client</button>
</div>
 <div class="reghead">
 <label class="totaluser" for="totalUser">Registered: <span  id="totalUser"></span></label>
 </div>
<div id="displayDataTable">
<table class="table">
	<thead class="table-info">
	<tr>
	<th scope="col">ID</th> 
	<th scope="col">name</th> 
	<th scope="col">Email</th> 
	<th scope="col">Phone</th> 
  <th scope="col"><span>Edit/Delete</span></th> 
	</tr>
  <tbody class="table-dark" id="tbodyloadrecord"></tbody>
	</thead>
</table>
	</div>

<!-- Modal -->
<div class="modal fade"  id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content" style="height: 100%;" id="modal-content">
        <h1 id="title">Data Entry</h1>
      <div class="modal-body" id="modal-body">
       <form id="addrecordform" method="post" >
       <div class="form-floating my-4" id="input" >
           <input type="hidden" class="form-control" id="inputid">
         </div>
         <div class="input-group mb-3">
         <span class="input-group-text bi bi-person-circle"></span>
        <div class="form-floating" >
            <input type="text" class="form-control"  id="inputname" placeholder="Name:" autocomplete="off">
            <label for="inputname">Name</label>
        </div>
          </div>
          <div class="input-group mb-3">
         <span class="input-group-text bi bi-file-lock2"></span>
        <div class="form-floating">
            <input type="password" class="form-control" id="inputpassword" placeholder="Password:" autocomplete="off">
            <label for="inputpassword">Password</label>
            <button type="button" id="passreveal" onclick="passRev()" class="bi bi-eye-slash-fill"></button>
            <button type="button" id="passrevealEye" class="bi bi-eye-fill" ></button>
        </div>
        </div>
        <div class="input-group mb-3">
         <span class="input-group-text bi bi-envelope-at-fill"></span>
        <div class="form-floating">
            <input type="text" class="form-control" id="inputemail" placeholder="Email:"><span class="emailerror"></span>
            <label for="inputemail">Email</label>
            
          </div>
        </div>
        <div class="input-group mb-3">
         <span class="input-group-text bi bi-telephone-fill"></span>
        <div class="form-floating">  
            <input type="text" class="form-control" id="inputphone" placeholder="Phone:" autocomplete="off">
            <label for="inputphone">Phone</label>
          </div>
        </div>
        </form>
    <div class="clearbtn">
    <button type="button"  onclick="ClearUser()">Clear</button>
    </div>

     
      <div class="modal-footer my-2" style="align-items:center" id="modal-footer">
        <button type="submit" id="btnsave" class="btn btn-primary" onclick="addRecord()" disabled="disabled" >Submit</button>
        <button type="submit"  id="btnupdate" class="btn btn-primary" onclick="updateRec()" >Update</button>
        <button type="button" class="btn btn-danger" id="btnclose" data-bs-dismiss="modal">Close</button>
      </div>
        <!-- Alert home -->
  <div class="div-alert">
		<div class="modal-dialog">
			<div  class="alert alert-success" id="alertmsg" style="display:none;">
				<strong class="alert-message"></strong>
        <span id="emailexist"></span>
			</div>
		</div>
	</div>

    </div>
</div>
</div>
</div>

<Script>


$(document).ready(function(){
  displayData();
  displayModal();
  displayUser();
  updateRecord();
  viewRecord();
 
  $("#alertmsg").hide();


  
});
$(document).ready(function() {

    $('#inputphone').on('keyup', function() {
        if($(this).val() != '') {
            $('#btnsave').prop('disabled', false);
            
        } else {
            $('#btnsave').prop('disabled', true);
            
        }
    });
});



$(document).ready(function(){
  $('#passreveal').on('click', function(){
    $("#inputpassword").prop("type", "text");
    $('#passrevealEye').show();
    $('#passreveal').hide();

  })
  $('#passrevealEye').on('click', function(){
    $("#inputpassword").prop("type", "password");
    $('#passrevealEye').hide();
    $('#passreveal').show();
    
  })
});

$(document).ready(function(){
  loadRecord(updateid);
  $('.tbl-record-tr').on('click',function(){
    
  $('#btn-update').click();
  });
});
</Script>


</body>
</html>