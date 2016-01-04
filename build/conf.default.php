<?php

/**
 * Default configuration for Xhgui
 */
return array(
    'debug' => false,
    'mode' => 'development',
    'save.handler' => 'mongodb',
    'db.host' => 'mongo',
    'db.db' => 'xhprof',

    // Allows you to pass additional options like replicaSet to MongoClient.
    // 'username', 'password' and 'db' (where the user is added)
    'db.options' => array(),
    'templates.path' => dirname(__DIR__) . '/src/templates',
    'date.format' => 'M jS H:i:s',
    'detail.count' => 6,
    'page.limit' => 25,

    // Profile 1 in 100 requests.
    // You can return true to profile every request.
    'profiler.enable' => function () {
        return true;
    },

    'profiler.simple_url' => function ($url) {
        return preg_replace('/\=\d+/', '', $url);
    }
);
