<?php $this->load->view('header') ?>
<h1><?php echo $title ?></h1>
<table class="table table-striped">
<?php foreach($items as $i):?>
    <tr>
        <td><?php $i['itemname']?></td>
        <td><?php $i['pricein']?></td>
        <td><?php $i['pricesale'] ?></td>
        <td><?php $i['info']?></td>
    </tr>
<?php endforeach ?>
</table>
