<?php

class About extends Controller {

    public function index() {
        $data = [
            'title' => 'About Us - Devon Global Immigration Services | Licensed Immigration Consultants',
            'seo' => [
                'title' => 'About Us - Devon Global Immigration Services | Licensed Immigration Consultants Toronto',
                'description' => 'Learn about Devon Global Immigration Services, licensed immigration consultants in Toronto. Expert guidance for Canadian and US immigration with years of experience and proven success. ICCRC registered consultants serving clients across Canada.',
                'keywords' => 'about us, immigration consultants Toronto, licensed immigration consultants, ICCRC registered, Canadian immigration services, immigration experts, Toronto immigration, Devon Global Immigration Services, DGIS, immigration consultancy firm, Canadian immigration consultants, US immigration services',
                'url' => Base_URL . '/about',
                'image' => Base_URL . '/images/og-image.jpg'
            ]
        ];
        $this->view("about", $data);
    }
}
