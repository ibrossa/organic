<?php


namespace App\Traits;


use ChrisKonnertz\OpenGraph\OpenGraphFacade;

trait HasOpenGraph
{
    public function returnOG($page)
    {
        return OpenGraphFacade::title($page->title)
            ->image($page->image)
            ->description($page->sub_title)
            ->siteName('Organic');
    }

    public function returnOGPost($page)
    {
        return OpenGraphFacade::title($page->title)
            ->image($page->image)
            ->description($page->small_description)
            ->siteName('Organic');
    }

    public function returnOGProduct($page)
    {
        return OpenGraphFacade::title($page->title)
            ->image($page->image)
            ->description($page->description)
            ->siteName('Organic');
    }
}
