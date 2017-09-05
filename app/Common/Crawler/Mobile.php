<?php

namespace App\Common\Crawler;

use GuzzleHttp\Client as HttpClient;
use Symfony\Component\DomCrawler\Crawler as SymfonyCrawler;

class Mobile extends Crawler {

	protected function parse($body) {
		$body = json_decode($body, true);
		if(! ($body && isset($body['status']) && $body['status'] && isset($body['text']))) {
			return NULL;
		}

		return $body['text'];
	}
}
