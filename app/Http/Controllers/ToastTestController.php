<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ToastTestController extends Controller
{
    /**
     * Show the toast test page.
     */
    public function index(): Response
    {
        return Inertia::render('toast-test');
    }

    /**
     * Test success toast
     */
    public function testSuccess()
    {
        return $this->withSuccessToast(
            'Success!',
            'This is a success toast message from the server.',
            5000,
            route('toast.test')
        );
    }

    /**
     * Test error toast
     */
    public function testError()
    {
        return $this->withErrorToast(
            'Error!',
            'This is an error toast message from the server.',
            5000,
            route('toast.test')
        );
    }

    /**
     * Test warning toast
     */
    public function testWarning()
    {
        return $this->withWarningToast(
            'Warning!',
            'This is a warning toast message from the server.',
            5000,
            route('toast.test')
        );
    }

    /**
     * Test info toast
     */
    public function testInfo()
    {
        return $this->withInfoToast(
            'Information',
            'This is an info toast message from the server.',
            5000,
            route('toast.test')
        );
    }
}
