<?php

it('test user registration', function () {

    //AAA
    //01) Arange what we want to the test
    $user = [
        'name' => 'test',
        'email' => 'test@gmail.com',
        'password' => '12345678'
    ];

    //02) ACT out Test
    $reponse = $this->post('api/register', $user);

    //03) Assertion our test
    $reponse->assertStatus(200); // = $response->assertOk()
    $reponse->assertJsonStructure([
        'status',
        'message',
        'userName'
    ]);
    $this->assertEquals($reponse['userName'], 'test');
});
