<x-app-layout>
    <x-slot name="heaader">named header slot</x-slot>
        <div class="mx-auto flex min-h-screen max-w-5xl items-stretch px-4 py-8 sm:px-6 lg:px-10">
      <div class="flex w-full flex-col rounded-3xl border border-slate-700/60 bg-slate-950/80 shadow-2xl shadow-slate-950/80 overflow-hidden">
        <!-- Header -->
        <header class="flex flex-col gap-4 border-b border-slate-800/80 bg-slate-950/80 px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-7">
          <div class="flex items-center gap-3">
            <div class="h-10 w-10 rounded-2xl bg-linear-to-tr from-sky-400 via-emerald-400 to-violet-500 p-[2px] shadow-lg shadow-sky-500/40">
              <div class="flex h-full w-full items-center justify-center rounded-[0.9rem] bg-slate-950/95 text-xs font-semibold tracking-[0.18em] text-slate-100">
                KΛ
              </div>
            </div>
            <div>
              <h1 class="text-sm font-semibold uppercase tracking-[0.22em] text-slate-100">
                Kiro Laravel Skeleton
              </h1>
              <p class="text-xs text-slate-400">
                Local dev workspace with DDEV, Vite, and Tailwind – already running.
              </p>
            </div>
          </div>

          <div class="flex flex-wrap items-center gap-3">
            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-400/70 bg-emerald-500/15 px-3 py-1 text-xs font-medium text-emerald-100 shadow-md shadow-emerald-500/30">
              <span class="inline-block h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_12px_rgba(74,222,128,0.9)]"></span>
              Dev environment is live
            </div>
            <span class="hidden text-[11px] uppercase tracking-[0.18em] text-slate-500 sm:inline">
              Next step: Start building your app
            </span>
          </div>
        </header>

        <!-- Main -->
        <main class="grid flex-1 grid-cols-1 gap-4 px-5 py-5 sm:px-7 sm:py-7 lg:grid-cols-[1.35fr_minmax(0,1fr)] lg:gap-6">
          <!-- Left column -->
          <section class="flex flex-col gap-4">
            <!-- Hero -->
            <div class="relative overflow-hidden rounded-2xl border border-slate-700/70 bg-slate-900/80 p-4 sm:p-5">
              <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(56,189,248,0.20),_transparent_55%)]"></div>

              <div class="relative flex flex-col gap-4">
                <div class="inline-flex items-center gap-2 rounded-full border border-slate-600/80 bg-slate-950/80 px-2.5 py-1 text-[10px] font-semibold uppercase tracking-[0.22em] text-slate-300">
                  <span class="flex h-4 w-4 items-center justify-center rounded-full bg-sky-500/15 text-[0.6rem] text-sky-300">
                    ⚡
                  </span>
                  You’re ready to build
                </div>

                <div class="space-y-2">
                  <h2 class="text-xl font-semibold text-slate-50 sm:text-2xl">
                    Clean slate. Fast stack. Your app starts here.
                  </h2>
                  <p class="text-sm leading-relaxed text-slate-300 sm:text-[0.95rem]">
                    Laravel, DDEV, Vite, and Tailwind are already configured and running.
                    No boilerplate slog, no environment wrestling. Focus on features, not setup.
                  </p>
                </div>

                <div class="space-y-3 rounded-2xl border border-dashed border-slate-600/80 bg-slate-950/90 px-3.5 py-3 text-xs text-slate-200 sm:text-[0.8rem]">
                  <p class="font-medium text-slate-100">
                    Jump in by editing these files:
                  </p>
                  <ul class="grid gap-1.5 sm:grid-cols-2">
                    <li class="flex items-start gap-2">
                      <span class="mt-[3px] h-1.5 w-1.5 rounded-full bg-sky-400"></span>
                      <span>
                        <code class="rounded bg-slate-900/80 px-1.5 py-[1px] text-[0.72rem] text-amber-300/90">routes/web.php</code>
                        – first route, first response.
                      </span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="mt-[3px] h-1.5 w-1.5 rounded-full bg-sky-400"></span>
                      <span>
                        <code class="rounded bg-slate-900/80 px-1.5 py-[1px] text-[0.72rem] text-amber-300/90">resources/views</code>
                        – Blade views, layouts, components.
                      </span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="mt-[3px] h-1.5 w-1.5 rounded-full bg-sky-400"></span>
                      <span>
                        <code class="rounded bg-slate-900/80 px-1.5 py-[1px] text-[0.72rem] text-emerald-300/90">resources/css</code>
                        – Tailwind-powered styles.
                      </span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="mt-[3px] h-1.5 w-1.5 rounded-full bg-sky-400"></span>
                      <span>
                        <code class="rounded bg-slate-900/80 px-1.5 py-[1px] text-[0.72rem] text-sky-300/90">resources/js</code>
                        – Vite entrypoints and interactivity.
                      </span>
                    </li>
                  </ul>
                </div>

                <div class="flex flex-wrap gap-2 pt-1">
                  <div class="inline-flex items-center gap-2 rounded-full bg-sky-500 px-3 py-1.5 text-xs font-medium text-slate-950 shadow-md shadow-sky-500/40">
                    <span>Suggested first move:</span>
                    <code class="rounded bg-sky-600/80 px-1.5 py-[1px] text-[0.72rem]">
                      return view('welcome');
                    </code>
                  </div>
                  <div class="inline-flex items-center gap-2 rounded-full border border-slate-600/80 bg-slate-950/80 px-3 py-1.5 text-[0.75rem] text-slate-300">
                    <span class="rounded bg-slate-900 px-1.5 py-[1px] font-mono text-[0.7rem] text-sky-300">
                      php artisan route:list
                    </span>
                    <span class="text-slate-400">to inspect your HTTP surface</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Next steps -->
            <div class="rounded-2xl border border-slate-700/70 bg-slate-900/80 p-4 sm:p-5">
              <div class="mb-3 flex items-center justify-between gap-2">
                <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-100">
                  Next steps in your app
                </h3>
                <span class="rounded-full bg-slate-950/80 px-2.5 py-1 text-[0.7rem] uppercase tracking-[0.18em] text-slate-400">
                  Choose a direction
                </span>
              </div>

              <p class="mb-3 text-sm leading-relaxed text-slate-300">
                The skeleton keeps opinions light so you can be decisive. Pick a lane and start coding:
              </p>

              <ul class="space-y-2 text-sm text-slate-200">
                <li class="flex gap-2">
                  <span class="mt-1 inline-block h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                  <span>
                    Build out a feature flow in
                    <code class="rounded bg-slate-950 px-1.5 py-[1px] text-[0.75rem] text-emerald-300">
                      routes/web.php
                    </code>
                    with controller + view pairs.
                  </span>
                </li>
                <li class="flex gap-2">
                  <span class="mt-1 inline-block h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                  <span>
                    Create a base layout in
                    <code class="rounded bg-slate-950 px-1.5 py-[1px] text-[0.75rem] text-indigo-300">
                      resources/views/layouts
                    </code>
                    and wire it up with Blade components.
                  </span>
                </li>
                <li class="flex gap-2">
                  <span class="mt-1 inline-block h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                  <span>
                    Shape your UI system in
                    <code class="rounded bg-slate-950 px-1.5 py-[1px] text-[0.75rem] text-sky-300">
                      resources/css/app.css
                    </code>
                    using Tailwind utilities and small component classes.
                  </span>
                </li>
                <li class="flex gap-2">
                  <span class="mt-1 inline-block h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                  <span>
                    Add front-end behavior in
                    <code class="rounded bg-slate-950 px-1.5 py-[1px] text-[0.75rem] text-sky-300">
                      resources/js/app.js
                    </code>
                    with Vite hot module reloading active.
                  </span>
                </li>
              </ul>
            </div>

            <!-- Closing -->
            <div class="rounded-2xl border border-slate-700/70 bg-slate-900/80 px-4 py-3.5 sm:px-5">
              <p class="text-sm leading-relaxed text-slate-200">
                The heavy lifting is already handled: Dockerized local stack, asset pipeline,
                and styling system are online.
                <span class="font-medium text-sky-300">From here, every line you add moves the real app forward.</span>
              </p>
            </div>
          </section>

          <!-- Right column: docs/resources -->
          <aside class="flex flex-col gap-4">
            <!-- Docs -->
            <section class="rounded-2xl border border-slate-700/70 bg-slate-900/80 p-4 sm:p-5">
              <div class="mb-3 flex items-center justify-between gap-2">
                <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-100">
                  Core docs
                </h3>
                <span class="rounded-full bg-slate-950/80 px-2.5 py-1 text-[0.7rem] uppercase tracking-[0.18em] text-slate-400">
                  Read as you build
                </span>
              </div>

              <ul class="space-y-2.5 text-sm">
                <li>
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-medium text-slate-50">Laravel docs</span>
                    <span class="rounded-full bg-emerald-500/15 px-2 py-[2px] text-[0.65rem] text-emerald-300">
                      Framework
                    </span>
                  </div>
                  <p class="text-xs text-slate-400">
                    <a href="https://laravel.com/docs" target="_blank" rel="noreferrer" class="text-sky-300 hover:text-sky-200 hover:underline">
                      https://laravel.com/docs
                    </a><br />
                    Everything from routing to queues, directly from the source.
                  </p>
                </li>

                <li>
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-medium text-slate-50">Laravel + Vite</span>
                    <span class="rounded-full bg-sky-500/15 px-2 py-[2px] text-[0.65rem] text-sky-300">
                      Assets
                    </span>
                  </div>
                  <p class="text-xs text-slate-400">
                    <a href="https://laravel.com/docs/vite" target="_blank" rel="noreferrer" class="text-sky-300 hover:text-sky-200 hover:underline">
                      https://laravel.com/docs/vite
                    </a><br />
                    Asset compilation, hot reloading, and environment handling.
                  </p>
                </li>

                <li>
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-medium text-slate-50">Tailwind CSS</span>
                    <span class="rounded-full bg-indigo-500/15 px-2 py-[2px] text-[0.65rem] text-indigo-300">
                      Styling
                    </span>
                  </div>
                  <p class="text-xs text-slate-400">
                    <a href="https://tailwindcss.com/docs" target="_blank" rel="noreferrer" class="text-sky-300 hover:text-sky-200 hover:underline">
                      https://tailwindcss.com/docs
                    </a><br />
                    Utility classes, layout recipes, and best practices.
                  </p>
                </li>

                <li>
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-medium text-slate-50">Vite</span>
                    <span class="rounded-full bg-sky-500/15 px-2 py-[2px] text-[0.65rem] text-sky-300">
                      Bundler
                    </span>
                  </div>
                  <p class="text-xs text-slate-400">
                    <a href="https://vitejs.dev/guide/" target="_blank" rel="noreferrer" class="text-sky-300 hover:text-sky-200 hover:underline">
                      https://vitejs.dev/guide/
                    </a><br />
                    How Vite thinks about dev server, builds, and code splitting.
                  </p>
                </li>
              </ul>
            </section>

            <!-- DDEV & extras -->
            <section class="rounded-2xl border border-slate-700/70 bg-slate-900/80 p-4 sm:p-5">
              <div class="mb-3 flex items-center justify-between gap-2">
                <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-100">
                  Environment & extras
                </h3>
                <span class="rounded-full bg-slate-950/80 px-2.5 py-1 text-[0.7rem] uppercase tracking-[0.18em] text-slate-400">
                  Under the hood
                </span>
              </div>

              <ul class="space-y-2.5 text-sm">
                <li>
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-medium text-slate-50">DDEV docs</span>
                    <span class="rounded-full bg-amber-500/15 px-2 py-[2px] text-[0.65rem] text-amber-300">
                      Local stack
                    </span>
                  </div>
                  <p class="text-xs text-slate-400">
                    <a href="https://ddev.readthedocs.io" target="_blank" rel="noreferrer" class="text-sky-300 hover:text-sky-200 hover:underline">
                      https://ddev.readthedocs.io
                    </a><br />
                    Containers, routing, database tools, SSL, and automation.
                  </p>
                </li>

                <li>
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-medium text-slate-50">Laravel starter kits</span>
                    <span class="rounded-full bg-emerald-500/15 px-2 py-[2px] text-[0.65rem] text-emerald-300">
                      Auth
                    </span>
                  </div>
                  <p class="text-xs text-slate-400">
                    <a href="https://laravel.com/docs/starter-kits" target="_blank" rel="noreferrer" class="text-sky-300 hover:text-sky-200 hover:underline">
                      https://laravel.com/docs/starter-kits
                    </a><br />
                    Breeze and friends for quickly adding authentication scaffolding.
                  </p>
                </li>

                <li>
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-medium text-slate-50">PHP manual</span>
                    <span class="rounded-full bg-slate-500/20 px-2 py-[2px] text-[0.65rem] text-slate-200">
                      Language
                    </span>
                  </div>
                  <p class="text-xs text-slate-400">
                    <a href="https://www.php.net/manual/en/" target="_blank" rel="noreferrer" class="text-sky-300 hover:text-sky-200 hover:underline">
                      https://www.php.net/manual/en/
                    </a><br />
                    Function reference, language details, and edge-case behavior.
                  </p>
                </li>
              </ul>
            </section>

            <!-- Makefile / tooling hint (optional content) -->
            <section class="rounded-2xl border border-slate-700/70 bg-slate-900/80 px-4 py-3.5 sm:px-5">
              <p class="text-xs leading-relaxed text-slate-300">
                Your workspace likely includes helpful
                <span class="font-mono text-[0.7rem] text-sky-300">make</span>
                commands for routine tasks (starting services, running tests, refreshing databases).
                Run
                <span class="font-mono text-[0.7rem] text-emerald-300">
                  make help
                </span>
                or inspect the <span class="font-mono text-[0.7rem] text-sky-300">Makefile</span>
                to discover what’s already automated for you.
              </p>
            </section>
          </aside>
        </main>
      </div>
    </div>
</x-app-layout>
