<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_9078edfe143450261f647b2482adacfc727b8de3f554e546162c073ec22f5691 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  80 => 32,  73 => 31,  65 => 21,  59 => 20,  54 => 18,  48 => 17,  43 => 15,  37 => 14,  30 => 5,  19 => 1,  223 => 108,  220 => 107,  201 => 127,  188 => 117,  175 => 109,  173 => 107,  168 => 104,  158 => 98,  150 => 92,  144 => 90,  141 => 85,  138 => 84,  100 => 82,  96 => 77,  20 => 3,  540 => 305,  530 => 301,  526 => 300,  520 => 297,  516 => 295,  512 => 294,  502 => 286,  493 => 284,  489 => 283,  482 => 278,  476 => 274,  469 => 269,  463 => 265,  459 => 264,  455 => 263,  451 => 262,  439 => 253,  429 => 246,  418 => 238,  405 => 228,  398 => 224,  391 => 219,  378 => 208,  371 => 204,  358 => 194,  351 => 189,  347 => 186,  338 => 184,  334 => 183,  329 => 181,  322 => 176,  311 => 167,  304 => 162,  289 => 149,  282 => 144,  276 => 140,  272 => 139,  258 => 128,  251 => 123,  242 => 116,  227 => 104,  213 => 92,  207 => 87,  198 => 84,  189 => 83,  186 => 82,  183 => 81,  180 => 112,  177 => 79,  174 => 78,  170 => 77,  166 => 103,  157 => 72,  148 => 71,  145 => 70,  142 => 69,  139 => 68,  136 => 67,  133 => 66,  129 => 65,  125 => 63,  116 => 60,  107 => 59,  104 => 58,  101 => 57,  98 => 56,  95 => 55,  92 => 54,  88 => 53,  69 => 37,  62 => 24,  31 => 4,  28 => 3,);
    }
}
