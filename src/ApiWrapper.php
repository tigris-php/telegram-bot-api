<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram;

use Tigris\Telegram\Helpers\TypeHelper;
use Tigris\Telegram\Types\Chat;
use Tigris\Telegram\Types\ChatMember;
use Tigris\Telegram\Types\File;
use Tigris\Telegram\Types\Games\GameHighScore;
use Tigris\Telegram\Types\Interfaces\TypeInterface;
use Tigris\Telegram\Types\Message;
use Tigris\Telegram\Types\Scalar\ScalarBoolean;
use Tigris\Telegram\Types\Scalar\ScalarInteger;
use Tigris\Telegram\Types\Scalar\ScalarString;
use Tigris\Telegram\Types\Stickers\StickerSet;
use Tigris\Telegram\Types\Updates\Update;
use Tigris\Telegram\Types\Updates\WebhookInfo;
use Tigris\Telegram\Types\User;
use Tigris\Telegram\Types\UserProfilePhotos;

/**
 * Class ApiWrapper
 * @package Tigris\Telegram
 *
 * Updates related methods
 * @link https://core.telegram.org/bots/api#getting-updates
 * @method null|Update[]            getUpdates(array $params)
 * @method null|true                setWebhook(array $params)
 * @method null|true                deleteWebhook(array $params)
 * @method null|WebhookInfo         getWebhookInfo(array $params)
 *
 * Common methods
 * @link https://core.telegram.org/bots/api#available-methods
 * @method null|User                getMe()
 * @method null|Message             sendMessage(array $params)
 * @method null|Message             forwardMessage(array $params)
 * @method null|Message             sendPhoto(array $params)
 * @method null|Message             sendAudio(array $params)
 * @method null|Message             sendDocument(array $params)
 * @method null|Message             sendVideo(array $params)
 * @method null|Message             sendVoice(array $params)
 * @method null|Message             sendVideoNote(array $params)
 * @method null|Message             sendLocation(array $params)
 * @method null|Message             sendVenue(array $params)
 * @method null|Message             sendContact(array $params)
 * @method null|true                sendChatAction(array $params)
 * @method null|UserProfilePhotos   getUserProfilePhotos(array $params)
 * @method null|File                getFile(array $params)
 * @method null|true                kickChatMember(array $params)
 * @method null|true                unbanChatMember(array $params)
 * @method null|true                restrictChatMember(array $params)
 * @method null|true                promoteChatMember(array $params)
 * @method null|string              exportChatInviteLink(array $params)
 * @method null|true                setChatPhoto(array $params)
 * @method null|true                deleteChatPhoto(array $params)
 * @method null|true                setChatTitle(array $params)
 * @method null|true                setChatDescription(array $params)
 * @method null|true                pinChatMessage(array $params)
 * @method null|true                unpinChatMessage(array $params)
 * @method null|true                leaveChat(array $params)
 * @method null|Chat                getChat(array $params)
 * @method null|ChatMember[]        getChatAdministrators(array $params)
 * @method null|integer             getChatMembersCount(array $params)
 * @method null|ChatMember          getChatMember(array $params)
 * @method null|true                answerCallbackQuery(array $params)
 * @method null|true                answerInlineQuery(array $params)
 *
 * Updating messages
 * @link https://core.telegram.org/bots/api#updating-messages
 *
 * @method null|true                editMessageText(array $params)
 * @method null|true                editMessageCaption(array $params)
 * @method null|true                editMessageReplyMarkup(array $params)
 * @method null|true                deleteMessage(array $params)
 *
 * Sticker methods
 * @link https://core.telegram.org/bots/api#stickers
 * @method null|Message             sendSticker(array $params)
 * @method null|StickerSet          getStickerSet(array $params)
 * @method null|File                uploadStickerFile(array $params)
 * @method null|true                createNewStickerSet(array $params)
 * @method null|true                addStickerToSet(array $params)
 * @method null|true                setStickerPositionInSet(array $params)
 * @method null|true                deleteStickerFromSet(array $params)
 *
 * Payments methods
 * @link https://core.telegram.org/bots/api#payments
 * @method null|Message             sendInvoice(array $params)
 * @method null|true                answerShippingQuery(array $params)
 * @method null|true                answerPreCheckoutQuery(array $params)
 *
 * Games methods
 * @link https://core.telegram.org/bots/api#games
 * @method null|Message             sendGame(array $params)
 * @method null|Message             setGameScore(array $params)
 * @method null|GameHighScore[]     getGameHighScores(array $params)
 *
 */
