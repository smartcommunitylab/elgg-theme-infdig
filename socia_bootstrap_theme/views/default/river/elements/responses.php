<?php
/**
 * Twitter&reg; Bootstrap Theme for Elgg
 *
 * Converts all Elgg css elements to Twitter&reg; Bootstrap elements.  Helps 
 * Designers create beautiful Bootstrap themes for Elgg.
 *
 * PHP version 5.6
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Elgg Themes
 * @author     Nur Alam
 * @copyright  2017 SocialApparatus
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0
 */
/**
 * River item footer
 *
 * @uses $vars['item'] ElggRiverItem
 * @uses $vars['responses'] Alternate override for this item
 */

// allow river views to override the response content
$responses = elgg_extract('responses', $vars, false);
if ($responses) {
	echo $responses;
	return;
}

$item = $vars['item'];
/* @var ElggRiverItem $item */
$object = $item->getObjectEntity();

// annotations and comments do not have responses
if ($item->annotation_id != 0 || !$object || $object instanceof ElggComment) {
	return;
}

$comment_count = $object->countComments();

if ($comment_count) {
	$comments = elgg_get_entities(array(
		'type' => 'object',
		'subtype' => 'comment',
		'container_guid' => $object->getGUID(),
		'limit' => 3,
		'order_by' => 'e.time_created desc',
		'distinct' => false,
	));

	// why is this reversing it? because we're asking for the 3 latest
	// comments by sorting desc and limiting by 3, but we want to display
	// these comments with the latest at the bottom.
	$comments = array_reverse($comments);

	// make sure the comments know that this is viewed from the activity/river
	elgg_push_context('activity');
	
	//echo elgg_view_entity_list($comments, array('list_class' => 'elgg-river-comments'));

	// restore context
	elgg_pop_context();
	
	if ($comment_count > count($comments)) {
		$url = $object->getURL();
		$params = array(
			'href' => $url,
			'text' => elgg_echo('river:comments:all', array($comment_count)),
			'is_trusted' => true,
		);
		$link = elgg_view('output/url', $params);
		//echo "<div class=\"elgg-river-more\">$link</div>";
	}
}

if (!$object->canComment()) {
	return;
}

// inline comment form
$form_vars = array('id' => "comments-add-{$object->guid}-{$item->id}", 'class' => 'hidden');
$body_vars = array('entity' => $object, 'inline' => true);
echo elgg_view_form('comment/save', $form_vars, $body_vars);