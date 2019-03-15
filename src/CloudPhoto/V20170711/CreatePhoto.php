<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getTakenAt()
 * @method $this withTakenAt($value)
 * @method string getPhotoTitle()
 * @method $this withPhotoTitle($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getShareExpireTime()
 * @method $this withShareExpireTime($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getUploadType()
 * @method $this withUploadType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getStaging()
 * @method $this withStaging($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class CreatePhoto extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}
