<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_8769d837d902d88e426841196c97b243f17f88d0fb8727681a16e0e2d7dfb501 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  80 => 32,  73 => 31,  65 => 21,  59 => 20,  54 => 18,  48 => 17,  43 => 15,  37 => 14,  30 => 5,  19 => 1,  223 => 108,  220 => 107,  201 => 127,  188 => 117,  175 => 109,  173 => 107,  168 => 104,  158 => 98,  150 => 92,  144 => 90,  141 => 85,  138 => 84,  100 => 82,  96 => 77,  20 => 3,  540 => 305,  530 => 301,  526 => 300,  520 => 297,  516 => 295,  512 => 294,  502 => 286,  493 => 284,  489 => 283,  482 => 278,  476 => 274,  469 => 269,  463 => 265,  459 => 264,  455 => 263,  451 => 262,  439 => 253,  429 => 246,  418 => 238,  405 => 228,  398 => 224,  391 => 219,  378 => 208,  371 => 204,  358 => 194,  351 => 189,  347 => 186,  338 => 184,  334 => 183,  329 => 181,  322 => 176,  311 => 167,  304 => 162,  289 => 149,  282 => 144,  276 => 140,  272 => 139,  258 => 128,  251 => 123,  242 => 116,  227 => 104,  213 => 92,  207 => 87,  198 => 84,  189 => 83,  186 => 82,  183 => 81,  180 => 112,  177 => 79,  174 => 78,  170 => 77,  166 => 103,  157 => 72,  148 => 71,  145 => 70,  142 => 69,  139 => 68,  136 => 67,  133 => 66,  129 => 65,  125 => 63,  116 => 60,  107 => 59,  104 => 58,  101 => 57,  98 => 56,  95 => 55,  92 => 54,  88 => 53,  69 => 37,  62 => 24,  31 => 4,  28 => 3,);
    }
}
