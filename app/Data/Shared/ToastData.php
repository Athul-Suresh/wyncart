<?php

declare(strict_types=1);

namespace App\Data\Shared;

use App\Enums\Shared\ToastType;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
final class ToastData extends Data
{
    public function __construct(
        public readonly ToastType $type,
        public readonly string $title,
        public readonly ?string $description = null,
        public readonly ?int $duration = null,
    ) {}

    /**
     * Create a ToastData instance from an array.
     *
     * @param  array{type: string, title: string, description: string|null, duration: int|null}  $array  The array containing toast data
     * @return self Returns a ToastData instance
     */
    public static function fromArray(array $array): self
    {
        return new self(ToastType::from($array['type']), (string) $array['title'], $array['description'] ?? null, $array['duration'] ?? null);
    }

    /**
     * Create a success toast.
     */
    public static function success(string $title, ?string $description = null, ?int $duration = null): self
    {
        return new self(ToastType::Success, $title, $description, $duration);
    }

    /**
     * Create an error toast.
     */
    public static function error(string $title, ?string $description = null, ?int $duration = null): self
    {
        return new self(ToastType::Error, $title, $description, $duration);
    }

    /**
     * Create a warning toast.
     */
    public static function warning(string $title, ?string $description = null, ?int $duration = null): self
    {
        return new self(ToastType::Warning, $title, $description, $duration);
    }

    /**
     * Create an info toast.
     */
    public static function info(string $title, ?string $description = null, ?int $duration = null): self
    {
        return new self(ToastType::Info, $title, $description, $duration);
    }

    /**
     * Create a ToastData instance from session data.
     *
     * @param  array<mixed>  $sessionData  The session data containing toast notifications
     * @return self|null Returns a ToastData instance or null if no toast data is found
     */
    public static function fromSession(array $sessionData): ?self
    {
        /** @var array{type?: string, title?: string, description: string|null, duration: int|null}|null */
        $toast = collect(Arr::only($sessionData, ['toast']))
            ->filter()
            ->map(function ($content): array {
                if (! is_array($content)) {
                    return [
                        'type' => ToastType::Info->value,
                        'title' => 'Notification',
                        'description' => null,
                        'duration' => null,
                    ];
                }

                return [
                    'type' => $content['type'] ?? ToastType::Info->value,
                    'title' => $content['title'] ?? 'Notification',
                    'description' => $content['description'] ?? null,
                    'duration' => $content['duration'] ?? null,
                ];
            })
            ->first();

        if (! $toast) {
            return null;
        }

        $type = isset($toast['type']) ? ToastType::from($toast['type'])->value : ToastType::Info->value;
        $title = $toast['title'] ?? 'Notification';
        $description = $toast['description'] ?? null;
        $duration = $toast['duration'] ?? null;

        return new self(
            ToastType::from($type),
            $title,
            $description,
            $duration,
        );
    }

    /**
     * Convert the toast to an array suitable for session storage.
     */
    public function toSessionArray(): array
    {
        return [
            'type' => $this->type->value,
            'title' => $this->title,
            'description' => $this->description,
            'duration' => $this->duration,
        ];
    }
}
