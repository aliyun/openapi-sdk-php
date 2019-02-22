<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchAddThingTags
 *
 * @method array getThingIdTagsList()
 * @method string getIotInstanceId()
 */
class BatchAddThingTags extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'BatchAddThingTags';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $thingIdTagsList
     *
     * @return $this
     */
    public function withThingIdTagsList(array $thingIdTagsList)
    {
        $this->data['ThingIdTagsList'] = $thingIdTagsList;
        foreach ($thingIdTagsList as $i => $iValue) {
            $this->options['query']['ThingIdTagsList.' . ($i + 1) . '.IotId'] = $thingIdTagsList[$i]['IotId'];
            foreach ($thingIdTagsList[$i]['ThingTagLists'] as $j => $jValue) {
                $this->options['query']['ThingIdTagsList.' . ($i + 1) . '.ThingTagList.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['ThingIdTagsList.' . ($i + 1) . '.DeviceName'] = $thingIdTagsList[$i]['DeviceName'];
            $this->options['query']['ThingIdTagsList.' . ($i + 1) . '.ProductKey'] = $thingIdTagsList[$i]['ProductKey'];
        }

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function withIotInstanceId($iotInstanceId)
    {
        $this->data['IotInstanceId'] = $iotInstanceId;
        $this->options['query']['IotInstanceId'] = $iotInstanceId;

        return $this;
    }
}
