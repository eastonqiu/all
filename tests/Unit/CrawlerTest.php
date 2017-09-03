<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Common\Crawler\Crawler;

class CrawlerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
		$crawler = new Crawler();
		$ret = $crawler->crawl('FoodsXiangke', ['name' => '西红柿 螃蟹']);
		fwrite(STDERR, print_r($ret, TRUE));
        $this->assertTrue(true);
    }
}
