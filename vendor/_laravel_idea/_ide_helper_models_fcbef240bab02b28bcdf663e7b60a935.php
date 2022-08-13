<?php //fa55a724e915ca3b692d473ad638722d
/** @noinspection all */

namespace App\Models {

    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Carrot_C;
    use LaravelIdea\Helper\App\Models\_IH_Carrot_QB;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;

    /**
     * @property int $id
     * @property string|null $image
     * @property string $title_english
     * @property string|null $title_japanese
     * @property string|null $title_french
     * @property string|null $title_spanish
     * @property string|null $title_arabic
     * @property string $description_english
     * @property string|null $description_japanese
     * @property string|null $description_french
     * @property string|null $description_spanish
     * @property string|null $description_arabic
     * @property string $price
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Carrot_QB onWriteConnection()
     * @method _IH_Carrot_QB newQuery()
     * @method static _IH_Carrot_QB on(null|string $connection = null)
     * @method static _IH_Carrot_QB query()
     * @method static _IH_Carrot_QB with(array|string $relations)
     * @method _IH_Carrot_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Carrot_C|Carrot[] all()
     * @mixin _IH_Carrot_QB
     */
    class Carrot extends Model {}

    /**
     * @property int $id
     * @property string|null $image
     * @property string $title_english
     * @property string|null $title_japanese
     * @property string|null $title_french
     * @property string|null $title_spanish
     * @property string|null $title_arabic
     * @property string $description_english
     * @property string|null $description_japanese
     * @property string|null $description_french
     * @property string|null $description_spanish
     * @property string|null $description_arabic
     * @property string $background_color
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $profile_pic
     * @property string|null $profile_pic_type
     * @property string|null $date_of_birth
     * @property string|null $korean_level
     * @property string $carrot_points
     * @property string|null $social_type
     * @property string|null $social_id
     * @property string|null $device_type
     * @property string|null $device_token
     * @property int|null $premium
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string $role
     * @property int $status
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}
