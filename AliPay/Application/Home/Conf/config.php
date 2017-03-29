<?php
return array(
	//'配置项'=>'配置值'
    //应用ID,您的APPID。
    'app_id' => "2016042901349061",

    //商户私钥，您的原始格式RSA私钥
    'merchant_private_key' => "MIICXgIBAAKBgQDD5yeySHTOUUJO9dVA6VWe3SRMjgtIXrc42h5+Pi97H7leV+vnYb2h37gsrL6gxJRAYJOCJQn8Pn9bbduAOjiMaUd71JJOSEA8mby8q7dDqRQatdm/akJ8fDBPbTDszKKwS7oCTy95B8tg6DYrozSuBFDbIzGgnTG6RYJYNxXj6wIDAQABAoGBAIyssAfJGf+RwHDc/R7Yr4AdwtQqaBW21hFAKAd1djkO5djGgAMuX7Me6K1D+ruNjfvQnfwlxs7YvjGUaLvikvmV1zkIVOGTLNMloCaZ0X1KXAY1lGlQ5x6Azy3W4vnKBcMS6WcLmR9lc1I8hguFGaupI6GObq8AqPeS4e5DNm+JAkEA98BDGVrnkSA/9KzeV1UBdatfv4vY8hzYSVNxbqPZVhYIEt0jWCx6BcOnxHrmmEm4hLDrHgjqq+QLsWrEkCTlxwJBAMps9Y2HR2zzqX2GNuOOuPZUdAp0h0s09+lO5wu0lMxt34CrmRMzFsbJk2ZCE8pWCUoUaOFQsij8IMJ2lMhlwL0CQQCt3Vc5a/omdqNragV+9EDZ+zJukg3lmyiODOkF5CaZq0xvMJGlR1E6ylvqHvXE2beMJzxZD5jgmGE8WNko7zvxAkAM3uayDALvm4KQV6NPzrhV+UKzk3syvfhxXjH0nZPEd8v5O2/tN5dgJlr36oWlnNjUW/3bLa1WS8mtc6q8HzQlAkEAxyRNKG9nWwmDDQOo25QjtXSEMsJTH6uwrFpidvtMzFwbycSDBCswYrgQo1d4gBuOE1QcKnPKc7x/ogQGy2FeZg==",

    //异步通知地址
    'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",

    //同步跳转
    'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDD5yeySHTOUUJO9dVA6VWe3SRMjgtIXrc42h5+Pi97H7leV+vnYb2h37gsrL6gxJRAYJOCJQn8Pn9bbduAOjiMaUd71JJOSEA8mby8q7dDqRQatdm/akJ8fDBPbTDszKKwS7oCTy95B8tg6DYrozSuBFDbIzGgnTG6RYJYNxXj6wIDAQAB",

);