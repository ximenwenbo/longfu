<?php
namespace app\home\controller;


use think\Controller;
use app\home\model\Profiles;

class AboutController extends Controller
{
    public function index()
    {

        //获取联系方式
        $info = get_tel();

        $this->assign('info',$info);

        $p = new Profiles();

        $infos = $p->select()[0];

        $this->assign('infos',$infos);




        return $this->fetch();

    }




}


















