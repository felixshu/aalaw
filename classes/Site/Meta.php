<?php
namespace Site;
use Seo;

class Meta {

    public static function keywords($view) {
        $keywords = '';
        if (isset($view->node)) {
            $seo = Seo::getSEO($view->node->id, 'node');
            if ($seo && $seo->meta_keywords) {
                return "<meta name='keywords' content='{$seo->meta_keywords}'/>\n";
            }
        }
        return null;
    }

    public static function description($view) {
        $description = '';
        if (isset($view->node)) {
            $seo = Seo::getSEO($view->node->id, 'node');
            if ($seo && $seo->meta_description) {
                return "<meta name='description' property='og:description' content='{$seo->meta_description}'/>\n";
            }

        }
        return null;
    }

    public static function title($view) {

        $title = '';

        if ($view->node) {
            $seo = Seo::getSEO($view->node->id, 'node');
            if ($seo && $seo->meta_title) {
                $title = $seo->meta_title;
            }
            if ($title == '') $title = $view->node->title;
        }

        if ($view->title) {
            $title = $view->title;
        }

        if ($title != '') $title .= ' | ';
        $title .= SITE_TITLE;

        return static::outputTitle($title);

    }

    public static function outputTitle($title) {

        return "<title>{$title}</title>\n  <meta property='og:title' content='{$title}' />\n";

    }

}
