<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method array getName()
 * @method string getStoreName()
 * @method $this withStoreName($value)
 */
class GetAlbumsByNames extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

    /**
     * @param array $name
     *
     * @return $this
     */
    public function withName(array $name)
    {
        $this->data['Name'] = $name;
        foreach ($name as $i => $iValue) {
            $this->options['query']['Name.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
