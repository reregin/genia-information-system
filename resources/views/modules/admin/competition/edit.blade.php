@extends('layouts.admin')

@section('admin-content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
        <div class="flex items-center mb-6">
            {{-- Ganti route ke halaman index atau show competition --}}
            <a href="{{ route('admin.competition') }}" class="mr-3 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <h2 class="text-2xl font-semibold text-gray-800">
                Edit Competition
            </h2>
        </div>

        {{-- Ganti route ke route update competition --}}
        <form action="{{ route('admin.competition.update', $competition->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT') {{-- Atau PATCH --}}

            <!-- Basic Information -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Basic Information</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-1 md:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Competition Name <span class="text-red-600">*</span></label>
                        <input type="text" id="name" name="name" required value="{{ old('name', $competition->name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="logo" class="block text-sm font-medium text-gray-700 mb-1">Logo</label>
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 h-16 w-16 bg-gray-100 rounded-md overflow-hidden border border-gray-200">
                                {{-- Tampilkan logo yang ada, ganti path jika perlu --}}
                                <img id="logo-preview" src="{{ $competition->logo ? asset('images/' . $competition->logo) : asset('images/logo_placeholder.png') }}" alt="Logo preview" class="h-full w-full object-contain">
                            </div>
                            <div class="flex-grow">
                                <input type="file" id="logo" name="logo" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="mt-1 text-xs text-gray-500">Recommended: Square image, 400x400px or larger. Leave blank to keep the current logo.</p>
                            </div>
                        </div>
                        @error('logo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="organizer" class="block text-sm font-medium text-gray-700 mb-1">Organizer <span class="text-red-600">*</span></label>
                        <input type="text" id="organizer" name="organizer" required value="{{ old('organizer', $competition->organizer) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('organizer')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="level" class="block text-sm font-medium text-gray-700 mb-1">Level <span class="text-red-600">*</span></label>
                        <select id="level" name="level" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select Level</option>
                            <option value="Nasional" {{ old('level', $competition->level) == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                            <option value="Internasional" {{ old('level', $competition->level) == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                            <option value="Regional" {{ old('level', $competition->level) == 'Regional' ? 'selected' : '' }}>Regional</option>
                            {{-- Tambahkan level lain jika ada --}}
                        </select>
                        @error('level')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Location <span class="text-red-600">*</span></label>
                        <input type="text" id="location" name="location" required value="{{ old('location', $competition->location) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('location')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="guidebook_url" class="block text-sm font-medium text-gray-700 mb-1">Guidebook URL</label>
                        <input type="url" id="guidebook_url" name="guidebook_url" value="{{ old('guidebook_url', $competition->guidebook_url) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('guidebook_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Categories -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Categories</h3>
                @php
                    // Get categories from old input or from the competition data
                    $currentCategories = old('categories', $competition->categories ?? []);
                    $predefinedCategories = ['Riset dan Inovasi', 'Akademik', 'Kewirausahaan', 'Seni', 'Olahraga'];
                    $otherCategoryValue = '';
                    $otherCategoryChecked = false;

                    // Check if 'other' checkbox was checked in old input
                    if (old('category_other_checkbox')) {
                       $otherCategoryChecked = true;
                       // Find the 'other' value from the old categories array
                       $oldOther = array_diff(old('categories', []), $predefinedCategories);
                       $otherCategoryValue = reset($oldOther) ?: ''; // Get the first 'other' value
                    } else if (!old() && !empty($currentCategories)) { // Check initial load
                        $customCategories = array_diff($currentCategories, $predefinedCategories);
                        if (!empty($customCategories)) {
                            $otherCategoryChecked = true;
                            $otherCategoryValue = reset($customCategories); // Get the first custom category
                        }
                    }
                @endphp
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach($predefinedCategories as $category)
                        <div class="flex items-start">
                            <input type="checkbox" id="category_{{ Str::slug($category) }}" name="categories[]" value="{{ $category }}" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                {{ in_array($category, $currentCategories) ? 'checked' : '' }}>
                            <label for="category_{{ Str::slug($category) }}" class="ml-2 block text-sm text-gray-700">{{ $category }}</label>
                        </div>
                    @endforeach

                    <div class="flex items-start">
                         {{-- Checkbox helper to know if 'other' was intended --}}
                        <input type="checkbox" id="category_other" name="category_other_checkbox" value="1" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                            {{ $otherCategoryChecked ? 'checked' : '' }}>
                        <div class="ml-2">
                            <label for="category_other" class="block text-sm text-gray-700">Other:</label>
                             {{-- This input's name is also 'categories[]' so its value gets submitted if 'category_other' is checked --}}
                            <input type="text" id="category_other_text" name="categories[]" placeholder="Add custom category" value="{{ $otherCategoryValue }}"
                                   class="mt-1 w-full px-3 py-1 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   {{ !$otherCategoryChecked ? 'disabled' : '' }}>
                        </div>
                    </div>
                </div>
                @error('categories')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                 @error('category_other_checkbox') {{-- Potential error if needed --}}
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Dates -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Important Dates</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Competition Start Date <span class="text-red-600">*</span></label>
                        <input type="date" id="start_date" name="start_date" required value="{{ old('start_date', $competition->start_date ? $competition->start_date->format('Y-m-d') : '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('start_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="end_date" class="block text-sm font-medium text-gray-700 mb-1">Competition End Date <span class="text-red-600">*</span></label>
                        <input type="date" id="end_date" name="end_date" required value="{{ old('end_date', $competition->end_date ? $competition->end_date->format('Y-m-d') : '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('end_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="registration_start_date" class="block text-sm font-medium text-gray-700 mb-1">Registration Start Date <span class="text-red-600">*</span></label>
                        <input type="date" id="registration_start_date" name="registration_start_date" required value="{{ old('registration_start_date', $competition->registration_start_date ? $competition->registration_start_date->format('Y-m-d') : '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('registration_start_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="registration_end_date" class="block text-sm font-medium text-gray-700 mb-1">Registration End Date <span class="text-red-600">*</span></label>
                        <input type="date" id="registration_end_date" name="registration_end_date" required value="{{ old('registration_end_date', $competition->registration_end_date ? $competition->registration_end_date->format('Y-m-d') : '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
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
                    {{-- Loop through existing timelines or old input --}}
                    @forelse(old('timelines', $competition->timelines ?? []) as $index => $timeline)
                        <div class="timeline-item bg-white p-4 rounded-md border border-gray-200">
                             <div class="flex justify-between items-start">
                                <div class="w-full">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Phase Title <span class="text-red-600">*</span></label>
                                            <input type="text" name="timelines[{{ $index }}][title]" required placeholder="e.g., Registration" value="{{ $timeline['title'] ?? ($timeline->title ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                        <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                                            <div class="flex-1">
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Start Date <span class="text-red-600">*</span></label>
                                                {{-- Handle Carbon instance or array access --}}
                                                @php
                                                    $startDateValue = '';
                                                    if (isset($timeline['start_date'])) {
                                                        $startDateValue = $timeline['start_date'];
                                                    } elseif (isset($timeline->start_date)) {
                                                        $startDateValue = $timeline->start_date instanceof \Carbon\Carbon ? $timeline->start_date->format('Y-m-d') : $timeline->start_date;
                                                    }
                                                @endphp
                                                <input type="date" name="timelines[{{ $index }}][start_date]" required value="{{ $startDateValue }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                            </div>
                                            <div class="flex-1">
                                                <label class="block text-sm font-medium text-gray-700 mb-1">End Date <span class="text-red-600">*</span></label>
                                                 {{-- Handle Carbon instance or array access --}}
                                                @php
                                                    $endDateValue = '';
                                                    if (isset($timeline['end_date'])) {
                                                        $endDateValue = $timeline['end_date'];
                                                    } elseif (isset($timeline->end_date)) {
                                                         $endDateValue = $timeline->end_date instanceof \Carbon\Carbon ? $timeline->end_date->format('Y-m-d') : $timeline->end_date;
                                                    }
                                                @endphp
                                                <input type="date" name="timelines[{{ $index }}][end_date]" required value="{{ $endDateValue }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Description <span class="text-red-600">*</span></label>
                                        <textarea name="timelines[{{ $index }}][description]" required rows="2" placeholder="Describe this phase..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ $timeline['description'] ?? ($timeline->description ?? '') }}</textarea>
                                    </div>
                                </div>
                                <button type="button" class="remove-timeline ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @empty
                        {{-- Template for the first item if none exist --}}
                        <div class="timeline-item bg-white p-4 rounded-md border border-gray-200">
                             <div class="flex justify-between items-start">
                                <div class="w-full">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Phase Title <span class="text-red-600">*</span></label>
                                            <input type="text" name="timelines[0][title]" required placeholder="e.g., Registration" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                        <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
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
                                <button type="button" class="remove-timeline ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforelse
                </div>
                 @error('timelines.*.title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                 @error('timelines.*.start_date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                 @error('timelines.*.end_date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                 @error('timelines.*.description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <!-- Overview & Details -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Overview & Details</h3>

                <div class="space-y-6">
                    <div>
                        <label for="overview" class="block text-sm font-medium text-gray-700 mb-1">Competition Overview <span class="text-red-600">*</span></label>
                        <textarea id="overview" name="overview" required rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('overview', $competition->overview) }}</textarea>
                        @error('overview')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="rules" class="block text-sm font-medium text-gray-700 mb-1">Rules & Criteria</label>
                        <textarea id="rules" name="rules" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('rules', $competition->rules) }}</textarea>
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
                            <input type="number" id="first_prize" name="first_prize" value="{{ old('first_prize', $competition->first_prize) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('first_prize')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="first_prize_description" class="block text-sm font-medium text-gray-700 mb-1">First Prize Description</label>
                            <input type="text" id="first_prize_description" name="first_prize_description" value="{{ old('first_prize_description', $competition->first_prize_description) }}" placeholder="e.g., Cash + Trophy" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('first_prize_description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="second_prize" class="block text-sm font-medium text-gray-700 mb-1">Second Prize (Rp)</label>
                            <input type="number" id="second_prize" name="second_prize" value="{{ old('second_prize', $competition->second_prize) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('second_prize')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="second_prize_description" class="block text-sm font-medium text-gray-700 mb-1">Second Prize Description</label>
                            <input type="text" id="second_prize_description" name="second_prize_description" value="{{ old('second_prize_description', $competition->second_prize_description) }}" placeholder="e.g., Cash + Certificate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('second_prize_description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="third_prize" class="block text-sm font-medium text-gray-700 mb-1">Third Prize (Rp)</label>
                            <input type="number" id="third_prize" name="third_prize" value="{{ old('third_prize', $competition->third_prize) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('third_prize')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="third_prize_description" class="block text-sm font-medium text-gray-700 mb-1">Third Prize Description</label>
                            <input type="text" id="third_prize_description" name="third_prize_description" value="{{ old('third_prize_description', $competition->third_prize_description) }}" placeholder="e.g., Cash + Certificate" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('third_prize_description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-span-1 md:col-span-2">
                            <label for="additional_prizes" class="block text-sm font-medium text-gray-700 mb-1">Additional Prizes/Benefits</label>
                            <textarea id="additional_prizes" name="additional_prizes" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('additional_prizes', $competition->additional_prizes) }}</textarea>
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
                    {{-- Loop through existing FAQs or old input --}}
                    @forelse(old('faqs', $competition->faqs ?? []) as $index => $faq)
                        <div class="faq-item bg-white p-4 rounded-md border border-gray-200">
                            <div class="flex justify-between items-start">
                                <div class="w-full space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Question</label>
                                        <input type="text" name="faqs[{{ $index }}][question]" placeholder="Enter a frequently asked question" value="{{ $faq['question'] ?? ($faq->question ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Answer</label>
                                        <textarea name="faqs[{{ $index }}][answer]" rows="3" placeholder="Enter the answer to the question" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ $faq['answer'] ?? ($faq->answer ?? '') }}</textarea>
                                    </div>
                                </div>
                                <button type="button" class="remove-faq ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @empty
                        {{-- Template for the first item if none exist --}}
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
                                <button type="button" class="remove-faq ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforelse
                </div>
                 @error('faqs.*.question') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                 @error('faqs.*.answer') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
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
                     {{-- Loop through existing contacts or old input --}}
                    @forelse(old('contacts', $competition->contacts ?? []) as $index => $contact)
                        <div class="contact-item bg-white p-4 rounded-md border border-gray-200">
                            <div class="flex justify-between items-start">
                                <div class="w-full">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Name/Title <span class="text-red-600">*</span></label>
                                            <input type="text" name="contacts[{{ $index }}][name]" required placeholder="e.g., Competition Secretariat" value="{{ $contact['name'] ?? ($contact->name ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                                            <input type="text" name="contacts[{{ $index }}][role]" placeholder="e.g., Information Center" value="{{ $contact['role'] ?? ($contact->role ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                            <input type="email" name="contacts[{{ $index }}][email]" placeholder="contact@example.com" value="{{ $contact['email'] ?? ($contact->email ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                            <input type="text" name="contacts[{{ $index }}][phone]" placeholder="e.g., +6281234567890" value="{{ $contact['phone'] ?? ($contact->phone ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">WhatsApp</label>
                                            <input type="text" name="contacts[{{ $index }}][whatsapp]" placeholder="e.g., +6281234567890" value="{{ $contact['whatsapp'] ?? ($contact->whatsapp ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                                        <input type="url" name="contacts[{{ $index }}][website]" placeholder="https://example.com" value="{{ $contact['website'] ?? ($contact->website ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>
                                <button type="button" class="remove-contact ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @empty
                        {{-- Template for the first item if none exist --}}
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
                                <button type="button" class="remove-contact ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforelse
                </div>
                 @error('contacts.*.name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                 {{-- Add other contact errors if needed --}}
            </div>


            <!-- Submit Buttons -->
            <div class="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-3 pt-4">
                {{-- Ganti route ke halaman index atau show competition --}}
                <a href="" class="w-full sm:w-auto px-4 py-2 bg-gray-200 text-gray-800 font-medium rounded-lg hover:bg-gray-300 transition-colors flex items-center justify-center">Cancel</a>
                <button type="submit" class="w-full sm:w-auto px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                    </svg>
                    Update Competition
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        // --- Logo Preview ---
        const logoInput = document.getElementById('logo');
        const logoPreview = document.getElementById('logo-preview');
        if (logoInput) {
            logoInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file && logoPreview) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        logoPreview.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
        }

        // --- Dynamic Section Management (Timeline, FAQ, Contact) using Event Delegation ---

        // Timeline
        const timelineContainer = document.getElementById('timeline-container');
        const addTimelineButton = document.getElementById('add-timeline');
        // Initialize counter based on existing items (consider old input)
        let timelineCounter = {{ count(old('timelines', $competition->timelines ?? [])) }};

        if (addTimelineButton && timelineContainer) {
            addTimelineButton.addEventListener('click', function() {
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
                                <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
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
                        <button type="button" class="remove-timeline ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" style="pointer-events: none;"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /> </svg>
                        </button>
                    </div>
                `;
                timelineContainer.appendChild(newItem);
                timelineCounter++;
            });

            // Event listener for removing timelines (delegation)
            timelineContainer.addEventListener('click', function(e) {
                 // Find the closest remove button OR its SVG child
                const removeButton = e.target.closest('.remove-timeline');
                if (removeButton) {
                    const itemToRemove = removeButton.closest('.timeline-item');
                    if (itemToRemove) {
                        itemToRemove.remove();
                        // Note: Indices don't auto-renumber, but Laravel handles non-sequential keys fine.
                    }
                }
            });
        }

        // FAQ
        const faqContainer = document.getElementById('faq-container');
        const addFaqButton = document.getElementById('add-faq');
        let faqCounter = {{ count(old('faqs', $competition->faqs ?? [])) }};

        if (addFaqButton && faqContainer) {
            addFaqButton.addEventListener('click', function() {
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
                        <button type="button" class="remove-faq ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" style="pointer-events: none;"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /> </svg>
                        </button>
                    </div>
                `;
                faqContainer.appendChild(newItem);
                faqCounter++;
            });

             // Event listener for removing FAQs (delegation)
            faqContainer.addEventListener('click', function(e) {
                const removeButton = e.target.closest('.remove-faq');
                if (removeButton) {
                    const itemToRemove = removeButton.closest('.faq-item');
                     // Optional: Prevent removing the last item, or clear it instead
                    // if (faqContainer.querySelectorAll('.faq-item').length > 1) {
                        itemToRemove.remove();
                    // } else {
                        // Maybe clear the fields of the last item?
                        // itemToRemove.querySelectorAll('input, textarea').forEach(input => input.value = '');
                    // }
                }
            });
        }


        // Contact
        const contactContainer = document.getElementById('contact-container');
        const addContactButton = document.getElementById('add-contact');
        let contactCounter = {{ count(old('contacts', $competition->contacts ?? [])) }};

         if (addContactButton && contactContainer) {
            addContactButton.addEventListener('click', function() {
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
                         <button type="button" class="remove-contact ml-4 mt-4 text-red-500 hover:text-red-700 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" style="pointer-events: none;"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /> </svg>
                         </button>
                    </div>
                `;
                contactContainer.appendChild(newItem);
                contactCounter++;
            });

            // Event listener for removing Contacts (delegation)
            contactContainer.addEventListener('click', function(e) {
                const removeButton = e.target.closest('.remove-contact');
                if (removeButton) {
                    const itemToRemove = removeButton.closest('.contact-item');
                    itemToRemove.remove();
                }
            });
        }


        // --- Custom Category Handling ---
        const otherCategoryCheckbox = document.getElementById('category_other');
        const otherCategoryText = document.getElementById('category_other_text');

        function toggleOtherCategory() {
            if (otherCategoryCheckbox && otherCategoryText) {
                otherCategoryText.disabled = !otherCategoryCheckbox.checked;
                if (!otherCategoryCheckbox.checked) {
                    otherCategoryText.value = ''; // Clear text if unchecked
                }
            }
        }

        if (otherCategoryCheckbox) {
            otherCategoryCheckbox.addEventListener('change', toggleOtherCategory);
        }
        // Initial check on page load
        // toggleOtherCategory(); // Already handled by PHP setting the disabled attribute


        // --- Basic Form Validation ---
        const competitionForm = document.querySelector('form');
        if(competitionForm) {
            competitionForm.addEventListener('submit', function(e) {
                const requiredFields = competitionForm.querySelectorAll('input[required], textarea[required], select[required]');
                let hasErrors = false;
                let firstErrorField = null;

                // Clear previous custom errors
                competitionForm.querySelectorAll('.error-message').forEach(msg => msg.remove());
                requiredFields.forEach(field => field.classList.remove('border-red-500'));


                requiredFields.forEach(field => {
                    // Check only visible/enabled fields
                    if (field.offsetWidth > 0 || field.offsetHeight > 0 || field.type === 'hidden') {
                         if (!field.value.trim()) {
                            field.classList.add('border-red-500');
                            hasErrors = true;
                            if (!firstErrorField) firstErrorField = field;

                            // Add error message
                            const errorMsg = document.createElement('p');
                            errorMsg.className = 'mt-1 text-sm text-red-600 error-message';
                            errorMsg.textContent = 'This field is required.';
                             // Insert after the field or its container div if structured that way
                            field.parentNode.insertBefore(errorMsg, field.nextSibling);
                        }
                    }
                });

                // Date validations (simple checks)
                const startDateInput = document.getElementById('start_date');
                const endDateInput = document.getElementById('end_date');
                const regStartDateInput = document.getElementById('registration_start_date');
                const regEndDateInput = document.getElementById('registration_end_date');

                if (startDateInput && endDateInput && startDateInput.value && endDateInput.value) {
                    const startDate = new Date(startDateInput.value);
                    const endDate = new Date(endDateInput.value);
                    if (endDate < startDate) {
                        endDateInput.classList.add('border-red-500');
                        hasErrors = true;
                         if (!firstErrorField) firstErrorField = endDateInput;
                        const errorMsg = document.createElement('p');
                        errorMsg.className = 'mt-1 text-sm text-red-600 error-message';
                        errorMsg.textContent = 'End date cannot be before start date.';
                        endDateInput.parentNode.insertBefore(errorMsg, endDateInput.nextSibling);
                    }
                }

                 if (regStartDateInput && regEndDateInput && regStartDateInput.value && regEndDateInput.value) {
                    const regStartDate = new Date(regStartDateInput.value);
                    const regEndDate = new Date(regEndDateInput.value);
                     if (regEndDate < regStartDate) {
                        regEndDateInput.classList.add('border-red-500');
                        hasErrors = true;
                         if (!firstErrorField) firstErrorField = regEndDateInput;
                        const errorMsg = document.createElement('p');
                        errorMsg.className = 'mt-1 text-sm text-red-600 error-message';
                        errorMsg.textContent = 'Registration end date cannot be before registration start date.';
                        regEndDateInput.parentNode.insertBefore(errorMsg, regEndDateInput.nextSibling);
                    }
                }

                // Check 'Other' category text if checkbox is checked
                 if (otherCategoryCheckbox && otherCategoryCheckbox.checked && otherCategoryText && !otherCategoryText.value.trim()) {
                    otherCategoryText.classList.add('border-red-500');
                    hasErrors = true;
                    if (!firstErrorField) firstErrorField = otherCategoryText;
                    const errorMsg = document.createElement('p');
                    errorMsg.className = 'mt-1 text-sm text-red-600 error-message';
                    errorMsg.textContent = 'Please specify the custom category.';
                    // Place error after the text input or its container div
                    otherCategoryText.parentNode.insertBefore(errorMsg, otherCategoryText.nextSibling);
                 }


                if (hasErrors) {
                    e.preventDefault(); // Stop form submission
                    // Scroll to the first field with an error
                    if(firstErrorField) {
                        firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstErrorField.focus();
                    } else {
                         window.scrollTo(0, 0); // Fallback scroll to top
                    }
                }
            });
        }

    }); // End DOMContentLoaded
</script>
@endsection