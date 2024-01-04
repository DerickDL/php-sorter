<?php

require_once('SortInterface.php');

class MergeSort implements SortInterface 
{
    public function sortString(string $inputString): string 
    {
        if (strlen($inputString) <= 1) {
            return $inputString;
        }
        
        $aCharacters = str_split($inputString);
        $aCharactersSorted = $this->mergeSort($aCharacters);
        return implode('', $aCharactersSorted);
    }

    private function mergeSort(array $aCharacters): array
    {
        $iLength = count($aCharacters);

        if ($iLength <= 1) {
            return $aCharacters;
        
        }
        $iMiddleCount = (int) $iLength / 2;
       
        $aLeft = array_slice($aCharacters, 0, $iMiddleCount);
        $aRight = array_slice($aCharacters, $iMiddleCount);

        $aCharacters = $this->merge($aCharacters, $this->mergeSort($aLeft), $this->mergeSort($aRight));
        return $aCharacters;
    }

    private function merge(array $aCharacters, array $aLeft, array $aRight): array
    {
        $iLeftCtr = 0;
        $iRightCtr = 0;
        $iMainCtr = 0;

        while ($iLeftCtr < count($aLeft) && $iRightCtr < count($aRight)) {
            if ($aLeft[$iLeftCtr] < $aRight[$iRightCtr]) {
                $aCharacters[$iMainCtr] = $aLeft[$iLeftCtr];
                $iLeftCtr++;
            } else {
                $aCharacters[$iMainCtr] = $aRight[$iRightCtr];
                $iRightCtr++;
            }
            $iMainCtr++;
        }

        while ($iLeftCtr < count($aLeft)) {
            $aCharacters[$iMainCtr] = $aLeft[$iLeftCtr];
            $iLeftCtr++;
            $iMainCtr++;
        }

        while ($iRightCtr < count($aRight)) {
            $aCharacters[$iMainCtr] = $aRight[$iRightCtr];
            $iRightCtr++;
            $iMainCtr++;
        }

        return $aCharacters;
    }
}
