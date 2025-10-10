<!-- Social Protection Section Component -->
<div id="social-protection" class="mb-12 h-full">
    <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 shadow-sm h-full flex flex-col">
        <!-- Header -->
        <div
            class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6 pb-4 border-b border-gray-200">
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-700">Social Protection</h3>
                    <p class="text-xs sm:text-sm text-gray-600">CocoLSA Certification • Training and Farm Schools</p>
                </div>
            </div>
            <div class="text-left sm:text-right">
                <p class="text-xs text-gray-500">
                    <span class="font-medium text-gray-600">Involved Agency:</span> ATI, TESDA
                </p>
            </div>
        </div>

        <!-- Program Overview -->
        <div class="rounded-lg mb-6">
            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                Ang <strong class="text-gray-700">Coco-based Learning Site for Agriculture (CocoLSA)</strong> ay isang
                sakahan na gumagamit ng
                angkop na teknolohiya sa niyugan, nagsasagawa ng mabisang estratehiya sa pagsasaka, at matagumpay na
                nakakapagpatakbo ng operasyon — kaya't nararapat tularan.
            </p>

            <p class="text-sm text-gray-600 leading-relaxed">
                Layunin ng programa na palakasin ang kakayahan at kapasidad ng mga miyembro ng pamayanang nagtatanim ng
                niyog sa produksyon, pagpoproseso, at pagnenegosyo.
                Nais din nitong hikayatin ang mas aktibong partisipasyon ng mga magniniyog at kanilang mga lider sa
                pagpapaunlad ng industriya sa pamamagitan ng pagiging mga tagapagsulong ng coconut-based
                capacity-building.
            </p> <br>

            <!-- Program Benefits -->
            <div>
                <div class="flex flex-wrap gap-1.5">
                    <span
                        class="px-2.5 py-1 bg-white text-gray-600 text-xs rounded-full border border-gray-300">Training</span>
                    <span
                        class="px-2.5 py-1 bg-white text-gray-600 text-xs rounded-full border border-gray-300">Demonstration
                        Services</span>
                    <span
                        class="px-2.5 py-1 bg-white text-gray-600 text-xs rounded-full border border-gray-300">Information
                        Support</span>
                    <span
                        class="px-2.5 py-1 bg-white text-gray-600 text-xs rounded-full border border-gray-300">Technical
                        Assistance</span>
                    <span
                        class="px-2.5 py-1 bg-white text-gray-600 text-xs rounded-full border border-gray-300">Complementary
                        Projects</span>
                </div>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <div>
            <div class="flex flex-col sm:flex-row gap-2" role="tablist">
                <button onclick="toggleTab('requirements-tab')"
                    class="tab-button flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-xs sm:text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span class="text-left">Sino ang qualified?</span>
                    <svg class="tab-icon w-4 h-4 flex-shrink-0 transition-transform duration-200"
                        style="transform: rotate(180deg);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <button onclick="toggleTab('documents-tab')"
                    class="tab-button flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-xs sm:text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span class="text-left">Mga Dokumento</span>
                    <svg class="tab-icon w-4 h-4 flex-shrink-0 transition-transform duration-200"
                        style="transform: rotate(180deg);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>

            <!-- Tab Content -->

            <!-- Requirements Tab -->
            <div id="requirements-tab" class="tab-content hidden mt-6">
                <div class="space-y-5">
                    <!-- Individual Farmers Requirements -->
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                        <h5 class="text-sm font-bold text-gray-600 mb-4">
                            Para sa Indibidwal na Magsasaka
                        </h5>
                        <ul class="space-y-2.5">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Isang Pilipinong magsasaka (may-ari, nagtatanim, o nag-aalaga) na may hindi bababa
                                    sa 1
                                    ektaryang niyugan.
                                </p>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    May kakayahan at kahandaang magpakita ng mga teknolohiya sa niyog anumang oras na
                                    kailangan ng kliyente.
                                </p>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Bukas sa pagsali sa mga regular na training at pagsasanay.
                                </p>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    May pisikal na kakayahang gampanan ang tungkulin bilang CocoLSA cooperator.
                                </p>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Rehistrado sa NCFRS, at mas mainam kung miyembro ng isang CFO o CFC.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <!-- Organization Requirements -->
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                        <h5 class="text-sm font-bold text-gray-600 mb-4">
                            Para sa Grupo o Organisasyon ng mga Magsasaka
                        </h5>
                        <ul class="space-y-2.5">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    May sakahang hindi bababa sa 1 ektarya, at ito ay integrated o diversified farm.
                                </p>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Nagmamay-ari o namamahala ng niyugan na may sukat na hindi bababa sa 1 ektarya.
                                </p>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    May valid registration mula sa SEC, CDA, DOLE, o may kasalukuyang akreditasyon mula
                                    sa
                                    PCA.
                                </p>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Aktibong nakikilahok sa mga gawain ng samahan ng mga magsasaka o community
                                    enterprise sa
                                    nakalipas na 3 taon.
                                </p>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="flex-1">
                                    <p class="text-gray-600 text-sm leading-relaxed mb-2">
                                        Binubuo ng mga Pilipinong lider-magsasaka o kasapi na:
                                    </p>
                                    <ul class="ml-6 space-y-1.5">
                                        <li class="flex items-start gap-2">
                                            <span class="text-green-500 text-lg leading-none">•</span>
                                            <p class="text-gray-600 text-sm leading-relaxed">
                                                May kakayahang magpakita ng mga teknolohiya sa niyog.
                                            </p>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-green-500 text-lg leading-none">•</span>
                                            <p class="text-gray-600 text-sm leading-relaxed">
                                                Bukas sa pagsasanay o training.
                                            </p>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-green-500 text-lg leading-none">•</span>
                                            <p class="text-gray-600 text-sm leading-relaxed">
                                                May pisikal na kakayahang gampanan ang tungkulin bilang LSA cooperator.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Documents Tab -->
            <div id="documents-tab" class="tab-content hidden mt-6">
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <h5 class="text-sm font-bold text-gray-600 mb-4">
                        Mga Kailangang Dokumento
                    </h5>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">Siguruhing kumpleto ang lahat ng dokumento
                        bago
                        mag-apply</p>

                    <ul class="space-y-2.5">
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">1</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Applicant's Checklist of
                                Requirements
                            </p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">2</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Signed Briefer</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">3</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Self-Assessment</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">4</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Letter of Intent to become a CocoLSA
                            </p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">5</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Farming Learning Site for
                                Agriculture
                                Profile
                                Form</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">6</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">LSA Qualification Form</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">7</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Field Validation Report</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">8</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">LSA Acceptance Form</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">9</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Endorsement of the RTWG</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>