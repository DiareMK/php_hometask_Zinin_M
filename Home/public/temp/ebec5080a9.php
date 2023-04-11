<?php

use Latte\Runtime as LR;

/** source: index.tpl */
final class Templateebec5080a9 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($var) /* line 1 */;
		echo ',';
		echo LR\Filters::escapeHtmlText($shish) /* line 1 */;
		echo ',pleaseee!';
	}
}
