<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class FetchPhotos extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}
