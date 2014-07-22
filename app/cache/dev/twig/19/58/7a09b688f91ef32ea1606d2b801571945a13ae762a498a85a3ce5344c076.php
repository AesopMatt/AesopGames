<?php

/* ONNAesopGamesBundle:Navbar:navbar.html.twig */
class __TwigTemplate_19587a09b688f91ef32ea1606d2b801571945a13ae762a498a85a3ce5344c076 extends Twig_Template
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
        echo "<div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\" onclick=\"selectMain('";
        // line 10
        echo $this->env->getExtension('routing')->getPath("index");
        echo "')\">Aesop Games</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "page"), "method") == "index")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"#\" onclick=\"selectMain('";
        // line 15
        echo $this->env->getExtension('routing')->getPath("index");
        echo "')\">
                        Home</a></li>
                <li ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "page"), "method") == "about")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"#\" onclick=\"selectMain('";
        // line 18
        echo $this->env->getExtension('routing')->getPath("about");
        echo "')\">
                        About</a></li>
                <li ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "page"), "method") == "games")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"#\" onclick=\"selectMain('";
        // line 21
        echo $this->env->getExtension('routing')->getPath("games");
        echo "')\">
                        Games</a></li>
                <li>
                    <a href=\"http://brunegame.blogspot.com/\" target=\"_blank\">
                        Blog</a></li>
                ";
        // line 31
        echo "                <li ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "page"), "method") == "contact")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"#\" onclick=\"selectMain('";
        // line 32
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "')\">
                        Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ONNAesopGamesBundle:Navbar:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  73 => 31,  65 => 21,  59 => 20,  54 => 18,  48 => 17,  43 => 15,  37 => 14,  30 => 10,  19 => 1,  223 => 108,  220 => 107,  201 => 127,  188 => 117,  175 => 109,  173 => 107,  168 => 104,  158 => 98,  150 => 92,  144 => 90,  141 => 85,  138 => 84,  100 => 82,  96 => 77,  20 => 3,  540 => 305,  530 => 301,  526 => 300,  520 => 297,  516 => 295,  512 => 294,  502 => 286,  493 => 284,  489 => 283,  482 => 278,  476 => 274,  469 => 269,  463 => 265,  459 => 264,  455 => 263,  451 => 262,  439 => 253,  429 => 246,  418 => 238,  405 => 228,  398 => 224,  391 => 219,  378 => 208,  371 => 204,  358 => 194,  351 => 189,  347 => 186,  338 => 184,  334 => 183,  329 => 181,  322 => 176,  311 => 167,  304 => 162,  289 => 149,  282 => 144,  276 => 140,  272 => 139,  258 => 128,  251 => 123,  242 => 116,  227 => 104,  213 => 92,  207 => 87,  198 => 84,  189 => 83,  186 => 82,  183 => 81,  180 => 112,  177 => 79,  174 => 78,  170 => 77,  166 => 103,  157 => 72,  148 => 71,  145 => 70,  142 => 69,  139 => 68,  136 => 67,  133 => 66,  129 => 65,  125 => 63,  116 => 60,  107 => 59,  104 => 58,  101 => 57,  98 => 56,  95 => 55,  92 => 54,  88 => 53,  69 => 37,  62 => 33,  31 => 4,  28 => 3,);
    }
}
