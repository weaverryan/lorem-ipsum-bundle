<?php

namespace KnpU\LoremIpsumBundle;

interface WordProviderInterface
{
    /**
     * Return an array of words to use for the fake text.
     *
     * @return array
     */
    public function getWordList(): array;
}
