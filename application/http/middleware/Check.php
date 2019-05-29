<?php

namespace app\http\middleware;

class Check
{
    public function handle($request, \Closure $next)
    {
        if (preg_match('~micromessenger~i', $request->header('user-agent'))) {
            $request->InApp = 'WeChat';
        } else if (preg_match('~alipay~i', $request->header('user-agent'))) {
            $request->InApp = 'Alipay';
        } else {
            $request -> InApp = '浏览器';
        }
        return $next($request);
    }
}
