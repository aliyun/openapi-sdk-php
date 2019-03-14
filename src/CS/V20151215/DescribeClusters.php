<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api DescribeClusters
 *
 * @method string getClusterType()
 * @method string getName()
 */
class DescribeClusters extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters';

    public $serviceCode = 'cs';

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
