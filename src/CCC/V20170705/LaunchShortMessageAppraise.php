<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of LaunchShortMessageAppraise
 *
 * @method string getAcid()
 * @method string getInstanceId()
 * @method string getContactType()
 * @method string getPhoneNumbers()
 * @method string getSkillGroupId()
 */
class LaunchShortMessageAppraise extends RpcRequest
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
    public $action = 'LaunchShortMessageAppraise';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $acid
     *
     * @return $this
     */
    public function withAcid($acid)
    {
        $this->data['Acid'] = $acid;
        $this->options['query']['Acid'] = $acid;

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
     * @param string $contactType
     *
     * @return $this
     */
    public function withContactType($contactType)
    {
        $this->data['ContactType'] = $contactType;
        $this->options['query']['ContactType'] = $contactType;

        return $this;
    }

    /**
     * @param string $phoneNumbers
     *
     * @return $this
     */
    public function withPhoneNumbers($phoneNumbers)
    {
        $this->data['PhoneNumbers'] = $phoneNumbers;
        $this->options['query']['PhoneNumbers'] = $phoneNumbers;

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
}
