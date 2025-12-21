<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Bakso Kuwung Satu')</title>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <style>
        :root {
            --bg-primary: #0f0f0f;
            --bg-secondary: #171717;
            --bg-tertiary: #262626;
            --bg-elevated: #1c1c1c;

            --border-default: #262626;
            --border-subtle: #1f1f1f;
            --border-strong: #404040;

            --text-heading: #fafafa;
            --text-body: #a3a3a3;
            --text-muted: #737373;

            --accent-primary: #3b82f6;
            --accent-primary-hover: #2563eb;
            --accent-soft: rgba(59, 130, 246, 0.1);

            --danger-soft: rgba(239, 68, 68, 0.15);
            --danger-text: #fca5a5;
            --danger-border: rgba(239, 68, 68, 0.3);

            --hover-bg: #262626;
            --active-bg: #303030;

            --radius-base: 0.5rem;
            --radius-sm: 0.375rem;
        }
    </style>
    @vite('resources/css/app.css')
</head>


<body class="min-h-screen flex flex-col" style="background-color: var(--bg-secondary);">
    <nav class="fixed top-0 z-50 w-full"
        style="background-color: var(--bg-primary); border-bottom: 1px solid var(--border-default);">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="top-bar-sidebar" data-drawer-toggle="top-bar-sidebar"
                        aria-controls="top-bar-sidebar" type="button"
                        class="sm:hidden font-medium leading-5 text-sm p-2 rounded-md transition-colors"
                        style="color: var(--text-heading); background: transparent; border: 1px solid transparent;"
                        onmouseover="this.style.backgroundColor='var(--hover-bg)'"
                        onmouseout="this.style.backgroundColor='transparent'">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h10" />
                        </svg>
                    </button>
                    {{-- Logo --}}
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24 items-center gap-3">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6" alt="FlowBite Logo" />
                        <span class="text-lg font-semibold whitespace-nowrap"
                            style="color: var(--text-heading);">Bakso Kuwung Satu</span>
                    </a>
                </div>
                {{-- User menu --}}
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button" class="flex text-sm rounded-full ring-2 ring-offset-2 transition-all"
                                style="ring-color: var(--border-default); ring-offset-color: var(--bg-primary);"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        {{-- Dropdown menu --}}
                        <div class="z-50 hidden w-48 rounded-lg shadow-xl overflow-hidden" id="dropdown-user"
                            style="background-color: var(--bg-elevated); border: 1px solid var(--border-default);">
                            <div class="px-4 py-3" style="border-bottom: 1px solid var(--border-default);"
                                role="none">
                                <p class="text-sm font-medium" style="color: var(--text-heading);" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm truncate" style="color: var(--text-muted);" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm transition-colors"
                                        style="color: var(--text-body);"
                                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--text-heading)';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm transition-colors"
                                        style="color: var(--text-body);"
                                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--text-heading)';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';"
                                        role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm transition-colors"
                                        style="color: var(--text-body);"
                                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--text-heading)';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';"
                                        role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm transition-colors"
                                        style="color: var(--text-body);"
                                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--text-heading)';"
                                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Sidebar --}}
    <aside id="top-bar-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto"
            style="background-color: var(--bg-primary); border-right: 1px solid var(--border-default);">
            {{-- Sidebar logo --}}
            <a href="https://flowbite.com/" class="flex items-center ps-2.5 mb-6 gap-3">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-6" alt="Flowbite Logo" />
                <span class="text-lg font-semibold whitespace-nowrap"
                    style="color: var(--text-heading);">Flowbite</span>
            </a>
            {{-- Navigation menu --}}
            <ul class="space-y-1">
                <li>
                    <a href="#" class="flex items-center px-3 py-2.5 rounded-lg transition-colors group"
                        style="color: var(--text-body);"
                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--accent-primary)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';">
                        <svg class="w-5 h-5 transition-colors" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z" />
                        </svg>
                        <span class="ms-3 font-medium">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/package" class="flex items-center px-3 py-2.5 rounded-lg transition-colors group"
                        style="color: var(--text-body);"
                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--accent-primary)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';">
                        <svg class="shrink-0 w-5 h-5 transition-colors" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap font-medium">Package</span>
                        <span
                            class="inline-flex items-center justify-center w-5 h-5 text-xs font-semibold rounded-full"
                            style="background-color: var(--danger-soft); color: var(--danger-text); border: 1px solid var(--danger-border);">2</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/menu/" class="flex items-center px-3 py-2.5 rounded-lg transition-colors group"
                        style="color: var(--text-body);"
                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--accent-primary)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';">
                        <svg class="shrink-0 w-5 h-5 transition-colors" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap font-medium">Menu</span>
                        <span
                            class="inline-flex items-center justify-center w-5 h-5 text-xs font-semibold rounded-full"
                            style="background-color: var(--danger-soft); color: var(--danger-text); border: 1px solid var(--danger-border);">2</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/users/" class="flex items-center px-3 py-2.5 rounded-lg transition-colors group"
                        style="color: var(--text-body);"
                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--accent-primary)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';">
                        <svg class="shrink-0 w-5 h-5 transition-colors" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap font-medium">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-3 py-2.5 rounded-lg transition-colors group"
                        style="color: var(--text-body);"
                        onmouseover="this.style.backgroundColor='var(--hover-bg)'; this.style.color='var(--accent-primary)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-body)';">
                        <svg class="shrink-0 w-5 h-5 transition-colors" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap font-medium">Sign In</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    {{-- Main content area --}}
    <div class="p-4 sm:ml-64 mt-14">
        <div class="p-4" style=" background-color: var(--bg-elevated);">
            <main class="flex-1 flex items-center justify-center" style="color: var(--text-heading);">
                @yield('admin_content')
            </main>
        </div>
    </div>

    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>

</html>
