<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TrackDDB</title>
</head>

<body style="font-family:Verdana, Geneva, sans-serif; font-size:12px">
<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<table border="0" cellpadding="1" cellspacing="0"><tr><td>
<b><a href="<?= url::base(true); ?><?= Route::get('default')->uri(array('controller' => '', 'action' => '')); ?>"><?=  __('Home'); ?></a></b><br><br>
<b><a href="<?= url::base(true); ?><?= Route::get('default')->uri(array('controller' => 'contest', 'action' => '')); ?>"><?=  __('List Contests'); ?></a></b><br><br>
</td></tr><tr><td>

<?php echo form::open(); ?>
<?php echo form::hidden('id', $contest['id']) ?>
<b><?php echo ($contest['id']) ? 'Editing' : 'Creating' ?> contest</b><br /><br />

<table>
<tr><td><?=  __('First Name'); ?>:</td><td><?php echo form::input('name', $contest['name']) ?></td>
<tr><td>Email:</td><td><?php echo form::input('email', $contest['email']) ?></td>
<tr><td></td><td><?php echo form::button('submit',__('Save')) ?></td>
<tr><td colspan="2">
<?php if(isset($success)): ?>
	<li> <?php echo $success ?></li>
<?php endif ?>

<?php if(isset($errors)): ?>
<b>Submitted data has errors</b>
<ul>
<?php foreach ($errors as $key => $value): ?>
    <li><b><?php echo $key ?>:</b> <?php echo $value ?></li>
<?php endforeach ?>
</ul>
<?php endif ?>
</td>
</table>

<?php echo form::close(); ?>

</td></tr></table>

</body>
</html>