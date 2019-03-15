<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method array getMd5()
 */
class GetPhotosByMd5s extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

    /**
     * @param array $md5
     *
     * @return $this
     */
    public function withMd5(array $md5)
    {
        $this->data['Md5'] = $md5;
        foreach ($md5 as $i => $iValue) {
            $this->options['query']['Md5.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
