<?php

/* __string_template__e99d2aece2c4e103e16fa30959d5d3fb68d6c7f6bec05f352af2044b928b4fcb */
class __TwigTemplate_3313b53b3985c4ab27afb51bc0d59ca4b7f6fdaf430e40ae548a11d59e157af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__e99d2aece2c4e103e16fa30959d5d3fb68d6c7f6bec05f352af2044b928b4fcb", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["body_class"] = "product_page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "
<link rel=\"stylesheet\" href=\"/user_data/css/free_area.css\">
<link rel=\"stylesheet\" href=\"/user_data/css/check_product.css\">
";
    }

    // line 11
    public function block_javascript($context, array $blocks = array())
    {
        // line 12
        echo "<script>
\t\$(function() {
\t\t\$('select[name=classcategory_id1], select[name=classcategory_id2]')
\t\t\t\t.change(function() {
\t\t\t\t\t\$('.price01_default, .price02_default').each(
\t\t\t\t\t\t\tfunction(){
\t\t\t\t\t\t\t\t\$(this).text(\$(this).text().replace(/¥[\\s　]*([\\d,]+)/, '\$1円'));
\t\t\t\t\t\t\t}
\t\t\t\t\t);
\t\t\t\t});
\t});
</script>

<script src=\"/plugin/ImgExpansion/js/zoomsl-3.0.min.js\"></script>
<script>
    var size = \$(window).width();
    \$(window).resize(function() {
        size = \$(window).width();
    });

    \$(window).bind('load', function() {
        zoomer();
    });

    \$(window).resize(function() {
        zoomer();
    });

    function zoomer() {
        setTimeout(function () {
            \$('.magnifier').remove();
            \$('.cursorshade').remove();
            \$('.statusdiv').remove();
            \$('.tracker').remove();

            if (768 > size) {
                return false;
            }

            \$(\"[id^=detail_image_box__item] img\").imagezoomsl({
                zoomrange: [3, 10],
                zoomstart: 3,
                magnifiereffectanimate: 'fadeIn',
                magnifierborder: '0'
            });

        }, 30);
    }
</script>


<link rel=\"stylesheet\" type=\"text/css\" href=\"/user_data/css/sp_detail.css\">
<script>
eccube.classCategories = ";
        // line 65
        echo twig_jsonencode_filter($this->getAttribute(($context["Product"] ?? null), "class_categories", array()));
        echo ";
// 規格2に選択肢を割り当てる。
\tfunction fnSetClassCategories(form, classcat_id2_selected) {
\tvar \$form = \$(form);
\tvar product_id = \$form.find('input[name=product_id]').val();
\tvar \$sele1 = \$form.find('select[name=classcategory_id1]');
\tvar \$sele2 = \$form.find('select[name=classcategory_id2]');
\teccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
}
";
        // line 74
        if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
            // line 75
            echo "fnSetClassCategories(
document.form1, ";
            // line 76
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
);
";
        }
        // line 79
        echo "</script>
<script>
\$(function(){
\$('.carousel1').slick({
infinite: false,
speed: 300,
prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
{
breakpoint: 768,
settings: {
slidesToShow: 3,
slidesToScroll: 3
}
}
]
});

\$('.slides').slick({
dots: true,
arrows: false,
speed: 0,
customPaging: function(slider, i) {
return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
}
});

\$('#favorite').click(function() {
\$('#mode').val('add_favorite');
});

\$('#add-cart').click(function() {
\$('#mode').val('add_cart');
});

// bfcache無効化
\$(window).bind('pageshow', function(event) {
if (event.originalEvent.persisted) {
location.reload(true);
}
});
});
</script>
<!-- js追記 ここから -->
<script src=\"/user_data/flickity/flickity.pkgd.min.js\"></script>
<script>
(function(\$){
\$(window).on('load', function(){
var num = \$('.slick-dots').find('li').length;
if( num > 3 ){
\$('.slick-dots').flickity({
pageDots: false,
cellAlign: 'left'
});
}
});
})(jQuery);
</script>
<!-- ここまで -->
";
        // line 150
        echo "

";
        // line 152
        if ((twig_length_filter($this->env, ($context["ProductOptions"] ?? null)) > 0)) {
            // line 153
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
            echo "/assets/css/bootstrap-datetimepicker.min.css\">
<script src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
            echo "/../../plugin/ProductOption/jquery.plainmodal.min.js\"></script>
<script src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
            echo "/assets/js/vendor/moment.min.js\"></script>
<script src=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
            echo "/assets/js/vendor/moment-ja.js\"></script>
<script src=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
            echo "/assets/js/vendor/bootstrap-datetimepicker.min.js\"></script>
";
        }
        // line 159
        echo "<script>
";
        // line 160
        if ((twig_length_filter($this->env, ($context["ProductOptions"] ?? null)) > 0)) {
            // line 161
            echo "\$(function() {
    ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ProductOptions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                // line 163
                echo "    ";
                $context["Option"] = $this->getAttribute($context["ProductOption"], "Option", array());
                // line 164
                echo "        ";
                if (($this->getAttribute(($context["Option"] ?? null), "description_flg", array()) == 1)) {
                    // line 165
                    echo "            modal";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Option"] ?? null), "id", array()), "html", null, true);
                    echo " = \$('#option_description_";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Option"] ?? null), "id", array()), "html", null, true);
                    echo "').plainModal();
            \$('#option_description_link_";
                    // line 166
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Option"] ?? null), "id", array()), "html", null, true);
                    echo "').click(function() { modal";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Option"] ?? null), "id", array()), "html", null, true);
                    echo ".plainModal('open'); return false;});
        ";
                }
                // line 168
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "});

\$(function () {
    var inputDate = document.createElement('input');
    inputDate.setAttribute('type', 'date');
    if (inputDate.type !== 'date') {
        \$('input[type=date]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false
        });
    }
});

\$(function() {
    \$(\"[id^=desc_btn_]\").click(function(){
        var id = \$(this).attr('id').replace(/^desc_btn_/ig, '');
        var ids = id.split('_');

        func_submit(ids[0],ids[1]);
    });
});

