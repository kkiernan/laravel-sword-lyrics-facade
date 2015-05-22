<?php namespace spec\Sword;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SwordSpec extends ObjectBehavior {

	function it_is_initializable()
	{
		$this->shouldHaveType('Sword\Sword');
	}

	function it_gets_a_random_lyric()
	{
		$this->lyric()->shouldMatch('/\S/');
	}

}
