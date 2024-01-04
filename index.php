<?php

    require_once 'controller/SortController.php';

    $action = isset($_POST['action']) ? $_POST['action'] : 'default';
    switch($action) {
        default: 
            $sInputString = isset($_POST['input_string']) ? $_POST['input_string'] : '';
            $sSortStrategy = isset($_POST['sort_strategy']) ? $_POST['sort_strategy'] : 'bubble';
            $sInputString = filter_var($sInputString, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sSortStrategy = filter_var($sSortStrategy, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sSortedString = '';
            $oSortController = new SortController;
            $sSortedString = $oSortController->sortString($sInputString, $sSortStrategy);
            include 'view/SortView.php';
            break;
    }
