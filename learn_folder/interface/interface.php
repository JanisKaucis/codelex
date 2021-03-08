<?php

//interfeiss apraksta tikai publiskas metodes.

interface StorageInterface
{
    public function save(): void;
}

class DatabaseStorage implements StorageInterface
{
public function save(): void
{
    var_dump('saving in database');
    //mysql bla bla
}
}

class SockStorage implements StorageInterface
{
    public function save(): void
    {
        var_dump('saving in sock');
        //izvilkt zeki no plaukta
        //nolikt zeki
    }
}
class Application
{
    public function run(StorageInterface $storage)
    {
        $storage->save();
    }
}

(new Application())->run(new DatabaseStorage());
(new Application())->run(new SockStorage());