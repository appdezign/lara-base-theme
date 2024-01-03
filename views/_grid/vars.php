<?php

$grd = $data->grid;

$grd->leftSidebar = 'content._sidebars.left_default';
$grd->rightSidebar = 'content._sidebars.right_default';

// user selected grid/list
if($entity->getMethod() == 'index') {
	if(!empty($data->userview)) {
		$isGrid = ($data->userview == 'grid');
	} else {
		$isGrid = $data->params->isgrid;
	}
} else {
	$isGrid = false;
}
