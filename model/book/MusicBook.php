<?php

class MusicBook extends BookAbstract
{
    public function __construct(int $_id,string $_name,int $_price,string $_category)
    {
        parent::__construct($_id,$_name,$_price,$_category);
    }
    public function __toString(): string
    {
        return "MusicBook{" .
            "id=" . $this->id .
            ", name='" . $this->name . '\'' .
            ", price=" . $this->price .
            ", category='" . $this->category . '\'' .
            '} ';
    }
}
