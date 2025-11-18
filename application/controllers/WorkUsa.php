<?php

class WorkUsa extends Controller {

    public function index() {
        $data = [
            'title' => 'Work in USA - Devon Global Immigration Services',
            'seo' => [
                'title' => 'Work in USA | US Work Visa Services',
                'description' => 'Navigate US work visa requirements with expert guidance. H-1B, L-1, TN visas and work authorization services.',
                'keywords' => 'US work visa, H-1B visa, L-1 visa, TN visa, work authorization USA, work permit USA',
                'url' => Base_URL . '/work-usa'
            ]
        ];
        $this->view("work-usa", $data);
    }
}

