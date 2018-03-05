<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
    //自动完成
    protected $_auto = array (
        array('password_hash','md5',3,'function'),
    );

    //自动验证
    protected $_validate = array(
        array('username','require','用户名不能为空',0,'regex',1),
        array('username','','帐号名称已经存在！',0,'unique',1),

        array('password_hash','require','密码不能为空',0,'regex',1),
        array('password_hash','/^\w{6,12}$/','密码必须是6-12位的shuzi、字母、下划线',0,'regex',1),
        array('reuserpass','password_hash','确认密码不正确',0,'confirm',1), // 验证确认密码是否和密码一致
        array('email','require','邮箱不能为空',0,'regex',1),
    );
}