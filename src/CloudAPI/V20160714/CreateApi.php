<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateApi
 *
 * @method string getResultDescriptions()
 * @method string getWebSocketApiType()
 * @method string getVisibility()
 * @method string getGroupId()
 * @method string getErrorCodeSamples()
 * @method string getDescription()
 * @method string getServiceConfig()
 * @method string getConstantParameters()
 * @method string getResultType()
 * @method string getAuthType()
 * @method string getAllowSignatureMethod()
 * @method string getServiceParameters()
 * @method string getFailResultSample()
 * @method string getApiName()
 * @method string getSystemParameters()
 * @method string getServiceParametersMap()
 * @method string getResultSample()
 * @method string getSecurityToken()
 * @method string getOpenIdConnectConfig()
 * @method string getRequestParameters()
 * @method string getRequestConfig()
 * @method string getResultBodyModel()
 */
class CreateApi extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'CreateApi';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $resultDescriptions
     *
     * @return $this
     */
    public function withResultDescriptions($resultDescriptions)
    {
        $this->data['ResultDescriptions'] = $resultDescriptions;
        $this->options['query']['ResultDescriptions'] = $resultDescriptions;

        return $this;
    }

    /**
     * @param string $webSocketApiType
     *
     * @return $this
     */
    public function withWebSocketApiType($webSocketApiType)
    {
        $this->data['WebSocketApiType'] = $webSocketApiType;
        $this->options['query']['WebSocketApiType'] = $webSocketApiType;

        return $this;
    }

    /**
     * @param string $visibility
     *
     * @return $this
     */
    public function withVisibility($visibility)
    {
        $this->data['Visibility'] = $visibility;
        $this->options['query']['Visibility'] = $visibility;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $errorCodeSamples
     *
     * @return $this
     */
    public function withErrorCodeSamples($errorCodeSamples)
    {
        $this->data['ErrorCodeSamples'] = $errorCodeSamples;
        $this->options['query']['ErrorCodeSamples'] = $errorCodeSamples;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $serviceConfig
     *
     * @return $this
     */
    public function withServiceConfig($serviceConfig)
    {
        $this->data['ServiceConfig'] = $serviceConfig;
        $this->options['query']['ServiceConfig'] = $serviceConfig;

        return $this;
    }

    /**
     * @param string $constantParameters
     *
     * @return $this
     */
    public function withConstantParameters($constantParameters)
    {
        $this->data['ConstantParameters'] = $constantParameters;
        $this->options['query']['ConstantParameters'] = $constantParameters;

        return $this;
    }

    /**
     * @param string $resultType
     *
     * @return $this
     */
    public function withResultType($resultType)
    {
        $this->data['ResultType'] = $resultType;
        $this->options['query']['ResultType'] = $resultType;

        return $this;
    }

    /**
     * @param string $authType
     *
     * @return $this
     */
    public function withAuthType($authType)
    {
        $this->data['AuthType'] = $authType;
        $this->options['query']['AuthType'] = $authType;

        return $this;
    }

    /**
     * @param string $allowSignatureMethod
     *
     * @return $this
     */
    public function withAllowSignatureMethod($allowSignatureMethod)
    {
        $this->data['AllowSignatureMethod'] = $allowSignatureMethod;
        $this->options['query']['AllowSignatureMethod'] = $allowSignatureMethod;

        return $this;
    }

    /**
     * @param string $serviceParameters
     *
     * @return $this
     */
    public function withServiceParameters($serviceParameters)
    {
        $this->data['ServiceParameters'] = $serviceParameters;
        $this->options['query']['ServiceParameters'] = $serviceParameters;

        return $this;
    }

    /**
     * @param string $failResultSample
     *
     * @return $this
     */
    public function withFailResultSample($failResultSample)
    {
        $this->data['FailResultSample'] = $failResultSample;
        $this->options['query']['FailResultSample'] = $failResultSample;

        return $this;
    }

    /**
     * @param string $apiName
     *
     * @return $this
     */
    public function withApiName($apiName)
    {
        $this->data['ApiName'] = $apiName;
        $this->options['query']['ApiName'] = $apiName;

        return $this;
    }

    /**
     * @param string $systemParameters
     *
     * @return $this
     */
    public function withSystemParameters($systemParameters)
    {
        $this->data['SystemParameters'] = $systemParameters;
        $this->options['query']['SystemParameters'] = $systemParameters;

        return $this;
    }

    /**
     * @param string $serviceParametersMap
     *
     * @return $this
     */
    public function withServiceParametersMap($serviceParametersMap)
    {
        $this->data['ServiceParametersMap'] = $serviceParametersMap;
        $this->options['query']['ServiceParametersMap'] = $serviceParametersMap;

        return $this;
    }

    /**
     * @param string $resultSample
     *
     * @return $this
     */
    public function withResultSample($resultSample)
    {
        $this->data['ResultSample'] = $resultSample;
        $this->options['query']['ResultSample'] = $resultSample;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $openIdConnectConfig
     *
     * @return $this
     */
    public function withOpenIdConnectConfig($openIdConnectConfig)
    {
        $this->data['OpenIdConnectConfig'] = $openIdConnectConfig;
        $this->options['query']['OpenIdConnectConfig'] = $openIdConnectConfig;

        return $this;
    }

    /**
     * @param string $requestParameters
     *
     * @return $this
     */
    public function withRequestParameters($requestParameters)
    {
        $this->data['RequestParameters'] = $requestParameters;
        $this->options['query']['RequestParameters'] = $requestParameters;

        return $this;
    }

    /**
     * @param string $requestConfig
     *
     * @return $this
     */
    public function withRequestConfig($requestConfig)
    {
        $this->data['RequestConfig'] = $requestConfig;
        $this->options['query']['RequestConfig'] = $requestConfig;

        return $this;
    }

    /**
     * @param string $resultBodyModel
     *
     * @return $this
     */
    public function withResultBodyModel($resultBodyModel)
    {
        $this->data['ResultBodyModel'] = $resultBodyModel;
        $this->options['query']['ResultBodyModel'] = $resultBodyModel;

        return $this;
    }
}
