
<!-- <input type="hidden" name="" id='timeban' value="<?php echo $result->bantime?>"> -->
<!-- <script type="text/javascript">
	
	// var countdown = document.getElementById('timeban').value;
	var countdown = new Date().getMinutes(12);
	document.write(countdown);
    var x = setInterval(function(){
	var now = new Date().getTime();
	var distance = countdown - now;
	var hour =  Math.floor((distance %(1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minute =  Math.floor((distance %(1000 * 60 * 60 )) / (1000 * 60));
	var second =  Math.floor((distance %(1000 * 60 )) / (1000));
	alert(hour+minute+second);
	document.getElementById('tabledateshow').innerHTML= hour+'h'+minute+'m'+second+'s';
	if(distance < 0)
	{
		clearInterval(x);
		document.getElementById('tabledateshow').innerHTML="Expired";
	}



	},

	1000);

</script> -->

<div class="container-fluid" style="background-color:#ffffcc; height:600px; ">

	<h3><?php echo $title?></h3>
	<div class="row">
		<table class="table table-bordered">
			<tr>
			<th>User id</th>
            <th>User name</th>
            <th>countdown</th>
			<th>User status</th>

            </tr>

            <tr>
			<td><?php echo $result->id?></td>
            <td><?php echo $result->username?></td>
            <td id=""><?php echo $result->bantime?></td>
             <!-- <td id="tabledateshow"></td> -->
            <?php if($result->pinboard == 'activated') { ?>
	 		<td><a class="btn btn-success"  href="<?php echo base_url('admin/admin/changeStatus/activated/'.$result->id.'/'.$result->username )?>"><?php echo $result->pinboard?></a></td>
		     <?php } else {?>

               <td><a class="btn btn-danger" href="<?php echo base_url('admin/admin/changeStatus/deactivated/'.$result->id.'/'.$result->username )?>"><?php echo $result->pinboard?></a></td>
		     <?php }?>
            </tr>

		</table>
	</div>
</div>

