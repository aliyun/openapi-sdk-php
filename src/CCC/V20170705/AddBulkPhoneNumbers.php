<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api AddBulkPhoneNumbers
 *
 * @method string getContactFlowId()
 * @method string getInstanceId()
 * @method string getUsage()
 * @method array getSkillGroupId()
 * @method array getPhoneNumber()
 */
class AddBulkPhoneNumbers extends Rpc
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

    /**
     * @param array $phoneNumber
     *
     * @return $this
     */
    public function withPhoneNumber(array $phoneNumber)
    {
        $this->data['PhoneNumber'] = $phoneNumber;
        foreach ($phoneNumber as $i => $iValue) {
            $this->options['query']['PhoneNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
