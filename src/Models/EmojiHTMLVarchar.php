<?php

namespace pstaender\Models;


use pstaender\Utils\Emojis;
use SilverStripe\ORM\FieldType\DBHTMLVarchar;

class EmojiHTMLVarchar extends DBHTMLVarchar
{

	private static $casting = array(
		"EmojiParse" => "HTMLFragment",
	);

	public function EmojiParse()
	{
		return Emojis::parse($this->forTemplate());
	}

}