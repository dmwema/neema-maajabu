@extends('public.layout.main')

@php
$page = 'contact';
$title = 'nous contacter';
@endphp

@section('content')
    <!-- Begin page-name -->
    <section class="page-name v-separator">
        <div class="dark-line"></div>
        <div class="page-name-content">
            <div class="container">
                <h1>Contacts</h1>
                <ul class="bread-crumbs">
                    <li><a href="{{ route('public.home') }}">Accueil</a></li>
                    <li>
                        <p>Contacts</p>
                    </li>
                </ul>
            </div>
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" class="page-name__bg lazy"
                data-src="./img/page-name_bg.jpg" alt="bg">
        </div>
    </section>
    <!-- End page-name -->
    <main>
        <!-- Begin Contacts -->
        <section class="v-separator pb-xs-50 pb-md-50 pb-lg-120">
            <div class="map-block" id="contact-map" data-lng='-117.2697074' data-lat='34.0887252' data-zoom='15'
                data-map-icon="./img/map-.png">

            </div>
            <div class="contact-bnr lazy" data-src="./img/contact-bg.jpg">
                <div class="container">
                    <h2>Prenez contact avec nous</h2>
                    <ul class="contact-list">
                        <li class="mb-xs-30 mb-lg-50">
                            <div class="contact-icon">
                                <svg viewBox="0 0 15 21" width="15" height="21" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.56641 0.386719C6.5638 0.347656 5.61328 0.510417 4.71484 0.875C3.82943 1.22656 3.05469 1.72786 2.39062 2.37891C1.72656 3.01693 1.19922 3.77865 0.808594 4.66406C0.43099 5.53646 0.242188 6.46745 0.242188 7.45703C0.242188 8.58984 0.476562 9.66406 0.945312 10.6797C1.42708 11.6823 2.01302 12.6784 2.70312 13.668C3.40625 14.6576 4.14844 15.6667 4.92969 16.6953C5.71094 17.724 6.40755 18.8307 7.01953 20.0156C7.08464 20.1328 7.18229 20.1914 7.3125 20.1914C7.45573 20.1914 7.5599 20.1328 7.625 20.0156C8.17188 18.9479 8.79036 17.9583 9.48047 17.0469C10.1836 16.1224 10.8607 15.224 11.5117 14.3516C12.1628 13.4661 12.7422 12.5807 13.25 11.6953C13.7708 10.7969 14.1159 9.83333 14.2852 8.80469C14.4674 7.73698 14.4219 6.70833 14.1484 5.71875C13.875 4.72917 13.4258 3.84375 12.8008 3.0625C12.1888 2.28125 11.4336 1.64974 10.5352 1.16797C9.63672 0.686198 8.64714 0.425781 7.56641 0.386719ZM7.3125 11.168C6.29688 11.168 5.42448 10.8099 4.69531 10.0938C3.96615 9.36458 3.60156 8.48568 3.60156 7.45703C3.60156 6.44141 3.96615 5.56901 4.69531 4.83984C5.42448 4.11068 6.29688 3.74609 7.3125 3.74609C8.34115 3.74609 9.21354 4.11068 9.92969 4.83984C10.6589 5.56901 11.0234 6.44141 11.0234 7.45703C11.0234 8.48568 10.6589 9.36458 9.92969 10.0938C9.21354 10.8099 8.34115 11.168 7.3125 11.168Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="contact-list_text">
                                <h5>Neema Studio</h5>
                                <a href="https://goo.gl/maps/jKr6EyJPUmnzJMNU8" target="_blank">1035 N Sycamore<br>Avenue
                                    Hollywood, CA 90040</a>
                            </div>
                        </li>
                        <li class="mb-xs-30 mb-lg-50">
                            <div class="contact-icon">
                                <svg viewBox="0 0 20 21" width="20" height="21" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.9609 15.7383C19.9349 15.6602 19.8307 15.5625 19.6484 15.4453C19.4661 15.3151 19.2122 15.1654 18.8867 14.9961C18.7956 14.944 18.6849 14.8854 18.5547 14.8203C18.4245 14.7422 18.2747 14.6576 18.1055 14.5664C17.9492 14.4753 17.793 14.3906 17.6367 14.3125C17.4805 14.2214 17.3372 14.1432 17.207 14.0781C17.0768 14 16.9466 13.9284 16.8164 13.8633C16.6862 13.7852 16.5625 13.707 16.4453 13.6289C16.4323 13.6159 16.3932 13.5898 16.3281 13.5508C16.276 13.5117 16.1979 13.4531 16.0938 13.375C15.9896 13.3099 15.8919 13.2513 15.8008 13.1992C15.7227 13.1471 15.651 13.1081 15.5859 13.082C15.5208 13.043 15.4557 13.0169 15.3906 13.0039C15.3255 12.9909 15.2539 12.9844 15.1758 12.9844C15.0846 12.9844 14.9805 13.0169 14.8633 13.082C14.7461 13.1471 14.6159 13.2448 14.4727 13.375C14.3294 13.5182 14.1927 13.6615 14.0625 13.8047C13.9323 13.9479 13.8086 14.0977 13.6914 14.2539C13.5742 14.4232 13.4505 14.5794 13.3203 14.7227C13.2031 14.8659 13.0794 15.0091 12.9492 15.1523C12.806 15.2826 12.6823 15.3802 12.5781 15.4453C12.474 15.5104 12.3763 15.543 12.2852 15.543C12.2461 15.543 12.2005 15.5365 12.1484 15.5234C12.0964 15.5104 12.0378 15.4974 11.9727 15.4844C11.9076 15.4583 11.849 15.4388 11.7969 15.4258C11.7448 15.3997 11.7057 15.3737 11.6797 15.3477C11.6406 15.3346 11.5951 15.3151 11.543 15.2891C11.4909 15.25 11.4193 15.2044 11.3281 15.1523C11.25 15.1003 11.1849 15.0612 11.1328 15.0352C11.0938 15.0091 11.0742 14.9961 11.0742 14.9961C10.4232 14.6315 9.81771 14.2474 9.25781 13.8438C8.69792 13.4271 8.1901 12.9844 7.73438 12.5156C7.26562 12.0599 6.82292 11.5521 6.40625 10.9922C6.0026 10.4323 5.61849 9.82682 5.25391 9.17578C5.25391 9.17578 5.24089 9.15625 5.21484 9.11719C5.1888 9.0651 5.14974 9 5.09766 8.92188C5.04557 8.83073 5 8.75911 4.96094 8.70703C4.9349 8.65495 4.91536 8.60938 4.90234 8.57031C4.8763 8.54427 4.85026 8.50521 4.82422 8.45312C4.8112 8.40104 4.79167 8.34245 4.76562 8.27734C4.7526 8.21224 4.73958 8.15365 4.72656 8.10156C4.71354 8.04948 4.70703 8.00391 4.70703 7.96484C4.70703 7.8737 4.73958 7.77604 4.80469 7.67188C4.86979 7.56771 4.96745 7.44401 5.09766 7.30078C5.24089 7.17057 5.38411 7.04688 5.52734 6.92969C5.67057 6.79948 5.82682 6.67578 5.99609 6.55859C6.15234 6.44141 6.30208 6.31771 6.44531 6.1875C6.58854 6.05729 6.73177 5.92057 6.875 5.77734C7.00521 5.63411 7.10286 5.50391 7.16797 5.38672C7.23307 5.26953 7.26562 5.16536 7.26562 5.07422C7.26562 4.99609 7.25911 4.92448 7.24609 4.85938C7.23307 4.79427 7.20703 4.72917 7.16797 4.66406C7.14193 4.59896 7.10286 4.52734 7.05078 4.44922C6.9987 4.35807 6.9401 4.26042 6.875 4.15625C6.79688 4.05208 6.73828 3.97396 6.69922 3.92188C6.66016 3.85677 6.63411 3.81771 6.62109 3.80469C6.54297 3.6875 6.46484 3.5638 6.38672 3.43359C6.32161 3.30339 6.25 3.17318 6.17188 3.04297C6.10677 2.91276 6.02865 2.76953 5.9375 2.61328C5.85938 2.45703 5.77474 2.30078 5.68359 2.14453C5.59245 1.97526 5.50781 1.82552 5.42969 1.69531C5.36458 1.5651 5.30599 1.45443 5.25391 1.36328C5.08464 1.03776 4.9349 0.783854 4.80469 0.601562C4.6875 0.419271 4.58984 0.315104 4.51172 0.289062C4.47266 0.276042 4.42708 0.269531 4.375 0.269531C4.32292 0.25651 4.26432 0.25 4.19922 0.25C4.06901 0.25 3.91927 0.263021 3.75 0.289062C3.59375 0.315104 3.41146 0.347656 3.20312 0.386719C2.99479 0.438802 2.80599 0.490885 2.63672 0.542969C2.48047 0.595052 2.34375 0.647135 2.22656 0.699219C1.99219 0.790365 1.74479 0.985677 1.48438 1.28516C1.23698 1.57161 0.983073 1.94922 0.722656 2.41797C0.488281 2.86068 0.30599 3.30339 0.175781 3.74609C0.0585938 4.1888 0 4.63151 0 5.07422C0 5.19141 0 5.3151 0 5.44531C0.0130208 5.5625 0.0325521 5.6862 0.0585938 5.81641C0.0716146 5.93359 0.0911458 6.0638 0.117188 6.20703C0.143229 6.33724 0.182292 6.48047 0.234375 6.63672C0.273438 6.77995 0.30599 6.91016 0.332031 7.02734C0.371094 7.13151 0.403646 7.22266 0.429688 7.30078C0.455729 7.37891 0.494792 7.48307 0.546875 7.61328C0.598958 7.74349 0.657552 7.89974 0.722656 8.08203C0.800781 8.27734 0.859375 8.43359 0.898438 8.55078C0.9375 8.66797 0.963542 8.74609 0.976562 8.78516C1.14583 9.25391 1.32812 9.69661 1.52344 10.1133C1.71875 10.5169 1.93359 10.901 2.16797 11.2656C2.53255 11.8776 2.96875 12.4961 3.47656 13.1211C3.9974 13.7461 4.57682 14.3841 5.21484 15.0352C5.86589 15.6732 6.50391 16.2526 7.12891 16.7734C7.75391 17.2812 8.3724 17.7174 8.98438 18.082C9.34896 18.3164 9.73307 18.5312 10.1367 18.7266C10.5534 18.9219 10.9961 19.1042 11.4648 19.2734C11.5039 19.2865 11.582 19.3125 11.6992 19.3516C11.8164 19.3906 11.9727 19.4492 12.168 19.5273C12.3503 19.5924 12.5065 19.651 12.6367 19.7031C12.7669 19.7552 12.8711 19.7943 12.9492 19.8203C13.0273 19.8464 13.1185 19.8724 13.2227 19.8984C13.3398 19.9375 13.4701 19.9766 13.6133 20.0156C13.7695 20.0677 13.9128 20.1068 14.043 20.1328C14.1862 20.1589 14.3164 20.1784 14.4336 20.1914C14.5638 20.2174 14.6875 20.2305 14.8047 20.2305C14.9349 20.2435 15.0586 20.25 15.1758 20.25C15.6185 20.25 16.0612 20.1849 16.5039 20.0547C16.9466 19.9375 17.3893 19.7617 17.832 19.5273C18.3008 19.2669 18.6784 19.013 18.9648 18.7656C19.2643 18.5052 19.4596 18.2578 19.5508 18.0234C19.6029 17.9062 19.6549 17.7695 19.707 17.6133C19.7591 17.444 19.8112 17.2552 19.8633 17.0469C19.9023 16.8385 19.9349 16.6562 19.9609 16.5C19.987 16.3307 20 16.181 20 16.0508C20 15.9857 19.9935 15.9271 19.9805 15.875C19.9805 15.8229 19.974 15.7773 19.9609 15.7383Z" />
                                </svg>
                            </div>
                            <div class="contact-list_text">
                                <h5>Numéros de téléphone</h5>
                                <a href="tel:+18007654321">1 (800) 765-43-21</a>
                                <a href="fax:+18007654323">1 (800) 765-43-23 (fax)</a>
                            </div>
                        </li>
                        <li class="mb-xs-30 mb-lg-50">
                            <div class="contact-icon">
                                <svg width="20" height="21" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0.25C8.61979 0.25 7.32422 0.516927 6.11328 1.05078C4.90234 1.57161 3.84115 2.28776 2.92969 3.19922C2.03125 4.09766 1.3151 5.15234 0.78125 6.36328C0.260417 7.57422 0 8.86979 0 10.25C0 11.6302 0.260417 12.9258 0.78125 14.1367C1.3151 15.3477 2.03125 16.4089 2.92969 17.3203C3.84115 18.2188 4.90234 18.9284 6.11328 19.4492C7.32422 19.9831 8.61979 20.25 10 20.25C11.3802 20.25 12.6758 19.9831 13.8867 19.4492C15.0977 18.9284 16.1523 18.2188 17.0508 17.3203C17.9622 16.4089 18.6784 15.3477 19.1992 14.1367C19.7331 12.9258 20 11.6302 20 10.25C20 8.86979 19.7331 7.57422 19.1992 6.36328C18.6784 5.15234 17.9622 4.09766 17.0508 3.19922C16.1523 2.28776 15.0977 1.57161 13.8867 1.05078C12.6758 0.516927 11.3802 0.25 10 0.25ZM10 18.2578C8.90625 18.2578 7.87109 18.0495 6.89453 17.6328C5.91797 17.2031 5.0651 16.6302 4.33594 15.9141C3.61979 15.1849 3.04688 14.332 2.61719 13.3555C2.20052 12.3789 1.99219 11.3438 1.99219 10.25C1.99219 9.15625 2.20052 8.12109 2.61719 7.14453C3.04688 6.16797 3.61979 5.32161 4.33594 4.60547C5.0651 3.8763 5.91797 3.30339 6.89453 2.88672C7.87109 2.45703 8.90625 2.24219 10 2.24219C11.0938 2.24219 12.1289 2.45703 13.1055 2.88672C14.082 3.30339 14.9284 3.8763 15.6445 4.60547C16.3737 5.32161 16.9466 6.16797 17.3633 7.14453C17.793 8.12109 18.0078 9.15625 18.0078 10.25C18.0078 11.3438 17.793 12.3789 17.3633 13.3555C16.9466 14.332 16.3737 15.1849 15.6445 15.9141C14.9284 16.6302 14.082 17.2031 13.1055 17.6328C12.1289 18.0495 11.0938 18.2578 10 18.2578ZM10.5078 5.25H9.00391V11.2461L14.1992 14.4492L15 13.1406L10.5078 10.4453V5.25Z" />
                                </svg>
                            </div>
                            <div class="contact-list_text">
                                <h5>Heures de travail</h5>
                                <p>Lun-Ven: 9:00 – 17:00</p>
                                <p>Sam-DIm: 11:00 – 16:00</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container pt-xs-25 pt-md-25 pt-lg-60">
                <div class="row">
                    <div class="col-lg-6 pt-xs-25 pt-md-25 pt-lg-60">
                        <div class="contact-text">
                            <h3>Saviez-vous?</h3>
                            <ul>
                                <li>
                                    <p>Nous proposons un service de coaching voix off et de production de démos. S'il vous
                                        plaît contactez <a href="mailto:info@Neemarecordingstudio.com"
                                            class="theme-color">info@Neemarecordingstudio.com</a> pour plus d'informations.
                                    </p>
                                </li>
                                <li>
                                    <p>Vous pouvez écouter et contribuer à une session d'enregistrement Neema via Skype.
                                        S'il te plaît
                                        ajoutez le nom Skype "Neema" (sans les guillemets) à votre liste de contacts.</p>
                                </li>
                                <li>
                                    <p>Vous pouvez visiter le studio pour discuter, discuter de votre projet à venir ou
                                        diriger
                                        votre séance. Veuillez nous envoyer un courriel à <a
                                            href="mailto:info@Neemarecordingstudio.com"
                                            class="theme-color">info@Neemarecordingstudio.com</a> pour prendre des
                                        dispositions.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-xs-25 pt-md-25 pt-lg-60">
                        <h3>Formulaire de contact</h3>
                        <form action="#" class="contact-form" id="contactform" method="post" novalidate="novalidate">
                            <input type="text" name="name" placeholder="Votre bom *">
                            <input type="text" name="email" placeholder="Votre adresse mail *">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" class="button white btn-border">

                                Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contacts -->
    </main>
@endsection
