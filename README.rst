asbamboo/openpay-example
===============================

#. 简介_

#. linux下运行项目示例_

简介
------------------------------------

openpay-example 是 `asbamboo/openpay`_ 项目的具体实现，是支付宝支付、微信支付等第三方支付聚合api接口的服务端代码。

演示地址：http://demo.asbamboo.com/openpay-example/public/

linux下运行项目示例
------------------------------

*必要条件: 需要安装* `composer`_ *, php7.2以上版本*

::

    licy@licy-N501JW:/www$ composer create-project asbamboo/openpay-example -s dev

    Installing asbamboo/openpay-example (dev-master e825d9f5f81cf69ed21d0dedfb39afd6391e1859)
      - Installing asbamboo/openpay-example (dev-master master): Cloning master from cache
    Created project in /www/openpay-example
    Loading composer repositories with package information
    Installing dependencies (including require-dev) from lock file
    Package operations: 58 installs, 0 updates, 0 removals
      - Installing psr/container (dev-master 014d250): Cloning 014d250dae from cache
      - Installing psr/http-message (dev-master f6561bf): Cloning f6561bf28d from cache
      - Installing asbamboo/autoload (1.0.1.x-dev 5552e41): Cloning 5552e4195e from cache

    ...

    licy@licy-N501JW:/www$ cd openpay-example/

    licy@licy-N501JW:/www/openpay-example$ ./vendor/bin/doctrine orm:schema-tool:create

     !                                                                                                                      
     ! [CAUTION] This operation should not be executed in a production environment!                                         
     !                                                                                                                      
    
     Creating database schema...
    
                                                                                                                            
     [OK] Database schema created successfully!                                                                             


    licy@licy-N501JW:/www/openpay-example$ cd public
    
    licy@licy-N501JW:/www/openpay-example/public$  php -S 127.0.0.1:8000
    
    PHP 7.2.6 Development Server started at Sun Mar  3 15:23:03 2019
    Listening on http://127.0.0.1:8000
    Document root is /www/openpay-example/public
    Press Ctrl-C to quit.
    

在浏览器访问 http://127.0.0.1:8000

.. _asbamboo/openpay: https://github.com/asbamboo/openpay
.. _composer: https://getcomposer.org/
