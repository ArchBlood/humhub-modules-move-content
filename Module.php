<?php
/**
 * Move content
 * @link https://www.cuzy.app
 * @license https://www.cuzy.app/cuzy-license
 * @author [Marc FARRE](https://marc.fun)
 */

namespace humhub\modules\moveContent;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
     * @var string defines the icon
     */
    public $icon = 'arrows-h';

    /**
     * @var string defines path for resources, including the screenshots path for the marketplace
     */
    public $resourcesPath = 'resources';


    /**
     * @inerhitdoc
     */
    public function getName()
    {
        return Yii::t('MoveContentModule.base', 'Move content');
    }

    /**
     * @inerhitdoc
     */
    public function getDescription()
    {
        return Yii::t('MoveContentModule.base', 'Transfer content, comments and likes from one user or space to another.');
    }

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/move-content/config']);
    }
}
