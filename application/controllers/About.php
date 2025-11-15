<?php 

class About extends Lightweight {

	public function index(){
		$data = [
			'title' => 'About - Professional IT Services',
			'page' => 'about',
			'seo' => [
				'title' => 'About Us - Dev\'s Domain | Expert IT Solutions & Web Development Team',
				'description' => 'Learn about Dev\'s Domain - a team of expert developers and IT consultants specializing in web development, mobile apps, API integrations, and business automation. 10+ years of excellence.',
				'keywords' => 'about Dev\'s Domain, IT consultants, web developers, software development team, Trinidad and Tobago IT services',
				'url' => Base_URL . '/about',
				'image' => Base_URL . '/images/og-about.jpg'
			],
			'breadcrumbs' => [
				['name' => 'Home', 'url' => Base_URL],
				['name' => 'About Us', 'url' => Base_URL . '/about']
			],
			'skills' => [
				'PHP', 'JavaScript', 'Python', 'MySQL', 'HTML/CSS', 
				'React', 'Node.js', 'Cloud Services', 'DevOps', 'API Development'
			],
			'experience' => [
				[
					'year' => '2020 - Present',
					'role' => 'Senior IT Consultant',
					'company' => 'Freelance',
					'description' => 'Providing comprehensive IT solutions to businesses'
				],
				[
					'year' => '2018 - 2020',
					'role' => 'Full Stack Developer',
					'company' => 'Tech Solutions Inc.',
					'description' => 'Developed web applications and managed cloud infrastructure'
				]
			]
		];
        $this->view("about", $data);
	}
}

?>

