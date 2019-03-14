<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api DescribeAntRegions
 *
 * @method string getLocale()
 */
class DescribeAntRegions extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';

    /**
     * @param string $locale
     *
     * @return $this
     */
    public function withLocale($locale)
    {
        $this->data['Locale'] = $locale;
        $this->options['query']['Locale'] = $locale;

        return $this;
    }
}
