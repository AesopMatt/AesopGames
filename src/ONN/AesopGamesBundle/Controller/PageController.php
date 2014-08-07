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

    public function isMobile()
    {
        $useragent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent) ||
            preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)
|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {

            $mobile = true;
        } else {
            $mobile = false;
        }

        return $mobile;

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
                    $images[$name][$type] = '/Aesop/web/bundles/onnaesopgames/images/Fundraisers/'.$name.'-small-'.$type.'.png';
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

    public function perksAction()
    {
        $currentUrl = $this->getRequest()->getUri();
        $perks = $this->getPerks($currentUrl);

        $response = $this->render('ONNAesopGamesBundle:Page:perks.html.twig', array('perks'=>$perks));

        return $response;
    }

    public function lookingCloserAction()

    {
        $currentUrl = $this->getRequest()->getUri();
        $markets_image = '/bundles/onnaesopgames/images/Screenshots/markets.png';
        $combat_image = '/bundles/onnaesopgames/images/Screenshots/fight.png';
        $equip_unit = '/bundles/onnaesopgames/images/Screenshots/equip_unit.png';
        $scenario_image = '/bundles/onnaesopgames/images/Screenshots/scenario.png';
        $unity_shop = '/bundles/onnaesopgames/images/Screenshots/unity-alchemist-shop.png';
        $construct_district = '/bundles/onnaesopgames/images/Screenshots/construct-district.png';

        if (strpos($currentUrl,'localhost') !== false){
            $forward_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/forward.png';
            $game_bond = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-bond.png';
            $game_civics = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-civics.png';
            $game_combat = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-combat.png';
            $game_craft = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-craft.png';
            $game_diplomacy = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-diplomacy.png';
            $game_property = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-property.png';
            $game_trade = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-trade.png';
            $game_unity = '/Aesop/web/bundles/onnaesopgames/images/Headings/game-unity.png';
            $taxation_report = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/taxation_report.png';
        } else {
            $forward_image = '/bundles/onnaesopgames/images/Headings/forward.png';
            $game_bond = '/bundles/onnaesopgames/images/Headings/game-bond.png';
            $game_civics = '/bundles/onnaesopgames/images/Headings/game-civics.png';
            $game_combat = '/bundles/onnaesopgames/images/Headings/game-combat.png';
            $game_craft = '/bundles/onnaesopgames/images/Headings/game-craft.png';
            $game_diplomacy = '/bundles/onnaesopgames/images/Headings/game-diplomacy.png';
            $game_property = '/bundles/onnaesopgames/images/Headings/game-property.png';
            $game_trade = '/bundles/onnaesopgames/images/Headings/game-trade.png';
            $game_unity = '/bundles/onnaesopgames/images/Headings/game-unity.png';
            $taxation_report = '/bundles/onnaesopgames/images/Screenshots/taxation_report.png';
        }

        $response = $this->render('ONNAesopGamesBundle:Page:lookingCloser.html.twig', array(
            'forward_image' => $forward_image,
            'game_bond' => $game_bond,
            'game_civics' => $game_civics,
            'game_combat' => $game_combat,
            'game_craft' => $game_craft,
            'game_diplomacy' => $game_diplomacy,
            'game_property' => $game_property,
            'game_trade' => $game_trade,
            'game_unity' => $game_unity,
            'markets_image' => $markets_image,
            'taxation_report' => $taxation_report,
            'combat_image' => $combat_image,
            'equip_unit' => $equip_unit,
            'scenario_image' => $scenario_image,
            'unity_shop' => $unity_shop,
            'construct_district' => $construct_district
        ));
        /*
        $response->setETag(md5($response->getContent()));
        $response->setPublic(); // make sure the response is public/cacheable
        $response->isNotModified($request);
        */
        return $response;
    }

    public function supportAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','support');

        $currentUrl = $this->getRequest()->getUri();
        $calendar_images = [
            'october-2014' => 'october2014.png',
            'november-2014' => 'november2014.png',
            'december-2014' => 'december2014.png',
            'january-2015' => 'january2015.png',
            'february-2015' => 'february2015.png',
            'march-2015' => 'march2015.png',
            'april-2015' => 'april2015.png',
            'may-2015' => 'may2015.png'
        ];
        $mobile = $this->isMobile();
        $team_image = '/bundles/onnaesopgames/images/Photos/Team.png';
        $map_image = '/bundles/onnaesopgames/images/Web/Map.png';
        $markets_image = '/bundles/onnaesopgames/images/Screenshots/markets.png';
        $combat_image = '/bundles/onnaesopgames/images/Screenshots/fight.png';
        $equip_unit = '/bundles/onnaesopgames/images/Screenshots/equip_unit.png';
        $scenario_image = '/bundles/onnaesopgames/images/Screenshots/scenario.png';
        $unity_shop = '/bundles/onnaesopgames/images/Screenshots/unity-alchemist-shop.png';
        $construct_district = '/bundles/onnaesopgames/images/Screenshots/construct-district.png';
        $tall_grass = '/bundles/onnaesopgames/images/Screenshots/tall-grass.png';
        $character_creation = '/bundles/onnaesopgames/images/Screenshots/character-creation.png';

        if (strpos($currentUrl,'localhost') !== false){
            $plat_panel = '/Aesop/web/bundles/onnaesopgames/images/Panels/platinum.png';
            $badge_panel = '/Aesop/web/bundles/onnaesopgames/images/Panels/badge.png';
            foreach ($calendar_images as $key=>$image){
                $calendar_images[$key] = '/bundles/onnaesopgames/images/Panels/'.$image;
            }
            $city_building = '/Aesop/web/bundles/onnaesopgames/images/Web/city-building.png';
            $fantasy_renaissance = '/Aesop/web/bundles/onnaesopgames/images/Web/fantasy-renaissance.png';
            $role_play = '/Aesop/web/bundles/onnaesopgames/images/Web/role-play.png';
            $social_strategy = '/Aesop/web/bundles/onnaesopgames/images/Web/social-strategy.png';
            $facebook_image = '/Aesop/web/bundles/onnaesopgames/images/facebook.jpg';
            $twitter_image = '/Aesop/web/bundles/onnaesopgames/images/twitter.jpg';
            $challenge_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/challenges.png';
            $development_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/development.png';
            $game_overview_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/overview.png';
            $you_decide = '/Aesop/web/bundles/onnaesopgames/images/Headings/you-decide.png';
            $belongs_to_players = '/Aesop/web/bundles/onnaesopgames/images/Headings/belongs-to-players.png';
            $rewards_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/rewards.png';
            $help_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/help.png';
            $stretch_image = '/Aesop/web/bundles/onnaesopgames/images/stretch.png';
            $instant_image = '/Aesop/web/bundles/onnaesopgames/images/Headings/instant.png';
            $taxation_report = '/Aesop/web/bundles/onnaesopgames/images/Screenshots/taxation_report.png';
            $budget_pies = '/Aesop/web/bundles/onnaesopgames/images/Panels/budget-pies-crowdfunding.png';
            $games = '/Aesop/web/bundles/onnaesopgames/images/Panels/games.png';
            $team = '/Aesop/web/bundles/onnaesopgames/images/Headings/team.png';
        } else {
            $city_building = '/bundles/onnaesopgames/images/Web/city-building.png';
            $fantasy_renaissance = '/bundles/onnaesopgames/images/Web/fantasy-renaissance.png';
            $role_play = '/bundles/onnaesopgames/images/Web/role-play.png';
            $social_strategy = '/bundles/onnaesopgames/images/Web/social-strategy.png';
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
            $rewards_image = '/bundles/onnaesopgames/images/Headings/rewards.png';
            $you_decide = '/bundles/onnaesopgames/images/Headings/you-decide.png';
            $belongs_to_players = '/bundles/onnaesopgames/images/Headings/belongs-to-players.png';
            $help_image = '/bundles/onnaesopgames/images/Headings/help.png';
            $stretch_image = '/bundles/onnaesopgames/images/stretch.png';
            $instant_image = '/bundles/onnaesopgames/images/Headings/instant.png';
            $taxation_report = '/bundles/onnaesopgames/images/Screenshots/taxation_report.png';
            $budget_pies = '/bundles/onnaesopgames/images/Panels/budget-pies-crowdfunding.png';
            $games = '/bundles/onnaesopgames/images/Panels/games.png';
            $team = '/bundles/onnaesopgames/images/Headings/team.png';
        }
        $rewards_images = $this->getRewardsImages($currentUrl);
        $fundraisers = $this->getFundraisersImages($currentUrl);

        $page = 'support.html.twig';
        if ($mobile == true){
            $page = 'mobileSupport.html.twig';
        }
        $response = $this->render('ONNAesopGamesBundle:Page:'.$page, array(
            'city_building' => $city_building,
            'fantasy_renaissance' => $fantasy_renaissance,
            'role_play' => $role_play,
            'social_strategy' => $social_strategy,
            'team_image' => $team_image,
            'map_image' => $map_image,
            'plat_panel' => $plat_panel,
            'badge_panel' => $badge_panel,
            'calendar_images' => $calendar_images,
            'twitter_image' => $twitter_image,
            'facebook_image' => $facebook_image,
            'challenge_image' => $challenge_image,
            'development_image' => $development_image,
            'game_overview_image' => $game_overview_image,
            'rewards_image' => $rewards_image,
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
            'budget_pies' => $budget_pies,
            'games' => $games,
            'team' => $team,
            'you_decide' => $you_decide,
            'belongs_to_players' => $belongs_to_players,
            'tall_grass' => $tall_grass,
            'character_creation' => $character_creation
        ));
        /*
        $response->setETag(md5($response->getContent()));
        $response->setPublic(); // make sure the response is public/cacheable
        $response->isNotModified($request);
        */
        return $response;
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
