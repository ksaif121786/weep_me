<div class="container-fluid" style="background-color:#ffffcc; height:600px; ">
<?php 
echo "<strong>Welcome : ".ucfirst($this->session->userdata('type'))."</strong>";

?>
<br>
   <?php echo $this->session->flashdata('message');?>
<?php echo form_open('admin/admin/message')?>
<div class="form-group">
<textarea class="form-control" id="msg" name="bigpin" rows="3"></textarea>
<?php echo form_error('bigpin',"<div style='color:red'>","</div>");?>
</div>
<input type="submit" id="button" value="Post Note" class="submit btn btn-primary">
<?php echo form_close();?>

<br>

<table style="width:100%;">
<?php
 foreach($result as $row)
 {
 ?>
<tr class="card p-0 bg-light" >
<td><strong><a href="<?php echo base_url('admin/admin/detailsuser/'.$row->user_id)?>"><?php echo $row->username.': &nbsp;';?><a></strong><?php echo $row->msg;?></td>
</tr>
<?php 
} 
?>
</table>


<div class="row justify-content-center"><?php echo $this->pagination->create_links();?></div> 
</div>
