<?php
namespace abushamleh\sproutVideo;

use yii\base\Component;
use SproutVideo;


/**
 *
 * @property SproutVideo\AccessGrant $accessGrant
 * @property SproutVideo\Account $account
 * @property SproutVideo\Analytics $analytics
 * @property SproutVideo\Login $login
 * @property SproutVideo\Playlist $playlist
 * @property SproutVideo\Tag $tag
 * @property SproutVideo\UploadToken $uploadToken
 * @property SproutVideo\Video $video
 */
class Client extends Component
{
    public $api_key;

    public function init()
    {
        SproutVideo::$api_key = $this->api_key;
    }

    public function __get($name)
    {
        $class = 'SproutVideo\\'.ucfirst($name);
        if (class_exists($class)){
            return $class;
        }
        return parent::__get($name);
    }
}
