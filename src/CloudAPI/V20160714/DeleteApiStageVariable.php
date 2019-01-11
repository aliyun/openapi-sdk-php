<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteApiStageVariable
 *
 * @method string getSecurityToken()
 * @method string getVariableName()
 * @method string getGroupId()
 * @method string getStageId()
 */
class DeleteApiStageVariable extends RpcRequest
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
    public $action = 'DeleteApiStageVariable';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

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
