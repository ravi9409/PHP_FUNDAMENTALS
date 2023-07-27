<?php

class Collection{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items=$items;
    }
}

class Video
{
    public $title;
    public $length;

    /**
     * @param $title
     * @param $length
     */
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}
$collection=new Collection(
    [
        new Video('Some Video',100),
        new Video('Some Video1',200),
        new Video('Some Video2',300)
    ]
);

var_dump($collection);

?>