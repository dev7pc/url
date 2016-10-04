<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use SevenPercent\URL;

class URLTest extends TestCase {

	public function testBasicFunctionality() {
		$url = new URL('scheme://user:pass@host:1234/path?query&param=value#fragment');
		$this->assertSame('scheme', $url->scheme);
		$this->assertSame('user', $url->user);
		$this->assertSame('pass', $url->pass);
		$this->assertSame('host', $url->host);
		$this->assertSame(1234, $url->port);
		$this->assertSame('/path', $url->path);
		$this->assertSame(['query' => '', 'param' => 'value'], $url->query);
		$this->assertSame('fragment', $url->fragment);
		$this->assertSame('scheme://user:pass@host:1234/path?query=&param=value#fragment', (string)$url);
	}
}
