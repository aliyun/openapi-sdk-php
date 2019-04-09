<?php

namespace AlibabaCloud\Dybaseapi\MNS;

use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Result\Result;
use AlibabaCloud\Dybaseapi\MNS\Requests\BaseRequest;

/**
 * Class MnsClient
 *
 * @package AlibabaCloud\Dybaseapi\MNS
 */
class MnsClient
{
    /**
     * @var string
     */
    private $accessId;

    /**
     * @var string
     */
    private $accessKey;

    /**
     * @var string
     */
    private $securityToken;

    /**
     * @var string
     */
    private $endpoint;

    /**
     * Client constructor.
     *
     * @param $endPoint
     * @param $accessId
     * @param $accessKey
     * @param $securityToken
     */
    public function __construct($endPoint, $accessId, $accessKey, $securityToken)
    {
        $this->endpoint      = $endPoint;
        $this->accessId      = $accessId;
        $this->accessKey     = $accessKey;
        $this->securityToken = $securityToken;
    }

    /**
     * @param BaseRequest $request
     *
     * @return Result
     * @throws ClientException
     * @throws ServerException
     */
    public function sendRequest(BaseRequest $request)
    {
        $this->addRequiredHeaders($request);

        $queryString = $request->getQueryString();
        $body        = $request->getBody();

        $result = HttpHelper::curl(
            preg_replace('/\/+$/', '', $this->endpoint) . '//' . $request->getResourcePath() . "?$queryString",
            strtoupper($request->getMethod()),
            $body,
            $request->getHeaders()
        );

        if (!$result->isSuccess()) {
            throw new ServerException($result);
        }

        return $result;
    }

    /**
     * @param BaseRequest $request
     */
    private function addRequiredHeaders(BaseRequest $request)
    {
        $body        = $request->generateBody();
        $queryString = $request->generateQueryString();

        $request->setBody($body);
        $request->setQueryString($queryString);

        if ($body !== null) {
            $request->setHeader(Constants::CONTENT_LENGTH, strlen($body));
        }
        $request->setHeader('Date', gmdate(Constants::GMT_DATE_FORMAT));
        if (!$request->isHeaderSet(Constants::CONTENT_TYPE)) {
            $request->setHeader(Constants::CONTENT_TYPE, 'text/xml');
        }
        $request->setHeader(Constants::MNS_VERSION_HEADER, Constants::MNS_VERSION);

        if ($this->securityToken !== null) {
            $request->setHeader(Constants::SECURITY_TOKEN, $this->securityToken);
        }

        $sign = Signature::SignRequest($this->accessKey, $request);
        $request->setHeader(
            Constants::AUTHORIZATION,
            Constants::MNS . ' ' . $this->accessId . ':' . $sign
        );
    }
}
