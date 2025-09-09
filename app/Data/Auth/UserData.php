<?php

declare(strict_types=1);

namespace App\Data\Auth;

use App\Models\User;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
final class UserData extends Data
{
    public function __construct(

        public readonly ?string $id,
        public readonly string $name,
        public readonly string $email,
        public readonly string $phone,
        public readonly ?string $username,
        public readonly ?string $device_token,
        public readonly ?string $web_token,
        public readonly string $password,
        public readonly int $status,
        public readonly ?string $country_code,
        public readonly bool $is_guest,
        public readonly ?float $balance,
        public readonly ?string $creator_type,
        public readonly ?string $creator_id,
        public readonly ?string $editor_type,
        public readonly ?string $editor_id,
    ) {
    }

    final public static function fromModel(User $user): self
    {

        return self::from([
              'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'username' => $user->username,
            'device_token' => $user->device_token,
            'web_token' => $user->web_token,
            'password' => $user->password,
            'status' => $user->status,
            'country_code' => $user->country_code,
            'is_guest' => $user->is_guest,
            'balance' => $user->balance,
            'creator_type' => $user->creator_type,
            'creator_id' => $user->creator_id,
            'editor_type' => $user->editor_type,
            'editor_id' => $user->editor_id,
        ]);
    }
}
