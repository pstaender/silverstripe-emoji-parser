<?php

namespace pstaender\Controllers;

use pstaender\Utils\Emojis;
use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\HTTPResponse;
use SilverStripe\Core\Convert;

class EmojisController extends Controller
{

	function index(HTTPRequest $request)
	{
		$emojis = Emojis::getEmojis();
		$path = Emojis::base_path();
		$feed = [];
		foreach ($emojis as $emoji) {
			$feed[$emoji] = $path . $emoji . '.png';
		}

		$response = new HTTPResponse();
		$response->addHeader('Content-Type', 'application/json');
		$response->setBody(Convert::array2json($feed));
		return $response;
	}

}
