<div class="container-fluid" style="background-color:#ffffcc; height:600px; ">

<?php 
echo "<strong>Welcome : ".ucfirst($this->session->userdata('username'))."</strong>";
?>
<br>

<?php echo form_open('user/Dashboard/message')?>
<div class="form-group">
<textarea class="form-control" id="msg" name="bigpin" rows="3"></textarea>
<?php echo form_error('bigpin',"<div style='color:red'>","</div>");?>
</div>
<input type="submit" id="button" value="Post Note" class="submit btn btn-primary">
<a href="<?php echo base_url('user/Dashboard/mainpage')?>"><button class="btn btn-info">Refresh</button></a>
<?php echo form_close();?>




<br>

<table style="width:100%;">
<?php
 foreach($data as $row)
 {
 ?>
<tr class="card p-0 bg-light" >
<td><strong><?php echo $row->username.':';?></strong><?php echo $row->msg;?></td>
</tr>
<?php 
} 
?>
</table>


<div class="row justify-content-center"><?php echo $this->pagination->create_links();?></div> 
</div>








