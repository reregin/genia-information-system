@extends('layouts.admin')

@section('admin-content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
        <div class="flex items-center mb-6">
            <a href="" class="mr-3 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <h2 class="text-2xl font-semibold text-gray-800">
                Add New Competition
            </h2>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6"></form>
            @csrf
            
            <!-- Basic Information -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Basic Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-1 md:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Competition Name <span class="text-red-600">*</span></label>
                        <input type="text" id="name" name="name" required value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="logo" class="block text-sm font-medium text-gray-700 mb-1">Logo</label>
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 h-16 w-16 bg-gray-100 rounded-md overflow-hidden border border-gray-200">
                                <img id="logo-preview" src="{{ asset('images/logo_placeholder.png') }}" alt="Logo preview" class="h-full w-full object-contain">
                            </div>
                            <div class="flex-grow">
                                <input type="file" id="logo" name="logo" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="mt-1 text-xs text-gray-500">Recommended: Square image, 400x400px or larger</p>
                            </div>
                        </div>
                        @error('logo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="organizer" class="block text-sm font-medium text-gray-700 mb-1">Organizer <span class="text-red-600">*</span></label>
                        <input type="text" id="organizer" name="organizer" required value="{{ old('organizer') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('organizer')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="level" class="block text-sm font-medium text-gray-700 mb-1">Level <span class="text-red-600">*</span></label>
                        <select id="level" name="level" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select Level</option>
                            <option value="Nasional" {{ old('level') == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                            <option value="Internasional" {{ old('level') == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                            <option value="Regional" {{ old('level') == 'Regional' ? 'selected' : '' }}>Regional</option>
                        </select>
                        @error('level')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Location <span class="text-red-600">*</span></label>
                        <input type="text" id="location" name="location" required value="{{ old('location') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('location')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="guidebook_url" class="block text-sm font-medium text-gray-700 mb-1">Guidebook URL</label>
                        <input type="url" id="guidebook_url" name="guidebook_url" value="{{ old('guidebook_url') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('guidebook_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Categories -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Categories</h3>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="flex items-start">
                        <input type="checkbox" id="category_riset" name="categories[]" value="Riset dan Inovasi" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="category_riset" class="ml-2 block text-sm text-gray-700">Riset dan Inovasi</label>
                    </div>
                    <div class="flex items-start">
                        <input type="checkbox" id="category_akademik" name="categories[]" value="Akademik" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="category_akademik" class="ml-2 block text-sm text-gray-700">Akademik</label>
                    </div>
                    <div class="flex items-start">
                        <input type="checkbox" id="category_kewirausahaan" name="categories[]" value="Kewirausahaan" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="category_kewirausahaan" class="ml-2 block text-sm text-gray-700">Kewirausahaan</label>
                    </div>
                    <div class="flex items-start">
                        <input type="checkbox" id="category_seni" name="categories[]" value="Seni" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="category_seni" class="ml-2 block text-sm text-gray-700">Seni</label>
                    </div>
                    <div class="flex items-start">
                        <input type="checkbox" id="category_olahraga" name="categories[]" value="Olahraga" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="category_olahraga" class="ml-2 block text-sm text-gray-700">Olahraga</label>
                    </div>
                    <div class="flex items-start">
                        <input type="checkbox" id="category_other" name="category_other_checkbox" value="1" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <div class="ml-2">
                            <label for="category_other" class="block text-sm text-gray-700">Other:</label>
                            <input type="text" id="category_other_text" name="categories[]" placeholder="Add custom category" class="mt-1 w-full px-3 py-1 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                </div>
                @error('categories')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Dates -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Important Dates</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Competition Start Date <span class="text-red-600">*</span></label>
                        <input type="date" id="start_date" name="start_date" required value="{{ old('start_date') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('start_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="end_date" class="block text-sm font-medium text-gray-700 mb-1">Competition End Date <span class="text-red-600">*</span></label>
                        <input type="date" id="end_date" name="end_date" required value="{{ old('end_date') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('end_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="registration_start_date" class="block text-sm font-medium text-gray-700 mb-1">Registration Start Date <span class="text-red-600">*</span></label>
                        <input type="date" id="registration_start_date" name="registration_start_date" required value="{{ old('registration_start_date') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('registration_start_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="registration_end_date" class="block text-sm font-medium text-gray-700 mb-1">Registration End Date <span class="text-red-600">*</span></label>
                        <input type="date" id="registration_end_date" name="registration_end_date" required value="{{ old('registration_end_date') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('registration_end_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Timeline -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Timeline</h3>
                    <button type="button" id="add-timeline" class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Add Phase
                    </button>
                </div>
                
                <div id="timeline-container" class="space-y-4">
                    <div class="timeline-item bg-white p-4 rounded-md border border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phase Title <span class="text-red-600">*</span></label>
                                <input type="text" name="timelines[0][title]" required placeholder="e.g., Registration" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div class="flex flex-col md:flex-row space-x-0 md:space-x-4">
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Start Date <span class="text-red-600">*</span></label>
                                    <input type="date" name="timelines[0][start_date]" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">End Date <span class="text-red-600">*</span></label>
                                    <input type="date" name="timelines[0][end_date]" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Description <span class="text-red-600">*</span></label>
                            <textarea name="timelines[0][description]" required rows="2" placeholder="Describe this phase..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overview & Details -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Overview & Details</h3>
                
                <div class="space-y-6">
                    <div>
                        <label for="overview" class="block text-sm font-medium text-gray-700 mb-1">Competition Overview <span class="text-red-600">*</span></label>
                        <textarea id="overview" name="overview" required rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('overview') }}</textarea>
                        <!-- <p class="mt-1 text-xs text-gray-500">HTML is supported for formatting.</p> -->
                        @error('overview')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="rules" class="block text-sm font-medium text-gray-700 mb-1">Rules & Criteria</label>
                        <textarea id="rules" name="rules" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('rules') }}</textarea>
                        <!-- <p class="mt-1 text-xs text-gray-500">HTML is supported for formatting.</p> -->
                        @error('rules')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            
            <!-- Prizes -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Prize Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div>
                            <label for="first_prize" class="block text-sm font-medium text-gray-700 mb-1">First Prize (Rp)</label>
                            <input type="number" id="first_prize" name="first_prize" value="{{ old('first_prize') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('first_prize')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="first_prize_description" class="block text-sm font-medium text-gray-700 mb-1">First Prize Description</label>
                            <input type="text" id="first_prize_description" name="first_prize_description" value="{{ old('first_prize_description') }}" placeholder="e.g., Cash + Trophy" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('first_prize_description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="second_prize" class="block text-sm font-medium text-gray-700 mb-1">Second Prize (Rp)</label>
                            <input type="number" id="second_prize" name="second_prize" value="{{ old('second_prize') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('second_prize')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="second_prize_description" class="block text-sm font-medium text-gray-700 mb-1">Second Prize Description</label>
                            <input type="text" id="second_prize_description" name="second_prize_description" value="{{ old('second_prize_description') }}" placeholder="e.g., Cash + Certificate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('second_prize_description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="third_prize" class="block text-sm font-medium text-gray-700 mb-1">Third Prize (Rp)</label>
                            <input type="number" id="third_prize" name="third_prize" value="{{ old('third_prize') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('third_prize')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="third_prize_description" class="block text-sm font-medium text-gray-700 mb-1">Third Prize Description</label>
                            <input type="text" id="third_prize_description" name="third_prize_description" value="{{ old('third_prize_description') }}" placeholder="e.g., Cash + Certificate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('third_prize_description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="col-span-1 md:col-span-2">
                            <label for="additional_prizes" class="block text-sm font-medium text-gray-700 mb-1">Additional Prizes/Benefits</label>
                            <textarea id="additional_prizes" name="additional_prizes" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('additional_prizes') }}</textarea>
                            <!-- <p class="mt-1 text-xs text-gray-500">HTML is supported for formatting.</p> -->
                            @error('additional_prizes')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FAQs -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Frequently Asked Questions</h3>
                    <button type="button" id="add-faq" class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Add FAQ
                    </button>
                </div>
                
                <div id="faq-container" class="space-y-4">
                    <div class="faq-item bg-white p-4 rounded-md border border-gray-200">
                        <div class="flex justify-between items-start">
                            <div class="w-full space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Question</label>
                                    <input type="text" name="faqs[0][question]" placeholder="Enter a frequently asked question" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Answer</label>
                                    <textarea name="faqs[0][answer]" rows="3" placeholder="Enter the answer to the question" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                            </div>
                            <button type="button" class="remove-faq ml-4 mt-4 text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Contact Information</h3>
                    <button type="button" id="add-contact" class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Add Contact
                    </button>
                </div>
                
                <div id="contact-container" class="space-y-4">
                    <div class="contact-item bg-white p-4 rounded-md border border-gray-200">
                        <div class="flex justify-between items-start">
                            <div class="w-full">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Name/Title <span class="text-red-600">*</span></label>
                                        <input type="text" name="contacts[0][name]" required placeholder="e.g., Competition Secretariat" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                                        <input type="text" name="contacts[0][role]" placeholder="e.g., Information Center" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                        <input type="text" name="contacts[0][role]" placeholder="e.g., Information Center" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <input type="email" name="contacts[0][email]" placeholder="contact@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                        <input type="text" name="contacts[0][phone]" placeholder="e.g., +6281234567890" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">WhatsApp</label>
                                        <input type="text" name="contacts[0][whatsapp]" placeholder="e.g., +6281234567890" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                                    <input type="url" name="contacts[0][website]" placeholder="https://example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>
                            <button type="button" class="remove-contact ml-4 mt-4 text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-3 pt-4">
                <a href="" class="w-full sm:w-auto px-4 py-2 bg-gray-200 text-gray-800 font-medium rounded-lg hover:bg-gray-300 transition-colors flex items-center justify-center">Cancel</a>
                <button type="submit" class="w-full sm:w-auto px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 001 1h12a1 1 0 001-1V3a1 1 0 00-1-1H4a1 1 0 00-1 1v14zm9-3H6v-2h6v2zm0-4H6V8h6v2zm4-2v8H4V5h10V4H4a1 1 0 00-1 1v10a1 1 0 001 1h12a1 1 0 001-1V8h-2z" clip-rule="evenodd" />
                    </svg>
                    Save Competition
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Logo Preview
    document.getElementById('logo').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('logo-preview').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Timeline Management
    let timelineCounter = 1;
    
    document.getElementById('add-timeline').addEventListener('click', function() {
        const container = document.getElementById('timeline-container');
        const newItem = document.createElement('div');
        newItem.className = 'timeline-item bg-white p-4 rounded-md border border-gray-200';
        newItem.innerHTML = `
            <div class="flex justify-between items-start">
                <div class="w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phase Title <span class="text-red-600">*</span></label>
                            <input type="text" name="timelines[${timelineCounter}][title]" required placeholder="e.g., Registration" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="flex flex-col md:flex-row space-x-0 md:space-x-4">
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Start Date <span class="text-red-600">*</span></label>
                                <input type="date" name="timelines[${timelineCounter}][start_date]" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-gray-700 mb-1">End Date <span class="text-red-600">*</span></label>
                                <input type="date" name="timelines[${timelineCounter}][end_date]" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description <span class="text-red-600">*</span></label>
                        <textarea name="timelines[${timelineCounter}][description]" required rows="2" placeholder="Describe this phase..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                </div>
                <button type="button" class="remove-timeline ml-4 mt-4 text-red-500 hover:text-red-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        `;
        container.appendChild(newItem);
        timelineCounter++;
        
        // Add event listener to remove button
        newItem.querySelector('.remove-timeline').addEventListener('click', function() {
            container.removeChild(newItem);
        });
    });

    // FAQ Management
    let faqCounter = 1;
    
    document.getElementById('add-faq').addEventListener('click', function() {
        const container = document.getElementById('faq-container');
        const newItem = document.createElement('div');
        newItem.className = 'faq-item bg-white p-4 rounded-md border border-gray-200';
        newItem.innerHTML = `
            <div class="flex justify-between items-start">
                <div class="w-full space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Question</label>
                        <input type="text" name="faqs[${faqCounter}][question]" placeholder="Enter a frequently asked question" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Answer</label>
                        <textarea name="faqs[${faqCounter}][answer]" rows="3" placeholder="Enter the answer to the question" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                </div>
                <button type="button" class="remove-faq ml-4 mt-4 text-red-500 hover:text-red-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        `;
        container.appendChild(newItem);
        faqCounter++;
        
        // Add event listener to remove button
        newItem.querySelector('.remove-faq').addEventListener('click', function() {
            container.removeChild(newItem);
        });
    });

    // Add event listener to first FAQ remove button
    document.querySelector('.remove-faq').addEventListener('click', function() {
        const container = this.closest('.faq-item');
        if (document.querySelectorAll('.faq-item').length > 1) {
            container.remove();
        } else {
            // Clear inputs instead of removing the only FAQ item
            container.querySelectorAll('input, textarea').forEach(input => input.value = '');
        }
    });

    // Contact Management
    let contactCounter = 1;
    
    document.getElementById('add-contact').addEventListener('click', function() {
        const container = document.getElementById('contact-container');
        const newItem = document.createElement('div');
        newItem.className = 'contact-item bg-white p-4 rounded-md border border-gray-200';
        newItem.innerHTML = `
            <div class="flex justify-between items-start">
                <div class="w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Name/Title <span class="text-red-600">*</span></label>
                            <input type="text" name="contacts[${contactCounter}][name]" required placeholder="e.g., Competition Secretariat" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                            <input type="text" name="contacts[${contactCounter}][role]" placeholder="e.g., Information Center" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="contacts[${contactCounter}][email]" placeholder="contact@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                            <input type="text" name="contacts[${contactCounter}][phone]" placeholder="e.g., +6281234567890" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">WhatsApp</label>
                            <input type="text" name="contacts[${contactCounter}][whatsapp]" placeholder="e.g., +6281234567890" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                        <input type="url" name="contacts[${contactCounter}][website]" placeholder="https://example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <button type="button" class="remove-contact ml-4 mt-4 text-red-500 hover:text-red-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        `;
        container.appendChild(newItem);
        contactCounter++;
        
        // Add event listener to remove button
        newItem.querySelector('.remove-contact').addEventListener('click', function() {
            container.removeChild(newItem);
        });
    });

    // Add event listener to first contact remove button
    document.querySelector('.remove-contact').addEventListener('click', function() {
        const container = this.closest('.contact-item');
        if (document.querySelectorAll('.contact-item').length > 1) {
            container.remove();
        } else {
            // Clear inputs instead of removing the only contact item
            container.querySelectorAll('input, textarea').forEach(input => input.value = '');
        }
    });

    // Custom category handling
    document.getElementById('category_other').addEventListener('change', function() {
        const textInput = document.getElementById('category_other_text');
        textInput.disabled = !this.checked;
        if (!this.checked) {
            textInput.value = '';
        }
    });

    // Initialize the "Other" category text input state
    document.getElementById('category_other_text').disabled = !document.getElementById('category_other').checked;

    // Form validation
    document.querySelector('form').addEventListener('submit', function(e) {
        const requiredFields = document.querySelectorAll('input[required], textarea[required], select[required]');
        let hasErrors = false;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('border-red-500');
                hasErrors = true;
                
                // Add error message if not already present
                const errorContainer = field.parentElement.querySelector('.error-message');
                if (!errorContainer) {
                    const errorMsg = document.createElement('p');
                    errorMsg.className = 'mt-1 text-sm text-red-600 error-message';
                    errorMsg.textContent = 'This field is required';
                    field.parentElement.appendChild(errorMsg);
                }
            } else {
                field.classList.remove('border-red-500');
                const errorContainer = field.parentElement.querySelector('.error-message');
                if (errorContainer) {
                    errorContainer.remove();
                }
            }
        });
        
        // Date validations
        const startDate = new Date(document.getElementById('start_date').value);
        const endDate = new Date(document.getElementById('end_date').value);
        const regStartDate = new Date(document.getElementById('registration_start_date').value);
        const regEndDate = new Date(document.getElementById('registration_end_date').value);
        
        if (endDate < startDate) {
            document.getElementById('end_date').classList.add('border-red-500');
            hasErrors = true;
            alert('Competition end date cannot be before start date');
        }
        
        if (regEndDate < regStartDate) {
            document.getElementById('registration_end_date').classList.add('border-red-500');
            hasErrors = true;
            alert('Registration end date cannot be before registration start date');
        }
        
        if (hasErrors) {
            e.preventDefault();
            window.scrollTo(0, 0);
        }
    });
</script>
@endsection