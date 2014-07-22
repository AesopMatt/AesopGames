<?php

/* ONNAesopGamesBundle:Page:index.html.twig */
class __TwigTemplate_3c5ea367f6300611fc2798d5558ced3f9cb8f802d183f1e570bddd23ac9893a2 extends Twig_Template
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

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\" style=\"z-index:100;padding-bottom:60px; opacity: .8; background: #eeeeee url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/onnaesopgames/images/brunelleschiBanner01.jpg"), "html", null, true);
        echo "') top center no-repeat; padding-top: 250px;\">
        <h1 style=\"display:inline\">Brunelleschi: <span style=\"font-style:italic;font-size:smaller\">Age of Architects</span></h1>
        <p><b>Brunelleschi: Age of Architects</b> is a new strategy webgame featuring multiple character type, classes, and the ability to build and lead huge settlements full of active players! It's completely free to play, and all premium items can be obtained through gameplay! Give it a try today, see if you've got what it takes to conquer the Mythic Renaissance!</p>
        <div class=\"alert alert-danger\">
            <h4>Temporarily Outage</h4>
            Due to an ongoing series of errors on the part of Interserver, the brunegame.com domain is currently inaccessible.  This is being resolved as quickly as we are able.  Thank you for your patience.
        </div>
        <a target=\"_blank\" href=\"http://brunegame.com\" class=\"btn btn-primary btn-lg pull-right\" role=\"button\">Play Now &raquo;</a>
    </div>
</div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "ONNAesopGamesBundle:Page:index.html.twig";
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
