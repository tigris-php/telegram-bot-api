<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Updates;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Scalar\ScalarBoolean;
use Tigris\Telegram\Types\Scalar\ScalarInteger;
use Tigris\Telegram\Types\Scalar\ScalarString;

/**
 * Class WebhookInfo
 * Contains information about the current status of a webhook.
 *
 * @package Tigris\Telegram\Types
 * @link https://core.telegram.org/bots/api#webhookinfo
 *
 * @property string $url
 * @property bool $has_custom_certificate
 * @property int $pending_update_count
 * @property int $last_error_date
 * @property string $last_error_message
 * @property int $max_connections
 * @property ScalarString[] $allowed_updates
 */
class WebhookInfo extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'url' => ScalarString::class,
            'has_custom_certificate' => ScalarBoolean::class,
            'pending_update_count' => ScalarInteger::class,
            'last_error_date' => ScalarInteger::class,
            'last_error_message' => ScalarString::class,
            'max_connections' => ScalarInteger::class,
            'allowed_updates' => [ScalarString::class],
        ];
    }
}