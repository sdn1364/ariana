<?php

namespace Database\Seeders;

use App\Models\sectors\Sector;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
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
                    'title' => 'Water And Environment',
                    'content' => 'Tunnel Sadd Ariana is at the heart of efforts to ensure that water supply and wastewater collection and treatment are better managed. Furthermore, we are committed to ensure that communities and economies are protected from the destructive effects of flooding. Our operations cover the entire life-cycle of networks, which include Irrigation systems, dams, metering systems, treatment facilities, and other essential infrastructure. Working closely with the supply chain, we employ industry-leading approaches like BIM and offsite construction to bring cost and time efficiency to projects.'
                ],
                'fa' => [
                    'title' => 'آب و محیط زیست',
                    'content' => 'تونل سد آریانا در بطن تلاش ها برای اطمینان بخشی از مدیریت بهتر منابع آب و جمع آوری و تصفیه فاضلاب قرار دارد. همچنین ما متعهد هستیم تا از جوامع و اقتصادها در برابر تأثیرات مخرب سیل محافظت نماییم. عملیات ما کل چرخه عمر شبکه ها را در بر می گیرد که شامل سیستم های آبیاری، سد ها، سامانه های اندازه گیری، تأسیسات تصفیه خانه و سایر زیرساختهای ضروری می شوند. از طریق همکاری نزدیک با زنجیره تأمین، ما از رویکردهای پیشرو در صنعت نظیر BIM و ساخت و سازهای خارج از محل پروژه استفاده می کنیم تا بهینه سازی هزینه و زمان پروژه ها را به ارمغان بیاوریم.'
                ],
                'parent_id' => 0,
                'type'=> 'type-1'
            ],
            [
                'en' => [
                    'title' => 'Transportation',
                    'content' => 'We specialize in delivering large, complex transport projects in partnership with our customers, safely and efficiently. Everything we deliver has the end-user at its heart: the passenger, the motorist and those living in the communities surrounding the schemes. We use the latest concepts in sustainable development to improve social, economic, and environmental conditions because we believe these projects should leave a positive legacy in addition to the built infrastructure.'
                ],
                'fa' => [
                    'title' => 'حمل و نقل',
                    'content' => 'ما در ارائه پروژه های بزرگ و پیچیده حمل و نقل با مشارکت مشتریان خود به صورت ایمن و کارآمد تخصص داریم. تمامی اقدامات ما به نوعی صورت می گیرد تا کاربران نهایی را مد نظر داشته باشد و این کار برای مسافران، رانندگان و کسانی هستند که در جوامع پیرامون پروژه ها زندگی می کنند. ما برای بهبود شرایط اجتماعی، اقتصادی و محیطی از جدیدترین مفاهیم در توسعه پایدار استفاده می کنیم زیرا معتقدیم این پروژه ها باید علاوه بر زیرساخت های اجرا شده، میراث مثبتی را نیز به جا بگذارند.'
                ],
                'parent_id' => 0,
                'type'=> 'type-1'
            ],
            [
                'en' => [
                    'title' => 'Urban Development',
                    'content' => 'With our proficiency in construction, engineering design, and financing, we provide solutions for residential, commercial, industrial, healthcare building projects around Asia. Our experience extends from low-density urban land developments to high-density high-rise projects for government and private sector clients. Our global team of engineers, designers, architects, and technical specialists, work collaboratively to provide a majestic design approach and facilitate an adequate solution for each project.'
                ],
                'fa' => [
                    'title' => 'توسعه شهری',
                    'content' => 'ما با مهارت در ساخت و ساز، طراحی مهندسی و تأمین مالی، راه حل هایی برای پروژه های مسکونی، تجاری، صنعتی، بهداشتی و درمانی در سراسر آسیا ارائه می دهیم. تجربه ما در توسعه زمین های شهری با تراکم کم، تا پروژه های با تراکم بالا برای مشتریان دولتی و خصوصی گسترش می یابد. تیم مهندسان، طراحان، معماران و متخصصان فنی ما به طور مشترک برای ارائه یک رویکرد با شکوه طراحی و تسهیل راه حل مناسب برای هر پروژه همکاری می کنند.'
                ],
                'parent_id' => 0,
                'type'=> 'type-2'

            ],
            [
                'en' => [
                    'title' => 'Energy',
                    'content' => 'In a fast moving and competitive sector, the energy industry is constantly looking to improve customer service and introduce innovative solutions for the growing demand. All around Asia, we support customers in the energy and utility industry. Our services cover various phases of building of power plants and includes different types of plants, whether they are gas-fired, diesel-fired, hydroelectric, geothermal or other kinds. Our main focus in terms of services is on consultation, engineering, construction, and maintenance of power plants.'
                ],
                'fa' => [
                    'title' => 'انرژی',
                    'content' => 'صنعت انرژی به عنوان بخشی که به شدت رقابتی بوده و در حال تجربه تغییرات سریع می باشد، به طور مداوم در تلاش است تا خدمات مشتریان را بهبود بخشد و راهکارهای مبتکرانه ای را برای تقاضای رو به افزایش بخش نیرو ارائه دهد. در سراسر آسیا، ما از مشتریانمان در صنعت انرژی و آب و برق پشتیبانی می کنیم. دامنه خدمات ما تمامی مراحل ساخت یک نیروگاه را شامل می شود و انواع مختلف آنها نظیر نیروگاه گازی، نیروگاه دیزلی، نیروگاه برق آبی، نیروگاه زمین گرمایی و دیگر انواع نیروگاه را در بر می گیرد. تمرکز اصلی ما از نظر خدمات در بخش مشاوره، مهندسی، ساخت و نگهداری نیروگاه ها می باشد.'
                ],
                'parent_id' => 0,
                'type'=> 'type-1'

            ],
            [
                'en' => [
                    'title' => 'Mining',
                    'content' => 'Tunnel Sadd Ariana has supported the mining sector for two decades on sites located in Iran and Middle Asia. Through our global network, we support our mining clients in the development, operation and maintenance of their mines and supporting infrastructure, the execution of key strategies and enhancement of technical skills to deliver sustainable results. Our mining capabilities range from operational improvements and cost control, through to mining and processing equipment risk management advice. We have a profound knowledge of technical design and management support of mining infrastructure, including mine site groundwork; roads, bridges, rail, tunnelling, tailings water and sewage processing plants; and power transmission and distribution facilities.'
                ],
                'fa' => [
                    'title' => 'معادن',
                    'content' => 'تونل سد آریانا برای دو دهه در سایت های واقع در ایران و آسیای میانه از بخش معدن را پشتیبانی کرده است. ما از طریق شبکه جهانی خود، از مشتریان استخراج خود در توسعه، بهره برداری و نگهداری معادن و پشتیبانی زیرساخت ها، اجرای استراتژی های کلیدی و ارتقا مهارت های فنی برای دستیابی به نتایج پایدار پشتیبانی می کنیم. توانایی های ما در زمینه معدن از پیشرفت های عملیاتی و کنترل هزینه، تا مشاوره مدیریت ریسک تجهیزات استخراج و پردازش است. ما دانش عمیقی در مورد طراحی فنی و پشتیبانی مدیریت زیرساخت های معدن، از جمله زمینه های سایت معدن، راه ها، پل ها، راه آهن، تونل زنی، ایستگاه های تصفیه آب و فاضلاب را دارا هستیم.'
                ],
                'parent_id' => 0,
                'type'=> 'type-2'

            ],
            [
                'en' => [
                    'title' => 'Dams',
                    'content' => '
                            <p>Our experience in working at different dams has enabled us to provide a variety of services for employers worldwide. Our expertise has been implemented in central Asian countries as solutions for major dam projects.</p>
                            <p>Tunnel Sadd Ariana’s services in this sector include:</p>
                            <ul>
                                <li>Dam studies, design, construction, and project management</li>
                                <li>Rehabilitation and remedial works of dams</li>
                                <li>Geotechnical and hydrological operations</li>
                            </ul>
                            <p>The types of dams for which we provide our services include:</p>
                                                                <ul>
                                        <li>Hydropower</li>
                                        <li>Concrete gravity</li>
                                        <li>Embankment</li>
                                        <li>Storage</li>
                                        <li>Diversion</li>
                                    </ul>
                                                                        <ul>
                                        <li>Buttress</li>
                                        <li>Coffer</li>
                                        <li>Arch</li>
                                        <li>Rockfill</li>
                                    </ul>
                        '
                ],
                'fa' => [
                    'title' => 'سد',
                    'content' => '
                            <p>تجربه ما در سدهای مختلف این امکان را برایمان فراهم آورده است تا خدمات متنوعی را به کارفرمایان نقاط مختلف جهان ارائه دهیم. تخصص ما در کشورهای آسیای مرکزی به عنوان راهکارهایی در پروژه های سدهای بزرگ اجرایی شده است.</p>
                            <p>خدمات شرکت تونل سد آریانا در این زمینه به این صورت می باشند:</p>
                            <ul>
                                <li>مطالعات، طراحی، ساخت، و مدیریت پروژه های سد</li>
                                <li>نوسازی و اقدامات علاج بخشی سدها</li>
                                <li>عملیات ژئوتکنیکی و هیدرولوژیکی</li>
                            </ul>
                            <p>انواع سدها که برای آنها خدماتمان را ارائه می دهیم شامل موارد زیر می گردند:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>نیروگاه های برق آبی</li>
                                        <li>سدهای بتنی ثقلی</li>
                                        <li>سدهای خاکریزی</li>
                                        <li>سدها مخزنی</li>
                                        <li>سدهای انحرافی</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>سدهای پشتبند دار</li>
                                        <li>سد صندوقی (فرازبند)</li>
                                        <li>سد قوسی</li>
                                        <li>سد سنگریزه ای</li>
                                    </ul>
                                </div>
                            </div>
                    '
                ],
                'parent_id' => 1,
                'type'=> 'type-1'

            ],
            [
                'en' => [
                    'title' => 'Flood Protection System',
                    'content' => '
                            <p>Since floods are one of the devastating natural phenomena with more than 2 billion people affected by them between 1998-2017 (according to WHO), it is of paramount importance to provide protective systems to mitigate their destruction. Therefore, we have focused on providing our services in this field.</p>
                            <p>The construction of these types of flood protection systems are among the services we provide:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Retaining walls</li>
                                        <li>Diversion canals</li>
                                        <li>Gabion walls</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Detention basin</li>
                                        <li>Rip-rap walls</li>
                                    </ul>
                                </div>
                            </div>
                        '
                ],
                'fa' => [
                    'title' => 'سیستم حفاظت سیلاب',
                    'content' => '
                            <p>از آنجایی که سیل ها از پدیده های مخرب طبیعی هستند که دو میلیارد نفر بین سال های 1998 2017 (طبق سازمان بهداشت جهانی) تحت تأثیر آنها قرار گرفته اند، تأمین نمودن سیستم های محافظتی از اهمیت ویژه ای برخوردار است تا خرابی های آنها را کاهش دهند. به همین خاطر ما تمرکزمان را بر ارائه خدمات در این زمینه قرار داده ایم.</p>
                            <p>ساخت این سیستم های محافظت از سیل در میان خدماتی هستند که ارائه می دهیم:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>دیوارهای حائل</li>
                                        <li>کانال های انحرافی</li>
                                        <li>دیوارهای گابیونی</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>حوضچه های محبوس کننده</li>
                                        <li>دیوارهای سنگ چین شده</li>
                                    </ul>
                                </div>
                            </div>
                    '
                ],
                'parent_id' => 1,
                'type'=> 'type-1'

            ],
            [
                'en' => [
                    'title' => 'Geotechnics',
                    'content' => '
The services that Tunnel Sadd Ariana provides in the field of Geotechnics encompass geotechnical investigations, soil-structure interaction, and the design of various foundations. Among our teams of experts we have geologists and geotechnical engineers to fully support our clients requirements in this field.
                        '
                ],
                'fa' => [
                    'title' => 'ژئوتکنیک',
                    'content' => 'خدماتی که شرکت تونل سد آریانا در زمینه ژئوتکنیک ارائه می دهد شامل مطالعات و تحقیقات ژئوتکنیکی، برهم کنش خاک و سازه و همچنین طراحی پی های گوناگون می گردد. در میان تیم های متخصصین ما مهندسین زمین شناس و ژئوتکنیک به منظور پشتیبانی کامل الزامات کارفرمایان ما در این زمینه نقش آفرینی می نمایند.'
                ],
                'parent_id' => 1,
                'type'=> 'type-2'

            ],
            [
                'en' => [
                    'title' => 'Dams',
                    'content' => '
                            <p>Our experience in working at different dams has enabled us to provide a variety of services for employers worldwide. Our expertise has been implemented in central Asian countries as solutions for major dam projects.</p>
                            <p>Tunnel Sadd Ariana’s services in this sector include:</p>
                            <ul>
                                <li>Dam studies, design, construction, and project management</li>
                                <li>Rehabilitation and remedial works of dams</li>
                                <li>Geotechnical and hydrological operations</li>
                            </ul>
                            <p>The types of dams for which we provide our services include:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Hydropower</li>
                                        <li>Concrete gravity</li>
                                        <li>Embankment</li>
                                        <li>Storage</li>
                                        <li>Diversion</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Buttress</li>
                                        <li>Coffer</li>
                                        <li>Arch</li>
                                        <li>Rockfill</li>
                                    </ul>
                                </div>
                            </div>
                        '
                ],
                'fa' => [
                    'title' => 'سد',
                    'content' => '
                            <p>تجربه ما در سدهای مختلف این امکان را برایمان فراهم آورده است تا خدمات متنوعی را به کارفرمایان نقاط مختلف جهان ارائه دهیم. تخصص ما در کشورهای آسیای مرکزی به عنوان راهکارهایی در پروژه های سدهای بزرگ اجرایی شده است.</p>
                            <p>خدمات شرکت تونل سد آریانا در این زمینه به این صورت می باشند:</p>
                            <ul>
                                <li>مطالعات، طراحی، ساخت، و مدیریت پروژه های سد</li>
                                <li>نوسازی و اقدامات علاج بخشی سدها</li>
                                <li>عملیات ژئوتکنیکی و هیدرولوژیکی</li>
                            </ul>
                            <p>انواع سدها که برای آنها خدماتمان را ارائه می دهیم شامل موارد زیر می گردند:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>نیروگاه های برق آبی</li>
                                        <li>سدهای بتنی ثقلی</li>
                                        <li>سدهای خاکریزی</li>
                                        <li>سدها مخزنی</li>
                                        <li>سدهای انحرافی</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>سدهای پشتبند دار</li>
                                        <li>سد صندوقی (فرازبند)</li>
                                        <li>سد قوسی</li>
                                        <li>سد سنگریزه ای</li>
                                    </ul>
                                </div>
                            </div>
                    '
                ],
                'parent_id' => 2,
                'type'=> 'type-1'

            ],
            [
                'en' => [
                    'title' => 'Flood Protection System',
                    'content' => '
                            <p>Since floods are one of the devastating natural phenomena with more than 2 billion people affected by them between 1998-2017 (according to WHO), it is of paramount importance to provide protective systems to mitigate their destruction. Therefore, we have focused on providing our services in this field.</p>
                            <p>The construction of these types of flood protection systems are among the services we provide:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Retaining walls</li>
                                        <li>Diversion canals</li>
                                        <li>Gabion walls</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Detention basin</li>
                                        <li>Rip-rap walls</li>
                                    </ul>
                                </div>
                            </div>
                        '
                ],
                'fa' => [
                    'title' => 'سیستم حفاظت سیلاب',
                    'content' => '
                            <p>از آنجایی که سیل ها از پدیده های مخرب طبیعی هستند که دو میلیارد نفر بین سال های 1998 2017 (طبق سازمان بهداشت جهانی) تحت تأثیر آنها قرار گرفته اند، تأمین نمودن سیستم های محافظتی از اهمیت ویژه ای برخوردار است تا خرابی های آنها را کاهش دهند. به همین خاطر ما تمرکزمان را بر ارائه خدمات در این زمینه قرار داده ایم.</p>
                            <p>ساخت این سیستم های محافظت از سیل در میان خدماتی هستند که ارائه می دهیم:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>دیوارهای حائل</li>
                                        <li>کانال های انحرافی</li>
                                        <li>دیوارهای گابیونی</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>حوضچه های محبوس کننده</li>
                                        <li>دیوارهای سنگ چین شده</li>
                                    </ul>
                                </div>
                            </div>
                    '
                ],
                'parent_id' => 2,
                'type'=> 'type-1'

            ],
            [
                'en' => [
                    'title' => 'Geotechnics',
                    'content' => '
The services that Tunnel Sadd Ariana provides in the field of Geotechnics encompass geotechnical investigations, soil-structure interaction, and the design of various foundations. Among our teams of experts we have geologists and geotechnical engineers to fully support our clients requirements in this field.
                        '
                ],
                'fa' => [
                    'title' => 'ژئوتکنیک',
                    'content' => 'خدماتی که شرکت تونل سد آریانا در زمینه ژئوتکنیک ارائه می دهد شامل مطالعات و تحقیقات ژئوتکنیکی، برهم کنش خاک و سازه و همچنین طراحی پی های گوناگون می گردد. در میان تیم های متخصصین ما مهندسین زمین شناس و ژئوتکنیک به منظور پشتیبانی کامل الزامات کارفرمایان ما در این زمینه نقش آفرینی می نمایند.'
                ],
                'parent_id' => 2,
                'type'=> 'type-1'

            ],
        ];

        foreach ($datas as $data) {
            $sector = Sector::create([
                'en' => [
                    'title' => $data['en']['title'],
                    'content' => $data['en']['content'],
                ],
                'fa' => [
                    'title' => $data['fa']['title'],
                    'content' => $data['fa']['content'],
                ],
                'parent_id' => $data['parent_id'],
                'type'=> $data['type']
            ]);
        }
    }
}
