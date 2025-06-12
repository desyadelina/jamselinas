<?php

namespace App\Helpers;

class NavigationHelper
{
    public static function getSmartBackUrl()
    {
        $currentRoute = request()->route()->getName();
        $previousUrl = url()->previous();
        $currentUrl = url()->current();
        
        // kalau semisal previous URL sama dengan current url, return ke home
        if ($previousUrl === $currentUrl) {
            return route('landing');
        }
        
        // definisiin route pairs yang saling terkait
        $routePairs = [
            'form.login' => 'form.pendaftaran',
            'form.pendaftaran' => 'form.login',
        ];
        
        // kalau current route punya pasangan, cek apakah previous url adalah pasangannya
        if (isset($routePairs[$currentRoute])) {
            $pairRoute = $routePairs[$currentRoute];
            $pairUrl = route($pairRoute);
            
            // kalo previous url adalah pasangan route, skip ke home
            if (str_contains($previousUrl, $pairUrl) || str_contains($previousUrl, route($pairRoute))) {
                return route('landing');
            }
        }
        
        // buat auth pages, jika previous adalah auth page lain, return ke landing
        $authRoutes = ['form.login', 'form.pendaftaran'];
        if (in_array($currentRoute, $authRoutes)) {
            foreach ($authRoutes as $authRoute) {
                if ($authRoute !== $currentRoute && str_contains($previousUrl, route($authRoute))) {
                    return route('landing');
                }
            }
        }
        
        // default behavior - return previous URL
        return $previousUrl;
    }
    
    public static function getBackButtonUrl($fallbackRoute = 'landing')
    {
        $smartBackUrl = self::getSmartBackUrl();
        
        // kalau semisal smart back url adalah current url, maka fallback ke route yang ditentuin
        if ($smartBackUrl === url()->current()) {
            return route($fallbackRoute);
        }
        
        return $smartBackUrl;
    }
}