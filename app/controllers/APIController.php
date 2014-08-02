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
                            $match->player_name_1 =>
                                [
                                    'kills' => $match->player_kills_1,
                                    'deaths' => $match->player_deaths_1,
                                    'assists' => $match->player_assists_1,
                                    'gpm' => $match->player_gpm_1,
                                ],

                            $match->player_name_2 =>
                                [
                                    'kills' => $match->player_kills_2,
                                    'deaths' => $match->player_deaths_2,
                                    'assists' => $match->player_assists_2,
                                    'gpm' => $match->player_gpm_2,
                                ],

                            $match->player_name_3 =>
                                [
                                    'kills' => $match->player_kills_3,
                                    'deaths' => $match->player_deaths_3,
                                    'assists' => $match->player_assists_3,
                                    'gpm' => $match->player_gpm_3,
                                ],

                            $match->player_name_4 =>
                                [
                                    'kills' => $match->player_kills_4,
                                    'deaths' => $match->player_deaths_4,
                                    'assists' => $match->player_assists_4,
                                    'gpm' => $match->player_gpm_4,
                                ],

                            $match->player_name_5 =>
                                [
                                    'kills' => $match->player_kills_5,
                                    'deaths' => $match->player_deaths_5,
                                    'assists' => $match->player_assists_5,
                                    'gpm' => $match->player_gpm_5,
                                ],

                            $match->player_name_6 =>
                                [
                                    'kills' => $match->player_kills_6,
                                    'deaths' => $match->player_deaths_6,
                                    'assists' => $match->player_assists_6,
                                    'gpm' => $match->player_gpm_6,
                                ],

                            $match->player_name_7 =>
                                [
                                    'kills' => $match->player_kills_7,
                                    'deaths' => $match->player_deaths_7,
                                    'assists' => $match->player_assists_7,
                                    'gpm' => $match->player_gpm_7,
                                ],
                            $match->player_name_8 =>
                                [
                                    'kills' => $match->player_kills_8,
                                    'deaths' => $match->player_deaths_8,
                                    'assists' => $match->player_assists_8,
                                    'gpm' => $match->player_gpm_8,
                                ],

                            $match->player_name_9 =>
                                [
                                    'kills' => $match->player_kills_9,
                                    'deaths' => $match->player_deaths_9,
                                    'assists' => $match->player_assists_9,
                                    'gpm' => $match->player_gpm_9,
                                ],

                            $match->player_name_10 =>
                                [
                                    'kills' => $match->player_kills_10,
                                    'deaths' => $match->player_deaths_10,
                                    'assists' => $match->player_assists_10,
                                    'gpm' => $match->player_gpm_10,
                                ],
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

    public function getItems($match_id)
    {
        $item = Item::where('match_id', $match_id);

        if($item)
        {
            $items =
                [
                    'frame' =>
                    [
                        '1337' =>
                        [
                            'item' => 'Hexbane',
                            'is_custom' => 'true',
                            'components' =>
                                [
                                    '1',
                                    '2',
                                    '3',
                                ],
                            'enchantment' => 'Precision'
                        ]
                    ],

                ];

            return $items;

        }
        else
        {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

        }
    }

}