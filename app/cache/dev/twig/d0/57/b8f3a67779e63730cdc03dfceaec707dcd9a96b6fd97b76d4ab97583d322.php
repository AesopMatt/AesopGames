<?php

/* ONNAesopGamesBundle:Page:support.html.twig */
class __TwigTemplate_d057b8f3a67779e63730cdc03dfceaec707dcd9a96b6fd97b76d4ab97583d322 extends Twig_Template
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
        echo "    <div id=\"fb-root\"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '325678044258995',
                xfbml      : true,
                version    : 'v2.0'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class=\"container theme-showcase\">
        <div class=\"jumbotron\" style=\"opacity: .8;padding:10px;z-index:100;\">
            <p style=\"display:inline\"><b>Brunelleschi: Age of Architects</b> Bootstrap Beta</p>
            <a target=\"_blank\" href=\"http://brunegame.com\" class=\"btn btn-primary btn-lg pull-right\" role=\"button\">Play Now &raquo;</a>
        </div>
        <div class=\"page-header\" style=\"margin-top:0px;\">
            <h1 class=\"pull-left almendra\" style=\"margin:0px;padding:0px; color:white; font-size: 48px; font-weight:bold;\">Support Aesop Games</h1>

            <div style=\"background: white; border: solid green 3px; width:130px;text-align:center; padding: 5px;margin-bottom:10px;\" class=\"ui-corner-all pull-right\">
                <a href=\"http://twitter.com/share?text=Support games made by folks who want you to love playing them!&url=http://aesopgames.com/app.php/support\" target=\"_blank\" title=\"Share This on Twitter\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["twitter_image"]) ? $context["twitter_image"] : $this->getContext($context, "twitter_image"))), "html", null, true);
        echo "\" style=\"width:32px; height: 32px\">
                </a>

                <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u=http://aesopgames.com/app/php/support'+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
                <a href=\"http://www.facebook.com/share.php?u=<full page url to share>\" onClick=\"return fbs_click()\" target=\"_blank\" title=\"Share This on Facebook\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["facebook_image"]) ? $context["facebook_image"] : $this->getContext($context, "facebook_image"))), "html", null, true);
        echo "\" alt=\"facebook\" width=\"32\" height=\"32\" border=\"0\" /></a>

                <a href=\"https://plus.google.com/share?url=http://aesopgames.com/app.php/support\" onclick=\"javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\"><img
                            src=\"https://www.gstatic.com/images/icons/gplus-32.png\" alt=\"Share on Google+\" title=\"Share This on Google+\"/></a>
            </div>
            <div style=\"clear:both\"></div>
            <div class=\"alert alert-success\" style=\"border: green 2px solid; opacity: .9;\">
                <h4>Aesop Games is working to raise funds for completing Brunelleschi: Age of Architects and embarking on new projects!</h4>
                <p>Information on our team, project, and progress put together towards that effort as well as perks available to supporters will be updated here.</p>
                <p>If you have already supported us through an online campaign, but see a similarly priced Perk here that you would rather have, get in touch and we will be happy to update your reserved Perk.</p>
                <p style=\"font-weight:bold; text-align:right; margin-right:10px;margin-top:10px;\">Jump to information about <a>the Game</a>, <a>the Team</a>, <a>the Perks</a>, <a>the Stretch Goals</a>.</p>
            </div>
        </div>
        <div class=\"row\" style=\"margin-bottom: 10px;\">
            <div class=\"col-md-4 text-center\">
                ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fundraisers"]) ? $context["fundraisers"] : $this->getContext($context, "fundraisers")), "rockethub"));
        foreach ($context['_seq'] as $context["type"] => $context["image"]) {
            // line 54
            echo "                    ";
            if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "live") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "stretch"))) {
                // line 55
                echo "                        ";
                $context["button_class"] = "btn-custom btn-custom-success";
                // line 56
                echo "                    ";
            } else {
                // line 57
                echo "                        ";
                $context["button_class"] = "btn btn-default";
                // line 58
                echo "                    ";
            }
            // line 59
            echo "                    <button class=\"btn-large ";
            echo twig_escape_filter($this->env, (isset($context["button_class"]) ? $context["button_class"] : $this->getContext($context, "button_class")), "html", null, true);
            echo "\" ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "comingsoon")) {
                echo "disabled=\"disabled\"";
            }
            echo " style=\"opacity: .9\">
                    <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" class=\"img-rounded\" style=\"height: 104px; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                    </button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </div>
            <div class=\"col-md-4 text-center\">
                ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fundraisers"]) ? $context["fundraisers"] : $this->getContext($context, "fundraisers")), "indiegogo"));
        foreach ($context['_seq'] as $context["type"] => $context["image"]) {
            // line 66
            echo "                    ";
            if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "live") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "stretch"))) {
                // line 67
                echo "                        ";
                $context["button_class"] = "btn-custom btn-custom-success";
                // line 68
                echo "                    ";
            } else {
                // line 69
                echo "                        ";
                $context["button_class"] = "btn btn-default";
                // line 70
                echo "                    ";
            }
            // line 71
            echo "                    <button class=\"btn-large ";
            echo twig_escape_filter($this->env, (isset($context["button_class"]) ? $context["button_class"] : $this->getContext($context, "button_class")), "html", null, true);
            echo "\" ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "comingsoon")) {
                echo "disabled=\"disabled\"";
            }
            echo " style=\"opacity: .9\">
                        <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" class=\"img-rounded\" style=\"height: 104px; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                    </button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </div>
            <div class=\"col-md-4 text-center\">
                ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fundraisers"]) ? $context["fundraisers"] : $this->getContext($context, "fundraisers")), "kickstarter"));
        foreach ($context['_seq'] as $context["type"] => $context["image"]) {
            // line 78
            echo "                    ";
            if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "live") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "stretch"))) {
                // line 79
                echo "                        ";
                $context["button_class"] = "btn-custom btn-custom-success";
                // line 80
                echo "                    ";
            } else {
                // line 81
                echo "                        ";
                $context["button_class"] = "btn btn-default";
                // line 82
                echo "                    ";
            }
            // line 83
            echo "                    <button class=\"btn-large ";
            echo twig_escape_filter($this->env, (isset($context["button_class"]) ? $context["button_class"] : $this->getContext($context, "button_class")), "html", null, true);
            echo "\" ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "comingsoon")) {
                echo "disabled=\"disabled\"";
            }
            echo " style=\"opacity: .9\">
                        <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" class=\"img-rounded\" style=\"height: 104px; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                    </button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 92
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">A Brief Intro to The Team and The Project</h3>
                    </div>
                    <div class=\"panel-body\">
                        <p>We are a small team with two chief motivations: making <b>interesting games</b> and making our programmer a <b>better cyborg</b>.  We make games because:</p>

                        <li>Making games is incredibly intellectually stimulating!</li>
                        <li>Matt has always loved to make games for people.</li>
                        <li>Rebecca's lifelong passion for visual art and storytelling has found a happy home in game development.</li>
                        <li>Margaret has a degenerating spinal injury which interferes with most things that aren't programming.</li><br/>

                        <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["team_image"]) ? $context["team_image"] : $this->getContext($context, "team_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"margin-left:auto;margin-right:auto; margin-bottom: 10px; display:block\">

                        <h4 style=\"display:inline; margin-top:10px;\">Brunelleschi</h4><p style=\"display:inline;\"> is a social strategy role playing game set in the mythic renaissance where brave and daring Heroes adventure and advance in the cities, economies, and cultures constructed by teams of brilliant Lords.</p><br/>

                        <p style=\"margin-top:10px;\"><b>Characters in Brunelleschi are either Heroes or Lords</b>. Lords are intended to manage Settlements, serving as Sovereigns and Ministers and providing powerful bonuses to all the Citizens of their Settlement. Heroes are somewhat more powerful in Combat and are able to access a variety of abilities that are not available to Lords.</p>

                        <p>Both types of Characters are able to benefit from acquiring the best <b>Equipment</b> they can access from the more than <b>900 varieties</b> available.</p>

                        <p>The Construction and Management of Settlements is a major factor of Brunelleschi’s Gameplay, with <b>195 Buildings and 65 Distinct Districts</b> to choose from, we’re unlikely to run out of unique combinations this decade!</p>

                        <p>Each District in a Settlement can employ a Minister, a major element of Gameplay, which allow Lords to work together to build impressive Settlements that a single player could never effectively manage.  A Sovereign can benefit from up to <b>49 friends</b> assisting them as Ministers and Resident Heroes in their shared epic journey through a Historical Fantasy Renaissance.</p>

                        <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["map_image"]) ? $context["map_image"] : $this->getContext($context, "map_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 10px; margin-bottom: 10px; display:block\">
                        <p>Any support we receive will help us to complete <b>Brunelleschi: Age of Architects</b> and to create other fun game projects to share.  Any success we achieve through our games will be turned into:</p>
                        <li style=\"list-style: none;\">1) more awesome games and</li>
                        <li style=\"list-style: none;\">2) a bionic spine, robot body, or closest medical treatments available to get Margaret some mobility and independence.</li>
                    </div>
                </div>
                ";
        // line 123
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">The State of Development</h3>
                    </div>
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["development_image"]) ? $context["development_image"] : $this->getContext($context, "development_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                        <p>We already have most of the resources that we need to <b>complete the game</b> as outlined minimally in the Roadmap and will happily continue to do so even if this campaign is not successful. We have been working on Brunelleschi for a few years and can continue to develop at a moderate pace with the technology already at our disposal.</p>
                        <p>In order to <b>continue making games</b> we will need to stay up off the bottom of Maslow's pyramid.  While we have and will continue to make progress, every bit of help we get translates to less time spent meeting basic needs, and more time <b>making things work</b> in the game :)</p>
                        <p>Initial funds will go to paying for the test and beta servers</p>
                        <p>Subsequent funds will be used for development services and software</p>
                        <p>Once overhead is covered we will be able to use additional support to start paying ourselves to complete Brunelleschi and start additional games!</p>

                        <h3>What you get from all this is</h3>
                        <ul style=\"list-style: none\">1) games made by people who want you to <b>love playing</b> them,</ul>
                        <ul style=\"list-style: none\">2) knowledge that you made the world a better place by helping someone help themselves, and</ul>
                        <ul style=\"list-style: none\">3) our sincere gratitude expressed through the perk of your choice (and living in our hearts forever).</ul>
                        <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["plat_panel"]) ? $context["plat_panel"] : $this->getContext($context, "plat_panel"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 10px; margin-bottom: 10px; display:block\">
                        <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["badge_panel"]) ? $context["badge_panel"] : $this->getContext($context, "badge_panel"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 10px; margin-bottom: 10px; display:block\">
                    </div>
                </div>
                ";
        // line 144
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Risks and Challenges</h3>
                    </div>
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["challenge_image"]) ? $context["challenge_image"] : $this->getContext($context, "challenge_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                        <p>The beta version of Brunelleschi is available and free to play at <a target=\"_blank\" href=\"http://brunegame.com\">brunegame.com</a>, and we are committed to finishing the web version of the game regardless of the outcome of this campaign.  Should both the programmer and the designer suffer (additional) severe injury or death, progress on the game might stagnate; however, even in such an extreme situation the game might still be completed because:</p>
                        <ul>
                        <li>This game will be open sourced.</li>
                        <li>All code and image assets will be released on a three year delay from commit starting with commits made January of this year.</li>
                        <li>Documentation on getting a version of the game server up will be included in the open source release.</li>
                        <li>Admin tools have been built into the game to allow future administrators to customize the game even without needing to understand the code.</li>
                        <li>Since the game has been built in a well known framework, anyone with a strong desire to pick up and complete the project should be able to use existing documentation to do it.</li>
                        </ul>
                        <p>While the Beta server hasn't been totally immune to minor data loss, no Characters or Settlements have ever been deleted unintentionally and we've always been able to track down lost items and buildings quickly. The game is backed up frequently and we are generally quick to notice irregularities, but we do acknowledge that loss of hard earned digital property can occur, and is very frustrating.</p>
                    </div>
                </div>
                ";
        // line 162
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Instant Rewards</h3>
                    </div>
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["instant_image"]) ? $context["instant_image"] : $this->getContext($context, "instant_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                        <p>Some of the Rewards available to Supporters are 'Instant' in that they are game awards which we already have the infrastructure to provide, meaning we will deliver them as soon as we are able once the Campaign is complete and the contributions processed.</p>

                        <p>All contributors receive our Special Thanks and a Kickstarter Badge signifying their contribution to the Game.  Where their Special Thanks appear and the appearance and title of their Badge are determined by the level of contribution.  Supporters who provide Character information will receive these tokens of our appreciation both in the Live Beta, as soon as we are able, and in the launch server at version 1.0.</p>

                        <p>Contributors also all receive some amount of the Game's premium currency, Platinum Hyperpyrons.  This premium coin will be awarded both in the Live Beta at the completion of this Campaign, and then again in the 1.0 launch (at a rate up to a monthly maximum determined by the size of the active player base).</p>
                    </div>
                </div>
                ";
        // line 176
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Rewards Calendar</h3>
                    </div>
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["rewards_image"]) ? $context["rewards_image"] : $this->getContext($context, "rewards_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                        <p> For those Rewards which we are unable to deliver \"Instantly\", we have done our best to provide accurate delivery estimates!</p>
                        ";
        // line 183
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendar_images"]) ? $context["calendar_images"] : $this->getContext($context, "calendar_images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 184
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 10px; margin-bottom: 0px; display:block\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                    </div>
                </div>
                ";
        // line 189
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">How You Can Help</h3>
                    </div>
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["help_image"]) ? $context["help_image"] : $this->getContext($context, "help_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                        <p>Whether you are able to contribute today or not you can still help!  Please, spread the word about our campaign and about our game!  Folks may be into interesting new games, supporting entrepreneurship, or upgrading cyborgs, but they have to know what we're up to to be able to help!  So please,</p>
                        <ul>
                            <li>Tell folks about what we're doing!</li>
                            <li>Share this campaign through the built in options!</li>
                            <li>And point your gamer friends at our beta - the more players the better!</li>
                        </ul>

                        <div style=\"margin-left:auto;margin-right:auto;width:200px;text-align:center\">
                        <a href=\"http://twitter.com/share?text=Support games made by folks who want you to love playing them!&url=http://aesopgames.com/app.php/support\" target=\"_blank\" title=\"Share This on Twitter\">
                            <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["twitter_image"]) ? $context["twitter_image"] : $this->getContext($context, "twitter_image"))), "html", null, true);
        echo "\" style=\"width:64px; height: 64px\">
                        </a>

                        <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u=http://aesopgames.com/app/php/support'+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
                        <a href=\"http://www.facebook.com/share.php?u=<full page url to share>\" onClick=\"return fbs_click()\" target=\"_blank\" title=\"Share This on Facebook\"><img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["facebook_image"]) ? $context["facebook_image"] : $this->getContext($context, "facebook_image"))), "html", null, true);
        echo "\" alt=\"facebook\" width=\"64\" height=\"64\" border=\"0\" /></a>

                        <a href=\"https://plus.google.com/share?url=http://aesopgames.com/app.php/support\" onclick=\"javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\"><img
                                    src=\"https://www.gstatic.com/images/icons/gplus-64.png\" alt=\"Share on Google+\" title=\"Share This on Google+\"/></a>
                        </div>
                        <p>Thank you for reading!</p>
                        <p>Please, get in touch if you have any questions or feedback :)</p>
                    </div>
                </div>
                ";
        // line 219
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Looking Forward</h3>
                    </div>
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["forward_image"]) ? $context["forward_image"] : $this->getContext($context, "forward_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                        <p>Brunelleschi’s rich feature set will eventually be extended with a variety of ‘add-on’ features such as the establishment and management of Colonies, additional Social and Historical elements like Religious Conversion and extended Dynastic Lineages.</p>

                        <p>The game is an Evolving entity that is constantly being improved by the suggestions and feedback of our beta testers. In future, we hope to be able to go beyond the extensive features outlined in the Roadmap to add a 3D Unity Client, a 2D Unity Mobile Client, and many other interesting expansions outlined in the stretch goals.</p>
                        <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["game_property"]) ? $context["game_property"] : $this->getContext($context, "game_property"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; display:block\">

                        <div style=\"width:80%; margin-left:auto;margin-right:auto;\">
                            <p>Any Character in Brunelleschi can own property.  When a Settlement in Brunelleschi is first founded, all that empty potential belongs to the founding Sovereign character.  If that Sovereign brings on Ministers to help them manage and expand their Settlement, those Ministers gain governance over the Sovereign's buildings and plots in the Districts they Administer.</p>

                            <p>All Character Classes gain the ability to Buy and Sell Property at some level.  Ministers and Sovereigns can choose to sell buildings or empty plots under their governance, and any Character which has previously purchased private property may then sell it.  Buildings may be destroyed and replaced, or have more resources invested in upgrading their construction to improve their output and bonuses.</p>

                            <p>Depending on rules set by the Sovereigns of each Settlement, a single Character may purchase and administer property in multiple settlements, although there are trade offs in productivity.</p>
                        </div>

                        <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["game_craft"]) ? $context["game_craft"] : $this->getContext($context, "game_craft"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; display:block\">
                        <div style=\"width:80%; margin-left:auto;margin-right:auto;\">
                            <p>In many ways the production chain is the core of the Brunelleschi Economy.  Resources can be Harvested by Character actions and by NPC staffed buildings.  Those Resources can then be Processed into Goods at the appropriate Processing Buildings, and then used to create a wide variety of Equipment at various Crafting Buildings.</p>

                            <p>Resources and Goods are both additionally used in the Construction and Upkeep of Buildings, the Upkeep of Equipment and Units, to access some actions, and to contribute to some group Scenarios.</p>

                            <p>All game items can be bought, sold, and traded through the extensive markets, as well as through the Direct Trade action which allows complex one on one negotiations.</p>
                        </div>
                        <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["game_bond"]) ? $context["game_bond"] : $this->getContext($context, "game_bond"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; display:block\">
                        <div style=\"width:80%; margin-left:auto;margin-right:auto;\">
                            <h5>Relationships between Characters are a big part of Brunelleschi.</h5>

                            <p>Through a variety of Social actions Characters develop relationships both between each other and between their Settlements if they are not in the same one.  These Relationships can be made official through declarations of Friendship, Enmity, becoming Lovers, accepting a Handfasting, or becoming Married.  Enemy Characters may fight each other in Duels, wracking up kills and deaths, while Handfasted or Married Characters have Diplomatic benefits and limitations from their bond.</p>
                        </div>

                        <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["game_diplomacy"]) ? $context["game_diplomacy"] : $this->getContext($context, "game_diplomacy"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; display:block\">
                        <div style=\"width:80%; margin-left:auto;margin-right:auto;\">
                            <p>Diplomatic relationships between Settlements can have a huge impact on Gameplay.  For example, a Trade Treaty can bolster both economies by allowing trade between Residents of both Settlements as if they were local; whereas an Embargo prevents trade between them.</p>

                            <p>Negative Diplomatic relationships can lead to War, a costly business requiring a lot of well prepared Character support, and which can lead to building destruction, looting, and eventually even the occupation of Districts and toppling of governments.</p>

                            <p>Alliances between Settlements with positive relationships prevent hostile actions from being initiated between them, and allow Residents of all Allied Settlements to participate should a District in one be attacked.</p>
                        </div>

                        <img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["game_civics"]) ? $context["game_civics"] : $this->getContext($context, "game_civics"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; display:block\">
                        <div style=\"width:80%;margin-left:auto;margin-right:auto;\">
                            <p>Brunelleschi is not that different from the majority of city building games in that you collect resources and use them to construct Buildings, which then in turn provide Bonuses, Resources, Equipment, Troops, and monetary Income.</p>
                             <p>There are 65 district options in Brunelleschi, though even the largest Settlements will have to chose 50 or less of these. Since each District is composed of Buildings, they can also be customized, making it nearly impossible that 2 settlements will ever be exactly alike.</p>

                            <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["construct_district"]) ? $context["construct_district"] : $this->getContext($context, "construct_district"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 10px; display:block;margin-left:auto;margin-right:auto;\">

                            <p>The Buildings constructed in a Settlement will attract Citizens, both computer-generated NPCs to run the buildings, as well as Human Heroes and Ministers who want to benefit from the Settlement's economy, make use of District Actions, or just enjoy the ambiance or social environment of a Settlement.</p>

                            <p>This is fundamentally a game about player-driven politics and as such we have left all the critical decisions up to the players.</p>
                            <h4>Control over immigration, employment, taxation, warfare, diplomacy, private property, and all other settlement decisions are made by the Sovereign and their Ministers.</h4>
                            <p>Since we couldn't possibly predict everything players would want, we came at the problem from a different angle.</p>

                            <p>Every action a player takes, from harvesting to arson and sabotage, is recorded in their 'Personal Forum'. Some actions are reported in the 'Settlement' forum, which players can even write directly to once they learn to 'Report the News' and other useful civic information services. Anything that occurs in a public forum can be voted on by players, and these votes have a powerful effect on the importance and relationship ratings of the poster and the voter. This becomes especially important when dealing with world and settlement spanning 'Scenarios', as you could suffer badly at the hands of fellow players for triggering an unwanted event such as a Swarm of Locusts.</p>

                            <p>Since it's ultimately the opinions of other players that will decide your character's Importance, and as such their Rank, Lords will have to learn to wield public opinion carefully, and as such we hope that the game approaches a realistic simulation of the sociological forces inherent in civil administration.</p>
                        </div>
                        <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["game_combat"]) ? $context["game_combat"] : $this->getContext($context, "game_combat"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; display:block\">
                        <div style=\"width:80%; margin-left:auto;margin-right:auto;\">
                            <p>For the first 25 levels, everything in Brunelleschi is focused on advancement, around half a week of familiarizing yourself with the interface, possibly posting in the forums a bit, and for Lords building a few initial structures. Once characters hit level 20, they begin to unlock additional 'Life' and 'Aggressive' actions as well as their Class Actions.</p>

                            <h3>Declaring Enmity</h3>
                            <p>By choosing the forum action 'Declare Enmity' and then selecting a target settlement and a character, the groundwork for a duel is established. This sets the relationship between the two characters to 'Enemies' and allows the declaration of duels in the future.</p>

                            <p>There are a large variety of Relationship statuses that characters can have, including Enemies, Neutral, Friends, Lovers, Handfasted, and Married. The latter two options require assistance from a pagan Caster and member of the Clergy respectively.</p>

                            <h3>Challenging an Enemy to a Duel</h3>
                            <p>Once you've declared an enemy and reached level 25 it becomes possible to launch a duel challenge. The other player must accept the duel for combat to initiate, if they refuse they will lose importance relative to the level difference between your characters. If you challenge much lower characters to duels, they can refuse without penalty.</p>

                            <h3>Keeping track of Duels</h3>

                            <p>Characters can always see their active duels and challenges from the 'Duel' tab on their home screen, as well as in their personal forum menu.</p>

                            <h3>Fighting The Duel</h3>

                            <p>Once the duel is accepted, the characters will have options based on their equipment, but at the very minimum the option for 'Close Combat' will always be available, even to unarmed characters. If both characters have chosen a strategy, the round is calculated and the next round's strategy is chosen. This repeats until 10 rounds have passed or someone dies.</p>

                            <h3>Hits and Damage</h3>
                            <p>The character's attributes are calculated to determine hits and damage per round, with a variety of factors such as ranged attacks, spell damage, and melee attacks factored in and displayed in the forum.</p>

                            <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["combat_image"]) ? $context["combat_image"] : $this->getContext($context, "combat_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 10px; display:block;margin-left:auto;margin-right:auto;\">

                            <h3>And on to War</h3>
                            <p>As characters advance beyond level 50 non-consensual PvP becomes possible as Lords gain 'Military Action'. This complex action invokes the 'Military Council' and enables Lords to assemble their Brigades of soldiers. Lords can always train 'Peers' from the population as troops, and Commander classes are able to train Peasants and Yeoman, but these civilian units will be no match for the units produced in an actual training ground. Heroes will have to wait until somewhere between level 150-250 to gain 'Military Action', and the Regiments they lead will allow somewhat less troop variety than Lordly Brigades.</p>

                            <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["equip_unit"]) ? $context["equip_unit"] : $this->getContext($context, "equip_unit"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 10px; display:block;margin-left:auto;margin-right:auto;\">

                            <p>Sovereigns and Minsters have a great deal of control over troop recruitment, and can theoretically turn a profit training and selling units to their Citizens and Allies.</p>

                            <p>Of course, in order to use any of these shiny soldiers against anyone, it will usually be necessary to declare some sort of official war. The Chivalric culture of the Renaissance doesn't really allow for 'Sneak Attacks', though certain higher level characters will be able to flout those rules.</p>

                            <h3>Errant Raids, on the other hand...</h3>
                            <p>Once Lord character hit level 75 they will be able to 'Errant Raid' any settlement in the game, including their own! This can have catastrophic effects on the security of the region, but some Sovereigns may choose to turn a blind eye to their Minsters' raids, or even engage in such things themselves. Errant Raiding a foreign settlement will have negative effects on the Standings between the two settlements, and can serve as a precursor to War. Sovereigns should take care to ensure that their Citizens don't spoil existing treaties with opportunistic raiding.</p>

                            <h3>Competitive Scenarios and War</h3>
                            <p>Competitive Scenarios introduce some friction into the prosaic world of Brunelleschi, asking players to pick a side, Contributing or Detracting from scenarios with their Attributes. The Scenario will have a Threshold, a target number for both attributes that must hit + or - 100% for the Scenario to End.</p>

                            <p>Players can wind up spending a lot of action points this way, and as such the Scenarios usually don't have much in the way of Contribution or Detraction rewards. Only the team able to push the Scenario to the finish line will get completion rewards, and sometimes this will also come with penalties for the losing team. Additionally, the bonus (or penalty) from completion for the whole Settlement or possibly the entire World will be determined by the outcome. </p>

                            <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["scenario_image"]) ? $context["scenario_image"] : $this->getContext($context, "scenario_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 10px; display:block;margin-left:auto;margin-right:auto;\">

                                <p>Some Scenarios create week-long advantages for the winning team, and could be essential to upsetting the balance of power! Other scenarios have greater rewards for the outcome that penalizes the settlement, allowing a small group of players to gain advantage at the expense of everyone else in the Settlement.</p>

                            <h3>Military Scenarios</h3>

                            <p>Military Scenarios are by nature competitive, and will be one of the major uses for high leveled Characters' Action Points. It takes some amount of AP and has potentially other costs which are required for each contribution, and a single Character, even a powerful one, isn't able to make much of a dent in a battle even without active defenders.  Joining in on an attack against an actively defended target would necessitate defeating one such defender in combat before getting to complete a contribution each time.</p>
                            <h4>Large wars will consist of thousands of players in dozens of active scenarios.</h4>

                            <p>You'll need dozens of powerful Heroes and Lords to accomplish even the simplest of Assaults, and that's without any Resistance! Combat favors the Defenders numerically, but then they have nothing to gain and everything to lose.</p>

                            <p>If a combat Scenario ends without completion, we'll have failed to assault and worked ourselves into a quagmire even without resistance. The ensuing 'Standoff' scenario would give the defenders a chance to jump on our mistake and do some damage.</p>
                        </div>

                        <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["game_trade"]) ? $context["game_trade"] : $this->getContext($context, "game_trade"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; display:block\">
                        <div style=\"width:80%; margin-left:auto;margin-right:auto;\">
                            <h3>One of the most interesting aspects of Brunelleschi is the open economy.</h3>
                            <p>The flow of resources, goods, equipment, and currency between the game system and the players and between the players and each other is very open ended - allowing a variety of economic systems to be implemented and played with. Having such an open ended system can be confusing, so I'm going to outline some of the major aspects of it here.</p>

                            <p>From here on I'll refer to game resources, goods, equipment, and currency under the umbrella term 'items'.</p>

                            <p>Items in Brunelleschi can be obtained through a variety of mechanisms:</p>

                            <ul>
                                <li>Actions</li>
                                <li>Buildings</li>
                                <li>Scenarios</li>
                                <li>Markets</li>
                                <li>Trades</li>
                                <li>Donations</li>
                                <li>Taxation</li>
                            </ul>

                            <p>While not all actions, buildings, and scenarios produce items, many of them do.  Actions and scenarios will generate output for anyone utilizing them, while buildings grant their output only to their owner unless they are taxed.</p>

                             <p>Through the markets trades of any items for any other may be offerred or redeemed.  Characters' about pages include options for actions which would target them directly; one such action is Direct Trade which allows for direct trade negotiations between two parties.  Additionally, friends and allies may choose to simply 'donate' items from their inventory which does not require the creation of a market order.</p>

                            <img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["markets_image"]) ? $context["markets_image"] : $this->getContext($context, "markets_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 10px; display:block;margin-left:auto;margin-right:auto;\">

                             <p>There are multiple types of taxation options in the game, which allow a Sovereign to dictate the flow of items in their settlement.  Through the Manage->Government menu, a sovereign may choose to set a specific tax rate on the output of Harvesting buildings and a separate rate for Processing buildings; these route a percentage of the output from those buildings to the Sovereign even if they are overseen by a Minister or even privately owned.</p>

                              <p>A Sovereign may set these rates to 0% to allow Ministers and residents to keep and manage all of their building output, or may even set it to 100% to insure that all such output is routed to the Sovereign's stores.</p>

                              <p>In addition to building output, a Sovereign may choose to tax imports into and exports out of their settlement.  When import or export taxes are set, the tax price is added to effected market orders and the taxed amount is automatically routed to the tax issuing Sovereign.</p>

                               <p>Action output may also be taxed by a Sovereign, meaning that a portion of the item rewards for every action taken within their settlement are routed to the Sovereign.</p>

                               <p>Ministers may also Harvesting and Processing tax rates which apply only to their District and which are determined after Sovereign taxation is taken into account.</p>

                            <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["taxation_report"]) ? $context["taxation_report"] : $this->getContext($context, "taxation_report"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 80%;  margin-top: 0px; margin-bottom: 10px; display:block;margin-left:auto;margin-right:auto;\">

                               <p>All these various mechanisms for exchanging items allow each settlement to determine and regulate an economy suited to it specifically.  On a personal note, I very much look forward to seeing the various types of setups people put together and administer in their own settlements, as well as what kind of economic setups non-Sovereigns will seek out to live in.</p>
                        </div>

                            <img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["game_unity"]) ? $context["game_unity"] : $this->getContext($context, "game_unity"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; display:block\">
                        <div style=\"width:80%; margin-left:auto;margin-right:auto;\">
                        <p>One of the goals of Brunelleschi is accessibility.  While some gamers are perfectly comfortable with the data driven web interface, having a first-person 3D interface for the game world would open up the game play experience to a much wider range of player personalities. This would increase the richness of experience for all players due to the social nature of the game.</p>
                        <p>Even learning Unity 3D as we develop and without a budget for assets, we have been able to develop the initial stages of a first-person 3D client for Brunelleschi which allows players to login to the game, render their game Settlement in the 3D environment, and interact with game functions through an internal web browser.</p>
                        <p>While we will continue some development of the Unity client regardless of the outcome of our fundraising efforts, accelerating and expanding development of the 3D client for the game is one of the top priorities for any funds we might receive.</p>
                        <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["unity_shop"]) ? $context["unity_shop"] : $this->getContext($context, "unity_shop"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%;  margin-top: 0px; margin-bottom: 0px; margin-left:auto;margin-right:auto;display:block\"></div>
                    </div>
                </div>
                ";
        // line 384
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Stretch Goals</h3>
                    </div>
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["stretch_image"]) ? $context["stretch_image"] : $this->getContext($context, "stretch_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                    </div>
                </div>
                ";
        // line 393
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Selected Perk Packages</h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 398
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rewards_images"]) ? $context["rewards_images"] : $this->getContext($context, "rewards_images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 399
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 10px; margin-bottom: 0px; display:block\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 401
        echo "                    </div>
                </div>

                ";
        // line 405
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">How You Can Help</h3>
                    </div>
                    <div class=\"panel-body\">
                        <img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["help_image"]) ? $context["help_image"] : $this->getContext($context, "help_image"))), "html", null, true);
        echo "\" class=\"img-rounded\" style=\"width: 90%; margin-left:auto;margin-right:auto; margin-top: 0px; margin-bottom: 0px; display:block\">
                        <p>Thank you for reading about Aesop Games and Brunelleschi: Age of Architects!  Please, keep in mind that whether you are able to contribute today or not <b>you can still help</b>!  Getting the word out is a vital part of this process, and we can't do it alone!</p>
                        <p>We know there are folks out there who would really enjoy helping us make new interesting games and then playing them - if only they knew we existed!  So please, if you like something about what we're doing, help us spread the word! </p>
                        <ul>
                            <li>Tell folks about what we're doing!</li>
                            <li>Share this campaign through the built in options!</li>
                            <li>And point your gamer friends at our beta - the more players the better!</li>
                        </ul>

                        <div style=\"margin-left:auto;margin-right:auto;width:200px;text-align:center\">
                            <a href=\"http://twitter.com/share?text=Support games made by folks who want you to love playing them!&url=http://aesopgames.com/app.php/support\" target=\"_blank\" title=\"Share This on Twitter\">
                                <img src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["twitter_image"]) ? $context["twitter_image"] : $this->getContext($context, "twitter_image"))), "html", null, true);
        echo "\" style=\"width:64px; height: 64px\">
                            </a>

                            <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u=http://aesopgames.com/app/php/support'+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
                            <a href=\"http://www.facebook.com/share.php?u=<full page url to share>\" onClick=\"return fbs_click()\" target=\"_blank\" title=\"Share This on Facebook\"><img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["facebook_image"]) ? $context["facebook_image"] : $this->getContext($context, "facebook_image"))), "html", null, true);
        echo "\" alt=\"facebook\" width=\"64\" height=\"64\" border=\"0\" /></a>

                            <a href=\"https://plus.google.com/share?url=http://aesopgames.com/app.php/support\" onclick=\"javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\"><img
                                        src=\"https://www.gstatic.com/images/icons/gplus-64.png\" alt=\"Share on Google+\" title=\"Share This on Google+\"/></a>
                        </div>
                        <p>Thank you for reading!</p>
                        <p>Please, get in touch if you have any questions or feedback :)</p>
                    </div>
                </div>

            </div><!-- /.col-sm-4 -->
            <div class=\"col-md-4 text-center\">
                <div class=\"alert alert-success\" style=\"border: 2px solid green; opacity: 0.9;\">
                    <h2 style=\"margin:0px;padding:0px;\">Supporter Perks</h2>
                </div>
                ";
        // line 441
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["perks"]) ? $context["perks"] : $this->getContext($context, "perks")));
        foreach ($context['_seq'] as $context["_key"] => $context["perk"]) {
            // line 442
            echo "                    <div class=\"panel panel-default text-left\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
            // line 444
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perk"]) ? $context["perk"] : $this->getContext($context, "perk")), "title"), "html", null, true);
            echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <img src=\"";
            // line 447
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["perk"]) ? $context["perk"] : $this->getContext($context, "perk")), "image")), "html", null, true);
            echo "\" class=\"img-rounded\" style=\"width: 100%; margin-left:auto;margin-right:auto; margin-top: 10px; margin-bottom: 10px; display:block\">
                            ";
            // line 448
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perk"]) ? $context["perk"] : $this->getContext($context, "perk")), "desc"), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "            </div>
        </div>
    </div> <!-- /container -->
    <script type=\"text/javascript\">
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
";
    }

    public function getTemplateName()
    {
        return "ONNAesopGamesBundle:Page:support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 452,  708 => 448,  704 => 447,  698 => 444,  694 => 442,  690 => 441,  671 => 425,  664 => 421,  650 => 410,  643 => 405,  638 => 401,  629 => 399,  625 => 398,  618 => 393,  612 => 389,  605 => 384,  599 => 380,  591 => 375,  583 => 370,  568 => 358,  542 => 335,  525 => 321,  508 => 307,  500 => 302,  474 => 279,  459 => 267,  451 => 262,  439 => 253,  429 => 246,  418 => 238,  405 => 228,  398 => 224,  391 => 219,  378 => 208,  371 => 204,  358 => 194,  351 => 189,  347 => 186,  338 => 184,  334 => 183,  329 => 181,  322 => 176,  311 => 167,  304 => 162,  289 => 149,  282 => 144,  276 => 140,  272 => 139,  258 => 128,  251 => 123,  242 => 116,  227 => 104,  213 => 92,  207 => 87,  198 => 84,  189 => 83,  186 => 82,  183 => 81,  180 => 80,  177 => 79,  174 => 78,  170 => 77,  166 => 75,  157 => 72,  148 => 71,  145 => 70,  142 => 69,  139 => 68,  136 => 67,  133 => 66,  129 => 65,  125 => 63,  116 => 60,  107 => 59,  104 => 58,  101 => 57,  98 => 56,  95 => 55,  92 => 54,  88 => 53,  69 => 37,  62 => 33,  31 => 4,  28 => 3,);
    }
}
