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
