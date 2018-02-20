<?php

namespace pstaender\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FormField;

class HTMLEditorFieldExtension extends Extension
{

	public function onBeforeRender(FormField $context, $properties)
	{
		$context->setDescription($context->getDescription()
			. '<br>You can use emoji tags, <a href="https://www.webpagefx.com/tools/emoji-cheat-sheet/" target="_blank">click here for reference</a>');
	}

}