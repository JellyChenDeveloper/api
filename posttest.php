<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 17:58
 */
$result = array();
if(!empty($_POST)){
    $result['postparam'] = $_POST;
}else{
    $result['postdesc'] ="未接收到POST参数";
}
if(!empty($_GET)){
    $result['getparam'] = $_GET;
}else{
    $result['getdesc'] ="未接收到GET参数";
}
echo json_encode($result);
exit;