<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getLatitude()
 * @method $this withLatitude($value)
 * @method string getPhotoTitle()
 * @method $this withPhotoTitle($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getIsVideo()
 * @method $this withIsVideo($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getTakenAt()
 * @method $this withTakenAt($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getLongitude()
 * @method $this withLongitude($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class RegisterPhoto extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}
