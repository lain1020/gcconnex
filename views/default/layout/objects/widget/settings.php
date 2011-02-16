<?php
/**
 * Elgg widget edit settings
 *
 * @uses $vars['widget']
 */

$widget = elgg_extract('widget', $vars);
?>

<div class="elgg-widget-edit" id="elgg-togglee-widget-<?php echo $widget->guid; ?>">
	<?php echo elgg_view_form('widgets/save', array(), $vars); ?>
</div>
