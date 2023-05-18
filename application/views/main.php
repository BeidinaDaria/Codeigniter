<?php $this->load->view('header') ?>
<h2><?php echo $title ?></h2>
<p><?php echo $text ?></p>
<ul>
    <?php foreach ($countries as $c):?>
        <li><?php echo $c ?></li>
        <?php endforeach?>
</ul>
<?php $this->load->view('footer') ?>
