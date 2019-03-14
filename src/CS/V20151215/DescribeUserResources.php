<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api DescribeUserResources
 *
 * @method string getAliuid()
 */
class DescribeUserResources extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/ram/resources/[Aliuid]';

    public $serviceCode = 'cs';

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
