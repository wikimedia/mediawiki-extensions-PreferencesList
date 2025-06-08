<?php

use MediaWiki\Linker\LinkRenderer;
use MediaWiki\Page\PageReference;
use Wikimedia\HtmlArmor\HtmlArmor;
use Wikimedia\Parsoid\Core\LinkTarget;

/**
 * Class FakeLinkRenderer
 */
class FakeLinkRenderer extends LinkRenderer {

	/**
	 * @param PageReference|LinkTarget $target
	 * @param HtmlArmor|null|string $text
	 * @param array $extraAttribs
	 * @param array $query
	 *
	 * @return string
	 */
	public function makeLink( $target, $text = null, array $extraAttribs = [], array $query = [] ): string {
		return (string)$text;
	}
}
