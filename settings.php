<?php
	require("header.php");
 ?>

 <div class="wrapper text-center">
	 <div class="btn-group-vertical">

			<button class="btn btn-primary btn-lg btn-block" type="button" onclick="changeInfo()">Change Account Info</button>
			<script type="text/javascript">
				function changeInfo(){
					location.href = "./changeInfo.php";
				}
			</script>

			<!-- <button class="btn btn-warning btn-lg btn-block" type="button" name="cancelFeature Request">Cancel Feature Request</button> -->
			<button class="btn btn-warning btn-lg btn-block" type="button" onclick="showSupport()">Show Support Tickets</button>
			<script type="text/javascript">
				function showSupport(){
					location.href = "./showSupport.php";
				}
			</script>
	 </div>
 </div>


<?php
	require("footer.php");
 ?>
