<?php

class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse(string $word): bool {
        $validateLength = $this->validateWordLength($word);
        $validateCharacters = $this->validateWordCharacters($word);
        $firstUpper = $this->firstUpper($word);

        if($validateLength && $validateCharacters && $firstUpper && strtoupper($word) === $word){
            return true;
        }
        return false;
    }

    /**
     * @param String $word
     * @return Boolean
     */
    function validateWordLength(string $word): bool {
        if(strlen($word) < 1 && strlen($word > 100)){
            return false;
        }
        return true;
    }

    /**
     * @param String $word
     * @return Boolean
     */
    function validateWordCharacters(string $word): bool {
        if (!ctype_alpha($word)) {
            return false;
        }
        return true;
    }

    /**
     * @param String $word
     * @return Boolean
     */
    function firstUpper(string $word): bool{
        if (ucfirst(strtolower($word)) === $word) {
            return false;
        }
        return true;
    }
}