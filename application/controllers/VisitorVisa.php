<?php

class VisitorVisa extends Controller {

    public function index() {
        $data = [
            'title' => 'Temporary Visitor Visa - Devon Global Immigration Services',
            'seo' => [
                'title' => 'Temporary Visitor Visa Services | Tourist & Family Visit Visas',
                'description' => 'Apply for temporary visitor visas for tourism, family visits, or business travel. Expert assistance with visa applications.',
                'keywords' => 'visitor visa, tourist visa, family visit visa, business travel visa, temporary visa',
                'url' => Base_URL . '/visitor-visa'
            ]
        ];
        $this->view("visitor-visa", $data);
    }
}

