<?php

namespace AlibabaCloud\Alimt\V20181012;

use AlibabaCloud\Rpc;

class V20181012Rpc extends Rpc
{
    /** @var string */
    public $product = 'alimt';

    /** @var string */
    public $version = '2018-10-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'alimt';
}

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
class TranslateECommerce extends V20181012Rpc
{
}

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
class TranslateGeneral extends V20181012Rpc
{
}
