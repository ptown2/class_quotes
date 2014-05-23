<?php

class Quotes {
	public $current_category = 'random';
	public $quote = array();

	var $new_id;

	public function add_quote($message = null, $author = null) {
		if (empty($message) or empty($author))
			return 'Failed Quote';

		$tmp_quote = new stdClass();

		$tmp_quote->id = $this->new_id + 1;
		$tmp_quote->message = $message;
		$tmp_quote->author = $author;
		$tmp_quote->category = $this->current_category;

		$this->quote[] = $tmp_quote;
		$this->new_id++;

		return $tmp_quote;
	}

	public function set_category($category = 'random') {
		$this->current_category = $category;
	}

	public function select_quote() {
		return $this->quote[ array_rand($this->quote) ];
	}

	public function count_quotes() {
		return count($this->quote);
	}
}