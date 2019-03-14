<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api ListRecordingsByContactId
 *
 * @method string getInstanceId()
 * @method string getContactId()
 */
class ListRecordingsByContactId extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

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
     * @param string $contactId
     *
     * @return $this
     */
    public function withContactId($contactId)
    {
        $this->data['ContactId'] = $contactId;
        $this->options['query']['ContactId'] = $contactId;

        return $this;
    }
}