function func_submit(optionId, setValue) {
    var \$sele_option = \$(\"[name=productoption\" + optionId + \"]\");
    if(\$sele_option && \$sele_option.length){
        var kind = \$sele_option.attr(\"type\");
        if(kind == 'radio'){
            \$sele_option.val([setValue]);
        }else{
            \$sele_option.val(setValue);
        }
    }else{
        var \$sele_option = \$('[name=\"productoption' + optionId + '[]\"]');
        if(\$sele_option && \$sele_option.length){
            \$sele_option.each(function(){
                if(\$(this).val() == setValue){
                    \$(this).prop('checked',true);
                }
            });
        }
    }
    ";
            // line 211
            if (($context["isActive"] ?? null)) {
                // line 212
                echo "    onOptionChange();
    ";
            }
            // line 214
            echo "    \$('#option_description_' + optionId).plainModal('close');
}
";
        }
        // line 217
        echo "
";
        // line 218
        if (($context["isActive"] ?? null)) {
            // line 219
            echo "var optionPrice = ";
            echo twig_jsonencode_filter(($context["optionPrice"] ?? null));
            echo ";
var optionPoint = ";
            // line 220
            echo twig_jsonencode_filter(($context["optionPoint"] ?? null));
            echo ";
var taxRules = ";
            // line 221
            echo twig_jsonencode_filter(($context["taxRules"] ?? null));
            echo ";
var default_class_id = ";
            // line 222
            echo twig_escape_filter($this->env, ($context["default_class_id"] ?? null), "html", null, true);
            echo ";

function onOptionChange(){
    var optionPriceTotal = 0;
    var optionPointTotal = 0;
    var tax_rate = null;
    var tax_rule = null;
    \$(\"[id^=productoption]\").each(function(){
        var id = \$(this).prop(\"id\");
        if(id.match(/^productoption\\d+\$/)){
            var kind = \$(this).prop('tagName');
            var value = null;
            switch(kind){
                case 'SELECT':
                    value = \$(this).val();
                    break;
                case 'TEXTAREA':
                case 'INPUT':
                    var text = \$(this).val();
                    if(text.length > 0){
                        value = \$(this).attr('data');
                    }
                    break;
                default:
                    if(\$(this).find('input[type=\"checkbox\"]').length > 0){
                        value = [];
                        \$(this).find('input[type=\"checkbox\"]:checked').each(function(){
                            value.push(\$(this).val());
                        });
                    }else{
                        var id = \$(this).prop('id');
                        value = (\$(\"input[name='\" + id + \"']:checked\").val());
                    }
                    break;
            }
            if(value != null){
                if(Array.isArray(value)){
                    for(var key in value){
                        optionPriceTotal += optionPrice[value[key]];
                        optionPointTotal += optionPoint[value[key]];
                    }
                }else{
                    optionPriceTotal += optionPrice[value];
                    optionPointTotal += optionPoint[value];
                }
            }
        }
    });
    var \$sele1 = \$('form select[name=classcategory_id1]');
    var \$sele2 = \$('form select[name=classcategory_id2]');

    var classcat_id1 = \$sele1.val() ? \$sele1.val() : '__unselected';
    var classcat_id2 = \$sele2.val() ? \$sele2.val() : '';
    classcat2 = eccube.classCategories[classcat_id1]['#' + classcat_id2];
    if(classcat2){
        var product_class_id = classcat2.product_class_id;
    }else{
        var product_class_id = default_class_id;
    }

    var tax_rate = taxRules[product_class_id]['tax_rate'];
    var tax_rule = taxRules[product_class_id]['tax_rule'];

    \$('#option_price_default').text(number_format(optionPriceTotal));
    \$('#option_price_inctax_default').text(number_format(optionPriceTotal + sfTax(optionPriceTotal, tax_rate, tax_rule)));
    \$('#option_point_default').text(number_format(optionPointTotal));
}

function number_format(num) {
    return num.toString().replace(/([0-9]+?)(?=(?:[0-9]{3})+\$)/g , '\$1,');
}

function sfTax(price, tax_rate, tax_rule) {
    real_tax = tax_rate / 100;
    ret = price * real_tax;
    tax_rule = parseInt(tax_rule);
    switch (tax_rule) {
        // 四捨五入
        case 1:
            \$ret = Math.round(ret);
            break;
        // 切り捨て
        case 2:
            \$ret = Math.floor(ret);
            break;
        // 切り上げ
        case 3:
            \$ret = Math.ceil(ret);
            break;
        // デフォルト:切り上げ
        default:
            \$ret = Math.round(ret);
            break;
    }
    return \$ret;
}

onOptionChange();
";
        }
        // line 321
        echo "</script>";
    }

    // line 323
    public function block_main($context, array $blocks = array())
    {
        // line 324
        echo "
";
        // line 338
        echo "<!-- ▼関連カテゴリ▼ -->
<div id=\"relative_category_box\" class=\"relative_cat\">
";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductCategories", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 341
            echo "<ol id=\"relative_category_box__relative_category--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
";
            // line 342
            $context["CategoryLevel"] = 0;
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 344
                echo "  ";
                if (($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "level", array()) > 1)) {
                    // line 345
                    echo "  ";
                    if (($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "level", array()) == 3)) {
                        // line 346
                        echo "  ";
                        $context["CategoryLevel"] = 1;
                        // line 347
                        echo "  <!-- ★ここに追加★ -->
<li><a id=\"relative_category_box__relative_category--";
                        // line 348
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                        echo "\" href=\"";
                        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                        echo "?category_id=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                        echo "</a></li>
  <!-- ★ここに追加★ -->
  ";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 350
$context["ProductCategory"], "Category", array()), "level", array()) == 2) && (($context["CategoryLevel"] ?? null) == 0))) {
                        // line 351
                        echo "  <!-- ★ここに追加★ -->
<li><a id=\"relative_category_box__relative_category--";
                        // line 352
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                        echo "\" href=\"";
                        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                        echo "?category_id=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                        echo "</a></li>
  <!-- ★ここに追加★ -->
  ";
                    }
                    // line 355
                    echo "  ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            echo "</ol>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "</div>
