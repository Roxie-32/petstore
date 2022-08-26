<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\Token\Parser;
use Lcobucci\JWT\Validation\Constraint\RelatedTo;
use Lcobucci\JWT\Validation\Validator;


class JwtMiddleware
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
         $access_token = $request->bearerToken();

         if(!$access_token){

            return new JsonResponse(['error'=>'Invalid Bearer Token'],400);
         }

        $parser = new Parser(new JoseEncoder());

        $token = $parser->parse($access_token);

        $validator = new Validator();

        try {
            $validator->assert($token, new RelatedTo('1234567891')); // doesn't throw na exception
            $validator->assert($token, new RelatedTo('1234567890'));
        } catch (RequiredConstraintsViolated $e) {
            // list of constraints violation exceptions:
            var_dump($e->violations());
        }

        return $next($request);
    }
}
