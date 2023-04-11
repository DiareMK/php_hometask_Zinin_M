<?php

use Latte\Runtime as LR;

/** source: main.latte */
final class Templateb1a23ef32a extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($var) /* line 1 */;
		echo '21313';
	}
}
