<?php

/* Point/Resource/template/default/Event/Cart/point_box.twig */
class __TwigTemplate_70cf6f69afadeed154dc909ac304e2c03dc2386213477e22209ffc9051013c47 extends Twig_Template
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
        echo "<p id=\"cart_item__point_info\" class=\"message\">
    現在の保有ポイントは「<strong class=\"text-primary\">";
        // line 2
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["point"] ?? null), "current", array()) >= 0)) ? (twig_number_format_filter($this->env, $this->getAttribute(($context["point"] ?? null), "current", array()))) : (0)), "html", null, true);
        echo " pt</strong>」です。<br/>
    商品購入で加算されるポイントは「<strong class=\"text-primary\">";
        // line 3
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["point"] ?? null), "add", array())), "html", null, true);
        echo "pt</strong>」です。<br/>
    ポイントは商品購入時に1pt＝<strong class=\"text-primary\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["point"] ?? null), "rate", array())), "html", null, true);
        echo "</strong>として利用することができます。
</p>

";
    }

    public function getTemplateName()
    {
        return "Point/Resource/template/default/Event/Cart/point_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Point/Resource/template/default/Event/Cart/point_box.twig", "/home/kir021669/public_html/newjoy.co.jp/app/Plugin/Point/Resource/template/default/Event/Cart/point_box.twig");
    }
}
