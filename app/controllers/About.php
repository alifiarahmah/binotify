<?php

class About extends Controller
{
    public function index()
    {
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'Page page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
