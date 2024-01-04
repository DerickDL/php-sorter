<?php

    require_once '../model/BubbleSort.php';

    function bubbleSortTest() {
        $sTestString = 'bsaertmu';
        $sExpectedOutput = 'abemrstu';

        $oBubbleSort = new BubbleSort;
        $sSortedString = $oBubbleSort->sortString($sTestString);

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

    bubbleSortTest();

