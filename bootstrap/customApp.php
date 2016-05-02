<?php namespace Bootstrap;

use Illuminate\Foundation\Application;

class customApp extends Application{

	public function publicPath(){

	return $this->basePath.DIRECTORY_SEPARATOR;
}

}