<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeUserResources
 *
 * @method string getAliuid()
 */
class DescribeUserResources extends RoaRequest
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
    public $action = 'DescribeUserResources';

    /**
     * @var string
     */
    public $pathPattern = '/ram/resources/[Aliuid]';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @deprecated deprecated since version 2.0, Use withAliuid() instead.
     *
     * @param string $aliuid
     *
     * @return $this
     */
    public function setAliuid($aliuid)
    {
        return $this->withAliuid($aliuid);
    }

    /**
     * @param string $aliuid
     *
     * @return $this
     */
    public function withAliuid($aliuid)
    {
        $this->data['Aliuid'] = $aliuid;
        $this->pathParameters['Aliuid'] = $aliuid;

        return $this;
    }
}
