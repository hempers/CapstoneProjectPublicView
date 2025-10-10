<!-- Infrastructure Section Component -->
<div id="infrastructure-services" class="mb-12">
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
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-700">Support Services: Infrastructure</h3>
                    <p class="text-xs sm:text-sm text-gray-600">Farm-to-Market Roads and Facilities</p>
                </div>
            </div>
            <div class="text-left sm:text-right">
                <p class="text-xs text-gray-500">
                    <span class="font-medium text-gray-600">Involved Agency:</span> DPWH, PCA
                </p>
            </div>
        </div>

        <!-- Program Overview -->
        <div class="rounded-lg mb-6">
            <p class="text-sm text-gray-600 leading-relaxed">
                Ang CFID Infrastructure Program ay naglalayong magpatayo ng mga kalsada (farm-to-market roads) at
                iba pang imprastraktura upang mas mabilis at mas madaling makarating ang mga produkto ng niyog
                sa mga pamilihan. Responsable ang PCA sa pagsusuri at pagbibigay ng rekomendasyon para sa mga
                proyektong ito, habang ang DPWH naman ang nangangasiwa sa aktuwal na pagtatayo.
            </p>
        </div>

        <!-- Tabs Navigation -->
        <div>
            <div class="flex flex-col sm:flex-row gap-2" role="tablist">
                <button onclick="toggleTab('infrastructure-main-requirements-tab')"
                    class="tab-button flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-xs sm:text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span class="text-left">Main Requirements</span>
                    <svg class="tab-icon w-4 h-4 flex-shrink-0 transition-transform duration-200"
                        style="transform: rotate(180deg);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <button onclick="toggleTab('infrastructure-post-approval-tab')"
                    class="tab-button flex-1 px-3 sm:px-4 py-2 sm:py-2.5 text-xs sm:text-sm font-medium rounded-lg bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-all duration-200 flex items-center justify-between">
                    <span class="text-left">Post-Approval Requirements</span>
                    <svg class="tab-icon w-4 h-4 flex-shrink-0 transition-transform duration-200"
                        style="transform: rotate(180deg);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>

            <!-- Tab Content -->

            <!-- Main Requirements Tab -->
            <div id="infrastructure-main-requirements-tab" class="tab-content hidden mt-6">
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <h5 class="text-sm font-bold text-gray-600 mb-4">
                        Main Requirements
                    </h5>
                    <ul class="space-y-2.5">
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">1</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Letter of Request/Intent</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">2</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Project Proposal with Project
                                Location Map</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">3</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Endorsement by the Local Government
                                Unit (LGU)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">4</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certification from PCA
                                Regional/Provincial Officer on the coconut area coverage and production</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">5</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">List of coconut farmers
                                beneficiaries (with NCFRS registration)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">6</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certified true copy of Certificate
                                of Registration from CDA or SEC (if proponent is cooperative or organization)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">7</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Board Resolution authorizing
                                designated officers to transact with PCA (if proponent is cooperative or organization)
                            </p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">8</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Deed of Donation (if land where the
                                project is to be constructed is privately owned)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">9</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certificate of Ownership/Land Title
                                (if land where the project is to be constructed is privately owned)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">10</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certificate of Availability of
                                Counterpart (from LGU/Proponent)</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">11</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Certificate of Availability of Funds
                                for Operation and Maintenance (from LGU/Proponent)</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Additional Requirements Tab -->
            <div id="infrastructure-post-approval-tab" class="tab-content hidden mt-6">
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <h5 class="text-sm font-bold text-gray-600 mb-4">
                        Post-Approval Requirements
                    </h5>
                    <p class="text-xs text-gray-500 mb-3">Additional requirements after project approval:</p>
                    <ul class="space-y-2.5">
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">1</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Memorandum of Agreement (MOA)
                                between PCA and the Proponent/LGU for the operation and maintenance of the project</p>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="flex-shrink-0 w-5 h-5 rounded-full bg-green-500 text-white flex items-center justify-center text-xs font-medium">2</span>
                            <p class="text-gray-600 text-sm leading-relaxed mt-0.5">Sworn certification from authorized
                                LGU official that the project is not a duplication of any previously funded
                                infrastructure project</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>