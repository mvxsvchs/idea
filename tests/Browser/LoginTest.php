<?php

declare(strict_types=1);

it("logs in a user", function () {
  visit("/login")
      ->fill("email", "Admin@email.com")
      ->fill("password", "12345678")
      ->click("@login-button")
      ->assertPathIs("/");
  $this->assertAuthenticated();

});
