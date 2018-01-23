<?php 
namespace App\Http\Controllers;

class HomeController extends Controller 
{
    public function index()
    {
        // TODO: get another blade Here
        // TODO: get React setup later
        // $view = 'welcome';
        $view = 'index';
        $viewModel = [
            'firstName' => 'Reinhardt',
            'dialogue' => 'Hello, and welcome',
        ];
        
        return view($view, $viewModel);
    }
}