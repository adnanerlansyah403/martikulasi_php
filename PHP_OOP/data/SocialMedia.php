<?php

class SocialMedia
{
    public string $name;

    final public function login(string $username, string $password)
    {
        return true;
    }
}

final class Facebook extends SocialMedia
{
    public function login(string $username, string $password)
    {
        return false;
    }
}

class FakeFacebook extends Facebook
{
}
