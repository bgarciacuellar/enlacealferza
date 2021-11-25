<!-- jQuery -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
@if(Route::is(['task-board']))
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
@endif
<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slimscroll JS -->
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!-- Form Validation JS -->
<script src="assets/js/form-validation.js"></script>
<!-- Mask JS -->
<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/mask.js"></script>
<!-- Summernote JS -->
<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
<!-- Dropfiles JS -->
@if(Route::is(['chat']))
<script src="assets/js/dropfiles.js"></script>
@endif
<!-- Datatable JS -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<!-- Select2 JS -->
<script src="assets/js/select2.min.js"></script>
<!-- Task JS -->
<script src="assets/js/task.js"></script>
<!-- Datetimepicker JS -->
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<!-- Multiselect JS -->
<script src="assets/js/multiselect.min.js"></script>
<!-- Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!-- Calendar JS -->
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/jquery.fullcalendar.js"></script>
<!-- Chart JS -->
@if(Route::is(['pagee']))
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/js/chart.js"></script>
@endif
<!-- Apex Charts -->
<script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/app.js"></script>
<script>
		$(".header").stick_in_parent({
			
		});
		// This is for the sticky sidebar    
		$(".stickyside").stick_in_parent({
			offset_top: 60
		});
		$('.stickyside a').click(function() {
			$('html, body').animate({
				scrollTop: $($(this).attr('href')).offset().top - 60
			}, 500);
			return false;
		});
		// This is auto select left sidebar
		// Cache selectors
		// Cache selectors
		var lastId,
			topMenu = $(".stickyside"),
			topMenuHeight = topMenu.outerHeight(),
			// All list items
			menuItems = topMenu.find("a"),
			// Anchors corresponding to menu items
			scrollItems = menuItems.map(function() {
				var item = $($(this).attr("href"));
				if (item.length) {
					return item;
				}
			});

		// Bind click handler to menu items


		// Bind to scroll
		$(window).scroll(function() {
			// Get container scroll position
			var fromTop = $(this).scrollTop() + topMenuHeight - 250;

			// Get id of current scroll item
			var cur = scrollItems.map(function() {
				if ($(this).offset().top < fromTop)
					return this;
			});
			// Get the id of the current element
			cur = cur[cur.length - 1];
			var id = cur && cur.length ? cur[0].id : "";

			if (lastId !== id) {
				lastId = id;
				// Set/remove active class
				menuItems
					.removeClass("active")
					.filter("[href='#" + id + "']").addClass("active");
			}
		});
		</script>
		<script>
    $(document).ready(function(){
        // Read value on page load
        $("#result b").html($("#customRange").val());

        // Read value on change
        $("#customRange").change(function(){
            $("#result b").html($(this).val());
        });
    });        
</script>
<script>
		$(function () {
			$(document).on("click", '.btn-add-row', function () {
				var id = $(this).closest("table.table-review").attr('id');  // Id of particular table
				console.log(id);
				var div = $("<tr />");
				div.html(GetDynamicTextBox(id));
				$("#"+id+"_tbody").append(div);
			});
			$(document).on("click", "#comments_remove", function () {
				$(this).closest("tr").prev().find('td:last-child').html('<button type="button" class="btn btn-danger" id="comments_remove"><i class="far fa-trash-alt"></i></button>');
				$(this).closest("tr").remove();
			});
			function GetDynamicTextBox(table_id) {
				$('#comments_remove').remove();
				var rowsLength = document.getElementById(table_id).getElementsByTagName("tbody")[0].getElementsByTagName("tr").length+1;
				return '<td>'+rowsLength+'</td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="far fa-trash-alt"></i></button></td>'
			}
		});
		</script>
			<script>
			    $('.next').click(function(){
    var nextId = $(this).parents('.tab-pane').next().attr("id");
  $('[href="#' + nextId + '"]').tab('show');
  return false;
  
   })



$('.first').click(function(){

  $('#myWizard a:first').tab('show')

});
		</script>