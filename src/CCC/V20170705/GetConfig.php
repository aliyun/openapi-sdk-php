<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetConfig
 *
 * @method string getInstanceId()
 * @method string getName()
 * @method string getObjectType()
 * @method string getObjectId()
 */
class GetConfig extends RpcRequest
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
    public $action = 'GetConfig';

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
     * @param string $objectType
     *
     * @return $this
     */
    public function withObjectType($objectType)
    {
        $this->data['ObjectType'] = $objectType;
        $this->options['query']['ObjectType'] = $objectType;

        return $this;
    }

    /**
     * @param string $objectId
     *
     * @return $this
     */
    public function withObjectId($objectId)
    {
        $this->data['ObjectId'] = $objectId;
        $this->options['query']['ObjectId'] = $objectId;

        return $this;
    }
}