class ApiWrapper
{
    const METHODS = [
        // Updates related methods

        'getUpdates' => [Update::class],
        'setWebhook' => ScalarBoolean::class,
        'deleteWebhook' => ScalarBoolean::class,
        'getWebhookInfo' => WebhookInfo::class,

        // Common methods

        'getMe' => User::class,
        'sendMessage' => Message::class,
        'forwardMessage' => Message::class,
        'sendPhoto' => Message::class,
        'sendAudio' => Message::class,
        'sendDocument' => Message::class,
        'sendVideo' => Message::class,
        'sendVoice' => Message::class,
        'sendVideoNote' => Message::class,
        'sendLocation' => Message::class,
        'sendVenue' => Message::class,
        'sendContact' => Message::class,
        'sendChatAction' => ScalarBoolean::class,
        'getUserProfilePhotos' => UserProfilePhotos::class,
        'getFile' => File::class,
        'kickChatMember' => ScalarBoolean::class,
        'unbanChatMember' => ScalarBoolean::class,
        'restrictChatMember' => ScalarBoolean::class,
        'promoteChatMember' => ScalarBoolean::class,
        'exportChatInviteLink' => ScalarString::class,
        'setChatPhoto' => ScalarBoolean::class,
        'deleteChatPhoto' => ScalarBoolean::class,
        'setChatTitle' => ScalarBoolean::class,
        'setChatDescription' => ScalarBoolean::class,
        'pinChatMessage' => ScalarBoolean::class,
        'unpinChatMessage' => ScalarBoolean::class,
        'leaveChat' => ScalarBoolean::class,
        'getChat' => Chat::class,
        'getChatAdministrators' => [ChatMember::class],
        'getChatMembersCount' => ScalarInteger::class,
        'getChatMember' => ChatMember::class,
        'answerCallbackQuery' => ScalarBoolean::class,
        'answerInlineQuery' => ScalarBoolean::class,

        // Updating messages

        'editMessageText' => ScalarBoolean::class,
        'editMessageCaption' => ScalarBoolean::class,
        'editMessageReplyMarkup' => ScalarBoolean::class,
        'deleteMessage' => ScalarBoolean::class,

        // Sticker methods

        'sendSticker' => Message::class,
        'getStickerSet' => StickerSet::class,
        'uploadStickerFile' => File::class,
        'createNewStickerSet' => ScalarBoolean::class,
        'addStickerToSet' => ScalarBoolean::class,
        'setStickerPositionInSet' => ScalarBoolean::class,
        'deleteStickerFromSet' => ScalarBoolean::class,

        // Payment methods

        'sendInvoice' => Message::class,
        'answerShippingQuery' => ScalarBoolean::class,
        'answerPreCheckoutQuery' => ScalarBoolean::class,

        // Games methods
        'sendGame' => Message::class,
        'setGameScore' => Message::class,
        'getGameHighScores' => [GameHighScore::class],
    ];

    /** @var callable */
    protected $errorHandler;

    /** @var ApiClient */
    protected $apiClient;

    /**
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @param callable $errorHandler
     */
    public function setErrorHandler(callable $errorHandler)
    {
        $this->errorHandler = $errorHandler;
    }

    /**
     * @param string $methodName
     * @param string $arguments
     * @return TypeInterface|null
     */
    public function __call($methodName, $arguments)
    {
        if (!array_key_exists($methodName, self::METHODS)) {
            throw new \BadMethodCallException('Unsupported method: ' . $methodName);
        }

        $response = null;
        try {
            $response = $this->apiClient->call($methodName, $arguments);
        } catch (\Exception $e) {
            if (is_callable($this->errorHandler)) {
                call_user_func($this->errorHandler, $e);
            }
        }

        if ($response == null) {
            return null;
        }

        return TypeHelper::parse(self::METHODS[$methodName], $response);
    }
}