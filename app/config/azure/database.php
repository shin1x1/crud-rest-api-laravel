<?php

return [
     'default' => 'mysql',
     'connections' => [
          'mysql' => [
               'driver'    => 'mysql',
               'host'      => 'Hostname', // ClearDB管理画面からコピー
               'database'  => 'database name', // ClearDB管理画面からコピー
               'username'  => 'Username', // ClearDB管理画面からコピー
               'password'  => 'Password', // ClearDB管理画面からコピー
               'charset'   => 'utf8',
               'collation' => 'utf8_unicode_ci',
               'prefix'    => '',
          ],
     ],
];

