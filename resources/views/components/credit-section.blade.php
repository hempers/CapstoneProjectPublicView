<!-- Credit Section Component -->
<div id="credit-services" class="mb-12">
    <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 shadow-sm">
        <!-- Header -->
        <div
            class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6 pb-4 border-b border-gray-200">
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 sm:w-12 sm:h-12 bg-green-50 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-700">Support Services: Credit</h3>
                    <p class="text-xs sm:text-sm text-gray-600">CFID Credit Program</p>
                </div>
            </div>
            <div class="text-left sm:text-right">
                <p class="text-xs text-gray-500">
                    <span class="font-medium text-gray-600">Involved Agency:</span> LBP, DBP, PCA
                </p>
            </div>
        </div>

        <!-- Program Overview -->
        <div class="rounded-lg mb-6">
            <p class="text-sm text-gray-600 leading-relaxed">
                Karaniwan, ang mga kooperatiba o indibidwal na magsasaka ay direktang tumutungo sa LBP o DBP
                upang makinabang sa CFID Credit Program. Ang PCA ay nagsisilbing katuwang na ahensyang
                tagapagpatupad ng mga bangkong ito pagdating sa beripikasyon ng NCFRS, akreditasyon ng PCA,
                at iba pang mga beripikasyon na may kaugnayan sa coconut value chain.
            </p>
        </div>

        <!-- Tabs Navigation -->
        <div>
            <div class="flex flex-col sm:flex-row gap-2" role="tablist">
                <button onclick="toggleTab('base-requirements-tab')"
                    class="tab-button flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-xs sm:text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span class="text-left">Base Requirements (PCA)</span>
                    <svg class="tab-icon w-4 h-4 flex-shrink-0 transition-transform duration-200"
                        style="transform: rotate(180deg);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <button onclick="toggleTab('enterprise-requirements-tab')"
                    class="tab-button flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-xs sm:text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span class="text-left">Coconut Farmer Enterprise</span>
                    <svg class="tab-icon w-4 h-4 flex-shrink-0 transition-transform duration-200"
                        style="transform: rotate(180deg);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <button onclick="toggleTab('coop-requirements-tab')"
                    class="tab-button flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-xs sm:text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span class="text-left">Cooperatives & Organizations</span>
                    <svg class="tab-icon w-4 h-4 flex-shrink-0 transition-transform duration-200"
                        style="transform: rotate(180deg);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>

            <!-- Tab Content -->

            <!-- Base Requirements Tab -->
            <div id="base-requirements-tab" class="tab-content hidden mt-6">
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <h5 class="text-sm font-bold text-gray-600 mb-4">
                        Base Requirements (of PCA)
                    </h5>
                    <ul class="space-y-2.5">
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">1</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Letter of Intent</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">2</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">NCFRS Registration and Certification
                            </p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">3</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">CSO Accreditation issued by PCA or
                                DA</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">4</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">CDA Registration and COC</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">5</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Financial Statement for two (2)
                                years (external audit)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">6</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Articles of Cooperation and By-Laws
                                (duly notarized)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">7</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Existing Organizational Structure
                            </p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">8</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Official list of members</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">9</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Board Resolution (if requestee is a
                                Cooperative; not needed if individual farmer)</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Enterprise Requirements Tab -->
            <div id="enterprise-requirements-tab" class="tab-content hidden mt-6">
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <h5 class="text-sm font-bold text-gray-600 mb-2">
                        Documentary Requirements (of DBP/LBP)
                    </h5>
                    <p class="text-xs text-gray-500 mb-4">Coconut Farmer Enterprise</p>
                    <ul class="space-y-2.5">
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">1</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">DBP Loan Application Forms</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">2</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Proof of NCFRS Enlistment</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">3</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Photocopy of Certificate of
                                Registration from the DTI/SEC</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">4</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certificate of Accreditation from
                                PCA</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">5</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Business Plan, if applicable</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">6</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Current Year Business Permit</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">7</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Audited Financial Statements for the
                                last year; or latest Interim Financial Statements for start-ups</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">8</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Training Certificate from an
                                accredited provider (e.g., TESDA, DA-ATI) on financial literacy and on projects related
                                to the coconut value chain</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Cooperatives Requirements Tab -->
            <div id="coop-requirements-tab" class="tab-content hidden mt-6">
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <h5 class="text-sm font-bold text-gray-600 mb-2">
                        Documentary Requirements (of DBP/LBP)
                    </h5>
                    <p class="text-xs text-gray-500 mb-4">Coconut Farmers Cooperatives and Organizations</p>
                    <ul class="space-y-2.5">
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">1</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">DBP Loan Application Forms</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">2</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Photocopy of Certificate of
                                Registration from the CDA/SEC</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">3</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certificate of Accreditation from
                                PCA</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">4</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certificate of Compliance from CDA,
                                if applicable</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">5</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certificate of Tax Exemption, if
                                applicable</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">6</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Copies of Articles of
                                Incorporation/Cooperation and By-Laws</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">7</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Business Plan, if applicable</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">8</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Current Year Business Permit</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">9</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Bio-data of incumbent Officers and
                                Board of Directors with photocopy of valid government issued ID</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">10</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Board Resolution authorizing the
                                Cooperative/ Organization to borrow and designating the authorized signatories</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">11</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Audited Financial Statements for the
                                last year; or latest Interim Financial Statements for start-ups</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">12</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Training Certificate of the
                                cooperative and its key officers from an accredited provider (e.g., TESDA, DA-ATI) on
                                financial literacy and on projects related to the coconut value chain</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>