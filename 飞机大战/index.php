<?php
    //建立游戏服务器
    $ws = new swoole_websocket_server('0.0.0.0',9527);
    $ws->on('open',function($ws,$client){
        echo "开始游戏\n";
    });
    $ws->on('message',function($ws,$client){
        echo $client->data."\n";
    });
    $ws->on('close',function(){
        echo "游戏结束\n";
    });
    $ws->start();


?>