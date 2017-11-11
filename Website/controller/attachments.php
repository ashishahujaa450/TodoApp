<?php 
	class Loader {
		private $path;
		private $render;

		public function __construct() {
			$this->path = preg_match('/index/',basename($_SERVER['SCRIPT_NAME'])) ? "" : "../";
		}

		public function head_load() {
			$this->render = '
				<meta charset="utf-8">
		        <meta http-equiv="x-ua-compatible" content="ie=edge">
		        <meta name="description" content="A reminder list management">
		        <meta name="viewport" content="width=device-width, initial-scale=1">

		        <link rel="manifest" href="site.webmanifest">
		        <!-- Place favicon.ico in the root directory -->
				
				<!-- external css libs -->
		        <link rel="stylesheet" href="'. $this->path .'public/css/normalize.css">
		        <link rel="stylesheet" href="'. $this->path .'public/css/bootstrap.css">
		        <link rel="stylesheet" href="'. $this->path .'public/css/font-awesome/css/font-awesome.css">
				
				<!-- custom styles -->
		        <link rel="stylesheet" href="'. $this->path .'public/css/main.css">

		        <!-- external js libs -->
		        <script src="'. $this->path .'public/js/jquery.js"></script>
			';

			echo $this->render;
		}

		public function body_load() {
			$this->render = '
			  <!-- external js libs -->
	          <script src="'. $this->path .'public/js/bootstrap.js"></script>

	          <!-- custom js -->
	          <script src="'. $this->path .'public/js/main.js" async="true"></script>
	       ';

	       echo $this->render;
		}
	}
?>