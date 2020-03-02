    
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Logout</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Logout</h4>
            </div>
            <div class="modal-body">
				<h3>Anda berhasil logout!</h3></center>
                
                <br>
                    <button type="submit" style="float:right;" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>    
<?php 
session_destroy();
?>                 