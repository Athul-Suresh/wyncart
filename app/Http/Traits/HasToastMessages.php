<?php

declare(strict_types=1);

namespace App\Http\Traits;

use App\Enums\Shared\ToastType;
use Illuminate\Http\RedirectResponse;

trait HasToastMessages
{
    /**
     * Redirect back with a success toast message.
     */
    protected function withSuccessToast(
        string $title,
        ?string $description = null,
        ?int $duration = null,
        ?string $redirectTo = null
    ): RedirectResponse {
        return $this->withToast(ToastType::Success, $title, $description, $duration, $redirectTo);
    }

    /**
     * Redirect back with an error toast message.
     */
    protected function withErrorToast(
        string $title,
        ?string $description = null,
        ?int $duration = null,
        ?string $redirectTo = null
    ): RedirectResponse {
        return $this->withToast(ToastType::Error, $title, $description, $duration, $redirectTo);
    }

    /**
     * Redirect back with a warning toast message.
     */
    protected function withWarningToast(
        string $title,
        ?string $description = null,
        ?int $duration = null,
        ?string $redirectTo = null
    ): RedirectResponse {
        return $this->withToast(ToastType::Warning, $title, $description, $duration, $redirectTo);
    }

    /**
     * Redirect back with an info toast message.
     */
    protected function withInfoToast(
        string $title,
        ?string $description = null,
        ?int $duration = null,
        ?string $redirectTo = null
    ): RedirectResponse {
        return $this->withToast(ToastType::Info, $title, $description, $duration, $redirectTo);
    }

    /**
     * Redirect with a toast message.
     */
    protected function withToast(
        ToastType $type,
        string $title,
        ?string $description = null,
        ?int $duration = null,
        ?string $redirectTo = null
    ): RedirectResponse {
        $toastData = [
            'type' => $type->value,
            'title' => $title,
            'description' => $description,
            'duration' => $duration,
        ];

        if ($redirectTo) {
            return redirect($redirectTo)->with('toast', $toastData);
        }

        return back()->with('toast', $toastData);
    }

    /**
     * Redirect to a specific route with a success toast message.
     */
    protected function redirectWithSuccess(
        string $route,
        string $title,
        ?string $description = null,
        ?int $duration = null,
        array $parameters = []
    ): RedirectResponse {
        return to_route($route, $parameters)->with('toast', [
            'type' => ToastType::Success->value,
            'title' => $title,
            'description' => $description,
            'duration' => $duration,
        ]);
    }

    /**
     * Redirect to a specific route with an error toast message.
     */
    protected function redirectWithError(
        string $route,
        string $title,
        ?string $description = null,
        ?int $duration = null,
        array $parameters = []
    ): RedirectResponse {
        return to_route($route, $parameters)->with('toast', [
            'type' => ToastType::Error->value,
            'title' => $title,
            'description' => $description,
            'duration' => $duration,
        ]);
    }

    /**
     * Redirect to a specific route with a warning toast message.
     */
    protected function redirectWithWarning(
        string $route,
        string $title,
        ?string $description = null,
        ?int $duration = null,
        array $parameters = []
    ): RedirectResponse {
        return to_route($route, $parameters)->with('toast', [
            'type' => ToastType::Warning->value,
            'title' => $title,
            'description' => $description,
            'duration' => $duration,
        ]);
    }

    /**
     * Redirect to a specific route with an info toast message.
     */
    protected function redirectWithInfo(
        string $route,
        string $title,
        ?string $description = null,
        ?int $duration = null,
        array $parameters = []
    ): RedirectResponse {
        return to_route($route, $parameters)->with('toast', [
            'type' => ToastType::Info->value,
            'title' => $title,
            'description' => $description,
            'duration' => $duration,
        ]);
    }
}
