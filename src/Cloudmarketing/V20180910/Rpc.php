<?php

namespace AlibabaCloud\Cloudmarketing\V20180910;

use AlibabaCloud\Rpc;

class V20180910Rpc extends Rpc
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
class DeleteCrowd extends V20180910Rpc
{
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class FetchCrowdDefine extends V20180910Rpc
{
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DeleteFile extends V20180910Rpc
{
}

/**
 * @method string getRequestJsonData()
 * @method $this withRequestJsonData($value)
 */
class UpdateCrowd extends V20180910Rpc
{
}

/**
 * @method string getSrcFileName()
 * @method $this withSrcFileName($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 */
class ProcessAfterUploadFile extends V20180910Rpc
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
class SyncCrowd extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withChannelBrands(array $value)
    {
        $this->data['ChannelBrands'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ChannelBrands.' . ($i + 1) . '.OuterBrandId'] = $value[$i]['OuterBrandId'];
            $this->options['query']['ChannelBrands.' . ($i + 1) . '.OuterBrandName'] = $value[$i]['OuterBrandName'];
        }

        return $this;
    }
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class DownloadUDReport extends V20180910Rpc
{
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class DownloadCrowd extends V20180910Rpc
{
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class FetchFileSchemaData extends V20180910Rpc
{
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 */
class FetchTag extends V20180910Rpc
{
}

/**
 * @method string getRequestJsonData()
 * @method $this withRequestJsonData($value)
 */
class UpdateCategory extends V20180910Rpc
{
}

/**
 * @method array getAccountIds()
 */
class DescribeAuthBrand extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withAccountIds(array $value)
    {
        $this->data['AccountIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AccountIds.' . ($i + 1)] = $iValue;
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
class FavoriteTag extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagIds(array $value)
    {
        $this->data['TagIds'] = $value;
        foreach ($value as $i => $iValue) {
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
class DescribeTag extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusList(array $value)
    {
        $this->data['StatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getBrandId()
 * @method $this withBrandId($value)
 * @method array getChannelBrandReqs()
 */
class Auth2Brand extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withChannelBrandReqs(array $value)
    {
        $this->data['ChannelBrandReqs'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ChannelBrandReqs.' . ($i + 1) . '.ChannelType'] = $value[$i]['ChannelType'];
            foreach ($value[$i]['OuterBrandIds'] as $j => $jValue) {
                $this->options['query']['ChannelBrandReqs.' . ($i + 1) . '.OuterBrandId.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}

/**
 * @method array getTagIds()
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class AnalysisCrowd extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagIds(array $value)
    {
        $this->data['TagIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class FetchCrowd extends V20180910Rpc
{
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
class DescribeCrowd extends V20180910Rpc
{
}

/**
 * @method string getRequestJsonData()
 * @method $this withRequestJsonData($value)
 */
class CalCrowdScale extends V20180910Rpc
{
}

/**
 * @method string getRequestJsonData()
 * @method $this withRequestJsonData($value)
 */
class DefineCrowd extends V20180910Rpc
{
}

/**
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 */
class DescribeCategory extends V20180910Rpc
{
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
class DescribeFile extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDataSchemaStatusList(array $value)
    {
        $this->data['DataSchemaStatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DataSchemaStatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getFileColumns()
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DefineFileSchema extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFileColumns(array $value)
    {
        $this->data['FileColumns'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['FileColumns.' . ($i + 1) . '.Head'] = $value[$i]['Head'];
            $this->options['query']['FileColumns.' . ($i + 1) . '.DataType'] = $value[$i]['DataType'];
            $this->options['query']['FileColumns.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['FileColumns.' . ($i + 1) . '.Index'] = $value[$i]['Index'];
            $this->options['query']['FileColumns.' . ($i + 1) . '.ColumnType'] = $value[$i]['ColumnType'];
        }

        return $this;
    }
}

class RequestUploadFile extends V20180910Rpc
{
}

/**
 * @method string getSrcFileName()
 * @method $this withSrcFileName($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 */
class ProcessAfterUpload extends V20180910Rpc
{
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class FetchFileSchema extends V20180910Rpc
{
}

class DescribeAuthChannelBrand extends V20180910Rpc
{
}

class DescribeChannelBrand extends V20180910Rpc
{
}

/**
 * @method string getParentCategoryId()
 * @method $this withParentCategoryId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCategory extends V20180910Rpc
{
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeBrand extends V20180910Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class UpdateBrand extends V20180910Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateBrand extends V20180910Rpc
{
}

/**
 * @method string getOptionType()
 * @method $this withOptionType($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getColumnIndex()
 * @method $this withColumnIndex($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getTagDesc()
 * @method $this withTagDesc($value)
 * @method string getValidTime()
 * @method $this withValidTime($value)
 * @method array getOptionDefines()
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class RedefineTag extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionDefines(array $value)
    {
        $this->data['OptionDefines'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionDefines.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['OptionDefines.' . ($i + 1) . '.Define'] = $value[$i]['Define'];
            $this->options['query']['OptionDefines.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }
}

/**
 * @method string getOptionType()
 * @method $this withOptionType($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getColumnIndex()
 * @method $this withColumnIndex($value)
 * @method string getTagDesc()
 * @method $this withTagDesc($value)
 * @method string getValidTime()
 * @method $this withValidTime($value)
 * @method array getOptionDefines()
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DefineTag extends V20180910Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionDefines(array $value)
    {
        $this->data['OptionDefines'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionDefines.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['OptionDefines.' . ($i + 1) . '.Define'] = $value[$i]['Define'];
            $this->options['query']['OptionDefines.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }
}
