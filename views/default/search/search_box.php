<?php
/**
 * Search box
 *
 * @uses $vars['value'] Current search query
 * @uses $vars['class'] Additional class
 */

$class = "elgg-search";
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

?>

<form class="<?php echo $class; ?>" action="https://www.google.com/search" method="get">
	<fieldset>
		<input type="text" class="search-input" size="21" placeholder="<?php echo elgg_echo('forms:search:q:placeholder'); ?>" required />
		<input type="hidden" name="q" />
		<input type="submit" value="<?php echo elgg_echo('forms:search:submit:label'); ?>" class="search-submit-button" />
	</fieldset>
</form>

<script>
	$('.elgg-search').live('submit', function() {
		var userQuery = $(this).find('.search-input').first().val();
		alert(userQuery);

		var q = $(this).find('[name="q"]');

		q.val("site:<?php echo elgg_get_site_url(); ?> " + userQuery);
	
		alert(q.val());
	});
</script>
