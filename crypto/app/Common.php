<?php
function base_url(string $path = ''): string
{
    return $path === '' ? '/crypto' : "/crypto/$path";
}

function redirect(string $path): void
{
    header("location: $path");
}