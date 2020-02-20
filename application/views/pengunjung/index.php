<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="author" content="colorlib.com">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />

    <link href="<?php echo base_url() ?>assets/listpegawaip/css/main.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="s002">
      <div class="container-fluid">

        <fieldset>
          <legend> <b>SELAMAT DATANG</b></legend>
        </fieldset>
        <div class="row">
          <div class="col">
            <div class="input-group mb-3">
            <input name="nip" id="nip" class="form-control" type="text" placeholder="Masukan NIP atau NAMA"  aria-describedby="basic-addon2"/>
         <div class="input-group-append">
          <button class="btn btn-success" type="submit" id="search">SEARCH</button>
        </div>
        </div>
      </div>
      </div>
      </div>
    </div>

<div class="modal fade" id="exampleModalCenter">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hasil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" id="display_results"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<script type="text/javascript">
$(document).ready(function() {

     $('#search').on('click',function(){
       $("#exampleModalCenter").modal();
           var nip = $("#nip").val();
           jQuery.ajax({
               type : 'post',
               url : <?php base_url(); ?> +"pegawai/hasilcari",
               data :  {nip:nip},
               success : function(data){
               $('#display_results').html(data);
             }
           });
        });

      });
 </script>

  </body>
</html>
