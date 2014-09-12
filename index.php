<?php
$query = $GET['query'];

// 預設以斜線為分隔

$method = explode('/', $query)[0];
switch ($method) {
    case 'getInfo':
        echo json_encode($info);
        break;
    default:
        echo json_encode(['error' => true, 'message' => 'No such method like' . $method]);
        break;
}
