<?php
/**
 * Created by PhpStorm.
 * User: 57170
 * Date: 2018/1/2
 * Time: 10:00
 */

class code
{
    private $width='120';   /*图片宽*/
    private $height='40';   /*高*/
    private $count='20';    /*圆点数量*/
    private $line='5';      /*线*/
    private $color='';      /*颜色*/
    private $letter='234567890qwertyupasdfghjkzxcvbnm';   /*字体库*/
    private $filepath='src/iconfont/BELLB.TTF';   /*引入的文本类型*/
    private $img='';        /*图片*/
    function __construct()
    {
        $this->img=imagecreate($this->width,$this->height);     /*创建图片*/
    }
    //  取随机背景
    private function bg(){
        imagefill($this->img,0,0,$this->getcolor());
    }
    //    b 暗色0-120    l 亮色120-240    封装随机色
    private function getcolor($type='b'){
        if($type==='b'){
            $r=mt_rand(0,120);
            $g=mt_rand(0,120);
            $b=mt_rand(0,120);
        }else if($type==='l'){
            $r=mt_rand(120,240);
            $g=mt_rand(120,240);
            $b=mt_rand(120,240);
        }
        $this->color=imagecolorallocate($this->img,$r,$g,$b);     /*imagecolorallocate函数用来生成颜色*/
        return $this->color;    /*既然封装了，就的有返回值*/
    }
    //    取随机点
    private function paintdian(){
        for($i=0;$i<$this->count;$i++){
            $x=mt_rand(0,$this->width);
            $y=mt_rand(0,$this->height);
            imagesetpixel($this->img,$x,$y,$this->getcolor());      /*imagesetpixel函数用于生成点*/
        }
    }
    //    取随机线
    private function paintline(){
        for($i=0;$i<$this->line;$i++){
            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),
                mt_rand(0,$this->height),$this->getcolor());
        }
        //  雪花
        for ($i=0;$i<8;$i++) {
            $color = imagecolorallocate($this->img,mt_rand(100,255),mt_rand(100,255),mt_rand(100,255));
            imagestring($this->img,mt_rand(1,5),mt_rand(0,$this->width),mt_rand(0,$this->height),'*',$color);
        }
    }
    //    取随机字
    private function paintword(){
        $word='';
        for($i=0;$i<4;$i++){
            $index=mt_rand(0,strlen($this->letter)-1);    /*取文字下标，用来随机生成验证码*/
            $w=mb_substr($this->letter,$index,1,'utf8');    /*截取文字*/
            $w=mt_rand(0,1)?strtoupper($w):strtolower($w);  /*大小写转换，让显示的验证码出现大小写*/
            $word.=$w;   /*保存$w,便于保存，在其他页面验证*/
            imagettftext($this->img,mt_rand(18,22),mt_rand(-15,10),mt_rand($i*30,$i*30+10),mt_rand(20,35),
                $this->getcolor('l'),$this->filepath,$w);
        }
        session_start();
        $_SESSION['code']=$word;
    }
    public function output(){
        header('content-type:image/png');
        $this->bg();
        $this->paintdian();
        $this->paintline();
        $this->paintword();
        imagepng($this->img);
    }
}
//$c=new code('BELLB.TTF');
//$c->output();