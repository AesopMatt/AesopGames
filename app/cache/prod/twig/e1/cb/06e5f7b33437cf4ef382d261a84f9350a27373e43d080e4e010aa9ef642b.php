<?php

/* ONNAesopGamesBundle:Page:about.html.twig */
class __TwigTemplate_e1cb06e5f7b33437cf4ef382d261a84f9350a27373e43d080e4e010aa9ef642b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ONNAesopGamesBundle::layout.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ONNAesopGamesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container theme-showcase\">
        <div class=\"jumbotron\" style=\"opacity: .8;padding:10px;z-index:100;\">
            <p style=\"display:inline\"><b>Brunelleschi: Age of Architects</b> Bootstrap Beta</p>
            <a target=\"_blank\" href=\"#\" onclick=\"selectMain('";
        // line 7
        echo $this->env->getExtension('routing')->getPath("support");
        echo "')\" class=\"btn btn-success btn-lg pull-right\" role=\"button\">Support &raquo;</a>
            <a target=\"_blank\" href=\"http://brunegame.com\" class=\"btn btn-primary btn-lg pull-right\" role=\"button\">Play Now &raquo;</a>
        </div>
        <div class=\"page-header\">
            <h1>Aesop Games</h1>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Who We Are</h3>
                    </div>
                    <div class=\"panel-body\">
                        While the title and content for these areas are expected to change, I thought these could serve as a starting place.
                    </div>
                </div>
            </div><!-- /.col-sm-4 -->
            <div class=\"col-sm-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">What We Do</h3>
                    </div>
                    <div class=\"panel-body\">
                        We strive to create games which entertain while also actively engaging and stimulating players' critical thinking and imagination.
                    </div>
                </div>
            </div><!-- /.col-sm-4 -->
            <div class=\"col-sm-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Why We Do It</h3>
                    </div>
                    <div class=\"panel-body\">
                        We're passionate about gaming and education, and hope to participate in the perpetual shaping of those fields by generating and exploring new ideas.
                    </div>
                </div>
            </div><!-- /.col-sm-4 -->
        </div>
    </div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "ONNAesopGamesBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
