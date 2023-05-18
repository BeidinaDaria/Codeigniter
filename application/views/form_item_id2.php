<?php $this->load->view('header');
$st['class']='form-horizontal';
echo form_open('home/getItemInfo2',$st);
echo "<div class='row'>
<div class='col-lg-6 offset=lg-3 col-12'>";
echo form_label('Select item',array('class'=>'control-label'));
echo '<select name="itemID">';
foreach ($list as $l){
    echo '<option value='.$l["ID"].'>';
    echo $l['itemname'];
    echo '</option>';
}
echo '</select>';
echo form_submit([
    'name'=>'send',
    'value'=>'OK',
    'class'=>'btn btn-sm btn-success col-sm-2'
]);
echo '</div></div>';
echo form_close();
$this->load->view('footer');
?>
