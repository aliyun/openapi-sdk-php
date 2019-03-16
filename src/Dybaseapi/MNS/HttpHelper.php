<?php

namespace AlibabaCloud\Dybaseapi\MNS;

use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Result\Result;
use GuzzleHttp\Psr7\Response;

/**
 * Class HttpHelper
 *
 * @package AlibabaCloud\Dybaseapi\MNS
 */
class HttpHelper
{
    /**
     * @var int
     */
    public static $connectTimeout = 30; //30 second

    /**
     * @var int
     */
    public static $readTimeout = 80; //80 second

    /**
     * @param        $url
     * @param string $httpMethod
     * @param null   $postFields
     * @param null   $headers
     *
     * @return Result
     * @throws ClientException
     */
    public static function curl($url, $httpMethod = 'GET', $postFields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $httpMethod);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, is_array($postFields) ? self::getPostHttpBody($postFields) : $postFields);

        if (self::$readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
        }
        if (self::$connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
        }
        //https request
        if (strlen($url) > 5 && stripos($url, 'https') === 0) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if (is_array($headers) && 0 < count($headers)) {
            $httpHeaders = self::getHttpHearders($headers);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
        }

        $body = curl_exec($ch);
        libxml_disable_entity_loader();
        $json     = json_encode(simplexml_load_string($body, 'SimpleXMLElement', LIBXML_NOCDATA));
        $response = new Response(
            curl_getinfo($ch, CURLINFO_HTTP_CODE),
            [],
            $json
        );

        if (curl_errno($ch)) {
            throw new ClientException(
                'Server unreachable: Errno: ' . curl_errno($ch) . ' ' . curl_error($ch),
                'SDK.ServerUnreachable'
            );
        }
        curl_close($ch);

        return new Result($response);
    }

    /**
     * @param $postFildes
     *
     * @return bool|string
     */
    public static function getPostHttpBody($postFildes)
    {
        $content = '';
        foreach ($postFildes as $apiParamKey => $apiParamValue) {
            $content .= "$apiParamKey=" . urlencode($apiParamValue) . '&';
        }

        return substr($content, 0, -1);
    }

    /**
     * @param $headers
     *
     * @return array
     */
    public static function getHttpHearders($headers)
    {
        $httpHeader = [];
        foreach ($headers as $key => $value) {
            $httpHeader[] = $key . ':' . $value;
        }

        return $httpHeader;
    }
}
