<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveUsersFromSkillGroup
 *
 * @method string getInstanceId()
 * @method string getSkillGroupId()
 * @method array getUserId()
 */
class RemoveUsersFromSkillGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'RemoveUsersFromSkillGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function withSkillGroupId($skillGroupId)
    {
        $this->data['SkillGroupId'] = $skillGroupId;
        $this->options['query']['SkillGroupId'] = $skillGroupId;

        return $this;
    }

    /**
     * @param array $userId
     *
     * @return $this
     */
    public function withUserId(array $userId)
    {
        $this->data['UserId'] = $userId;
        foreach ($userId as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
