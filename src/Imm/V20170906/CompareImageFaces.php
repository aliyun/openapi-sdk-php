<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getImageUriB()
 * @method $this withImageUriB($value)
 * @method string getImageUriA()
 * @method $this withImageUriA($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getFaceIdA()
 * @method $this withFaceIdA($value)
 * @method string getFaceIdB()
 * @method $this withFaceIdB($value)
 */
class CompareImageFaces extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
