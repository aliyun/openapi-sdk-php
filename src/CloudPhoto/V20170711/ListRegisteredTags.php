<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method array getLang()
 */
class ListRegisteredTags extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

    /**
     * @param array $lang
     *
     * @return $this
     */
    public function withLang(array $lang)
    {
        $this->data['Lang'] = $lang;
        foreach ($lang as $i => $iValue) {
            $this->options['query']['Lang.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
