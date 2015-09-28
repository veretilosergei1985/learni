<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" ng-app="learnist">
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0'>
        <meta name='apple-mobile-web-app-capable' content='yes'>
        <meta name='apple-mobile-web-app-status-bar-style' content='black'>
        <meta name='apple-mobile-web-app-title' content='Learnist'>
        <meta name='inmobi-site-verification' content='85a47a06a42d6b303718aac427b97fb3'>
        <meta name='fragment' content='!'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>

        <title lst-title>Sports | Learnist</title>
        <meta name='description' content='Learn more about Sports with Learnist&#39;s broad collection of curated knowledge. | Learnist Share what you know!' />
        <link rel='canonical' href='http://learni.st/categories/7-sports' />
        <meta property='fb:app_id'      content='394372583913332' />
        <meta property='og:type'        content='learnist_app:category' />
        <meta property='og:url'         content='http://learni.st/categories/7-sports' />
        <meta property='og:title'       content='Sports | Learnist' />
        <meta property='og:description' content='Learn more about Sports with Learnist&#39;s broad collection of curated knowledge. | Learnist Share what you know!' />
        <meta property='og:image'       content='//assets0.learni.st/spa/images/category_covers/7_480.jpg' />
        <meta name='twitter:card'            content='summary'>
        <meta name='twitter:url'             content='http://learni.st/categories/7-sports'>
        <meta name='twitter:title'           content='Sports | Learnist'>
        <meta name='twitter:description'     content='Learn more about Sports with Learnist&#39;s broad collection of curated knowledge. | Learnist Share what you know!'>
        <meta name='twitter:image:src'       content='//assets0.learni.st/spa/images/category_covers/7_480.jpg'>
        <meta name='twitter:site'            content='@learnisttweets'>
        <meta name='twitter:app:name:iphone' content='Learnist'>
        <meta name='twitter:app:id:iphone'   content='826591175'>
        <meta name='twitter:app:url:iphone'  content='com.learnist.learnist://'>
        <meta name='twitter:app:name:ipad'   content='Learnist'>
        <meta name='twitter:app:id:ipad'     content='826591175'>
        <meta name='twitter:app:url:ipad'    content='com.learnist.learnist://'>



        <!-- favicons -->
        <meta name='msapplication-TileColor' content='#da532c'>
        <meta name='msapplication-TileImage' content='//assets3.learni.st/spa/favicons/mstile-144x144.png'>
        <meta name='msapplication-config' content='//assets2.learni.st/spa/favicons/browserconfig.xml'>
        <meta name='application-name' content='Learnist'>
        <link rel='shortcut icon' href='//assets1.learni.st/spa/favicons/favicon.ico'>
        <link rel='apple-touch-icon' sizes='57x57' href='//assets3.learni.st/spa/favicons/apple-touch-icon-57x57.png'>
        <link rel='apple-touch-icon' sizes='114x114' href='//assets2.learni.st/spa/favicons/apple-touch-icon-114x114.png'>
        <link rel='apple-touch-icon' sizes='72x72' href='//assets1.learni.st/spa/favicons/apple-touch-icon-72x72.png'>
        <link rel='apple-touch-icon' sizes='144x144' href='//assets0.learni.st/spa/favicons/apple-touch-icon-144x144.png'>
        <link rel='apple-touch-icon' sizes='60x60' href='//assets3.learni.st/spa/favicons/apple-touch-icon-60x60.png'>
        <link rel='apple-touch-icon' sizes='120x120' href='//assets2.learni.st/spa/favicons/apple-touch-icon-120x120.png'>
        <link rel='apple-touch-icon' sizes='76x76' href='//assets1.learni.st/spa/favicons/apple-touch-icon-76x76.png'>
        <link rel='apple-touch-icon' sizes='152x152' href='//assets0.learni.st/spa/favicons/apple-touch-icon-152x152.png'>
        <link rel='apple-touch-icon' sizes='180x180' href='//assets1.learni.st/spa/favicons/apple-touch-icon-180x180.png'>
        <link rel='icon' type='image/png' href='//assets3.learni.st/spa/favicons/favicon-192x192.png' sizes='192x192'>
        <link rel='icon' type='image/png' href='//assets0.learni.st/spa/favicons/favicon-160x160.png' sizes='160x160'>
        <link rel='icon' type='image/png' href='//assets1.learni.st/spa/favicons/favicon-96x96.png' sizes='96x96'>
        <link rel='icon' type='image/png' href='//assets2.learni.st/spa/favicons/favicon-16x16.png' sizes='16x16'>
        <link rel='icon' type='image/png' href='//assets3.learni.st/spa/favicons/favicon-32x32.png' sizes='32x32'>
        <!-- /favicons -->

        <!-- fonts -->
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Open+Sans:300,400,600,700,400italic'>
        <!-- /fonts -->

        <script>
            var apiConfig = {"facebook": {"appId": "394372583913332", "namespace": "learnist_app"}, "ua": {"appId": "UA-5859504-17"}}
            window.learnist = {apiConfig: apiConfig, requestStatus: 200, userIp: '195.78.101.30', cluster: 'production'}
        </script>
        <script type='text/javascript'>
            window.onAmazonLoginReady = function () {
            amazon.Login.setClientId('amzn1.application-oa2-client.b2513b9df2b142379688ae07d3e34ff6');
            };</script>

        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fonts -->
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Open+Sans:300,400,600,700,400italic'>
        <!-- /fonts -->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>


    </head>

    <body <!--ng-controller='AppController'--> ng-class="{'dark-background': isFullScreenModal(), 'logged-out': isLoggedOutExplore(), 'disable-scrolling': disableScrolling(), 'learning-ad': learningAd, 'welcome-ad-showing': welcomeAdShowing, 'vertical-board': showVerticalBoardStyles(), 'curation': inCuration, 'nugget-background': isNugget()}">
        <?php $this->beginBody() ?>
    <lst-top-bar></lst-top-bar>
    <header class="main-header">
        <div class="top-bar-container">
            <a class="logo" ng-href="http://learni.st" href="http://learni.st">
                <svg xml:space="preserve" enable-background="new 0 0 56 56" viewBox="0 0 56 56" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <path d="M9.3,0.5L0.5,9.3C0.2,9.6,0,10,0,10.4c0,0.4,0.2,0.8,0.5,1.2c0.6,0.6,1.7,0.6,2.3,0l8.8-8.8 c0.3-0.3,0.5-0.7,0.5-1.2c0-0.4-0.2-0.8-0.5-1.2C11.3,0.2,10.9,0,10.4,0C10,0,9.6,0.2,9.3,0.5" fill="#EFA244">
                <path d="M18.1,0.5L0.5,18.1C0.2,18.4,0,18.8,0,19.2c0,0.4,0.2,0.8,0.5,1.2c0.6,0.6,1.7,0.6,2.3,0L20.4,2.8 c0.6-0.6,0.6-1.7,0-2.3C20.1,0.2,19.7,0,19.2,0C18.8,0,18.4,0.2,18.1,0.5" fill="#EC8E40">
                <path d="M53.2,44.5l-8.8,8.8C44.2,53.6,44,54,44,54.4c0,0.4,0.2,0.9,0.5,1.2c0.6,0.6,1.7,0.6,2.3,0l8.8-8.8 c0.3-0.3,0.5-0.7,0.5-1.2c0-0.4-0.2-0.8-0.5-1.2c-0.3-0.3-0.7-0.5-1.2-0.5C54,44,53.6,44.1,53.2,44.5" fill="#704238">
                <path d="M53.2,35.7L35.7,53.2c-0.3,0.3-0.5,0.7-0.5,1.2c0,0.4,0.2,0.9,0.5,1.2c0.6,0.6,1.7,0.6,2.3,0L55.6,38 c0.3-0.3,0.5-0.7,0.5-1.2c0-0.4-0.2-0.8-0.5-1.2c-0.3-0.3-0.7-0.5-1.2-0.5C54,35.2,53.6,35.4,53.2,35.7" fill="#864939">
                <path d="M26.9,0.5L0.5,26.9c-0.6,0.6-0.6,1.7,0,2.3c0.6,0.6,1.7,0.6,2.3,0L29.2,2.8c0.3-0.3,0.5-0.7,0.5-1.2 c0-0.4-0.2-0.8-0.5-1.2C28.9,0.2,28.5,0,28,0C27.6,0,27.2,0.2,26.9,0.5" fill="#E5733B">
                <path d="M35.7,26.9L9.3,53.2C9,53.6,8.8,54,8.8,54.4c0,0.4,0.2,0.9,0.5,1.2c0.6,0.6,1.7,0.6,2.3,0L38,29.2 c0.6-0.6,0.6-1.7,0-2.3c-0.3-0.3-0.7-0.5-1.2-0.5C36.4,26.4,36,26.6,35.7,26.9" fill="#D15835">
                <path d="M44.5,26.9L18.1,53.2c-0.3,0.3-0.5,0.7-0.5,1.2c0,0.4,0.2,0.9,0.5,1.2c0.6,0.6,1.7,0.6,2.3,0l26.4-26.4 c0.3-0.3,0.5-0.7,0.5-1.2c0-0.4-0.2-0.8-0.5-1.2c-0.3-0.3-0.7-0.5-1.2-0.5C45.2,26.4,44.8,26.6,44.5,26.9" fill="#B65437">
                <path d="M53.2,26.9L26.9,53.2c-0.3,0.3-0.5,0.7-0.5,1.2c0,0.4,0.2,0.9,0.5,1.2c0.6,0.7,1.7,0.6,2.3,0l26.4-26.4 c0.3-0.3,0.5-0.7,0.5-1.2c0-0.4-0.2-0.9-0.5-1.2c-0.3-0.3-0.7-0.5-1.2-0.5C54,26.4,53.6,26.6,53.2,26.9" fill="#9C4F39">
                <path d="M26.9,9.3L0.5,35.7c-0.6,0.6-0.6,1.7,0,2.3c0.6,0.6,1.7,0.6,2.3,0l26.4-26.4c0.3-0.3,0.5-0.7,0.5-1.2 c0-0.4-0.2-0.8-0.5-1.2C28.9,9,28.5,8.8,28,8.8C27.6,8.8,27.2,9,26.9,9.3" fill="#E5733B">
                <path d="M26.9,18.1L0.5,44.5c-0.6,0.6-0.6,1.7,0,2.3c0.6,0.6,1.7,0.6,2.3,0l26.4-26.4c0.3-0.3,0.5-0.7,0.5-1.2 c0-0.4-0.2-0.9-0.5-1.2c-0.3-0.3-0.7-0.5-1.2-0.5C27.6,17.6,27.2,17.8,26.9,18.1" fill="#DF6A39">
                <path d="M26.9,26.9L0.5,53.2c-0.6,0.6-0.6,1.7,0,2.3c0.6,0.6,1.7,0.6,2.3,0l26.4-26.4c0.3-0.3,0.5-0.7,0.5-1.2 c0-0.4-0.2-0.8-0.5-1.2c-0.3-0.3-0.7-0.5-1.2-0.5C27.6,26.4,27.2,26.6,26.9,26.9" fill="#D96136">
                <path d="M0,1.7c0,0.9,0.7,1.6,1.7,1.6c0.9,0,1.6-0.7,1.6-1.6C3.3,0.7,2.6,0,1.7,0C0.8,0,0,0.7,0,1.7" fill="#F3B447">
                <path d="M52.8,54.4c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6c0-0.9-0.7-1.6-1.6-1.6 C53.5,52.8,52.8,53.5,52.8,54.4" fill="#593936">
                </svg>
            </a>
            <i class="fa fa-bars"></i>
            <form class="search-form ng-pristine ng-valid" ng-submit="performSearch(searchTerm, $event)" name="searchFormNavBar" type="nav-bar" ng-if="!embed">
                <i class="fa fa-search"></i>
                <input class="search-field ng-pristine ng-untouched ng-valid" type="text" ng-model="searchTerm" placeholder="What do you want to learn about?">
                <button class="search-button" ng-click="performSearch(searchTerm, $event)">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <div class="user-access" ng-if'!embed'="">
                 <a class="top-bar-element" title="Learnist Chrome extension" ng-href="/chrome_extension" href="/chrome_extension">
                    <button class="fill">
                        <i class="lst-chrome"></i>
                        Get the Extension
                    </button>
                </a>
                <a class="top-bar-element" rel="nofollow" ng-click="curate()" href="#">
                    <button class="dark-green-fill">Create a Board</button>
                </a>
                <button class="gray ng-scope" ng-if="!currentUser.isLoggedIn" ng-click="openLoginModal(true)">Login</button>
                <button class="dark-green ng-scope" ng-if="!currentUser.isLoggedIn" ng-click="openLoginModal(false)">Sign Up</button>
            </div>
        </div>
    </header>
    <feedback-tab ng-hide='welcomeAdShowing'></feedback-tab>

    <main class="wrapper">
        <div class="page global" ui-view="">
            <div class="main-container ng-scope">                
                <lst-aside-menu>
                    <aside class="aside-menu categories">
                        <h4 class="aside-menu-header">Browse</h4>
                        <ul class="menu">
                            <?php foreach (\frontend\component\MenuHelper::getMenu() as $item) { ?>
                            <li class="menu-item">
                                <a ng-class="{active: hasTopLevelCat(2)}" href="#/categories/<?php echo $item['id']?>"><?php echo $item['name']; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </aside>
                </lst-aside-menu>
                <section class="content interstitial ng-scope" ng-if="!currentUser.isLoggedIn">
                    <section class="content-section">
                        <svg id="logo-name" xml:space="preserve" enable-background="new 0 296.7 1024 172" viewBox="0 296.7 1024 172" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <path d="M514.2,466.5h29.3L513.3,400l1.3-0.4c7-2.6,13.1-6.6,17.5-10.9c9.2-9.6,13.6-21,13.6-35 c0-14.4-4.8-25.8-14-35.9c-10.9-10.9-26.3-16.2-45.5-16.2h-68.7v165h26.7v-61.7h42L514.2,466.5z M486.2,379.8h-42V326h42 c21,0,31.5,9.2,31.5,27.1C517.7,371.1,507.2,379.8,486.2,379.8" fill="#333333">
                        <path d="M232.4,393H115.5c0,14.9,5.7,31.5,16.2,41.6c7.4,7.4,17.5,11.8,30.2,11.8c13.1,0,23.6-3.5,30.6-10.9 c4.4-4.4,7.4-9.2,9.6-17.9h27.1c-2.2,16.2-12.3,31.5-25.4,40.7c-11.8,7.9-26.3,12.3-42,12.3c-23.2,0-42-9.6-54.7-24.9 c-13.6-16.2-20.6-38.1-20.6-61.3c0-20.1,3.5-37.6,12.7-53c11.8-19.3,33.7-34.1,62.1-34.1c21.4,0,38.1,8.3,50.3,21 c13.6,14.9,21,35.9,21,58.2L232.4,393z M194.3,335.6c-7-9.2-17.9-14.9-32.8-14.9c-30.2,0-44.6,24.5-45.5,48.6h88 C204.4,356.6,200.9,344.4,194.3,335.6" fill="#333333">
                        <path d="M382.9,468.7c-14.9,0-23.6-10.9-23.6-24.9h-0.4c-9.6,16.6-30.2,27.1-53.4,27.1c-38.1,0-56.9-25.4-56.9-50.8 c0-21.4,13.6-49,58.6-51.6l50.3-3.1v-12.3c0-8.3-0.9-18.4-8.3-24.9c-5.7-5.3-13.6-8.3-27.1-8.3c-14.9,0-24.5,4.4-30.2,9.6 c-5.3,5.3-8.3,11.8-8.3,19.7h-27.1c0.9-14.9,6.1-25.8,14.9-34.6c10.9-11.8,30.6-17.5,50.8-17.5c31.9,0,50.3,13.6,58.2,31.5 c3.1,7.9,4.8,16.2,4.8,25.4v80.1c0,8.8,3.5,10.9,9.2,10.9c3.1,0,7-0.9,7-0.9v20.6C395.6,467.8,389.9,468.7,382.9,468.7 M357.5,386.8 l-44.2,2.6c-16.6,0.9-36.3,8.8-36.3,29.8c0,14.9,9.2,28.4,32.8,28.4c12.7,0,24.9-4.4,34.1-13.6c9.6-10.1,14-23.6,14-37.6v-9.6H357.5 z" fill="#333333">
                        <rect height="165" width="28.4" fill="#333333" y="301.5" x="730.8">
                        <path d="M695.4,346.6c-0.9-13.6-6.6-23.6-14.4-31.5c-10.9-11.8-29.3-17.5-49.9-17.5c-20.1,0-38.5,5.7-49.9,17.5 c-7.9,8.3-13.1,18.4-14.4,31.5v119.9h28.4V349.2c0-8.3,3.1-14.9,7.9-19.7c5.3-5.3,14-9.6,27.6-9.6c13.6,0,22.3,4.4,27.6,9.6 c4.8,5.3,8.3,11.8,8.3,19.7v117.3h28.4V346.6H695.4z" fill="#333333">
                        <path d="M909.3,452c-12.7,13.1-32.4,18.8-53.8,18.8c-20.6,0-39.4-4.8-53.4-18.8c-10.1-9.6-16.2-23.6-16.2-38.1h27.6 c0.4,11.4,5.7,20.1,13.6,25.8c7.4,5.7,19.3,7.4,29.8,7.4c11.4,0,21.9-1.8,30.2-9.2c4.4-3.5,8.3-10.5,8.3-17.9 c0-12.3-8.8-21-25.8-23.6l-37.2-4.8c-24.9-3.9-40.3-19.3-40.3-44.2c0-12.7,6.1-24.9,13.6-32.4c10.9-10.9,28-18.4,48.6-18.4 c21.9,0,41.6,7,52.5,21c7,8.8,11.8,18.4,11.8,31.5H891c-0.4-8.3-4.4-16.2-9.6-20.6c-7-6.1-16.2-8.8-27.1-8.8c-6.6,0-11.4,0-19.3,3.1 c-10.5,4.4-16.6,13.1-16.6,22.3c0,13.6,8.3,19.7,22.3,21.4c9.2,1.3,22.3,2.6,39.8,5.7c23.6,3.9,42,21,42,45.5 C922,432.8,916.8,444.2,909.3,452" fill="#333333">
                        <path d="M995.6,443.3c-15.3,0-22.3-6.6-22.3-22.8v-70.5h49V326h-49v-25.8h-27.6V424c0,22.3,9.6,44.6,45.5,44.6 c15.3,0,25.4-2.6,32.8-4.4v-23.6C1024,440.2,1007.4,443.3,995.6,443.3" fill="#333333">
                        <path d="M49.9,443.3c-15.3,0-22.3-6.6-22.3-22.8V300.2H0V424c0,22.3,9.6,44.6,45.5,44.6c15.3,0,25.4-2.6,32.8-4.4 v-23.6C78.3,440.2,61.7,443.3,49.9,443.3" fill="#333333">
                        </svg>
                        <h3>Join Millions, Discover and Share your knowledge with the World.</h3>
                        <button class="join" ng-click="openLoginModal(false)">Sign Up</button>
                    </section>
                </section>
                <section class="breadcrumbs ng-scope" xmlns:v="http://rdf.data-vocabulary.org/#" ng-if="category.id > 0">
                    <ul class="bc-list">
                        <li class="bc ng-scope" ng-repeat="category in getBreadcrumbs() track by category.id">
                            <h2 class="bc-header">
                                <a class="bc-header-link ng-binding" property="v:title" rel="v:url" typeof="v:Breadcrumb" ng-href="/categories/8-games" href="/categories/8-games">Games</a>
                            </h2>
                        </li>
                        <li class="bc ng-scope" ng-repeat="subcategory in category.children| limitTo: 8 track by subcategory.id">
                            <h2 class="bc-header">
                                <a class="bc-header-link ng-binding" rel="v:url" property="v:title" typeof="v:Breadcrumb" ng-href="/categories/2202-board-games" href="/categories/2202-board-games">Board Games</a>
                            </h2>
                        </li>
                        <li class="bc ng-scope" ng-repeat="subcategory in category.children| limitTo: 8 track by subcategory.id">
                            <h2 class="bc-header">
                                <a class="bc-header-link ng-binding" rel="v:url" property="v:title" typeof="v:Breadcrumb" ng-href="/categories/2203-video-games" href="/categories/2203-video-games">Video Games</a>
                            </h2>
                        </li>
                        <li class="bc ng-scope" ng-repeat="subcategory in category.children| limitTo: 8 track by subcategory.id">
                            <h2 class="bc-header">
                                <a class="bc-header-link ng-binding" rel="v:url" property="v:title" typeof="v:Breadcrumb" ng-href="/categories/2366-card-games" href="/categories/2366-card-games">Card Games</a>
                            </h2>
                        </li>
                    </ul>
                </section>
                <section class="content">
                    <div ng-view></div>
                    <!--
                    <section class="content-section ng-scope" ng-if="featured && featured.length > 0">
                        <h2 class="header-title ng-binding">Featured Games</h2>
                        <article class="board-container ng-scope ng-isolate-scope" itemtype="http://schema.org/Article" itemscope="" section="featured" index="0" ng-repeat="board in featured track by board.id" lst-board-tile="board">
                            <div class="ng-scope" ng-include="templatePath">
                                <a class="ng-scope" itemprop="url" ng-href="/users/58/boards/10649-board-games-for-one" rel="bookmark" ng-click="checkBoardPermissions(board, $event)" href="/users/58/boards/10649-board-games-for-one">
                                    <figure class="board-figure" ng-style="{'background-image': 'url(http://assets0.learni.st/board_image/1743846/image/w500h500_10649-board-games-for-one.jpg)'}" style="background-image: url("http://assets0.learni.st/board_image/1743846/image/w500h500_10649-board-games-for-one.jpg");"></figure>
                                </a>
                                <div class="board-content ng-scope" itemprop="articleBody">
                                    <a class="board-category ng-binding" ng-href="/categories/8-games" href="/categories/8-games">Games</a>
                                    <meta content="2012-12-29" itemprop="datePublished">
                                    <h3 class="board-title" itemprop="headline">
                                        <a class="ng-binding" itemprop="url" ng-href="/users/58/boards/10649-board-games-for-one" rel="bookmark" ng-click="checkBoardPermissions(board, $event)" href="/users/58/boards/10649-board-games-for-one">Board Games for One</a>
                                    </h3>
                                    <a class="author" itemprop="url" itemtype="http://schema.org/Person" ng-href="/users/58" rel="bookmark" href="/users/58">
                                        <span class="ng-binding" itemprop="author">Jim Jacobson</span>
                                        <span class="stats">
                                            <span class="bullet ng-scope" ng-if="board.commentCount > 0">•</span>
                                            <i class="fa fa-comment ng-binding ng-scope" ng-if="board.commentCount > 0">7</i>
                                            <span class="bullet ng-scope" ng-if="board.readingListUserCount > 0">•</span>
                                            <i class="fa fa-bookmark ng-binding ng-scope" ng-if="board.readingListUserCount > 0">303</i>
                                        </span>
                                    </a>
                                    <a itemprop="url" ng-href="/users/58/boards/10649-board-games-for-one" rel="bookmark" ng-click="checkBoardPermissions(board, $event)" href="/users/58/boards/10649-board-games-for-one">
                                        <p class="board-description ng-binding" itemprop="description">Not every board game requires other players, so if you tire of Minesweeper and Hearts on your computer, here are some great games (with interesting themes) to play on your own.</p>
                                    </a>
                                    <div class="ng-scope" ng-include="templatePath" title="Bookmark" lst-reading-list-buttons="board">
                                        <a class="bookmark ng-scope" ng-class="{added: isInReadingList}" ng-click="toggleInReadingList()">
                                            <i class="fa fa-bookmark" ng-class="{added: isInReadingList}"></i>
                                            <span class="ng-scope" ng-if="!isInReadingList">Add to Reading List</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </section>
                    -->
                </section>
            </div>
        </div>
    </main>

    <div ui-view='flash-message'></div>
    <div id='fb-root'></div>


    <noscript>
    <div class='message'>Whoops! Learnist doesn't work unless you <a href='http://enable-javascript.com/' rel='nofollow'>turn on JavaScript.</a></div>
    </noscript>

    <script>
                        /* <![CDATA[ */
                        var google_conversion_id = 975171609;
                                var google_custom_params = window.google_tag_params;
                                var google_remarketing_only = true;
                                /* ]]> */
    </script>
    <script src='//www.googleadservices.com/pagead/conversion.js'></script>

    <script type='text/javascript' src='https://static-na.payments-amazon.com/OffAmazonPayments/us/js/Widgets.js?sellerId=AXPGJDFUVUGPP'>
    </script>

</script>

<noscript>
<div style='display:inline'>
    <img height='1' width='1' style='border:none' alt='' src='//googleads.g.doubleclick.net/pagead/viewthroughconversion/975171609/?value=0&amp;guid=ON&amp;script=0'/>
</div>
</noscript>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
