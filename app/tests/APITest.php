<?php

class APITest extends TestCase
{
    public function UserJSONRoute()
    {
        $crawler = $this->client->request('GET', '/v1/1/');

        if($this->assertTrue($this->client->getResponse()->isOk()))
        {
            echo "true";

        }
        else
        {
            echo "false";
        }

    }
}