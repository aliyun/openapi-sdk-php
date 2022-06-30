<?php

namespace AlibabaCloud\Apds\V20220331;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateFileJob createFileJob(array $options = [])
 * @method CreateMigrationGroup createMigrationGroup(array $options = [])
 * @method CreateMigrationJob createMigrationJob(array $options = [])
 * @method CreateSurveyJob createSurveyJob(array $options = [])
 * @method CreateSurveyJobOffline createSurveyJobOffline(array $options = [])
 * @method DeleteMigrationGroup deleteMigrationGroup(array $options = [])
 * @method DeleteMigrationJob deleteMigrationJob(array $options = [])
 * @method DeleteOssFile deleteOssFile(array $options = [])
 * @method DeleteSurveyJob deleteSurveyJob(array $options = [])
 * @method DeleteSurveyResources deleteSurveyResources(array $options = [])
 * @method DescribeMigrationJobConfig describeMigrationJobConfig(array $options = [])
 * @method DescribeMigrationJobCount describeMigrationJobCount(array $options = [])
 * @method DescribeOssSts describeOssSts(array $options = [])
 * @method DescribeSummaryByStatus describeSummaryByStatus(array $options = [])
 * @method DescribeSummaryByStatusAndGroup describeSummaryByStatusAndGroup(array $options = [])
 * @method DescribeSurveyJob describeSurveyJob(array $options = [])
 * @method DescribeSurveyJobCount describeSurveyJobCount(array $options = [])
 * @method DescribeSurveyResourceTag describeSurveyResourceTag(array $options = [])
 * @method DescribeSurveyTemplate describeSurveyTemplate(array $options = [])
 * @method ListMigrationJobs listMigrationJobs(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListSurveyJobDownLoadJobs listSurveyJobDownLoadJobs(array $options = [])
 * @method ListSurveyJobs listSurveyJobs(array $options = [])
 * @method ListSurveyResourceByMigrationGroups listSurveyResourceByMigrationGroups(array $options = [])
 * @method ListSurveyResourceConnections listSurveyResourceConnections(array $options = [])
 * @method ListSurveyResourcesDetail listSurveyResourcesDetail(array $options = [])
 * @method ListSurveyResourceTypes listSurveyResourceTypes(array $options = [])
 * @method RecoverMigrationJob recoverMigrationJob(array $options = [])
 * @method StopSyncMigrationJob stopSyncMigrationJob(array $options = [])
 * @method SyncMigrationJob syncMigrationJob(array $options = [])
 */
class ApdsApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'apds';

    /** @var string */
    public $version = '2022-03-31';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBody()
 */
class CreateFileJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/file-job/create';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateMigrationGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-group/save-migration-group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateMigrationJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-job/create-migration-jobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateSurveyJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/winback/add-survey-job';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateSurveyJobOffline extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/winback/add-import-survey-job';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteMigrationGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-group/remove-migration-group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteMigrationJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-job/remove-migration-job';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['id'] = $value;

        return $this;
    }
}

/**
 * @method string getObjectName()
 */
class DeleteOssFile extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/file-job/delete-file';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectName($value)
    {
        $this->data['ObjectName'] = $value;
        $this->options['query']['objectName'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteSurveyJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/winback/delete-survey-job';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['id'] = $value;

        return $this;
    }
}

/**
 * @method string getIds()
 */
class DeleteSurveyResources extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/confirm-resource/destroy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIds($value)
    {
        $this->data['Ids'] = $value;
        $this->options['query']['ids'] = $value;

        return $this;
    }
}

class DescribeMigrationJobConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-job/describe-migration-job-config';
}

/**
 * @method string getBody()
 */
class DescribeMigrationJobCount extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-job/count-migration-jobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getCloudType()
 * @method string getAk()
 * @method string getSk()
 * @method string getTenantId()
 * @method string getRegion()
 */
class DescribeOssSts extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/file-job/sts';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCloudType($value)
    {
        $this->data['CloudType'] = $value;
        $this->options['query']['cloudType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAk($value)
    {
        $this->data['Ak'] = $value;
        $this->options['query']['ak'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSk($value)
    {
        $this->data['Sk'] = $value;
        $this->options['query']['sk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['query']['tenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }
}

class DescribeSummaryByStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/summary/summary-by-status';
}

class DescribeSummaryByStatusAndGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/summary/summary-by-status-and-region';
}

/**
 * @method string getId()
 */
class DescribeSurveyJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/winback/query-survey-job';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['id'] = $value;

        return $this;
    }
}

class DescribeSurveyJobCount extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/winback/count-survey-job';
}

class DescribeSurveyResourceTag extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/confirm-resource/get-resource-tag';
}

/**
 * @method string getResourceType()
 */
class DescribeSurveyTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/survey-template/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['resourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListMigrationJobs extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-job/describe-migration-jobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getCloudType()
 * @method string getAk()
 * @method string getSk()
 * @method string getTenantId()
 * @method string getRegion()
 */
class ListRegions extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/winback/query-region';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCloudType($value)
    {
        $this->data['CloudType'] = $value;
        $this->options['query']['cloudType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAk($value)
    {
        $this->data['Ak'] = $value;
        $this->options['query']['ak'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSk($value)
    {
        $this->data['Sk'] = $value;
        $this->options['query']['sk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['query']['tenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListSurveyJobDownLoadJobs extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/file-job/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListSurveyJobs extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/winback/query-survey-jobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListSurveyResourceByMigrationGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-group/get-survey-resource';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['query']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListSurveyResourceConnections extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/resource-connects';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class ListSurveyResourcesDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/survey-detail/query';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getCloudType()
 * @method string getAk()
 * @method string getSk()
 * @method string getRegion()
 */
class ListSurveyResourceTypes extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/winback/query-resource-type';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCloudType($value)
    {
        $this->data['CloudType'] = $value;
        $this->options['query']['cloudType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAk($value)
    {
        $this->data['Ak'] = $value;
        $this->options['query']['ak'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSk($value)
    {
        $this->data['Sk'] = $value;
        $this->options['query']['sk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class RecoverMigrationJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-job/recover-migration-job';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['id'] = $value;

        return $this;
    }
}

/**
 * @method string getJobType()
 */
class StopSyncMigrationJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-job/unsync-migration-job';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['query']['jobType'] = $value;

        return $this;
    }
}

/**
 * @method string getRegions()
 * @method string getJobType()
 */
class SyncMigrationJob extends Roa
{
    /** @var string */
    public $pathPattern = '/okss-services/migration-job/sync-migration-job';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegions($value)
    {
        $this->data['Regions'] = $value;
        $this->options['query']['regions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['query']['jobType'] = $value;

        return $this;
    }
}
