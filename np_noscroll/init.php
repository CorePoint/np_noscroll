<?php
class np_noscroll extends Plugin {

	private $host;

	function about() {
		return array(1.0,
			"swaps next/previous article with and without scroll keybindings",
			"CorePoint");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_HOTKEY_MAP, $this);
	}

	function hook_hotkey_map($hotkeys) {

		$hotkeys["n"] = "next_article_noscroll";
		$hotkeys["k"] = "prev_article_noscroll";

		$hotkeys["^(40)|Ctrl-down"] = "next_article";
		$hotkeys["^(38)|Ctrl-up"] = "prev_article";

		return $hotkeys;
	}

	function api_version() {
		return 2;
	}

}
