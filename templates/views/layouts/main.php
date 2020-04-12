<?php

use yii\helpers\Html;
use imitronov\yii2AdminLte\assets\AdminLteAsset;

/** @var \yii\web\View $this */
/** @var string $content */

AdminLteAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
$imitronovDirectoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/imitronov/yii2-admin-lte/web');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script>
        function loadCss(t,e,n){var a=navigator.userAgent;if(!(!window.addEventListener||a.match(/(Android (2|3|4.0|4.1|4.2|4.3))|(Opera (Mini|Mobi))/)&&!a.match(/Chrome/))){var o={};try{o=localStorage||{}}catch(t){}var r="x-font-"+t,i=r+"url",s=r+"css",d=o[i],c=o[s],l=document.createElement("style");if(l.rel="stylesheet",document.head.appendChild(l),!c||d!==e&&d!==n){var u=n&&function(){if(!window.FontFace)return!1;var t=new FontFace("t",'url("data:application/font-woff2,") format("woff2")',{});return t.load(),"loading"===t.status}()?n:e,f=new XMLHttpRequest;f.open("GET",u),f.onload=function(){f.status>=200&&f.status<400&&(o[i]=u,o[s]=l.textContent=f.responseText)},f.send()}else l.textContent=c}}
		loadCss('font', '<?= $imitronovDirectoryAsset ?>/css/ssp.woff.css?v=1.0', '<?= $imitronovDirectoryAsset ?>/css/ssp.woff2.css?v=1.0');
    </script>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>

    <div class="wrapper">

        <?= $this->render(
            '_navbar.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            '_sidebar.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            '_content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
