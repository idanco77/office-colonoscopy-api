<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameLinkRequest;
use App\Models\GameLink;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GameLinkController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(GameLink::all()->groupBy('category'));
    }

    public function store(GameLinkRequest $request): JsonResponse
    {
        $isSaved = GameLink::saveInstance(collect($request->validated()));
        if (!$isSaved) {
            return response()->json(['message' => 'Bad Request'], 403);
        }
        return response()->json(['message' => 'Success'], 200);
    }

    public function show($id)
    {
        //
    }

    public function update(GameLinkRequest $request, GameLink $gameLink): JsonResponse
    {
        $isUpdated = $gameLink->updateInstance(collect($request->validated()));
        if (!$isUpdated) {
            return response()->json(['message' => 'Bad Request'], 403);
        }
        return response()->json(['message' => 'Success'], 200);
    }

    public function destroy(GameLink $gameLink): JsonResponse
    {
        if (! $gameLink->delete()) {
            return response()->json(['message' => 'Bad Request'], 403);
        }

        return response()->json(['message' => 'Success'], 200);
    }

    public function login(Request $request): JsonResponse
    {
        auth()->attempt([
            'user_name' => $request->userName,
            'password' => $request->password
        ]);
        $user = auth()->user();
        if (! $user) {
            return response()->json('Bad Request', 403);
        }
        $user->token = Str::random(64);
        $user->token_expiration_at = now()->addHour();
        $user->save();

        return response()->json([
            'token' => $user->token,
            'tokenExpirationAt' => Carbon::parse($user->token_expiration_at)->timestamp,
        ], 200);
    }
}
