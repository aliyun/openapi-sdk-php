<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchInsertItems
 *
 * @method array getItemInfo()
 * @method string getStoreId()
 */
class BatchInsertItems extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'cloudesl';

    /**
     * @var string
     */
    public $version = '2018-08-01';

    /**
     * @var string
     */
    public $action = 'BatchInsertItems';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getItemInfo() instead.
     *
     * @return array
     */
    public function getItemInfos()
    {
        return $this->getItemInfo();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withItemInfo() instead.
     *
     * @param array $itemInfos
     *
     * @return $this
     */
    public function setItemInfos(array $itemInfos)
    {
        return $this->withItemInfo($itemInfos);
    }

    /**
     * @param array $itemInfo
     *
     * @return $this
     */
    public function withItemInfo(array $itemInfo)
    {
        $this->data['ItemInfo'] = $itemInfo;
        foreach ($itemInfo as $i => $iValue) {
            $this->options['query']['ItemInfo.' . ($i + 1) . '.MemberPrice'] = $itemInfo[$i]['MemberPrice'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ActionPrice'] = $itemInfo[$i]['ActionPrice'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ProductionPlace'] = $itemInfo[$i]['ProductionPlace'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.BeSourceCode'] = $itemInfo[$i]['BeSourceCode'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.StoreId'] = $itemInfo[$i]['StoreId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.BrandName'] = $itemInfo[$i]['BrandName'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PromotionStart'] = $itemInfo[$i]['PromotionStart'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.SourceCode'] = $itemInfo[$i]['SourceCode'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemId'] = $itemInfo[$i]['ItemId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ExtraAttribute'] = $itemInfo[$i]['ExtraAttribute'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CompanyId'] = $itemInfo[$i]['CompanyId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PriceUnit'] = $itemInfo[$i]['PriceUnit'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.Rank'] = $itemInfo[$i]['Rank'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemBarCode'] = $itemInfo[$i]['ItemBarCode'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.BePromotion'] = $itemInfo[$i]['BePromotion'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PromotionEnd'] = $itemInfo[$i]['PromotionEnd'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemTitle'] = $itemInfo[$i]['ItemTitle'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.OriginalPrice'] = $itemInfo[$i]['OriginalPrice'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemShortTitle'] = $itemInfo[$i]['ItemShortTitle'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureC'] = $itemInfo[$i]['CustomizeFeatureC'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ItemQrCode'] = $itemInfo[$i]['ItemQrCode'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureD'] = $itemInfo[$i]['CustomizeFeatureD'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PromotionReason'] = $itemInfo[$i]['PromotionReason'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureE'] = $itemInfo[$i]['CustomizeFeatureE'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureF'] = $itemInfo[$i]['CustomizeFeatureF'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ForestSecondId'] = $itemInfo[$i]['ForestSecondId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureG'] = $itemInfo[$i]['CustomizeFeatureG'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureH'] = $itemInfo[$i]['CustomizeFeatureH'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureI'] = $itemInfo[$i]['CustomizeFeatureI'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureJ'] = $itemInfo[$i]['CustomizeFeatureJ'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.OptionGroups'] = $itemInfo[$i]['OptionGroups'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ModelNumber'] = $itemInfo[$i]['ModelNumber'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.SaleSpec'] = $itemInfo[$i]['SaleSpec'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureA'] = $itemInfo[$i]['CustomizeFeatureA'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CustomizeFeatureB'] = $itemInfo[$i]['CustomizeFeatureB'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.SuggestPrice'] = $itemInfo[$i]['SuggestPrice'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.ForestFirstId'] = $itemInfo[$i]['ForestFirstId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.CategoryName'] = $itemInfo[$i]['CategoryName'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.EnergyEfficiency'] = $itemInfo[$i]['EnergyEfficiency'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.SkuId'] = $itemInfo[$i]['SkuId'];
            $this->options['query']['ItemInfo.' . ($i + 1) . '.PromotionText'] = $itemInfo[$i]['PromotionText'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStoreId() instead.
     *
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        return $this->withStoreId($storeId);
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
