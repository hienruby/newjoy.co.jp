<?php

/* Block/menutop.twig */
class __TwigTemplate_c63a13e201a658d576ee36e17c9ba98ca90ae707d5dc6d2ca254caf1bf6a88b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
      .header{
        background: #ad8a57;
      }
      .position{
display:none;
position:fixed;
z-index:999;
width:100%;
box-shadow: 0 0 5px rgba(0,0,0,.2);
}
.top_menu ul li span {
   color:#fff;

}
.header ul{
      background: #ad8a57;
      height:50px;
      text-align: center;
      }
      .top_menu ul li{
      border-left: 1px solid #fff;
      height: 100%;
      text-align: center;
      line-height: 50px;
      }
      .top_menu ul li:hover{
      background: black;
      }
      .top_menu ul li:first-child{
         border-left: none;
      }
      .top_menu ul li a{
      display: block;
      color: #fff;
      line-height: 50px;
      }
      .inner {
      max-width: 1200px;
      }
      body {
      font-size: 14px;
      }
      
      .f-nav{
      position: fixed;
      z-index: 999;
      }
      #contents{
      padding-top: 0;
      }

 @media only screen and (max-width: 700px)
{
.top_menu1 ul li {
    border-left: 1px solid #fff;
    height: 100%;
    text-align: center;
line-height: 3;
}
.nav-container{
display:block;
}
.top_menu ul li a {
    position: relative;
   font-size: 11px;
top:7px;
}
.m {
    position: relative;
    bottom: 7px!important;
}
.top_menu1 ul li a {
    position: relative;
   font-size: 11px;
top:7px;
}

.nav-container img {
    position: relative;
    top: 6px;
    text-align: center;
    left: 41%;
    display: block;
}
}
.m{
position: relative;
    bottom: 2px;
}

</style>
<link rel=\"stylesheet\" href=\"/user_data/css/newjoy.css\">
<link rel=\"stylesheet\" href=\"/user_data/css/common1.css\">

<div class=\"sp-cat2  \">
<div class=\"top_menu header nav-container\" id=\"myHeader\">
<div class=\"container-fluid inner\">
   <ul  class=\"menu-dau\">

    <li  class=\"col-md-3 col-xs-3\">

      <a href=\"http://newjoy.co.jp/products/list?category_id=&name=\">
 <span class=\"p-scroll-nav__icon u-icon--heart\"></span><span class=\"m\">商品一覧</span></a>
    </li>
    <li  class=\"col-md-3 col-xs-3 \">

      <a href=\"http://newjoy.co.jp/user_data/ranking\"> <span class=\"p-scroll-nav__icon u-icon--crown\"></span><span class=\"m\">ランキング</span></a>
    </li>
    <li  class=\"col-md-3 col-xs-3\">

      <a href=\"/products/list?category_id=10\"><span class=\"p-scroll-nav__icon u-icon--feature\"></span><span class=\"m\">特集ページ</span></a>
    </li>
    <li  class=\"col-md-3 col-xs-3\">
      <a href=\"/user_data/all_category\"><span class=\"p-scroll-nav__icon u-icon--category\"></span><span class=\"m\">カテゴリ</span></a>
    </li>
   </ul>
</div>
</div>
</div> 

 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script>
jQuery(\"document\").ready(function(\$){

  var nav = \$('.nav-container');

  \$(window).scroll(function () {
    if (\$(this).scrollTop() > 136) {
      \$('.position').css('display','block');
    } else {
        \$('.top_menu').css('display','block');
        \$('.position').css('display','none');
    }
  });

});
</script>";
    }

    public function getTemplateName()
    {
        return "Block/menutop.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/menutop.twig", "/home/kir021669/public_html/newjoy.co.jp/app/template/newjoy/Block/menutop.twig");
    }
}