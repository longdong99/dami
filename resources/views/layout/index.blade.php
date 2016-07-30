<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <meta name="description" content="小米商城-直营小米公司旗下所有产品，囊括小米手机、红米手机、小米电视、智能硬件、配件及小米生活周边，同时提供小米客户服务及售后支持。" />
    <meta name="keywords" content="小米,小米官网,小米手机,小米官网首页,小米商城" />
    <meta name="viewport" content="width=1226" />
    @section('css')
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/homes/common/css/base.min.css" />
    @show
    @section('myCss')
    @show
</head>
<body>
@section('header')
    <div class="site-topbar">
        <div class="container">
            <div class="topbar-nav">
                <a rel="nofollow" href="//www.mi.com/index.html" >小米商城</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="http://www.miui.com/" target="_blank">MIUI</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="http://www.miliao.com/" target="_blank">米聊</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="http://game.xiaomi.com/" target="_blank">游戏</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="http://www.duokan.com/" target="_blank">多看阅读</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="https://i.mi.com/" target="_blank">云服务</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="//www.mi.com/c/appdownload/" target="_blank">小米网移动版</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="//static.mi.com/feedback/" target="_blank">问题反馈</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
            </div>
            <div class="topbar-cart" id="J_miniCartTrigger">
                <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="//static.mi.com/cart/"> <i class="iconfont">&#xe60c;</i>
                    购物车
                    <span class="cart-mini-num J_cartNum"></span>
                </a>
                <div class="cart-menu" id="J_miniCartMenu">
                    <div class="loading">
                        <div class="loader"></div>
                    </div>
                </div>
            </div>
            <div class="topbar-info" id="J_userInfo">
                <a  rel="nofollow" class="link" href="//order.mi.com/site/login" data-needlogin="true">登录</a>
                <span class="sep">|</span>
                <a  rel="nofollow" class="link" href="https://account.xiaomi.com/pass/register" >注册</a>
            </div>
        </div>
    </div>
    <div class="site-header">
        <div class="container">
            <div class="header-logo">
                <a class="logo ir" href="//www.mi.com/index.html" title="小米官网">小米官网</a>
            </div>
            <div class="header-nav">
                <ul class="nav-list J_navMainList clearfix">
                    <li id="J_navCategory" class="nav-category">
                        <a class="link-category" href="//list.mi.com">
                            <span class="text">全部商品分类</span>
                        </a>
                        <!-- 分类导航 start -->
                    </li>

                </ul>
            </div>
            <div class="header-search">
                <form id="J_searchForm" class="search-form clearfix" action="/list_search" method="get">
                    <label for="search" class="hide">站内搜索</label>
                    <input class="search-text" type="search" id="search" name="kWord" autocomplete="off" />
                    <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                    <div class="search-hot-words">
                        <a href="/list_search?kWord=小米手机5">小米手机5</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="J_navMenu" class="header-nav-menu" style="display: none;"><div class="container"></div></div>
    </div>
@show
@section('content')

