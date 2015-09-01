<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $dir="./Public/emoji/emoji64/emotion";
$file=scandir($dir);
$count=count($file);
$emotion=[];
for($i=0,$j=0,$k=0;$i<$count;$i++){
if($file[$i]=='.'||$file[$i]=='..'||$file[$i]=='.DS_Store'){
unset($file[$i]);
}
else{
$emotion[$j][$k]=$file[$i];
$k+=1;
if($k%21==0){
$k=0;
$j+=1;
}

}
}
$this->assign("emotion",$emotion);
$this->assign("emotioncount",count($emotion));

$dir="./Public/emoji/emoji64/animal";
$file=scandir($dir);
$count=count($file);
$emotion=[];
for($i=0,$j=0,$k=0;$i<$count;$i++){
if($file[$i]=='.'||$file[$i]=='..'||$file[$i]=='.DS_Store'){
unset($file[$i]);
}
else{
$emotion[$j][$k]=$file[$i];
$k+=1;
if($k%21==0){
$k=0;
$j+=1;
}

}
}
$this->assign("animal",$emotion);
$this->assign("animalcount",count($emotion));

$dir="./Public/emoji/emoji64/human";
$file=scandir($dir);
$count=count($file);
$emotion=[];
for($i=0,$j=0,$k=0;$i<$count;$i++){
if($file[$i]=='.'||$file[$i]=='..'||$file[$i]=='.DS_Store'){
unset($file[$i]);
}
else{
$emotion[$j][$k]=$file[$i];
$k+=1;
if($k%21==0){
$k=0;
$j+=1;
}

}
}
$this->assign("human",$emotion);
$this->assign("humancount",count($emotion));

$dir="./Public/emoji/emoji64/food";
$file=scandir($dir);
$count=count($file);
$emotion=[];
for($i=0,$j=0,$k=0;$i<$count;$i++){
if($file[$i]=='.'||$file[$i]=='..'||$file[$i]=='.DS_Store'){
unset($file[$i]);
}
else{
$emotion[$j][$k]=$file[$i];
$k+=1;
if($k%21==0){
$k=0;
$j+=1;
}

}
}
$this->assign("food",$emotion);
$this->assign("foodcount",count($emotion));


$dir="./Public/emoji/emoji64/garment";
$file=scandir($dir);
$count=count($file);
$emotion=[];
for($i=0,$j=0,$k=0;$i<$count;$i++){
if($file[$i]=='.'||$file[$i]=='..'||$file[$i]=='.DS_Store'){
unset($file[$i]);
}
else{
$emotion[$j][$k]=$file[$i];
$k+=1;
if($k%21==0){
$k=0;
$j+=1;
}

}
}
$this->assign("garment",$emotion);
$this->assign("garmentcount",count($emotion));
        
        $dir="./Public/emoji/emoji64/other";
$file=scandir($dir);
$count=count($file);
$emotion=[];
for($i=0,$j=0,$k=0;$i<$count;$i++){
if($file[$i]=='.'||$file[$i]=='..'||$file[$i]=='.DS_Store'){
unset($file[$i]);
}
else{
$emotion[$j][$k]=$file[$i];
$k+=1;
if($k%21==0){
$k=0;
$j+=1;
}

}
}
$this->assign("other",$emotion);
$this->assign("othercount",count($emotion));
        
      $this->display();
      }
      
    public function addimg(){
        $imgdata=I('post.img');
        $filename=$this->upload($imgdata);
        
        $img=M('img');
        $adddata['filename']=$filename;
        $id=$img->add($adddata);
        echo $id;
    }
    
    public function getimg($id=1){
        $img=M('img');
        $where['img']=$id;
        $filename=$img->where($where)->getField('filename');
        $this->assign('name',$filename);
        $this->display();
    }
    private function upload($image){
        $tmpfilename=time().rand(0,10000).'.png';
        $image=str_replace(' ','+',$image);
        $fp = fopen('./Public/'.$tmpfilename, "w");//文件被清空后再写入 
        if($fp) 
        {
            fwrite($fp,$image);
        }
        return $tmpfilename;
    }
}