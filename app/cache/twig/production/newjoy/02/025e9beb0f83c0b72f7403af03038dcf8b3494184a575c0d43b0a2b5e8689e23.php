<?php

/* __string_template__546d7d948e8a483f655167b280f40b6f68bf0a12f1817610d67a8084740d5a09 */
class __TwigTemplate_db40682a384da96e1050c91049ef064d815b765baba50f9d6ed4401dfe6bdd12 extends Twig_Template
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
        // line 22
        echo "<script type=\"text/javascript\">
\$(function(){
    \$(\".newslist\").each(function(){
        var listLenght = \$(this).find(\"dl\").length;
        if(listLenght>5){
            \$(this).find(\"dl:gt(4)\").each(function(){\$(this).hide();});
            \$(this).append('<a id=\"news_readmore\">» もっと見る</a>');
            var dispNum = 5;
            \$(this).find(\"#news_readmore\").click(function(){
                dispNum +=5;
                \$(this).parent().find(\"dl:lt(\"+dispNum+\")\").show(400);
                if (dispNum>=listLenght) {
                    \$(this).hide();
                }
            })
        }
    });
});
</script>

<div class=\"col-sm-12 news_contents\">
<style>
.product_lf{
display:none;
}
.accordion{
clear:both;
}
.newslist dt .cb {
    font-size: 15px;
    top: 0;
    left: 3px;
}
.newslist dt .angle-circle {
    top: 14px;
    width: 20px;
    height: 20px;
}
.newslist dt .cb {
    top: 3px;
}
.news_contents {
    clear: both;
}
.newslist dt .angle-circle {
    top: 5px;
}
.newslist dt {
    padding: 8px;
padding-right: 30px;
}
.news_contents {
    padding: 0;
    padding: 5px 0;
}
.newslist {
    border-bottom: 1px solid #f8f8f8;
    height: 100px;
    overflow-x: hidden;
padding: 0;
}
.newslist dt:hover .news_title {
    text-decoration: underline;
    color: rgba(217, 83, 79, 0.83);
}
.newslist dt .date {
    float: left;
    color: forestgreen;
    padding-right: 5px;
}
#news_area {
  background: rgb(255, 255, 255);
border: 1px solid rgb(212, 212, 213);
}
#news_area .heading01 {
        padding: 4px;
    text-align: left;
    color: #0d0d0d;
    text-align: center;
    font-size: 22px;
    font-weight: normal;
    line-height: 32px;
    width: 100%;
}
#news_area {
    margin-bottom: 0px; 
}
</style>
    <div id=\"news_area\">
        <h4 class=\"heading01\">新着情報</h4>
        <div class=\"accordion\">
            <div class=\"newslist\">

                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["NewsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 116
            echo "                <dl>
                    <dt>
                        <span class=\"date col-md-3\">";
            // line 118
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["News"], "date", array()), "Y/m/d"), "html", null, true);
            echo "</span>
                        <span class=\"news_title col-md-9\">
                            ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "title", array()), "html", null, true);
            echo "
                        </span>
                        ";
            // line 122
            if (($this->getAttribute($context["News"], "comment", array()) || $this->getAttribute($context["News"], "url", array()))) {
                // line 123
                echo "                        <span class=\"angle-circle\"><svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg></span>
                        ";
            }
            // line 125
            echo "                    </dt>
                    ";
            // line 126
            if (($this->getAttribute($context["News"], "comment", array()) || $this->getAttribute($context["News"], "url", array()))) {
                // line 127
                echo "                    <dd>";
                echo nl2br($this->getAttribute($context["News"], "comment", array()));
                echo "
                        ";
                // line 128
                if ($this->getAttribute($context["News"], "url", array())) {
                    echo "<br>
                        <a href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "url", array()), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute($context["News"], "link_method", array()) == "1")) {
                        echo "target=\"_blank\"";
                    }
                    echo ">
                        詳しくはこちら
                        </a>";
                }
                // line 132
                echo "                    </dd>
                    ";
            }
            // line 134
            echo "                </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__546d7d948e8a483f655167b280f40b6f68bf0a12f1817610d67a8084740d5a09";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 136,  166 => 134,  162 => 132,  152 => 129,  148 => 128,  143 => 127,  141 => 126,  138 => 125,  134 => 123,  132 => 122,  127 => 120,  122 => 118,  118 => 116,  114 => 115,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__546d7d948e8a483f655167b280f40b6f68bf0a12f1817610d67a8084740d5a09", "");
    }
}
