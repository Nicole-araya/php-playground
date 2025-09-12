<?php
declare(strict_types=1); // Enable strict typing, which helps catch type-related errors early.

function render_template(string $template, array $data = [])
{
  extract($data);
  require "templates/$template.php";
}

