<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\ResetPasswordAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Auth\ResetPasswordData;
use App\Http\Requests\Auth\ResetPasswordRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ResetPasswordController
{
    use ApiResponse;

    public function index(Request $request): View
    {
        return view('auth.passwords.reset', compact('request'));
    }

    /**
     * @throws \Throwable
     * @throws \CuyZ\Valinor\Mapper\MappingError
     */
    public function process(ResetPasswordRequest $request): RedirectResponse
    {
        $message = ResetPasswordAction::resolve()->execute(
            data: ResetPasswordData::resolve($request->validated()),
        );

        return redirect()->back()->with('message', __($message));
    }
}
