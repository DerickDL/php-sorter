<?php

    require_once '../model/MergeSort.php';

    function mergeSortTest() {
        $sTestString = 'gweshjkrty';
        $sExpectedOutput = 'eghjkrstwy';

        $oMergeSort = new MergeSort;
        $sSortedString = $oMergeSort->sortString($sTestString);

        if ($sSortedString === $sExpectedOutput)
        {
            echo PHP_EOL . 'Test Passed ' . PHP_EOL;
        } else {
            echo PHP_EOL . 'Test Failed ' . PHP_EOL;
        }

        echo PHP_EOL;
        echo 'Input string: ' . $sTestString;
        echo PHP_EOL;
        echo 'Output string: ' . $sSortedString;
        echo PHP_EOL;
        echo 'Expected string: ' . $sExpectedOutput;
    }

    mergeSortTest();

