<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\CompetitionContact;
use App\Models\CompetitionFaq;
use App\Models\CompetitionTimeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminCompetitionController extends Controller
{
    public function index(Request $request)
    {
        // Start with a base query
        $query = Competition::with(['timelines', 'faqs', 'contacts']);

        // Apply search filter if provided
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('organizer', 'like', "%{$search}%")
                ->orWhere('location', 'like', "%{$search}%");
        }

        // Apply level filter if provided
        if ($request->has('level') && !empty($request->level)) {
            $query->where('level', $request->level);
        }

        // Apply category filter if provided
        if ($request->has('category') && !empty($request->category)) {
            // For JSON array field, we need a special approach
            $query->whereJsonContains('categories', $request->category);
        }

        // Get the competitions with pagination
        $competitions = $query->latest()->paginate(10);

        // Pass data to view
        return view('modules.admin.competition.manage', compact('competitions'));
    }

    public function create()
    {
        return view('modules.admin.competition.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'level' => 'required|string|in:Nasional,Internasional,Regional',
            'location' => 'required|string|max:255',
            'guidebook_url' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categories' => 'required|array|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'registration_start_date' => 'required|date',
            'registration_end_date' => 'required|date|after_or_equal:registration_start_date',
            'overview' => 'required|string',
            'rules' => 'nullable|string',
            'first_prize' => 'nullable|numeric',
            'first_prize_description' => 'nullable|string|max:255',
            'second_prize' => 'nullable|numeric',
            'second_prize_description' => 'nullable|string|max:255',
            'third_prize' => 'nullable|numeric',
            'third_prize_description' => 'nullable|string|max:255',
            'additional_prizes' => 'nullable|string',
            'timelines' => 'required|array|min:1',
            'timelines.*.title' => 'required|string|max:255',
            'timelines.*.start_date' => 'required|date',
            'timelines.*.end_date' => 'required|date|after_or_equal:timelines.*.start_date',
            'timelines.*.description' => 'required|string',
            'contacts.*.name' => 'required|string|max:255',
            'contacts.*.role' => 'nullable|string|max:255',
            'contacts.*.email' => 'nullable|email',
            'contacts.*.phone' => 'nullable|string|max:20',
            'contacts.*.whatsapp' => 'nullable|string|max:20',
            'contacts.*.website' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            DB::beginTransaction();

            $competitionData = $request->except(['logo', 'timelines', 'faqs', 'contacts', '_token']);

            // Handle logo upload
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoPath = $logo->store('competition_logos', 'public');
                $competitionData['logo'] = $logoPath;
            }

            // Create competition
            $competition = Competition::create($competitionData);

            // Create timelines
            if (isset($request->timelines) && is_array($request->timelines)) {
                foreach ($request->timelines as $timeline) {
                    $competition->timelines()->create($timeline);
                }
            }

            // Create FAQs
            if (isset($request->faqs) && is_array($request->faqs)) {
                foreach ($request->faqs as $faq) {
                    if (!empty($faq['question']) && !empty($faq['answer'])) {
                        $competition->faqs()->create($faq);
                    }
                }
            }

            // Create contacts
            if (isset($request->contacts) && is_array($request->contacts)) {
                foreach ($request->contacts as $contact) {
                    if (!empty($contact['name'])) {
                        $competition->contacts()->create($contact);
                    }
                }
            }

            DB::commit();
            return redirect()->route('admin.competition')
                ->with('success', 'Competition created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'An error occurred: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function edit($id)
    {
        $competition = Competition::with(['timelines', 'faqs', 'contacts'])->findOrFail($id);
        return view('modules.admin.competition.edit', compact('competition'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'level' => 'required|string|in:Nasional,Internasional,Regional',
            'location' => 'required|string|max:255',
            'guidebook_url' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categories' => 'required|array|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'registration_start_date' => 'required|date',
            'registration_end_date' => 'required|date|after_or_equal:registration_start_date',
            'overview' => 'required|string',
            'rules' => 'nullable|string',
            'first_prize' => 'nullable|numeric',
            'first_prize_description' => 'nullable|string|max:255',
            'second_prize' => 'nullable|numeric',
            'second_prize_description' => 'nullable|string|max:255',
            'third_prize' => 'nullable|numeric',
            'third_prize_description' => 'nullable|string|max:255',
            'additional_prizes' => 'nullable|string',
            'timelines' => 'required|array|min:1',
            'timelines.*.title' => 'required|string|max:255',
            'timelines.*.start_date' => 'required|date',
            'timelines.*.end_date' => 'required|date|after_or_equal:timelines.*.start_date',
            'timelines.*.description' => 'required|string',
            'contacts.*.name' => 'required|string|max:255',
            'contacts.*.role' => 'nullable|string|max:255',
            'contacts.*.email' => 'nullable|email',
            'contacts.*.phone' => 'nullable|string|max:20',
            'contacts.*.whatsapp' => 'nullable|string|max:20',
            'contacts.*.website' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            DB::beginTransaction();

            $competition = Competition::findOrFail($id);
            $competitionData = $request->except(['logo', 'timelines', 'faqs', 'contacts', '_token', '_method']);

            // Handle logo upload
            if ($request->hasFile('logo')) {
                // Delete old logo if exists
                if ($competition->logo && Storage::disk('public')->exists($competition->logo)) {
                    Storage::disk('public')->delete($competition->logo);
                }

                $logo = $request->file('logo');
                $logoPath = $logo->store('competition_logos', 'public');
                $competitionData['logo'] = $logoPath;
            }

            // Update competition
            $competition->update($competitionData);

            // Update timelines - delete existing and create new ones
            $competition->timelines()->delete();
            if (isset($request->timelines) && is_array($request->timelines)) {
                foreach ($request->timelines as $timeline) {
                    $competition->timelines()->create($timeline);
                }
            }

            // Update FAQs - delete existing and create new ones
            $competition->faqs()->delete();
            if (isset($request->faqs) && is_array($request->faqs)) {
                foreach ($request->faqs as $faq) {
                    if (!empty($faq['question']) && !empty($faq['answer'])) {
                        $competition->faqs()->create($faq);
                    }
                }
            }

            // Update contacts - delete existing and create new ones
            $competition->contacts()->delete();
            if (isset($request->contacts) && is_array($request->contacts)) {
                foreach ($request->contacts as $contact) {
                    if (!empty($contact['name'])) {
                        $competition->contacts()->create($contact);
                    }
                }
            }

            DB::commit();
            return redirect()->route('admin.competition')
                ->with('success', 'Competition updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'An error occurred: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $competition = Competition::findOrFail($id);

            // Delete logo file if exists
            if ($competition->logo && Storage::disk('public')->exists($competition->logo)) {
                Storage::disk('public')->delete($competition->logo);
            }

            // Related records will be deleted automatically due to cascade delete in migration
            $competition->delete();

            return redirect()->route('admin.competition')
                ->with('success', 'Competition deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('admin.competition')
                ->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}