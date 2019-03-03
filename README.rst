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

    cd openpay-example

    cd openpay-example/public

    cd php -S 127.0.0.1:8000

在浏览器访问 http://127.0.0.1:8000

.. _asbamboo/openpay: https://github.com/asbamboo/openpay