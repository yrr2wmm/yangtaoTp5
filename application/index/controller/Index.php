<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\MdMember;
use think\facade\Hook;

class Index
{
    private $member;

    public function __construct(MdMember $member)
    {
        echo 1;die;
        $res = Hook::listen('app_init', [1, 2, 3]);
        dump($res);
        $this -> member = $member;
    }

    public function index()
    {
        $memInfo = $this -> member -> get(1);
        dump($memInfo);
    }
}
