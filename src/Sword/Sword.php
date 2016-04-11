<?php

namespace Sword;

use Illuminate\Support\Collection;

class Sword
{
    /**
     * Get a random lyric from The Sword.
     * 
     * @return string
     */
    public function lyric()
    {
        return Collection::make([
            "Colossus of the deep comes crashing down with cosmic might",
            "They search for that which was lost through realms of rime and of frost",
            "Fragments of bore infused with purest steel",
            "Twilight written in the runes of crone",
            "And what if all you've seen are lies when the veil lifts from your eyes?",
            "All that has been shall be again",
            "When the world is dark and still without a sound, that which was hidden is shown",
            "Tell me, oh mountain, what secrets do you hold buried deep beneath the earth in hidden vaults of stone?",
            "Oh he wonders how much there is to know and how long will it take him to learn it as he goes.",
            "Set adrift in the multiverse by the whims of fate",
            "His skin became a prison where suffers his soul",
            "Immortality through artificial transformation to rule a world that soon will die",
            "Walk not down that road I can not tell you where it goes",
            "Ask me no more questions some things you weren't meant to know",
            "She is the maiden, the mother, the crone",
            "Will you have the coin to pay for your passage and the courage to take up the oar?",
            "Waiting for dawn on the snow-covered tundra",
            "Look to the sky for a good star to guide you",
            "Into the night, never knowing he has been lead astray",
            "Far across the gulf of time he watches all unfold",
            "He has learned forbidden wisdom not meant to be known",
            "Across the aether the other one must go to sleep until that distant day",
            "Arcane science of temporal exploration known to no one of his kind"
        ])->random();
    }
}
