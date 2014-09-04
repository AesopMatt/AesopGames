<?php

namespace ONN\AesopGamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ONN\AesopGamesBundle\Entity\Perks;

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
        $names = [
            'indiegogo'=>'',
            'kickstarter'=>'https://www.kickstarter.com/projects/mmitchum/560713644?token=ce3cfc9a',
            'rockethub' => 'http://www.rockethub.com/projects/45939-brunelleschi-age-of-architects',
            'greenlight' => '',
            'epocu' => 'http://epocu.com/campaigns/brunelleschi-age-architects/'
        ];
        //$types = ['comingsoon','live','stretch','complete-no','complete-yes'];
        $types = ['comingsoon'];
        $live = ['rockethub','indiegogo'];
        $success = ['epocu'];
        $images = [];

        foreach ($names as $name=>$url){
            if (!in_array($name,$live) && !in_array($name,$success)){
                $type = 'comingsoon';
            } elseif (!in_array($name,$live)) {
                $type = 'complete-yes';
            } else {
                $type = 'live';
            }
            if (strpos($currentUrl,'localhost') !== false){
                $images[$name][$type]['image'] = '/Aesop/web/bundles/onnaesopgames/images/Fundraisers/'.$name.'-small-'.$type.'.png';
            } else {
                $images[$name][$type]['image'] = '/bundles/onnaesopgames/images/Fundraisers/'.$name.'-'.$type.'.png';
            }
            if (in_array($name,$live)){
                if (strpos($currentUrl,'localhost') !== false){
                    $images[$name][$type]['image'] = '/Aesop/web/bundles/onnaesopgames/images/Fundraisers/'.$name.'-'.$type.'.png';
                } else {
                    $images[$name][$type]['image'] = '/bundles/onnaesopgames/images/Fundraisers/'.$name.'-'.$type.'.png';
                }
            }
            $images[$name][$type]['url'] = $url;
        }
        return $images;
    }

    public function oculusAction()
    {

        $currentUrl = $this->getRequest()->getUri();
        if (strpos($currentUrl,'localhost') !== false){
            $oculus_alone = '/Aesop/web/bundles/onnaesopgames/images/Photos/oculus-alone.jpg';
            $oculus_box = '/Aesop/web/bundles/onnaesopgames/images/Photos/oculus-box.jpg';
            $oculus_m = '/Aesop/web/bundles/onnaesopgames/images/Photos/oculus-margaret.jpg';
            $oculus_r = '/Aesop/web/bundles/onnaesopgames/images/Photos/oculus-rebecca.jpg';
        } else {
            $oculus_alone = '/bundles/onnaesopgames/images/oculus-alone.jpg';
            $oculus_box = '/bundles/onnaesopgames/images/oculus-alone.jpg';
            $oculus_m = '/bundles/onnaesopgames/images/oculus-margaret.jpg';
            $oculus_r = '/bundles/onnaesopgames/images/oculus-rebecca.jpg';
        }

        return $this->render('ONNAesopGamesBundle:Page:oculus.html.twig',array(
            'oculus_alone'=>$oculus_alone,
            'oculus_box' => $oculus_box,
            'oculus_m' => $oculus_m,
            'oculus_r' => $oculus_r
        ));
    }

    public function updatePerks()
    {
        $em = $this->getDoctrine()->getManager();
        $perks = $em->getRepository("ONNAesopGamesBundle:Perks")->findAll();
        foreach ($perks as $perk){
            $em->remove($perk);
            $em->flush();
        }

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
            $title = $perk['title'];
            $desc = $perk['desc'];

            $new = new Perks();
            $new->setImage($image);
            $new->setTitle($title);
            $new->setInfo($desc);
            $em->persist($new);
            $em->flush();
        }

        return true;
    }

    public function getPerks($currentUrl,$last_id,$show)
    {
        $em = $this->getDoctrine()->getManager();

        if ($show != 'all'){
            $query = $em->createQueryBuilder()
                ->select('c')
                ->from('ONNAesopGamesBundle:Perks', 'c')
                ->where('c.id > :last_id')
                ->setParameters(array('last_id' => $last_id))
                ->orderBy("c.id","ASC")
                ->setMaxResults(20)
                ->getQuery();

            $results = $query->getResult();
        } else {
            $query = $em->createQueryBuilder()
                ->select('c')
                ->from('ONNAesopGamesBundle:Perks', 'c')
                ->where('c.id > :last_id')
                ->setParameters(array('last_id' => $last_id))
                ->orderBy("c.id","ASC")
                ->getQuery();

            $results = $query->getResult();
        }

        if (empty($results)){
            $this->updatePerks();
            if ($show != 'all'){
                $query = $em->createQueryBuilder()
                    ->select('c')
                    ->from('ONNAesopGamesBundle:Perks', 'c')
                    ->where('c.id > :last_id')
                    ->setParameters(array('last_id' => $last_id))
                    ->orderBy("c.id","ASC")
                    ->setMaxResults(20)
                    ->getQuery();

                $results = $query->getResult();
            } else {
                $query = $em->createQueryBuilder()
                    ->select('c')
                    ->from('ONNAesopGamesBundle:Perks', 'c')
                    ->where('c.id > :last_id')
                    ->setParameters(array('last_id' => $last_id))
                    ->orderBy("c.id","ASC")
                    ->getQuery();

                $results = $query->getResult();
            }
        }

        if (empty($results)){
            return [];
        }

        $perks = [];
        foreach ($results as $key=>$perk){
            $image = $perk->getImage();
            $perks[$key]['title'] = $perk->getTitle();
            $perks[$key]['desc'] = $perk->getInfo();

            if (strpos($currentUrl,'localhost') !== false){
                $perks[$key]['image'] = '/Aesop/web/bundles/onnaesopgames/images/Perks/'.$image;
            } else {
                $perks[$key]['image'] = 'bundles/onnaesopgames/images/Perks/'.$image;
            }
            if ($perk->getId() > $last_id){
                $last_id = $perk->getId();
            }
        }

        return ['perks' => $perks, 'last_id'=>$last_id];
    }

    public function getRewardsImages($currentUrl,$last_id,$show)
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
        $keep = [];
        foreach($images as $key=>$image){
            if ($key > $last_id || ($key == $last_id && $last_id == 0)){
                $keep[$key] = $image;
                if (count($keep) > 1 && $show != 'all'){
                    $last_id = $key;
                    break;
                }
            }
        }

        return ['images' => $keep, 'last_id' => $last_id];
    }

    public function showMessage($message)
    {
        return $this->render('ONNBrunBundle:Fragment:message.html.twig',array('message'=>$message));
    }

    public function perksAction($last_id = 0,$show = 'limited')
    {
        $currentUrl = $this->getRequest()->getUri();
        $perkses = $this->getPerks($currentUrl,$last_id,$show);
        if (empty($perkses)){
            $message = "These are all of the Support Perks packages we have at this time.  If you did not find what you were looking for, but you still want to support us, please get in touch and let us know what you were hoping to find!";
            return $this->showMessage($message);
        }
        $perks = $perkses['perks'];
        $last_id = $perkses['last_id'];

        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        $mobile = $mobileDetector->isMobile();
        //$mobile = true;
        $android = $mobileDetector->isAndroidOS();
        $chrome = $mobileDetector->isChrome();
        $android_chrome = $android == true && $chrome == true ? true : false;

        $response = $this->render('ONNAesopGamesBundle:Page:perks.html.twig', array(
            'perks'=>$perks,
            'mobile'=>$mobile,
            'android_chrome' => $android_chrome,
            'last_id' => $last_id,
            'show' => $show
        ));

        return $response;
    }

    public function calendarAction()
    {
        $currentUrl = $this->getRequest()->getUri();

        $months = ['nov2014','dec2014','jan2015','feb2015','mar2015','apr2015','may2015','jun2015'];
        $calendar = [];
        foreach ($months as $each){
            if (strpos($currentUrl,'localhost') !== false){
                $calendar[] = '/Aesop/web/bundles/onnaesopgames/images/Calendar/calendar-panel-'.$each.'new.png';
            } else {
                $calendar[] = '/bundles/onnaesopgames/images/Calendar/calendar-panel-'.$each.'new.png';
            }
        }

        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        $mobile = $mobileDetector->isMobile();
        //$mobile = true;
        $android = $mobileDetector->isAndroidOS();
        $chrome = $mobileDetector->isChrome();
        $android_chrome = $android == true && $chrome == true ? true : false;

        $response = $this->render('ONNAesopGamesBundle:Page:calendar.html.twig', array(
            'calendar'=>$calendar,
            'mobile'=>$mobile,
            'android_chrome' => $android_chrome
        ));

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
            $instant_image = '/bundles/onnaesopgames/images/Headings/instant.png';
            $taxation_report = '/bundles/onnaesopgames/images/Screenshots/taxation_report.png';
            $budget_pies = '/bundles/onnaesopgames/images/Panels/budget-pies-crowdfunding.png';
            $games = '/bundles/onnaesopgames/images/Panels/games.png';
            $team = '/bundles/onnaesopgames/images/Headings/team.png';
        }
        $fundraisers = $this->getFundraisersImages($currentUrl);

        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        $mobile = $mobileDetector->isMobile();
        $tablet = $mobileDetector->isTablet();
        $android = $mobileDetector->isAndroidOS();
        $chrome = $mobileDetector->isChrome();
        //$mobile = true;
        $android_chrome = $android == true && $chrome == true ? true : false;
        $page = 'support.html.twig';
        if ($mobile == true || $tablet == true){
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
            'instant_image' => $instant_image,
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
            'character_creation' => $character_creation,
            'android_chrome' => $android_chrome
        ));
        /*
        $response->setETag(md5($response->getContent()));
        $response->setPublic(); // make sure the response is public/cacheable
        $response->isNotModified($request);
        */
        return $response;
    }

    public function stretchAction($id = 0,$show)
    {
        $currentUrl = $this->getRequest()->getUri();

        if ($id > 4){
            $message = "These are all the stretch goals we have at this point.  If it looks like we're going to run out, we promise to make more :)";
            return $this->showMessage($message);
        }
        if ($show == 'all'){
            $stretch_images = [];
            while ($id < 5){
                $name = "stretch-$id.png";
                if (strpos($currentUrl,'localhost') !== false){
                    $stretch_images[] = '/Aesop/web/bundles/onnaesopgames/images/Stretch/' . $name;
                } else {
                    $stretch_images[] = '/bundles/onnaesopgames/images/Stretch/'. $name;
                }
                $id++;
            }
            $mobileDetector = $this->get('mobile_detect.mobile_detector');
            $mobile = $mobileDetector->isMobile();
            $android = $mobileDetector->isAndroidOS();
            $chrome = $mobileDetector->isChrome();
            $android_chrome = $android == true && $chrome == true ? true : false;
            return $this->render('ONNAesopGamesBundle:Svg:stretchAll.html.twig', array(
                'stretches'=>$stretch_images,
                'android_chrome'=>$android_chrome,
                'id' => ++$id
            ));
        }

        $name = "stretch-$id.png";
        if (strpos($currentUrl,'localhost') !== false){
            $stretch_image = '/Aesop/web/bundles/onnaesopgames/images/Stretch/' . $name;
        } else {
            $stretch_image = '/bundles/onnaesopgames/images/Stretch/'. $name;
        }
        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        $mobile = $mobileDetector->isMobile();
        $android = $mobileDetector->isAndroidOS();
        $chrome = $mobileDetector->isChrome();
        $android_chrome = $android == true && $chrome == true ? true : false;
        return $this->render('ONNAesopGamesBundle:Svg:stretch.html.twig', array(
            'stretch'=>$stretch_image,
            'android_chrome'=>$android_chrome,
            'id' => ++$id
        ));
    }

    public function packagesAction($last_id = 0, $show = 'limited')
    {
        $currentUrl = $this->getRequest()->getUri();

        $rewards_imageses = $this->getRewardsImages($currentUrl,$last_id,$show);
        $rewards_images = $rewards_imageses['images'];
        $last_id = $rewards_imageses['last_id'];

        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        $mobile = $mobileDetector->isMobile();
        $android = $mobileDetector->isAndroidOS();
        $chrome = $mobileDetector->isChrome();
        $android_chrome = $android == true && $chrome == true ? true : false;

        return $this->render('ONNAesopGamesBundle:Svg:packages.html.twig', array(
            'rewards_images'=>$rewards_images,
            'mobile'=>$mobile,
            'android_chrome' => $android_chrome,
            'last_id' => $last_id,
            'show' => $show
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
