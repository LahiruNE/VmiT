<?php $this->beginContent('//layouts/main_1'); ?>
<div class="row-fluid">
    <div id="lay">
        <div class="main">
                <?php echo $content; ?>
        </div>	
    </div><!-- content -->
</div>
<?php $this->endContent(); ?>

<style>
    #lay{
        position: relative;
        margin-left: 440px;
        width: 350px;
    }
    
</style>