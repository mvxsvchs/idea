<?php

use App\Models\User;

it("creates a new idea", function () {
    $this->actingAs($user = User::factory()->create());

    visit("/ideas")
        ->click("@create-idea-button")
        ->fill("title", "My First Idea")
        ->click("@button-status-completed")
        ->fill("description", "This is my first idea description.")
        ->click("Create")
        ->assertPathIs("/ideas");

    expect($user->ideas()->first())->toMatchArray([
        "title" => "My First Idea",
        "status" => "completed",
        "description" => "This is my first idea description.",
    ]);
});
