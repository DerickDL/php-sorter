<?php

require_once('SortInterface.php');

class QuickSort implements SortInterface 
{
    public function sortString(string $inputString): string 
    {
        if (strlen($inputString) <= 1) {
            return $inputString;
        }
        
        $aCharacters = str_split($inputString);
        $aCharactersSorted = $this->quickSort($aCharacters);
        return implode('', $aCharactersSorted);
    }

    private function quickSort(array $aCharacters): array
    {
        if (count($aCharacters) == 0) {
            return $aCharacters;
        }

        $sPivot = $aCharacters[0];
        $aLeft = [];
        $aRight = [];

        for ($i = 1; $i < count($aCharacters); $i++) {
            if ($aCharacters[$i] < $sPivot) {
                $aLeft[] = $aCharacters[$i];
            } else {
                $aRight[] = $aCharacters[$i];
            }
        }

        return array_merge($this->quickSort($aLeft), [$sPivot], $this->quickSort($aRight));
    }
}

