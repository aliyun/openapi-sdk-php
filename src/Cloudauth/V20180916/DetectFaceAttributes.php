<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Rpc;

/**
 * @method string getMaxNumPhotosPerCategory()
 * @method $this withMaxNumPhotosPerCategory($value)
 * @method string getMaxFaceNum()
 * @method $this withMaxFaceNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRetAttributes()
 * @method $this withRetAttributes($value)
 * @method string getMaterialValue()
 * @method $this withMaterialValue($value)
 * @method string getDontSaveDB()
 * @method $this withDontSaveDB($value)
 * @method string getClientTag()
 * @method $this withClientTag($value)
 */
class DetectFaceAttributes extends Rpc
{
    public $product = 'Cloudauth';

    public $version = '2018-09-16';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudauth';
}
