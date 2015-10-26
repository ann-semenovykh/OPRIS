<?php

	class Kinoteatr extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('kinoteatr');
			$this->template = $this->load_lib('template');
			//Äîáàâèòü çàãğóçêó ñåññèè
			
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			
			$data = array(
				'title' => 'Êèíîòåàòğ',
				'page_name' => 'Ãëàâíàÿ',
			);
			$this->template->init('default',$blocks,$data);
			
		}
		
		public function index()
		{
			$this->template->set_view('kinoteatr_index');
			$this->template->render();
		}
		
		
	}