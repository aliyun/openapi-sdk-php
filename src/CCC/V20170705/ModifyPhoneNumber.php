<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api ModifyPhoneNumber
 *
 * @method string getContactFlowId()
 * @method string getInstanceId()
 * @method string getPhoneNumberId()
 * @method string getUsage()
 * @method array getSkillGroupId()
 */
class ModifyPhoneNumber extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $contactFlowId
     *
     * @return $this
     */
    public function withContactFlowId($contactFlowId)
    {
        $this->data['ContactFlowId'] = $contactFlowId;
        $this->options['query']['ContactFlowId'] = $contactFlowId;

        return $this;
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
     * @param string $phoneNumberId
     *
     * @return $this
     */
    public function withPhoneNumberId($phoneNumberId)
    {
        $this->data['PhoneNumberId'] = $phoneNumberId;
        $this->options['query']['PhoneNumberId'] = $phoneNumberId;

        return $this;
    }

    /**
     * @param string $usage
     *
     * @return $this
     */
    public function withUsage($usage)
    {
        $this->data['Usage'] = $usage;
        $this->options['query']['Usage'] = $usage;

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
