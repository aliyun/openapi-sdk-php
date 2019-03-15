<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getPrivateOutboundNumberId()
 * @method $this withPrivateOutboundNumberId($value)
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLoginName()
 * @method $this withLoginName($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method array getRoleId()
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method array getSkillGroupId()
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateUser extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

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
}
