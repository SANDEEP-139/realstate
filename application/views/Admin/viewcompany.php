

<div class ="container">
<div class="row">
<div class="col-md-12">
<?php
$success=$this->session->userdata('success');
if ($success != "") {   
?>
<div class="alert alert-success " style="position: relative; left:22px;!important;"><?php  echo $success;?></div>
<?php
}
?>
<?php
$failure=$this->session->userdata('failure');
if ($failure != "") {   
?>
<div class="alert alert-success"><?php echo $failure; ?></div>
<?php
}
?>
</div>
</div> 
<div id="content">
<div class="row mb-4">
<div class="col-12 mb-4 mb-xl-0">
<div class="card redial-border-light redial-shadow mb-4">
<div class="card-body">
    
    <ul class="list-inline mb-0">
        <li id="dropzone" class="list-inline-item mr-3 redial-relative">
<div class="row">
    <div class="col-md-5 col-sm-5 col-xs-6">
        <a href="<?php  echo base_url().'Product/updatecreation';?>" class="btn btn-primary btn-xs text-uppercase">Add company</a>
    </div>
    
    
    
</div> 
        </li>

    </ul>

</div>  



<div class="col-12 col-sm-12">
<div class="row">
<div class="col-12 col-md-12 mb-4">
<div class="card redial-border-light redial-shadow">
<div class="card-body" style="overflow: visible;">



</div>
<div>
    
<div class="card-body">
            <table id="" class="display table table-bordered" cellspacing="0" style="width:100%">
<thead>
    <tr>
        <th>Srno</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Business</th>
        <th>Contact</th>
        <th>Companyname</th>
        <th>Address</th>
        <th>Business_type</th>
        <th>State</th>
        <th>Message</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
<?php   
$i=1;
foreach($record as $user){ ?>
<tr>
<td> <?php  echo $i;?></td>
<td><?php  echo  $user['Firstname']?></td>
<td> <?php  echo $user['Lastname']?></td>
<td><?php  echo  $user['email']?></td>
<td> <?php  echo $user['business']?></td>
<td><?php  echo  $user['contact']?></td>
<td> <?php  echo $user['company_name']?></td>
<td><?php  echo  $user['address']?></td>
<td> <?php  echo $user['business_type']?></td>
<td><?php  echo  $user['state']?></td>
<td> <?php  echo $user['message']?></td>
<td>
<?php
if($user['status'] == 'Active')
{
$checked = 'checked';
}else
{
$checked = '';
}?>
<div class="custom-control custom-checkbox">

<input cat_id_attr="<?php  echo $user['id']?>"   type="checkbox" <?php echo $checked;?> class="statuscheck custom-control-input" id="status_<?php  echo $user['id']?>">
<label class="custom-control-label" for="status_<?php  echo $user['id']?>">&nbsp;</label>
</div>



</td>





<td>
<div class="btn-group">
<a href="<?php  echo base_url().'Product/updatecreation/'.$user['id'];?>"><i class="fa fa-edit"></i></a>
</div>    
<div class="btn-group">
<a href="<?php  echo base_url().'Product/companycreation_management/delete/'.$user['id'];?>"><i class="fa fa-trash"></i></a>
</div>
</td>
</tr>
<?php $i++;}?> 
</tbody>
</table>
</div>
</div>
</div>
</div>                                              
</div>           
    
    
    
</div>  
</div>
</div>
</div>

</div>
</div>



<script>
$(document).ready(function(){



$(".statuscheck").click(function () {
var a = confirm('Are you sure you want to status changed success?');

if(a==true){
var cat_id = $(this).attr('cat_id_attr');

if ($(this).is(":checked")) {
$.ajax({
url: '<?php echo base_url();?>Product/getcompanyactive',
data: { title: 'Active',cat_id: cat_id},
method: "POST",
success: function(data) {

location.reload();

}             
});
} else {
$.ajax({
url: '<?php echo base_url();?>Product/getcompanyactive',
data: { title: 'Inactive',cat_id: cat_id },
method: "POST",
success: function(data) {
location.reload();
//alert('Status changed');
}             
});
}
}else{

//alert(alert($(this).is(":checked")));
}
//return false;

});
});

</script>



    
    
    
