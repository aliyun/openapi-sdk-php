<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateApiStageVariable
 *
 * @method string getSupportRoute()
 * @method string getSecurityToken()
 * @method string getVariableName()
 * @method string getVariableValue()
 * @method string getGroupId()
 * @method string getStageRouteModel()
 * @method string getStageId()
 */
class CreateApiStageVariable extends RpcRequest
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
    public $action = 'CreateApiStageVariable';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $supportRoute
     *
     * @return $this
     */
    public function withSupportRoute($supportRoute)
    {
        $this->data['SupportRoute'] = $supportRoute;
        $this->options['query']['SupportRoute'] = $supportRoute;

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
     * @param string $variableName
     *
     * @return $this
     */
    public function withVariableName($variableName)
    {
        $this->data['VariableName'] = $variableName;
        $this->options['query']['VariableName'] = $variableName;

        return $this;
    }

    /**
     * @param string $variableValue
     *
     * @return $this
     */
    public function withVariableValue($variableValue)
    {
        $this->data['VariableValue'] = $variableValue;
        $this->options['query']['VariableValue'] = $variableValue;

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
     * @param string $stageRouteModel
     *
     * @return $this
     */
    public function withStageRouteModel($stageRouteModel)
    {
        $this->data['StageRouteModel'] = $stageRouteModel;
        $this->options['query']['StageRouteModel'] = $stageRouteModel;

        return $this;
    }

    /**
     * @param string $stageId
     *
     * @return $this
     */
    public function withStageId($stageId)
    {
        $this->data['StageId'] = $stageId;
        $this->options['query']['StageId'] = $stageId;

        return $this;
    }
}
