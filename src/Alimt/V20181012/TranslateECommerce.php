<?php

namespace AlibabaCloud\Alimt\V20181012;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceLanguage()
 * @method $this withSourceLanguage($value)
 * @method string getSourceText()
 * @method $this withSourceText($value)
 * @method string getFormatType()
 * @method $this withFormatType($value)
 * @method string getTargetLanguage()
 * @method $this withTargetLanguage($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class TranslateECommerce extends Rpc
{
    public $product = 'alimt';

    public $version = '2018-10-12';

    public $method = 'POST';

    public $serviceCode = 'alimt';
}
