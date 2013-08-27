<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
	array('label'=>'Manage Article', 'url'=>array('admin')),
	array('label'=>'Show Articles', 'url'=>array('showArticles')),
);
?>

<h1>Create Article</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>