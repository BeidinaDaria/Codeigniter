<?php
    $this->load->view('header');
    $data=[
        'class'=>'form-horizontal',
        'accept-charset'=>'utf8'
    ];
    echo form_open('home/getItemInfo',$data);?>
    <div class='row'>
        <div class='col-lg-6 offset=lg-3 col-12'>
    <?php $input=[
        'name'=>'ID',
        'class'=>'form-control',
        'style'=>'color:green;margin:5px;',
        'placeholder'=>'select id','type'=>'text'
    ];
    echo form_input($inp);
    echo form_submit([
        'name'=>'send',
        'value'=>'OK',
        'class'=>'btn btn-sm btn-success col-sm-2'
    ]);
    echo form_close();?>
    </div>
</div>
<?php $this->load->view('footer'); ?>
?>
