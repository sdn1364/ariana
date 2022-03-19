<?php

namespace Database\Seeders;

use App\Models\services\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'en' => [
                    'title' => 'Engineering',
                    'content' => 'Constructability is at the heart of our engineering processes because we know what we’re designing for your needs. With construction-focused engineering, we create solutions for our clients that seamlessly transition from blueprints to real, completed projects. Taking constructability under consideration at every step ensures our clients have the high quality and cost-effective designs they expect. As part of one of the largest construction and engineering firms in Iran, our engineers understand the crucial role that contractors have in the overall development and delivery of every project from start to finish. It’s what separates Tunnel Sadd Ariana’s engineers and designers from the pack, and provides our clients an advantage that better controls budget, quality, and cost throughout a project’s lifecycle. The Engineering department systematically collates and analyses various data and feedback, and incorporates them into engineering experience, methodologies, and lessons learned. Tunnel Sadd Ariana’s Engineering Department has a comprehensive database of project activities, methods, and knowledge. The department complies with the latest global standards and uses internationally-recognized software as well as in-house developed packages.'
                ],
                'fa' => [
                    'title' => 'مهندسی',
                    'content' => 'ساختار پذیری در قلب فرآیندهای مهندسی ما است زیرا ما می دانیم که برای نیاز شما چه چیزی را طراحی می کنیم. با مهندسی متمرکز بر ساخت، ما راه حل هایی برای مشتریان خود ایجاد می کنیم که به طور یکپارچه از طرح ها به پروژه های واقعی و کامل منتقل می شوند. در نظر گرفتن ساخت پذیری در هر مرحله، مشتریان ما طراحی با کیفیت بالا و مقرون به صرفه خواهند داشت. به عنوان بخشی از یکی از بزرگترین شرکتهای ساختمانی و مهندسی در ایران، مهندسان ما نقش مهمی را که پیمانکاران در توسعه و تحویل کلی هر پروژه دارند از ابتدا تا انتها درک می کنند. این همان چیزی است که مهندسان و طراحان تونل سد آریانا را از سایرین جدا می کند و به مشتریان ما مزیتی می دهد که بودجه ، کیفیت و هزینه را در طول چرخه عمر یک پروژه کنترل می کند. بخش مهندسی به طور سیستماتیک داده ها و بازخوردهای مختلف را جمع آوری و تحلیل می کند و آنها را در تجربه مهندسی ، روش ها و درس های آموخته شده قرار می دهد. دپارتمان مهندسی تونل سد آریانا دارای یک بانک اطلاعاتی جامع از فعالیت ها، روش ها و دانش پروژه است. این بخش با آخرین استانداردهای جهانی مطابقت دارد و از نرم افزارهای معتبر بین المللی و همچنین بسته های توسعه یافته داخلی استفاده می کند.'
                ]
            ],
            [
                'en' => [
                    'title' => 'Procurement',
                    'content' => 'Tunnel Sadd Ariana ’s supply chain organization provides our customers with global procurement and contracts services that are unsurpassed in the industry. With annual expenditures exceeding millions of dollars, we support large, complex projects in remote locations of the world using suppliers from different countries. We have the right processes, automation tools, market data, volume, and skilled professionals to meet our commitment towards our customers: the responsible purchase and safe delivery of quality goods and services, from reliable and diverse suppliers and subcontractors, where they are needed, on time, and at the lowest total cost of ownership. The department consists of specialized sections for the procurement of mechanical and process equipment; instrumentation, structural, architectural, and bulk materials. It is responsible for other supporting and logistic activities that are necessary for correct procurement, such as sourcing, planning, inspection, and delivery.'
                ],
                'fa' => [
                    'title' => 'تدارکات',
                    'content' => 'تونل سد آریانا زنجیره تأمین خدمات تدارکاتی و قراردادی جهانی را برای مشتریان ما فراهم می کند که در صنعت بی نظیر هستند. با هزینه های سالانه بیش از میلیون ها دلار، ما از پروژه های بزرگ و پیچیده در مکان های دور دنیا با استفاده از تأمین کنندگان داخلی و کشورهای مختلف پشتیبانی می کنیم. ما فرایندها، ابزارهای اتوماسیون، داده های بازار، حجم و متخصصان ماهر مناسب را برای تعهد خود در قبال مشتریان خود داریم، شرکت تونل سد آریانا برای نیازمندی های کارفرمایان خرید مسئولانه، تحویل ایمن کالا و خدمات با کیفیت از تأمین کنندگان و پیمانکاران فرعی معتبر و متنوع را به موقع و با کمترین هزینه کل ارائه می دهد. این بخش از بخشهای مهم برای تهیه تجهیزات مکانیکی و فرآیندی ;ابزار دقیق ،سازه ای ،معماری و مواد فله ایی تشکیل شده است و سایر فعالیتهای پشتیبانی و لجستیکی اعم از تهیه منابع ، برنامه ریزی، بازرسی و تحویل مناسب که برای تأمین و تدارک بدون نقص لازم است.'
                ]
            ],
            [
                'en' => [
                    'title' => 'Construction',
                    'content' => 'We are proud to be working with clients on projects of all sizes, complexities, and sectors spanning across the Middle East and Central Asia. With projects, people, and offices in several countries, Tunnel Sadd Ariana has unmatched reach and expertise. Construction regulations and labor laws around the world vary greatly and we have worked successfully under some of the toughest circumstances. We have a proven record of working smoothly with government agencies and labor organizations. Major construction projects are complex undertakings, often involving several subcontractors and suppliers, thousands of workers, and millions of dollars in material, equipment, and services. Orchestrating such operations demands first-rate construction management, something Tunnel Sadd Ariana has provided for decades on projects big and small around Asia.'
                ],
                'fa' => [
                    'title' => 'ساخت و ساز',
                    'content' => 'ما مفتخریم که با مشتریان در پروژه هایی با هر اندازه، پیچیدگی و حوزه های تخصصی مختلف در سراسر خاورمیانه و آسیای مرکزی کار می کنیم. تونل سد آریانا به واسطه ی پروژه ها، افراد و دفاتر در چندین کشور از توانایی و تخصص بی نظیری برخوردار می باشد. مقررات ساخت و ساز و قوانین کار در سراسر جهان بسیار متفاوت است و ما تحت سخت ترین شرایط با موفقیت کار کرده ایم. سابقه اثبات همکاری پیوسته با نمایندگان دولتی و سازمان های اجرایی را داریم. اکثر ابر پروژه های ساخت و ساز دارای فعالیت های پیچیده ای هستند که غالباً شامل چندین پیمانکار فرعی و تامین کننده خدمات، هزاران کارگر و میلیون ها دلار مواد و مصالح و تجهیزات می شوند. سازماندهی چنین عملیاتی، مدیریت درجه یک ساخت و ساز را می طلبد کاری که تونل سد آریانا برای دهه ها در پروژه های بزرگ و کوچک در سراسر آسیا ارائه داده است.'
                ]
            ],
            [
                'en' => [
                    'title' => 'EPC',
                    'content' => 'In the last two decades, implementation of projects in the form of EPC has been considered seriously in various fields. Tunnel Sadd Ariana has surely been one of the pioneers in using EPC in multidisciplinary executive parts of Iran and in Middle Asia, with the benefit of capabilities such as: having different engineering department to deal with works, Possessing subsidiary companies with different specialties, Having partner companies with expertise in procuring and constructing in different fields of work, Joint ventures with well-known foreign companies, high-tech and optimal facilities, and the expertise in implementing projects in the EPC form. The company could play an effective role in encouraging and performing projects in EPC form, as providing services to its clients.'
                ],
                'fa' => [
                    'title' => 'EPC',
                    'content' => 'در دو دهه گذشته، اجرای پروژه ها در قالب EPC به طور جدی در زمینه های مختلف مورد توجه قرار گرفته است. تونل سد آریانا، که مطمئناً یکی از پیشگامان استفاده از EPC در بخشهای اجرایی چند رشته ای ایران و آسیای میانه بوده است، با بهره گیری از قابلیت هایی از قبیل: بخشهای مختلف مهندسی برای اداره کار، دارا بودن شرکتهای تابعه با تخصصهای مختلف، داشتن شرکتهای همکار با تخصص بالا در زمینه تهیه و ساخت در زمینه های مختلف کاری، سرمایه گذاری مشترک بین شرکتهای معروف خارجی، با فناوری بالا و امکانات بهینه، علاوه بر این در اجرای پروژه ها به صورت EPC تخصص دارند. این شرکت می تواند نقش مهمی در تشویق و اجرای پروژه هایی به صورت EPC، به عنوان ارائه خدمات به مشتریان خود داشته باشد.'
                ]
            ],
            [
                'en' => [
                    'title' => 'Finance',
                    'content' => '

                                <h3>Finance</h3>
                                <p>We deliver creative and cost-efficient solutions that are responsive to each project’s specific site conditions. We utilize value engineering and constructability studies, and utilize our depth of expertise to offer constructible solutions that optimize budget and schedule. We specialize in cost and financial modelling, financial structuring, hedging, contract negotiation and transaction execution. We have created financial balance on projects involving all sources of debt, including commercial bank debt. Tunnel Sadd Ariana has strong, established relationships with all major banks and financial institutions operating in Public-Private Partnership (PPP). We also work with government departments and leading financial, legal and technical advisors.</p>
                                <p>Our services include:</p>
                                <ul >
                                <li>Finance (equity investment)</li>
                                <li>Assembling and managing consortia of service providers</li>
                                <li>Asset management and operation</li>
                                </ul>

                    '
                ],
                'fa' => [
                    'title' => 'سرمایه گذاری',
                    'content' => '
                    <p>ما راه حل های خلاقانه و مقرون به صرفه ای را ارائه می دهیم که پاسخگوی شرایط خاص کارگاه هر پروژه می باشد. ما از مهندسی ارزش و مطالعات ساخت استفاده می کنیم و عمق تخصص خود را برای ارائه راه حل های قابل استفاده برای بهینه سازی بودجه و برنامه ساخت پروژه ها به کار می بندیم. ما در مدل سازی های مالی و زهینه ای، ساختارسازی مالی، پوشش ریسک های اقتصادی، مذاکرات قراردادی و اجرای معاملات مالی تخصص داریم. ما در پروژه ها توازن مالی را بوجود آورده ایم که شامل تمامی منابع بدهی، از جمله بدهی های تجاری بانکی می باشد. شرکت تونل سد آریانا با تمام بانک ها و موسسات مالی بزرگ فعال در حوزه مشارکت عمومی و خصوصی (PPP) روابط مستحکم و مستقیمی دارد. ما همچنین با ادارات دولتی و مشاوران برجسته مالی، حقوقی و فنی کار می کنیم.</p>
                    <p>خدمات ما شامل موارد زیر است:</p>
                    <ul>
                                <li>امور مالی (سرمایه گذاری سهام)</li>
                                <li>جمع آوری و مدیریت کنسرسیوم های ارائه دهندگان خدمات</li>
                                <li>مدیریت دارائی ها و بهره برداری از آنها</li>
                    </ul>
                    '
                ]
            ],
            [
                'en' => [
                    'title' => 'Commissioning',
                    'content' => 'Commissioning is the last visible step of a project’s execution process. It moves the project from the “end of construction” to the “commercial operation” status. Initiated right from the beginning of the design phase, the Commissioning aims to validate the construction integrity and confirms that the facilities are delivered in a safe, reliable and operational condition for the utmost customer satisfaction. Tunnel Sadd Ariana leads the Group’s companies and partners to execute the Commissioning and Start-Up services in a planned, controlled, and quantified manner with the safety of their employees, customers, suppliers and subcontractors as a primary objective. High quality of the cost management and human resource management throughout the entire lifecycle of each project bring resources and equipment together which can help the company to achieve goals that are important and vital from the start to the end of the projects.'
                ],
                'fa' => [
                    'title' => 'راه اندازی',
                    'content' => 'راه اندازی آخرین مرحله قابل مشاهده در روند اجرای پروژه است. این پروژه را از "پایان ساخت" به وضعیت "عملیات تجاری" منتقل می کند. فعالیت و راه اندازی درست از ابتدای مرحله طراحی، با هدف تأیید یکپارچگی ساخت و ساز و تأیید تأسیسات در شرایط ایمن، قابل اطمینان وعملیاتی برای رضایت کامل مشتری انجام می شود. تونل سد آریانا شرکت ها و شرکای همکار را به سمت اجرای برنامه های راه اندازی و راه اندازی اولیه با روشی برنامه ریزی شده ، کنترل شده و شیوه ایی تعیین شده همراه با ایمنی کارکنان، مشتریان، تأمین کنندگان و پیمانکاران جزء خود به عنوان هدف اصلی هدایت می کند. کیفیت سطح بالای مدیریت هزینه و منابع انسانی در چرخه حیات پروژه ها، منابع انسانی و تجهیزات را گرد هم می آورد که این امر به شرکت کمک می کند تا به اهداف مهم و ضروری از ابتدا تا انتهای پروژه دست یابد.'
                ]
            ],
            [
                'en' => [
                    'title' => 'Maintenance',
                    'content' => 'Many of our customers operate aging assets in mature markets. Our integrated approach to Maintenance, reduces risk and costs and removes uncertainty from your projects and operations. We help our customers to deliver greater volumes for longer and operate in cleaner ways than ever before, achieving potential project cost savings. We work as one team with our customers and our supply chain to provide clear accountability. And our single delivery contract reduces interface challenges. We help our customers to establish the right asset management systems, identify ways to save money and provide higher run time and fewer failures. This helps operators to know what technical performance, operational expenditure and availability to expect long before the asset is operational.'
                ],
                'fa' => [
                    'title' => 'نگهداری',
                    'content' => 'بسیاری از مشتریان ما دارایی های فرسوده را در بازارهای منقضی شده استفاده می کنند. روش یکپارچه ما در زمینه تعمیر و نگهداری ریسک و هزینه ها را کاهش می دهد و عدم اطمینان را از پروژه ها و عملیات شما برطرف می کند. ما با دستیابی به صرفه جویی در هزینه های بالقوه پروژه، به مشتریان خود کمک می کنیم تا برای مدت طولانی تری حجم بیشتری را تحویل داده و به روش های بهتری نسبت به گذشته کار کنند. ما به عنوان یک تیم با مشتریان و زنجیره تامین خود کار می کنیم تا پاسخگویی واضحی ارائه دهیم. ما به مشتریان خود کمک می کنیم تا سیستم های مدیریت دارایی صحیح را ایجاد کنند ، روش های صرفه جویی در هزینه را شناسایی کنند و زمان اجرای بالاتر و خرابی های کمتری را ارائه دهند. این به بهره برداران کمک می کند تا بدانند چه عملکرد فنی، هزینه عملیاتی و در دسترس بودن قبل از بهره برداری از دارایی انتظار می رود.'
                ]
            ],
        ];

        foreach ($datas as $data) {
            Service::create([
                'en' => [
                    'title' => $data['en']['title'],
                    'content' => $data['en']['content'],
                ],
                'fa' => [
                    'title' => $data['fa']['title'],
                    'content' => $data['fa']['content'],
                ],
            ]);
        }

    }
}
