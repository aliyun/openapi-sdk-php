<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getParentCategoryId()
 * @method $this withParentCategoryId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCategory extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
