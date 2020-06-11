<div class="padding-component hide@md no-js:is-hidden">
  <button class="btn btn--primary" aria-controls="sidebar">Show sidebar</button>
</div>

<div class="flex@md">
  <aside class="sidebar sidebar--static@md js-sidebar" data-static-class="position-relative z-index-1 flex-grow max-width-xxxxs border-right" id="sidebar" aria-labelledby="sidebarTitle">
    <div class="sidebar__panel">
      <header class="sidebar__header z-index-2">
        <h1 class="text-md text-truncate" id="sidebarTitle">Sidebar title</h1>
  
        <button class="reset sidebar__close-btn js-sidebar__close-btn js-tab-focus">
          <svg class="icon" viewBox="0 0 16 16"><title>Close panel</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
        </button>
      </header>
      
      <div class="position-relative z-index-1">
        <!-- start sidebar content -->
        <div class="text-component padding-md">
          <p>Sidebar content.</p>
        </div>
        <!-- end sidebar content -->
      </div>
    </div>
  </aside>
  
  <main class="position-relative z-index-1 flex-grow height-100vh">
    <!-- start main content -->
    <div class="text-component padding-md">
      <p>Main content.</p>
    </div>
    <!-- end main content -->
  </main>
</div>