@show
    <div class="site-footer">
        <div class="container">
            <div class="footer-service">
                <ul class="list-service clearfix">
                    <li>
                        <a rel="nofollow" href="//www.mi.com/service/exchange#repaire" target="_blank">
                            <i class="iconfont">&#xe634;</i>
                            1小时快修服务
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="//www.mi.com/service/exchange#back" target="_blank">
                            <i class="iconfont">&#xe635;</i>
                            7天无理由退货
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="//www.mi.com/service/exchange#free" target="_blank">
                            <i class="iconfont">&#xe636;</i>
                            15天免费换货
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="//www.mi.com/service/exchange#mail" target="_blank">
                            <i class="iconfont">&#xe638;</i>
                            满150元包邮
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="//www.mi.com/static/maintainlocation/" target="_blank">
                            <i class="iconfont">&#xe637;</i>
                            520余家售后网点
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-links clearfix">
                <?php
                    $help = \App\Http\Controllers\Home\HelpController::getHelp();
                ?>
                @foreach($help as $key=>$val)
                <dl class="col-links col-links-first">
                    <dt>{{$val->name}}</dt>
                    @foreach($val->helpArticle as $k=>$v)
                    @if($k<4)
                    <dd>
                        <a rel="nofollow" href="/help/article?id={{$v->id}}"   target="_blank">{{$v->title}}</a>
                    </dd>
                    @endif
                    @endforeach
                    
                </dl>
                @endforeach
 

                <div class="col-contact">
                    <p class="phone">400-100-5678</p>
                    <p>
                        <span class="J_serviceTime-normal">周一至周日 8:00-18:00</span>
                        <span class="J_serviceTime-holiday" style="display:none;">2月7日至13日服务时间 9:00-18:00</span>
                        <br>（仅收市话费）</p>
                    <a rel="nofollow" class="btn btn-line-primary btn-small" href="//www.mi.com/service/contact" target="_blank">
                        <i class="iconfont">&#xe600;</i>
                        24小时在线客服
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-info">
        <div class="container">
            <div class="logo ir">小米官网</div>
            <div class="info-text">
                <p class="sites">
                    <a rel="nofollow" href="//www.mi.com/index.html"   target="_blank">小米网</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://www.miui.com/"   target="_blank">MIUI</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://www.miliao.com/"   target="_blank">米聊</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://www.duokan.com/"   target="_blank">多看书城</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://www.miwifi.com/"   target="_blank">小米路由器</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://call.mi.com/"   target="_blank">视频电话</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://blog.xiaomi.com/"   target="_blank">小米后院</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://xiaomi.tmall.com/"   target="_blank">小米天猫店</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://shop115048570.taobao.com"   target="_blank">小米淘宝直营店</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="http://union.mi.com/"   target="_blank">小米网盟</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="//static.mi.com/feedback/"   target="_blank">问题反馈</a>
                    <span class="sep">|</span>
                    <a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal" >Select Region</a>
                </p>
                <p>
                    &copy;
                    <a href="//www.mi.com/" target="_blank" title="mi.com">mi.com</a>
                    京ICP证110507号 京ICP备10046444号
                    <a rel="nofollow"  href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备11010802020134号</a>
                    <a rel="nofollow"  href="//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" rel="nofollow">京网文[2014]0059-0009号</a>

                    <br>违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
            </div>
            <div class="info-links">
                <a  rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn" target="_blank">
                    <img  rel="nofollow" src="//privacy-policy.truste.com/privacy-seal/seal?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8" alt="TRUSTe Privacy Certification" />
                </a>
                <a  rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank">
                    <img  rel="nofollow" src="//s01.mifile.cn/i/v-logo-2.png" alt="诚信网站" />
                </a>
                <a  rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082" target="_blank">
                    <img  rel="nofollow" src="//s01.mifile.cn/i/v-logo-1.png" alt="可信网站" />
                </a>
                <a  rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank">
                    <img  rel="nofollow" src="//s01.mifile.cn/i/v-logo-3.png" alt="网上交易保障中心" />
                </a>
            </div>
        </div>
        <div class="slogan ir">探索黑科技，小米为发烧而生</div>
    </div>
    <div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal">
                <i class="iconfont">&#xe602;</i>
            </a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <p style="margin: 0 0 10px;">
                打开微信，点击右上角的“+”，选择“扫一扫”功能，
                <br/>
                对准下方二维码即可。
            </p>
            <img alt="" src="//c1.mifile.cn/f/i/2014/cn/qr.png" width="375" height="375" />
        </div>
    </div>
    @section('js')
    <script src="/homes/common/myjs/jquery.min.js"></script>
    <script src="/data/indexNav.js"></script>
    <script src="/data/indexData.js"></script>
    <script src="/homes/common/myjs/jquery.SuperSlide.js"></script>
    <script src="/homes/common/myjs/common.js"></script>
    <script src="/homes/common/myjs/index.js"></script>
    @show
    @section('LDjs')
    @show
</body>
</html>
   