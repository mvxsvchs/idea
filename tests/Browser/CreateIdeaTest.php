<?php

declare(strict_types=1);

use App\Models\User;

it("creates a new idea", function () {
    $this->actingAs($user = User::factory()->create());

    visit("/ideas")
        ->click("@create-idea-button")
        ->fill("title", "My First Idea")
        ->click("@button-status-completed")
        ->fill("description", "This is my first idea description.")
        ->fill("@new-link", "https://laracasts.com")
        ->click("@submit-new-link-button")
        ->fill("@new-link", "https://laravel.com")
        ->click("@submit-new-link-button")
        ->fill("@new-step", "Do a thing")
        ->click("@submit-new-step-button")
        ->fill("@new-step", "Do another thing")
        ->click("@submit-new-step-button")
        ->click("Create")
        ->assertPathIs("/ideas");

    expect($idea = $user->ideas()->first())->toMatchArray([
        'title' => 'My First Idea',
        'status' => 'completed',
        'description' => 'This is my first idea description.',
        'links' => ['https://laracasts.com', 'https://laravel.com'],
    ]);

    expect($idea->steps)->toHaveCount(2);

});
