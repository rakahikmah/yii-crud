<?php

/*
 * @Created on Sat Mar 15 2025
 * @Author : Raka Hikmah Ramadhan
 * @Email : rakahikmah46@gmail.com
 */


return [
    // site controller
    'site'                              => 'site/index',
    'site/about'                        => 'site/about',
    'site/contact'                      => 'site/contact',
    'site/say'                          => 'site/say',
    'site/login'                        => 'site/login',

    // learn controller
    'learn'                             => 'learn/index',

    // test controller
    'test'                              => 'test/index',
    'test/testing/<id:\d+>/<name:\w+>'  => 'test/testing',

    // product controller
    'product'                           => 'product/index',
    'product/detail'                    => 'product/detail',
];

?>