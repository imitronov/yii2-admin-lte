<?php

use imitronov\yii2AdminLte\widgets\Menu;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<?= Menu::widget(
				[
					'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', 'data-widget' => 'treeview'],
					'items' => [
						['label' => 'Контент', 'header' => true],
						['label' => 'Страницы', 'iconType' => 'fas', 'icon' => 'file-alt', 'url' => ['page/index']],
						[
							'label' => 'Статьи',
							'iconType' => 'far',
							'icon' => 'newspaper',
							'url' => '#',
							'items' => [
								[
									'label' => 'Категории статей',
									'iconType' => 'far',
									'icon' => 'folder',
									'url' => '#',
								]
							]
						],
						[
							'label' => 'Магазин',
							'iconType' => 'fas',
							'icon' => 'store',
							'url' => '#',
							'items' => [
								[
									'label' => 'Категории товаров',
									'iconType' => 'far',
									'icon' => 'folder',
									'url' => '#',
								],
								[
									'label' => 'Товары',
									'iconType' => 'fas',
									'icon' => 'tags',
									'url' => '#',
								]
							]
						],
						['label' => 'Menu Yii2', 'header' => true],
						['label' => 'Gii', 'iconType' => 'far', 'icon' => 'file-code', 'url' => ['/gii']],
						['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/debug']],
						['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
						[
							'label' => 'Some tools',
							'icon' => 'share',
							'url' => '#',
							'items' => [
								['label' => 'Gii', 'iconType' => 'far', 'icon' => 'file-code', 'url' => ['/gii'],],
								['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/debug'],],
								[
									'label' => 'Level One',
									'iconType' => 'far',
									'icon' => 'circle',
									'url' => '#',
									'items' => [
										['label' => 'Level Two', 'iconType' => 'far', 'icon' => 'dot-circle', 'url' => '#',],
										[
											'label' => 'Level Two',
											'iconType' => 'far',
											'icon' => 'dot-circle',
											'url' => '#',
											'items' => [
												['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
												['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
											],
										],
									],
								],
							],
						],
					],
				]
			) ?>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>