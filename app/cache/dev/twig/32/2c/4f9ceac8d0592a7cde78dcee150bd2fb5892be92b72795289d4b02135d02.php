<?php

/* ONNAesopGamesBundle:Page:games.html.twig */
class __TwigTemplate_322c4f9ceac8d0592a7cde78dcee150bd2fb5892be92b72795289d4b02135d02 extends Twig_Template
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
            <p>
                Brunelleschi is currently in 'Bootstrap Beta', so if you've found us, please be prepared for some UI disruption and occasional bugs. Characters will not be deleted from this server (the live server) at any point, so progress made will persist indefinitely. Thanks for playing, please feel free to contact us on Twitter(@AgeOfArchitects) or through e-mail at support@aesopgames.com
            </p>
            <a target=\"_blank\" href=\"http://brunegame.com\" class=\"btn btn-primary btn-lg pull-right\" role=\"button\">Play Now &raquo;</a>
            ";
        // line 17
        echo "        </div>
            <div style=\"clear:both\"></div>
        <div class=\"row\">
        <div class=\"alert alert-success ui-corner-all text-center\">
            <h3>Credits</h3><hr>
            <div style=\"clear:both\"></div>
        </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Current Version</h3>
                    </div>
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Matt Mitchum, designer</li>
                            <li class=\"list-group-item\">Margaret Staples, programmer</li>
                            <li class=\"list-group-item\">Rebecca Nicol, art-coordinator</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4 col-sm-offset-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Version Alpha (2009)</h3>
                    </div>
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Matt Mitchum*, designer (2006-)</li>
                            <li class=\"list-group-item\">Margaret Staples*, project-manager (2006-)</li>
                            <li class=\"list-group-item\">Marcia Burrows*, programmer (2008-)</li>
                            <li class=\"list-group-item\">Sheetal Goyal, programmer (2009)</li>
                            <li class=\"list-group-item\">Eli Owens*, art-director (2007-)</li>
                            <li class=\"list-group-item\">Vangelis Drosos, artist (2009)</li>
                            <li class=\"list-group-item\">Stig Geukens (2009)</li>
                            <li class=\"list-group-item\">Sarah Shaw, artist (2009)</li>
                            <li class=\"list-group-item\">Texic, artist (2009)</li>
                            <li class=\"list-group-item\">Darren Gears, artist (2009)</li>
                            <li class=\"list-group-item\">Angela Dunn, artist (2009)</li>
                        </ul>
                        <div class=\"alert alert-info alert-dismissable\">
                            <small>Several years back, just before and as the economy was crashing, we attempted this design with a larger team.  Much of the art created is still used, and all contributions made in the first attempt are still appreciated.  If someone who threw in on that project has been missed here, please let us know so that we can include them.</small><hr>
                            <small>*Tweetlord Alumni</small>
                        </div>
                    </div>
                </div>
            </div>
    </div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "ONNAesopGamesBundle:Page:games.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 108,  188 => 117,  180 => 112,  175 => 109,  150 => 92,  100 => 82,  20 => 3,  65 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 107,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 17,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 127,  196 => 90,  183 => 82,  171 => 61,  166 => 103,  163 => 62,  158 => 98,  156 => 66,  151 => 63,  142 => 59,  138 => 84,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 77,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 15,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 107,  168 => 104,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 90,  141 => 85,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 32,  73 => 31,  64 => 17,  60 => 6,  57 => 11,  54 => 18,  51 => 14,  48 => 17,  45 => 17,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 10,);
    }
}
