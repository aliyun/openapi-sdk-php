<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCustomerLabel
 *
 * @method string getLabelSeries()
 */
class QueryCustomerLabel extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Crm';

    /**
     * @var string
     */
    public $version = '2015-04-08';

    /**
     * @var string
     */
    public $action = 'QueryCustomerLabel';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withLabelSeries() instead.
     *
     * @param string $labelSeries
     *
     * @return $this
     */
    public function setLabelSeries($labelSeries)
    {
        return $this->withLabelSeries($labelSeries);
    }

    /**
     * @param string $labelSeries
     *
     * @return $this
     */
    public function withLabelSeries($labelSeries)
    {
        $this->data['LabelSeries'] = $labelSeries;
        $this->options['query']['LabelSeries'] = $labelSeries;

        return $this;
    }
}
