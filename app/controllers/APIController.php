<?php

class APIController extends \BaseController
{

    public function getStats($match_id)
    {
        $match = Stat::where('match_id', $match_id)->first();

        if ($match) {

            $data =
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


            return $data;

        } else {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
        }

    }

    public function getHeroes($match_id)
    {

        $match = Hero::where('match_id', $match_id)->first();

        if ($match) {

            $data =
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

            return $data;

        } else {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
        }
    }

}