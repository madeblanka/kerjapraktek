<script type="text/javascript "src="js/jquery.js"></script>
<script type='text/javascript'>$(document).ready(function() {
//$("#search_results").slideUp();
$("#button_find").click(function(event) {
  event.preventDefault();
  //search_ajax_way();
  ajax_search();
});
$("#search_query").keyup(function(event) {
  event.preventDefault();
  //search_ajax_way();
  ajax_search();
});
});
function ajax_search() {

var nip = $("#search_query").val();
  $.ajax({
    url : "cari.php",
    data : "nip=" + nip,
    success : function(data) {
      // jika data sukses diambil dari server, tampilkan di <select id=kota>
      $("#display_results").html(data);

    }
  });

}</script>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">a</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" id="display_results">
          <div class="table-responsive">
            <table class="table table-hover"width="100%" cellspacing="0">

            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
