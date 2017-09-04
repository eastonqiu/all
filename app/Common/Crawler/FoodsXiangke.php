<?php

namespace App\Common\Crawler;

use GuzzleHttp\Client as HttpClient;
use Symfony\Component\DomCrawler\Crawler as SymfonyCrawler;

class FoodsXiangke extends Crawler {

	protected function parse($body) {
		$body = json_decode($body, true);
		if(! ($body && isset($body['status']) && $body['status'] && isset($body['info']))) {
			return NULL;
		}

		$crawler = new SymfonyCrawler();
		$crawler->addHtmlContent($body['info'], 'utf-8');
		$items = $crawler->filterXPath('//div[@class="xk_w_main"]/ul/li')->each(function (SymfonyCrawler $node, $i) {
			return $node->text();
		});

		$ret = [];
		foreach($items as $item) {
			$v = explode('：', $item);
			if(! array_key_exists($v[0], $ret)) {
				$ret[$v[0]] = $v[1];
			}
		}

		return $ret;
	}
}
