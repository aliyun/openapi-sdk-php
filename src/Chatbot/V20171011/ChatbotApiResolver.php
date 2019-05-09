<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DeleteCoreWord deleteCoreWord(array $options = [])
 * @method UpdateCoreWord updateCoreWord(array $options = [])
 * @method CreateCoreWord createCoreWord(array $options = [])
 * @method DescribeDialog describeDialog(array $options = [])
 * @method DeleteDialog deleteDialog(array $options = [])
 * @method UpdateDialog updateDialog(array $options = [])
 * @method QueryDialogs queryDialogs(array $options = [])
 * @method DescribeDialogFlow describeDialogFlow(array $options = [])
 * @method DeleteIntent deleteIntent(array $options = [])
 * @method UpdateIntent updateIntent(array $options = [])
 * @method QueryEntities queryEntities(array $options = [])
 * @method DescribeEntities describeEntities(array $options = [])
 * @method DisableDialogFlow disableDialogFlow(array $options = [])
 * @method UpdateEntity updateEntity(array $options = [])
 * @method DeleteEntity deleteEntity(array $options = [])
 * @method TestDialogFlow testDialogFlow(array $options = [])
 * @method AppendEntityMember appendEntityMember(array $options = [])
 * @method RemoveEntityMember removeEntityMember(array $options = [])
 * @method DescribeIntent describeIntent(array $options = [])
 * @method QueryIntents queryIntents(array $options = [])
 * @method DescribePerspective describePerspective(array $options = [])
 * @method QueryPerspectives queryPerspectives(array $options = [])
 * @method DescribeCategory describeCategory(array $options = [])
 * @method UpdatePerspective updatePerspective(array $options = [])
 * @method CreatePerspective createPerspective(array $options = [])
 * @method ActivatePerspective activatePerspective(array $options = [])
 * @method PublishKnowledge publishKnowledge(array $options = [])
 * @method MoveKnowledgeCategory moveKnowledgeCategory(array $options = [])
 * @method QueryKnowledges queryKnowledges(array $options = [])
 * @method DisableKnowledge disableKnowledge(array $options = [])
 * @method QueryCoreWords queryCoreWords(array $options = [])
 * @method DescribeCoreWord describeCoreWord(array $options = [])
 * @method AddSynonym addSynonym(array $options = [])
 * @method RemoveSynonym removeSynonym(array $options = [])
 * @method UpdateKnowledge updateKnowledge(array $options = [])
 * @method DescribeKnowledge describeKnowledge(array $options = [])
 * @method DeleteKnowledge deleteKnowledge(array $options = [])
 * @method CreateKnowledge createKnowledge(array $options = [])
 * @method QueryCategories queryCategories(array $options = [])
 * @method CreateIntent createIntent(array $options = [])
 * @method CreateEntity createEntity(array $options = [])
 * @method QuerySystemEntities querySystemEntities(array $options = [])
 * @method UpdateDialogFlow updateDialogFlow(array $options = [])
 * @method CreateDialog createDialog(array $options = [])
 * @method PublishDialogFlow publishDialogFlow(array $options = [])
 * @method DeleteCategory deleteCategory(array $options = [])
 * @method UpdateCategory updateCategory(array $options = [])
 * @method CreateCategory createCategory(array $options = [])
 * @method Feedback feedback(array $options = [])
 * @method Chat chat(array $options = [])
 */
class ChatbotApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Chatbot';

    /** @var string */
    public $version = '2017-10-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'beebot';
}

/**
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 */
class DeleteCoreWord extends Rpc
{
}

/**
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 * @method string getCoreWordCode()
 * @method $this withCoreWordCode($value)
 */
class UpdateCoreWord extends Rpc
{
}

/**
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 */
class CreateCoreWord extends Rpc
{
}

/**
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class DescribeDialog extends Rpc
{
}

/**
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class DeleteDialog extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 * @method string getDialogName()
 * @method $this withDialogName($value)
 */
class UpdateDialog extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDialogName()
 * @method $this withDialogName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryDialogs extends Rpc
{
}

/**
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class DescribeDialogFlow extends Rpc
{
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 */
class DeleteIntent extends Rpc
{
}

/**
 * @method string getIntentDefinition()
 * @method string getIntentId()
 * @method $this withIntentId($value)
 */
