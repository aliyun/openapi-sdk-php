<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api ModifyGroupInstance
 *
 * @method string getTargetInstanceId()
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getRemark()
 */
class ModifyGroupInstance extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

    /**
     * @param string $targetInstanceId
     *
     * @return $this
     */
    public function withTargetInstanceId($targetInstanceId)
    {
        $this->data['TargetInstanceId'] = $targetInstanceId;
        $this->options['query']['TargetInstanceId'] = $targetInstanceId;

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
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }
}
