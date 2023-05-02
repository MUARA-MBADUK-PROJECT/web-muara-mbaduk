@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Riwayat Pemesanan</h1>
</x-parts.header>
<article class="container py-20">
    <section>
        <div class="flex justify-between border-b-2 border-text-gray pb-4">
            <div>
                <div class="flex">
                    <div class="grid items-center">
                        <svg width="45" height="37" viewBox="0 0 45 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.9651 36.6279H12.0349C2.80465 36.6279 0 33.8233 0 24.593V23.5465C0 22.6884 0.711628 21.9767 1.56977 21.9767C3.57907 21.9767 5.23256 20.3233 5.23256 18.314C5.23256 16.3047 3.57907 14.6512 1.56977 14.6512C0.711628 14.6512 0 13.9395 0 13.0814V12.0349C0 2.80465 2.80465 0 12.0349 0H32.9651C42.1954 0 45 2.80465 45 12.0349V14.1279C45 14.986 44.2884 15.6977 43.4302 15.6977C41.4209 15.6977 39.7674 17.3512 39.7674 19.3605C39.7674 21.3698 41.4209 23.0233 43.4302 23.0233C44.2884 23.0233 45 23.7349 45 24.593C45 33.8233 42.1954 36.6279 32.9651 36.6279ZM3.13953 24.9279C3.1814 32.1279 4.66744 33.4884 12.0349 33.4884H32.9651C39.9558 33.4884 41.6512 32.2535 41.8395 25.9744C38.8465 25.2628 36.6279 22.5628 36.6279 19.3605C36.6279 16.1581 38.8674 13.4581 41.8605 12.7465V12.0349C41.8605 4.56279 40.4581 3.13953 32.9651 3.13953H12.0349C4.66744 3.13953 3.1814 4.5 3.13953 11.7C6.13256 12.4116 8.37209 15.1116 8.37209 18.314C8.37209 21.5163 6.13256 24.2163 3.13953 24.9279Z" fill="#292D32" />
                            <path d="M18.3142 8.37209C17.456 8.37209 16.7444 7.66047 16.7444 6.80233V1.56977C16.7444 0.711628 17.456 0 18.3142 0C19.1723 0 19.8839 0.711628 19.8839 1.56977V6.80233C19.8839 7.66047 19.1723 8.37209 18.3142 8.37209Z" fill="#292D32" />
                            <path d="M18.3142 23.7144C17.456 23.7144 16.7444 23.0028 16.7444 22.1447V14.4633C16.7444 13.6051 17.456 12.8934 18.3142 12.8934C19.1723 12.8934 19.8839 13.6051 19.8839 14.4633V22.1447C19.8839 23.0237 19.1723 23.7144 18.3142 23.7144Z" fill="#292D32" />
                            <path d="M18.3142 36.628C17.456 36.628 16.7444 35.9163 16.7444 35.0582V29.8256C16.7444 28.9675 17.456 28.2559 18.3142 28.2559C19.1723 28.2559 19.8839 28.9675 19.8839 29.8256V35.0582C19.8839 35.9163 19.1723 36.628 18.3142 36.628Z" fill="#292D32" />
                        </svg>
                    </div>
                    <div class="ml-5">
                        <p class="font-bold text-text-blue">MDK2602232233580</p>
                        <p class="text-text-gray">26 Februari 2023</p>
                    </div>
                </div>
                <div class="flex space-x-6">
                    <div class="flex space-x-2.5">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.8334 21.875V19.7917C20.8334 18.6866 20.3944 17.6268 19.613 16.8454C18.8316 16.064 17.7718 15.625 16.6667 15.625H8.33341C7.22835 15.625 6.16854 16.064 5.38714 16.8454C4.60573 17.6268 4.16675 18.6866 4.16675 19.7917V21.875" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.4999 11.4583C14.8011 11.4583 16.6666 9.59285 16.6666 7.29167C16.6666 4.99048 14.8011 3.125 12.4999 3.125C10.1987 3.125 8.33325 4.99048 8.33325 7.29167C8.33325 9.59285 10.1987 11.4583 12.4999 11.4583Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-text-gray">5</p>
                    </div>
                    <div class="flex space-x-2.5">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_161_299)">
                                <path d="M9.02275 16.8311C9.10311 17.3133 9.5203 17.6667 10.0091 17.6667H14.4928C14.9761 17.6667 15.3903 17.3211 15.4767 16.8456C15.6145 16.0876 16.0666 14.8957 16.9542 13.9114C17.8164 12.9553 19.092 12.1866 20.9693 12.1866C21.5216 12.1866 21.9693 11.7389 21.9693 11.1866C21.9693 9.28062 20.8311 5.15731 16.1835 4.22779C15.8194 4.15496 15.4448 4.28993 15.2109 4.5783C14.9769 4.86667 14.922 5.26096 15.0683 5.60229C15.3081 6.16201 15.6195 7.05968 15.7561 7.86636C15.7929 8.08304 15.8142 8.27761 15.8212 8.44662C15.2174 8.32101 14.5101 8.26639 13.775 8.3646C12.7168 8.50598 11.5983 8.9677 10.6881 9.9703C9.93198 9.67116 8.96357 9.33509 7.95694 9.07305C6.62912 8.7274 5.06914 8.46461 3.83476 8.71149C3.81921 8.7146 3.80373 8.71808 3.78835 8.72193C3.4303 8.81144 2.87283 8.97058 2.34339 9.16351C2.07898 9.25986 1.80532 9.3705 1.56038 9.4917C1.33664 9.60241 1.05177 9.7624 0.832833 9.98134C0.645296 10.1689 0.539939 10.4232 0.539939 10.6884V12.183C0.539939 12.4909 0.681811 12.7817 0.924527 12.9712C1.16724 13.1607 1.48373 13.2278 1.78247 13.1532C2.0968 13.0746 2.62409 12.9547 3.16548 12.8552C3.72607 12.7521 4.22933 12.6848 4.52907 12.6848C5.19086 12.6848 5.95827 13.0092 7.46169 14.0114C7.53564 14.0607 7.61584 14.1 7.70016 14.1281C7.69863 14.1276 7.69962 14.1281 7.70296 14.1299C7.73319 14.1465 7.95538 14.268 8.23061 14.6616C8.51999 15.0755 8.84448 15.7615 9.02275 16.8311Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_161_299">
                                    <rect width="25" height="25" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="text-text-gray">0</p>
                    </div>
                    <div class="flex space-x-2.5">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_161_279)">
                                <mask id="path-1-outside-1_161_279" maskUnits="userSpaceOnUse" x="-0.811035" y="6" width="19" height="18" fill="black">
                                    <rect fill="white" x="-0.811035" y="6" width="19" height="18" />
                                    <path d="M3.30307 19.2837C3.30307 20.7585 4.49864 21.954 5.97344 21.954C7.44824 21.954 8.6438 20.7585 8.6438 19.2837C8.6438 17.8089 7.44824 16.6133 5.97344 16.6133C4.49864 16.6133 3.30307 17.8089 3.30307 19.2837Z" />
                                </mask>
                                <path d="M7.04158 8.60222L7.93601 9.04943V9.04943L7.04158 8.60222ZM5.43936 11.8067L6.33379 12.2539C6.32234 12.2768 6.31002 12.2992 6.29686 12.3211L5.43936 11.8067ZM2.23493 19.2837L2.23492 18.2837H2.23493V19.2837ZM2.84183 18.2837C3.39411 18.2837 3.84183 18.7314 3.84183 19.2837C3.84183 19.836 3.39411 20.2837 2.84183 20.2837V18.2837ZM9.71195 20.2837C9.15966 20.2837 8.71195 19.836 8.71195 19.2837C8.71195 18.7314 9.15966 18.2837 9.71195 18.2837V20.2837ZM17.189 18.2837C17.7412 18.2837 18.189 18.7314 18.189 19.2837C18.189 19.836 17.7412 20.2837 17.189 20.2837V18.2837ZM8.6438 8C8.63827 8 8.60024 7.97947 8.47307 8.12886C8.31546 8.31402 8.16033 8.60078 7.93601 9.04943L6.14715 8.155C6.35009 7.74914 6.60765 7.23479 6.95013 6.83247C7.32304 6.39438 7.87249 6 8.6438 6V8ZM7.93601 9.04943L6.33379 12.2539L4.54494 11.3594L6.14715 8.155L7.93601 9.04943ZM5.43936 11.8067C6.29686 12.3211 6.29641 12.3219 6.29596 12.3226C6.29581 12.3229 6.29536 12.3236 6.29506 12.3241C6.29445 12.3251 6.29384 12.3261 6.29322 12.3272C6.29197 12.3292 6.2907 12.3313 6.28939 12.3334C6.28678 12.3376 6.28404 12.342 6.28117 12.3465C6.27543 12.3555 6.26918 12.365 6.26238 12.375C6.24878 12.395 6.23301 12.4169 6.21487 12.4404C6.17856 12.4875 6.1329 12.5407 6.07637 12.5972C5.9626 12.711 5.80839 12.8346 5.60456 12.9478C5.19274 13.1766 4.61966 13.3407 3.83714 13.3407V11.3407C4.33641 11.3407 4.56444 11.2378 4.63328 11.1995C4.66978 11.1793 4.67579 11.1694 4.66216 11.183C4.6557 11.1895 4.64509 11.2009 4.63131 11.2188C4.62443 11.2277 4.6168 11.2382 4.60852 11.2503C4.60438 11.2564 4.60009 11.2629 4.59564 11.2699C4.59341 11.2734 4.59115 11.277 4.58886 11.2807C4.58771 11.2825 4.58655 11.2844 4.58539 11.2863C4.58481 11.2873 4.58422 11.2883 4.58364 11.2892C4.58334 11.2897 4.5829 11.2904 4.58275 11.2907C4.58231 11.2914 4.58187 11.2922 5.43936 11.8067ZM3.83714 13.3407C3.51335 13.3407 3.03106 13.425 2.66729 13.6345C2.35325 13.8154 2.16678 14.0518 2.16678 14.477H0.16678C0.16678 13.1932 0.87043 12.3615 1.66904 11.9015C2.41793 11.4701 3.27082 11.3407 3.83714 11.3407V13.3407ZM2.16678 14.477V18.2155H0.16678V14.477H2.16678ZM2.16678 18.2155C2.16678 18.1624 2.15324 18.1436 2.16131 18.1602C2.16877 18.1756 2.18662 18.2035 2.21679 18.2337C2.24695 18.2638 2.2749 18.2817 2.29024 18.2891C2.30685 18.2972 2.28807 18.2837 2.23492 18.2837L2.23493 20.2837C1.63469 20.2837 1.12794 19.9732 0.802574 19.6479C0.477209 19.3225 0.16678 18.8158 0.16678 18.2155H2.16678ZM2.23493 18.2837H2.84183V20.2837H2.23493V18.2837ZM9.71195 18.2837H17.189V20.2837H9.71195V18.2837ZM8.6438 6H17.189V8H8.6438V6ZM5.30307 19.2837C5.30307 19.6539 5.60321 19.954 5.97344 19.954V23.954C3.39406 23.954 1.30307 21.863 1.30307 19.2837H5.30307ZM5.97344 19.954C6.34367 19.954 6.6438 19.6539 6.6438 19.2837H10.6438C10.6438 21.863 8.55281 23.954 5.97344 23.954V19.954ZM6.6438 19.2837C6.6438 18.9134 6.34367 18.6133 5.97344 18.6133V14.6133C8.55281 14.6133 10.6438 16.7043 10.6438 19.2837H6.6438ZM5.97344 18.6133C5.6032 18.6133 5.30307 18.9134 5.30307 19.2837H1.30307C1.30307 16.7043 3.39407 14.6133 5.97344 14.6133V18.6133Z" fill="#1E1E1E" mask="url(#path-1-outside-1_161_279)" />
                                <mask id="path-3-outside-2_161_279" maskUnits="userSpaceOnUse" x="10.217" y="6" width="19" height="18" fill="black">
                                    <rect fill="white" x="10.217" y="6" width="19" height="18" />
                                    <path d="M25.1029 19.2837C25.1029 20.7585 23.9074 21.954 22.4326 21.954C20.9578 21.954 19.7622 20.7585 19.7622 19.2837C19.7622 17.8089 20.9578 16.6133 22.4326 16.6133C23.9074 16.6133 25.1029 17.8089 25.1029 19.2837Z" />
                                </mask>
                                <path d="M21.3644 8.60222L20.47 9.04943V9.04943L21.3644 8.60222ZM22.9666 11.8067L22.0722 12.2539C22.0837 12.2768 22.096 12.2992 22.1091 12.3211L22.9666 11.8067ZM26.1711 19.2837L26.1711 18.2837H26.1711V19.2837ZM25.5642 18.2837C25.0119 18.2837 24.5642 18.7314 24.5642 19.2837C24.5642 19.836 25.0119 20.2837 25.5642 20.2837V18.2837ZM18.6941 20.2837C19.2463 20.2837 19.6941 19.836 19.6941 19.2837C19.6941 18.7314 19.2463 18.2837 18.6941 18.2837V20.2837ZM11.217 18.2837C10.6648 18.2837 10.217 18.7314 10.217 19.2837C10.217 19.836 10.6648 20.2837 11.217 20.2837V18.2837ZM19.7622 8C19.7677 8 19.8058 7.97947 19.9329 8.12886C20.0905 8.31402 20.2457 8.60078 20.47 9.04943L22.2589 8.155C22.0559 7.74914 21.7984 7.23479 21.4559 6.83247C21.083 6.39438 20.5335 6 19.7622 6V8ZM20.47 9.04943L22.0722 12.2539L23.8611 11.3594L22.2589 8.155L20.47 9.04943ZM22.9666 11.8067C22.1091 12.3211 22.1096 12.3219 22.11 12.3226C22.1102 12.3229 22.1106 12.3236 22.1109 12.3241C22.1116 12.3251 22.1122 12.3261 22.1128 12.3272C22.114 12.3292 22.1153 12.3313 22.1166 12.3334C22.1192 12.3376 22.122 12.342 22.1248 12.3465C22.1306 12.3555 22.1368 12.365 22.1436 12.375C22.1572 12.395 22.173 12.4169 22.1911 12.4404C22.2274 12.4875 22.2731 12.5407 22.3296 12.5972C22.4434 12.711 22.5976 12.8346 22.8014 12.9478C23.2133 13.1766 23.7864 13.3407 24.5689 13.3407V11.3407C24.0696 11.3407 23.8416 11.2378 23.7727 11.1995C23.7362 11.1793 23.7302 11.1694 23.7438 11.183C23.7503 11.1895 23.7609 11.2009 23.7747 11.2188C23.7816 11.2277 23.7892 11.2382 23.7975 11.2503C23.8016 11.2564 23.8059 11.2629 23.8104 11.2699C23.8126 11.2734 23.8149 11.277 23.8171 11.2807C23.8183 11.2825 23.8195 11.2844 23.8206 11.2863C23.8212 11.2873 23.8218 11.2883 23.8224 11.2892C23.8227 11.2897 23.8231 11.2904 23.8233 11.2907C23.8237 11.2914 23.8241 11.2922 22.9666 11.8067ZM24.5689 13.3407C24.8927 13.3407 25.3749 13.425 25.7387 13.6345C26.0528 13.8154 26.2392 14.0518 26.2392 14.477H28.2392C28.2392 13.1932 27.5356 12.3615 26.737 11.9015C25.9881 11.4701 25.1352 11.3407 24.5689 11.3407V13.3407ZM26.2392 14.477V18.2155H28.2392V14.477H26.2392ZM26.2392 18.2155C26.2392 18.1624 26.2528 18.1436 26.2447 18.1602C26.2372 18.1756 26.2194 18.2035 26.1892 18.2337C26.1591 18.2638 26.1311 18.2817 26.1158 18.2891C26.0992 18.2972 26.1179 18.2837 26.1711 18.2837L26.1711 20.2837C26.7713 20.2837 27.2781 19.9732 27.6034 19.6479C27.9288 19.3225 28.2392 18.8158 28.2392 18.2155H26.2392ZM26.1711 18.2837H25.5642V20.2837H26.1711V18.2837ZM18.6941 18.2837H11.217V20.2837H18.6941V18.2837ZM19.7622 6H11.217V8H19.7622V6ZM23.1029 19.2837C23.1029 19.6539 22.8028 19.954 22.4326 19.954V23.954C25.0119 23.954 27.1029 21.863 27.1029 19.2837H23.1029ZM22.4326 19.954C22.0623 19.954 21.7622 19.6539 21.7622 19.2837H17.7622C17.7622 21.863 19.8532 23.954 22.4326 23.954V19.954ZM21.7622 19.2837C21.7622 18.9134 22.0623 18.6133 22.4326 18.6133V14.6133C19.8532 14.6133 17.7622 16.7043 17.7622 19.2837H21.7622ZM22.4326 18.6133C22.8028 18.6133 23.1029 18.9134 23.1029 19.2837H27.1029C27.1029 16.7043 25.0119 14.6133 22.4326 14.6133V18.6133Z" fill="#1E1E1E" mask="url(#path-3-outside-2_161_279)" />
                                <path d="M19.4956 8.75H15.0109C14.9557 8.75 14.9109 8.79477 14.9109 8.85V13.1168C14.9109 13.172 14.9557 13.2168 15.0109 13.2168H21.7144C21.7894 13.2168 21.8377 13.1372 21.8031 13.0707L19.5844 8.80386C19.5671 8.77077 19.5329 8.75 19.4956 8.75Z" stroke="#1E1E1E" />
                                <path d="M9.13376 8.75H13.6185C13.6737 8.75 13.7185 8.79477 13.7185 8.85V13.1168C13.7185 13.172 13.6737 13.2168 13.6185 13.2168H6.91502C6.83999 13.2168 6.79169 13.1372 6.8263 13.0707L9.04503 8.80386C9.06224 8.77077 9.09645 8.75 9.13376 8.75Z" stroke="#1E1E1E" />
                            </g>
                            <defs>
                                <clipPath id="clip0_161_279">
                                    <rect width="28" height="28" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="text-text-gray">1</p>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="grid justify-items-end">
                    <p class=" bg-yellow-500 px-8 py-1 rounded text-text-white">Menunggu Pembayaran</p>
                    <p class=" text-text-gray">Bayar Ditempat</p>
                    <p class="text-text-gray">Rp. 45.000</p>
                </div>
                <div class="grid place-items-center ml-9">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.375 22.5H35.625" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22.5 9.375L35.625 22.5L22.5 35.625" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
</article>
@endsection
