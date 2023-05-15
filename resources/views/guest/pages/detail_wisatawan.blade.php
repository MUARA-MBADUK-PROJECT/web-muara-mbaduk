@extends('layouts.user.app')
@section('conten')
    <x-parts.header>
        <h1>Detail Wisatawan</h1>
    </x-parts.header>
    <div class="h-auto w-screen bg-white flex p-28 justify-center flex-col">
        <div class="flex justify-between flex-row px-3">
            <div class="text-left">
                <h2 class="text-text-black font-bold text-xl">Detail Wisatawan / Pengunjung</h2>
                <h3 class="text-text-gray text-base mt-2">Masukan beberapa informasi mengenai data diri kamu</h3>
            </div>
            <div class="text-right">
                <h2 class="text-xl font-bold">5 Orang</h2>
            </div>
        </div>
        <div class="mt-12 flex justify-between px-3 border-b rounded-sm border-text-gray p-7">
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
                    <h2>Gus Roni Alamin</h2>
                    <h2 class="mt-1">319028301903029</h2>
                </div>
            </div>
            <div class="mx-3">
                <button
                    class="flex justify-center h-8 w-28 bg-text-blue hover:bg-blue-700 text-white text-xs font-bold rounded py-2">
                    ISI DATA<svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </button>
            </div>

        </div>
        <div class="mt-3 flex justify-between px-3 border-b rounded-sm border-text-gray p-7">
            <div class="flex space-x-4 mx-3"><svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375"
                        stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z"
                        stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="text-base font-normal text-text-gray">
                    <h2>Belum ada nama</h2>
                    <h2 class="mt-1">Belum ada NIK</h2>
                </div>
            </div>
            <div class="mx-3">
                <button
                    class="flex justify-center h-8 w-28 bg-text-blue hover:bg-blue-700 text-white text-xs font-bold rounded py-2">
                    ISI DATA<svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </button>
            </div>

        </div>
        <div class="mt-3 flex justify-between px-3 border-b rounded-sm border-text-gray p-7">
            <div class="flex space-x-4 mx-3"><svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375"
                        stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z"
                        stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="text-base font-normal text-text-gray">
                    <h2>Belum ada nama</h2>
                    <h2 class="mt-1">Belum ada NIK</h2>
                </div>
            </div>
            <div class="mx-3">
                <button
                    class="flex justify-center h-8 w-28 bg-text-blue hover:bg-blue-700 text-white text-xs font-bold rounded py-2">
                    ISI DATA<svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </button>
            </div>

        </div>
        <div class="mt-3 flex justify-between px-3 border-b rounded-sm border-text-gray p-7">
            <div class="flex space-x-4 mx-3"><svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375"
                        stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z"
                        stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="text-base font-normal text-text-gray">
                    <h2>Belum ada nama</h2>
                    <h2 class="mt-1">Belum ada NIK</h2>
                </div>
            </div>
            <div class="mx-3">
                <button
                    class="flex justify-center h-8 w-28 bg-text-blue hover:bg-blue-700 text-white text-xs font-bold rounded py-2">
                    ISI DATA<svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </button>
            </div>

        </div>
        <div class="mt-3 flex justify-between px-3 border-b rounded-sm border-text-gray p-7">
            <div class="flex space-x-4 mx-3"><svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375"
                        stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z"
                        stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="text-base font-normal text-text-gray">
                    <h2>Belum ada nama</h2>
                    <h2 class="mt-1">Belum ada NIK</h2>
                </div>
            </div>
            <div class="mx-3">
                <button
                    class="flex justify-center h-8 w-28 bg-text-blue hover:bg-blue-700 text-white text-xs font-bold rounded py-2">
                    ISI DATA<svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </button>
            </div>
        </div>
        <div class="flex justify-between flex-row px-3 mt-20 py-2">
            <div class="text-left">
                <h2 class="text-text-black font-bold text-xl">Detail Kendaraan</h2>
                <h3 class="text-text-gray text-base mt-2">Masukan beberapa informasi mengenai data kendaraan yang kamu
                    bawa</h3>
            </div>
            <div class="text-right">
                <h2 class="text-xl font-bold">1 Kendaraan</h2>
            </div>
        </div>
        <div class="mt-6 flex justify-between px-3 border-b rounded-sm border-text-gray mb-14 p-7">
            <div class="flex space-x-4 mx-3"><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="path-1-outside-1_161_452" maskUnits="userSpaceOnUse" x="0.625" y="10.25" width="28" height="28" fill="black">
                <rect fill="white" x="0.625" y="10.25" width="28" height="28"/>
                <path d="M5.30839 30.9916C5.30839 33.3618 7.22983 35.2833 9.60004 35.2833C11.9703 35.2833 13.8917 33.3618 13.8917 30.9916C13.8917 28.6214 11.9703 26.7 9.60004 26.7C7.22983 26.7 5.30839 28.6214 5.30839 30.9916Z"/>
                </mask>
                <path d="M11.3167 13.825L12.2111 14.2722V14.2722L11.3167 13.825ZM8.74171 18.975L9.63614 19.4222C9.62469 19.4451 9.61237 19.4675 9.5992 19.4895L8.74171 18.975ZM3.59172 30.9916L3.59172 29.9916H3.59172V30.9916ZM4.5671 29.9916C5.11938 29.9916 5.5671 30.4393 5.5671 30.9916C5.5671 31.5439 5.11938 31.9916 4.5671 31.9916V29.9916ZM15.6084 31.9916C15.0561 31.9916 14.6084 31.5439 14.6084 30.9916C14.6084 30.4393 15.0561 29.9916 15.6084 29.9916V31.9916ZM27.625 29.9916C28.1773 29.9916 28.625 30.4393 28.625 30.9916C28.625 31.5439 28.1773 31.9916 27.625 31.9916V29.9916ZM13.8917 12.25C13.6503 12.25 13.434 12.343 13.155 12.6707C12.8456 13.0342 12.5652 13.5642 12.2111 14.2722L10.4223 13.3778C10.7549 12.7125 11.1378 11.955 11.632 11.3743C12.1568 10.7579 12.8846 10.25 13.8917 10.25V12.25ZM12.2111 14.2722L9.63614 19.4222L7.84728 18.5278L10.4223 13.3778L12.2111 14.2722ZM8.74171 18.975C9.5992 19.4895 9.59876 19.4902 9.59831 19.491C9.59816 19.4912 9.5977 19.492 9.5974 19.4925C9.59679 19.4935 9.59616 19.4945 9.59553 19.4956C9.59426 19.4976 9.59295 19.4998 9.59159 19.502C9.58888 19.5063 9.586 19.5109 9.58294 19.5157C9.57681 19.5253 9.56996 19.5357 9.56235 19.5469C9.54714 19.5693 9.5289 19.5947 9.50734 19.6227C9.46419 19.6786 9.40788 19.7445 9.33616 19.8162C9.19199 19.9604 8.98914 20.1245 8.71235 20.2783C8.15461 20.5882 7.33834 20.8333 6.16672 20.8333V18.8333C7.05509 18.8333 7.52631 18.6493 7.74107 18.53C7.85053 18.4692 7.90518 18.4188 7.92195 18.402C7.93069 18.3932 7.93072 18.3921 7.92377 18.4011C7.92032 18.4055 7.91516 18.4125 7.90849 18.4223C7.90516 18.4272 7.90146 18.4328 7.8974 18.4392C7.89538 18.4423 7.89326 18.4457 7.89106 18.4493C7.88996 18.451 7.88884 18.4529 7.8877 18.4547C7.88713 18.4557 7.88655 18.4566 7.88597 18.4576C7.88568 18.458 7.88524 18.4588 7.8851 18.459C7.88466 18.4598 7.88422 18.4605 8.74171 18.975ZM6.16672 20.8333C5.5727 20.8333 4.68509 20.9824 3.98355 21.3865C3.33175 21.762 2.87506 22.3227 2.87506 23.2666H0.875061C0.875061 21.464 1.84893 20.308 2.98531 19.6534C4.07196 19.0275 5.33018 18.8333 6.16672 18.8333V20.8333ZM2.87506 23.2666V29.275H0.875061V23.2666H2.87506ZM2.87506 29.275C2.87506 29.3393 2.92856 29.5287 3.13326 29.7334C3.33795 29.9381 3.5274 29.9916 3.59172 29.9916L3.59173 31.9916C2.83673 31.9916 2.16784 31.5964 1.71904 31.1476C1.27024 30.6988 0.875061 30.03 0.875061 29.275H2.87506ZM3.59172 29.9916H4.5671V31.9916H3.59172V29.9916ZM15.6084 29.9916H27.625V31.9916H15.6084V29.9916ZM13.8917 10.25H27.625V12.25H13.8917V10.25ZM7.30839 30.9916C7.30839 32.2573 8.3344 33.2833 9.60004 33.2833V37.2833C6.12526 37.2833 3.30839 34.4664 3.30839 30.9916H7.30839ZM9.60004 33.2833C10.8657 33.2833 11.8917 32.2573 11.8917 30.9916H15.8917C15.8917 34.4664 13.0748 37.2833 9.60004 37.2833V33.2833ZM11.8917 30.9916C11.8917 29.726 10.8657 28.7 9.60004 28.7V24.7C13.0748 24.7 15.8917 27.5168 15.8917 30.9916H11.8917ZM9.60004 28.7C8.3344 28.7 7.30839 29.726 7.30839 30.9916H3.30839C3.30839 27.5168 6.12526 24.7 9.60004 24.7V28.7Z" fill="#1E1E1E" mask="url(#path-1-outside-1_161_452)"/>
                <mask id="path-3-outside-2_161_452" maskUnits="userSpaceOnUse" x="17.0273" y="10.25" width="28" height="28" fill="black">
                <rect fill="white" x="17.0273" y="10.25" width="28" height="28"/>
                <path d="M40.344 30.9916C40.344 33.3618 38.4225 35.2833 36.0523 35.2833C33.6821 35.2833 31.7606 33.3618 31.7606 30.9916C31.7606 28.6214 33.6821 26.7 36.0523 26.7C38.4225 26.7 40.344 28.6214 40.344 30.9916Z"/>
                </mask>
                <path d="M34.3356 13.825L33.4412 14.2722V14.2722L34.3356 13.825ZM36.9106 18.975L36.0162 19.4222C36.0277 19.4451 36.04 19.4675 36.0531 19.4895L36.9106 18.975ZM42.0606 30.9916L42.0606 29.9916H42.0606V30.9916ZM41.0852 29.9916C40.533 29.9916 40.0852 30.4393 40.0852 30.9916C40.0852 31.5439 40.533 31.9916 41.0852 31.9916V29.9916ZM30.044 31.9916C30.5963 31.9916 31.044 31.5439 31.044 30.9916C31.044 30.4393 30.5963 29.9916 30.044 29.9916V31.9916ZM18.0273 29.9916C17.4751 29.9916 17.0273 30.4393 17.0273 30.9916C17.0273 31.5439 17.4751 31.9916 18.0273 31.9916V29.9916ZM31.7606 12.25C32.002 12.25 32.2184 12.343 32.4973 12.6707C32.8068 13.0342 33.0872 13.5642 33.4412 14.2722L35.2301 13.3778C34.8974 12.7125 34.5146 11.955 34.0203 11.3743C33.4956 10.7579 32.7678 10.25 31.7606 10.25V12.25ZM33.4412 14.2722L36.0162 19.4222L37.8051 18.5278L35.2301 13.3778L33.4412 14.2722ZM36.9106 18.975C36.0531 19.4895 36.0536 19.4902 36.054 19.491C36.0542 19.4912 36.0546 19.492 36.0549 19.4925C36.0556 19.4935 36.0562 19.4945 36.0568 19.4956C36.0581 19.4976 36.0594 19.4998 36.0607 19.502C36.0635 19.5063 36.0663 19.5109 36.0694 19.5157C36.0755 19.5253 36.0824 19.5357 36.09 19.5469C36.1052 19.5693 36.1234 19.5947 36.145 19.6227C36.1882 19.6786 36.2445 19.7445 36.3162 19.8162C36.4604 19.9604 36.6632 20.1245 36.94 20.2783C37.4977 20.5882 38.314 20.8333 39.4856 20.8333V18.8333C38.5973 18.8333 38.126 18.6493 37.9113 18.53C37.8018 18.4692 37.7472 18.4188 37.7304 18.402C37.7217 18.3932 37.7216 18.3921 37.7286 18.4011C37.732 18.4055 37.7372 18.4125 37.7438 18.4223C37.7472 18.4272 37.7509 18.4328 37.7549 18.4392C37.757 18.4423 37.7591 18.4457 37.7613 18.4493C37.7624 18.451 37.7635 18.4529 37.7646 18.4547C37.7652 18.4557 37.7658 18.4566 37.7664 18.4576C37.7667 18.458 37.7671 18.4588 37.7672 18.459C37.7677 18.4598 37.7681 18.4605 36.9106 18.975ZM39.4856 20.8333C40.0796 20.8333 40.9673 20.9824 41.6688 21.3865C42.3206 21.762 42.7773 22.3227 42.7773 23.2666H44.7773C44.7773 21.464 43.8034 20.308 42.667 19.6534C41.5804 19.0275 40.3222 18.8333 39.4856 18.8333V20.8333ZM42.7773 23.2666V29.275H44.7773V23.2666H42.7773ZM42.7773 29.275C42.7773 29.3393 42.7238 29.5287 42.5191 29.7334C42.3144 29.9381 42.1249 29.9916 42.0606 29.9916L42.0606 31.9916C42.8156 31.9916 43.4845 31.5964 43.9333 31.1476C44.3821 30.6988 44.7773 30.03 44.7773 29.275H42.7773ZM42.0606 29.9916H41.0852V31.9916H42.0606V29.9916ZM30.044 29.9916H18.0273V31.9916H30.044V29.9916ZM31.7606 10.25H18.0273V12.25H31.7606V10.25ZM38.344 30.9916C38.344 32.2573 37.3179 33.2833 36.0523 33.2833V37.2833C39.5271 37.2833 42.344 34.4664 42.344 30.9916H38.344ZM36.0523 33.2833C34.7867 33.2833 33.7606 32.2573 33.7606 30.9916H29.7606C29.7606 34.4664 32.5775 37.2833 36.0523 37.2833V33.2833ZM33.7606 30.9916C33.7606 29.726 34.7867 28.7 36.0523 28.7V24.7C32.5775 24.7 29.7606 27.5168 29.7606 30.9916H33.7606ZM36.0523 28.7C37.3179 28.7 38.344 29.726 38.344 30.9916H42.344C42.344 27.5168 39.5271 24.7 36.0523 24.7V28.7Z" fill="#1E1E1E" mask="url(#path-3-outside-2_161_452)"/>
                <path d="M31.3691 14.0625H24.0639C24.0086 14.0625 23.9639 14.1073 23.9639 14.1625V21.1413C23.9639 21.1965 24.0086 21.2413 24.0639 21.2413H34.998C35.0731 21.2413 35.1214 21.1617 35.0868 21.0951L31.4578 14.1164C31.4406 14.0833 31.4064 14.0625 31.3691 14.0625Z" stroke="#1E1E1E" stroke-width="2"/>
                <path d="M14.6422 14.0625H21.9474C22.0026 14.0625 22.0474 14.1073 22.0474 14.1625V21.1413C22.0474 21.1965 22.0026 21.2413 21.9474 21.2413H11.0132C10.9382 21.2413 10.8899 21.1617 10.9245 21.0951L14.5534 14.1164C14.5706 14.0833 14.6048 14.0625 14.6422 14.0625Z" stroke="#1E1E1E" stroke-width="2"/>
                </svg>
                
                <div class="text-base font-normal text-text-gray">
                    <h2>Belum ada info plat nomor</h2>
                    <h2 class="mt-1">Kendaraan roda 4</h2>
                </div>
            </div>
            <div class="mx-3">
                <button
                    class="flex justify-center h-8 w-28 bg-text-blue hover:bg-blue-700 text-white text-xs font-bold rounded py-2">
                    ISI DATA<svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </button>
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
