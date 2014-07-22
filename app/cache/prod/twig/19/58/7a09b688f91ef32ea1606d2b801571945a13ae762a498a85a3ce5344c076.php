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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "page"), "method") == "index")) {
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "page"), "method") == "about")) {
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "page"), "method") == "games")) {
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
                <li ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "page"), "method") == "contact")) {
            echo " class=\"active\" ";
        }
        echo ">
                    <a href=\"#\" onclick=\"selectMain('";
        // line 27
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
        return array (  79 => 27,  73 => 26,  65 => 21,  59 => 20,  54 => 18,  48 => 17,  43 => 15,  37 => 14,  30 => 10,  19 => 1,  172 => 57,  169 => 56,  150 => 76,  137 => 66,  129 => 61,  124 => 58,  122 => 56,  117 => 53,  115 => 52,  107 => 47,  99 => 41,  93 => 39,  90 => 34,  87 => 33,  49 => 31,  45 => 26,  20 => 3,  36 => 7,  31 => 4,  28 => 3,);
    }
}
