<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameLinkRequest;
use App\Http\Requests\IncreaseLinkByCategoryRequest;
use App\Models\GameLink;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GameLinkController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(
            GameLink::query()
                ->select('name', 'category', 'link', 'click_count as clickCount', 'id')
                ->get()
                ->groupBy('category')
        );
    }

    public function store(GameLinkRequest $request): JsonResponse
    {
        $isSaved = GameLink::saveInstance(collect($request->validated()));
        if (!$isSaved) {
            return response()->json(['message' => 'Bad Request'], 403);
        }
        return response()->json(['message' => 'Success'], 200);
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

    public function increaseClickCount(GameLink $gameLink): JsonResponse
    {
        $gameLink->click_count = ++$gameLink->click_count;
        $gameLink->save();
        return response()->json(['message' => 'success'], 200);
    }

    public function increaseClickCountByCategory(IncreaseLinkByCategoryRequest $request): JsonResponse
    {
        GameLink::increaseByCategory($request->category);
        return response()->json(['message' => 'success'], 200);
    }
}
