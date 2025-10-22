<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

class SitemapController extends Controller
{
    /**
     * Generate and return the XML sitemap for PCAppTrack
     */
    public function index(): Response
    {
        $sitemap = Sitemap::create();

        // Main landing page - PCAppTrack Application Tracking System
        $sitemap->add(
            Url::create(config('app.url'))
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0)
        );

        // Coconut Farmers FAQ page
        $sitemap->add(
            Url::create(config('app.url') . '/coconut-farmers-faq')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8)
        );

        // Note: We don't include individual application tracking URLs as they are dynamic
        // and require specific application IDs. These should not be indexed by search engines
        // for privacy and security reasons.

        return response($sitemap->render(), 200)
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Generate and return the robots.txt file
     */
    public function robots(): Response
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n";
        $content .= "Allow: /coconut-farmers-faq\n";
        $content .= "\n";
        
        // Disallow direct API access and application tracking URLs for privacy
        $content .= "Disallow: /applications/\n";
        $content .= "Disallow: /api/\n";
        $content .= "\n";
        
        // Add sitemap location
        $content .= "Sitemap: " . config('app.url') . "/sitemap.xml\n";

        return response($content, 200)
            ->header('Content-Type', 'text/plain');
    }
}