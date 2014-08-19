<?php

class APIController extends \BaseController
{

    public function getStats($match_id)
    {
        $collection = Stat::where('match_id', $match_id);

        if($collection->count() > 0)
        {
            return $collection->get();

        }
        else
        {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
        }

    }

    public function getHeroes($match_id)
    {

        $collection = Hero::where('match_id', $match_id);

        if ($collection->count() > 0) {

            return $collection->get();

        } else {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
        }
    }

    public function getItems($match_id)
    {
        $collection = Item::where('match_id', $match_id);

        if ($collection->count() > 0) {

            return $collection->get();

        } else {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

        }
    }

}