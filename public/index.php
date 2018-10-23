<?php
use asbamboo\helper\env\Env AS EnvHelper;
use asbamboo\openpayAlipay\Env AS AlipayEnv;
use asbamboo\openpayWxpay\Env as WxpayEnv;

/***************************************************************************************************
 * 系统文件加载
 ***************************************************************************************************/
$autoload   = require_once dirname(__DIR__) . '/vendor/asbamboo/autoload/bootstrap.php';
$autoload->addMappingDir('asbamboo\\openpayExample\\', dirname(__DIR__));
/***************************************************************************************************/

/***************************************************************************************************
 * 参数配置
***************************************************************************************************/
// 支付宝网关
EnvHelper::set(AlipayEnv::ALIPAY_GATEWAY_URI, 'https://openapi.alipaydev.com/gateway.do');
// 自己生成支付宝rsa私银文件
EnvHelper::set(AlipayEnv::ALIPAY_RSA_PRIVATE_KEY, dirname(__DIR__) . '/alipay-rsa/app_private_key.pem');
// 支付宝生成支付宝rsa公银文件
EnvHelper::set(AlipayEnv::ALIPAY_RSA_ALIPAY_KEY, dirname(__DIR__) . '/alipay-rsa/app_alipay_key.pem');
// 支付宝app id
EnvHelper::set(AlipayEnv::ALIPAY_APP_ID, '2016090900468991');
// 支付宝扫码支付的notify url
EnvHelper::set(AlipayEnv::ALIPAY_QRCD_NOTIFY_URL, 'http://example.org');

// 微信网关
EnvHelper::set(WxpayEnv::WXPAY_GATEWAY_URI, 'https://api.mch.weixin.qq.com/');
// 微信加密使用的key值
EnvHelper::set(WxpayEnv::WXPAY_SIGN_KEY, '8934e7d15453e97507ef794cf7b0519d');
// 微信 appid
EnvHelper::set(WxpayEnv::WXPAY_APP_ID, 'wx426b3015555a46be');
// 微信商户号
EnvHelper::set(WxpayEnv::WXPAY_MCH_ID, '1900009851');
// 微信扫码支付的notify url
EnvHelper::set(WxpayEnv::WXPAY_QRCD_NOTIFY_URL, 'http://example.org');
/***************************************************************************************************/

require dirname(__DIR__) . '/vendor/asbamboo/openpay/public/index.php';