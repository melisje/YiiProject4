<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs = array(
    'Articles' => array('index'),
    'articles',
);

$this->menu = array(
    array('label' => 'List Article', 'url' => array('index')),
    array('label' => 'Create Article', 'url' => array('create')),
//	array('label'=>'Update Article', 'url'=>array('update', 'id'=>$model->ID)),
//	array('label'=>'Delete Article', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
    array('label' => 'Manage Article', 'url' => array('admin')),
    array('label' => 'Show Articles', 'url' => array('showArticles')),
);
?>

<h1>Articles</h1>

<?php
$i = 0;
foreach ($articles as $article)
{
    $i++;
    echo '<div class="art" style="">';

    // check if title needs to be printed ...
    if ($article->SHOW_TITLE)
    {
        echo '<div class="art_title" >';
        echo $article->TITLE;
        insertUpdateLink($article,'float:right');
        echo '</div>';
    }
    else
    {
        insertUpdateLink($article, 'float:right;font-weight:bold;margin:5px 10px');
    }
    echo '<div class="art_content">' . $article->CONTENT . '</div>';
    echo '</div>';
}

/**
 * This function inserts an update link for the current article. 
 * If a margin is given, it is added as parameter to the style
 * @param type $article - the article model object
 * @param type $margin - an optional margin, following normal css 
 */
function insertUpdateLink($article, $css = null)
{
    echo '<span' . (isset($css) ? ' style="' . $css . '"' : '') . ';">';
    echo CHtml::link('update', array('article/update', 'id' => $article->ID,));
    echo '</span>';
}
?>