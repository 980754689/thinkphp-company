<?php
namespace Admin\Model;
use Think\Model;
class AboutModel extends Model{

    //自动验证
    protected $_validate = array(
        array('address','require','地址不能为空',0,'regex',1),

        array('qq','require','QQ不能为空',0,'regex',1),

        array('phone','require','手机不能为空',0,'regex',1),
        array('phone', '/^1[3578]\d{9}$/', '手机格式不正确', 0, 'regex', 1),

        array('email','require','邮箱不能为空',0,'regex',1),
    );
}