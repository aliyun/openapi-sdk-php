<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteLabelForBid
 *
 * @method string getLabelSeries()
 * @method string getPK()
 * @method string getLabel()
 */
class DeleteLabelForBid extends RpcRequest
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
    public $action = 'DeleteLabelForBid';

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

    /**
     * @deprecated deprecated since version 2.0, Use withPK() instead.
     *
     * @param string $pK
     *
     * @return $this
     */
    public function setPK($pK)
    {
        return $this->withPK($pK);
    }

    /**
     * @param string $pK
     *
     * @return $this
     */
    public function withPK($pK)
    {
        $this->data['PK'] = $pK;
        $this->options['query']['PK'] = $pK;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLabel() instead.
     *
     * @param string $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        return $this->withLabel($label);
    }

    /**
     * @param string $label
     *
     * @return $this
     */
    public function withLabel($label)
    {
        $this->data['Label'] = $label;
        $this->options['query']['Label'] = $label;

        return $this;
    }
}
