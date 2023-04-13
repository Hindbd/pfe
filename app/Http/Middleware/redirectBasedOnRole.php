<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class redirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if user is authenticated
        if (auth()->check()) {
            // Get user's role
            $role = auth()->user()->role;
    
            // Redirect to appropriate dashboard based on role
            switch ($role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'enseignant':
                    return redirect()->route('enseignant.dashboard');
                case 'partenaire':
                    return redirect()->route('partenaire.dashboard');
                case 'encadrant':
                    return redirect()->route('encadrant.dashboard');
                default:
                    // If user role is not defined, you can handle it as per your application requirements
                    // For example, redirect to a default dashboard or show an error message
    
                    // return redirect()->route('default.dashboard');
                    // or
                    // return abort(403, 'Unauthorized');
            }
        }
    
        // If user is not authenticated, redirect to login
        return redirect()->route('login');
    }
    
}
