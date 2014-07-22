<?php

/* ONNAesopGamesBundle::layout.html.twig */
class __TwigTemplate_7a6d9f02222dfd7e6174cced58e6c7824cfb694bd7da3992de147a7aa5d606fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"description\" content=\"Aesop Games - we strive to make innovative games which entertain while also engaging players' critical thinking and imagination.\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        body {
            padding-top: 70px;
            padding-bottom: 30px;
        }

        .theme-dropdown .dropdown-menu {
            display: block;
            position: static;
            margin-bottom: 20px;
        }

        .theme-showcase > p > .btn {
            margin: 5px 0;
        }
    </style>

    ";
        // line 26
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ac02054_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_0") : $this->env->getExtension('assets')->getAssetUrl("js/ac02054_jquery-1.8.0.min_1.js");
            // line 31
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
            // asset "ac02054_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_1") : $this->env->getExtension('assets')->getAssetUrl("js/ac02054_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
            // asset "ac02054_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_2") : $this->env->getExtension('assets')->getAssetUrl("js/ac02054_part_3_bootstrap_1.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
            // asset "ac02054_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_3") : $this->env->getExtension('assets')->getAssetUrl("js/ac02054_part_3_jquery-ui-1.10.3.custom_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
            // asset "ac02054_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_4") : $this->env->getExtension('assets')->getAssetUrl("js/ac02054_part_3_jquery.backstretch.min_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
        } else {
            // asset "ac02054"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054") : $this->env->getExtension('assets')->getAssetUrl("js/ac02054.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "
    ";
        // line 34
        // asset "7dace82"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7dace82") : $this->env->getExtension('assets')->getAssetUrl("css/7dace82.css");
        // line 39
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        unset($context["asset_url"]);
        // line 41
        echo "
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <link rel=\"icon\" href=";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/onnaesopgames/images/favicon.ico"), "html", null, true);
        echo " type=”image/x-icon”v>
</head>
<body>
<div id=\"navbar\">
    <!-- Fixed navbar -->
    ";
        // line 52
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("ONNAesopGamesBundle:Page:Navbar"), array());
        // line 53
        echo "</div>

<div id=\"main\">
    ";
        // line 56
        $this->displayBlock('main', $context, $blocks);
        // line 58
        echo "</div>

<footer class=\"text-center\" style=\"position:fixed; bottom: 0px; width: 100%;z-index:-1;\">
    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/onnaesopgames/images/aesopgames-small.png"), "html", null, true);
        echo "\">
    <p style=\"color:white\">&copy; Aesop Games 2014</p>
</footer>

<script>
    \$.backstretch('";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/onnaesopgames/images/city.jpg"), "html", null, true);
        echo "');

    function selectMain(path) {
        document.body.style.cursor=\"wait\";
        \$.get( path,
            function(data){
                \$('#main').empty().html(data);
                //the response is in the data variable
                document.body.style.cursor=\"auto\";
                data = null;
                \$.get( '";
        // line 76
        echo $this->env->getExtension('routing')->getPath("navbar");
        echo "',
                    function(data){
                        \$('#navbar').empty().append(data);
                        var stateObj = { foo: \"bar\" };
                        history.replaceState(stateObj, \"Aesop Games\", path);
                    }
                );
            }
        );
        return false;
    }
</script>
</body>
</html>
";
    }

    // line 56
    public function block_main($context, array $blocks = array())
    {
        // line 57
        echo "    ";
    }

    public function getTemplateName()
    {
        return "ONNAesopGamesBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 57,  169 => 56,  150 => 76,  137 => 66,  129 => 61,  124 => 58,  122 => 56,  117 => 53,  115 => 52,  107 => 47,  99 => 41,  93 => 39,  90 => 34,  87 => 33,  49 => 31,  45 => 26,  20 => 3,  36 => 7,  31 => 4,  28 => 3,);
    }
}
