<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSourceUri()
 * @method $this withSourceUri($value)
 * @method string getSourcePosition()
 * @method $this withSourcePosition($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class IndexImage extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