<!-- ▲関連カテゴリ▲ -->
<!-- ▼item_detail▼ -->
<div id=\"item_detail\">
<div id=\"detail_wrap\" class=\"row\">
<!--★画像★-->
<div id=\"item_photo_area\" class=\"col-sm-6\">
<div id=\"detail_image_box__slides\" class=\"slides\">
";
        // line 367
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "ProductImage", array())) > 0)) {
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductImage", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 369
                echo "<div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 372
            echo "<div id=\"detail_image_box__item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\" />
</div>
";
        }
        // line 375
        echo "</div>
</div>

<section id=\"item_detail_area\" class=\"col-sm-6\">

<!--★商品名★-->
<!-- <h3 id=\"detail_description_box__name\" class=\"item_name1\">";
        // line 381
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
        echo "</h3>-->
<div id=\"detail_description_box__body\" class=\"item_detail\">

";
        // line 384
        if ( !twig_test_empty($this->getAttribute(($context["Product"] ?? null), "ProductTag", array()))) {
            // line 385
            echo "<!--▼商品タグ-->
<div id=\"product_tag_box\" class=\"product_tag\">
";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductTag"]) {
                // line 388
                echo "<span id=\"product_tag_box__product_tag--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "id", array()), "html", null, true);
                echo "\" class=\"product_tag_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "Tag", array()), "html", null, true);
                echo "</span>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 390
            echo "</div>
<!--▲商品タグ-->
";
        }
        // line 393
        echo "<h1 id=\"detail_description_box__name\" class=\"item_name1\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
        echo "</h1>

<!--▼フリーエリア-->
";
        // line 396
        if ($this->getAttribute(($context["Product"] ?? null), "freearea", array())) {
            // line 397
            echo "<div id=\"sub_area\" class=\"row\">
<div class=\"col-sm-11\">
<div id=\"detail_free_box__freearea\" class=\"freearea\"><h2>";
            // line 399
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["Product"] ?? null), "freearea", array())));
            echo "</h2></div>
</div>
</div>
";
        }
        // line 403
        echo "<!--▲フリーエリア-->

<!--★通常価格★-->
";
        // line 406
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 407
            if (( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())) && ($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMax", array())))) {
                // line 408
                echo "<p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
";
            } elseif (( !(null === $this->getAttribute(            // line 409
($context["Product"] ?? null), "getPrice01Min", array())) &&  !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())))) {
                // line 410
                echo "<p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
";
            }
        } else {
            // line 413
            if ( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array()))) {
                // line 414
                echo "<p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
";
            }
        }
        // line 418
        echo "<!--★販売価格★-->
";
        // line 419
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 420
            if (($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array()))) {
                // line 421
                echo "<p id=\"detail_description_box__class_sale_price\" class=\"sale_price \"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
";
            } else {
                // line 423
                echo "<p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price \"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
";
            }
        } else {
            // line 426
            echo "<p id=\"detail_description_box__sale_price\" class=\"sale_price \"> <span class=\"price02_default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
            echo "</span> <span class=\"small\">税込</span></p>
";
        }
        // line 428
        echo "<!--<span>税金</span><span id=\"h-price\"></span>-->
<script>

</script>
<!--▼送料-->
<div class=\"gui\">
    このストアで20,000円以上購入で<span style=\" padding: 5px;
    color: #f99ab1;\">送料無料</span>
    </div>
<!--▲送料-->


<!--▼商品コード-->
<p id=\"detail_description_box__sale_point\" class=\"text-primary\">
            加算ポイント：<span>220</span><span class=\"small\">pt</span>
    </p>

<p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span id=\"item_code_default\">
";
        // line 446
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "code_min", array()), "html", null, true);
        echo "
";
        // line 447
        if (($this->getAttribute(($context["Product"] ?? null), "code_min", array()) != $this->getAttribute(($context["Product"] ?? null), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "code_max", array()), "html", null, true);
        }
        // line 448
        echo "</span> </p>
<!--▲商品コード-->

