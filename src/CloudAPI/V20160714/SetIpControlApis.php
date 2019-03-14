<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api SetIpControlApis
 *
 * @method string getStageName()
 * @method string getIpControlId()
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getApiIds()
 */
class SetIpControlApis extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function withStageName($stageName)
    {
        $this->data['StageName'] = $stageName;
        $this->options['query']['StageName'] = $stageName;

        return $this;
    }

    /**
     * @param string $ipControlId
     *
     * @return $this
     */
    public function withIpControlId($ipControlId)
    {
        $this->data['IpControlId'] = $ipControlId;
        $this->options['query']['IpControlId'] = $ipControlId;

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
     * @param string $apiIds
     *
     * @return $this
     */
    public function withApiIds($apiIds)
    {
        $this->data['ApiIds'] = $apiIds;
        $this->options['query']['ApiIds'] = $apiIds;

        return $this;
    }
}
