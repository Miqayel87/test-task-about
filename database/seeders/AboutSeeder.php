<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutInfo;
use App\Models\AboutSubInfo;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutInfos = [
            [
                'title' => 'Financial Industry',
                'content' => 'At IT Dates GmbH, we excel in providing state-of-the-art IT services specifically crafted for the financial sector’s dynamic needs. Our team’s extensive experience and profound insight into both technological and financial domains enable us to empower banks, financial services firms, and fintech innovators to enhance their operational capabilities and foster innovation. '
            ],
            [
                'title' => 'Our Vision',
                'content' => 'Our vision is to seamlessly integrate technology with financial services, delivering secure, robust, and scalable IT solutions that boost your business’s efficiency and growth potential. We are dedicated to assisting our clients in mastering the complexities of the financial industry with unparalleled expertise and reliability. '
            ],
            [
                'title' => 'Our Expertise',
                'content' => 'We provide a wide array of specialized IT services designed to meet the diverse needs of the financial industry: '
            ],
            [
                'title' => 'Why Partner with Us?',
                'content' => null
            ],
            [
                'title' => 'Connect with Us ',
                'content' => 'Explore how IT Dates GmbH can elevate your financial services with our top-tier IT solutions. Reach out today to discover more about our offerings or to arrange a detailed consultation. 
                Partner with us and step confidently into the future of finance, equipped with our innovative and secure IT solutions.'
            ],
        ];

        foreach($aboutInfos as $aboutInfo){
            AboutInfo::create($aboutInfo);
        }

        $aboutSubInfos = [
            [
                'title' => 'Bespoke Software Development',
                'content' => 'Tailoring solutions to your specific requirements, we build custom software ranging from sophisticated transaction processing systems to comprehensive financial analytics tools',
                'about_info_id' => 3
            ],
            [
                'title' => 'Advanced Cybersecurity Measures',
                'content' => 'We prioritize your data’s security. Our comprehensive cybersecurity services ensure that your operations are shielded against all digital threats. ',
                'about_info_id' => 3
            ],
            [
                'title' => 'Innovative Cloud Computing',
                'content' => 'Optimize flexibility, scalability, and cost efficiency with our cutting-edge cloud solutions that adjust as your business needs evolve. 
                ',
                'about_info_id' => 3
            ],
            [
                'title' => 'Regulatory Compliance and Risk Management',
                'content' => 'Stay ahead of regulatory challenges with our risk management frameworks and compliance strategies that reduce exposure and ensure compliance with global standards. 
                ',
                'about_info_id' => 3
            ],
            [
                'title' => 'Enhanced Data Analytics and AI',
                'content' => 'Leverage cutting-edge data analytics and artificial intelligence technologies to turn complex data into strategic insights, improving decision-making processes and operational efficiencies. 
                ',
                'about_info_id' => 3
            ],
            [
                'title' => 'Focused Financial Sector Expertise',
                'content' => 'Our specialists are deeply entrenched in financial technologies, offering solutions that are both innovative and in strict alignment with financial regulations. ',
                'about_info_id' => 4
            ],
            [
                'title' => 'Customized Service Offerings',
                'content' => 'Recognizing the uniqueness of each client, we customize our services to meet your precise business goals and challenges.',
                'about_info_id' => 4
            ],
            [
                'title' => 'Unwavering Commitment to Security',
                'content' => 'We maintain rigorous security protocols, ensuring that every solution we provide is secure from the ground up. 
                ',
                'about_info_id' => 4
            ],
        ];

        foreach($aboutSubInfos as $aboutSubInfo){
            AboutSubInfo::create($aboutSubInfo);
        }

    }
}