<form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
<!--▼買い物かご-->
<div id=\"detail_cart_box\" class=\"cart_area\">
";
        // line 454
        if ($this->getAttribute(($context["Product"] ?? null), "stock_find", array())) {
            // line 456
            if ($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
                // line 457
                echo "<ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
";
                // line 459
                echo "<li> 
<p>";
                // line 460
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["class_name"] ?? null), "class_name1", array()), "name", array()), "html", null, true);
                echo "</p>
";
                // line 461
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'label');
                echo "
";
                // line 462
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'widget');
                echo "
";
                // line 463
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'errors');
                echo "
</li>
";
                // line 466
                if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
                    // line 467
                    echo "<li> 
";
                    // line 468
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'label');
                    echo "
";
                    // line 469
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'widget');
                    echo "
";
                    // line 470
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'errors');
                    echo "
</li>
";
                }
                // line 473
                echo "</ul>
";
            }
            // line 475
            echo "

";
            // line 487
            echo "
<style>
.form-control {
  width: 100%;
}

.number.form-control{
  width: 40%;
}
textarea.form-control {
  height: 7em;
}

@media only screen and (min-width: 768px) {
  .form-control {
    width: 350px;
  }
}
</style>

";
            // line 507
            if (array_key_exists("ProductOptions", $context)) {
                // line 508
                echo "    ";
                if (($context["ProductOptions"] ?? null)) {
                    // line 509
                    echo "        <ul class=\"classcategory_list\">
            ";
                    // line 510
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["ProductOptions"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                        // line 511
                        echo "                ";
                        $context["value"] = ("productoption" . $this->getAttribute($this->getAttribute($context["ProductOption"], "Option", array()), "id", array()));
                        // line 512
                        echo "                <li>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), ($context["value"] ?? null), array(), "array"), 'label');
                        echo "
                    ";
                        // line 513
                        if (($this->getAttribute($this->getAttribute($context["ProductOption"], "Option", array()), "description_flg", array()) == 1)) {
                            // line 514
                            echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductOption"], "Option", array()), "id", array()), "html", null, true);
                            echo "\">詳細説明</a>
                    ";
                        }
                        // line 516
                        echo "                </li>
                <li ";
                        // line 517
                        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), ($context["value"] ?? null), array(), "array"), "vars", array()), "errors", array()))) {
                            echo "class=\"has-error\"";
                        }
                        echo ">
                    ";
                        // line 518
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), ($context["value"] ?? null), array(), "array"), 'widget', array("attr" => array("onChange" => "onOptionChange()")));
                        echo "
                    ";
                        // line 519
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), ($context["value"] ?? null), array(), "array"), 'errors');
                        echo "
                </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 522
                    echo "        </ul>
    ";
                }
            }
            // line 524
            echo "<dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
<dt>数量</dt>
<dd>
";
            // line 527
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
            echo "
";
            // line 528
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
            echo "
<div class=\"pl-mi-btn\">
<label for=\"num-plus\" class=\"pm-btn plus\"></label>
<label for=\"num-minus\" class=\"pm-btn minus\"></label>
</div>

<script>
\$('.pm-btn.plus').on('click', function(){
var \$inquantity = \$('#quantity');
var num = \$inquantity.val();
num++;
\$inquantity.val(num);
\$inquantity.text(num);
});

\$('.pm-btn.minus').on('click', function(){
var \$inquantity = \$('#quantity');
var num = \$inquantity.val();
if(num > 1){
num--;
\$inquantity.val(num);
\$inquantity.text(num);
}
});
//-->
</script>
</dd>
</dl>

<div class=\"extra-form\">
";
            // line 558
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 559
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 560
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            echo "</div>

";
            // line 566
            echo " <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
    <ul id=\"detail_cart_box__insert_button\" class=\"row\">
    <li class=\"col-xs-12 col-sm-12\"><button type=\"submit\" id=\"add-cart\" class=\"btn-cart btn-block prevention-btn prevention-mask\"> カートに入れる</button></li>
    </ul>
    ";
            // line 570
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 571
                echo "   <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
    ";
                // line 572
                if ((($context["is_favorite"] ?? null) == false)) {
                    // line 573
                    echo "    <li class=\"col-xs-12 col-sm-12 kato\"><button type=\"submit\" id=\"favorite\" class=\"btn-block prevention-btn prevention-mask\"><img src=\"/user_data/images/heart.png\">お気に入りに追加</button></li>
    ";
                } else {
                    // line 575
                    echo "    <li class=\"col-xs-12 col-sm-12 kato\"><button type=\"submit\" id=\"favorite\" class=\"btn-block\" disabled=\"disabled\"><img src=\"/user_data/images/heart.png\"> お気に入りに追加済みです</button></li>
    ";
                }
                // line 577
                echo "    </ul>
    ";
            }
            // line 579
            echo "    </div>
";
        } else {
            // line 582
            echo "<div id=\"detail_cart_box__button_area\" class=\"btn_area\">
<ul class=\"row\">
<li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
</ul>
</div>
";
        }
        // line 588
        echo "</div>
<!--▲買い物かご-->
";
        // line 590
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
</form>
<!-- ▼商品レビュー▼ -->
<!--# product-review-plugin-tag #-->";
        // line 603
        echo "
";
        // line 610
        echo "
