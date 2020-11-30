<?php

use MediaWiki\Linker\LinkRenderer;
use MediaWiki\Linker\LinkTarget;

/**
 * Class FakeLinkRenderer
 */
class FakeLinkRenderer extends LinkRenderer {

	/**
	 * @param LinkTarget $target
	 * @param null $text
	 * @param array $extraAttribs
	 * @param array $query
	 *
	 * @return mixed|null
	 */
	public function makeLink( LinkTarget $target, $text = null, array $extraAttribs = [], array $query = [] ) {
		return $text;
	}

}
