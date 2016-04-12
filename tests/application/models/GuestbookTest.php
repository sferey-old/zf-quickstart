<?php
require APPLICATION_PATH . '/models/Guestbook.php';

class GuestbookTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // Reset database state
        
    }

    public function testFetchEntries()
    {
        // Instantiate the Guestbook mapper
        $guestbook = new Application_Model_GuestbookMapper();
        
        // Get all entries from the database
        $entries = $guestbook->fetchAll();

        // Test that there are 2 entries in the guestbook
        $this->assertSame(2, count($entries));
    }
}