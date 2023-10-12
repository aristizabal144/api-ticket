<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Database\Factories\TicketFactory;

class TicketControllerTest extends TestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;

    public function testIndex()
    {
        TicketFactory::new()->count(10)->create();
        $response = $this->get('/tickets');
        $response->assertResponseOk();
        $response->seeJsonStructure([
            "current_page",
            "data",
            "first_page_url",
            "from",
            "last_page",
            "last_page_url",
            "links",
            "next_page_url",
            "path",
            "per_page",
            "prev_page_url",
            "to",
            "total"
        ]);
    }

    public function testShow()
    {
        $ticket = TicketFactory::new()->create();
        $response = $this->get("/tickets/{$ticket->id}");
        $response->assertResponseOk();
        $response->seeJsonStructure([
            'id',
            'usuario',
            'estatus',
            'created_at',
            'updated_at',
        ]);
    }

    public function testStore()
    {
        $data = [
            'usuario' => 'test_name',
            'estatus' => 'abierto',
        ];
        $response = $this->post('/tickets', $data);
        $response->assertResponseStatus(201);
        $response->seeJsonStructure([
            'id',
            'usuario',
            'estatus',
            'created_at',
            'updated_at',
        ]);
    }

    public function testUpdate()
    {
        $ticket = TicketFactory::new()->create();
        $data = [
            'usuario' => 'test_name_update',
            'estatus' => 'cerrado',
        ];
        $response = $this->put("/tickets/{$ticket->id}", $data);
        $response->assertResponseOk();
        $response->seeJsonStructure([
            'id',
            'usuario',
            'estatus',
            'created_at',
            'updated_at',
        ]);
    }

    public function testDestroy()
    {
        $ticket = TicketFactory::new()->create();
        $response = $this->delete("/tickets/{$ticket->id}");
        $response->assertResponseOk();
        $response->seeJson([
            'message' => 'Ticket eliminado',
        ]);
    }

    
}