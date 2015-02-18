<?php

/**
 * Our homepage. Show the most recently added quote.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct()
    {
	parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $quote = $this->quotes->get($id);
        $this->data['average'] = 
            ($quote->vote_count > 0) ? 
                ($quote->vote_total / $quote->vote_count) : 0;
        
	$this->data['pagebody'] = 'justone';    // this is the view we want shown
	$this->caboose->needed('jrating', 'hollywood');
        $this->data = array_merge($this->data, (array) $quote);
	$this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */