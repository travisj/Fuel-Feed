<?php
namespace Feed;

class Rss {

	public function output($data)
	{
		$rss = '<rss version="2.0">';
		$rss .= '<channel>';
		foreach ($data as $key => $value) {
			if ($key !== 'items') {
				$rss .= '<' . $key . '>' . $value . '</' . $key . '>';
			}
		}

		foreach ($data['items'] as $item) {
			$rss .= '<item>';
			foreach ($item as $key => $value) {
				$rss .= '<' . $key . '>' . $value . '</' . $key . '>';
			}
			$rss .= '</item>';
		}

		$rss .= '</channel>';
		return $rss;
	}
}
