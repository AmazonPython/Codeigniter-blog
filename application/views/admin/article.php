<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's Blog - 某普通上班族的博客</title>
    <meta name="baidu-site-verification" content="Een7k8JYLQ" />
    <meta name="keywords" content="Luna Nova's Blog"/>
    <meta name="description" content="Luna Nova - 想养一只普通猫咪的普通上班族(=ↀωↀ=)"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="home">
<!--header start-->
<div id="header">
    <h1><font style="vertical-align: inherit;">Hi, Nova 👋</font></h1>
    <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>
</div>
<!--header end-->
<!--nav-->
<div id="nav">
    <ul>
        <li><a href="<?php echo base_url('admin/admin/article');?>">文章</a></li>
        <li><a href="<?php echo base_url('admin/admin/tweets');?>">碎言碎语</a></li>
        <li><a href="<?php echo base_url('admin/admin/diaries');?>">个人日记</a></li>
        <li><a href="<?php echo base_url('admin/admin/photos');?>">相册展示</a></li>
        <li><a href="<?php echo base_url('admin/admin/guestbook');?>">留言板</a></li>
        <div class="clear"></div>
    </ul>
</div>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="c_left">
        <div class="s_tuijian">
            <h2>文章<span>推荐</span></h2>
        </div>
        <div class="content_text">
            <!--wz--><?php if (isset($rows)) { foreach ($rows as $row):?>
                <div class="wz">
                    <h3><?php echo $row->id.' '.$row->title;?></h3>
                    <dl>
                        <dt><img src="<?php echo base_url();?>static/images/s2.jpg" width="200" height="123" alt=""></dt>
                        <dd>
                            <p class="dd_text_1"><?php echo $row->content;?></p>
                            <p class="dd_text_2">
                                <span class="left author">Nova</span>
                                <span class="left sj">时间：<?php echo $row->date;?></span>
                                <span class="left fl">分类：<?php echo $row->type;?></span>
                                <a><?php echo anchor('admin/admin/edit_article/'.$row->id,'更新文章')?></a>
                                <a><?php echo anchor('admin/admin/delete_article/'.$row->id,'删除文章')?></a>
                            <div class="clear"></div>
                            </p>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </div>
                <!--wz end--><?php endforeach;}?>
        </div>
    </div>
    <!--left end-->
    <!--right-->
    <div class="right" id="c_right">
        <div class="s_about">
            <h2>关于博主</h2>
            <img src="<?php echo base_url();?>static/images/kfc.jpg" width="230" height="230" alt="博主"/>
            <p>博主：Nova</p>
            <p>职业：PHP开发工程师</p>
            <p>简介：响珰珰一粒铜豌豆</p>
            <p><br /><div class="clear"></div></p>
        </div>
        <!--栏目分类-->
        <div class="lanmubox">
            <div class="hd">
                <ul><li>友情链接</li><li>友情链接</li><li class="hd_3">友情链接</li></ul>
            </div>
            <div class="bd">
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
            </div>
        </div>
        <!--end-->
        <div class="link">
            <h2>联系博主</h2>
            <p><a href="https://github.com/AmazonPython" title="https://github.com/AmazonPython">
                    <font color="red">github地址</font></a>
            </p>
            <p>邮箱：amazon3@foxmail.com</p>
        </div>
    </div>
    <!--right end-->
    <div class="clear"></div>
</div>
<!--content end-->
<!--footer start-->
<div id="footer">
    <p>Design by：Nova <?php echo date('Y-m-d');?></p>
</div>
<script type="text/javascript" src="<?php echo base_url();?>static/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>static/js/html5.js"></script>
<![endif]-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/nav.js"></script>
</body>
</html>