<?php
/** @var $this HtmlSlimView */
/** @var $model IndexViewModel */
?>

<?php $this->setBlock('body', function() use ($model) { ?>
	<?php /** @var $this HtmlSlimView */ ?>
	<div id="index">
		<?php foreach($model->getCards()->getIterator() as $card): ?>
			<div class="card">
				<strong><?php echo $card->getName() ?></strong>
				<ul>
				<?php foreach($card->getDepartures()->getIterator() as $dep): ?>
					<li>[<?php echo $dep->getTime() ?>] <?php echo $dep->getName() ?> (<?php echo $dep->getDirection() ?>) <small><?php echo $dep->getStop() ?></small></li>
				<?php endforeach; ?>
				</ul>
			</div>
		<?php endforeach; ?>
	</div>
<?php }) ?>
