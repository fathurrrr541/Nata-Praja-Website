<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nata Praja - Layanan</title>
    <link rel="icon" href="{{asset('resources/img/Favicon.ico')}}" type="image/x-icon">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/f1934f818b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_outward" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_left_alt" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <!-- icon -->
    @vite (['resources/scss/style.scss', 'resources/js/app.js'])
</head>
<body>

    <!-- LOADING SCREEN -->
    <!-- LOADING SCREEN -->
    <!-- LOADING SCREEN -->

    <div class="overlay">
        <div class="loader">
            <svg class="loading-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 370.88 317.35"><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M191.57,46.46C139.28-32.77,1.05,2.07,3.53,114.18v93.7c0,13.54,12.44,19.89,24.78,19.89,12,0,25-6.58,25-19.79.06-20.47.4-76.16.17-94-.79-64.19,98.79-71.93,108.46-5.47l.34,184.1c0,13.83,11.78,21.05,24.88,21.22s24.91-7.38,24.91-21.25V189.77a98.88,98.88,0,0,0,155.31-81.2C367.38,14.87,249.44-25.13,191.57,46.46Zm2.66,243.89c0,3.89-3.67,5.73-7.14,5.73s-7.08-1.81-7.08-5.66l-.26-141.16a118.48,118.48,0,0,0,14.48,24.86ZM268.5,189.68c-114.91-.94-59.37-144.13-159.44-148.91-39.7-1.9-73.84,34.44-73.35,73.45.38,30-.25,59.91-.2,89.86,0,4-3.47,5.92-7.13,5.92-3.44,0-7-1.81-7-5.66V113.75c-.65-29.12,9.83-56.2,33.31-74.14a91.2,91.2,0,0,1,71.68-16.86c94.43,20.46,48.22,144.73,143.07,149.84,33.61,1.81,63.54-28.18,62.93-62.93-1.23-70.66-95-87.56-120.59-23.53L201.07,63C251.45-.53,346.32,28.86,349.61,108.57A81.1,81.1,0,0,1,268.5,189.68Zm-43.61-80a44.5,44.5,0,1,1,44.5,44.5A44.5,44.5,0,0,1,224.89,109.66Z" style="fill:#fff;stroke:#154122;stroke-miterlimit:10;stroke-width:7px;fill-rule:evenodd"/></g></g></svg>
        </div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <!-- LOADING SCREEN -->
    <!-- LOADING SCREEN -->
    <!-- LOADING SCREEN -->
    {{-- Header --}}
    <header id="#header" class="header">
        <nav class="navbig">
            <div class="navbig__wrapper flxcenter-vertical-spcbtwn">
                <div class="navbig-left logo-medium">
                    <a href="{{'/'}}"><img src="{{ asset('resources/img/LOGO NPS GREEN.png') }}" alt="NPS Logo" class="logo" id="logoBig2"></a>
                </div>
                <ul class="navbig-center nav-list flxcenter-vertical-spcbtwn">
                    <li><a href="{{route('layanan')}}" class="horizontal-slide" data-replace="Services"><span>Services</span></a></li>
                    <li><a href="{{route('aboutUs')}}" class="horizontal-slide" data-replace="About"><span>About</span></a></li>
                    <li><a href="{{route('artikel')}}" class="horizontal-slide" data-replace="Article"><span>Article</span></a></li>
                    <li><a href="{{route('faq')}}" class="horizontal-slide" data-replace="FAQ"><span>FAQ</span></a></li>
                </ul>
                {{-- <button id="toggle-dark">
                        <i data-lucide="moon"></i>
                    </button> --}}
                <ul class="navbig-right cta-list flxcenter-vertical-spcbtwn">
                    <li><a href="{{route('karir')}}" class="horizontal-slide" data-replace="Career" style="color: rgb(15, 41, 22);"><span>Career</span></a></li>
                    <a href="{{route('contact')}}" class="button-cta-2">CONTACT</a>
                </ul>
            </div>
        </nav>
        <nav class="navmobile">
            <div class="navbig-left logo-medium">
                <a href="/"><a href="{{'/'}}"><img src="{{ asset('resources/img/LOGO NPS GREEN.png') }}" alt="NPS Logo" class="logo" id="logoMobile2"></a> 
            </div>
            <div class="hamburger-menu antimainstream" id="hamburger">
                <a class="button-cta-1" style="color: rgb(15, 41, 22);">Menu</a>
            </div>
            <div class="mobile-menu" id="mobileMenu">
                <ul>
                    <li><a href="{{route('layanan')}}">Services</a></li>
                    <li><a href="{{route('aboutUs')}}">About</a></li>
                    <li><a href="{{route('artikel')}}">Article</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('karir')}}">Career</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    {{-- Header --}}
    <!-- breadcrumb -->
     <div class="breadcrumb">
        <div class="breadcrumb__wrapper">
            <a href="/" class="breadcrumb__icon"><i class="fa-solid fa-house"></i></a>
            <div class="breadcrumb__icon2">></div>
            <div class="breadcrumb__info">
                <a href="{{route('layanan')}}">Our Services</a>
            </div>
        </div>
     </div>
    <!-- breadcrumb -->

    <!-- Main -->
     <main class="main-content main-container our-service-container">

        <section id="scrolltop" class="page-cover">
            <div class="page-cover__wrapper">
                <img src="{{asset('resources/img/page cover/Services_Cover.png')}}" alt="" class="page-cover-img" loading="lazy">
                <div class="page-cover__overlay">
                    <div class="page-cover__overlay-top">
                        <div class="sub-title">Our service</div>
                        <h2>Comprehensive Business Solutions.</h2>
                    </div>
                    <a href="#serviceFeatures" class="page-cover__overlay-bot scroll-link">
                        <h2>Explore our services</h2>
                        <div class="page-cover__icon"><i class="fi fi-ts-arrow-up-right"></i></div>
                    </a>
                </div>
            </div>
        </section>

        <!-- overview -->
        <section class="overview">
            <div class="overview__wrapper">
                <div class="overview__top">
                    <div class="sub-title">Overview</div>
                    <h2 class="overview-header">Business processes are complex, but PT Nata Praja Solusindo simplifies them with tailored solutions and expertise.</h2>
                    <div class="overview-paragraph">
                        <p>Business operations are increasingly complex, requiring efficient solutions to streamline processes and boost productivity. PT Nata Praja Solusindo provides customized outsourcing services to simplify workflows and deliver measurable outcomes for businesses.</p>
                        <p>Our services include call center management, data verification, and other essential support, powered by advanced technology and experienced professionals. Each solution is tailored to meet specific client needs, ensuring maximum efficiency and high-quality results.</p>
                        <p>By partnering with PT Nata Praja Solusindo, businesses can focus on their core goals while leaving operational challenges to us. This not only reduces costs but also drives sustainable growth and long-term success.</p>
                    </div>
                </div>
                <div class="overview__bottom">
                    <div class="overview__bottom-img-wrapper">
                        <img src="{{asset('resources/img/layananPage/descriptionImage.png')}}" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <!-- overview -->

        <!--CLIENT-->
        <section class="our-service-client">
            <div class="client ">
                <div class="client__wrapper">
                    <div class="client__container">
                        @foreach ($clientLogos as $logo)
                            <div class="client__slide hover1">
                                <img src="{{ asset('storage/' . $logo->logo_path) }}" alt="{{ $logo->logo_name }}" height="30px">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--CLIENT-->

        <!-- service-card -->
         <section id="serviceFeatures" class="servicecard-container">
            <div class="servicecard-container__wrapper">
                <div class="servicecard-heading">
                    <div class="sub-title">what we serve</div>
                    <h2 class="servicecard-header">Explore our services and discover how we can help your business operate smarter</h2>
                </div>
                <div class="servicecard-wrapper">
                    <div class="servicecard-wrapper-top">
                        <a href="{{route('callcenter')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Call Center</h3>
                                    <p>Professional customer support to handle inquiries, resolve issues, and ensure client satisfaction efficiently.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('dataentry')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Data Entry</h3>
                                    <p>Streamlined data management to enhance efficiency and ensure critical information is readily available for decision-making.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('verification-validation')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Verification & Validation</h3>
                                    <p>Secure and accurate data verification to minimize fraud risks and ensure compliance with industry standards.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('telemarketing')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Telemarketing</h3>
                                    <p>Targeted campaigns to expand market reach, increase sales, and understand customer needs effectively.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="servicecard-wrapper-bot">
                        <a href="{{route('livechat')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Live Chat</h3>
                                    <p>Real-time assistance for instant customer support and improved engagement without long waiting times.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('deskcollection')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>Desk Collection</h3>
                                    <p>Effective debt collection through negotiations and reminders, ensuring smooth payment processes.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{route('kyc')}}" class="ourservice-card">
                            <div class="ourservice-card__overlay"></div>
                            <div href="" class="ourservice-card__content">
                                <div class="ourservice-card__content-top">
                                    <h3>KYC (Know Your Customer)</h3>
                                    <p>Comprehensive customer identity verification to meet regulatory standards and prevent financial crimes.</p>
                                </div>
                                <div class="ourservice-card__content-bot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
         </section>
        <!-- service-card -->

        <!-- CTA -->
        <section class="cta-ourservice">
            <div class="cta">
                <div class="cta__container">
                    <div class="cta__partners cta__card">
                        <div class="cta-card-head">
                            <div class="cta-head-left">NPS</div>
                            <div class="cta-head-right">Partners</div>
                        </div>
                        <div class="cta-card-content">
                            <h2>Intrested partnering with Nata Praja?</h2>
                            <p>We’re more than just a BPO company—we’re your growth partner. From managing your customer interactions to optimizing your backend operations, we tailor our services to match your goals.</p>
                        </div>
                        <div class="cta-card-button-wrapper">
                            <a href="{{route('contact')}}" class="cta-card-button">
                                <h3>Let's connect</h3>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="cta__careers cta__card">
                        <div class="cta-card-head">
                            <div class="cta-head-left">NPS</div>
                            <div class="cta-head-right">Careers</div>
                        </div>
                        <div class="cta-card-content">
                            <h2>Build the future with Nata Praja?</h2>
                            <p>Your journey begins with one decision—to grow. At Nata Praja, we provide a supportive environment where you can sharpen your skills, discover your strengths, and take charge of your career. Join us and turn ambition into action.</p>
                        </div>
                        <div class="cta-card-button-wrapper">
                            <a href="{{route('karir')}}" class="cta-card-button button-carrers">
                                <h3>See the oportunity</h3>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA -->

        
    </main>
    <!-- Main -->

    <!-- Footer -->
        <footer class="footer">
            <div class="footer__containerdesktop desktop__footer flx2col-spcbtwn">
                <div class="footer__left">
                    <h2>#Jadi yang kamu butuhkan.</h2>
                    <div class="profil-deskription">
                        <div class="footer__logo">
                            <div class="footer__contenttoplogo">
                                <img src="{{ asset('resources/img/LOGO NPS WHITE.png') }}" alt="" class="logowhite">
                            </div>
                            <div class="footer__logotype">NATA PRAJA</div>
                        </div>
                        <div class="logo-caption">
                            "PT Nata Praja Solusindo adalah perusahaan yang berorientasi pada pelanggan. Kami
                            memahami bahwa setiap klien memiliki kebutuhan yang beragam, oleh karena itu kami
                            menawarkan solusi yang disesuaikan dengan kebutuhan spesifik masing-masing klien."
                        </div>
                    </div>
                </div>
                <div class="footer__right">
                    <div class="footer-right-top">
                        <div class="footer-nav-company footer-nav-wrapper">
                            <ul class="footer-nav-head">Company</ul>
                            <ul class="footer-nav-list">
                                <li><a href="/" class="footer-nav-items">Home</a></li>
                                <li><a href="{{route('aboutUs')}}" class="footer-nav-items">About us</a></li>
                                <li><a href="{{route('artikel')}}" class="footer-nav-items">Article</a></li>
                                <li><a href="{{route('faq')}}" class="footer-nav-items">FAQ</a></li>
                                <li><a href="{{route('gallery')}}" class="footer-nav-items">Gallery</a></li>
                            </ul>
                        </div>
                        <div class="footer-nav-work footer-nav-wrapper">
                            <ul class="footer-nav-head">Work</ul>
                            <ul class="footer-nav-list">
                                <li><a href="{{route('layanan')}}" class="footer-nav-items">Services</a></li>
                                <li><a href="{{route('contact')}}" class="footer-nav-items">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="footer-nav-social footer-nav-wrapper">
                            <ul class="footer-nav-head">Social</ul>
                            <ul class="footer-nav-list">
                                <li><a href="https://www.instagram.com/ptnataprajasolusindo/" target="_blank" class="footer-nav-items">Instagram</a></li>
                                <li><a href="https://www.linkedin.com/company/nata-praja-solusindo" target="_blank" class="footer-nav-items">Linkedln</a></li>
                                <li><a href="https://www.facebook.com/nataprajasolusindo.NPS" target="_blank" class="footer-nav-items">Facebook</a></li>
                                <li><a href="https://www.youtube.com/@NPSJogja" target="_blank" class="footer-nav-items">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-right-bottom">
                        <div class="footer-nav-info">
                            <ul class="footer-address">Kledokan RT 01/ RW 07, Umbulmartani, Kec. Ngemplak, Kab Sleman, Daerah Istimewa Yogyakarta</ul>
                            <span class="line"></span>
                            <ul class="contact">
                                <li>(0274) 6000 027</li>
                                <li>nps@natapraja.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__containermobile">
                <div class="footer-mobile-one">
                    <div class="footer__logo">
                        <div class="footer__contenttoplogo">
                            <img src="{{ asset('resources/img/LOGO NPS WHITE.png') }}" alt="" class="logowhite">
                        </div>
                        <div class="footer__logotype">NATA PRAJA</div>
                    </div>
                </div>
                <div class="footer-mobile-two">
                    <div class="footer-nav-company footer-nav-wrapper">
                        <ul class="footer-nav-head">Company</ul>
                        <ul class="footer-nav-list">
                            <li><a href="/index.html" class="footer-nav-items">Home</a></li>
                            <li><a href="{{route('aboutUs')}}" class="footer-nav-items">About us</a></li>
                            <li><a href="{{route('artikel')}}" class="footer-nav-items">Article</a></li>
                            <li><a href="{{route('faq')}}" class="footer-nav-items">FAQ</a></li>
                            <li><a href="{{route('gallery')}}" class="footer-nav-items">Gallery</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav-work footer-nav-wrapper">
                        <ul class="footer-nav-head">Work</ul>
                        <ul class="footer-nav-list">
                            <li><a href="{{route('layanan')}}" class="footer-nav-items">Services</a></li>
                            <li><a href="{{route('contact')}}" class="footer-nav-items">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-mobile-three">
                    <div class="h2-wrapper">
                        <h2 class="footer-mobile-three-h2">#Jadi yang kamu butuhkan.</h2>
                    </div>
                </div>
                <div class="footer-mobile-four">
                    <div class="footer-navmobile-social">
                        <ul class="footer-nav-head">Social</ul>
                        <ul class="footer-navmobile-list">
                            <li><a href="https://www.instagram.com/ptnataprajasolusindo/" target="_blank" class="footer-navmobile-items">Instagram</a></li>
                            <li><a href="https://www.linkedin.com/company/nata-praja-solusindo" target="_blank" class="footer-nav-items">Linkedln</a></li>
                            <li><a href="https://www.facebook.com/nataprajasolusindo.NPS" target="_blank" class="footer-nav-items">Facebook</a></li>
                            <li><a href="https://www.youtube.com/@NPSJogja" target="_blank" class="footer-nav-items">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-mobile-five">
                    <div class="copyright footer-nav-head">&copy 2024, Nata Praja, All Rights Reserved.</div>
                    <a href="#hero" class="scrolltop">
                        <p>Back to top</p>
                        <i class="fa-solid fa-arrow-up"></i>
                    <a>
                </div>
            </div>
        </footer>
        <!-- Footer -->
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</body>
</html>