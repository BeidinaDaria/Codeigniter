<?php
echo '<span style="color:red;margin-left:20px;">';
echo validation_errors();
echo '</span>';
if(isset($success))
{
    echo '<span style="color:green;margin-left:20px;">';
    echo $success;
    echo '</span>';
}
$this->load->view('header');
$style['class']='form-horizontal';
echo form_open('home/registration',$style);
echo '<div class="row " style="margin:2px;">';
echo form_label('Enter your login: ','login',['class'=>'control-label col-md-3']);
$data = [
    'name' => 'login',
    'size' => '50',
    'class' => '',
    'value'=> set_value('login')
];
echo form_input($data);
echo '</div>';
echo '<div class="row " style="margin:2px;">';
echo form_label('Enter password: ','pass1',['class'=>'control-label col-md-3']);
$data = [
    'name' => 'pass1',
    'size' => '50',
    'class' => '' ,
    'value'=> set_value('pass1')];
echo form_password($data);
echo '</div>';
echo '<div class="row " style="margin:2px;">';
echo form_label('Confirm password: ','pass2',['class'=>'control-label col-md-3']);
$data = [
    'name' => 'pass2',
    'size' =>'50',
    'class' => '',
    'value'=> set_value('pass2')
];
echo form_password($data);
echo '</div>';
echo '<div class="row 1" style="margin:2px;">';
echo form_label('Enter email: ','email',['class'=>'control-label col-md-3']);
$data = [
    'name' => 'email',
    'type' =>'email',
    'size' => '50',
    'class' => '',
    'value'=> set_value('email')
];
echo form_input($data);
echo '</div>';
echo '<div class="row" style="margin:2px;">';
echo form_submit(['name'=>'send','value'=>'Send','class'=>'btn btn-success col-mdoffset-4']);
echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-info']);
echo '</div>';
echo form_close();
$this->load->view('footer');
?>
