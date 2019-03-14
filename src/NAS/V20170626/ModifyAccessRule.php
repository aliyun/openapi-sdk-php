<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api ModifyAccessRule
 *
 * @method string getRWAccessType()
 * @method string getSourceCidrIp()
 * @method string getUserAccessType()
 * @method string getPriority()
 * @method string getAccessGroupName()
 * @method string getAccessRuleId()
 */
class ModifyAccessRule extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';

    /**
     * @param string $rWAccessType
     *
     * @return $this
     */
    public function withRWAccessType($rWAccessType)
    {
        $this->data['RWAccessType'] = $rWAccessType;
        $this->options['query']['RWAccessType'] = $rWAccessType;

        return $this;
    }

    /**
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function withSourceCidrIp($sourceCidrIp)
    {
        $this->data['SourceCidrIp'] = $sourceCidrIp;
        $this->options['query']['SourceCidrIp'] = $sourceCidrIp;

        return $this;
    }

    /**
     * @param string $userAccessType
     *
     * @return $this
     */
    public function withUserAccessType($userAccessType)
    {
        $this->data['UserAccessType'] = $userAccessType;
        $this->options['query']['UserAccessType'] = $userAccessType;

        return $this;
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function withAccessGroupName($accessGroupName)
    {
        $this->data['AccessGroupName'] = $accessGroupName;
        $this->options['query']['AccessGroupName'] = $accessGroupName;

        return $this;
    }

    /**
     * @param string $accessRuleId
     *
     * @return $this
     */
    public function withAccessRuleId($accessRuleId)
    {
        $this->data['AccessRuleId'] = $accessRuleId;
        $this->options['query']['AccessRuleId'] = $accessRuleId;

        return $this;
    }
}
