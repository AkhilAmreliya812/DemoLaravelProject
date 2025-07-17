<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $country = "India"; 

        $request->country = $country;

        if (!$country || $country !== 'India') {
            // If the country is not India, redirect to a different page
            die("<p>Access denied. This service is only available in India.</p>");
        } else {
            echo "<p>Welcome! You are accessing this service from $country.</p>";
        }
        return $next($request);
    }
}

