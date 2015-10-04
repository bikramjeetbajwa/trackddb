<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TrackDDB</title>
</head>

<body style="font-family:Verdana, Geneva, sans-serif; font-size:12px">
<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<table border="0" cellpadding="1" cellspacing="0" ><tr><td>
<b><a href="<?= url::base(true); ?><?= Route::get('default')->uri(array('controller' => '', 'action' => '')); ?>"><?=  __('Home'); ?></a></b><br><br>
<b><a href="<?= url::base(true); ?><?= Route::get('default')->uri(array('controller' => 'contest', 'action' => 'details')); ?>"> <?=  __('Add Contest'); ?></a></b><br><br>
</td></tr><tr><td>
<table cellpadding="5" >
	<tr>
        <td align="left" width="200px"><b><?=  __('First Name'); ?></b></td>
        <td align="left" width="200px"><b>Email</b></td>
        <td align="left" width="100px"></td>
</tr>
<?php foreach($contests as $contest): ?>

    <tr>
        <td align="left">
            <?php echo $contest->name ?>
        </td>
        <td align="left">
            <?php echo $contest->email ?>
        </td>
        <td align="left">
            <?php //echo html::anchor('contest/edit/'.$contest->id, 'edit') ?>
            <a href="<?= url::base(true); ?><?= Route::get('default')->uri(array('controller' => 'contest', 'action' => 'details')); ?>/<?= $contest->id ?>"><?=  __('Edit'); ?></a>
        </td>
    
</tr>
<?php endforeach ?>
</table>
</td></tr></table>
</body>
</html>