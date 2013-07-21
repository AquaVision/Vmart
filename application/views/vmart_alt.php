<html>
<head>
	<title></title>
        <base href="<?= base_url() . "assets/"; ?>">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
</head>
	<body>

	<a  data-itemid="25" role="button" class="btn show_modal" >Get Description</a>
 
	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Modal header</h3>
	  </div>
	  <div class="modal-body">
	    <p id="description"></p>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <button class="btn btn-primary">Save changes</button>
	  </div>
	</div>


	<script src="jquerylib/jquery-1.10.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<script type="text/javascript">

	$(".show_modal").on('click',function(e)
		{
			var item_id= $(this).data("itemid");
			var url = "../Vmart_alt/get_item_details/"+item_id;
			$.get(url, function(data) {
				$('#description').html(data);
			}).success(function() {
				$('#myModal').modal({show:true});
			});

		});

	</script>
	
	</body>
</html>