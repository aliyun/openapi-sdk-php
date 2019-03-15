<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getPhotoSize()
 * @method $this withPhotoSize($value)
 * @method string getTimeLineCount()
 * @method $this withTimeLineCount($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getTimeLineUnit()
 * @method $this withTimeLineUnit($value)
 * @method string getFilterBy()
 * @method $this withFilterBy($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class ListTimeLines extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}
