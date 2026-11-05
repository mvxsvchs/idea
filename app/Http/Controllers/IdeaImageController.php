<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class IdeaImageController extends Controller
{

    public function destroy(Idea $idea)
    {
        Gate::authorize('workWith', $idea);

        Storage::disk('public')->delete($idea->image_path);

        $idea->update(['image_path' => null]);

        return redirect()->route('idea.show', $idea);
    }

}
