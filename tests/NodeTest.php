<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NodeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
        Note::create(['note'=>'my primera nota']);
        Note::create(['note'=>'my segunda nota']);

        $this->visit('notes')
        	->see('my primera nota')
        	->see('my segunda nota');
        
    }
}
