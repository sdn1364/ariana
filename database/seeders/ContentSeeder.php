<?php

namespace Database\Seeders;

use App\Models\contents\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
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
                    'title' => 'history',
                    'text' => 'company was established in 2007 with the cooperation of some accomplished managers based on their valuable experience acquired in multiple large-scale construction projects. This company obtained the highest consultation and construction ranking from the Planning and Budget Organization of Iran. These certificates include grade 1 as contractor in water, road and transportation and also grade 2 in building and structures. Moreover, the company holds grade 2 of consultation services beside designing and construction of roads. Continuing its rapid progress throughout the years after establishment, this company became a successful and pioneer contractor with various branches. This achievement is due to the focus on providing outstanding services, professional commitment, unrelenting endeavor, continuous quality enhancement, customer-oriented policies, reducing costs and construction time, applying modern methods and technologies, and employing experienced personnel.'
                ],
                'fa' => [
                    'title' => 'تاریخچه',
                    'text' => 'در سال 1386 به همت تعدادی از مدیران با تجربه، هم فکر و با تکیه بر تجارب موفق به دست آمده در مدیریت چندین پروژه بزرگ عمرانی تأسیس گردید. این شرکت در مدت زمان کوتاهی بالاترین رتبه های صلاحیت حرفه ای و خدمات مهندسی را از سازمان برنامه و بودجه کشور اخذ نمود؛ به گونه ای که دارای پایه یک پیمانکاری در رشته های آب، راه و ترابری و پایه دو در زمینه ساختمان و ابنیه می باشد. علاوه بر این، صلاحیت پایه دو خدمات مشاوره و همچنین طرح و ساخت در رشته راهسازی را دارا می باشد. این شرکت در ادامه پیشرفت شتابان خود در طول چند سال پس از تأسیس، توانست به یک شرکت موفق و پیشرو پیمانکاری با چندین شرکت وابسته تبدیل شود. این امر مرهون تمرکز بر ارائه خدمات با کیفیت و تعهد کاری، تلاش بی وقفه، ارتقاء مستمر سطح کیفی، مشتری مداری، کاهش هزینه ها و زمان اجرای پروژه ها، استفاده از روشهای نوین، متخصصان مجرب و امکانات کارآمد می باشد.'
                ],
                'ru' => [
                    'title' => 'تاریخچه',
                    'text' => 'در سال 1386 به همت تعدادی از مدیران با تجربه، هم فکر و با تکیه بر تجارب موفق به دست آمده در مدیریت چندین پروژه بزرگ عمرانی تأسیس گردید. این شرکت در مدت زمان کوتاهی بالاترین رتبه های صلاحیت حرفه ای و خدمات مهندسی را از سازمان برنامه و بودجه کشور اخذ نمود؛ به گونه ای که دارای پایه یک پیمانکاری در رشته های آب، راه و ترابری و پایه دو در زمینه ساختمان و ابنیه می باشد. علاوه بر این، صلاحیت پایه دو خدمات مشاوره و همچنین طرح و ساخت در رشته راهسازی را دارا می باشد. این شرکت در ادامه پیشرفت شتابان خود در طول چند سال پس از تأسیس، توانست به یک شرکت موفق و پیشرو پیمانکاری با چندین شرکت وابسته تبدیل شود. این امر مرهون تمرکز بر ارائه خدمات با کیفیت و تعهد کاری، تلاش بی وقفه، ارتقاء مستمر سطح کیفی، مشتری مداری، کاهش هزینه ها و زمان اجرای پروژه ها، استفاده از روشهای نوین، متخصصان مجرب و امکانات کارآمد می باشد.'
                ],
                'page' => 'historyMain'
            ],
            [
                'en' => [
                    'title' => 'Research and Development',
                    'text' => '
                    <p>Tunnel Sadd Ariana’s Research and Development Unit, with the aim of solving the future challenges of technical and engineering services, intends to take an effective step in the field of technical and engineering services and its development by using the potentials of knowledge and technology companies, researches and dissertations of academics and students of different levels.</p>
                    '
                ],
                'fa' => [
                    'title' => 'تحقیق و توسعه',
                    'text' => '
                    <p>تونل سد آریانا واحد تحقیق و توسعه تونل سد آریانا با هدف رفع چالش‌های آینده خدمات فنی و مهندسی قصد دارد با استفاده از پتانسیل‌های شرکت‌های دانش‌بنیان و فناور، تحقیقات و پایان‌نامه‌های دانشگاهیان و دانشجویان مقاطع مختلف گامی مؤثر در حوزه خدمات فنی و مهندسی و توسعه آن بردارد.</p>
                    '
                ],
                'ru' => [
                    'title' => 'تحقیق و توسعه',
                    'text' => '
                    <p>تونل سد آریانا واحد تحقیق و توسعه تونل سد آریانا با هدف رفع چالش‌های آینده خدمات فنی و مهندسی قصد دارد با استفاده از پتانسیل‌های شرکت‌های دانش‌بنیان و فناور، تحقیقات و پایان‌نامه‌های دانشگاهیان و دانشجویان مقاطع مختلف گامی مؤثر در حوزه خدمات فنی و مهندسی و توسعه آن بردارد.</p>
                    '
                ],
                'page' => 'innovation'
            ],
            [
                'en' => [
                    'title' => 'History',
                    'text' => "Tunnel Sadd Ariana company was established in 2007 with the cooperation of some accomplished managers based on their valuable experience acquired in multiple large-scale construction projects. This company obtained the highest consultation and construction ranking from the Planning and Budget Organization of Iran. These certificates include grade 1 as contractor in water, road and transportation and also grade 2 in building and structures. Moreover, the company holds grade 2 of consultation services beside designing and construction of roads. Continuing its rapid progress throughout the years after establishment, this company became a successful and pioneer contractor with various branches. This achievement is due to the focus on providing outstanding services, professional commitment, unrelenting endeavor, continuous quality enhancement, customer-oriented policies, reducing costs and construction time, applying modern methods and technologies, and employing experienced personnel. In order to efficiently supervise all the foreign and domestic projects as well as its subsidiaries, Ariana group's headquarters is located in Tehran, Iran. Ariana group consists of several subsidiaries such as Behan Sadd consulting engineers company which provides engineering and consulting services for dam and power plant projects, Samanian and also Tajikkan consulting engineers companies which are specialized in providing design, consultation and engineering services, and Sokhtmoni Tunnel company which offers services in urban projects in the Republic of Tajikistan. While operating independently, these companies have an integrated management system."
                ],
                'fa' => [
                    'title' => 'تاریخچه',
                    'text' => "تونل سد آریانا در سال 1386 به همت تعدادی از مدیران با تجربه، هم فکر و با تکیه بر تجارب موفق به دست آمده در مدیریت چندین پروژه بزرگ عمرانی تأسیس گردید. این شرکت در مدت زمان کوتاهی بالاترین رتبه های صلاحیت حرفه ای و خدمات مهندسی را از سازمان برنامه و بودجه کشور اخذ نمود؛ به گونه ای که دارای پایه یک پیمانکاری در رشته های آب، راه و ترابری و پایه دو در زمینه ساختمان و ابنیه است. علاوه بر این، صلاحیت پایه دو خدمات مشاوره و همچنین طرح و ساخت در رشته راهسازی را دارا می باشد. این شرکت در ادامه پیشرفت شتابان خود در طول چند سال پس از تأسیس، توانست به یک شرکت موفق و پیشرو پیمانکاری با چندین شرکت وابسته تبدیل شود. این امر مرهون تمرکز بر ارائه خدمات با کیفیت و تعهد کاری، تلاش بی وقفه، ارتقاء مستمر سطح کیفی، مشتری مداری، کاهش هزینه ها و زمان اجرای پروژه ها، استفاده از روشهای نوین، متخصصان مجرب و امکانات کارآمد می باشد. دفتر مرکزی گروه آریانا با هدف مدیریت عالیه بر پروژه های داخلی و خارجی و نیز شرکتهای تابعه در تهران واقع شده است. مهندسین مشاور بهان سد با ارائه خدمات مهندسی و مشاوره در زمینه سد و نیروگاه، مهندسین مشاور سامانیان و تاجیکان در زمینه طراحی، مشاوره و خدمات مهندسی و شرکت ساختمان تونل ارائه دهنده خدمات پروژه های درون شهری در کشور تاجیکستان، شرکت های زیر مجموعه گروه آریانا می باشند. شرکت های مذکور در عین حال که به صورت مستقل عمل می نمایند، دارای مدیریت یکپارچه و منسجم هستند."
                ],
                'ru' => [
                    'title' => 'تاریخچه',
                    'text' => "تونل سد آریانا در سال 1386 به همت تعدادی از مدیران با تجربه، هم فکر و با تکیه بر تجارب موفق به دست آمده در مدیریت چندین پروژه بزرگ عمرانی تأسیس گردید. این شرکت در مدت زمان کوتاهی بالاترین رتبه های صلاحیت حرفه ای و خدمات مهندسی را از سازمان برنامه و بودجه کشور اخذ نمود؛ به گونه ای که دارای پایه یک پیمانکاری در رشته های آب، راه و ترابری و پایه دو در زمینه ساختمان و ابنیه است. علاوه بر این، صلاحیت پایه دو خدمات مشاوره و همچنین طرح و ساخت در رشته راهسازی را دارا می باشد. این شرکت در ادامه پیشرفت شتابان خود در طول چند سال پس از تأسیس، توانست به یک شرکت موفق و پیشرو پیمانکاری با چندین شرکت وابسته تبدیل شود. این امر مرهون تمرکز بر ارائه خدمات با کیفیت و تعهد کاری، تلاش بی وقفه، ارتقاء مستمر سطح کیفی، مشتری مداری، کاهش هزینه ها و زمان اجرای پروژه ها، استفاده از روشهای نوین، متخصصان مجرب و امکانات کارآمد می باشد. دفتر مرکزی گروه آریانا با هدف مدیریت عالیه بر پروژه های داخلی و خارجی و نیز شرکتهای تابعه در تهران واقع شده است. مهندسین مشاور بهان سد با ارائه خدمات مهندسی و مشاوره در زمینه سد و نیروگاه، مهندسین مشاور سامانیان و تاجیکان در زمینه طراحی، مشاوره و خدمات مهندسی و شرکت ساختمان تونل ارائه دهنده خدمات پروژه های درون شهری در کشور تاجیکستان، شرکت های زیر مجموعه گروه آریانا می باشند. شرکت های مذکور در عین حال که به صورت مستقل عمل می نمایند، دارای مدیریت یکپارچه و منسجم هستند."
                ],
                'page' => 'history'
            ],
            [
                'en' => [
                    'title' => '',
                    'text' => "Tunnel Sadd Ariana, as a large contracting and consulting company, has great domestic and international projects (in the Central Asian region), so the company's policy is based on attracting young talent in order to be more productive and long-term relationship for a better future. This company is proud to call itself one of the high-ranking and successful Iranian contractors in the Central Asian region and a top exporter of technical engineering services. Therefore, if you have the required qualifications as a young talent, send your resume to capable staff. Our experts after gathering information if you are qualified, will contact you."
                ],
                'fa' => [
                    'title' => '',
                    'text' => "شرکت تونل سد آریا به عنوان یک شرکت بزرگ پیمانکاری و مشاوره ، دارای پروژه های عظیم داخلی و بین المللی( در منطقه ای آسیای میانه) می باشد از این رو سیاست شرکت بر مبنای جذب استعداد های جوان به منظور بهروری بیشتر و طولانی مدت برای فردایی بهتر و روشن تر در جهت اهداف عالی شرکت می باشد این شرکت مفتخر است خود را به عنوان یکی از پیمانکاران رده بالا و موفق ایرانی در منطقه آسیای میانه و صادر کننده برتر خدمات فنی مهندسی می نامد. لذا از شما نیروهای جوان و توانمند در صورت داشتن صلاحیت های مورد نیاز رزومه خود را ارسال نمایید که کارشناسان شرکت بعد از جمع آوری اطلاعات در صورت صلاح دید با شما تماس بگیرند."
                ],
                'ru' => [
                    'title' => '',
                    'text' => "شرکت تونل سد آریا به عنوان یک شرکت بزرگ پیمانکاری و مشاوره ، دارای پروژه های عظیم داخلی و بین المللی( در منطقه ای آسیای میانه) می باشد از این رو سیاست شرکت بر مبنای جذب استعداد های جوان به منظور بهروری بیشتر و طولانی مدت برای فردایی بهتر و روشن تر در جهت اهداف عالی شرکت می باشد این شرکت مفتخر است خود را به عنوان یکی از پیمانکاران رده بالا و موفق ایرانی در منطقه آسیای میانه و صادر کننده برتر خدمات فنی مهندسی می نامد. لذا از شما نیروهای جوان و توانمند در صورت داشتن صلاحیت های مورد نیاز رزومه خود را ارسال نمایید که کارشناسان شرکت بعد از جمع آوری اطلاعات در صورت صلاح دید با شما تماس بگیرند."
                ],
                'page' => 'career'
            ],
            [
                'en' => [
                    'title' => '',
                    'text' => "Tunnel Sadd Ariana, as a large contracting and consulting company, has great domestic and international projects (in the Central Asian region), so the company's policy is based on attracting young talent in order to be more productive and long-term relationship for a better future. This company is proud to call itself one of the high-ranking and successful Iranian contractors in the Central Asian region and a top exporter of technical engineering services. Therefore, if you have the required qualifications as a young talent, send your resume to capable staff. Our experts after gathering information if you are qualified, will contact you."
                ],
                'fa' => [
                    'title' => '',
                    'text' => "شرکت تونل سد آریا به عنوان یک شرکت بزرگ پیمانکاری و مشاوره ، دارای پروژه های عظیم داخلی و بین المللی( در منطقه ای آسیای میانه) می باشد از این رو سیاست شرکت بر مبنای جذب استعداد های جوان به منظور بهروری بیشتر و طولانی مدت برای فردایی بهتر و روشن تر در جهت اهداف عالی شرکت می باشد این شرکت مفتخر است خود را به عنوان یکی از پیمانکاران رده بالا و موفق ایرانی در منطقه آسیای میانه و صادر کننده برتر خدمات فنی مهندسی می نامد. لذا از شما نیروهای جوان و توانمند در صورت داشتن صلاحیت های مورد نیاز رزومه خود را ارسال نمایید که کارشناسان شرکت بعد از جمع آوری اطلاعات در صورت صلاح دید با شما تماس بگیرند."
                ],
                'ru' => [
                    'title' => '',
                    'text' => "شرکت تونل سد آریا به عنوان یک شرکت بزرگ پیمانکاری و مشاوره ، دارای پروژه های عظیم داخلی و بین المللی( در منطقه ای آسیای میانه) می باشد از این رو سیاست شرکت بر مبنای جذب استعداد های جوان به منظور بهروری بیشتر و طولانی مدت برای فردایی بهتر و روشن تر در جهت اهداف عالی شرکت می باشد این شرکت مفتخر است خود را به عنوان یکی از پیمانکاران رده بالا و موفق ایرانی در منطقه آسیای میانه و صادر کننده برتر خدمات فنی مهندسی می نامد. لذا از شما نیروهای جوان و توانمند در صورت داشتن صلاحیت های مورد نیاز رزومه خود را ارسال نمایید که کارشناسان شرکت بعد از جمع آوری اطلاعات در صورت صلاح دید با شما تماس بگیرند."
                ],
                'page' => 'vendor'
            ],
            [
                'en' => [
                    'title' => '',
                    'text' => "Tunnel Sadd Ariana, as a large contracting and consulting company, has great domestic and international projects (in the Central Asian region), so the company's policy is based on attracting young talent in order to be more productive and long-term relationship for a better future. This company is proud to call itself one of the high-ranking and successful Iranian contractors in the Central Asian region and a top exporter of technical engineering services. Therefore, if you have the required qualifications as a young talent, send your resume to capable staff. Our experts after gathering information if you are qualified, will contact you."
                ],
                'fa' => [
                    'title' => '',
                    'text' => "شرکت تونل سد آریا به عنوان یک شرکت بزرگ پیمانکاری و مشاوره ، دارای پروژه های عظیم داخلی و بین المللی( در منطقه ای آسیای میانه) می باشد از این رو سیاست شرکت بر مبنای جذب استعداد های جوان به منظور بهروری بیشتر و طولانی مدت برای فردایی بهتر و روشن تر در جهت اهداف عالی شرکت می باشد این شرکت مفتخر است خود را به عنوان یکی از پیمانکاران رده بالا و موفق ایرانی در منطقه آسیای میانه و صادر کننده برتر خدمات فنی مهندسی می نامد. لذا از شما نیروهای جوان و توانمند در صورت داشتن صلاحیت های مورد نیاز رزومه خود را ارسال نمایید که کارشناسان شرکت بعد از جمع آوری اطلاعات در صورت صلاح دید با شما تماس بگیرند."
                ],
                'ru' => [
                    'title' => '',
                    'text' => "شرکت تونل سد آریا به عنوان یک شرکت بزرگ پیمانکاری و مشاوره ، دارای پروژه های عظیم داخلی و بین المللی( در منطقه ای آسیای میانه) می باشد از این رو سیاست شرکت بر مبنای جذب استعداد های جوان به منظور بهروری بیشتر و طولانی مدت برای فردایی بهتر و روشن تر در جهت اهداف عالی شرکت می باشد این شرکت مفتخر است خود را به عنوان یکی از پیمانکاران رده بالا و موفق ایرانی در منطقه آسیای میانه و صادر کننده برتر خدمات فنی مهندسی می نامد. لذا از شما نیروهای جوان و توانمند در صورت داشتن صلاحیت های مورد نیاز رزومه خود را ارسال نمایید که کارشناسان شرکت بعد از جمع آوری اطلاعات در صورت صلاح دید با شما تماس بگیرند."
                ],
                'page' => 'sector'
            ],
            [
                'en' => [
                    'title' => '',
                    'text' => "Tunnel Sadd Ariana, as a large contracting and consulting company, has great domestic and international projects (in the Central Asian region), so the company's policy is based on attracting young talent in order to be more productive and long-term relationship for a better future. This company is proud to call itself one of the high-ranking and successful Iranian contractors in the Central Asian region and a top exporter of technical engineering services. Therefore, if you have the required qualifications as a young talent, send your resume to capable staff. Our experts after gathering information if you are qualified, will contact you."
                ],
                'fa' => [
                    'title' => '',
                    'text' => "شرکت تونل سد آریا به عنوان یک شرکت بزرگ پیمانکاری و مشاوره ، دارای پروژه های عظیم داخلی و بین المللی( در منطقه ای آسیای میانه) می باشد از این رو سیاست شرکت بر مبنای جذب استعداد های جوان به منظور بهروری بیشتر و طولانی مدت برای فردایی بهتر و روشن تر در جهت اهداف عالی شرکت می باشد این شرکت مفتخر است خود را به عنوان یکی از پیمانکاران رده بالا و موفق ایرانی در منطقه آسیای میانه و صادر کننده برتر خدمات فنی مهندسی می نامد. لذا از شما نیروهای جوان و توانمند در صورت داشتن صلاحیت های مورد نیاز رزومه خود را ارسال نمایید که کارشناسان شرکت بعد از جمع آوری اطلاعات در صورت صلاح دید با شما تماس بگیرند."
                ],
                'ru' => [
                    'title' => '',
                    'text' => "شرکت تونل سد آریا به عنوان یک شرکت بزرگ پیمانکاری و مشاوره ، دارای پروژه های عظیم داخلی و بین المللی( در منطقه ای آسیای میانه) می باشد از این رو سیاست شرکت بر مبنای جذب استعداد های جوان به منظور بهروری بیشتر و طولانی مدت برای فردایی بهتر و روشن تر در جهت اهداف عالی شرکت می باشد این شرکت مفتخر است خود را به عنوان یکی از پیمانکاران رده بالا و موفق ایرانی در منطقه آسیای میانه و صادر کننده برتر خدمات فنی مهندسی می نامد. لذا از شما نیروهای جوان و توانمند در صورت داشتن صلاحیت های مورد نیاز رزومه خود را ارسال نمایید که کارشناسان شرکت بعد از جمع آوری اطلاعات در صورت صلاح دید با شما تماس بگیرند."
                ],
                'page' => 'personnel'
            ]
        ];

        foreach ($datas as $data) {
            Content::create([
                'en' => [
                    'title' => $data['en']['title'],
                    'text' => $data['en']['text']
                ],
                'fa' => [
                    'title' => $data['fa']['title'],
                    'text' => $data['fa']['text']
                ],
                'ru' => [
                    'title' => $data['ru']['title'],
                    'text' => $data['ru']['text']
                ],
                'page' => $data['page']
            ]);
        }
    }
}
