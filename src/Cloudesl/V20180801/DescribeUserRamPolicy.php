<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * Api DescribeUserRamPolicy
 *
 * @method string getCompanyId()
 * @method string getUserType()
 * @method string getStoreId()
 */
class DescribeUserRamPolicy extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';

    /**
     * @param string $companyId
     *
     * @return $this
     */
    public function withCompanyId($companyId)
    {
        $this->data['CompanyId'] = $companyId;
        $this->options['query']['CompanyId'] = $companyId;

        return $this;
    }

    /**
     * @param string $userType
     *
     * @return $this
     */
    public function withUserType($userType)
    {
        $this->data['UserType'] = $userType;
        $this->options['query']['UserType'] = $userType;

        return $this;
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function withStoreId($storeId)
    {
        $this->data['StoreId'] = $storeId;
        $this->options['query']['StoreId'] = $storeId;

        return $this;
    }
}
