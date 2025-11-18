<?php

class Canada extends Controller {

    public function index() {
        $data = [
            'title' => 'Live, Work, Study in Canada - Devon Global Immigration Services',
            'seo' => [
                'title' => 'Live, Work, Study in Canada | Immigration Services',
                'description' => 'Expert immigration services for Canada. Get help with study permits, work permits, permanent residency, and Express Entry programs.',
                'keywords' => 'Canada immigration, study permit, work permit, permanent residency, Express Entry, Canada visa',
                'url' => Base_URL . '/canada'
            ]
        ];
        $this->view("canada", $data);
    }
}

