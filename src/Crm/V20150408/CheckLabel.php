<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckLabel
 *
 * @method string getLabelSeries()
 * @method string getPK()
 * @method string getLabelName()
 */
class CheckLabel extends RpcRequest
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
    public $action = 'CheckLabel';

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
     * @deprecated deprecated since version 2.0, Use withLabelName() instead.
     *
     * @param string $labelName
     *
     * @return $this
     */
    public function setLabelName($labelName)
    {
        return $this->withLabelName($labelName);
    }

    /**
     * @param string $labelName
     *
     * @return $this
     */
    public function withLabelName($labelName)
    {
        $this->data['LabelName'] = $labelName;
        $this->options['query']['LabelName'] = $labelName;

        return $this;
    }
}
