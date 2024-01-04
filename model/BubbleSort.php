<?php

require_once('SortInterface.php');

class BubbleSort implements SortInterface 
{
    public function sortString(string $inputString): string 
    {
        if (strlen($inputString) <= 1) {
            return $inputString;
        }
        
        $aCharacters = str_split($inputString);
        $aCharactersSorted = $this->bubbleSort($aCharacters);
        return implode('', $aCharactersSorted);
    }

    private function bubbleSort(array $aCharacters): array
    {
        $count = count($aCharacters);

        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = 0; $j < $count - $i - 1; $j++) {
                if ($aCharacters[$j] > $aCharacters[$j + 1]) {
                    $temp = $aCharacters[$j];
                    $aCharacters[$j] = $aCharacters[$j + 1];
                    $aCharacters[$j + 1] = $temp;
                }
            }
        }   
            return $aCharacters;
    }
}
