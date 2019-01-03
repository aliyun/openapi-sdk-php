<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeClusters
 *
 * @method string getClusterType()
 * @method string getName()
 */
class DescribeClusters extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $action = 'DescribeClusters';

    /**
     * @var string
     */
    public $pathPattern = '/clusters';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @deprecated deprecated since version 2.0, Use withClusterType() instead.
     *
     * @param string $clusterType
     *
     * @return $this
     */
    public function setclusterType($clusterType)
    {
        return $this->withClusterType($clusterType);
    }

    /**
     * @param string $clusterType
     *
     * @return $this
     */
    public function withClusterType($clusterType)
    {
        $this->data['ClusterType'] = $clusterType;
        $this->options['query']['clusterType'] = $clusterType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }
}
