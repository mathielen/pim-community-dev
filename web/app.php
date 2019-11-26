<?php
use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../vendor/autoload.php';
$kernel = new AppKernel('prod', false);
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();

/* In case your app is running behind a reverse-proxy/load-balancer set an environment variable TRUSTED_PROXY_IPS
   defining IPs or IP ranges as a comma list (example : TRUSTED_PROXY_IPS="10.0.0.0/8")
   to allow usage of X-Forwarded-* headers.
   This also allows keeping the HTTPS protocol for any URL generated in the PIM */
$loadBalancerTrustedIPs = getenv('TRUSTED_PROXY_IPS');
if (!empty($loadBalancerTrustedIPs)) {
    $ipsArray = explode(',', $loadBalancerTrustedIPs);
    Request::setTrustedProxies(
        // the IP address (or range) of your proxy
        $ipsArray,
        // trust *all* "X-Forwarded-*" headers
        Request::HEADER_X_FORWARDED_ALL
        // or, if your proxy instead uses the "Forwarded" header
        // Request::HEADER_FORWARDED
        // or, if you're using AWS ELB
        // Request::HEADER_X_FORWARDED_AWS_ELB
    );
}

$response = $kernel->handle($request);

$policy = "default-src 'self' *.akeneo.com 'unsafe-inline'; script-src 'self' 'unsafe-eval' 'nonce-2726c7f26c'";
$response->headers->set("Content-Security-Policy-Report-Only", $policy);
$response->headers->set("X-Content-Security-Policy-Report-Only", $policy);
$response->headers->set("X-WebKit-CSP-Report-Only", $policy);

$response->send();
$kernel->terminate($request, $response);
