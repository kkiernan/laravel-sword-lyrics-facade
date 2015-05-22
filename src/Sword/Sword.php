<?php namespace Sword;

class Sword {
	
	/**
	 * Awesome Sword lyrics.
	 * 
	 * @var array
	 */
	protected static $lyrics = [
		"Colossus of the deep comes crashing down with cosmic might",
		"They search for that which was lost // Through realms of rime and of frost",
		"Fragments of bore infused with purest steel // A warrior's hand and a wizard's mind to wield",
		"Twilight written in the runes of crone // Freya weeps upon her golden throne",
		"And what if all you've seen are lies // When the veil lifts from your eyes",
		"All that has been shall be again",
		"When the world is dark and still without a sound // That which was hidden is shown",
		"Tell me, oh mountain // What secrets do you hold // Buried deep beneath the earth // In hidden vaults of stone?",
		"Oh, he wonders // How much there is to know // And how long will it take him // To learn it as he goes",
		"Set adrift in the multiverse // By the whims of fate",
		"His skin became a prison // Where suffers his soul",
		"Immortality through artificial transformation // To rule a world that soon will die",
		"Walk not down that road // I can not tell you where it goes // Ask me no more questions // Some things you weren't meant to know",
		"She is the maiden, the mother, the crone",
	];

	/**
	 * Get a random lyric.
	 * 
	 * @return string
	 */
	public function lyric()
	{
		$randomKey = array_rand(static::$lyrics);

		return static::$lyrics[$randomKey];
	}

}