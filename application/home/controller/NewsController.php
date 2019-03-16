<?php
namespace app\home\controller;



use app\admin\model\NewsCategory;
use think\Controller;
use app\home\model\News;
use think\Request;
use think\Db;
use think\Route;


class NewsController extends Controller
{

     public function jump($url,$info=null,$sec=3)
    {
        if(is_null($info)){
            header("Location:$url");
        }else{
            // header("Refersh:$sec;URL=$url");
            echo"<meta http-equiv=\"refresh\" content=".$sec.";URL=".$url.">";
            echo $info;
        }
        die;
    }

    public function next($id,$cat_id){
     $infos  = Db::name('news')
         ->where('id','<',$id)
         ->where('category_id','=',$cat_id)
         ->order('id desc')
         ->limit(1)
         ->find();

     if ($infos !== null){

         $this->assign('info',$infos);
         return $this->fetch('detail');
     }else{
         echo"<script>alert('已经是最后一页');history.go(-1);</script>";
         //$this->jump("home/news/detail/?id=$id",'已经是最后一条',1);

     }


    }
    public function last($id,$cat_id){







         $news = new News();
        $infos  = $news->where('id','>',$id)
            ->where('category_id','=',$cat_id)
            ->order('id')
            ->limit(1)
            ->find();



        if ($infos !== null){

            $this->assign('info',$infos);
            return $this->fetch('detail');
        }else{
            echo"<script>alert('已经是第一页');history.go(-1);</script>";
            //$this->jump("home/news/detail/?id=$id",'已经是第一条',1);

        }


    }

public function index(){


    //展示模板
    return $this->fetch();


}

public function detail(News $news){


  //获取新闻信息
    $new = new News();
    //获取seo搜索
    $da= get_seo();

    $this->assign('da',$da);

    $this->assign('info',$news);
    //展示到详情页
    return $this->fetch();

}





}


















