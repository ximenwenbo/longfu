<?php
namespace app\home\controller;



use think\Controller;
use app\home\model\News;
use think\Request;
use think\Db;


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

    public function next($id){
     $infos  = Db::name('news')
         ->where('id','<',$id)
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
    public function last($id){
        $infos  = Db::name('news')
            ->where('id','>',$id)
            ->order('id desc')
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

    //获取联系方式
    $info = get_tel();

    $this->assign('info',$info);
    //获取新闻信息
    $news = new News();
    $infos = News::select();
   // $infos = DB::name('news')->order('id desc');
  //  $infos = DB::name('news') ->order('id desc')->paginate(4);
    //$pagelist = $infos->render();
   // $this->assign('pagelist',$pagelist);



    //分配到模板
    $this->assign('infos',$infos);
    //展示模板
    return $this->fetch();


}

public function detail(News $news){

    $this->assign('info',$news);
    //展示到详情页
    return $this->fetch();

}




}

















