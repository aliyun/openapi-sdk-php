<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessKeyId()
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getTagInfo()
 * @method string getNetwork()
 * @method $this withNetwork($value)
 */
class InsertInstance extends Rpc
{
    public $product = 'Ots';

    public $version = '2016-06-20';

    public $method = 'POST';

    public $serviceCode = 'ots';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }

    /**
     * @param array $tagInfo
     *
     * @return $this
     */
    public function withTagInfo(array $tagInfo)
    {
        $this->data['TagInfo'] = $tagInfo;
        foreach ($tagInfo as $i => $iValue) {
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagValue'] = $tagInfo[$i]['TagValue'];
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagKey'] = $tagInfo[$i]['TagKey'];
        }

        return $this;
    }
}
