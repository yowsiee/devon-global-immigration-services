<?php

class Home extends Controller {

    public function index() {
        $data = [
            'title' => 'Home - Devon Global Immigration Services | Canadian Immigration Consultants',
            'seo' => [
                'title' => 'Devon Global Immigration Services | Licensed Canadian Immigration Consultants Toronto',
                'description' => 'Licensed immigration consultants in Toronto offering study permits, work permits, Express Entry, PR applications, family sponsorship, and Canadian citizenship. ICCRC registered consultants. Free consultation available. Call 347-324-7220.',
                'keywords' => 'Canadian immigration, immigration consultant Toronto, study permit Canada, work permit Canada, Express Entry, permanent residence Canada, family sponsorship, Canadian citizenship, PR card renewal, business immigration, citizenship by investment, temporary visa services, ICCRC registered, licensed immigration consultants, Toronto immigration services, Devon Global Immigration Services, DGIS',
                'url' => Base_URL,
                'image' => Base_URL . '/images/og-image.jpg'
            ]
        ];
        $this->view("home", $data);
    }
}
