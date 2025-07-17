<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DateTime;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        $dob = '2003-08-12'; 
        $dateOfBirth = new DateTime($dob);
        $currentDate = new DateTime();
        $age = $currentDate->diff($dateOfBirth)->y;
        $request->age = $age;
        if ($request->age < 18) {
            // If under 18, redirect to a different page
            die("<p>You are not old enough to access this page. Please come back when you are 18 or older.</p>");
        } else {
            echo "<p>Welcome! You are $age years old.</p>";
        }
        return $next($request);

    }
}
