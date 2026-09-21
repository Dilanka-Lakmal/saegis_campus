<div class="top-bar">
    <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
        <!-- Left Side: Contact Information -->
        <div class="top-bar-left d-flex align-items-center gap-3">
            <!-- Email -->
            <a href="mailto:{{ $settings['campus_email'] ?? 'info@saegis.ac.lk' }}" class="top-bar-link">
                <svg class="top-bar-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                </svg>
                <span>{{ $settings['campus_email'] ?? 'info@saegis.ac.lk' }}</span>
            </a>

            <!-- Phone Numbers -->
            <div class="top-bar-link">
                <svg class="top-bar-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58z"/>
                </svg>
                <a href="tel:{{ $settings['campus_phone_1'] ?? '+94770430000' }}">
                    {{ $settings['campus_phone_1'] ?? '+94 770430000' }}
                </a>
                <span class="mx-1">/</span>
                <a href="tel:{{ $settings['campus_phone_2'] ?? '+94117430000' }}">
                    {{ $settings['campus_phone_2'] ?? '+94 117430000' }}
                </a>
            </div>
        </div>

        <!-- Right Side: Student Portal -->
        <div class="top-bar-right">
            <a href="{{ Route::has('portal') ? route('portal') : '#' }}" class="top-bar-link">
                <svg class="top-bar-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
                <span>Student Portal</span>
            </a>
        </div>
    </div>
</div>