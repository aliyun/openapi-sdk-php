<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getChooseBiggestFace()
 * @method $this withChooseBiggestFace($value)
 * @method string getIsQualityLimit()
 * @method $this withIsQualityLimit($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getRegisterCheckLevel()
 * @method $this withRegisterCheckLevel($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class RegistFace extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
