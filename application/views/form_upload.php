<?php
$this->load->view('header');
if(isset($error))
{
    echo '<div class="alert alert-danger">'.$error.'</div>';
} else if(isset($result))
{
    echo '<div class="alert alert-success">'.$result.'</div>';
}
$args=['class'=>'form-horizontal'];
echo form_open_multipart('home/selectImages',$args);
echo '<div class="col-md-offset-3">';
echo form_label('Выберите изображения ',' image',array('class'=>'form-label'));
echo '&nbsp;';
echo form_upload('image','class="form-label"');
echo '&nbsp;';
echo form_submit(['name'=>'send','value'=>'Загрузить','class'=>'btn btn-success']);
echo '</div>';
echo form_close();
$this->load->view('footer');
?>
