<?php

namespace SocialSoc\Http\Middleware;
use Session;

use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(!empty(Session::get('admin_id'))){
            if(app()->router->getCurrentRoute()->uri=='apanel/login'){
                return redirect('apanel/');
            }else{
               return $next($request); 
            }
        }else{
            if(app()->router->getCurrentRoute()->uri=='apanel/login'){
                return $next($request); 
            }else{


                    if(app()->router->getCurrentRoute()->uri=='apanel/login/checkLogin'){
                        return $next($request); 
                    }else{
                        return redirect('apanel/login');
                    }
            }
           
        }
            
           exit;
        
    }
}