<style type=\"text/css\">
    #product_review_area {
        border-top: 1px solid #E8E8E8;
        padding-bottom: 0;
    }
    #product_review_area dl dt {
        padding: 16px 0;
        cursor: pointer;
    }
    #product_review_area dl dt:hover {
        color: #9797A0;
    }
    #product_review_area dl dt.active .cb {
        transform: rotate(180deg);
    }
    #product_review_area dl dt .cb {
        position: absolute;
        right: 16px;
        top: 17px;
    }
    #product_review_area dl dd {
        display: none;
        padding-bottom: 0;
    }
    #product_review_area .review_btn a {
        margin: 0 auto;
        padding: 16px;
        width: 100%;
    }
    #product_review_area .review_list {
        padding: 8px 0;
    }
    #product_review_area .review_list li {
        padding: 8px 0;
    }
    #product_review_area .review_list p {
        margin: 0px 0;
    }
    #product_review_area .review_list .review_date {
        font-weight: bold;
    }
    #product_review_area .recommend_average {
        margin-left: 16px;
        color: #DE5D50;
    }
    #product_review_area .review_list .recommend_level {
        margin-left: 16px;
        color: #DE5D50;
    }
    #product_review_area .review_list .recommend_name {
        margin-left: 16px;
    }
    
    @media only screen and (min-width: 768px) {
        #product_review_area {
            border-top: none;
            padding-bottom: 16px;
        }
        #product_review_area dl dt {
            padding: 16px;
        }
        #product_review_area dl dt .cb {
            position: absolute;
            right: 32px;
            top: 24px;
            font-size: 16px;
            font-size: 1.6rem;
        }
        #product_review_area dl dd {
            display: block;
            padding: 0 16px 0;
        }
        #product_review_area .review_btn {
            padding: 16px 0 0;
            text-align: center;
        }
        #product_review_area .review_btn a {
            width: auto;
            min-width: 350px;
        }
        #product_review_area .review_list li {
            padding: 8px 0;
        }
        #product_review_area .review_list p {
            margin: 0px 0;
        }
    }
</style>

<!--▼レビューエリア-->
<div id=\"product_review_area\" class=\"row\">
    <div class=\"col-sm-12 \">
        <div class=\"accordion\">
            <dl>
                ";
        // line 705
        $context["positive_avg_star"] = ($context["avg"] ?? null);
        // line 706
        echo "                ";
        $context["nagative_avg_star"] = (5 - ($context["positive_avg_star"] ?? null));
        // line 707
        echo "                <dt class=\"heading02 sp\">
                    この商品のレビュー
                    
                    <!--平均の星の数-->
                    <span class=\"recommend_average\">
                        ";
        // line 712
        echo $this->getAttribute($this, "stars", array(0 => ($context["positive_avg_star"] ?? null), 1 => ($context["nagative_avg_star"] ?? null)), "method");
        echo "
                    </span>
                    
                    <!--レビュー数-->
                    <span>
                        (";
        // line 717
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo ")
                    </span>
                    <svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </dt>
                <dt class=\"heading02 pc active\">
                    この商品のレビュー
                    
                    <!--平均の星の数-->
                    <span class=\"recommend_average\">
                        ";
        // line 726
        echo $this->getAttribute($this, "stars", array(0 => ($context["positive_avg_star"] ?? null), 1 => ($context["nagative_avg_star"] ?? null)), "method");
        echo "
                    </span>
                    
                    <svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </dt>
                <dd>
                    ";
        // line 732
        if (($context["ProductReviews"] ?? null)) {
            // line 733
            echo "                        <ul class=\"review_list\">
                            ";
            // line 734
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ProductReviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductReview"]) {
                // line 735
                echo "                                <li>
                                    <p class=\"review_date\">
                                        <!--投稿日-->
                                        ";
                // line 738
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute($context["ProductReview"], "create_date", array())), "html", null, true);
                echo "
                                        
                                        <!--投稿者-->
                                        <span class=\"recommend_name\">
                                            ";
                // line 742
                if ($this->getAttribute($context["ProductReview"], "reviewer_url", array())) {
                    // line 743
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_url", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_name", array()), "html", null, true);
                    echo "さん</a>
                                            ";
                } else {
                    // line 745
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_name", array()), "html", null, true);
                    echo "さん
                                            ";
                }
                // line 747
                echo "                                        </span>
                                        
                                        <!--星の数-->
                                        ";
                // line 750
                $context["positive_star"] = $this->getAttribute($context["ProductReview"], "recommend_level", array());
                // line 751
                echo "                                        ";
                $context["nagative_star"] = (5 - ($context["positive_star"] ?? null));
                // line 752
                echo "                                        <span class=\"recommend_level\">
                                            ";
                // line 753
                echo $this->getAttribute($this, "stars", array(0 => ($context["positive_star"] ?? null), 1 => ($context["nagative_star"] ?? null)), "method");
                echo "
                                        </span>
                                    </p>
                                    
                                    <!--タイトル-->
                                    <strong>";
                // line 758
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "title", array()), "html", null, true);
                echo "</strong>
                                    
                                    <!--レビューコメント-->
                                    <p>";
                // line 761
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "comment", array()), "html", null, true));
                echo "</p>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductReview'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 764
            echo "                        </ul>
                    ";
        }
        // line 766
        echo "                </dd>
            </dl>
        </div>
        <div class=\"review_btn\">
            <a href=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("plugin_products_detail_review", array("id" => ($context["id"] ?? null))), "html", null, true);
        echo "\" class=\"btn btn-info\">レビューを書く</a>
        </div>
    </div>
