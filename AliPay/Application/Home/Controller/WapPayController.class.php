<?php
namespace Home\Controller;
use Think\Controller;
class WapPayController extends Controller {
    public function index(){
        $this->display();
    }

    //获取前端页面提交的数据
    public function get_data(){
        $wapPay = new \Org\AliPay\wappay\wapPay();

        $out_trade_no = time();
        $subject = "商品总价值";
        $total_amount = "0.01";
        $body = "test";
        echo $wapPay->index($out_trade_no,$subject,$total_amount,$body);
    }
}