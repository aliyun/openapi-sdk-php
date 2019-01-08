<?php

namespace AlibabaCloud\Chatbot;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Chatbot based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Chatbot
 *
 * @method static V20171011\ActivatePerspective activatePerspective(array $options = [])
 * @method static V20171011\AddSynonym addSynonym(array $options = [])
 * @method static V20171011\AppendEntityMember appendEntityMember(array $options = [])
 * @method static V20171011\Chat chat(array $options = [])
 * @method static V20171011\CreateCategory createCategory(array $options = [])
 * @method static V20171011\CreateCoreWord createCoreWord(array $options = [])
 * @method static V20171011\CreateDialog createDialog(array $options = [])
 * @method static V20171011\CreateEntity createEntity(array $options = [])
 * @method static V20171011\CreateIntent createIntent(array $options = [])
 * @method static V20171011\CreateKnowledge createKnowledge(array $options = [])
 * @method static V20171011\CreatePerspective createPerspective(array $options = [])
 * @method static V20171011\DeleteCategory deleteCategory(array $options = [])
 * @method static V20171011\DeleteCoreWord deleteCoreWord(array $options = [])
 * @method static V20171011\DeleteDialog deleteDialog(array $options = [])
 * @method static V20171011\DeleteEntity deleteEntity(array $options = [])
 * @method static V20171011\DeleteIntent deleteIntent(array $options = [])
 * @method static V20171011\DeleteKnowledge deleteKnowledge(array $options = [])
 * @method static V20171011\DescribeCategory describeCategory(array $options = [])
 * @method static V20171011\DescribeCoreWord describeCoreWord(array $options = [])
 * @method static V20171011\DescribeDialog describeDialog(array $options = [])
 * @method static V20171011\DescribeDialogFlow describeDialogFlow(array $options = [])
 * @method static V20171011\DescribeEntities describeEntities(array $options = [])
 * @method static V20171011\DescribeIntent describeIntent(array $options = [])
 * @method static V20171011\DescribeKnowledge describeKnowledge(array $options = [])
 * @method static V20171011\DescribePerspective describePerspective(array $options = [])
 * @method static V20171011\DisableDialogFlow disableDialogFlow(array $options = [])
 * @method static V20171011\DisableKnowledge disableKnowledge(array $options = [])
 * @method static V20171011\Feedback feedback(array $options = [])
 * @method static V20171011\MoveKnowledgeCategory moveKnowledgeCategory(array $options = [])
 * @method static V20171011\PublishDialogFlow publishDialogFlow(array $options = [])
 * @method static V20171011\PublishKnowledge publishKnowledge(array $options = [])
 * @method static V20171011\QueryCategories queryCategories(array $options = [])
 * @method static V20171011\QueryCoreWords queryCoreWords(array $options = [])
 * @method static V20171011\QueryDialogs queryDialogs(array $options = [])
 * @method static V20171011\QueryEntities queryEntities(array $options = [])
 * @method static V20171011\QueryIntents queryIntents(array $options = [])
 * @method static V20171011\QueryKnowledges queryKnowledges(array $options = [])
 * @method static V20171011\QueryPerspectives queryPerspectives(array $options = [])
 * @method static V20171011\QuerySystemEntities querySystemEntities(array $options = [])
 * @method static V20171011\RecommendKnowledges recommendKnowledges(array $options = [])
 * @method static V20171011\RemoveEntityMember removeEntityMember(array $options = [])
 * @method static V20171011\RemoveSynonym removeSynonym(array $options = [])
 * @method static V20171011\TestDialogFlow testDialogFlow(array $options = [])
 * @method static V20171011\UpdateCategory updateCategory(array $options = [])
 * @method static V20171011\UpdateDialog updateDialog(array $options = [])
 * @method static V20171011\UpdateDialogFlow updateDialogFlow(array $options = [])
 * @method static V20171011\UpdateEntity updateEntity(array $options = [])
 * @method static V20171011\UpdateIntent updateIntent(array $options = [])
 * @method static V20171011\UpdateKnowledge updateKnowledge(array $options = [])
 * @method static V20171011\UpdatePerspective updatePerspective(array $options = [])
 */
class ChatbotV20171011
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Chatbot\\V20171011';
}
