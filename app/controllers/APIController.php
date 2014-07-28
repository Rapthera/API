<?php

class APIController extends \BaseController
{

    public function getGPM($match_id)
    {

        if (GPM::find($match_id)) {

            $match = GPM::findOrfail($match_id);

            $array =
                [
                    'players' =>
                        [
                            $match->player_name_1 => $match->player_gpm_1,
                            $match->player_name_2 => $match->player_gpm_2,
                            $match->player_name_3 => $match->player_gpm_3,
                            $match->player_name_4 => $match->player_gpm_4,
                            $match->player_name_5 => $match->player_gpm_5,
                            $match->player_name_6 => $match->player_gpm_6,
                            $match->player_name_7 => $match->player_gpm_7,
                            $match->player_name_8 => $match->player_gpm_8,
                            $match->player_name_9 => $match->player_gpm_9,
                            $match->player_name_10 => $match->player_gpm_10,
                        ],


                ];

            json_encode($array);

            return $array;

        } else {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
        }

    }

    public function getHeroes($match_id)
    {
        if (Hero::find($match_id)) {
            $match = Hero::findOrfail($match_id);

            $array =
                [
                    'players' =>
                        [
                            $match->player_name_1 =>
                                [
                                    'Hero' => $match->player_hero_1,
                                    'Pet' => $match->player_pet_1
                                ],
                            $match->player_name_2 =>
                                [
                                    'Hero' => $match->player_hero_2,
                                    'Pet' => $match->player_pet_2,

                                ],
                            $match->player_name_3 =>
                            [
                                'Hero' => $match->player_hero_3,
                                'Pet' => $match->player_pet_3
                            ],

                            $match->player_name_4 =>
                            [
                                'Hero' => $match->player_hero_4,
                                'Pet' => $match->player_pet_4
                            ],

                            $match->player_name_5 =
                                [
                                    'Hero' => $match->player_hero_5,
                                    'Pet' => $match->player_pet_5,
                                ],
                            $match->player_name_6 =
                                [
                                    'Hero' => $match->player_hero_6,
                                    'Pet' => $match->player_pet_6,

                                ],

                            $match->player_name_7 =
                                [
                                    'Hero' => $match->player_hero_7,
                                    'Pet' => $match->player_pet_7
                                ],

                            $match->player_name_8 =
                                [
                                    'Hero' => $match->player_hero_8,
                                    'Pet' => $match->player_pet_8,
                                ],

                            $match->player_name_9 =
                                [
                                    'Hero' => $match->player_hero_9,
                                    'Pet' => $match->player_pet_9
                                ],
                            $match->player_name_10 =
                                [
                                    'Hero' => $match->player_hero_10,
                                    'Pet' => $match->player_pet_10,
                                ]
                        ]
                ];

            json_encode($array);

            return $array;

        } else {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
        }
    }

    public function getStats($match_id)
    {
        if(Stat::find($match_id))
        {
            $stat = Stat::find($match_id);

            $array =
                [

                ];

            json_encode($stat);


        }
        else
        {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

        }

    }

}