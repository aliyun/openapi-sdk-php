<?php

namespace AlibabaCloud\Cloudmarketing\V20180910;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method FetchCrowdDefine fetchCrowdDefine(array $options = [])
 * @method DeleteCrowd deleteCrowd(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method ProcessAfterUploadFile processAfterUploadFile(array $options = [])
 * @method Auth2Brand auth2Brand(array $options = [])
 * @method DescribeAuthBrand describeAuthBrand(array $options = [])
 * @method UpdateCrowd updateCrowd(array $options = [])
 * @method FetchTag fetchTag(array $options = [])
 * @method RequestUploadFile requestUploadFile(array $options = [])
 * @method DefineTag defineTag(array $options = [])
 * @method RedefineTag redefineTag(array $options = [])
 * @method CreateBrand createBrand(array $options = [])
 * @method UpdateBrand updateBrand(array $options = [])
 * @method DescribeBrand describeBrand(array $options = [])
 * @method CreateCategory createCategory(array $options = [])
 * @method DescribeCategory describeCategory(array $options = [])
 * @method DescribeChannelBrand describeChannelBrand(array $options = [])
 * @method DefineCrowd defineCrowd(array $options = [])
 * @method DescribeAuthChannelBrand describeAuthChannelBrand(array $options = [])
 * @method FetchFileSchema fetchFileSchema(array $options = [])
 * @method DefineFileSchema defineFileSchema(array $options = [])
 * @method DescribeFile describeFile(array $options = [])
 * @method CalCrowdScale calCrowdScale(array $options = [])
 * @method DescribeCrowd describeCrowd(array $options = [])
 * @method FetchCrowd fetchCrowd(array $options = [])
 * @method AnalysisCrowd analysisCrowd(array $options = [])
 * @method DescribeTag describeTag(array $options = [])
 * @method FavoriteTag favoriteTag(array $options = [])
 * @method UpdateCategory updateCategory(array $options = [])
 * @method FetchFileSchemaData fetchFileSchemaData(array $options = [])
 * @method DownloadUDReport downloadUDReport(array $options = [])
 * @method DownloadCrowd downloadCrowd(array $options = [])
 * @method SyncCrowd syncCrowd(array $options = [])
 */
class CloudmarketingApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cloudmarketing';

    /** @var string */
    public $version = '2018-09-10';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class FetchCrowdDefine extends Rpc
{
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class DeleteCrowd extends Rpc
{
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DeleteFile extends Rpc
{
}

/**
 * @method string getSrcFileName()
 * @method $this withSrcFileName($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 */
class ProcessAfterUploadFile extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getBrandId()
 * @method $this withBrandId($value)
 * @method array getChannelBrandReqs()
 */
class Auth2Brand extends Rpc
{

    /**
     * @param array $channelBrandReqs
     *
     * @return $this
     */
    public function withChannelBrandReqs(array $channelBrandReqs)
    {
        $this->data['ChannelBrandReqs'] = $channelBrandReqs;
        foreach ($channelBrandReqs as $depth1 => $depth1Value) {
            $this->options['query']['ChannelBrandReqs.' . ($depth1 + 1) . '.ChannelType'] = $depth1Value['ChannelType'];
            foreach ($depth1Value['OuterBrandId'] as $i => $iValue) {
                $this->options['query']['ChannelBrandReqs.' . ($depth1 + 1) . '.OuterBrandId.' . ($i + 1)] = $iValue;
            }
        }

        return $this;
    }
}

/**
 * @method array getAccountIds()
 */
class DescribeAuthBrand extends Rpc
{

    /**
     * @param array $accountIds
     *
     * @return $this
     */
    public function withAccountIds(array $accountIds)
    {
        $this->data['AccountIds'] = $accountIds;
        foreach ($accountIds as $i => $iValue) {
            $this->options['query']['AccountIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getRequestJsonData()
 */
class UpdateCrowd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestJsonData($value)
    {
        $this->data['RequestJsonData'] = $value;
        $this->options['form_params']['RequestJsonData'] = $value;

        return $this;
    }
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 */
class FetchTag extends Rpc
{
}

class RequestUploadFile extends Rpc
{
}

/**
 * @method string getOptionType()
 * @method string getTagName()
 * @method string getColumnIndex()
 * @method string getTagDesc()
 * @method string getValidTime()
 * @method array getOptionDefines()
 * @method string getCategoryId()
 * @method string getFileId()
 */
class DefineTag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptionType($value)
    {
        $this->data['OptionType'] = $value;
        $this->options['form_params']['OptionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagName($value)
    {
        $this->data['TagName'] = $value;
        $this->options['form_params']['TagName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColumnIndex($value)
    {
        $this->data['ColumnIndex'] = $value;
        $this->options['form_params']['ColumnIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagDesc($value)
    {
        $this->data['TagDesc'] = $value;
        $this->options['form_params']['TagDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValidTime($value)
    {
        $this->data['ValidTime'] = $value;
        $this->options['form_params']['ValidTime'] = $value;

        return $this;
    }

    /**
     * @param array $optionDefines
     *
     * @return $this
     */
    public function withOptionDefines(array $optionDefines)
    {
        $this->data['OptionDefines'] = $optionDefines;
        foreach ($optionDefines as $depth1 => $depth1Value) {
            $this->options['form_params']['OptionDefines.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['form_params']['OptionDefines.' . ($depth1 + 1) . '.Define'] = $depth1Value['Define'];
            $this->options['form_params']['OptionDefines.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getOptionType()
 * @method string getTagName()
 * @method string getColumnIndex()
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getTagDesc()
 * @method string getValidTime()
 * @method array getOptionDefines()
 * @method string getCategoryId()
 * @method string getFileId()
 */
class RedefineTag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptionType($value)
    {
        $this->data['OptionType'] = $value;
        $this->options['form_params']['OptionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagName($value)
    {
        $this->data['TagName'] = $value;
        $this->options['form_params']['TagName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColumnIndex($value)
    {
        $this->data['ColumnIndex'] = $value;
        $this->options['form_params']['ColumnIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagDesc($value)
    {
        $this->data['TagDesc'] = $value;
        $this->options['form_params']['TagDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValidTime($value)
    {
        $this->data['ValidTime'] = $value;
        $this->options['form_params']['ValidTime'] = $value;

        return $this;
    }

    /**
     * @param array $optionDefines
     *
     * @return $this
     */
    public function withOptionDefines(array $optionDefines)
    {
        $this->data['OptionDefines'] = $optionDefines;
        foreach ($optionDefines as $depth1 => $depth1Value) {
            $this->options['form_params']['OptionDefines.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['form_params']['OptionDefines.' . ($depth1 + 1) . '.Define'] = $depth1Value['Define'];
            $this->options['form_params']['OptionDefines.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileId($value)
    {
        $this->data['FileId'] = $value;
        $this->options['form_params']['FileId'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateBrand extends Rpc
{
}

/**
 * @method string getName()
 * @method string getId()
 * @method string getDesc()
 */
class UpdateBrand extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['form_params']['Desc'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNo()
 * @method string getName()
 * @method string getPageSize()
 */
class DescribeBrand extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getParentCategoryId()
 * @method $this withParentCategoryId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCategory extends Rpc
{
}

/**
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 */
class DescribeCategory extends Rpc
{
}

class DescribeChannelBrand extends Rpc
{
}

/**
 * @method string getRequestJsonData()
 */
class DefineCrowd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestJsonData($value)
    {
        $this->data['RequestJsonData'] = $value;
        $this->options['form_params']['RequestJsonData'] = $value;

        return $this;
    }
}

class DescribeAuthChannelBrand extends Rpc
{
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class FetchFileSchema extends Rpc
{
}

/**
 * @method array getFileColumns()
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DefineFileSchema extends Rpc
{

    /**
     * @param array $fileColumns
     *
     * @return $this
     */
    public function withFileColumns(array $fileColumns)
    {
        $this->data['FileColumns'] = $fileColumns;
        foreach ($fileColumns as $depth1 => $depth1Value) {
            $this->options['form_params']['FileColumns.' . ($depth1 + 1) . '.Head'] = $depth1Value['Head'];
            $this->options['form_params']['FileColumns.' . ($depth1 + 1) . '.DataType'] = $depth1Value['DataType'];
            $this->options['form_params']['FileColumns.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['form_params']['FileColumns.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
            $this->options['form_params']['FileColumns.' . ($depth1 + 1) . '.ColumnType'] = $depth1Value['ColumnType'];
        }

        return $this;
    }
}

/**
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method array getDataSchemaStatusList()
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DescribeFile extends Rpc
{

    /**
     * @param array $dataSchemaStatusList
     *
     * @return $this
     */
    public function withDataSchemaStatusList(array $dataSchemaStatusList)
    {
        $this->data['DataSchemaStatusList'] = $dataSchemaStatusList;
        foreach ($dataSchemaStatusList as $i => $iValue) {
            $this->options['query']['DataSchemaStatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getRequestJsonData()
 */
class CalCrowdScale extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestJsonData($value)
    {
        $this->data['RequestJsonData'] = $value;
        $this->options['form_params']['RequestJsonData'] = $value;

        return $this;
    }
}

/**
 * @method string getSyncStatus()
 * @method $this withSyncStatus($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getCalStatus()
 * @method $this withCalStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeCrowd extends Rpc
{
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class FetchCrowd extends Rpc
{
}

/**
 * @method array getTagIds()
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class AnalysisCrowd extends Rpc
{

    /**
     * @param array $tagIds
     *
     * @return $this
     */
    public function withTagIds(array $tagIds)
    {
        $this->data['TagIds'] = $tagIds;
        foreach ($tagIds as $i => $iValue) {
            $this->options['query']['TagIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getStatusList()
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIncludeChild()
 * @method $this withIncludeChild($value)
 * @method string getOnlyFavorite()
 * @method $this withOnlyFavorite($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DescribeTag extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
    public function withStatusList(array $statusList)
    {
        $this->data['StatusList'] = $statusList;
        foreach ($statusList as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method array getTagIds()
 * @method string getFavorite()
 * @method $this withFavorite($value)
 */
class FavoriteTag extends Rpc
{

    /**
     * @param array $tagIds
     *
     * @return $this
     */
    public function withTagIds(array $tagIds)
    {
        $this->data['TagIds'] = $tagIds;
        foreach ($tagIds as $i => $iValue) {
            $this->options['query']['TagIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getRequestJsonData()
 */
class UpdateCategory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestJsonData($value)
    {
        $this->data['RequestJsonData'] = $value;
        $this->options['form_params']['RequestJsonData'] = $value;

        return $this;
    }
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class FetchFileSchemaData extends Rpc
{
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class DownloadUDReport extends Rpc
{
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class DownloadCrowd extends Rpc
{
}

/**
 * @method string getOuterAccountNo()
 * @method $this withOuterAccountNo($value)
 * @method array getChannelBrands()
 * @method string getChannelType()
 * @method $this withChannelType($value)
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class SyncCrowd extends Rpc
{

    /**
     * @param array $channelBrands
     *
     * @return $this
     */
    public function withChannelBrands(array $channelBrands)
    {
        $this->data['ChannelBrands'] = $channelBrands;
        foreach ($channelBrands as $depth1 => $depth1Value) {
            $this->options['query']['ChannelBrands.' . ($depth1 + 1) . '.OuterBrandId'] = $depth1Value['OuterBrandId'];
            $this->options['query']['ChannelBrands.' . ($depth1 + 1) . '.OuterBrandName'] = $depth1Value['OuterBrandName'];
        }

        return $this;
    }
}
