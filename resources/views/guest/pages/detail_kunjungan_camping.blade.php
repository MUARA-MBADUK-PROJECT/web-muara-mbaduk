@extends('layouts.user.app')
@section('conten')
    <x-parts.header>
        <h1>Detail Kunjungan</h1>
    </x-parts.header>
    <div class="h-auto w-screen bg-white flex p-28 justify-center flex-col">
        <div class="text-left">
            <h2 class="text-text-black font-bold text-xl">Tanggal Berkunjung</h2>
            <h3 class="text-text-gray text-base mt-2">Masukan Tanggal dimana kamu akan berkunjung ke muarambaduk</h3>
            <div class="border-2 border-text-gray rounded flex mt-5">
                <svg id="datePickerIcon" width="20" height="20" viewBox="0 0 35 35" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="grow-0 shrink-0 m-4">
                    <path
                        d="M27.7083 5.8335H7.29167C5.68084 5.8335 4.375 7.13933 4.375 8.75016V29.1668C4.375 30.7777 5.68084 32.0835 7.29167 32.0835H27.7083C29.3192 32.0835 30.625 30.7777 30.625 29.1668V8.75016C30.625 7.13933 29.3192 5.8335 27.7083 5.8335Z"
                        stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M23.3333 2.9165V8.74984" stroke="#939393" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M11.6667 2.9165V8.74984" stroke="#939393" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M4.375 14.5835H30.625" stroke="#939393" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <div class=" flex felx-col justify-center h-14 w-full">
                    <input id="datepicker" name="date" class="text-text-gray text-left h-full w-full text-xl "
                        type="text" required>
                </div>
            </div>
            <h2 class="text-text-black font-bold text-xl mt-5">Apakah kamu akan melakukan kegiatan camping/berkemah?</h2>
            <select id="pertanyaan" name="pertanyaan"
                class="px-3 border-2 border-text-gray rounded mt-5 flex felx-col justify-center h-14 w-full text-text-gray font-medium">
                <option value="ya">Ya, Saya akan melakukan camping</option>
                <option value="tidak">Tidak, Saya tidak melakukan camping</option>

            </select>
            <button class="h-14 w-full bg-text-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-12">
                Cek tiket dan harga
            </button>
        </div>
        <div class="px-3 mt-12 border-2 rounded-sm border-text-gray p-5">
            <div class="flex flex-row justify-between">
                <div class="text-left">
                    <h2 class="text-text-black text-xl mt-4 mx-3 font-medium">Tiket Wisata Alam</h2>
                    <h2 class="text-text-blue text-lg mx-3 font-bold">Muara Mbaduk</h2>
                </div>
                <div class="text-right">
                    <h2 class="text-text-gray text-lg mt-4 mx-3 font-medium">Tanggal 26 Februari 2023 </h2>
                    <h2 class="text-text-gray text-lg mx-3 font-medium">Hari Akhir Pekan / Libur</h2>
                </div>
            </div>
            <div class="mt-14 flex justify-between px-3 border-b rounded-sm border-text-gray p-10">
                <div class="flex space-x-4 mx-3"><svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375"
                            stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z"
                            stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="text-base font-normal">
                        <h2 class="text-text-blue">Rp. 5000</h2>
                        <h2 class="text-text-gray">Wisatawan / Pengunjung</h2>
                    </div>
                </div>
                <div>
                    <h1 class=" -mx-10 text-text-gray text-xl font-bold">x 5</h1>
                </div>
                <div class="text-right mx-3">
                    <div>
                        <h1 class="text-xl font-medium">Rp. 25.000</h1>
                    </div>
                    <div class="flex space-x-5 mt-7">
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_7)">
                                <rect width="60" height="33" rx="4" fill="#939393" />
                                <path d="M35.744 14.496V19.04H21.664V14.496H35.744Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_7">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_9)">
                                <rect width="60" height="33" rx="4" fill="#1570BF" />
                                <path
                                    d="M40.208 19.264H34.64V24.96H29.456V19.264H23.888V14.368H29.456V8.64H34.64V14.368H40.208V19.264Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_9">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>

                </div>
            </div>
            <div class="mt-8 flex justify-between px-3 border-b rounded-sm border-text-gray p-10">
                <div class="flex space-x-4 mx-3"><svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.3996 30.2382C7.03592 30.6539 7.07804 31.2856 7.49367 31.6493C7.90931 32.013 8.54107 31.9709 8.90475 31.5552L14.6377 25.0033C15.3554 25.6016 16.5152 27.0758 17.0299 30.1644C17.1103 30.6466 17.5275 31 18.0163 31H26.087C26.5702 31 26.9844 30.6544 27.0708 30.1789C27.3415 28.6902 28.212 26.4023 29.9233 24.5046C30.4508 23.9197 31.0584 23.371 31.7556 22.8932L35.9737 30.4856C36.2419 30.9684 36.8507 31.1424 37.3335 30.8742C37.8162 30.6059 37.9902 29.9971 37.722 29.5144L33.5129 21.938C34.7156 21.4372 36.1169 21.1359 37.7446 21.1359C38.2968 21.1359 38.7446 20.6882 38.7446 20.1359C38.7446 16.9013 36.8093 9.96161 28.9733 8.39442C28.6091 8.32159 28.2346 8.45655 28.0006 8.74493C27.7667 9.0333 27.7117 9.42759 27.858 9.76892C28.1007 10.3353 28.3836 11.088 28.6331 11.903L25.6681 10.29C25.1829 10.0261 24.5757 10.2055 24.3118 10.6906C24.0479 11.1758 24.2272 11.783 24.7124 12.0469L29.2196 14.4988C29.2838 15.0124 29.3005 15.4738 29.2625 15.8597C29.2491 15.9954 29.2299 16.113 29.2069 16.2145C28.0477 15.8612 26.5116 15.634 24.9009 15.8492C23.0184 16.1007 21.0306 16.9606 19.4727 18.9041C18.0812 18.3291 16.1432 17.6321 14.1208 17.1056C11.7468 16.4876 9.09079 16.0588 7.05932 16.4651C7.04377 16.4682 7.02829 16.4717 7.0129 16.4755C6.38915 16.6314 5.41321 16.9102 4.49186 17.2459C4.0315 17.4137 3.56853 17.6015 3.16334 17.802C2.77934 17.992 2.36329 18.2334 2.06464 18.532C1.8771 18.7196 1.77174 18.9739 1.77174 19.2391V21.9293C1.77174 22.2373 1.91362 22.528 2.15633 22.7175C2.39905 22.9071 2.71554 22.9742 3.01428 22.8995C3.5943 22.7545 4.56 22.535 5.55308 22.3524C6.56537 22.1663 7.53359 22.0326 8.15218 22.0326C9.42945 22.0326 10.7877 22.5867 12.9174 23.9322L7.3996 30.2382ZM32.5987 27.7673C32.9262 27.3226 32.8312 26.6966 32.3865 26.3691C31.9418 26.0416 31.3158 26.1365 30.9883 26.5812C30.0509 27.854 29.5534 29.3975 29.5711 30.9781C29.5888 32.5588 30.1207 34.0907 31.0863 35.3422C32.052 36.5938 33.3989 37.4968 34.9234 37.9148C36.4479 38.3329 38.067 38.2431 39.536 37.6592C41.005 37.0753 42.2438 36.0289 43.0653 34.6783C43.8867 33.3278 44.2461 31.7464 44.089 30.1735C43.9319 28.6006 43.2669 27.1216 42.1945 25.9601C41.1222 24.7987 39.7008 24.0181 38.1454 23.7362C37.602 23.6377 37.0816 23.9984 36.9831 24.5418C36.8847 25.0853 37.2454 25.6057 37.7888 25.7041C38.9167 25.9085 39.9475 26.4747 40.7251 27.3169C41.5027 28.1591 41.9849 29.2316 42.0989 30.3723C42.2128 31.5129 41.9522 32.6596 41.3565 33.639C40.7608 34.6184 39.8624 35.3772 38.7972 35.8007C37.732 36.2241 36.5578 36.2892 35.4523 35.986C34.3468 35.6829 33.3701 35.028 32.6698 34.1205C31.9695 33.2129 31.5838 32.102 31.571 30.9558C31.5582 29.8095 31.9189 28.6903 32.5987 27.7673ZM8.99444 25.6872C9.53965 25.7754 10.0531 25.4048 10.1412 24.8596C10.2294 24.3144 9.85885 23.801 9.31365 23.7128C7.75312 23.4605 6.15288 23.7232 4.75491 24.4612C3.35695 25.1992 2.23731 26.3723 1.5653 27.8031C0.893292 29.234 0.705471 30.8447 1.03024 32.3918C1.35501 33.9389 2.17471 35.3381 3.36537 36.3779C4.55603 37.4178 6.05291 38.0416 7.62962 38.1551C9.20633 38.2686 10.7771 37.8656 12.1045 37.0071C13.4318 36.1486 14.4435 34.8812 14.9865 33.3966C15.5295 31.912 15.5744 30.2909 15.1143 28.7786C14.9535 28.2502 14.3949 27.9522 13.8665 28.113C13.3381 28.2737 13.0401 28.8324 13.2009 29.3607C13.5345 30.4574 13.502 31.633 13.1082 32.7095C12.7144 33.7861 11.9808 34.7052 11.0182 35.3278C10.0557 35.9504 8.91661 36.2426 7.77323 36.1603C6.62985 36.078 5.54437 35.6256 4.68094 34.8715C3.81751 34.1175 3.22309 33.1028 2.98758 31.9809C2.75206 30.859 2.88827 29.691 3.37558 28.6534C3.8629 27.6158 4.67483 26.7651 5.68859 26.2299C6.70235 25.6947 7.8628 25.5042 8.99444 25.6872Z"
                            stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="text-base font-normal">
                        <h2 class="text-text-blue">Rp. 5000</h2>
                        <h2 class="text-text-gray">Kendaraan Roda 2</h2>
                    </div>
                </div>
                <div>
                    <h1 class="text-text-gray text-xl font-bold">x 0</h1>
                </div>
                <div class="text-right mx-3">
                    <div>
                        <h1 class="text-xl font-medium">Rp. 0</h1>
                    </div>
                    <div class="flex space-x-5 mt-7">
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_7)">
                                <rect width="60" height="33" rx="4" fill="#939393" />
                                <path d="M35.744 14.496V19.04H21.664V14.496H35.744Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_7">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_9)">
                                <rect width="60" height="33" rx="4" fill="#1570BF" />
                                <path
                                    d="M40.208 19.264H34.64V24.96H29.456V19.264H23.888V14.368H29.456V8.64H34.64V14.368H40.208V19.264Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_9">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>

                </div>
            </div>
            <div class="mt-8 flex justify-between px-3 border-b rounded-sm border-text-gray p-10">
                <div class="flex space-x-4 mx-3"><svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-outside-1_161_255" maskUnits="userSpaceOnUse" x="0.625" y="10.25"
                            width="28" height="28" fill="black">
                            <rect fill="white" x="0.625" y="10.25" width="28" height="28" />
                            <path
                                d="M5.30839 30.9916C5.30839 33.3618 7.22983 35.2833 9.60004 35.2833C11.9703 35.2833 13.8917 33.3618 13.8917 30.9916C13.8917 28.6214 11.9703 26.7 9.60004 26.7C7.22983 26.7 5.30839 28.6214 5.30839 30.9916Z" />
                        </mask>
                        <path
                            d="M11.3167 13.825L12.2111 14.2722V14.2722L11.3167 13.825ZM8.74171 18.975L9.63614 19.4222C9.62469 19.4451 9.61237 19.4675 9.5992 19.4895L8.74171 18.975ZM3.59172 30.9916L3.59172 29.9916H3.59172V30.9916ZM4.5671 29.9916C5.11938 29.9916 5.5671 30.4393 5.5671 30.9916C5.5671 31.5439 5.11938 31.9916 4.5671 31.9916V29.9916ZM15.6084 31.9916C15.0561 31.9916 14.6084 31.5439 14.6084 30.9916C14.6084 30.4393 15.0561 29.9916 15.6084 29.9916V31.9916ZM27.625 29.9916C28.1773 29.9916 28.625 30.4393 28.625 30.9916C28.625 31.5439 28.1773 31.9916 27.625 31.9916V29.9916ZM13.8917 12.25C13.6503 12.25 13.434 12.343 13.155 12.6707C12.8456 13.0342 12.5652 13.5642 12.2111 14.2722L10.4223 13.3778C10.7549 12.7125 11.1378 11.955 11.632 11.3743C12.1568 10.7579 12.8846 10.25 13.8917 10.25V12.25ZM12.2111 14.2722L9.63614 19.4222L7.84728 18.5278L10.4223 13.3778L12.2111 14.2722ZM8.74171 18.975C9.5992 19.4895 9.59876 19.4902 9.59831 19.491C9.59816 19.4912 9.5977 19.492 9.5974 19.4925C9.59679 19.4935 9.59616 19.4945 9.59553 19.4956C9.59426 19.4976 9.59295 19.4998 9.59159 19.502C9.58888 19.5063 9.586 19.5109 9.58294 19.5157C9.57681 19.5253 9.56996 19.5357 9.56235 19.5469C9.54714 19.5693 9.5289 19.5947 9.50734 19.6227C9.46419 19.6786 9.40788 19.7445 9.33616 19.8162C9.19199 19.9604 8.98914 20.1245 8.71235 20.2783C8.15461 20.5882 7.33834 20.8333 6.16672 20.8333V18.8333C7.05509 18.8333 7.52631 18.6493 7.74107 18.53C7.85053 18.4692 7.90518 18.4188 7.92195 18.402C7.93069 18.3932 7.93072 18.3921 7.92377 18.4011C7.92032 18.4055 7.91516 18.4125 7.90849 18.4223C7.90516 18.4272 7.90146 18.4328 7.8974 18.4392C7.89538 18.4423 7.89326 18.4457 7.89106 18.4493C7.88996 18.451 7.88884 18.4529 7.8877 18.4547C7.88713 18.4557 7.88655 18.4566 7.88597 18.4576C7.88568 18.458 7.88524 18.4588 7.8851 18.459C7.88466 18.4598 7.88422 18.4605 8.74171 18.975ZM6.16672 20.8333C5.5727 20.8333 4.68509 20.9824 3.98355 21.3865C3.33175 21.762 2.87506 22.3227 2.87506 23.2666H0.875061C0.875061 21.464 1.84893 20.308 2.98531 19.6534C4.07196 19.0275 5.33018 18.8333 6.16672 18.8333V20.8333ZM2.87506 23.2666V29.275H0.875061V23.2666H2.87506ZM2.87506 29.275C2.87506 29.3393 2.92856 29.5287 3.13326 29.7334C3.33795 29.9381 3.5274 29.9916 3.59172 29.9916L3.59173 31.9916C2.83673 31.9916 2.16784 31.5964 1.71904 31.1476C1.27024 30.6988 0.875061 30.03 0.875061 29.275H2.87506ZM3.59172 29.9916H4.5671V31.9916H3.59172V29.9916ZM15.6084 29.9916H27.625V31.9916H15.6084V29.9916ZM13.8917 10.25H27.625V12.25H13.8917V10.25ZM7.30839 30.9916C7.30839 32.2573 8.3344 33.2833 9.60004 33.2833V37.2833C6.12526 37.2833 3.30839 34.4664 3.30839 30.9916H7.30839ZM9.60004 33.2833C10.8657 33.2833 11.8917 32.2573 11.8917 30.9916H15.8917C15.8917 34.4664 13.0748 37.2833 9.60004 37.2833V33.2833ZM11.8917 30.9916C11.8917 29.726 10.8657 28.7 9.60004 28.7V24.7C13.0748 24.7 15.8917 27.5168 15.8917 30.9916H11.8917ZM9.60004 28.7C8.3344 28.7 7.30839 29.726 7.30839 30.9916H3.30839C3.30839 27.5168 6.12526 24.7 9.60004 24.7V28.7Z"
                            fill="#1E1E1E" mask="url(#path-1-outside-1_161_255)" />
                        <mask id="path-3-outside-2_161_255" maskUnits="userSpaceOnUse" x="17.0273" y="10.25"
                            width="28" height="28" fill="black">
                            <rect fill="white" x="17.0273" y="10.25" width="28" height="28" />
                            <path
                                d="M40.344 30.9916C40.344 33.3618 38.4225 35.2833 36.0523 35.2833C33.6821 35.2833 31.7606 33.3618 31.7606 30.9916C31.7606 28.6214 33.6821 26.7 36.0523 26.7C38.4225 26.7 40.344 28.6214 40.344 30.9916Z" />
                        </mask>
                        <path
                            d="M34.3356 13.825L33.4412 14.2722V14.2722L34.3356 13.825ZM36.9106 18.975L36.0162 19.4222C36.0277 19.4451 36.04 19.4675 36.0531 19.4895L36.9106 18.975ZM42.0606 30.9916L42.0606 29.9916H42.0606V30.9916ZM41.0852 29.9916C40.533 29.9916 40.0852 30.4393 40.0852 30.9916C40.0852 31.5439 40.533 31.9916 41.0852 31.9916V29.9916ZM30.044 31.9916C30.5963 31.9916 31.044 31.5439 31.044 30.9916C31.044 30.4393 30.5963 29.9916 30.044 29.9916V31.9916ZM18.0273 29.9916C17.4751 29.9916 17.0273 30.4393 17.0273 30.9916C17.0273 31.5439 17.4751 31.9916 18.0273 31.9916V29.9916ZM31.7606 12.25C32.002 12.25 32.2184 12.343 32.4973 12.6707C32.8068 13.0342 33.0872 13.5642 33.4412 14.2722L35.2301 13.3778C34.8974 12.7125 34.5146 11.955 34.0203 11.3743C33.4956 10.7579 32.7678 10.25 31.7606 10.25V12.25ZM33.4412 14.2722L36.0162 19.4222L37.8051 18.5278L35.2301 13.3778L33.4412 14.2722ZM36.9106 18.975C36.0531 19.4895 36.0536 19.4902 36.054 19.491C36.0542 19.4912 36.0546 19.492 36.0549 19.4925C36.0556 19.4935 36.0562 19.4945 36.0568 19.4956C36.0581 19.4976 36.0594 19.4998 36.0607 19.502C36.0635 19.5063 36.0663 19.5109 36.0694 19.5157C36.0755 19.5253 36.0824 19.5357 36.09 19.5469C36.1052 19.5693 36.1234 19.5947 36.145 19.6227C36.1882 19.6786 36.2445 19.7445 36.3162 19.8162C36.4604 19.9604 36.6632 20.1245 36.94 20.2783C37.4977 20.5882 38.314 20.8333 39.4856 20.8333V18.8333C38.5973 18.8333 38.126 18.6493 37.9113 18.53C37.8018 18.4692 37.7472 18.4188 37.7304 18.402C37.7217 18.3932 37.7216 18.3921 37.7286 18.4011C37.732 18.4055 37.7372 18.4125 37.7438 18.4223C37.7472 18.4272 37.7509 18.4328 37.7549 18.4392C37.757 18.4423 37.7591 18.4457 37.7613 18.4493C37.7624 18.451 37.7635 18.4529 37.7646 18.4547C37.7652 18.4557 37.7658 18.4566 37.7664 18.4576C37.7667 18.458 37.7671 18.4588 37.7672 18.459C37.7677 18.4598 37.7681 18.4605 36.9106 18.975ZM39.4856 20.8333C40.0796 20.8333 40.9673 20.9824 41.6688 21.3865C42.3206 21.762 42.7773 22.3227 42.7773 23.2666H44.7773C44.7773 21.464 43.8034 20.308 42.667 19.6534C41.5804 19.0275 40.3222 18.8333 39.4856 18.8333V20.8333ZM42.7773 23.2666V29.275H44.7773V23.2666H42.7773ZM42.7773 29.275C42.7773 29.3393 42.7238 29.5287 42.5191 29.7334C42.3144 29.9381 42.1249 29.9916 42.0606 29.9916L42.0606 31.9916C42.8156 31.9916 43.4845 31.5964 43.9333 31.1476C44.3821 30.6988 44.7773 30.03 44.7773 29.275H42.7773ZM42.0606 29.9916H41.0852V31.9916H42.0606V29.9916ZM30.044 29.9916H18.0273V31.9916H30.044V29.9916ZM31.7606 10.25H18.0273V12.25H31.7606V10.25ZM38.344 30.9916C38.344 32.2573 37.3179 33.2833 36.0523 33.2833V37.2833C39.5271 37.2833 42.344 34.4664 42.344 30.9916H38.344ZM36.0523 33.2833C34.7867 33.2833 33.7606 32.2573 33.7606 30.9916H29.7606C29.7606 34.4664 32.5775 37.2833 36.0523 37.2833V33.2833ZM33.7606 30.9916C33.7606 29.726 34.7867 28.7 36.0523 28.7V24.7C32.5775 24.7 29.7606 27.5168 29.7606 30.9916H33.7606ZM36.0523 28.7C37.3179 28.7 38.344 29.726 38.344 30.9916H42.344C42.344 27.5168 39.5271 24.7 36.0523 24.7V28.7Z"
                            fill="#1E1E1E" mask="url(#path-3-outside-2_161_255)" />
                        <path
                            d="M31.3691 14.0625H24.0639C24.0086 14.0625 23.9639 14.1073 23.9639 14.1625V21.1413C23.9639 21.1965 24.0086 21.2413 24.0639 21.2413H34.998C35.0731 21.2413 35.1214 21.1617 35.0868 21.0951L31.4578 14.1164C31.4406 14.0833 31.4064 14.0625 31.3691 14.0625Z"
                            stroke="#1E1E1E" stroke-width="2" />
                        <path
                            d="M14.6422 14.0625H21.9474C22.0026 14.0625 22.0474 14.1073 22.0474 14.1625V21.1413C22.0474 21.1965 22.0026 21.2413 21.9474 21.2413H11.0132C10.9382 21.2413 10.8899 21.1617 10.9245 21.0951L14.5534 14.1164C14.5706 14.0833 14.6048 14.0625 14.6422 14.0625Z"
                            stroke="#1E1E1E" stroke-width="2" />
                    </svg>

                    <div class="text-base font-normal">
                        <h2 class="text-text-blue">Rp. 15.000</h2>
                        <h2 class="text-text-gray">Kendaraan Roda 4</h2>
                    </div>
                </div>
                <div>
                    <h1 class="text-text-gray text-xl font-bold">x 1</h1>
                </div>
                <div class="text-right mx-3">
                    <div>
                        <h1 class="text-xl font-medium">Rp. 15.000</h1>
                    </div>
                    <div class="flex space-x-5 mt-7">
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_7)">
                                <rect width="60" height="33" rx="4" fill="#939393" />
                                <path d="M35.744 14.496V19.04H21.664V14.496H35.744Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_7">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_9)">
                                <rect width="60" height="33" rx="4" fill="#1570BF" />
                                <path
                                    d="M40.208 19.264H34.64V24.96H29.456V19.264H23.888V14.368H29.456V8.64H34.64V14.368H40.208V19.264Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_9">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>

                </div>
            </div>
            <div>
                <h2 class="text-text-black text-xl mt-14 mx-3 font-medium">Paket camping yang tersedia</h2>
            </div>
            <div class="mt-4 flex justify-between px-3 border-b rounded-sm border-text-gray p-10">
                <div class="flex space-x-4 mx-3">
                    <img src="{{ asset('resources\images\paket-1.png') }}" width="100" height="100" style="border-radius: 4px">
                    <div>
                        <h2 class="font-bold text-base">Standart 2</h2>
                        <h2 class="text-text-blue text-base">Rp. 115.000</h2>
                        <h2 class="text-text-gray text-nomal text-xs mt-7">Lihat selengkapnya</h2>
                    </div>
                </div>
                <div>
                    <h1 class="text-text-gray text-xl font-bold">x 0</h1>
                </div>
                <div class="text-right mx-3">
                    <div>
                        <h1 class="text-xl font-medium">Rp. 0</h1>
                    </div>
                    <div class="flex space-x-5 mt-7">
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_7)">
                                <rect width="60" height="33" rx="4" fill="#939393" />
                                <path d="M35.744 14.496V19.04H21.664V14.496H35.744Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_7">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_9)">
                                <rect width="60" height="33" rx="4" fill="#1570BF" />
                                <path
                                    d="M40.208 19.264H34.64V24.96H29.456V19.264H23.888V14.368H29.456V8.64H34.64V14.368H40.208V19.264Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_9">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-4 flex justify-between px-3 border-b rounded-sm border-text-gray p-10">
                <div class="flex space-x-4 mx-3">
                    <img src="{{ asset('resources\images\paket-1.png') }}" width="100" height="100" style="border-radius: 4px">
                    <div>
                        <h2 class="font-bold text-base">Standart 2</h2>
                        <h2 class="text-text-blue text-base">Rp. 115.000</h2>
                        <h2 class="text-text-gray text-nomal text-xs mt-7">Lihat selengkapnya</h2>
                    </div>
                </div>
                <div>
                    <h1 class="text-text-gray text-xl font-bold">x 0</h1>
                </div>
                <div class="text-right mx-3">
                    <div>
                        <h1 class="text-xl font-medium">Rp. 0</h1>
                    </div>
                    <div class="flex space-x-5 mt-7">
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_7)">
                                <rect width="60" height="33" rx="4" fill="#939393" />
                                <path d="M35.744 14.496V19.04H21.664V14.496H35.744Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_7">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_9)">
                                <rect width="60" height="33" rx="4" fill="#1570BF" />
                                <path
                                    d="M40.208 19.264H34.64V24.96H29.456V19.264H23.888V14.368H29.456V8.64H34.64V14.368H40.208V19.264Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_9">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-4 flex justify-between px-3 border-b rounded-sm border-text-gray p-10">
                <div class="flex space-x-4 mx-3">
                    <img src="{{ asset('resources\images\paket-1.png') }}" width="100" height="100" style="border-radius: 4px">
                    <div>
                        <h2 class="font-bold text-base">Standart 2</h2>
                        <h2 class="text-text-blue text-base">Rp. 115.000</h2>
                        <h2 class="text-text-gray text-nomal text-xs mt-7">Lihat selengkapnya</h2>
                    </div>
                </div>
                <div>
                    <h1 class="text-text-gray text-xl font-bold">x 0</h1>
                </div>
                <div class="text-right mx-3">
                    <div>
                        <h1 class="text-xl font-medium">Rp. 0</h1>
                    </div>
                    <div class="flex space-x-5 mt-7">
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_7)">
                                <rect width="60" height="33" rx="4" fill="#939393" />
                                <path d="M35.744 14.496V19.04H21.664V14.496H35.744Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_7">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="60" height="33" viewBox="0 0 60 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_159_9)">
                                <rect width="60" height="33" rx="4" fill="#1570BF" />
                                <path
                                    d="M40.208 19.264H34.64V24.96H29.456V19.264H23.888V14.368H29.456V8.64H34.64V14.368H40.208V19.264Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_159_9">
                                    <rect width="60" height="33" rx="4" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex justify-end px-3 p-10">
                <div class="px-72 text-xl font-bold">
                    <h2 class="text-text-gray">Sub Total</h2>
                </div>
                <div class="text-right mx-3">
                    <h1 class="text-xl font-bold text-text-blue">Rp. 40.000</h1>
                </div>

            </div>
        </div>
        <div class="mt-12 border-2 rounded-sm border-text-gray p-14 px-12">
            <div class="flex space-x-28">
                <div>
                    <h1 class="text-xl font-bold">Belum menemukan paket yang sesuai dengan kebutuhanmu?</h1>
                    <h2 class="text-base font-normal">Tenang, kamu bisa membuat pesanan paket spesial sendiri</h2>
                </div> 
                <div>
                    <button class="flex justify-center h-14 w-52 bg-text-blue hover:bg-blue-700 text-white font-bold rounded py-4">
                        Buat Paket  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                                   
                    </button>
                </div>
            </div>
        </div>
        <button class="h-14 w-full bg-text-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-12">
            Berikutnya
        </button>
    </div>



@section('js')
    <script>
        var currentDate = new Date();

        // Get the current date components
        var year = currentDate.getFullYear();
        var month = currentDate.getMonth() + 1; // Month is zero-indexed, so add 1 to get the correct month
        var day = currentDate.getDate();

        $(function() {
            $("#datepicker").datepicker({
                minDate: currentDate,
                dateFormat: "dd MM yy"
            });
        });
    </script>
@endsection
@endsection
