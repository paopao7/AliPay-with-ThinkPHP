<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>支付宝支付方式列表</title>
    <meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1; user-scalable=no;">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/AliPay/Public/css/common.css" />
    <script src="http://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
    <script type="text/javascript" src="/AliPay/Public/js/layer/layer.js"></script>
</head>
<body>
    <div class="header_box">
        支付宝支付方式列表
    </div>
    <div class="list_box">
        <a href="<?php echo ('Home/WapPay/index');?>">
            <div class="list_item">
                手机网站支付（新版）
                <img class="list_item_img" src="./Public/image/right.png" width="20px" />
            </div>
        </a>
        <a href="<?php echo ('Home/WapPayOld/index');?>">
            <div class="list_item">
                手机网站支付（旧版）
                <img class="list_item_img" src="./Public/image/right.png" width="20px" />
            </div>
        </a>
        <a href="javascript:void" id="scan_pay" onclick="on_building()">
            <div class="list_item">
                扫码支付
                <img class="list_item_img" src="./Public/image/right.png" width="20px" />
            </div>
        </a>
<!--         <a href="">
            <div class="list_item">
                及时到账
                <img class="list_item_img" src="./Public/image/right.png" width="20px" />
            </div>
        </a> -->
    </div>
    <div class="list_box">
        <a href="http://www.itinfor.cn/?p=1032&preview=true">
            <div class="list_item">
                更多帮助
                <img class="list_item_img" src="./Public/image/right.png" width="20px" />
            </div>
        </a>
        <a href="<?php echo U('Home/Index/about');?>">
            <div class="list_item">
                关于
                <img class="list_item_img" src="./Public/image/right.png" width="20px" />
            </div>
        </a>
    </div>
    <div class="copyright_box">
        ©版权归本人所有，联系QQ：980569038
    </div>
</body>
<script type="text/javascript">
    function on_building () {
        layer.msg('该功能开发中...');
    }
</script>
</html>