</div>
<!-- ▲レビューエリア -->


<!-- ▲商品レビュー▲ -->
</div>
<!-- /.item_detail -->

</section>
<!--詳細ここまで-->
</div>
";
        // line 785
        echo "<div id=\"detail_not_stock_box__description_detail\" class=\"item_comment\"><div  class=\"h-button\" style=\"margin:5px 0;\"><div class=\"sp_detail\">商品の詳細</div></div></div>
<div id=\"h-dt-image\" class=\"col-sm-12\">
<div id=\"detail_image_box__slides1\" class=\"slides1\">
";
        // line 788
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "ProductImage", array())) > 0)) {
            // line 789
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductImage", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 790
                echo "<div class=\"h-image\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
                echo "\"/>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 794
            echo "<div class=\"h-image\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\"/>
</div>
";
        }
        // line 797
        echo "</div>
<p>";
        // line 798
        echo $this->getAttribute(($context["Product"] ?? null), "description_detail", array());
        echo "</p>
</div>

<!-- ▼関連商品▼ -->
<!--# related-product-plugin-tag #-->";
        // line 811
        echo "<div id=\"related_product_area\" class=\"row\">
    <div class=\"col-sm-12\">
        <h2 class=\"heading03\">関連商品</h2>
        <div class=\"related_product_carousel\">
            ";
        // line 815
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["RelatedProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProduct"]) {
            // line 816
            echo "                <div class=\"product_item\">
                    <a href=\"";
            // line 817
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"item_photo\">
                            <img src=\"";
            // line 819
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "main_list_image", array())), "html", null, true);
            echo "\">
                        </div>
                        <dl>
                            <dt class=\"item_name\">";
            // line 822
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "name", array()), "html", null, true);
            echo "</dt>
                            <dd class=\"item_price\">
                                ";
            // line 824
            if ($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "hasProductClass", array())) {
                // line 825
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02Min", array()) == $this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02Max", array()))) {
                    // line 826
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 828
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02IncTaxMax", array())), "html", null, true);
                    echo "
                                    ";
                }
                // line 830
                echo "                                ";
            } else {
                // line 831
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RelatedProduct"], "ChildProduct", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "
                                ";
            }
            // line 833
            echo "                            </dd>
                            <dd class=\"item_comment\">";
            // line 834
            echo $this->getAttribute($context["RelatedProduct"], "content", array());
            echo "</dd>
                        </dl>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RelatedProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
        echo "        </div>
    </div>
</div>

";
        // line 844
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/../../plugin/relatedproduct/assets/js/related_product_plugin.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/../../plugin/relatedproduct/assets/css/related_product_plugin.css\">

<!-- ▲関連商品▲ -->

</div>

";
        // line 860
        echo "
<style>
.option_description {
  -moz-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  display: none;
  min-width: 50%;
  max-width: 80%;
  max-height: 80%;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.2);
  overflow:auto;
}
.option_description .modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.option_description .modal-header .plainmodal-close {
  margin-top: -2px;
  float: right;
  font-size: 2.1rem;
  font-weight: 700;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
}
.option_description .modal-header .plainmodal-close:hover {
  opacity: 0.5;
}

.option_description .modal-header > p {
  margin: 1% 0 0 0;
  font-size: 1.4rem;
  line-height: 1.42857143;
}

.option_description .modal-title {
  color: #333333;
  font-size: 1.8rem;
  font-weight: 500;
  font-family: inherit;
  margin: 0;
}
.option_description .modal-body {
  padding: 3%;
  font-size: 1.4rem;
  line-height: 1.42857143;
  color: #333;
}
.option_description .modal-body > p {
    margin: 0 0 3%;
}
.option_description .modal-body > div {
    margin-bottom: 2%;
    overflow: hidden;
    padding-bottom: 2%;
}
.option_description .modal-body > div > p {
    margin: 2% 0 0;
}
.option_description img {
    float: none;
    margin: 1% auto 0;
    width: 40%;
    height: auto;
    display: block;
}
.option_description h3 {
    margin: 0;
    background: #efefef;
    padding: 1%;
}
.option_description .minus {
    color: #2980b9;
}
@media screen and (min-width: 768px) {
    .option_description img {
        float: left;
        margin: 1% 4% 0 0;
        width: 15%;
    }
}

.option_description span.small {
    font-size: 1.2rem;
}

.option_description .btn-info {
    width: 74px;
    float: none;
    margin: 15px auto 10px;
    border: 0;
    padding: 4px 0;
    display: block;
}

.option_description .btn-info:hover {
    background: #474757;
}

@media only screen and (min-width: 768px) {
    .option_description .btn-info {
    \tfloat: right;
        margin: 0 10px 0 0;
    }

}

</style>

