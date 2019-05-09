<?php

/** @noinspection PhpMissingDocCommentInspection */

namespace AlibabaCloud\Dybaseapi\MNS;

use AlibabaCloud\Dybaseapi\MNS\Requests\BaseRequest;

/**
 * Class Signature
 *
 * @package AlibabaCloud\Dybaseapi\MNS
 */
class Signature
{
    const MNS_HEADER_PREFIX = 'x-mns';

    /**
     * @param string      $accessKey
     * @param BaseRequest $request
     *
     * @return string
     */
    public static function SignRequest($accessKey, BaseRequest $request)
    {
        $headers    = $request->getHeaders();
        $contentMd5 = '';
        if (isset($headers['Content-MD5'])) {
            $contentMd5 = $headers['Content-MD5'];
        }
        $contentType = '';
        if (isset($headers['Content-Type'])) {
            $contentType = $headers['Content-Type'];
        }
        $date                  = $headers['Date'];
        $queryString           = $request->getQueryString();
        $canonicalizedResource = $request->getResourcePath();
        if ($queryString !== null) {
            $canonicalizedResource .= '?' . $request->getQueryString();
        }
        if (0 !== strpos($canonicalizedResource, '/')) {
            $canonicalizedResource = '/' . $canonicalizedResource;
        }

        $tmpHeaders = [];
        foreach ($headers as $key => $value) {
            if (0 === strpos($key, Constants::MNS_HEADER_PREFIX)) {
                $tmpHeaders[$key] = $value;
            }
        }

        $canonicalizedMNSHeaders = implode(
            "\n",
            array_map(
                static function ($v, $k) {
                    return $k . ':' . $v;
                },
                $tmpHeaders,
                array_keys($tmpHeaders)
            )
        );

        $stringToSign =
            strtoupper($request->getMethod()) . "\n" . $contentMd5 . "\n" . $contentType . "\n" . $date . "\n" . $canonicalizedMNSHeaders . "\n" . $canonicalizedResource;

        return base64_encode(hash_hmac('sha1', $stringToSign, $accessKey, $raw_output = true));
    }
}
