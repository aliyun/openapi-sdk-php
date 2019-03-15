<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getMinSimilarity()
 * @method $this withMinSimilarity($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 */
class FindSimilarFaces extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
