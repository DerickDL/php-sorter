<?php

require_once 'model/BubbleSort.php';
require_once 'model/MergeSort.php';
require_once 'model/QuickSort.php';

class SortController 
{
    public function sortString(string $sInput, string $sSortStrategy): string 
    {
        if ($sSortStrategy === 'merge') { 
            $model = new MergeSort;
        } else if ($sSortStrategy === 'quick') {
            $model = new QuickSort;
        } else {
            $model = new BubbleSort;
        }
        
        return $model->sortString($sInput);
    }
}
