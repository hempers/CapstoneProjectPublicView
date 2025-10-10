<!-- Integrated Coconut Processing Section Component -->
<div id="integrated-coconut" class="mb-12">
    <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 shadow-sm">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-gray-700">Integrated Coconut Processing</h3>
                    <p class="text-sm text-gray-600">Shared Processing Facilities • Downstream Products</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-xs text-gray-500">
                    <span class="font-medium text-gray-600">Involved Agency:</span> PCA
                </p>
            </div>
        </div>

        <!-- Program Overview -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 mb-6">
            <p class="text-sm text-gray-600 leading-relaxed mb-4">
                Ang <strong class="text-gray-700">Shared Processing Facilities (SPF)</strong> ay mga pasilidad na
                ginagamit nang sama-sama ng mga kooperatiba o indibidwal na magsasaka para sa mas episyente at
                de-kalidad na pagproseso ng produktong niyog.
            </p>

            <p class="text-sm text-gray-600 leading-relaxed">
                Layunin ng programang ito na mapabuti ang pagproseso at kalidad ng mga produktong niyog, palakasin ang
                kapasidad ng mga kooperatiba at magsasaka, at mapataas ang kanilang kita sa pamamagitan ng modernong
                pasilidad at teknolohiya.
            </p>
        </div>

        <!-- Tabs Navigation -->
        <div>
            <div class="flex gap-2" role="tablist">
                <button onclick="toggleTab('selection-criteria-tab')"
                    class="tab-button flex-1 px-4 py-2.5 text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span>Mga Dokumento</span>
                    <svg class="tab-icon w-4 h-4 transition-transform duration-200" style="transform: rotate(180deg);"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <button onclick="toggleTab('additional-requirements-tab')"
                    class="tab-button flex-1 px-4 py-2.5 text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span>Karagdagang Kailanganin</span>
                    <svg class="tab-icon w-4 h-4 transition-transform duration-200" style="transform: rotate(180deg);"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>

            <!-- Tab Content -->

            <!-- Selection Criteria Tab -->
            <div id="selection-criteria-tab" class="tab-content hidden mt-6">
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
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Letter of Intent</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">2</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Endorsement letter from PCA
                                (Provincial/Regional/Central Office)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">3</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">NCFRS Certification (kumpirmado at
                                opisyal na inisyu ng Regional Office)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">4</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Financial Statement for two (2)
                                years
                                (external audit)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">5</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">CDA Registration (rehistradong
                                kooperatiba sa ilalim ng CDA)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">6</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">CDA Certificate of Compliance
                                (updated
                                annually)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">7</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Articles of Cooperation and By-Laws
                                (notarizado)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">8</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Existing Organizational Structure
                            </p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">9</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Board Resolution (notarizado; dapat
                                nakasaad ang kaukulang kahilingan)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">10</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Community/Site Profile (detalyadong
                                profile ng komunidad/lokasyon)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">11</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Official List of Members (hindi
                                bababa
                                sa 100 miyembro at hindi kukulangin sa 50%+1 ay rehistradong magsasaka ng niyog – na
                                beripikado sa pamamagitan ng NCFRS Certification)</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Additional Requirements Tab -->
            <div id="additional-requirements-tab" class="tab-content hidden mt-6">
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <h5 class="text-sm font-bold text-gray-600 mb-4">
                        Karagdagang Kailanganin
                    </h5>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">Pagkatapos ng pag-apruba ng Central Office
                        (CO) at
                        bago ang aktwal na konstruksyon ng pasilidad</p>

                    <ul class="space-y-2.5">
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">1</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Proposal/Business Plan/Feasibility
                                Study
                            </p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">2</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Deed of Donation of Lot (if private
                                property); MOA/Usufruct Agreement (if lot is government property)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>