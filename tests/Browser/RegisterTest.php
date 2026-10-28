<?php

declare(strict_types=1);

it("registeres a user", function () {
  visit("/register")
      ->fill("name", "Admin")
      ->fill("email", "Admin@email.com")
      ->fill("password", "12345678")
      ->click("Create Account")
      ->assertPathIs("/");
  $this->assertAuthenticated();

  expect(Auth::user())->toMatchArray([
      "name" => "Admin",
      "email" => "Admin@email.com"
  ]);
});
