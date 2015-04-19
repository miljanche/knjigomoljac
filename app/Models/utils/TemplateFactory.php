<?php namespace App\Models\utils;

use Illuminate\Database\Eloquent\Model;
use View;


class TemplateFactory extends Model {

	public function createIndexView(){
		$layout 					= View::make('frontend.master');
		$layout->head 				= View::make('frontend.head');
		$layout->header				= View::make('frontend.header');
		$layout->content 			= View::make('frontend.content');
		$layout->footer				= View::make('frontend.footer');

		$layout->header->menu 				= View::make('frontend.partials.menu');
		$layout->content->searchbox			= View::make('frontend.partials.search-box');
		$layout->content->maincontent		= View::make('frontend.base.index');

		return $layout;
	}

}
