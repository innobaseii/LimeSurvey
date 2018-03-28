
<div class='col-lg-12'>
    <div class='pagetitle h3'><?php eT('Plugin manager'); ?></div>
    <?php foreach($result as $name => $scannedPlugin): ?>
        <div class='form-group col-lg-12'>
            <label class='control-label col-sm-4'>
                <?php echo $name; ?>
            </label>
            <?php if ($scannedPlugin['load_error'] == 0): ?>
                <a href='' class='btn btn-success' data-toggle='tooltip' title='<?php eT('Install this plugin'); ?>'>
                    <i class='fa fa-download'></i>&nbsp;
                    <?php eT('Install'); ?>
                </a>
            <?php else: ?>
                <i class='fa fa-exclamation-triangle text-warning'></i>&nbsp;
                <span href='' class='text-warning'><?php eT('Load error. Please contact the plugin author.'); ?></span>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
