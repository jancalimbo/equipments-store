<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class  itPostMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //get the post id from request
        $post = $request->route('post');

        if(!$post->isEditable()){
            return redirect('/posts/my-posts')->with('Error','Sorry you are not the owner of this post');
        }
        return $next($request);
    }
}
