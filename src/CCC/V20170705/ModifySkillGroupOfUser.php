<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySkillGroupOfUser
 *
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method array getRoleId()
 * @method array getSkillGroupId()
 * @method string getUserId()
 */
class ModifySkillGroupOfUser extends RpcRequest
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
    public $action = 'ModifySkillGroupOfUser';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use getSkillLevel() instead.
     *
     * @return array
     */
    public function getSkillLevels()
    {
        return $this->getSkillLevel();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSkillLevel() instead.
     *
     * @param array $skillLevels
     *
     * @return $this
     */
    public function setSkillLevels(array $skillLevels)
    {
        return $this->withSkillLevel($skillLevels);
    }

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
    public function withSkillLevel(array $skillLevel)
    {
        $this->data['SkillLevel'] = $skillLevel;
        foreach ($skillLevel as $i => $iValue) {
            $this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

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
     * @deprecated deprecated since version 2.0, Use getRoleId() instead.
     *
     * @return array
     */
    public function getRoleIds()
    {
        return $this->getRoleId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRoleId() instead.
     *
     * @param array $roleIds
     *
     * @return $this
     */
    public function setRoleIds(array $roleIds)
    {
        return $this->withRoleId($roleIds);
    }

    /**
     * @param array $roleId
     *
     * @return $this
     */
    public function withRoleId(array $roleId)
    {
        $this->data['RoleId'] = $roleId;
        foreach ($roleId as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getSkillGroupId() instead.
     *
     * @return array
     */
    public function getSkillGroupIds()
    {
        return $this->getSkillGroupId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSkillGroupId() instead.
     *
     * @param array $skillGroupIds
     *
     * @return $this
     */
    public function setSkillGroupIds(array $skillGroupIds)
    {
        return $this->withSkillGroupId($skillGroupIds);
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
    public function withSkillGroupId(array $skillGroupId)
    {
        $this->data['SkillGroupId'] = $skillGroupId;
        foreach ($skillGroupId as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserId() instead.
     *
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        return $this->withUserId($userId);
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }
}
