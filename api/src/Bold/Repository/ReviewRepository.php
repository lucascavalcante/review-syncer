<?php

namespace Bold\Repository;

class ReviewRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('Bold\Entity\Review');
    }

    public function insert($obj)
    {
        parent::insert($obj);
    }
}