class UpdateIntent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntentDefinition($value)
    {
        $this->data['IntentDefinition'] = $value;
        $this->options['form_params']['IntentDefinition'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityName()
 * @method $this withEntityName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryEntities extends Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 */
class DescribeEntities extends Rpc
{
}

/**
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class DisableDialogFlow extends Rpc
{
}

/**
 * @method string getRegex()
 * @method $this withRegex($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getMembers()
 * @method string getEntityName()
 * @method $this withEntityName($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 */
class UpdateEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMembers($value)
    {
        $this->data['Members'] = $value;
        $this->options['form_params']['Members'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 */
class DeleteEntity extends Rpc
{
}

/**
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class TestDialogFlow extends Rpc
{
}

/**
 * @method string getMember()
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getApplyType()
 * @method $this withApplyType($value)
 */
class AppendEntityMember extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMember($value)
    {
        $this->data['Member'] = $value;
        $this->options['form_params']['Member'] = $value;

        return $this;
    }
}

/**
 * @method string getRemoveType()
 * @method $this withRemoveType($value)
 * @method string getMember()
 * @method string getEntityId()
 * @method $this withEntityId($value)
 */
class RemoveEntityMember extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMember($value)
    {
        $this->data['Member'] = $value;
        $this->options['form_params']['Member'] = $value;

        return $this;
    }
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 */
class DescribeIntent extends Rpc
{
}

/**
 * @method string getIntentName()
 * @method $this withIntentName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryIntents extends Rpc
{
}

/**
 * @method string getPerspectiveId()
 * @method $this withPerspectiveId($value)
 */
class DescribePerspective extends Rpc
{
}

class QueryPerspectives extends Rpc
{
}

/**
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DescribeCategory extends Rpc
{
}

/**
 * @method string getPerspectiveId()
 * @method $this withPerspectiveId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdatePerspective extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class CreatePerspective extends Rpc
{
}

/**
 * @method string getPerspectiveId()
 * @method $this withPerspectiveId($value)
 */
class ActivatePerspective extends Rpc
{
}

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 */
class PublishKnowledge extends Rpc
{
}

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class MoveKnowledgeCategory extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 * @method string getKnowledgeTitle()
 * @method $this withKnowledgeTitle($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class QueryKnowledges extends Rpc
{
}

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 */
class DisableKnowledge extends Rpc
{
}

/**
 * @method string getSynonym()
 * @method $this withSynonym($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryCoreWords extends Rpc
{
}

/**
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 */
class DescribeCoreWord extends Rpc
{
}

/**
 * @method string getSynonym()
 * @method $this withSynonym($value)
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 */
class AddSynonym extends Rpc
{
}

/**
 * @method string getSynonym()
 * @method $this withSynonym($value)
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 */
class RemoveSynonym extends Rpc
{
}

/**
 * @method string getKnowledge()
 */
class UpdateKnowledge extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKnowledge($value)
    {
        $this->data['Knowledge'] = $value;
        $this->options['form_params']['Knowledge'] = $value;

        return $this;
    }
}

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 */
class DescribeKnowledge extends Rpc
{
}

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 */
class DeleteKnowledge extends Rpc
{
}

/**
 * @method string getKnowledge()
 */
class CreateKnowledge extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKnowledge($value)
    {
        $this->data['Knowledge'] = $value;
        $this->options['form_params']['Knowledge'] = $value;

        return $this;
    }
}

/**
 * @method string getShowChildrens()
 * @method $this withShowChildrens($value)
 * @method string getParentCategoryId()
 * @method $this withParentCategoryId($value)
 */
class QueryCategories extends Rpc
{
}

/**
 * @method string getIntentDefinition()
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class CreateIntent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntentDefinition($value)
    {
        $this->data['IntentDefinition'] = $value;
        $this->options['form_params']['IntentDefinition'] = $value;

        return $this;
    }
}

/**
 * @method string getRegex()
 * @method $this withRegex($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getMembers()
 * @method string getEntityName()
 * @method $this withEntityName($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class CreateEntity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMembers($value)
    {
        $this->data['Members'] = $value;
        $this->options['form_params']['Members'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityName()
 * @method $this withEntityName($value)
 */
class QuerySystemEntities extends Rpc
{
}

/**
 * @method string getModuleDefinition()
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class UpdateDialogFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModuleDefinition($value)
    {
        $this->data['ModuleDefinition'] = $value;
        $this->options['form_params']['ModuleDefinition'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDialogName()
 * @method $this withDialogName($value)
 */
class CreateDialog extends Rpc
{
}

/**
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class PublishDialogFlow extends Rpc
{
}

/**
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DeleteCategory extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class UpdateCategory extends Rpc
{
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
 * @method string getFeedback()
 * @method $this withFeedback($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 */
class Feedback extends Rpc
{
}

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 * @method string getSenderId()
 * @method $this withSenderId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSenderNick()
 * @method $this withSenderNick($value)
 * @method array getPerspective()
 * @method string getRecommend()
 * @method $this withRecommend($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class Chat extends Rpc
{

    /**
     * @param array $perspective
     *
     * @return $this
     */
    public function withPerspective(array $perspective)
    {
        $this->data['Perspective'] = $perspective;
        foreach ($perspective as $i => $iValue) {
            $this->options['query']['Perspective.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
