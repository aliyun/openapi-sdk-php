<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateOrUpdateDataSource
 *
 * @method string getProjectName()
 * @method string getSourceIp()
 * @method string getLogStoreName()
 * @method string getDatasourceDescription()
 * @method string getFields()
 * @method string getRegionNo()
 */
class CreateOrUpdateDataSource extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function withProjectName($projectName)
    {
        $this->data['ProjectName'] = $projectName;
        $this->options['query']['ProjectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $logStoreName
     *
     * @return $this
     */
    public function withLogStoreName($logStoreName)
    {
        $this->data['LogStoreName'] = $logStoreName;
        $this->options['query']['LogStoreName'] = $logStoreName;

        return $this;
    }

    /**
     * @param string $datasourceDescription
     *
     * @return $this
     */
    public function withDatasourceDescription($datasourceDescription)
    {
        $this->data['DatasourceDescription'] = $datasourceDescription;
        $this->options['query']['DatasourceDescription'] = $datasourceDescription;

        return $this;
    }

    /**
     * @param string $fields
     *
     * @return $this
     */
    public function withFields($fields)
    {
        $this->data['Fields'] = $fields;
        $this->options['query']['Fields'] = $fields;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function withRegionNo($regionNo)
    {
        $this->data['RegionNo'] = $regionNo;
        $this->options['query']['RegionNo'] = $regionNo;

        return $this;
    }
}
