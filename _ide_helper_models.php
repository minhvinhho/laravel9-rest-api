<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Activation
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property bool $completed
 * @property string|null $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Activation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activation whereUserId($value)
 */
	class Activation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Google2FA
 *
 * @property int $id
 * @property int $user_id
 * @property string $secret_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\Google2FAFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Google2FA newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Google2FA newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Google2FA query()
 * @method static \Illuminate\Database\Eloquent\Builder|Google2FA whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Google2FA whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Google2FA whereSecretKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Google2FA whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Google2FA whereUserId($value)
 */
	class Google2FA extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Media
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $path
 * @property string|null $url
 * @property string $type
 * @property string|null $description
 * @property array|null $meta
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\MediaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUserId($value)
 */
	class Media extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Option
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property int|null $autoload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\OptionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereAutoload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereValue($value)
 */
	class Option extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property string|null $created_at
 * @method static \Database\Factories\PasswordResetFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Persistance
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Persistance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persistance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persistance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Persistance whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persistance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persistance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persistance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persistance whereUserId($value)
 */
	class Persistance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reminder
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property bool $completed
 * @property string|null $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reminder whereUserId($value)
 */
	class Reminder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property array|null $permissions
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\RoleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Throttle
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $type
 * @property string|null $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle query()
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Throttle whereUserId($value)
 */
	class Throttle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $username
 * @property string|null $last_name
 * @property string|null $first_name
 * @property string $email
 * @property string $password
 * @property string|null $country_code
 * @property string|null $phone_number
 * @property string $default_factor
 * @property string|null $authy_id
 * @property int|null $authy_verified
 * @property string $default_auth_factor
 * @property int|null $authy_enabled
 * @property string|null $google2fa_secret
 * @property array|null $permissions
 * @property string|null $last_login
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cartalyst\Sentinel\Activations\EloquentActivation> $activations
 * @property-read int|null $activations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Client> $clients
 * @property-read int|null $clients_count
 * @property-read \App\Models\Google2FA|null $google2fa
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserMeta> $meta
 * @property-read int|null $meta_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Persistance> $persistences
 * @property-read int|null $persistences_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cartalyst\Sentinel\Reminders\EloquentReminder> $reminders
 * @property-read int|null $reminders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cartalyst\Sentinel\Throttling\EloquentThrottle> $throttle
 * @property-read int|null $throttle_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Token> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAuthyEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAuthyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAuthyVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDefaultAuthFactor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDefaultFactor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogle2faSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\Authenticatable, \Illuminate\Contracts\Auth\Access\Authorizable, \Illuminate\Contracts\Auth\CanResetPassword {}
}

namespace App\Models{
/**
 * App\Models\UserMeta
 *
 * @property int $id
 * @property int $user_id
 * @property string $meta_key
 * @property array|null $meta_value
 * @property int $autoload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta whereAutoload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta whereMetaKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta whereMetaValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMeta whereUserId($value)
 */
	class UserMeta extends \Eloquent {}
}

