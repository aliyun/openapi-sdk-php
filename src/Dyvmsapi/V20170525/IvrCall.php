<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * @method string getByeCode()
 * @method $this withByeCode($value)
 * @method array getMenuKeyMap()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getStartTtsParams()
 * @method $this withStartTtsParams($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getStartCode()
 * @method $this withStartCode($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getByeTtsParams()
 * @method $this withByeTtsParams($value)
 */
class IvrCall extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

    /**
     * @param array $menuKeyMap
     *
     * @return $this
     */
    public function withMenuKeyMap(array $menuKeyMap)
    {
        $this->data['MenuKeyMap'] = $menuKeyMap;
        foreach ($menuKeyMap as $i => $iValue) {
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.Code'] = $menuKeyMap[$i]['Code'];
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.TtsParams'] = $menuKeyMap[$i]['TtsParams'];
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.Key'] = $menuKeyMap[$i]['Key'];
        }

        return $this;
    }
}
