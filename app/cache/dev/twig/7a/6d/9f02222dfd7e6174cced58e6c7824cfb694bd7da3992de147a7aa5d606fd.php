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

    ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ac02054_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ac02054_jquery-1.8.0.min_1.js");
            // line 15
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
            // asset "ac02054_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ac02054_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
            // asset "ac02054_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ac02054_part_3_bootstrap_1.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
            // asset "ac02054_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ac02054_part_3_jquery-ui-1.10.3.custom_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
            // asset "ac02054_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ac02054_part_3_jquery.backstretch.min_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
        } else {
            // asset "ac02054"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac02054") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ac02054.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" filter='yui_js'></script>
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
    ";
        // line 18
        // asset "7dace82"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7dace82") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7dace82.css");
        // line 23
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        unset($context["asset_url"]);
        // line 25
        echo "
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <link rel=\"icon\" href=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/onnaesopgames/images/favicon.ico"), "html", null, true);
        echo " type=”image/x-icon”v>
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
        @font-face { font-family: Almendra; src: url('http://fonts.googleapis.com/css?family=Almendra+SC'); }

        .almendra {
            font-family: Almendra !important;
        }

        .btn-custom-success {
            color: #FFFFFF !important;
            background-color: #9FD4A2 !important;
            border-color: #306630 !important;
        }

        .btn-custom-success:hover,
        .btn-custom-success:focus,
        .btn-custom-success:active,
        .btn-custom-success.active,
        .open .dropdown-toggle.btn-custom-success {
            color: #FFFFFF;
            background-color: #42B330;
            border-color: #306630;
        }

        .btn-custom-success:active,
        .btn-custom-success.active,
        .open .dropdown-toggle.btn-custom-success {
            background-image: none;
        }

        .btn-custom-success.disabled,
        .btn-custom-success[disabled],
        fieldset[disabled] .btn-custom-success,
        .btn-custom-success.disabled:hover,
        .btn-custom-success[disabled]:hover,
        fieldset[disabled] .btn-custom-success:hover,
        .btn-custom-success.disabled:focus,
        .btn-custom-success[disabled]:focus,
        fieldset[disabled] .btn-custom-success:focus,
        .btn-custom-success.disabled:active,
        .btn-custom-success[disabled]:active,
        fieldset[disabled] .btn-custom-success:active,
        .btn-custom-success.disabled.active,
        .btn-custom-success[disabled].active,
        fieldset[disabled] .btn-custom-success.active {
            background-color: #9FD4A2;
            border-color: #306630;
        }

        .btn-custom-success .badge {
            color: #9FD4A2;
            background-color: #FFFFFF;
        }
        .btn-custom {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.428571429;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            margin-bottom: 10px;
        }
        .btn {
            margin-bottom: 10px;
        }

        .btn-custom:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        .btn-custom:hover,
        .btn-custom:focus {
            color: #333333;
            text-decoration: none;
        }

        .btn-custom:active,
        .btn-custom.active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        }

    </style>
</head>
<body>
<div id=\"navbar\">
    <!-- Fixed navbar -->
    ";
        // line 148
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("ONNAesopGamesBundle:Page:Navbar"), array());
        // line 149
        echo "</div>

<div id=\"main\">
    ";
        // line 152
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "</div>

<footer class=\"text-center\" style=\"position:fixed; bottom: 0px; width: 100%;z-index:-1;\">
    <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/onnaesopgames/images/aesopgames-small.png"), "html", null, true);
        echo "\">
    <p style=\"color:white\">&copy; Aesop Games 2014</p>
</footer>

<script>
    \$.backstretch('";
        // line 162
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
        // line 172
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

    // line 152
    public function block_main($context, array $blocks = array())
    {
        // line 153
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
        return array (  268 => 153,  265 => 152,  246 => 172,  233 => 162,  225 => 157,  220 => 154,  218 => 152,  213 => 149,  211 => 148,  91 => 31,  83 => 25,  77 => 23,  74 => 18,  71 => 17,  33 => 15,  29 => 10,  20 => 3,);
    }
}
