<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});


test('test_basic_routes',function(){
//1. példa
    $response = $this -> get('/');
    $response -> assertViewIs('welcome');
//2.példa
    $response=$this->get("/contact");
    $response -> assertStatus(200); //-->assertOk
//3.példa
    $response=$this->get("/conta");
    //$response -> assertStatus(404);
    $response -> assertNotFound();
//4. példa
    $response = $this->get('pass-array');
    $response -> assertOk();
    $response->assertSee('piacra');
//5. példa
    $response=$this->get("/request-test?title=EzEgyCim");
    $response->assertSee("EzEgyCim");
});
