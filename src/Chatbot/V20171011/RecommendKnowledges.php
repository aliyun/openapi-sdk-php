<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getSimilarityLevel()
 * @method $this withSimilarityLevel($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class RecommendKnowledges extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
