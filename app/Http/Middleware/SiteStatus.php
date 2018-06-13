<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Site;
use Symfony\Component\HttpKernel\Exception\HttpException;
class SiteStatus
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
        //检测网站是否开启
        $site_status = Site::where('site_status',1)->first();
        // dd($site_status);
        if($site_status){
             return $next($request);//执行下一次请求
        }else{
            //跳转到维护页面
            throw new HttpException(503);
        }
    }
}
