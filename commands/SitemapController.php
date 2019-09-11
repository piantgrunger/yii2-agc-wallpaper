<?php

namespace app\commands;

use yii\console\Controller;
use samdark\sitemap\Sitemap;
use samdark\sitemap\Index;




 use app\models\Wallpaper;

class SitemapController extends Controller
{
    
    public function actionIndex()
    {
        $sitemap = new Sitemap(@web . '/sitemap.xml');

// add some URLs
        $models = Wallpaper::find()->all();
        foreach ($models as $wallpaper) {
            $sitemap->addItem('http://wallpoper.id/wallpaper/' . $wallpaper->slug, time(), Sitemap::DAILY, 0.3);
        }
// write it
        $sitemap->write();

// get URLs of sitemaps written
        $sitemapFileUrls = $sitemap->getSitemapUrls('https://wallpoper.id/');


// create sitemap index file
        $index = new Index(@web . '/sitemap_index.xml');

// add URLs
        foreach ($sitemapFileUrls as $sitemapUrl) {
            $index->addSitemap($sitemapUrl);
        }



// write it
        $index->write();
    }
}