";
        // line 974
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ProductOptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
            // line 975
            echo "    ";
            $context["Option"] = $this->getAttribute($context["ProductOption"], "Option", array());
            // line 976
            echo "    ";
            if (($this->getAttribute(($context["Option"] ?? null), "description_flg", array()) == 1)) {
                // line 977
                echo "        <div id=\"option_description_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Option"] ?? null), "id", array()), "html", null, true);
                echo "\" class=\"option_description\">
            <div class=\"modal-header\">
                <div class=\"plainmodal-close\">&#215;</div>
                <h4 class=\"modal-title\">";
                // line 980
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Option"] ?? null), "name", array()), "html", null, true);
                echo "</h4>
                <p>";
                // line 981
                echo nl2br($this->getAttribute(($context["Option"] ?? null), "description", array()));
                echo "</p>
            </div>


            ";
                // line 985
                if ((twig_length_filter($this->env, $this->getAttribute(($context["Option"] ?? null), "OptionCategories", array())) > 0)) {
                    // line 986
                    echo "                ";
                    // line 987
                    echo "                ";
                    if ((((($this->getAttribute($this->getAttribute(($context["Option"] ?? null), "Type", array()), "id", array()) == 3) || ($this->getAttribute($this->getAttribute(($context["Option"] ?? null), "Type", array()), "id", array()) == 4)) || ($this->getAttribute($this->getAttribute(($context["Option"] ?? null), "Type", array()), "id", array()) == 6)) || ($this->getAttribute($this->getAttribute(($context["Option"] ?? null), "Type", array()), "id", array()) == 7))) {
                        // line 988
                        echo "                    <div class=\"modal-body\">
                        ";
                        // line 989
                        $context["optionCategory"] = $this->getAttribute($this->getAttribute(($context["Option"] ?? null), "OptionCategories", array()), 0, array(), "array");
                        // line 990
                        echo "                        <div>
                            ";
                        // line 991
                        if ($this->getAttribute(($context["optionCategory"] ?? null), "option_image", array())) {
                            // line 992
                            echo "                                <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["optionCategory"] ?? null), "option_image", array()), "html", null, true);
                            echo "\"/>
                            ";
                        }
                        // line 994
                        echo "                            ";
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["optionCategory"] ?? null), "value", array())) > 0)) {
                            // line 995
                            echo "                                ";
                            if (($this->getAttribute(($context["optionCategory"] ?? null), "value", array()) > 0)) {
                                // line 996
                                echo "                                    <p class=\"plus\">価格：";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["optionCategory"] ?? null), "value", array())), "html", null, true);
                                echo " <span class=\"small\"></span></p>
                                ";
                            } elseif (($this->getAttribute(                            // line 997
($context["optionCategory"] ?? null), "value", array()) < 0)) {
                                // line 998
                                echo "                                    <p class=\"minus\">価格：";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["optionCategory"] ?? null), "value", array())), "html", null, true);
                                echo " <span class=\"small\"></span></p>
                                ";
                            }
                            // line 1000
                            echo "                            ";
                        }
                        // line 1001
                        echo "                            ";
                        if (($this->getAttribute(($context["optionCategory"] ?? null), "delivery_free_flg", array()) == 1)) {
                            // line 1002
                            echo "                                <p>送料無料</p>
                            ";
                        }
                        // line 1004
                        echo "                        </div>
                    </div>
                ";
                        // line 1007
                        echo "                ";
                    } else {
                        // line 1008
                        echo "                    <div class=\"modal-body\">
                        ";
                        // line 1009
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Option"] ?? null), "OptionCategories", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["optionCategory"]) {
                            // line 1010
                            echo "                            ";
                            if (($this->getAttribute($context["optionCategory"], "disable_flg", array()) != 1)) {
                                // line 1011
                                echo "                                <div>
                                    <h3>";
                                // line 1012
                                echo twig_escape_filter($this->env, $this->getAttribute($context["optionCategory"], "name", array()), "html", null, true);
                                echo "</h3>
                                    ";
                                // line 1013
                                if ($this->getAttribute($context["optionCategory"], "option_image", array())) {
                                    // line 1014
                                    echo "                                        <img src=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                                    echo "/";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["optionCategory"], "option_image", array()), "html", null, true);
                                    echo "\"/>
                                    ";
                                }
                                // line 1016
                                echo "                                    <p>";
                                echo nl2br($this->getAttribute($context["optionCategory"], "description", array()));
                                echo "</p>
                                    ";
                                // line 1017
                                if ((twig_length_filter($this->env, $this->getAttribute($context["optionCategory"], "value", array())) > 0)) {
                                    // line 1018
                                    echo "                                        ";
                                    if (($this->getAttribute($context["optionCategory"], "value", array()) > 0)) {
                                        // line 1019
                                        echo "                                            <p class=\"plus\">価格：";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["optionCategory"], "value", array())), "html", null, true);
                                        echo " <span class=\"small\"></span></p>
                                        ";
                                    } elseif (($this->getAttribute(                                    // line 1020
$context["optionCategory"], "value", array()) < 0)) {
                                        // line 1021
                                        echo "                                            <p class=\"minus\">価格：";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["optionCategory"], "value", array())), "html", null, true);
                                        echo " <span class=\"small\"></span></p>
                                        ";
                                    }
                                    // line 1023
                                    echo "                                    ";
                                }
                                // line 1024
                                echo "                                    ";
                                if (($this->getAttribute($context["optionCategory"], "delivery_free_flg", array()) == 1)) {
                                    // line 1025
                                    echo "                                        <p>送料無料</p>
                                    ";
                                }
                                // line 1027
                                echo "                                    <button class=\"btn-info\" id=\"desc_btn_";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["Option"] ?? null), "id", array()), "html", null, true);
                                echo "_";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["optionCategory"], "id", array()), "html", null, true);
                                echo "\" >選択する</button>
                                </div>
                            ";
                            }
                            // line 1030
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1031
                        echo "                    </div>
                ";
                    }
                    // line 1033
                    echo "            ";
                }
                // line 1034
                echo "        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 605
    public function getstars($__positive__ = null, $__negative__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "positive" => $__positive__,
            "negative" => $__negative__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 606
            echo "    ";
            $context["positive_stars"] = array(0 => "", 1 => "★", 2 => "★★", 3 => "★★★", 4 => "★★★★", 5 => "★★★★★");
            // line 607
            echo "    ";
            $context["negative_stars"] = array(0 => "", 1 => "☆", 2 => "☆☆", 3 => "☆☆☆", 4 => "☆☆☆☆", 5 => "☆☆☆☆☆");
            // line 608
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["positive_stars"] ?? null), ($context["positive"] ?? null), array(), "array"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["negative_stars"] ?? null), ($context["negative"] ?? null), array(), "array"), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "__string_template__e99d2aece2c4e103e16fa30959d5d3fb68d6c7f6bec05f352af2044b928b4fcb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1721 => 608,  1718 => 607,  1715 => 606,  1702 => 605,  1692 => 1034,  1689 => 1033,  1685 => 1031,  1679 => 1030,  1670 => 1027,  1666 => 1025,  1663 => 1024,  1660 => 1023,  1654 => 1021,  1652 => 1020,  1647 => 1019,  1644 => 1018,  1642 => 1017,  1637 => 1016,  1629 => 1014,  1627 => 1013,  1623 => 1012,  1620 => 1011,  1617 => 1010,  1613 => 1009,  1610 => 1008,  1607 => 1007,  1603 => 1004,  1599 => 1002,  1596 => 1001,  1593 => 1000,  1587 => 998,  1585 => 997,  1580 => 996,  1577 => 995,  1574 => 994,  1566 => 992,  1564 => 991,  1561 => 990,  1559 => 989,  1556 => 988,  1553 => 987,  1551 => 986,  1549 => 985,  1542 => 981,  1538 => 980,  1531 => 977,  1528 => 976,  1525 => 975,  1521 => 974,  1405 => 860,  1396 => 845,  1391 => 844,  1385 => 839,  1374 => 834,  1371 => 833,  1365 => 831,  1362 => 830,  1354 => 828,  1348 => 826,  1345 => 825,  1343 => 824,  1338 => 822,  1330 => 819,  1325 => 817,  1322 => 816,  1318 => 815,  1312 => 811,  1305 => 798,  1302 => 797,  1293 => 794,  1278 => 790,  1274 => 789,  1272 => 788,  1267 => 785,  1250 => 770,  1244 => 766,  1240 => 764,  1231 => 761,  1225 => 758,  1217 => 753,  1214 => 752,  1211 => 751,  1209 => 750,  1204 => 747,  1198 => 745,  1190 => 743,  1188 => 742,  1181 => 738,  1176 => 735,  1172 => 734,  1169 => 733,  1167 => 732,  1158 => 726,  1146 => 717,  1138 => 712,  1131 => 707,  1128 => 706,  1126 => 705,  1029 => 610,  1026 => 603,  1020 => 590,  1016 => 588,  1008 => 582,  1004 => 579,  1000 => 577,  996 => 575,  992 => 573,  990 => 572,  987 => 571,  985 => 570,  979 => 566,  975 => 563,  966 => 560,  964 => 559,  960 => 558,  927 => 528,  923 => 527,  918 => 524,  913 => 522,  904 => 519,  900 => 518,  894 => 517,  891 => 516,  885 => 514,  883 => 513,  878 => 512,  875 => 511,  871 => 510,  868 => 509,  865 => 508,  863 => 507,  841 => 487,  837 => 475,  833 => 473,  827 => 470,  823 => 469,  819 => 468,  816 => 467,  814 => 466,  809 => 463,  805 => 462,  801 => 461,  797 => 460,  794 => 459,  791 => 457,  789 => 456,  787 => 454,  779 => 448,  774 => 447,  770 => 446,  750 => 428,  744 => 426,  735 => 423,  729 => 421,  727 => 420,  725 => 419,  722 => 418,  715 => 414,  713 => 413,  704 => 410,  702 => 409,  697 => 408,  695 => 407,  693 => 406,  688 => 403,  681 => 399,  677 => 397,  675 => 396,  668 => 393,  663 => 390,  652 => 388,  648 => 387,  644 => 385,  642 => 384,  636 => 381,  628 => 375,  615 => 372,  593 => 369,  576 => 368,  574 => 367,  564 => 359,  549 => 357,  534 => 355,  518 => 352,  515 => 351,  513 => 350,  498 => 348,  495 => 347,  492 => 346,  489 => 345,  486 => 344,  469 => 343,  467 => 342,  460 => 341,  443 => 340,  439 => 338,  436 => 324,  433 => 323,  429 => 321,  327 => 222,  323 => 221,  319 => 220,  314 => 219,  312 => 218,  309 => 217,  304 => 214,  300 => 212,  298 => 211,  254 => 169,  248 => 168,  241 => 166,  234 => 165,  231 => 164,  228 => 163,  224 => 162,  221 => 161,  219 => 160,  216 => 159,  211 => 157,  207 => 156,  203 => 155,  199 => 154,  194 => 153,  192 => 152,  188 => 150,  124 => 79,  118 => 76,  115 => 75,  113 => 74,  101 => 65,  46 => 12,  43 => 11,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e99d2aece2c4e103e16fa30959d5d3fb68d6c7f6bec05f352af2044b928b4fcb", "");
    }
}
