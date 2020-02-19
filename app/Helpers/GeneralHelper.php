<?php

	namespace App\Helpers;

	use Illuminate\Support\Facades\DB;

	class GeneralHelper {
		
		function get_category_list()
		{
			return App\Models\Category::all();
		}

	}



 