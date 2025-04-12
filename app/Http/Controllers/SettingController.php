<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        if (!$settings) {
            $settings = new Setting();
            $settings->save();
        } 
        return view('cms.setting.index', compact('settings'));
    }

    public function create()
    { 
        return view('cms.setting.create');
    }

    public function edit($setting)
    {
        return view('cms.setting.edit', compact('setting'));
    }

    function update(Request $request) {
        $request->validate([
            'logo' => 'nullable|string|max:255',
            'favicon' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'keywords' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'social_media' => 'nullable|string|max:255',
            'google_map' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'instagram' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'tiktok' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'telegram' => 'nullable|url|max:255',
            'pinterest' => 'nullable|url|max:255',
            'twitch' => 'nullable|url|max:255',
            'snapchat' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'blog' => 'nullable|url|max:255',
            'privacy_policy' => 'nullable|url|max:255',
            'terms_of_service' => 'nullable|url|max:255',
            'about_us' => 'nullable|url|max:255',
            'contact_us' => 'nullable|url|max:255',
            'faq' => 'nullable|url|max:255',
            'help' => 'nullable|url|max:255',
            'support' => 'nullable|url|max:255',
            'newsletter' => 'nullable|url|max:255',
            'sitemap' => 'nullable|url|max:255',
            'robots_txt' => 'nullable|url|max:255',
            'backup' => 'nullable|url|max:255',
            'maintenance_mode' => 'nullable|string|max:255',
            'analytics' => 'nullable|string|max:255',
        ]);

        try {
            $settings = Setting::first();
            if (!$settings) {
                $settings = new Setting();
            }
            $settings->update($request->only([
                'logo',
                'favicon',
                'title',
                'description',
                'keywords',
                'address',
                'phone',
                'email',
                'social_media',
                'google_map',
                'whatsapp',
                'instagram',
                'facebook',
                'twitter',
                'youtube',
                'tiktok',
                'linkedin',
                'telegram',
                'pinterest',
                'twitch',
                'snapchat',
                'github',
                'blog',
                'privacy_policy',
                'terms_of_service',
                'about_us',
                'contact_us',
                'faq',
                'help',
                'support',
                'newsletter',
                'sitemap',
                'robots_txt',
                'backup',
                'maintenance_mode',
                'analytics',
            ]));
            return redirect()->route('cms.setting')->with(['success' => 'Settings updated successfully']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Failed to update settings: ' . $e->getMessage()]);
        }
    }
}
