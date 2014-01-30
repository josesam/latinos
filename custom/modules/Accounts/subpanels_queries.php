<?php

function getHistorico($params) {
    $args = func_get_args();
    $accountId = $args[0]['account_id'];
    $return_array['select'] = " SELECT historico.* ";
    $return_array['from'] = " FROM historico  ";
    $return_array['where'] = " WHERE historico.parent_id='" . $accountId . "'";
//    $return_array['join'] = " INNER JOIN accounts_opportunities ON accounts_opportunities.opportunity_id = 
//                             opportunities.id AND accounts_opportunities.deleted ='0' 
//                             INNER JOIN accounts ON accounts.id = accounts_opportunities.account_id 
//                             AND accounts.deleted = '0' AND accounts.id = '" . $accountId . "'";
    $return_array['join_tables'] = "";
    return $return_array;
} 
?>
