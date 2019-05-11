<?php     
                                     //-->>index模块
   namespace app\index\controller;  //命名空间

   use app\common\controller\Index as commonIndex;

   class Index  //类名与文件名相同，文件名要首字母大写-->>控制器
   {
   	  public function index()  //index方法-->>方法
   	  {
   	  	return "this is index Index index";
   	  }

   	  public function common()
   	  {
   	  	$common=new commonIndex();

   	  	return $common->index();
   	  }
   }