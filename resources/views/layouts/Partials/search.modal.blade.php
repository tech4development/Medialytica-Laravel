
<!-- ========== Search Modal ========== -->
<div id="search-modal" class="hs-overlay ti-modal hidden">
    @yield('search-modal')
  <div class="ti-modal-box">
    <div class="ti-modal-content">
      <div class="ti-modal-body">
        <div class="header-search">
          <label for="icon" class="sr-only">Search</label>
          <div class="relative">
            <div class="search-btn">
              <i class="ri ri-search-2-line search-btn-icon"></i>
            </div>
            <input type="text" id="icon" name="icon" class="py-2 ltr:pl-11 rtl:pr-11 ti-form-input focus:z-10"
              placeholder="Search">
            <div class="voice-search">
              <i class="ri ri-mic-2-line voice-btn-icon"></i>
            </div>
            <div class="search-dropdown">
              <i class="ri ri-more-2-line search-dropdown-btn-icon"></i>
            </div>
          </div>
        </div>

      </div>
      <div class="ti-modal-footer">
        <div class="inline-flex rounded-md shadow-sm">
          <button type="button" class="ti-btn-group py-1 ti-btn-soft-primary dark:border-white/10">
            Search
          </button>
          <button type="button" class="ti-btn-group py-1 ti-btn-primary dark:border-white/10">
            Clear Recents
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ========== END Search Modal ========== -->
