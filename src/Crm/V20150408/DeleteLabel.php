<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteLabel
 *
 * @method string getLabelSeries()
 * @method string getOrganization()
 * @method string getPK()
 * @method string getLabelName()
 * @method string getUserName()
 */
class DeleteLabel extends RpcRequest
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
    public $action = 'DeleteLabel';

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
     * @deprecated deprecated since version 2.0, Use withOrganization() instead.
     *
     * @param string $organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        return $this->withOrganization($organization);
    }

    /**
     * @param string $organization
     *
     * @return $this
     */
    public function withOrganization($organization)
    {
        $this->data['Organization'] = $organization;
        $this->options['query']['Organization'] = $organization;

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

    /**
     * @deprecated deprecated since version 2.0, Use withUserName() instead.
     *
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        return $this->withUserName($userName);
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function withUserName($userName)
    {
        $this->data['UserName'] = $userName;
        $this->options['query']['UserName'] = $userName;

        return $this;
    }
}
