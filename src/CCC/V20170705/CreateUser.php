<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUser
 *
 * @method string getPrivateOutboundNumberId()
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method string getLoginName()
 * @method string getPhone()
 * @method array getRoleId()
 * @method string getDisplayName()
 * @method array getSkillGroupId()
 * @method string getEmail()
 */
class CreateUser extends RpcRequest
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
    public $action = 'CreateUser';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withPrivateOutboundNumberId() instead.
     *
     * @param string $privateOutboundNumberId
     *
     * @return $this
     */
    public function setPrivateOutboundNumberId($privateOutboundNumberId)
    {
        return $this->withPrivateOutboundNumberId($privateOutboundNumberId);
    }

    /**
     * @param string $privateOutboundNumberId
     *
     * @return $this
     */
    public function withPrivateOutboundNumberId($privateOutboundNumberId)
    {
        $this->data['PrivateOutboundNumberId'] = $privateOutboundNumberId;
        $this->options['query']['PrivateOutboundNumberId'] = $privateOutboundNumberId;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withLoginName() instead.
     *
     * @param string $loginName
     *
     * @return $this
     */
    public function setLoginName($loginName)
    {
        return $this->withLoginName($loginName);
    }

    /**
     * @param string $loginName
     *
     * @return $this
     */
    public function withLoginName($loginName)
    {
        $this->data['LoginName'] = $loginName;
        $this->options['query']['LoginName'] = $loginName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPhone() instead.
     *
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        return $this->withPhone($phone);
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function withPhone($phone)
    {
        $this->data['Phone'] = $phone;
        $this->options['query']['Phone'] = $phone;

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
     * @deprecated deprecated since version 2.0, Use withDisplayName() instead.
     *
     * @param string $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        return $this->withDisplayName($displayName);
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function withDisplayName($displayName)
    {
        $this->data['DisplayName'] = $displayName;
        $this->options['query']['DisplayName'] = $displayName;

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
     * @deprecated deprecated since version 2.0, Use withEmail() instead.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->withEmail($email);
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function withEmail($email)
    {
        $this->data['Email'] = $email;
        $this->options['query']['Email'] = $email;

        return $this;
    }
}
