<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getSideOutputUrl()
 * @method $this withSideOutputUrl($value)
 * @method array getItem()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRepeatNum()
 * @method $this withRepeatNum($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterEpisodeGroup extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

    /**
     * @param array $item
     *
     * @return $this
     */
    public function withItem(array $item)
    {
        $this->data['Item'] = $item;
        foreach ($item as $i => $iValue) {
            $this->options['query']['Item.' . ($i + 1) . '.VodUrl'] = $item[$i]['VodUrl'];
            $this->options['query']['Item.' . ($i + 1) . '.ItemName'] = $item[$i]['ItemName'];
        }

        return $this;
    }
}
