<?php 

  include '../connect.php';

  $fetchStmt = $con-> prepare("SELECT * FROM tbl_employee ORDER BY id DESC");
  $fetchStmt-> execute();
  $info = $fetchStmt-> fetchAll();

?>
<html>  
      <head>  
           <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">PHP Ajax Update MySQL Data Through Bootstrap Modal</h3>  
                <br />  
                <div class="table-responsive">  
                     <div align="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  
                          <button class="btn btn-danger" onclick="window.location.reload()"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                     </div>  
                     <br />  
                    <input type="ssearch" name="search" id="search_input" autocomplete="off">
                     <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">Employee Name</th>  
                                    <th width="15%">Edit</th>  
                                    <th width="15%">View</th>  
                               </tr>  
                               <?php
                               foreach($info as $the_info) { ?>

                                  <tr>  
                                    <td><?php echo $the_info["name"]; ?></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $the_info["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="button" name="view" value="view" id="<?php echo $the_info["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                               </tr>  
                               <?php 
                             }
                             ?>
                          </table>  
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter Employee Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter Employee Address</label>  
                          <textarea name="address" id="address" class="form-control"></textarea>  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Designation</label>  
                          <input type="text" name="designation" id="designation" class="form-control" />  
                          <br />  
                          <label>Enter Age</label>  
                          <input type="text" name="age" id="age" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>

 <script>

 $(document).ready(function() {

    $(document).on('click', '.view_data', function() {

      var employee_id = $(this).attr('id');

      if(employee_id != '') {

        $.ajax({

          url: 'select.php',
          method: 'POST',
          data: {employee_id: employee_id},
          success: function(data) {

            $('#employee_detail').html(data);  
            $('#dataModal').modal('show');

          }

        });

      }

    });

    $(document).on('click', '.edit_data', function() {

      var employee_id = $(this).attr('id');

      $.ajax({

        url: 'fetch.php',
        method: 'POST',
        data: {employee_id: employee_id},
        dataType:"json",
        success: function(data) {

           $('#name').val(data.name);
           $('#address').val(data.address);
           $('#gender').val(data.gender);
           $('#designation').val(data.designation);
           $('#age').val(data.age);
           $('#employee_id').val(data.id);
           $('#insert').val("Update");
           $('#add_data_Modal').modal('show');

        }

      });

    });

    $(document).on('click', '#add', function() {

      $('#insert').val("Insert");
      $('#insert_form')[0].reset();

    });

    $('#insert_form').on('submit', function(e) {

      e.preventDefault();

      if($('#name').val() == '') {

        alert('Name is required');

      } else if ($('#address').val() == '') {

        alert('Address is required');

      } else if($('#designation').val() == '') {

        alert('Designation is required');

      } else if($('#age').val() == '') {

        alert('Age is required');

      } else {

        $.ajax({

          url: 'insert.php',
          method: 'POST',
          data: $('#insert_form').serialize(),
          beforeSend:function() {

            $('#insert').val('Inserting...')

          },
          success:function(data) {

            $('#insert_form')[0].reset();
            $('#insert').val('insert');
            $('#add_data_Modal').modal('hide');
            $('#employee_table').html(data);

          }

        });

      }

    });
   
   $(document).on('keyup', '#search_input', function() {

      var searchValue = $(this).val();

      $.ajax({

        url: 'search.php',
        method: 'POST',
        data: {searchValue: searchValue},
        success: function(data) {

          $('#employee_table').html(data);

        }

      });

    });



 });

 </script>
