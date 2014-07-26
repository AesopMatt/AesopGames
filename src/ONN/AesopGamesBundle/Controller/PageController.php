<?php

namespace ONN\AesopGamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','index');
        return $this->render('ONNAesopGamesBundle:Page:index.html.twig');
    }

    public function getFundraisersImages($currentUrl)
    {
        $names = ['indiegogo','kickstarter','rockethub'];
        //$types = ['comingsoon','live','stretch','complete-no','complete-yes'];
        $types = ['comingsoon'];
        $images = [];

        foreach ($names as $name){
            foreach ($types as $type){
                if (strpos($currentUrl,'localhost') !== false){
                    $images[$name][$type] = '/Aesop/web/bundles/onnaesopgames/images/Fundraisers/'.$name.'-'.$type.'.png';
                } else {
                    $images[$name][$type] = '/bundles/onnaesopgames/images/Fundraisers/'.$name.'-'.$type.'.png';
                }
            }
        }
        return $images;
    }

    public function getPerks($currentUrl)
    {
        $perks = [];
        $filename = __DIR__.'/data/perks.txt';
        $fd = fopen($filename, "r");
        $contents = fread($fd, 150000);
        fclose($fd);
        $delimeter = ',';
        $splitcontents = explode($delimeter, $contents);
        $counter=0;
        $tally = 0;
        foreach ($splitcontents as $each) {
            $each = str_replace('%%%',',',$each);
            if ($counter == 0) {
                $tally++;
                $perks[$tally]['title'] = $each;
            }
            if ($counter == 1) {
                $perks[$tally]['image'] = $each;
            }
            if ($counter == 2) {
                $perks[$tally]['desc'] = $each;
            }
            $counter++;
            if ($counter > 2) {
                $counter = 0;
            }
        }
        foreach ($perks as $key=>$perk){
            $image = $perk['image'];
            if (strpos($currentUrl,'localhost') !== false){
                $perks[$key]['image'] = '/Aesop/web/bundles/onnaesopgames/images/Perks/'.$image;
            } else {
                $perks[$key]['image'] = 'bundles/onnaesopgames/images/Perks/'.$image;
            }
        }
        return $perks;
    }

    public function getRewardsImages($currentUrl)
    {
        $names = ['contributor','teamster','pirate','gear','gondolier','trading','artist','drovers','scribe','engineer','manowar','foodies','merchant'];

        $images = [];
        foreach ($names as $name){
            if (strpos($currentUrl,'localhost') !== false){
                $images[] = '/Aesop/web/bundles/onnaesopgames/images/Rewards/'.$name.'.png';
            } else {
                $images[] = '/bundles/onnaesopgames/images/Rewards/'.$name.'.png';
            }
        }

        return $images;
    }

    public function supportAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','support');

        $currentUrl = $this->getRequest()->getUri();
        $perks = $this->getPerks($currentUrl);
        $calendar_images = [
            1 => 'october2014.png',
            2 => 'november2014.png',
            3 => 'december2014.png',
            4 => 'january2015.png',
            5 => 'february2015.png',
            6 => 'march2015.png',
            7 => 'april2015.png',
            8 => 'may2015.png'
        ];

        if (strpos($currentUrl,'localhost') !== false){
            $team_image = '/Aesop/web/bundles/onnaesopgames/images/Photos/Team.png';
            $map_image = '/Aesop/web/bundles/onnaesopgames/images/Web/Map.png';
            $plat_panel = '/Aesop/web/bundles/onnaesopgames/images/Panels/platinum.png';
            $badge_panel = '/Aesop/web/bundles/onnaesopgames/images/Panels/badge.png';
            foreach ($calendar_images as $key=>$image){
                $calendar_images[$key] = '/Aesop/web/bundles/onnaesopgames/images/Panels/'.$image;
            }
            $facebook_image = '/Aesop/web/bundles/onnaesopgames/images/facebook.jpg';
            $twitter_image = '/Aesop/web/bundles/onnaesopgames/images/twitter.jpg';
            $challenge_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/challenges.png';
            $development_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/development.png';
            $game_overview_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/overview.png';
            $forward_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/forward.png';
            $rewards_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/rewards.png';
            $game_bond = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-bond.png';
            $game_civics = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-civics.png';
            $game_combat = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-combat.png';
            $game_craft = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-craft.png';
            $game_diplomacy = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-diplomacy.png';
            $game_property = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-property.png';
            $game_trade = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-trade.png';
            $game_unity = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-unity.png';
            $help_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/help.png';
            $stretch_image = '/Aesop/web/bundles/onnaesopgames/images/stretch.png';
            $instant_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/instant.png';
            $markets_image = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/markets.png';
            $taxation_report = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/taxation_report.png';
            $combat_image = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/fight.png';
            $equip_unit = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/equip_unit.png';
            $scenario_image = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/scenario.png';
            $unity_shop = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/unity-alchemist-shop.png';
            $construct_district = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/construct-district.png';
            $budget_pies = '/Aesop/web/bundles/onnaesopgames/images/Panels/budget-pies.png';
        } else {
            $team_image = '/bundles/onnaesopgames/images/Photos/Team.png';
            $map_image = '/bundles/onnaesopgames/images/Web/Map.png';
            $plat_panel = '/bundles/onnaesopgames/images/Panels/platinum.png';
            $badge_panel = '/bundles/onnaesopgames/images/Panels/badge.png';
            foreach ($calendar_images as $key=>$image){
                $calendar_images[$key] = '/bundles/onnaesopgames/images/Panels/'.$image;
            }
            $facebook_image = '/bundles/onnaesopgames/images/facebook.jpg';
            $twitter_image = '/bundles/onnaesopgames/images/twitter.jpg';
            $challenge_image = '/bundles/onnaesopgames/images/Headings/challenges.png';
            $development_image = '/bundles/onnaesopgames/images/Headings/development.png';
            $game_overview_image = '/bundles/onnaesopgames/images/Headings/overview.png';
            $forward_image = '/bundles/onnaesopgames/images/Headings/forward.png';
            $rewards_image = '/bundles/onnaesopgames/images/Headings/rewards.png';
            $game_bond = '/bundles/onnaesopgames/images/Headings/game-bond.png';
            $game_civics = '/bundles/onnaesopgames/images/Headings/game-civics.png';
            $game_combat = '/bundles/onnaesopgames/images/Headings/game-combat.png';
            $game_craft = '/bundles/onnaesopgames/images/Headings/game-craft.png';
            $game_diplomacy = '/bundles/onnaesopgames/images/Headings/game-diplomacy.png';
            $game_property = '/bundles/onnaesopgames/images/Headings/game-property.png';
            $game_trade = '/bundles/onnaesopgames/images/Headings/game-trade.png';
            $game_unity = '/bundles/onnaesopgames/images/Headings/game-unity.png';
            $help_image = '/bundles/onnaesopgames/images/Headings/help.png';
            $stretch_image = '/bundles/onnaesopgames/images/stretch.png';
            $instant_image = '/bundles/onnaesopgames/images/Headings/instant.png';
            $markets_image = '/bundles/onnaesopgames/images/Screenshots/markets.png';
            $taxation_report = '/bundles/onnaesopgames/images/Screenshots/taxation_report.png';
            $combat_image = '/bundles/onnaesopgames/images/Screenshots/fight.png';
            $equip_unit = '/bundles/onnaesopgames/images/Screenshots/equip_unit.png';
            $scenario_image = '/bundles/onnaesopgames/images/Screenshots/scenario.png';
            $unity_shop = '/bundles/onnaesopgames/images/Screenshots/unity-alchemist-shop.png';
            $construct_district = '/bundles/onnaesopgames/images/Screenshots/construct-district.png';
            $budget_pies = '/bundles/onnaesopgames/images/Panels/budget-pies.png';
        }
        $rewards_images = $this->getRewardsImages($currentUrl);
        $fundraisers = $this->getFundraisersImages($currentUrl);

        return $this->render('ONNAesopGamesBundle:Page:support.html.twig', array(
            'team_image' => $team_image,
            'map_image' => $map_image,
            'perks' => $perks,
            'plat_panel' => $plat_panel,
            'badge_panel' => $badge_panel,
            'calendar_images' => $calendar_images,
            'twitter_image' => $twitter_image,
            'facebook_image' => $facebook_image,
            'challenge_image' => $challenge_image,
            'development_image' => $development_image,
            'game_overview_image' => $game_overview_image,
            'forward_image' => $forward_image,
            'rewards_image' => $rewards_image,
            'game_bond' => $game_bond,
            'game_civics' => $game_civics,
            'game_combat' => $game_combat,
            'game_craft' => $game_craft,
            'game_diplomacy' => $game_diplomacy,
            'game_property' => $game_property,
            'game_trade' => $game_trade,
            'game_unity' => $game_unity,
            'help_image' => $help_image,
            'stretch_image' => $stretch_image,
            'instant_image' => $instant_image,
            'rewards_images' => $rewards_images,
            'fundraisers' => $fundraisers,
            'markets_image' => $markets_image,
            'taxation_report' => $taxation_report,
            'combat_image' => $combat_image,
            'equip_unit' => $equip_unit,
            'scenario_image' => $scenario_image,
            'unity_shop' => $unity_shop,
            'construct_district' => $construct_district,
            'budget_pies' => $budget_pies
        ));
    }

    public function aboutAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','about');
        return $this->render('ONNAesopGamesBundle:Page:about.html.twig');
    }

    public function gamesAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','games');
        return $this->render('ONNAesopGamesBundle:Page:games.html.twig');
    }

    public function blogAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','blog');
        return $this->render('ONNAesopGamesBundle:Page:blog.html.twig');
    }

    public function contactAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','contact');
        return $this->render('ONNAesopGamesBundle:Page:contact.html.twig');
    }

    public function navbarAction(Request $request)
    {
        return $this->render('ONNAesopGamesBundle:Navbar:navbar.html.twig');
    }


}
