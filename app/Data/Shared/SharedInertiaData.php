<?php

declare(strict_types=1);

namespace App\Data\Shared;

use App\Data\Auth\InertiaAuthData;
// use App\Enums\Shared\Language;
use Closure;
use Inertia\AlwaysProp;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\LiteralTypeScriptType;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
final class SharedInertiaData extends Data
{
    public function __construct(
        public readonly string $name,
        /** @var array{message: string, author: string} */
        public readonly array $quote,
        public readonly ?InertiaAuthData $auth,
        public readonly bool $sidebarOpen,
        public readonly ?ToastData $toast,
        // public readonly Language $language,
        // /** @var array<LanguageData>|null */
        // public readonly ?array $languages,
        /** @var array<string, string>|Closure */
        #[LiteralTypeScriptType('Record<string, string>')]
        public readonly array|Closure $translations,
        // public readonly SocialstreamData $socialstream,
        // public readonly PermissionsData $permissions,
        // public readonly FeaturesData $features,
        /** @var array<string,string>|null */
        public readonly array|string|AlwaysProp|null $errors = null,
    ) {}
}
