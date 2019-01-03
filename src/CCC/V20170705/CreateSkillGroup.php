<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSkillGroup
 *
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method array getOutboundPhoneNumberId()
 * @method string getName()
 * @method string getDescription()
 * @method array getUserId()
 */
class CreateSkillGroup extends RpcRequest
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
    public $action = 'CreateSkillGroup';

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
     * @deprecated deprecated since version 2.0, Use getOutboundPhoneNumberId() instead.
     *
     * @return array
     */
    public function getOutboundPhoneNumberIds()
    {
        return $this->getOutboundPhoneNumberId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOutboundPhoneNumberId() instead.
     *
     * @param array $outboundPhoneNumberIds
     *
     * @return $this
     */
    public function setOutboundPhoneNumberIds(array $outboundPhoneNumberIds)
    {
        return $this->withOutboundPhoneNumberId($outboundPhoneNumberIds);
    }

    /**
     * @param array $outboundPhoneNumberId
     *
     * @return $this
     */
    public function withOutboundPhoneNumberId(array $outboundPhoneNumberId)
    {
        $this->data['OutboundPhoneNumberId'] = $outboundPhoneNumberId;
        foreach ($outboundPhoneNumberId as $i => $iValue) {
            $this->options['query']['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use getUserId() instead.
     *
     * @return array
     */
    public function getUserIds()
    {
        return $this->getUserId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserId() instead.
     *
     * @param array $userIds
     *
     * @return $this
     */
    public function setUserIds(array $userIds)
    {
        return $this->withUserId($userIds);
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
