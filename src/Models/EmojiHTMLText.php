<?php

namespace pstaender\Models;


use pstaender\Utils\Emojis;
use SilverStripe\ORM\FieldType\DBHTMLText;

class EmojiHTMLText extends DBHTMLText
{

	private static $casting = array(
		"EmojiParse" => "HTMLFragment",
	);

	public function EmojiParse()
	{
		return Emojis::parse($this->forTemplate());
	}

}